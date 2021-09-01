<div role="tabpanel" class="tab-pane in fade active" id="tn-news">
<?php $active1 = get_option('mobile_ios'); $active2 = get_option('mobile_android'); if ($active1 == "true") { $activate = $active1;	} elseif  ($active2 == "true") { $activate = $active2;} ?>
<ul class="tn-news ps-container ps-active-y" <?php if ($activate == "truze") { ?>style="margin-bottom:84px; border-bottom: 1px solid #383838;"<?php }?>>
<?php $args = array( 'post_type' => 'noticias', 'showposts' => '10','orderby' => 'modified');$my_query = new WP_Query($args); ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; $IDPost = get_the_ID(); ?>
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
$img = get_template_directory_uri().'/images/news_noimg.png';
$imgsrc = $img;
} 
} ?>
<li>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="thumb news-thumb" style="background-image:url(<?php echo $imgsrc; $imgsrc = ''; ?>);"></a>
<div class="tnc-info">
 <h4><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
</div>
<div class="clearfix"></div>
 </li>
<?php endwhile; ?>
 <li class="view-more" style="margin-bottom:-10px;"><a href="<?php bloginfo('url'); ?>/articles"> <?php _e('View More', 'psythemes'); ?> <i class="fa fa-chevron-circle-right"></i></a></li>
  <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 365px; right: 3px;"><div class="ps-scrollbar-y" style="top: 0px; height: 137px;"></div></div>
</ul>

 </div>