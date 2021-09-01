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
<li class="active"><?php _e('Create Account','psythemes'); ?></li>
</ol>
</div>



<!-- .warning -->


<div class="profiles-wrap">


<div class="pp-main" style="width:100%;">
<div class="ppm-head">
<div class="ppmh-title" style="text-align:center;"><i class="fa fa-user mr5"></i> <?php _e('Create Account','psythemes'); ?></div>
</div>
<div class="ppm-content user-register" style="padding: 40px!important;max-width:1000px;margin:0 auto;padding-top:30px!important;">
<?php 
		// show any error messages after form submission
		psy_show_error_messages(); ?>
<?php echo do_shortcode('[register_form]');?>
<div class="clearfix"></div>
</div>
</div>
<div class="clearfix"></div>
</div>

</div>
</div>
</div>
