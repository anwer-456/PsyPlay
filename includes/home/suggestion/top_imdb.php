<?php $numerado = 1; { query_posts(
array('meta_key' => 'end_time','meta_compare' =>'>=','meta_value'=>time(),'meta_key' => 'imdbRating',
'post__not_in' => get_option( 'sticky_posts' ),'orderby' => 'meta_value_num','showposts' => $suggnum,'order' => 'DESC'));
while ( have_posts() ) : the_post(); 
$imdbRating = get_post_meta($post->ID, "imdbRating", $single = true); 
?>
<?php include 'item.php'; ?>
<?php $numerado++; ?>
<?php endwhile; wp_reset_query(); ?>
<?php } ?>