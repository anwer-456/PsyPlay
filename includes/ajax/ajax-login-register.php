<?php
/**
 * WordPress AJAX Login and Register without a Plugin
 * Author: Leo
 * URL: http://wpsites.org/?p=10835
 */

# 	
# 	USER REGISTRATION/LOGIN MODAL
# 	========================================================================================
#   Attach this function to the footer if the user isn't logged in
# 	========================================================================================
# 		

function pt_login_register_modal() {

		// only show the registration/login form to non-logged-in members
	if( ! is_user_logged_in() ){ 
?>
<div class="modal fade modal-cuz" id="pt-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" data-active-tab="">
        <div class="modal-content">
					<div class="modal-body">
						
						<?php

							if( get_option('users_can_register') ){ ?>

								<!-- Register form -->
								<div class="pt-register">
							 
							 	<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i>
                </button>
                <h4 class="modal-title" id="myModalLabel"><?php printf( __('You are welcome', 'psythemes'), get_bloginfo('name') ); ?></h4>
            </div>
  <p class="desc"><?php _e('When becoming members of the site, you could use the full range of functions and enjoy the most exciting films.', 'psythemes'); ?></p>

									<form id="pt_registration_form" action="<?php echo home_url( '/' ); ?>" method="POST">

										<div class="block">
																						<input class="form-control   required" name="pt_user_login" type="text" placeholder="<?php _e('Username', 'psythemes'); ?>"/>
										</div>
										<div class="block">
											
											<input class="form-control   required" name="pt_user_email" id="pt_user_email" type="email" placeholder="<?php _e('Email', 'psythemes'); ?>"/>
										</div>

										<div class="block">
											<input type="hidden" name="action" value="pt_register_member"/>
											
										</div>
										<button class="btn btn-theme btn-lg btn btn-block btn-successful btn-approve mt10" data-loading-text="<?php _e('Loading...', 'psythemes') ?>" type="submit"><?php _e('Register', 'psythemes'); ?></button>
										<?php wp_nonce_field( 'ajax-login-nonce', 'register-security' ); ?>
									</form>
									<div class="pt-errors"></div>
								</div>

								<!-- Login form -->
								<div class="pt-login">
							 
									<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i>
                </button>
                <h4 class="modal-title" id="myModalLabel"><?php _e('Member Login Area', 'psythemes'); ?></h4>
            </div>
							  <p class="desc"><?php _e('Watch HD Movies Online For Free and Download the latest movies. For everybody,
                    everywhere, everydevice, and everything ;)', 'psythemes');?></p>
									<form id="pt_login_form" action="<?php echo home_url( '/' ); ?>" method="post">

										<div class="block">
											
											<input class="form-control   required" name="pt_user_login" type="text" placeholder="<?php _e('Username or Email', 'psythemes'); ?>"/>
										</div>
										<div class="block">
											
											<input class="form-control   required" name="pt_user_pass" id="pt_user_pass" type="password" placeholder="<?php _e('Password', 'psythemes'); ?>"/>
										</div>
										<!--<div class="block mt10 small" style="float:left;margin-top:0!important;">
										<input name="rememberme" type="checkbox" id="rememberme" value="forever">
        <label for="rememberme"><?php _e('Remember Me', 'psythemes'); ?></label> 
		</div>-->
										<input type="hidden" name="action" value="pt_login_member"/>
										<div class="pull-right" style="margin-bottom:10px;">
											<a id="open-forgot" class="alignright" href="#pt-reset-password" style="font-size: 85%;"><?php _e('Forgot Password?', 'psythemes') ?></a>
										</div>
										<button class="btn btn-theme btn-lg btn btn-block btn-successful btn-approve mt10" data-loading-text="<?php _e('Loading...', 'psythemes') ?>" type="submit"><?php _e('Login', 'psythemes'); ?></button> 
										<?php echo do_shortcode('[nextend_social_login provider="google"]'); ?>
										<?php wp_nonce_field( 'ajax-login-nonce', 'login-security' ); ?>
									</form>
									<div class="pt-errors"></div>
								</div>

								<!-- Lost Password form -->
								<div class="pt-reset-password">
							 <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i>
                </button>
                <h4 class="modal-title" id="myModalLabel"><?php printf( __('Forgot Password', 'psythemes'), get_bloginfo('name') ); ?></h4>
            </div>
								
							 <p class="desc"><?php _e('We will send a new password to your email. Please fill your email to form below.', 'psythemes');?></p>
									<form id="pt_reset_password_form" action="<?php echo home_url( '/' ); ?>" method="post">
										<div class="block">
																						<input class="form-control   required" name="pt_user_or_email" id="pt_user_or_email" type="text" placeholder="<?php _e('Username or Email', 'psythemes'); ?>"/>
										</div>
										<div class="block">
											<input type="hidden" name="action" value="pt_reset_password"/>
											<button class="btn btn-theme btn-lg btn btn-block btn-successful btn-approve mt10" data-loading-text="<?php _e('Loading...', 'psythemes') ?>" type="submit"><?php _e('Submit', 'psythemes'); ?></button>
										</div>
										<?php wp_nonce_field( 'ajax-login-nonce', 'password-security' ); ?>
									</form>
									<div class="pt-errors"></div>
								</div>

								<div class="pt-loading">
									<p><i class="fa fa-refresh fa-spin"></i><br><?php _e('Loading...', 'psythemes') ?></p>
								</div><?php

							} else {
								echo '<h3>'.__('Login access is disabled', 'psythemes').'</h3>';
							} ?>
					</div>
					<div class="modal-footer">
							<span class="pt-register-footer"><?php _e('Not a member yet?', 'psythemes'); ?> <a href="#pt-register"><?php _e('Join Now', 'psythemes'); ?></a></span>
							<span class="pt-login-footer"><a href="#pt-login" style="color:#888;"><i class="fa fa-chevron-left mr10"></i> <?php _e('Back to login', 'psythemes'); ?></a></span>
					</div>				
				</div>
			</div>
		</div>
<?php
	}
}
add_action('wp_footer', 'pt_login_register_modal');




