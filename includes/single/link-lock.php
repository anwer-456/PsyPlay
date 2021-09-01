<?php if(get_option('psy-hide-vid') =="disable"):?>
<?php downloads_list(); ?>
<?php else: ?>
<?php if ( is_user_logged_in() ) {
	downloads_list();
}else {
	echo '<div class="alert alert-warning" style="border-radius: 0;margin-top:20px;">
<i class="fa fa-warning mr5"></i> <b><strong></strong> '.__('You must be logged-in to see the download links.', 'psythemes').'</b>
</div>';
}
?>
<?php endif;?>