<?php 
if(get_option('psy-hide-vid') =="disable"):
include 'player.php';
else: 
if ( is_user_logged_in() ) {
	include 'player.php';
}else {
	echo '<div class="alert alert-warning" style="border-radius: 0;">
<i class="fa fa-warning mr5"></i> <b><strong>'.__('You must be logged-in to watch the video.', 'psythemes').'</b>
</div>';
	get_template_part('includes/single/lock-login');
}
endif;
?>