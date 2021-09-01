<?php 
if(get_option('slider-mv') == "true") {
$mv = 'post';
}
if(get_option('slider-tv') == "true") {
$tv = 'tvshows';
}
$value = get_option('estrenos_cat');
$active = get_option('filterby-cat'); if ($active == "enable") { ?>
<div class="swiper-wrapper">
<?php 

$postnum = get_option('slider_num');
$args = array( 'posts_per_page' => $postnum, 'post_type' => array($mv, $tv), 'cat' => $value, );
$catquery = new WP_Query( $args );
while($catquery->have_posts()) : $catquery->the_post(); ?>
<div class="swiper-slide" style="background-image: url('<?php echo psy_get_slider_thumb(); ?>'); width: 100%;" data-swiper-slide-index="5">
<a href="<?php the_permalink() ?>" class="slide-link" title="<?php the_title(); ?>"></a>
<span class="slide-caption">
<h2><?php the_title(); ?></h2>
<p class="sc-desc"> <?php the_excerpt(); ?></p>
<div class="slide-caption-info">
<div class="block"><strong><?php _e('Genre:', 'psythemes'); ?></strong>
<?php the_category(',&nbsp;',''); ?></div>
<div class="block"><strong><?php _e('Duration:', 'psythemes'); ?></strong> <?php $mv = info_movie_get_meta("Runtime"); $tv = series_get_meta('episode_run_time'); if(!empty($mv)) { echo str_replace("min","",$mv);; } elseif(!empty($tv)) { echo $tv; } else {echo 'N/A';}?> <?php _e('min', 'psythemes');?></div>
<div class="block"><strong><?php _e('Release:', 'psythemes'); ?></strong> <?php if($mostrar = $terms = strip_tags( $terms = get_the_term_list( $post->ID, 'release-year' ))) {  echo $mostrar; } else { echo 'N/A';}?></div>
<div class="block"><strong><?php _e('IMDb:', 'psythemes'); ?></strong> <?php $mv = info_movie_get_meta("imdbRating"); $tv = series_get_meta("serie_vote_average"); if(!empty($mv)) { echo $mv; } elseif(!empty($tv)) { echo $tv; } else { echo 'N/A';} ?></div>
</div>
<a href="<?php the_permalink() ?>">
<div class="btn btn-successful mt20"><?php _e('Watching', 'psythemes'); ?></div>
</a>
</span>
</div>
<?php endwhile; ?>
</div>
<?php } else { ?>
<div class="swiper-wrapper">
<?php 
$postnum = get_option('slider_num');
if(!empty($value)) {
query_posts(array('tax_query' => array( array('taxonomy' => 'release-year','field' => 'term_id','terms' => $value)),'post_type'=>array($mv, $tv), 'showposts' => $postnum)); 
}else {
$year = date ("Y"); query_posts(array('release-year' => $year, 'posts_per_page' => 1, 'post_type'=>array($mv, $tv), 'showposts' => $postnum)); 
}
?>
<?php while (have_posts()) : the_post(); ?>
<div class="swiper-slide" style="background-image: url('<?php echo psy_get_slider_thumb(); ?>'); width: 100%;" data-swiper-slide-index="5">
<a href="<?php the_permalink() ?>" class="slide-link" title="<?php the_title(); ?>"></a>
<span class="slide-caption">
<h2><?php the_title(); ?></h2>
<p class="sc-desc">  <?php the_excerpt(); ?></p>
<div class="slide-caption-info">
<div class="block"><strong><?php _e('Genre:', 'psythemes'); ?></strong>
<?php the_category(',&nbsp;',''); ?></div>
<div class="block"><strong><?php _e('Duration:', 'psythemes'); ?></strong> <?php $mv = info_movie_get_meta("Runtime"); $tv = series_get_meta('episode_run_time'); if(!empty($mv)) { echo str_replace("min","",$mv);; } elseif(!empty($tv)) { echo $tv; } else {echo 'N/A';}?> <?php _e('min', 'psythemes');?></div>
<div class="block"><strong><?php _e('Release:', 'psythemes'); ?></strong> <?php if($mostrar = $terms = strip_tags( $terms = get_the_term_list( $post->ID, 'release-year' ))) {  echo $mostrar; } else { echo 'N/A';}?></div>
<div class="block"><strong><?php _e('IMDb:', 'psythemes'); ?></strong> <?php $mv = info_movie_get_meta("imdbRating"); $tv = series_get_meta("serie_vote_average"); if(!empty($mv)) { echo $mv; } elseif(!empty($tv)) { echo $tv; } else { echo 'N/A';} ?></div>
</div>
<a href="<?php the_permalink() ?>">
<div class="btn btn-successful mt20"><?php _e('Watching', 'psythemes'); ?></div>
</a>
</span>
</div>
<?php endwhile; ?>
</div>
<?php } ?>