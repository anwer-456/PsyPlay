<div class="movies-list-wrap mlw-related">
                <div class="ml-title ml-title-page">
                    <span><?php if($title = get_option('related-tv-title')) {?><?php echo $title; } else { echo 'You May Also Like'; }?></span>
                </div>
                <div class="movies-list movies-list-full">
				<?php
$reltv = get_option('related-tv');
$cat = get_the_category(); 
$cat = $cat[0]; 
$cat = $cat->cat_ID;
$post = get_the_ID();
$args = array('post_type' => 'tvshows', 'orderby' => 'rand', 'showposts' => $reltv,'post__not_in' => array($post));
$related = new WP_Query($args); 
if($related->have_posts()) {
while($related->have_posts()) : $related->the_post();?>
<?php get_template_part ('includes/home/item'); ?>
		
		<?php endwhile; ?>
		<?php } wp_reset_query(); ?>
 
                </div>
            </div>