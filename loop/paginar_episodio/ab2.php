<?php 
// This is the last episode of season.
echo '<a class="btn bp-btn-previous" href="'; bloginfo('url');
echo '/';
echo 'episode/';
echo sanitize_title(episodios_get_meta('serie')); 
echo '-season-';
echo episodios_get_meta('temporada');
echo '-episode-';
echo episodios_get_meta('episodio')-1;
echo '/">';
echo '<i class="fa fa-backward"></i>';
echo '<span>'.__('Previous').'</span></a>';
echo '<a class="btn bp-btn-next" href="'; bloginfo('url');
echo '/';
echo 'episode/';
echo sanitize_title(episodios_get_meta('serie')); 
echo '-season-';
echo episodios_get_meta('temporada')+1;
echo '-episode-';
echo '1';
echo '/">';
echo '<i class="fa fa-forward"></i>';
echo '<span>'.__('Next').'</span></a>';
?>