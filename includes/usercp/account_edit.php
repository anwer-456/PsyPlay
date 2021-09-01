<?php
global $current_user, $wp_roles;
get_currentuserinfo();
$user_id = get_current_user_id();
$first_name = get_user_meta($user_id, 'first_name', true);
$last_name = get_user_meta($user_id, 'last_name', true);
$display_name = $current_user->display_name;
require_once (ABSPATH . WPINC . '/registration.php');
$error = array();
if ('POST' == $_SERVER['REQUEST_METHOD'] && !empty($_POST['action']) && $_POST['action'] == 'update-user')
{
	if (!empty($_POST['pass1']) && !empty($_POST['pass2']))
	{
		if ($_POST['pass1'] == $_POST['pass2']) wp_update_user(array(
			'ID' => $current_user->ID,
			'user_pass' => esc_attr($_POST['pass1'])
		));
		else $error[] = __('The passwords you entered do not match.  Your password was not updated.', 'mtms');
	}
	if (!empty($_POST['url'])) wp_update_user(array(
		'ID' => $current_user->ID,
		'user_url' => esc_attr($_POST['url'])
	));
	if (!empty($_POST['email']))
	{
		if (!is_email(esc_attr($_POST['email']))) $error[] = __('The Email you entered is not valid.  please try again.', 'mtms');
		elseif (email_exists(esc_attr($_POST['email'])) != $current_user->id) $error[] = __('This email is already used by another user.  try a different one.', 'mtms');
		else
		{
			wp_update_user(array(
				'ID' => $current_user->ID,
				'user_email' => esc_attr($_POST['email'])
			));
		}
	}
	if (!empty($_POST['first-name'])) update_user_meta($current_user->ID, 'first_name', esc_attr($_POST['first-name']));
	if (!empty($_POST['last-name'])) update_user_meta($current_user->ID, 'last_name', esc_attr($_POST['last-name']));
	if (!empty($_POST['facebook'])) update_user_meta($current_user->ID, 'facebook', esc_attr($_POST['facebook']));
	if (!empty($_POST['twitter'])) update_user_meta($current_user->ID, 'twitter', esc_attr($_POST['twitter']));
	if (!empty($_POST['googleplus'])) update_user_meta($current_user->ID, 'googleplus', esc_attr($_POST['googleplus']));
	if (!empty($_POST['display_name'])) wp_update_user(array(
		'ID' => $current_user->ID,
		'display_name' => esc_attr($_POST['display_name'])
	));
	update_user_meta($current_user->ID, 'display_name', esc_attr($_POST['display_name']));
	if (!empty($_POST['description'])) update_user_meta($current_user->ID, 'description', esc_attr($_POST['description']));
	if (count($error) == 0)
	{
		do_action('edit_user_profile_update', $current_user->ID);
		wp_redirect(get_permalink() . '?action=edit&updated=true');
		exit;
	}
} get_header(); ?>
<div class="header-pad"></div>
<div id="main" class="page-detail page-profiles">
<div class="container">
<div class="pad"></div>
<div class="main-content main-detail">
<?php if(get_option("notice_location") == "global" ){?>
<?php get_template_part('includes/aviso'); ?>
<?php }?>
<div id="bread">
<ol class="breadcrumb">
<li><a href<?php bloginfo('url'); ?>"><?php _e('Home','psythemes'); ?></a></li>
<li><?php _e('User','psythemes'); ?></li>
<li class="active"><?php _e('Edit Profile','psythemes'); ?></li>
</ol>
</div>
			
<?php if ( !is_user_logged_in() ) : ?>
			<div class="alert alert-warning" style="margin-bottom: 0; border-radius: 0;">
<i class="fa fa-warning mr5"></i> <b><?php _e('You are either not logged in or do not have permission to view this page.', 'psythemes'); ?></b>
</div>
<!-- .warning -->
<?php else : ?>
<?php if ( count($error) > 0 ) echo '<p class="error">' . implode("<br />", $error) . '</p>'; ?>
<div class="profiles-wrap">
<div class="sidebar">
<div class="sidebar-menu">
<div class="sb-title"><i class="fa fa-navicon mr5"></i> <?php _e('Menu','psythemes'); ?></div>
<ul>
<li <?php echo $_GET['action'] == 'profile' ? 'class="active"' : ''; ?>>
<a href="<?php the_permalink(); ?>?action=profile">
<i class="fa fa-user mr5"></i> <?php _e('Profile','psythemes'); ?>
</a>
</li>
<li <?php echo $_GET['action'] == 'favorites' ? 'class="active"' : ''; ?>>
<a href="<?php the_permalink(); ?>?action=favorites">
<i class="fa fa-heart mr5"></i> <?php _e('My Favorites','psythemes'); ?>
</a>
</li>
<li <?php echo $_GET['action'] == 'edit' ? 'class="active"' : ''; ?>>
<a href="<?php the_permalink(); ?>?action=edit">
<i class="fa fa-pencil mr5"></i> <?php _e('Update Profile','psythemes'); ?>
</a>
</li>
</ul>
</div>
</div>
<div class="pp-main">
<div class="ppm-head">
<div class="ppmh-title"><i class="fa fa-pencil-square-o mr5"></i> <?php _e('Update Profile','psythemes'); ?></div>
</div>
<div class="ppm-content update-content">
<?php if ( $_GET['updated'] == 'true' ) : ?> 
			<div id="message" class="updated"><p><i class="fa fa-check-circle" aria-hidden="true"></i>
 <?php _e('Your profile has been updated.','mtms'); ?></p></div> 
			<?php endif; ?>
