
<?php 
if(get_option('psy-trailer-player') == "enable"):
$values = info_movie_get_meta("youtube_id"); if(!empty($values)) { ?>
<div id="tab-trailer"  >
<div class="movieplay">
<?php $trailers = get_post_meta($post->ID, "youtube_id", $single = true); mostrar_trailer($trailers); ?>
</div>
</div>
<?php }
endif;?>