<div class="modal fade modal-cuz modal-trailer" id="pop-trailer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i>
</button>
<h4 class="modal-title" id="myModalLabel"><?php _e('Trailer:', 'psythemes'); ?> <?php the_title(); ?></h4>
</div>
<div class="modal-body">
<div class="modal-body-trailer">
<?php if($values = info_movie_get_meta("youtube_id")) { ?><?php $trailers = get_post_meta($post->ID, "youtube_id", $single = true); mostrar_trailer($trailers) ?>
<div itemscope itemtype="http://schema.org/VideoObject">       
<?php $trailers = get_post_meta($post->ID, "youtube_id", $single = true); mostrar_trailer_meta($trailers) ?>
<meta itemprop="name" content="<?php the_title(); ?>">
<meta itemprop="description" conTent="<?php the_title(); ?> <?php _e('Trailer', 'psythemes'); ?>">
<?php if($noners = series_get_meta("fondo_player")) { ?><meta itemprop="thumbnailUrl" conTent="<?php echo $noners; ?>"><?php } ?>
<?php if($noners = series_get_meta("first_air_date")) { ?><meta itemprop="uploadDate" conTent="<?php echo $noners; ?>"><?php } ?>
</div>
<?php }else  {?>
<div class="no_trailer"><i class="fa fa-warning"></i> <span><?php _e('No Trailer Available', 'psythemes'); ?></span></div>
<?php } ?>
</div>
</div>
</div>
</div>
</div>