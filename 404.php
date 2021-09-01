<?php get_header(); ?>
<!-- main -->
<div id="main" class="page-404">
<div class="container">
<div class="not-found">
<h1>404</h1>
<p><?php _e('Look like something wrong! The page you were looking for is not here.', 'psythemes'); ?></p>
<p><a class="btn btn-successful mt20" href="<?php bloginfo('url'); ?>" title=""><?php _e('BACK TO HOME', 'psythemes'); ?></a></p>
</div>
</div>
</div>
<!--/main -->
<?php get_footer(); ?>