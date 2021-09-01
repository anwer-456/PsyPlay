<?php $fb_admin = get_option('fb_id_admin'); if (!empty($fb_admin)) { ?>
<meta property="fb:admins" content="<?php echo $fb_admin; ?>"/>
<?php }  ?>
<?php $fb_app = get_option('fb_id'); if (!empty($fb_app)) { ?>
<meta property="fb:app_id" content="<?php echo $fb_app; ?>"/>
<?php }  ?>
<?php if(get_option('basic-seo') == "true") {
if( $dato = get_option('veri_google') ) { ?>
<meta name="google-site-verification" content="<?php echo $dato; ?>" />
<?php } if( $dato = get_option('veri_alexa') ) { ?>
<meta name="alexaVerifyID" content="<?php echo $dato; ?>" />
<?php } if( $dato = get_option('veri_bing') ) { ?>
<meta name="msvalidate.01" content="<?php echo $dato; ?>" />
<?php } if( $dato = get_option('veri_yandex') ) { ?>
<meta name='yandex-verification' content="<?php echo $dato; ?>" />
<?php } ?>
<title><?php  $url = get_option('psy_home'); $home = url_to_postid( $url ); if (is_page($home)) {bloginfo('description'); echo ' - ';}elseif (is_archive()) { wp_title(''); echo ' - '; } 
elseif (is_search()) { echo _e('Search for','mtms'). ' &quot;'. $_GET["s"].'&quot; - '; } 
elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } 
elseif (is_404()) { echo _e('Not Found','mtms'). ' - '; }
if (is_home()) { bloginfo('description'); echo ' - '; bloginfo('name'); } else { bloginfo('name'); } ?></title>
<?php if (is_home()) { ?>
<?php if($data = get_option('seo-meta-description')) { ?>
<meta name="description" content="<?php echo $data; ?>"/>
<?php } ?>
<?php if($data = get_option('seo-main-keywords')) { ?>
<meta name="keywords" content="<?php echo $data; ?>"/>
<?php }?>
<meta property="og:type" content="website"/>
<meta property="og:image:width" content="800"/>
<meta property="og:image:height" content="420"/>
<meta property="og:image:type" content="image/png"/>
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/fb-capture.png"/>
<meta property="og:url" content="<?php bloginfo('url'); ?>"/>
<meta property="og:title" content="<?php  bloginfo('name'); echo ' - '; bloginfo('description');?>"/>
<meta property="og:description" content="<?php echo get_option("seo-meta-description");?>"/>
<meta property="og:site_name" content="<?php bloginfo("name");?>"/> <?php } elseif(!is_single() ){?>
<?php if($data = get_option('seo-meta-description')) { ?>
<meta name="description" content="<?php echo $data; ?>"/>
<?php } ?>
<?php if($data = get_option('seo-main-keywords')) { ?>
<meta name="keywords" content="<?php echo $data; ?>"/>
<?php }?>
<meta property="og:type" content="website"/>
<meta property="og:image:width" content="800"/>
<meta property="og:image:height" content="420"/>
<meta property="og:image:type" content="image/png"/>
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/fb-capture.png"/>
<meta property="og:url" content="<?php echo  get_current_page_url(); ?>"/>
<meta property="og:title" content="<?php  bloginfo('name'); echo ' - '; bloginfo('description');?>"/>
<meta property="og:description" content="<?php echo get_option("seo-meta-description");?>"/>
<meta property="og:site_name" content="<?php bloginfo("name");?>"/><?php }?>
<?php if(is_single()) { ?>
<?php if($movietv = series_get_meta('poster_url')) {?>
<meta property="og:image:width" content="300"/>
<meta property="og:image:height" content="425"/>
<meta property="og:image:type" content="image/jpeg"/>
<meta property="og:image" content="<?php echo  str_replace("w185", "w300", $movietv);?>"/>
<?php }?>
<?php if($ep = episodios_get_meta('poster_serie')) {?>
<meta property="og:image:width" content="300"/>
<meta property="og:image:height" content="425"/>
<meta property="og:image:type" content="image/jpeg"/>
<meta property="og:image" content="<?php echo  str_replace("w185", "w300", $ep);?>"/>
<?php }?>
<meta property="og:type" content="website" />
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:url" content="<?php the_permalink() ?>" />
<meta property="og:title" content="<?php the_title(); ?>" />
<?php global $post;
$content = $post->post_content; if(!empty($content)) {?>
<?php while (have_posts()) : the_post(); {?>
<meta property="og:description" content="<?php echo strip_tags(get_first_paragraph()); ?>" />
<?php } endwhile;?>
<?php }?>
<?php if ( is_singular( 'noticias' ) ) {?>
<?php global $post; if (has_post_thumbnail()) {
$imgsrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
$imgsrc = $imgsrc[0];
echo '<meta property="og:image" content="'; echo $imgsrc; $imgsrc = ''; echo '"/>';
} elseif ($postimages = get_children("post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=0")) {
foreach($postimages as $postimage) {
$imgsrc = wp_get_attachment_image_src($postimage->ID, 'full');
$imgsrc = $imgsrc[0];
echo '<meta property="og:image" content="'; echo $imgsrc; $imgsrc = ''; echo '"/>';
}
} elseif  ($values = noticias_get_meta("news_cover")) {
$imgsrc = $values;
echo '<meta property="og:image" content="'; echo $imgsrc; $imgsrc = ''; echo '"/>';
} elseif (preg_match('/<img [^>]*src=["|\']([^"|\']+)/i', get_the_content(), $match) != FALSE) {
$imgsrc = $match[1];
echo '<meta property="og:image" content="'; echo $imgsrc; $imgsrc = ''; echo '"/>'; }?>
<?php } ?>

<?php $posttags = get_the_tags(); if(!empty($posttags)): $tags = array(); foreach($posttags as $key => $value){   $tags[] = $value->name;}?>
<meta name="keywords" content="<?php echo implode(', ',$tags);?>"/>
<?php endif;?>
<?php } ?>
<?php } else { ?>
<title><?php $url = get_option('psy_home'); $home = url_to_postid( $url ); if (is_page($home)) {bloginfo('description'); echo ' - '; bloginfo('name');}else {wp_title( '', true, 'right' ); }?></title>
<?php if(is_single()) { ?>
<?php if($movietv = series_get_meta('poster_url')) {?>
<meta property="og:image:width" content="300"/>
<meta property="og:image:height" content="425"/>
<meta property="og:image:type" content="image/jpeg"/>
<meta property="og:image" content="<?php echo  str_replace("w185", "w300", $movietv);?>"/>
<?php } elseif($ep = episodios_get_meta('poster_serie')) {?>
<meta property="og:image:width" content="300"/>
<meta property="og:image:height" content="425"/>
<meta property="og:image:type" content="image/jpeg"/>
<meta property="og:image" content="<?php echo  str_replace("w185", "w300", $ep);?>"/>
<?php } elseif ( is_singular( 'noticias' ) ) {?>
<?php global $post; if (has_post_thumbnail()) {
$imgsrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
$imgsrc = $imgsrc[0];
echo '<meta property="og:image" content="'; echo $imgsrc; $imgsrc = ''; echo '"/>';
} elseif ($postimages = get_children("post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=0")) {
foreach($postimages as $postimage) {
$imgsrc = wp_get_attachment_image_src($postimage->ID, 'full');
$imgsrc = $imgsrc[0];
echo '<meta property="og:image" content="'; echo $imgsrc; $imgsrc = ''; echo '"/>';
}
} elseif  ($values = noticias_get_meta("news_cover")) {
$imgsrc = $values;
echo '<meta property="og:image" content="'; echo $imgsrc; $imgsrc = ''; echo '"/>';
} elseif (preg_match('/<img [^>]*src=["|\']([^"|\']+)/i', get_the_content(), $match) != FALSE) {
$imgsrc = $match[1];
echo '<meta property="og:image" content="'; echo $imgsrc; $imgsrc = ''; echo '"/>'; }?>
<?php } else {?>
<meta property="og:image:width" content="800"/>
<meta property="og:image:height" content="420"/>
<meta property="og:image:type" content="image/png"/>
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/fb-capture.png"/>
<?php }?>
<?php } else {?>
<meta property="og:image:width" content="800"/>
<meta property="og:image:height" content="420"/>
<meta property="og:image:type" content="image/png"/>
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/fb-capture.png"/>
<?php }?>
<?php }?>