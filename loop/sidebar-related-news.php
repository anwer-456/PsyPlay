<div class="box related-news">
<div class="box-head">
<div class="nlh"><?php if ($activate = get_option('article-hot-title')) { ?><?php echo $activate; } else { echo 'Related Article'; }?></div>
<div class="clearfix"></div>
</div>
<div class="ns-list">
<?php
$ppp = get_option('article-related-amount');
$cat = get_the_category(); 
$cat = $cat[0]; 
$cat = $cat->cat_ID;
$post = get_the_ID();
$args = array('cat'=>$cat, 'post_type' => 'noticias', 'orderby' => 'rand', 'date' => 'DESC', 'showposts' => $ppp,'post__not_in' => array($post));
$related = new WP_Query($args); 
if($related->have_posts()) {
while($related->have_posts()) : $related->the_post();
if (has_post_thumbnail()) {
$imgsrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
$imgsrc = $imgsrc[0];
} elseif ($postimages = get_children("post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=0")) {
foreach($postimages as $postimage) {
$imgsrc = wp_get_attachment_image_src($postimage->ID, 'full');
$imgsrc = $imgsrc[0];
}
} elseif (preg_match('/<img [^>]*src=["|\']([^"|\']+)/i', get_the_content(), $match) != FALSE) {
$imgsrc = $match[1];
} else {
if($img = series_get_meta('poster_url')){
$imgsrc = $img;
} else {
$img = get_template_directory_uri().'/images/noimg.png';
$imgsrc = $img;
} 
}?>
<div class="news-list-item">
<div class="info">
<h2>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
</h2>
<p class="time">
<i class="fa fa-clock-o mr5"></i><?php _e('Posted', 'mundothemes'); ?> <?php echo get_the_date('Y/m/d');?></p>
</div>
<div class="clearfix"></div>
</div>
<?php endwhile; ?>
<?php } wp_reset_query(); ?>
</div>
</div>