<div class="uc-form">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<form id="profile-form" action="<?php the_permalink(); ?>?action=edit" method="POST" class="form-horizontal">

<div class="form-group">
<label for="username" class="col-sm-4 control-label"><?php _e('User', 'psythemes'); ?></label>
<div class="col-sm-8">
<input type="text" readonly="" class="form-control" id="username" value="<?php global $current_user; get_currentuserinfo(); echo $current_user->user_login; ?>">
</div>
</div>
<div class="form-group">
<label for="full_name" class="col-sm-4 control-label"><?php _e('First Name','psythemes'); ?></label>
<div class="col-sm-8">
<input class="text-input form-control" name="first-name" type="text" id="first-name" value="<?php the_author_meta( 'first_name', $current_user->ID ); ?>" />
<span id="error-full_name" class="help-block error-block"></span>
</div>
</div>
<div class="form-group">
<label for="full_name" class="col-sm-4 control-label"><?php _e('Last name','psythemes'); ?></label>
<div class="col-sm-8">
<input class="text-input form-control" name="last-name" type="text" id="last-name" value="<?php the_author_meta( 'last_name', $current_user->ID ); ?>" />
<span id="error-full_name" class="help-block error-block"></span>
</div>
</div>
 
<div class="form-group">
<label for="facebook" class="col-sm-4 control-label"><?php _e('Facebook', 'psythemes'); ?></label>
<div class="col-sm-8">
<input class="text-input form-control" name="facebook" type="text" id="facebook" value="<?php the_author_meta( 'facebook', $current_user->ID ); ?>" />
</div>
</div>

<div class="form-group">
<label for="facebook" class="col-sm-4 control-label"><?php _e('Twitter', 'psythemes'); ?></label>
<div class="col-sm-8">
<input class="text-input form-control" name="twitter" type="text" id="twitter" value="<?php the_author_meta( 'twitter', $current_user->ID ); ?>" />
</div>
</div>
				
<div class="form-group">
<label for="facebook" class="col-sm-4 control-label"><?php _e('Google+', 'psythemes'); ?></label>
<div class="col-sm-8">
<input class="text-input form-control" name="googleplus" type="text" id="url" value="<?php the_author_meta( 'googleplus', $current_user->ID ); ?>" />
</div>
</div>
								
<div class="form-group">
<label for="email" class="col-sm-4 control-label"><?php _e('E-mail *', 'psythemes'); ?></label>
<div class="col-sm-8">
<input class="text-input form-control" name="email" type="text" id="email" value="<?php the_author_meta( 'user_email', $current_user->ID ); ?>" />
</div>
</div>
								
<div class="form-group">
<label for="pass1" class="col-sm-4 control-label"><?php _e('New Password *', 'psythemes'); ?></label>
<div class="col-sm-8">
<input class="text-input form-control" name="pass1" type="password" id="pass1" />
<span id="error-old_password" class="help-block error-block"></span>
</div>
</div>

<div class="form-group">
<label for="pass2 " class="col-sm-4 control-label"><?php _e('Confirm Password *', 'psythemes'); ?></label>
<div class="col-sm-8">
<input class="text-input form-control" name="pass2" type="password" id="pass2" />
<span id="error-new_password" class="help-block error-block"></span>
</div>

</div>
<div class="form-group">
<label for="username" class="col-sm-4 control-label"></label>
<div class="col-sm-2">

<p class="form-submit">
<?php echo $referer; ?>
<input name="updateuser" type="submit" id="updateuser" class="submit button btn btn-successful btn-approve mt10" value="<?php _e('Update', 'psythemes'); ?>" />
<?php wp_nonce_field( 'update-user' ) ?>
<input name="action" type="hidden" id="action" value="update-user" />
</p><!-- .form-submit -->
</div>
</div>
</form>
</div>
<?php endwhile; ?>
<?php else: ?>
<p class="no-data">
<?php _e('Sorry, no page matched your criteria.', 'psythemes'); ?>
</p><!-- .no-data -->
<?php endif; ?>
</div>
</div>
<div class="clearfix"></div>
</div>
<?php endif; ?>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
<?php  get_footer(); ?>