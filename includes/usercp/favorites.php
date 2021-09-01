<div class="pp-main">
<div class="ppm-head">
<ul class="nav nav-tabs nav-justified">
<li class="active">
<a><i class="fa fa-bookmark mr5"></i><?php _e('Favorites','psythemes'); ?></a></li>
<li class=""></li>
</ul>
</div>
<div class="ppm-content">
<div class="movies-list-wrap mlw-profiles">
<div class="movies-list movies-list-full">
<?php
$types = get_post_types( array( 'public' => true ) );
$args['paged'] = get_query_var( 'page' ) ? get_query_var( 'page' ) : 1;
$args = array( 'posts_per_page' => 12,'post_type' => $types,'paged'=> $paged, 'meta_query' => array ( array ( 'key' => '_user_liked', 'value' => $user_ID,'compare' => 'LIKE',)) );		
$like_query = new WP_Query( $args );
$temp_query = $wp_query;
$wp_query   = NULL;
$wp_query   = $like_query;
if ( $like_query->have_posts() ) : ?>
<?php while ( $like_query->have_posts() ) : $like_query->the_post();?>
<?php  if (has_post_thumbnail()) {
$imgsrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'medium');
$imgsrc = $imgsrc[0];
} elseif ($postimages = get_children("post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=0")) {
foreach($postimages as $postimage) {
$imgsrc = wp_get_attachment_image_src($postimage->ID, 'medium');
$imgsrc = $imgsrc[0];
}
} elseif (preg_match('/<img [^>]*src=["|\']([^"|\']+)/i', get_the_content(), $match) != FALSE) {
$imgsrc = $match[1];
} else {
if($img = get_post_custom_values($imagefix)){
$imgsrc = $img[0];
} else {
$img = get_template_directory_uri().'/images/noimg.png';
$imgsrc = $img;
} 
} ?>
<?php get_template_part('includes/usercp/item'); ?>

<?php endwhile; ?>
<?php else : ?>
	<p class="none"><?php _e( 'You do not have favorites yet.', 'psythemes' ); ?></p>
			<?php endif;  ?>
			

</div>
</div>
<!--/movies lsit-->
<?php pagination($additional_loop->max_num_pages);?>
</div>
</div>