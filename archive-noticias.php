<?php get_header(); ?>
<div class="header-pad"></div>
<div id="main" class="page-news">
<div class="container">
<div class="pad"></div>
<div class="main-content main-news">
<?php if(get_option("notice_location") == "global" ){?>
<?php get_template_part('includes/aviso'); ?>
<?php }?>
<?php echo article_breadcrumbs(); ?>	
<?php $active = get_option('article-archive-ad-1'); if ($active == "true") { ?>

            <div class="content-kuss" >
<?php if ($note = get_option('ads-page-1-title')) { ?>
                <div id="content-kuss-title"> <span><?php echo $note; ?></span></div>
<?php }?>
				<?php if ($ads = get_option('ads-page-1-code')) { ?><div class="content-kuss-ads"><?php echo stripslashes($ads); ?></div><?php }?>
            </div>
<?php }?> 			
 <div class="news-block">
<div class="box news-content news-list">
<div class="box-head news-list-head">
<div class="nlh"><?php _e('Latest Articles', 'psythemes'); ?></div>
<ul class="nav nav-tabs" role="tablist">
<li class="active"><a><?php _e('Movies News', 'psythemes'); ?></a></li>
<!--<li><a><?php _e('Announcement', 'psythemes'); ?></a></li>-->
</ul>
<div class="clearfix"></div>
</div>
<div class="news-list-body">
<?php  if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); 
if (has_post_thumbnail()) {
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
$imgsrc = get_template_directory_uri() . '/images/news_big_noimg.png';
} 
?>
<div class="news-list-item ">
<a href="<?php the_permalink() ?>" class="thumb"><img src="<?php echo $imgsrc; $imgsrc = ''; ?>" title="" alt="<?php the_title(); ?>"></a>
<div class="info">
<h2><a href="<?php the_permalink() ?>" title=""><?php the_title(); ?></a></h2>
<p class="desc"><?php the_excerpt(); ?></p>
<p class="time">
<i class="fa fa-clock-o mr5"></i><?php echo get_the_date('Y/m/d');?>                                          
<?php if($noners = noticias_get_meta("views")) { ?><span class="ml10"><i class="fa fa-eye mr5"></i><?php echo $noners; ?></span><?php }?>
</p>
</div>
<div class="clearfix"></div>
</div>
<?php endwhile; ?>	
<?php else : ?>
<h3 style="margin-left: 10px"><?php _e('No content available', 'psythemes'); ?></h3>
<?php endif; ?>	                            
                                                    
<?php pagination($additional_loop->max_num_pages);?>
                        
</div>

</div>

<div class="news-sidebar">
<?php $active = get_option('article-likebox'); if ($active == "enable") { ?>
<?php get_template_part('loop/sidebar-likebox'); ?>
<?php }?>

<?php $active = get_option('article-hot'); if ($active == "true") { ?>
<?php get_template_part('loop/sidebar-hot-news'); ?>
<?php }?>
 </div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<?php $active = get_option('article-archive-ad-5'); if ($active == "true") { ?>

            <div class="content-kuss" >
<?php if ($note = get_option('ads-page-5-title')) { ?>
                <div id="content-kuss-title"> <span><?php echo $note; ?></span></div>
<?php }?>
				<?php if ($ads = get_option('ads-page-5-code')) { ?><div class="content-kuss-ads"><?php echo stripslashes($ads); ?></div><?php }?>
            </div>
<?php }?> 			
</div>
</div>
</div>



<?php  get_footer(); ?>