# 	
# 	AJAX FUNCTION
# 	========================================================================================
#   These function handle the submitted data from the login/register modal forms
# 	========================================================================================
# 		

// LOGIN
function pt_login_member(){

  		// Get variables
		$user_login		= $_POST['pt_user_login'];	
		$user_pass		= $_POST['pt_user_pass'];


		// Check CSRF token
		if( !check_ajax_referer( 'ajax-login-nonce', 'login-security', false) ){
			echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.__('Session token has expired, please reload the page and try again', 'psythemes').'</div>'));
		}
	 	
	 	// Check if input variables are empty
	 	elseif( empty($user_login) || empty($user_pass) ){
			echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.__('Please fill all form fields', 'psythemes').'</div>'));
	 	} else { // Now we can insert this account

	 		$user = wp_signon( array('user_login' => $user_login, 'user_password' => $user_pass), false );

		    if( is_wp_error($user) ){
				echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.$user->get_error_message().'</div>'));
			} else{
				echo json_encode(array('error' => false, 'message'=> '<div class="alert alert-success">'.__('Login successful, reloading page...', 'psythemes').'</div>'));
			}
	 	}

	 	die();
}
add_action('wp_ajax_nopriv_pt_login_member', 'pt_login_member');



// REGISTER
function pt_register_member(){

  		// Get variables
		$user_login	= $_POST['pt_user_login'];	
		$user_email	= $_POST['pt_user_email'];
		
		// Check CSRF token
		if( !check_ajax_referer( 'ajax-login-nonce', 'register-security', false) ){
			echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.__('Session token has expired, please reload the page and try again', 'psythemes').'</div>'));
			die();
		}
	 	
	 	// Check if input variables are empty
	 	elseif( empty($user_login) || empty($user_email) ){
			echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.__('Please fill all form fields', 'psythemes').'</div>'));
			die();
	 	}
		
		$errors = register_new_user($user_login, $user_email);	
		
		if( is_wp_error($errors) ){

			$registration_error_messages = $errors->errors;

			$display_errors = '<div class="alert alert-danger">';
			
				foreach($registration_error_messages as $error){
					$display_errors .= '<p>'.$error[0].'</p>';
				}

			$display_errors .= '</div>';

			echo json_encode(array('error' => true, 'message' => $display_errors));

		} else {
			echo json_encode(array('error' => false, 'message' => '<div class="alert alert-success">'.__( 'Registration complete. Please check your e-mail.', 'psythemes').'</p>'));
		}
	 

	 	die();
}
add_action('wp_ajax_nopriv_pt_register_member', 'pt_register_member');


// RESET PASSWORD
function pt_reset_password(){

		
  		// Get variables
		$username_or_email = $_POST['pt_user_or_email'];

		// Check CSRF token
		if( !check_ajax_referer( 'ajax-login-nonce', 'password-security', false) ){
			echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.__('Session token has expired, please reload the page and try again', 'psythemes').'</div>'));
		}		

	 	// Check if input variables are empty
	 	elseif( empty($username_or_email) ){
			echo json_encode(array('error' => true, 'message'=> '<div class="alert alert-danger">'.__('Please fill all form fields', 'psythemes').'</div>'));
	 	} else {

			$username = is_email($username_or_email) ? sanitize_email($username_or_email) : sanitize_user($username_or_email);

			$user_forgotten = pt_lostPassword_retrieve($username);
			
			if( is_wp_error($user_forgotten) ){
			
				$lostpass_error_messages = $user_forgotten->errors;

				$display_errors = '<div class="alert alert-warning">';
				foreach($lostpass_error_messages as $error){
					$display_errors .= '<p>'.$error[0].'</p>';
				}
				$display_errors .= '</div>';
				
				echo json_encode(array('error' => true, 'message' => $display_errors));
			}else{
				echo json_encode(array('error' => false, 'message' => '<p class="alert alert-success">'.__('Password Reset. Please check your email.', 'psythemes').'</p>'));
			}
	 	}

	 	die();
}	
add_action('wp_ajax_nopriv_pt_reset_password', 'pt_reset_password');


