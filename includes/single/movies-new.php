<?php get_header(); ?>
<div class="header-pad"></div>
<div id="main" class="page-detail" style="padding-top: 70px;">
<div class="container">
<div class="pad"></div>
<div class="main-content main-detail">
<?php if(get_option("notice_location") == "global" ){?>
<?php get_template_part('includes/aviso'); ?>
<?php }?>
<?php echo movies_breadcrumbs(); ?>

<?php $active = get_option('mov-ad-1'); if ($active == "true") { ?>

            <div class="content-kuss">
<?php if ($note = get_option('ads-vid-1-title')) { ?>
                <div id="content-kuss-title"> <span><?php echo $note; ?></span></div>
<?php }?>
				<?php if ($ads = get_option('ads-vid-1-code')) { ?><div class="content-kuss-ads"><?php echo stripslashes($ads); ?></div><?php }?>
            </div>
<?php }?>

	
<div id="mv-info">
<?php if(get_option('psy-splash-screen') =="enable") {?>
<?php   if($splash = info_movie_get_meta('fondo_player')) {?><a title="<?php the_title(); ?>" class="thumb mvi-cover splash-image" style="background-image: url(<?php echo $splash;?>)"></a><?php }?>
<?php }?>
<div id="content-embed" style="">
<?php include_once 'video-lock.php'; ?>
</div>


<?php $active = get_option('fake-buttons'); if ($active == "true") { ?>
<div class="mobile-btn">
<a class="btn btn-block btn-lg btn-successful btn-01" target="_blank" href="<?php if ($note = get_option('ads-button-1-url') ) { echo $note; } else { echo '#' ;} ?>">
<i class="fa fa-play mr10"></i><?php if ($note = get_option('ads-button-1-title') ) { echo $note; } else { echo 'Stream in HD' ;} ?></a>
<a class="btn btn-block btn-lg btn-successful btn-02" target="_blank" href="<?php if ($note = get_option('ads-button-2-url') ) { echo $note; } else { echo '#' ;} ?>">
<i class="fa fa-download mr10"></i><?php if ($note = get_option('ads-button-2-title') ) { echo $note; } else { echo 'Download in HD' ;} ?></a>
<div class="clearfix"></div>
</div>
<?php }?>


<?php $active = get_option('mov-ad-2'); if ($active == "true") { ?>

            <div class="content-kuss" style="">
<?php if ($note = get_option('ads-vid-2-title')) { ?>
                <div id="content-kuss-title"> <span><?php echo $note; ?></span></div>
<?php }?>
				<?php if ($ads = get_option('ads-vid-2-code')) { ?><div class="content-kuss-ads"><?php echo stripslashes($ads); ?></div><?php }?>
            </div>
<?php }?>
				
				
<div class="mvi-content" itemscope itemtype="http://schema.org/Movie">
<?php if (have_posts()) :
while (have_posts()) : the_post();  ?>
<div class="mvic-btn">

<?php $active = get_option('watch-ratings'); if ($active == "true") { ?>
<div class="mv-rating">
<?php echo star_rating(); ?>
<div class="clearfix"></div>
 </div>
<?php }?>
 <div class="clearfix"></div>
 
 
 
<?php get_template_part('includes/single/fake_buttons'); ?>


</div>
<div class="thumb mvic-thumb" style="background-image: url();">
<img itemprop="image" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" src="<?php echo psy_get_thumb(); ?>" class="hiddenz" style="width: 140px; height: 210px;">
</div>
<div class="mvic-desc">
<h3 itemprop="name"><?php the_title(); ?></h3>
<div class="block-trailer">
<a data-target="#pop-trailer" data-toggle="modal" class="pop-trailer btn btn-primary">
<i class="fa fa-video-camera mr5"></i><?php _e('Trailer', 'psythemes'); ?>
</a>
</div>

<div class="block-social">
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_inline_share_toolbox"></div>
</div>
<div itemprop="description" class="desc">
<?php the_content(); ?></div>
<div class="mvic-info">

