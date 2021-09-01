<?php
function cg_content($more_link_text='(more...)', $stripteaser=0, $more_file='', $cut = 0, $encode_html = 0) {
	$content = get_the_content($more_link_text, $stripteaser, $more_file);
	$content = strip_shortcodes(apply_filters('the_content_rss', $content));
	if ( $cut && !$encode_html )
		$encode_html = 2;
	if ( 1== $encode_html ) {
		$content = wp_specialchars($content);
		$cut = 0;
	} elseif ( 0 == $encode_html ) {
		$content = make_url_footnote($content);
	} elseif ( 2 == $encode_html ) {
		$content = strip_tags($content);
	}
	if ( $cut ) {
		$blah = explode(' ', $content);
		if ( count($blah) > $cut ) {
			$k = $cut;
			$use_dotdotdot = 1;
		} else {
			$k = count($blah);
			$use_dotdotdot = 0;
		}
 for ( $i=0; $i<$k; $i++ )
			$excerpt .= $blah[$i].' ';
		$excerpt .= ($use_dotdotdot) ? '...' : '';
		$content = $excerpt;
	}
	$content = str_replace(']]>', ']]&gt;', $content);
	echo $content;
}
function psy_footer_copyrights() { ?>
<?php if($copy = get_option('copyright_footer')) { ?>
<span class="copyright">
<?php echo stripslashes($copy); ?>
</span>
<?php } else { ?>

<?php _e('Copyright', 'psythemes'); ?> <?php bloginfo('name'); ?>  &copy; <?php echo date ("Y"); ?>. <?php _e('All rights reserved', 'psythemes'); ?>. 
 <br><?php _e('Theme Design by ', 'psythemes'); ?><a class="psy_type" href="https://psythemes.com" target="_blank" alt="PsyThemes" title="PsyThemes">PsyThemes</a> / <span class="psy_type" title="<?php echo DT_THEME_NAME; ?> <?php echo DT_VERSION; ?>"><?php echo DT_THEME_NAME; ?> <?php echo DT_VERSION; ?></span>
<?php } ?>

<?php } 