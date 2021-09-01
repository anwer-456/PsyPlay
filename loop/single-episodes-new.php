<?php get_header(); ?>
<div id="main" class="page-detail" style="padding-top: 70px;">

<div class="container">
<div class="pad"></div>
<div class="main-content main-detail">
<?php if(get_option("notice_location") == "global" ){?>
<?php get_template_part('includes/aviso'); ?>
<?php }?>
<?php echo ep_breadcrumbs(); ?>	

<?php $active = get_option('ep-ad-1'); if ($active == "true") { ?>

            <div class="content-kuss" >
<?php if ($note = get_option('ads-vid-1-title')) { ?>
                <div id="content-kuss-title"> <span><?php echo $note; ?></span></div>
<?php }?>
				<?php if ($ads = get_option('ads-vid-1-code')) { ?><div class="content-kuss-ads"><?php echo stripslashes($ads); ?></div><?php }?>
            </div>
<?php }?> 			
<div id="mv-info">
 <?php $splashscreen = get_option('psy-splash-screen');  if($splashscreen =="enable") {?>
<?php   if($splash = info_movie_get_meta('fondo_player')) {?><a title="<?php the_title(); ?>" class="thumb mvi-cover splash-image" style="background-image: url(<?php echo $splash;?>)"></a><?php }?>
<?php }?>
<div id="content-embed" style="<?php $splash = info_movie_get_meta('fondo_player'); if(empty($splash)) { echo 'display:block;';}?>">

<?php get_template_part('includes/single/video-lock'); ?>
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

<?php $active = get_option('ep-ad-2'); if ($active == "true") { ?>

            <div class="content-kuss" >
<?php if ($note = get_option('ads-vid-2-title')) { ?>
                <div id="content-kuss-title"> <span><?php echo $note; ?></span></div>
<?php }?>
				<?php if ($ads = get_option('ads-vid-2-code')) { ?><div class="content-kuss-ads"><?php echo stripslashes($ads); ?></div><?php }?>
            </div>
<?php }?> 			
<div class="mvi-content" itemscope itemtype="http://schema.org/TVEpisode">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<meta itemprop="url" content="<?php the_permalink() ?>" />
<?php $terms = wp_get_post_terms( $post->ID, 'director'); foreach($terms as $term) { $term_link = get_term_link( $term ); if ( is_wp_error( $term_link ) ) { continue; }
echo '<div itemprop="director" itemscope itemtype="http://schema.org/Person"><meta itemprop="name" content="' . $term->name . '"><meta itemprop="url" content="' . esc_url( $term_link ) . '"></div>'; } ?>
<?php $terms = wp_get_post_terms( $post->ID, 'gueststar'); foreach($terms as $term) { $term_link = get_term_link( $term ); if ( is_wp_error( $term_link ) ) { continue; }
echo '<div itemprop="actors" itemscope itemtype="http://schema.org/Person"><meta itemprop="name" content="' . $term->name . '"><meta itemprop="url" content="' . esc_url( $term_link ) . '"></div>'; } ?>
<?php get_template_part('includes/series/loop/microdata'); ?>

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
 
 <?php get_template_part('includes/series/loop/ep_poster'); ?>

 <div class="mvic-desc">
<h3 itemprop="name"><?php the_title(); ?></h3>
<?php if($values = info_movie_get_meta("youtube_id")) { ?>
<div class="block-trailer">
<a data-target="#pop-trailer" data-toggle="modal" class="pop-trailer btn btn-primary">
<i class="fa fa-video-camera mr5"></i><?php _e('Trailer', 'psythemes'); ?>
</a>
</div>
<?php }?>

<div class="block-social">
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_inline_share_toolbox"></div>
</div>
				