<div class="mvici-left">
<?php if(get_option("watch-views") == "true") {?>
<?php if($noners = info_movie_get_meta("views")) { ?><p><strong><?php _e('Views:', 'psythemes'); ?></strong> <?php echo $noners;?></p><?php }?>
<?php }?>
<p><strong><?php _e('Genre:', 'psythemes'); ?> </strong><?php the_category(',&nbsp;',''); ?></p>
<?php if ($dato = get_the_term_list($post->ID, 'director', '', ', ', '')){?><p><strong><?php _e('Director:', 'psythemes'); ?> </strong><span><?php echo $dato; ?></span></p><?php }?>
<?php if ($dato = get_the_term_list($post->ID, 'stars', '', ', ', '')){?><p><strong><?php _e('Actors:', 'psythemes'); ?> </strong><span><?php echo $dato; ?></span></p><?php }?>
<?php if ($dato = get_the_term_list($post->ID, 'country', '', ', ', '')){?><p><strong><?php _e('Country:', 'psythemes'); ?> </strong><?php echo $dato; ?></p><?php } ?>
</div>
<div class="mvici-right">
<?php if($values = get_post_custom_values("Runtime")) { ?><p><strong><?php _e('Duration:', 'psythemes'); ?></strong> <span itemprop="duration"><?php echo $values[0]; ?></span></p><?php } ?> 
<?php if($mostrar = $terms = strip_tags( $terms = get_the_term_list( $post->ID, 'quality' ))) {  ?><p><strong><?php _e('Quality:', 'psythemes'); ?> </strong> <span class="quality"><?php echo $mostrar; ?></span></p><?php } ?>
<?php if($mostrar = $terms = strip_tags( $terms = get_the_term_list( $post->ID, 'release-year' ))) {  ?><p><strong><?php _e('Release:', 'psythemes'); ?> </strong> <?php echo get_the_term_list($post->ID, 'release-year', '', '', ''); ?></p><?php } ?>
<?php if(get_post_custom_values("youtube_id")) { ?>
 <div itemscope itemtype="http://schema.org/VideoObject">       
<?php $trailers = get_post_meta($post->ID, "youtube_id", $single = true); mostrar_trailer_meta($trailers) ?>
<meta itemprop="name" content="<?php the_title(); ?>">
<?php if($noners = get_post_custom_values("tagline")) { ?><meta itemprop="description" conTent="<?php echo $noners[0]; ?>"><?php } ?>
<?php if($noners = get_post_custom_values("fondo_player")) { ?><meta itemprop="thumbnailUrl" conTent="<?php echo $noners[0]; ?>"><?php } ?>
<meta itemprop="uploadDate" content="<?php the_date('c'); ?>">
</div>
<?php } ?>
<!-- Micro data -->
<meta itemprop="url" content="<?php the_permalink() ?>" />
<meta itemprop="datePublished" content=""/>
<?php if($noners = info_movie_get_meta("tagline")) { ?><meta itemprop="headline" conTent="<?php echo $noners; ?>"><?php } ?>
<?php $categories_list = my_get_the_category_list( __( ' ', 'requiredfoundation' ) );  if ( $categories_list ): ?>
<?php printf( __( ' %2$s', 'requiredfoundation' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list ); ?>
<?php endif;  ?>
<!-- Micro data -->				
<div class="imdb_r" itemtype="http://schema.org/AggregateRating" itemscope="" itemprop="aggregateRating">
<?php if($values = info_movie_get_meta("imdbRating")) { ?> <p><strong><?php _e('IMDb:', 'psythemes'); ?> </strong> <span itemprop="ratingValue" class="imdb-r"><?php echo $values; ?></span></p><?php } ?>
</div>
</div>
<div class="clearfix"></div>
<!--<?php if ($dato = get_the_term_list($post->ID, 'cast', '', ', ', '')){?><p ><strong><?php _e('Complete Cast:', 'psythemes'); ?> </strong><span class="complete-casts"><?php psythemescast_the_terms( get_the_ID(), 'cast', ', ' ); ?><a class="read-more-show">Show More</a></span></p><?php }?>-->
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
<?php endwhile; endif; ?>  <!-- keywords --> 
</div>

<!-- keywords -->
<?php the_tags('<div id="mv-keywords"> <strong class="mr10">Keywords:</strong>', ' ', '</div>'); ?>
<!-- /keywords -->   

<?php get_template_part('includes/single/images-slideshow'); ?>

<?php get_template_part('includes/single/link-lock'); ?>

<?php $active = get_option('mov-ad-3'); if ($active == "true") { ?>

            <div class="content-kuss" style="">
<?php if ($note = get_option('ads-vid-3-title')) { ?>
                <div id="content-kuss-title"> <span><?php echo $note; ?></span></div>
<?php }?>
				<?php if ($ads = get_option('ads-vid-3-code')) { ?><div class="content-kuss-ads"><?php echo stripslashes($ads); ?></div><?php }?>
            </div>
<?php }?>

<?php $activar = get_option('comm_mov'); if ($activar == "true") { ?>
<div id="commentfb">
<?php include_once 'comentarios.php'; ?>
</div>
<?php }?>


<!--related-->
<?php $active = get_option('widget_related_mov'); if ($active == "true") { ?>
<?php include_once 'relacionados.php'; ?>
<?php }?>

<?php $active = get_option('mov-ad-4'); if ($active == "true") { ?>

            <div class="content-kuss" style="">
<?php if ($note = get_option('ads-vid-4-title')) { ?>
                <div id="content-kuss-title"> <span><?php echo $note; ?></span></div>
<?php }?>
				<?php if ($ads = get_option('ads-vid-4-code')) { ?><div class="content-kuss-ads"><?php echo stripslashes($ads); ?></div><?php }?>
            </div>
<?php }?> 			
</div>

</div>
</div>
<div id="overlay"></div>
<?php get_template_part('includes/modal/modal'); ?>

<?php  get_footer(); ?>