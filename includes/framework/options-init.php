<?php
	if (is_admin()) {
		include_once 'options/acera_options.php';
		include_once 'admin-helper.php';
		include_once 'ajax-image.php';
		include_once 'generate-options.php';
		new acera_theme_options($options);
		add_action('admin_head', 'acera_admin_head');
		add_action('admin_head', 'acera_admin_head_2');
		add_action('admin_head', 'acera_admin_head_3');
	}
?>
