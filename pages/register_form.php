<?php

// user registration login form
function psy_registration_form() {
 
	// only show the registration form to non-logged-in members
	if(!is_user_logged_in()) {
 
		global $psy_load_css;
 
		// set this to true so the CSS is loaded
		$psy_load_css = true;
 
		// check to make sure user registration is enabled
		$registration_enabled = get_option('users_can_register');
 
		// only show the registration form if allowed
		if($registration_enabled) {
			$output = psy_registration_form_fields();
		} else {
			$output = __('User registration is not enabled');
		}
		return $output;
	}
}
add_shortcode('register_form', 'psy_registration_form'); 











// registration form fields
function psy_registration_form_fields() {
 
	ob_start(); ?>	


 <div class="psy_reg_container">
		<form id="psy_registration_form" class="psy_form" action="" method="POST">
			<fieldset>
				<p>
					<input name="psy_user_login" id="psy_user_login" class="required" type="text" placeholder="<?php _e('Username'); ?>"/>
				</p>
				<p>
					<input name="psy_user_email" id="psy_user_email" class="required" type="email" placeholder="<?php _e('Email@email.com'); ?>"/>
				</p>
				<p>
					<input name="psy_user_first" id="psy_user_first" type="text" placeholder="<?php _e('First Name (Optional)'); ?>"/>
				</p>
				<p>
					<input name="psy_user_last" id="psy_user_last" type="text" placeholder="<?php _e('Last Name (Optional)'); ?>"/>
				</p>
				<p>
					<input name="psy_user_pass" id="password" class="required" type="password" placeholder="<?php _e('Password'); ?>"/>
				</p>
				<p>
					<input name="psy_user_pass_confirm" id="password_again" class="required" type="password" placeholder="<?php _e('Confirm Password'); ?>"/>
				</p>
				<div class="g-recaptcha" data-sitekey="<?php echo get_option('public_key_rcth'); ?>"></div>
				<p>
					<input type="hidden" name="psy_register_nonce" value="<?php echo wp_create_nonce('psy-register-nonce'); ?>"/>
					<input type="submit" class="btn btn-successful" value="<?php _e('Create Account'); ?>"/>
				</p>
			</fieldset>
		</form>
			<hr class="reg-sep">
		<p class="reg_already">
   <?php _e('Have an account already?');?> <a href="<?php echo get_option('account_page');?>?action=login"> <?php _e('Sign In!');?></a></p>
</div>
	<?php
	return ob_get_clean();
}











// logs a member in after submitting a form
function psy_login_member() {
		
	if(isset($_POST['psy_user_login']) && wp_verify_nonce($_POST['psy_login_nonce'], 'psy-login-nonce')) {
				
		// this returns the user ID and other info from the user name
		$user = get_userdatabylogin($_POST['psy_user_login']);
		
		if(!$user) {
			// if the user name doesn't exist
			psy_errors()->add('empty_username', __('Invalid username'));
		}
		
		if(!isset($_POST['psy_user_pass']) || $_POST['psy_user_pass'] == '') {
			// if no password was entered
			psy_errors()->add('empty_password', __('Please enter a password'));
		}
				
		// check the user's login with their password
		if(!wp_check_password($_POST['psy_user_pass'], $user->user_pass, $user->ID)) {
			// if the password is incorrect for the specified user
			psy_errors()->add('empty_password', __('Incorrect password'));
		}
		
		// retrieve all error messages
		$errors = psy_errors()->get_error_messages();
		
		// only log the user in if there are no errors
		if(empty($errors)) {
			
			wp_setcookie($_POST['psy_user_login'], $_POST['psy_user_pass'], true);
			wp_set_current_user($user->ID, $_POST['psy_user_login']);	
			do_action('wp_login', $_POST['psy_user_login']);
			
			wp_redirect(home_url()); exit;
		}
	}
}
add_action('init', 'psy_login_member');
















