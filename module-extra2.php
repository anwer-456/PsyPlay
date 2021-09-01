<?php $active = get_option('2extramodule2'); if ($active == "true") { ?>
<?php if ($cat = get_option('2extramodule2_cat')) { ?>
 <!--latest episodes-->
<div class="movies-list-wrap mlw-latestmovie">
<div class="ml-title">
<span class="pull-left"><?php if($title = get_option('2extramodule2_title')){ echo $title; } else { echo 'Extra Module 2'; }?> <i class="fa fa-chevron-right ml10"></i></span>
<?php  $category_link = get_category_link( $cat ); ?>
<a href="<?php echo esc_url( $category_link ); ?>" class="pull-right cat-more"><?php _e('View more »', 'psythemes'); ?></a>
<div class="clearfix"></div>
</div>
<div class="movies-list movies-list-full tab-pane in fade active">
<?php 
$cat = get_option('2extramodule2_cat');
$postnum = get_option('2extramodule2_num'); 
$catquery = new WP_Query( 'cat='.$cat.'&posts_per_page='.$postnum.'' );
while($catquery->have_posts()) : $catquery->the_post(); ?>
<?php include 'includes/home/item.php'; ?>

		
<?php  endwhile; 
wp_reset_postdata();?>			
<div class="clearfix"></div>
</div>
</div>
 <!--/latest episodes-->
 <?php } ?>		
 <?php } ?>		