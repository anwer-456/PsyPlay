<?php $active = get_option('movsmodule'); if ($active == "true") { ?>
<!--latest movies-->
<div class="movies-list-wrap mlw-latestmovie">
<div class="ml-title">
<span class="pull-left"><?php if($title = get_option('latestmov_title')){ echo $title; } else { echo 'Latest Movies'; }?><i class="fa fa-chevron-right ml10"></i></span>
<a href="<?php echo get_option("mov_archive");?>" class="pull-right cat-more"><?php _e('View more »', 'psythemes'); ?></a>
<div class="clearfix"></div>
</div>
<div class="movies-list movies-list-full tab-pane in fade active">
<?php
$lmvnum = get_option('latestmov_num');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts( array('posts_per_page'=>$lmvnum,'post_type'=>'post','paged'=>$paged ) );   ?>
<?php  if (have_posts()) : ?>
<?php post_movies_true(); ?>
<?php while (have_posts()) : the_post(); 
if(get_option('edd_sample_theme_license_key')) {
?>
<?php include 'includes/home/item.php'; ?>
<?php } endwhile;
wp_reset_query(); ?>						
<?php endif; ?>
<div class="clearfix"></div>
</div>
</div>
<?php }?>
 <!--/latest movies-->