// register a new user
function psy_add_new_member() {
  	if (isset( $_POST["psy_user_login"] ) && wp_verify_nonce($_POST['psy_register_nonce'], 'psy-register-nonce')) {
		require_once "recaptcha/recaptchalib.php";
$siteKey = get_option('public_key_rcth'); 
$secret = get_option('private_key_rcth');
$resp = null;
$error = null;
$reCaptcha = new ReCaptcha($secret);
		$user_login		= $_POST["psy_user_login"];	
		$user_email		= $_POST["psy_user_email"];
		$user_first 	= $_POST["psy_user_first"];
		$user_last	 	= $_POST["psy_user_last"];
		$user_pass		= $_POST["psy_user_pass"];
		$pass_confirm 	= $_POST["psy_user_pass_confirm"];
 
		// this is required for username checks
		require_once(ABSPATH . WPINC . '/registration.php');
 
 if ($_POST["g-recaptcha-response"]) {
$resp = $reCaptcha->verifyResponse(
$_SERVER["REMOTE_ADDR"],
$_POST["g-recaptcha-response"] ); }

 if ($resp != null && $resp->success) {
 }else {
	 psy_errors()->add('recaptcha_error', __('reCaptcha Error'));
 }
 
 
		if(username_exists($user_login)) {
			// Username already registered
			psy_errors()->add('username_unavailable', __('Username already taken'));
		}
		if(!validate_username($user_login)) {
			// invalid username
			psy_errors()->add('username_invalid', __('Invalid username'));
		}
		if($user_login == '') {
			// empty username
			psy_errors()->add('username_empty', __('Please enter a username'));
		}
		if(!is_email($user_email)) {
			//invalid email
			psy_errors()->add('email_invalid', __('Invalid email'));
		}
		if(email_exists($user_email)) {
			//Email address already registered
			psy_errors()->add('email_used', __('Email already registered'));
		}
		if($user_pass == '') {
			// passwords do not match
			psy_errors()->add('password_empty', __('Please enter a password'));
		}
		if($user_pass != $pass_confirm) {
			// passwords do not match
			psy_errors()->add('password_mismatch', __('Passwords do not match'));
		}
 
		$errors = psy_errors()->get_error_messages();
 
		// only create the user in if there are no errors
				if(empty($errors) && $resp != null && $resp->success ) {
 
			$new_user_id = wp_insert_user(array(
					'user_login'		=> $user_login,
					'user_pass'	 		=> $user_pass,
					'user_email'		=> $user_email,
					'first_name'		=> $user_first,
					'last_name'			=> $user_last,
					'user_registered'	=> date('Y-m-d H:i:s'),
					'role'				=> 'subscriber'
				)
			);
			
			
					
			if($new_user_id) {
				// send an email to the admin alerting them of the registration
				wp_new_user_notification($new_user_id);
				  $new_user = wp_insert_user( $new_user_id );
					wp_new_user_notification($new_user, $user_pass);
 
				// log the new user in
				wp_setcookie($user_login, $user_pass, true);
				wp_set_current_user($new_user_id, $user_login);	
				do_action('wp_login', $user_login);
 
				// send the newly created user to the home page after logging them in
				wp_redirect(home_url()); exit;
			}
 
		}
		
 
	}
}
add_action('init', 'psy_add_new_member');













// used for tracking error messages
function psy_errors(){
    static $wp_error; // Will hold global variable safely
    return isset($wp_error) ? $wp_error : ($wp_error = new WP_Error(null, null, null));
}

















// displays error messages from form submissions
function psy_show_error_messages() {
	if($codes = psy_errors()->get_error_codes()) {
		echo '<div class="psy_errors">';
		    // Loop error codes and display errors
		   foreach($codes as $code){
		        $message = psy_errors()->get_error_message($code);
		        echo '<div class="alert alert-warning" style="border-radius: 0;"><span class="error"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <strong>' . __('Error') . '</strong>: ' . $message . '</span></div>';
		    }
		echo '</div>';
	}	
}
















?>