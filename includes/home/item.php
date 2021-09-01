<div data-movie-id="<?php the_id(); ?>" class="ml-item">
<a href="<?php the_permalink() ?>" data-url="" class="ml-mask jt" data-hasqtip="112" oldtitle="<?php the_title(); ?>" title="">
<?php if($mostrar = $terms = strip_tags( $terms = get_the_term_list( $post->ID, 'quality'))) {  ?> 
<span class="mli-quality<?php $tv = series_get_meta('tv_eps_num'); $ep = series_get_meta('episode_number'); if(!empty($tv) or !empty($ep)) {echo ' tv';}?>"><?php echo $mostrar; ?></span>
<?php }?>
<?php if($dato1 = series_get_meta('tv_eps_num')) { ?>
<span class="mli-eps"><?php _e('Eps', 'psythemes'); ?><i><?php echo $dato1; ?></i></span>
<?php } elseif($dato2 = episodios_get_meta('episode_number')) { ?>
<span class="mli-eps"><?php _e('Eps', 'psythemes'); ?><i><?php echo $dato2; ?></i></span>
<?php } ?>


<img data-original="<?php echo psy_get_thumb(); ?>" class="lazy thumb mli-thumb" alt="<?php the_title(); ?>">
<span class="mli-info"><h2><?php the_title(); ?></h2></span>
</a>
			
<div id="hidden_tip">
<!-- <div id="" class="qtip-title"><?php //the_title(); ?></div> -->
<div id="" class="qtip-title"><?php the_field('the_films_name_is_in_hebrew'); ?></div>
<?php if($mostrar = $terms = strip_tags( $terms = get_the_term_list( $post->ID, 'quality'))) {  ?>
<div class="jtip-quality"><?php echo $mostrar; ?></div>
<?php } elseif($dato = episodios_get_meta('season_number')) { ?>
<div class="jtip-quality"><?php _e('Season', 'psythemes'); ?> <?php echo $dato; ?></div>
<?php } ?>


<div class="jtip-top">
<?php if($values = info_movie_get_meta("imdbRating")) { ?><div class="jt-info jt-imdb"> <?php _e('IMDb:', 'psythemes'); ?> <?php echo $values; ?></div>
<?php } elseif($dato = series_get_meta('serie_vote_average')) { ?><div class="jt-info jt-imdb"><?php _e('TMDb:', 'psythemes'); ?> <?php echo $dato; ?></div>
<?php } elseif($dato = episodios_get_meta('episode_number')) { ?><div class="jt-info jt-imdb"><?php _e('Episode:', 'psythemes'); ?>  <?php echo $dato; ?></div>
<?php } else { ?><div class="jt-info jt-imdb"> <?php _e('IMDb: N/A', 'psythemes'); ?></div>
<?php } ?>
   
   
<?php if($mostrar = $terms = strip_tags( $terms = get_the_term_list( $post->ID, 'release-year' ))) {  ?><div class="jt-info"><?php echo get_the_term_list($post->ID, 'release-year', '', '', ''); ?></div>
<?php } elseif($dato = episodios_get_meta('air_date')) { ?><div class="jt-info"><?php _e('Air Date:', 'psythemes'); ?> <span class="ep_airdate"><?php echo $dato; ?></span></div>
<?php } else { ?><div class="jt-info"><?php _e('N/A', 'psythemes'); ?></div>
<?php } ?>


<?php if($values = info_movie_get_meta("Runtime")) { ?><div class="jt-info"><?php echo $values; ?></div>
<?php } elseif($dato = series_get_meta('episode_run_time')) { ?><div class="jt-info"><?php echo $dato; ?> min</div>
<?php } elseif($dato = episodios_get_meta('episode_number')) { ?><div class="jt-info"></div>
<?php } else { ?><div class="jt-info"><?php _e('N/A', 'psythemes'); ?></div>
<?php } ?>
<div class="clearfix"></div>
</div>

 <p class="f-desc"><?php the_excerpt(); ?></p>

<?php if($mostrar = $terms = strip_tags( $terms = get_the_term_list( $post->ID, 'country' ))) {  ?> <div class="block"><?php echo get_the_term_list($post->ID, 'country', 'Country:&nbsp;', ',&nbsp;', ''); ?></div>
<?php } elseif($dato = episodios_get_meta('status')) { ?><div class="block"><?php _e('Status:', 'psythemes'); ?> <?php echo $dato; ?></div>
<?php } elseif($dato = episodios_get_meta('name')) { ?>
<div class="block"><?php _e('Episode Title:', 'psythemes'); ?> <span class="ep_title"><?php echo $dato; ?></span></div>
<?php } ?>

<?php if (has_category()) { ?>
    <div class="block"><?php _e('Genre:', 'psythemes'); ?> <?php the_category(', ') ?> </div>
<?php }?>
<?php if($dato = episodios_get_meta('serie')) { ?>
<div class="block"><?php _e('Serie:', 'psythemes'); ?> <a href="<?php bloginfo('url'); ?>/series/<?php echo sanitize_title(episodios_get_meta('serie')); ?>"><?php echo $dato; ?></a> </div>
<?php } ?>

<div class="jtip-bottom">
<a href="<?php the_permalink() ?>" class="btn btn-block btn-successful"><i class="fa fa-play-circle mr10"></i>
<?php if($dato = episodios_get_meta('episode_number')) { ?><?php _e('Watch Episode', 'psythemes'); ?>
<?php } elseif($dato = series_get_meta('serie_vote_average')) { ?><?php _e('Watch Series', 'psythemes'); ?>
<?php } else {?><?php _e('Watch Movie', 'psythemes'); ?>
<?php }?>
</a>

<?php echo favorite_buttons(); ?>
</div>

</div>
</div>