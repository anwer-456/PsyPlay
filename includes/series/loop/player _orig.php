<?php if( have_rows('player') ): ?>
<div id="player2">
<?php $activar = get_option('activar-fake'); if ($activar == "true") { ?>
<div id="tab-ad"  >
<div class="movieplay">
<?php
$numero = get_option('enlaces-fake');
$random = rand(1,$numero);
$url = array();
$url[1] = get_option('fake-link-1');
$url[2] = get_option('fake-link-2');
$url[3] = get_option('fake-link-3');
$url[4] = get_option('fake-link-4');
$url[5] = get_option('fake-link-5');
$url[6] = get_option('fake-link-6');
$url[7] = get_option('fake-link-7');
$url[8] = get_option('fake-link-8');
$url[9] = get_option('fake-link-9');
$url[10] = get_option('fake-link-10');
?>
<div id="pbar_outerdiv" class="fake_player">
<?php if($values = get_post_custom_values("img_episode")) { ?>
<img class="cover" src="<?php echo $values[0]; ?>" alt="<?php the_title(); ?>" />
<?php } else { ?>
<img class="cover" src="<?php echo get_template_directory_uri(); ?>/images/player_<?php echo rand(1,2);?>.jpg" alt="<?php the_title(); ?>" />
<?php } ?>	
<script> $( ".fake_player" ).click(function() {
  $( ".playads" ).remove();
});
    $(document).on('click', '.lnkplay', function() {
        $(".fake_player").click();
    });
</script>
<a href="<?php echo $url[$random] ;?>" target="_blank" class="lnkplay"><span class="playads"><i class="fa fa-play" aria-hidden="true"></i></span></a>
<span id="pbar_innertext" class="play_tiempo"></span>
<a href="<?php echo $url[$random] ;?>" target="_blank">
<section>
<span class="barra"><span id="pbar_innerdiv" class="progreso"></span><span id="pbar_innerdiv2" class="played"></span></span>
<span class="controles">
<i class="fa fa-play" aria-hidden="true"></i>
<i class="fa fa-volume-up" aria-hidden="true"></i>
<i><?php _e('0:00', 'psythemes'); ?><span><?php _e('/ 45:00', 'psythemes'); ?></span> </i>
<i class="fa fa-arrows-alt" aria-hidden="true"></i>

</span>
</section>
</a>
</div>
</div>
</div>
<?php } ?>

<?php $numerado = 1; { while( have_rows('player') ): the_row(); ?>
<div id="tab<?php echo $numerado; ?>"  >
<div class="movieplay">
<?php if($dato = get_sub_field('embed_player')) {  ?>
<?php echo do_shortcode($dato); ?>
<?php } ?>
</div>
<?php $numerado++; ?>   
</div>
<?php endwhile; } ?>
</div>
<div id="bar-player">
<a href="<?php echo get_permalink(); ?>#mv-info" class="btn bp-btn-light"><i class="fa fa-lightbulb-o"></i> <span></span></a>
	<?php if(get_option('favorite-settings') == "true") {?>
                    <span id="button-favorite">
					<?php if(get_option('fav-allow-settings') == "1") { ?>
					<?php echo favorite_user_only(); ?>
					<?php } elseif(get_option('fav-allow-settings') == "2") { ?>
					<?php echo favorite_user_guest(); ?>
					<?php }?>
    
                    </span>
					<?php }?>
<?php if($pagina = series_get_meta('ep_pagination')) { 
	get_template_part('loop/paginar_episodio/'. $pagina .'');
		} else { 
	get_template_part('loop/paginar_episodio/default'); 
	} 
?>

<a href="<?php echo get_permalink( $post->ID ); ?>#commentfb" class="btn bp-btn-review"><i class="fa fa-comments"></i>
<span>Comments</span> (<span id="comment-count"><?php $totalcomments = get_comments_number(); echo $totalcomments; ?></span>)</a>
<a class="btn bp-btn-report" data-target="#pop-report" data-toggle="modal" style="color: #fff000; float: right"><i class="fa fa-warning"></i> <span></span></a>
<div class="clearfix"></div>
</div>
<div class="player_nav">
<ul class="idTabs">
<?php $activar = get_option('activar-fake'); if ($activar == "true") { ?>
<li><div class="les-title">
<i class="fa fa-server mr5"></i>
<strong><?php if ($note = get_option('server_adplayer') ) { echo $note; } else { echo 'HD Server' ;} ?></strong>
</div>
<div class="les-content"><a href="#tab-ad"><?php if ($note = get_option('quality_adplayer') ) { echo $note; } else { echo 'HD 1080p' ;} ?></a></div>
</li>
<?php }?>
<?php $numerado = 1; { while( have_rows('player') ): the_row(); ?>
<li><div class="les-title">
<i class="fa fa-server mr5"></i>
<strong>Server <?php echo $numerado; ?></strong>
</div>
<div class="les-content"><a href="#tab<?php echo $numerado; ?>"><?php  the_sub_field('quality_player'); ?></a></div>
</li>
<?php $numerado++; ?>   
<?php endwhile; } ?>
</ul>
</div>

<?php else : ?>
<div class="nodata"><?php _e('No data available','psythemes'); ?></div>
<?php endif; ?>