<div itemprop="description" class="desc">
<?php the_content(); ?></div>
<div class="mvic-info">
<div class="mvici-left">
<?php if(get_option("watch-views") == "true") {?>
<?php if($noners = episodios_get_meta("views")) { ?><p><strong><?php _e('Views:', 'psythemes'); ?></strong> <?php echo $noners;?></p><?php }?>
<?php }?>
<?php if($dato = episodios_get_meta('serie')) { ?>
<p><strong>Serie: </strong> <a href="<?php bloginfo('url'); ?>/series/<?php echo sanitize_title(episodios_get_meta('serie')); ?>"><span itemprop="partOfSeries"><?php echo $dato; ?></span></a></p>
<?php }?>	
<?php if ($dato = get_the_term_list($post->ID, 'director', '', ', ', '')){?>
<p><strong><?php _e('Director:', 'psythemes'); ?> </strong> <?php echo $dato; ?></p>
<?php }?>			
<?php if($dato = get_the_term_list($post->ID, 'gueststar', '', ', ', '')) { ?>
<p><strong><?php _e('Guest Star:', 'psythemes'); ?> </strong><?php echo $dato; ?></p>
<?php }?> 
</div>
<div class="mvici-right">
<?php if($dato = series_get_meta('name')) { ?>
<p><strong><?php _e('Episode Title:', 'psythemes'); ?></strong> <span itemprop="duration"><?php echo $dato; ?></span></p>
<?php } ?> 
<?php if($dato = episodios_get_meta('air_date')) { ?>
<p><strong><?php _e('Air Date:', 'psythemes'); ?></strong> <?php echo $dato; ?></p>
<?php } ?>
<?php if($dato = get_the_term_list($post->ID, 'episodedate', '', ', ', '')) { ?>
<p><strong><?php _e('Year:', 'psythemes'); ?></strong> <?php echo $dato; ?></p>
<?php } ?>
<?php $terms = wp_get_post_terms( $post->ID, $director); foreach($terms as $term) { $term_link = get_term_link( $term ); if ( is_wp_error( $term_link ) ) { continue; }
echo '<div itemprop="director" itemscope itemtype="http://schema.org/Person"><meta itemprop="name" content="' . $term->name . '"><meta itemprop="url" content="' . esc_url( $term_link ) . '"></div>'; } ?>
<?php $terms = wp_get_post_terms( $post->ID, $elenco); foreach($terms as $term) { $term_link = get_term_link( $term ); if ( is_wp_error( $term_link ) ) { continue; }
echo '<div itemprop="actors" itemscope itemtype="http://schema.org/Person"><meta itemprop="name" content="' . $term->name . '"><meta itemprop="url" content="' . esc_url( $term_link ) . '"></div>'; }  ?>
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
</div>
<div class="clearfix"></div>

</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
<?php endwhile; endif; ?>  
</div>
<!-- keywords -->
<?php the_tags('<div id="mv-keywords"> <strong class="mr10">Keywords:</strong>', ' ', '</div>'); ?>
<!-- /keywords -->


<?php get_template_part('includes/single/images-slideshow'); ?>


<?php get_template_part('includes/single/link-lock'); ?>

<?php $active = get_option('ep-ad-3'); if ($active == "true") { ?>

            <div class="content-kuss" >
<?php if ($note = get_option('ads-vid-3-title')) { ?>
                <div id="content-kuss-title"> <span><?php echo $note; ?></span></div>
<?php }?>
				<?php if ($ads = get_option('ads-vid-3-code')) { ?><div class="content-kuss-ads"><?php echo stripslashes($ads); ?></div><?php }?>
            </div>
<?php }?> 			

<?php $activar = get_option('comm_ep'); if ($activar == "true") { ?>
<div id="commentfb">
<?php get_template_part('includes/series/loop/comentarios'); ?>
</div>
<?php }?>

<?php $active = get_option('widget_related_tv'); if ($active == "true") { ?>
<!--related-->
<?php get_template_part('includes/series/loop/relacionados'); ?>
<!--/related-->
<?php }?>


<?php $active = get_option('ep-ad-4'); if ($active == "true") { ?>

            <div class="content-kuss" >
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