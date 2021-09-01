<div id="main" class="page-detail page-profiles">
<div class="container">
<div class="pad"></div>
<div class="main-content main-detail">
<?php if(get_option("notice_location") == "global" ){?>
<?php get_template_part('includes/aviso'); ?>
<?php }?>
<div id="bread">
<ol class="breadcrumb">
<li><a href="<?php bloginfo('url'); ?>"><?php _e('Home','psythemes'); ?></a></li>
<li class="active"><?php _e('Member Area','psythemes'); ?></li>
</ol>
</div>


<?php if ( $_GET['login'] == 'failed' ) : ?> 
<div class="alert alert-warning" style="border-radius: 0;">
<i class="fa fa-warning mr5"></i> <b><strong><?php _e('ERROR:', 'psythemes'); ?></strong> <?php _e('Invalid username and/or password.', 'psythemes'); ?></b>
</div>
<?php endif;?>
<?php if ( $_GET['login'] == 'empty' ) : ?> 
<div class="alert alert-warning" style="border-radius: 0;">
<i class="fa fa-warning mr5"></i> <b><strong><?php _e('ERROR:', 'psythemes'); ?></strong> <?php _e('Username and/or Password is empty.', 'psythemes'); ?></b>
</div>
<?php endif;?>
<?php if ( $_GET['login'] == 'false' ) : ?> 
<div class="alert alert-warning" style="border-radius: 0;">
<i class="fa fa-warning mr5"></i> <b><strong><?php _e('ERROR:', 'psythemes'); ?></strong> <?php _e('You are logged out.', 'psythemes'); ?></b>
</div>
<?php endif;?>
<!-- .warning -->


<div class="profiles-wrap">


<div class="pp-main auth" style="width:100%;">
<div class="ppm-head">
<div class="ppmh-title" style="text-align:center;"><i class="fa fa-user mr5"></i> <?php _e('Member Area - Login','psythemes'); ?></div>
</div>
<div class="ppm-content user-content" style="padding: 40px!important;max-width:1000px;margin:0 auto;padding-top: 30px!important;">

	<?php
$args = array(
	'form_id' => 'psy-loginform',
	'remember' => true
   );
   ?>
   <?php wp_login_form( $args ); ?>
<hr class="forgot-sep">
   <p class="forgot_reset">
   <a href="#"><?php _e('Reset Password!','psythemes'); ?></a></p>
<div class="clearfix"></div>
</div>
</div>
<div class="clearfix"></div>
</div>

</div>
</div>
</div>
