<?php $active = get_option('tvmodule'); if ($active == "true") { ?>
 <!--tvseries-->
<div class="movies-list-wrap mlw-latestmovie">
<div class="ml-title">
<span class="pull-left"><?php if($title = get_option('latesttv_title')){ echo $title; } else { echo 'Latest TV Series'; }?> <i class="fa fa-chevron-right ml10"></i></span>
<a href="<?php bloginfo('url'); ?>/series" class="pull-right cat-more"><?php _e('View more »', 'psythemes'); ?></a>
<div class="clearfix"></div>
</div>
<div class="movies-list movies-list-full tab-pane in fade active">
<?php
$ltvnum = get_option('latesttv_num');
$active = get_option('tvmodule'); if ($active == "true") {
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts( array('posts_per_page'=>$ltvnum,'post_type'=>'tvshows','paged'=>$paged ) );  ?>
<?php  if (have_posts()) : ?>
<?php post_movies_true(); ?>
<?php while (have_posts()) : the_post(); 
if(get_option('edd_sample_theme_license_key')) { ?>
<?php include 'includes/home/item.php'; ?>

<?php } endwhile;
wp_reset_query(); ?>						
<?php endif; ?>
<div class="clearfix"></div>
</div>
</div>
 <!--/ tvseries-->
<?php } }?>			