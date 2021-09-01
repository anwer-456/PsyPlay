<?php $active = get_option('epmodule'); if ($active == "true") { ?>
 <!--latest episodes-->
<div class="movies-list-wrap mlw-latestmovie">
<div class="ml-title">
<span class="pull-left"><?php if($title = get_option('latestep_title')){ echo $title; } else { echo 'Latest Episodes'; }?> <i class="fa fa-chevron-right ml10"></i></span>
<a href="<?php bloginfo('url'); ?>/episode" class="pull-right cat-more"><?php _e('View more »', 'psythemes'); ?></a>
<div class="clearfix"></div>
</div>
<div class="movies-list movies-list-full tab-pane in fade active">
<?php
$lepnum = get_option('latestep_num');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts( array('posts_per_page'=>$lepnum,'post_type'=>'episodes','paged'=>$paged ) );   ?>
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
 <!--/latest episodes-->
 <?php } ?>		