function pt_lostPassword_retrieve( $user_data ) {
		
		global $wpdb, $current_site, $wp_hasher;

		$errors = new WP_Error();

		if( empty($user_data) ){
			$errors->add( 'empty_username', __( 'Please enter a username or e-mail address.', 'psythemes' ) );
		} elseif( strpos($user_data, '@') ){
			$user_data = get_user_by( 'email', trim( $user_data ) );
			if( empty($user_data)){
				$errors->add( 'invalid_email', __( 'There is no user registered with that email address.', 'psythemes'  ) );
			}
		} else {
			$login = trim( $user_data );
			$user_data = get_user_by('login', $login);
		}

		if( $errors->get_error_code() ){
			return $errors;
		}

		if( !$user_data ){
			$errors->add('invalidcombo', __('Invalid username or e-mail.', 'psythemes'));
			return $errors;
		}

		$user_login = $user_data->user_login;
		$user_email = $user_data->user_email;

		do_action('retrieve_password', $user_login);

		$allow = apply_filters('allow_password_reset', true, $user_data->ID);

		if( !$allow ){
			return new WP_Error( 'no_password_reset', __( 'Password reset is not allowed for this user', 'psythemes' ) );
		} elseif ( is_wp_error($allow) ){
			return $allow;
		}

		$key = wp_generate_password(20, false);

		do_action('retrieve_password_key', $user_login, $key);

		if(empty($wp_hasher)){
			require_once ABSPATH.'wp-includes/class-phpass.php';
			$wp_hasher = new PasswordHash(8, true);
		}

		$hashed = $wp_hasher->HashPassword($key);

		$wpdb->update($wpdb->users, array('user_activation_key' => $hashed), array('user_login' => $user_login));
		
		$message = __('Someone requested that the password be reset for the following account:', 'psythemes' ) . "\r\n\r\n";
		$message .= network_home_url( '/' ) . "\r\n\r\n";
		$message .= sprintf( __( 'Username: %s', 'psythemes' ), $user_login ) . "\r\n\r\n";
		$message .= __('If this was a mistake, just ignore this email and nothing will happen.', 'psythemes' ) . "\r\n\r\n";
		$message .= __('To reset your password, visit the following address:', 'psythemes' ) . "\r\n\r\n";
		$message .= '<' . network_site_url( "wp-login.php?action=rp&key=$key&login=" . rawurlencode( $user_login ), 'login' ) . ">\r\n\r\n";
		
		if ( is_multisite() ) {
			$blogname = $GLOBALS['current_site']->site_name;
		} else {
			$blogname = wp_specialchars_decode( get_option( 'blogname' ), ENT_QUOTES );
		}

		$title   = sprintf( __( '[%s] Password Reset', 'psythemes' ), $blogname );
		$title   = apply_filters( 'retrieve_password_title', $title );
		$message = apply_filters( 'retrieve_password_message', $message, $key );

		if ( $message && ! wp_mail( $user_email, $title, $message ) ) {
			$errors->add( 'noemail', __( 'The e-mail could not be sent.<br />Possible reason: your host may have disabled the mail() function.', 'psythemes' ) );

			return $errors;

			wp_die();
		}

		return true;
}

function ajax_login_scripts() {

		wp_enqueue_script( 'ajax-login-register-script', get_template_directory_uri() . '/js/user-login.js', array( 'jquery' ), null, true );

	wp_localize_script('ajax-login-register-script', 'ptajax', array( 
			    	'ajaxurl' => admin_url( 'admin-ajax.php' ),
			    ));
}
add_action( 'wp_enqueue_scripts', 'ajax_login_scripts' );

/**
 * Automatically add a Login link to Primary Menu
 */
add_filter( 'wp_nav_menu_items', 'pt_login_link_to_menu', 10, 2 );
function pt_login_link_to_menu ( $items, $args ) {
    if( ! is_user_logged_in() && $args->theme_location == apply_filters('login_menu_location', 'primary') ) {
        $items .= '<li class="menu-item login-link"><a href="#pt-login">'.__( 'Login/Register', 'psythemes' ).'</a></li>';
    }
    return $items;
}