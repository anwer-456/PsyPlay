<?php
include 'includes/theme_info.php';
define('MENU_TITLE', 'PsyPlay Options'); 
define('MENU_SLUG', 'psyplay');
if (!class_exists('acera_theme_options')) {
class acera_theme_options {
private $options;
public function acera_theme_options($options) {
$this->options = $options;
add_action('admin_menu', array(&$this, 'acera_add_menu')); }
public function acera_add_menu() {
add_menu_page(__(MENU_TITLE), __(MENU_TITLE), 'administrator',  MENU_SLUG, array(&$this, 'acera_display_page'), 'dashicons-admin-tools'); }
public function acera_display_page() { ?>


<form id="acera-settings" method="post">
<div class="saveResult"></div>
<?php if(get_option( DT_KEY ) == "valid"): $this->save_options(); endif ?>
<script type="text/javascript">
jQuery(document).ready(function() {
   jQuery('#acera-settings').submit(function() { 
      jQuery(this).ajaxSubmit({
         success: function(){
            jQuery('.saveResult').html("<div class='saveMessage'></div>");
            jQuery('.saveMessage').append("<div id='message' class='notice rebskt updated'><p><?php echo htmlentities(__('Settings saved.'),ENT_QUOTES); ?></p></div>").show();
         }, 
         timeout: 5000
      }); 
      setTimeout("jQuery('.saveMessage').hide('show');", 4000);
      return false; 
   });
});
</script>
<?php if(get_option( DT_KEY ) == "valid") { if( $_POST["action"] ) { ?>
<div id="message" class="datexpost updated notice notice-success is-dismissible below-h2"><p><?php _e('Settings saved.') ?> </p><button type="button" class="notice-dismiss"><span class="screen-reader-text"></span></button></div>
<?php } } else { ?>
<div id="message" class="datexpost updated error notice-success is-dismissible below-h2">
<p><?php _e('Invalid license, it is possible that some of the options may not work correctly','psythemes') ?></p>
</div>
<?php } ?>


<div id="acera-sidebar">
<div id="acera-meta-info">
<h1><?php echo DT_THEME_NAME; ?> <em><?php echo DT_VERSION; ?></em></h1>
</div>
<ul id="acera-main-menu">
<?php $first = true; ?> 
<?php
/* Cycle that goes though $options array, it is searching for headings and sections to make navigation */
foreach ($this->options as $option):
if ($option['type'] == "section") :
$section = $option['id'];
?>
<li><p><span class="dashicons-before <?php echo $option['icon']; ?>"></span><?php echo $option['title']; ?></p>
<ul<?php if ($option['expanded'] == "true") echo ' class="default-accordion"'; ?>>
<?php
foreach ($this->options as $sections):
if (($sections['section'] == $section) && (($sections['type'] == "heading") || ($sections['type'] == "html"))):
?>
<li><a<?php
if ($first) {
echo ' class="defaulttab"';
$first = false;
}
?> href="#" rel="<?php echo $sections['id']; ?>"><p><?php echo $sections['title']; ?></p></a></li>
<?php
endif;
endforeach;
?> 
</ul>
</li>
<?php
endif;
endforeach;
?>
</ul>
<div id="acera-meta-info">
<h2><a href="https://psythemes.ml/forums/forumdisplay.php?fid=6" target="_blank"><?php _e('Support Forum','psythemes'); ?></a></h2>
</div>
</div>
<div id="acera-content">
<?php foreach ($this->options as $option): ?> 
<?php if ($option['type'] == "heading"): ?>
<?php $under_section = $option['id']; ?>
<div class="tab-content" id="<?php echo $option['id']; ?>">
<div class="acera-settings-headline">
<h2><?php echo $option['title']; ?></h2>				
<input name="publish" class="dt_button button button-primary button-large" type="submit" value="<?php _e('Save Changes','psythemes'); ?>" id="publish" />

</div>
<?php
foreach ($this->options as $item) {
	if ($item['under_section'] == $under_section) {
		switch ($item['type']) {
			case "text":
				$this->display_text($item);
			break;

			case "password":
				$this->display_password($item);
			break;

			case "number":
				$this->display_number($item);
			break;

			case "color":
				$this->display_color($item);
			break;

			case "small_heading":
				$this->display_small_heading($item);
			break;

			case "textarea":
				$this->display_textarea($item);
			break;

			case "image":
				$this->display_image($item);
			break;

			case "checkbox":
				$this->display_checkbox($item);
			break;

			case "checkbox_image":
				$this->display_checkbox_image($item);
			break;

			case "radio":
				$this->display_radio($item);
			break;

			case "toggle_div_start":
				$this->display_toggle_div_start($item);
			break;

			case "toggle_div_end":
				$this->display_toggle_div_end();
			break;

			case "radio_image":
				$this->display_radio_image($item);
			break;

			case "select":
				$this->display_select($item);
			break;

			case "pages":
				$this->display_pages($item);
			break;

			case "tips":
				$this->display_tips($item);
			break;

			case "iframe":
				$this->display_iframe($item);
			break;
		}
	}
}
?>
</div>
<?php endif; ?>
<?php if ($option['type'] == "html"): ?>
<div class="tab-content" id="<?php echo $option['id']; ?>">
<?php echo $option['source']; ?>
</div>
<?php endif; ?>
<?php endforeach; ?>

<div class="dt_footer">
<input name="save" class="dt_button button button-primary button-large" type="submit" value="<?php _e('Save Changes','psythemes'); ?>" />
<div class="saveResult"></div>
</div>
</div> 
<input type="hidden" name="action" id="action" value="acera_save_options" />
</form>
<?php
}

public function display_iframe($value) { 
	$rel = "";
	if ($value['display_checkbox_id'])
	$rel = " rel=".$value['display_checkbox_id'];
	else
	$rel = ""; ?>
		<div<?php echo $rel; ?> class="dt_separator">
			<?php if ($value['src']): ?><iframe class="dt_iframe" height="<?php echo $value['height']; ?>" src="<?php echo $value['src']; ?>?mail=<?php echo get_option("admin_email"); ?>&licencia=<?php echo get_option('edd_sample_theme_license_key'); ?>&theme=<?php echo THEME_NAME; ?>&version=<?php echo THEME_VERSION; ?>" frameborder="0" allowfullscreen></iframe><?php endif; ?>
		</div>
<?php
	}

	
	

/* Normal text input ("type" => "tips" */
public function display_tips($value) { 
	$rel = "";
	if ($value['display_checkbox_id'])
	$rel = " rel=".$value['display_checkbox_id'];
	else
	$rel = ""; ?>
		<div<?php echo $rel; ?> class="dt_separator">
			<?php if ($value['text']): ?><p class="dt_f_tips"><?php echo $value['text']; ?></p><?php endif; ?>
			<?php if ($value['code']): ?><pre class="dt_f_code"><?php echo $value['code']; ?></pre><?php endif; ?>
			<?php if ($value['warn']): ?><p class="dt_f_warn"><?php echo '<b>Warning:</b>'; ?> <?php echo $value['warn']; ?></p><?php endif; ?>
		</div>
<?php
	}
public function display_text($value) {
	$rel = "";
	if ($value['display_checkbox_id'])
	$rel = " rel=".$value['display_checkbox_id'];
	else
	$rel = "";
	?>
	<div<?php echo $rel; ?> class="dt_separator">
		<div class="label">
			<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
			<?php if ($value['code']): ?><pre class="dt_f_code"><?php echo $value['code']; ?></pre><?php endif; ?>
		</div>
		<div class="settings-content">
		<?php if ($value['img_desc']): ?>
			<div class="acera_image_preview">
				<img src="<?php echo $value['img_desc']; ?>" />
			</div>
		<?php endif; ?>
		<input<?php if ($value['placeholder']) echo ' placeholder="' . $value['placeholder'] . '"'; ?> class="acera-fullwidth" id="<?php echo $value['id']; ?>" name="<?php echo $value['id']; ?>" type="text" value="<?php if (get_option($value['id'])) echo esc_html(stripslashes(get_option($value['id'])));else echo $value['default']; ?>" />
		<p class="description"><?php echo $value['desc']; ?></p>
		</div>
	</div>
<?php
}
public function display_password($value) {
$rel = "";
if ($value['display_checkbox_id'])
$rel = " rel=".$value['display_checkbox_id'];
else
$rel = "";
?>
<div<?php echo $rel; ?> class="dt_separator">
<div class="label">
<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
</div>
<div class="settings-content">

<?php if ($value['img_desc']): ?>
<div class="acera_image_preview">
<img src="<?php echo $value['img_desc']; ?>" />
</div>
<?php endif; ?>

<input<?php if ($value['placeholder']) echo ' placeholder="' . $value['placeholder'] . '"'; ?> class="acera-fullwidth" id="<?php echo $value['id']; ?>" name="<?php echo $value['id']; ?>" type="password" value="<?php if (get_option($value['id'])) echo esc_html(stripslashes(get_option($value['id'])));else echo $value['default']; ?>" />
<p class="description"><?php echo $value['desc']; ?></p>
</div>
</div>
<?php
}
public function display_number($value) {
$rel = "";
if ($value['display_checkbox_id'])
$rel = " rel=".$value['display_checkbox_id'];
else
$rel = "";
?>
<div<?php echo $rel; ?> class="dt_separator">
<div class="label">
<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
</div>
<div class="settings-content">

<?php if ($value['img_desc']): ?>
<div class="acera_image_preview">
<img src="<?php echo $value['img_desc']; ?>" />
</div>
<?php endif; ?>

<input<?php if ($value['placeholder']) echo ' placeholder="' . $value['placeholder'] . '"'; ?> class="number" min="<?php echo $value['min']; ?>" max="<?php echo $value['max']; ?>" step="<?php echo $value['step']; ?>" id="<?php echo $value['id']; ?>" name="<?php echo $value['id']; ?>" type="number" value="<?php if (get_option($value['id'])) echo esc_html(stripslashes(get_option($value['id'])));else echo $value['default']; ?>" />
<p class="description"><?php echo $value['desc']; ?></p>
</div>
</div>
<?php
}
/* Color picker ("type" => "color") */
public function display_color($value) {
$rel = "";
if ($value['display_checkbox_id'])
$rel = " rel=".$value['display_checkbox_id'];
else
$rel = "";
?>
<?php
if (get_option($value['id']))
$color = ' style="background-color: #' . get_option($value['id']) . ';"';
else if ($value['default'])
$color = ' style="background-color: #' . $value['default'] . ';"'
?>
<div<?php echo $rel; ?> class="dt_separator">
<div class="label">
<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
</div>
<div class="settings-content">

<?php if ($value['img_desc']): ?>
<div class="acera_image_preview">
<img src="<?php echo $value['img_desc']; ?>" />
</div>
<?php endif; ?>

<input<?php if ($value['placeholder']) echo ' placeholder="' . $value['placeholder'] . '"'; ?> class="acera-color-picker"<?php echo $color; ?> id="<?php echo $value['id']; ?>" name="<?php echo $value['id']; ?>" type="text" value="<?php if (get_option($value['id'])) echo esc_html(stripslashes(get_option($value['id'])));else echo $value['default']; ?>" />
<p class="description"><?php echo $value['desc']; ?></p>
</div>
</div>
<?php
}
/* Image Upload ("type" => "image") */
public function display_image($value) {
$rel = "";
if ($value['display_checkbox_id'])
$rel = " rel=".$value['display_checkbox_id'];
else
$rel = "";
?>
<div<?php echo $rel; ?> class="dt_separator">
<div class="label">
<label><?php echo $value['name']; ?></label>
</div>
<div class="settings-content">
<?php
if (get_option($value['id']))
$def_value = stripslashes(get_option($value['id']));
else
$def_value = $value['default'];
?>
<input<?php if ($value['placeholder']) echo ' placeholder="' . $value['placeholder'] . '"'; ?> class="acera-fullwidth dt_upload" type="text" value="<?php echo $def_value; ?>" name="<?php echo $value['id']; ?>" />
<span class="upload acera_upload acera-button-blue" id="<?php echo $value['id']; ?>"><?php _e('Upload','psythemes'); ?></span>
<?php if (get_option($value['id'])): ?>
<span type="button" class="acera_remove acera-button" id="remove_<?php echo $value['id']; ?>"><?php _e('Remove','psythemes'); ?></span>
<?php endif; ?>

<div class="acera_image_preview">
<?php if (get_option($value['id'])): ?>
<img src="<?php echo get_option($value['id']); ?>" />
<?php elseif ($value['default'] != ""): ?>
<img src="<?php echo $value['default']; ?>" />
<?php endif; ?>
</div>
<p class="description"><?php echo $value['desc']; ?></p>
</div>
</div>
<?php
}
/* Textarea input ("type" => "textarea") */
public function display_textarea($value) {
$rel = "";
if ($value['display_checkbox_id'])
$rel = " rel=".$value['display_checkbox_id'];
else
$rel = "";
?>
<div<?php echo $rel; ?> class="dt_separator">
<div class="label">
<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
<?php if ($value['code']): ?><pre class="dt_f_code"><?php echo $value['code']; ?></pre><?php endif; ?>
</div>
<div class="settings-content">
<?php if ($value['img_desc']): ?>
<div class="acera_image_preview">
<img src="<?php echo $value['img_desc']; ?>" />
</div>
<?php endif; ?>
<textarea<?php if ($value['placeholder']) echo ' placeholder="' . $value['placeholder'] . '"'; ?> id="<?php echo $value['id']; ?>" name="<?php echo $value['id']; ?>" cols="70" rows="10"><?php
if (get_option($value['id']))
echo stripslashes(get_option($value['id']));
else
echo $value['default'];
?></textarea>
<p class="description"><?php echo $value['desc']; ?></p>
</div>
</div>
<?php } /* Select input ("type" => "select") */
public function display_select($value) {
$rel = "";
if ($value['display_checkbox_id'])
$rel = " rel=".$value['display_checkbox_id'];
else
$rel = ""; ?>
<div<?php echo $rel; ?> class="separator2">
<div class="label">
<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
</div>
<div class="settings-content">
<div class="acera_image_preview">
<?php if ($value['img_desc']): ?>
<img src="<?php echo $value['img_desc']; ?>" />
<?php endif; ?>
</div>
<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php if (get_option($value['id']))
$default = get_option($value['id']);
else
$default = $value['default'];
foreach ($value['options'] as $option):
$selected = '';
if ($option == $default)
$selected = ' selected="selected"'; ?>
<option <?php echo $selected; ?>><?php echo $option ?></option>
<?php endforeach; ?>
</select>
<p class="description"><?php echo $value['desc']; ?></p>
</div>
</div>
<?php
}
/* Select input ("type" => "pages") */
public function display_pages($value) {
$rel = "";
if ($value['display_checkbox_id'])
$rel = " rel=".$value['display_checkbox_id'];
else
$rel = "";
?>
<div<?php echo $rel; ?> class="dt_separator">
<div class="label">
<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
</div>
<div class="settings-content">
<?php if ($value['img_desc']): ?>
<div class="acera_image_preview">
<img src="<?php echo $value['img_desc']; ?>" />
</div>
<?php endif; ?>
<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php ?>
<?php $pages = get_pages(); foreach ($pages as $page): 
$selected = get_option($value['id']) == get_page_link($page->ID) ? 'selected="selected"' : ''; 
echo '<option value="'.get_page_link($page->ID).'" ' . $selected, '>', $page->post_title, '</option>';
endforeach; 
?>
</select>
<p class="description"><?php echo $value['desc']; ?></p>
</div>
</div>
<?php
}
/* Normal checkbox ("type" => "checkbox") */
public function display_checkbox($value) {
$rel = "";
if ($value['display_checkbox_id'])
$rel = " rel=".$value['display_checkbox_id'];
else
$rel = "";
?>
<div<?php echo $rel; ?> class="dt_separator">
<div class="label">
<label><?php echo $value['name']; ?></label>
<?php if ($value['code']): ?><pre class="dt_f_code"><?php echo $value['code']; ?></pre><?php endif; ?>
</div>
<div class="settings-content">
<?php if ($value['img_desc']): ?>
<div class="acera_image_preview">
<img src="<?php echo $value['img_desc']; ?>" />
</div>
<?php endif; ?>
<?php
$i = 0;
foreach ($value['options'] as $box):
$checked = '';
if (get_option($value['id'][$i])) {
if (get_option($value['id'][$i]) == 'true')
$checked = ' checked="checked"';
else
$checked = '';
}
else {
if ($value['default'][$i] == "checked")
$checked = ' checked="checked"';
}
?>
<label for="<?php echo $value['id'][$i]; ?>">
<input type="checkbox"<?php echo $checked; ?> name="<?php echo $value['id'][$i]; ?>" id="<?php echo $value['id'][$i]; ?>" />
<?php echo $box; ?>
</label>
<?php
$i++;
endforeach;
?>
<p class="description"><?php echo $value['desc']; ?></p>
</div>
</div>
<?php
}
/* Image checkbox ("type" => "checkbox_image") */
public function display_checkbox_image($value) {
$rel = "";
if ($value['display_checkbox_id'])
$rel = " rel=".$value['display_checkbox_id'];
else
$rel = "";
?>
<div<?php echo $rel; ?> class="dt_separator">
<div class="label">
<label><?php echo $value['name']; ?></label>
</div>
<div class="settings-content">
<div class="cOf">
<?php
$i = 0;
foreach ($value['options'] as $box):
$checked = '';
$class = '';
$img_size = '';
if ($value['image_size'][$i])
$img_size = 'width="' . $value['image_size'][$i] . '"';
else if ($value['image_size'][$i] == false && $value['image_size'][0] == true)
$img_size = 'width="' . $value['image_size'][0] . '"';
else
$img_size = 'width="120"';
if (get_option($value['id'][$i])) {
if (get_option($value['id'][$i]) == 'true') {
$checked = ' checked="checked"';
$class = ' acera-img-selected';
}
} elseif ($value['default'][$i] == "checked") {
$class = ' acera-img-selected';
$checked = ' checked="checked"';
}
?>
<label class="acera-image-checkbox<?php echo $class; ?>" for="<?php echo $value['id'][$i]; ?>">
<img <?php echo $img_size; ?> src="<?php echo $value['image_src'][$i]; ?>" alt="<?php echo $box ?>" />
<input class="acera-image-checkbox-b" type="checkbox"<?php echo $checked; ?> name="<?php echo $value['id'][$i]; ?>" id="<?php echo $value['id'][$i]; ?>" />
<?php if ($value['show_labels'] == "true"): ?><p><?php echo $box; ?></p><?php endif; ?>
</label>
<?php
$i++;
endforeach;
?>
</div>
<p class="description"><?php echo $value['desc']; ?></p>
</div>
</div>
<?php
}
/* Normal radio input ("type" => "radio") */
public function display_radio($value) {
$rel = "";
if ($value['display_checkbox_id'])
$rel = " rel=".$value['display_checkbox_id'];
else
$rel = "";
?>
<div<?php echo $rel; ?> class="dt_separator">
<div class="label">
<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
<?php if ($value['code']): ?><pre class="dt_f_code"><?php echo $value['code']; ?></pre><?php endif; ?>
</div>
<div class="settings-content">

<?php if ($value['img_desc']): ?>
<div class="acera_image_preview">
<img src="<?php echo $value['img_desc']; ?>" />
</div>
<?php endif; ?>
<?php
$i = 0;
if (get_option($value['id']))
$default = get_option($value['id']);
else
$default = $value['default'];
foreach ($value['options'] as $valor => $option):
$checked = '';
if ($valor == $default) {
$checked = ' checked="checked"';
}
?>
<label for="<?php echo $value['id'] . $i; ?>">
<input type="radio" id="<?php echo $value['id'] . $i; ?>" name="<?php echo $value['id']; ?>" value="<?php echo $valor; ?>" <?php echo $checked; ?> />
<?php echo $option; ?>
</label>
<?php
$i++;
endforeach;
?>
<p class="description"><?php echo $value['desc']; ?></p>
</div>
</div>
<?php
}
/* Image radio input ("type" => "radio_image") */
public function display_radio_image($value) {
$rel = "";
if ($value['display_checkbox_id'])
$rel = " rel=".$value['display_checkbox_id'];
else
$rel = "";
?>
<div<?php echo $rel; ?> class="dt_separator">
<div class="label">
<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
</div>
<div class="settings-content">
<div class="cOf">
<?php
$i = 0;
if (get_option($value['id']))
$default = get_option($value['id']);
else
$default = $value['default'];
foreach ($value['options'] as $option):
$class = '';
$img_size = '';
$checked = '';
if ($value['image_size'][$i])
$img_size = 'width="' . $value['image_size'][$i] . '"';
else if ($value['image_size'][$i] == false && $value['image_size'][0] == true)
$img_size = 'width="' . $value['image_size'][0] . '"';
else
$img_size = 'width="120"';
if ($value['options'][$i] == $default) {
$checked = ' checked="checked"';
$class = ' acera-img-selected';
}
?>
<label class="acera-image-radio<?php echo $class; ?>" for="<?php echo $value['id'] . $i; ?>">
<img <?php echo $img_size; ?> src="<?php echo $value['image_src'][$i]; ?>" alt="<?php echo $box ?>" />
<input class="acera-image-radio-b" type="radio" id="<?php echo $value['id'] . $i; ?>" name="<?php echo $value['id']; ?>" value="<?php echo $value['options'][$i]; ?>" <?php echo $checked; ?> />
<?php if ($value['show_labels'] == "true"): ?><p><?php echo $option; ?></p><?php endif; ?>
</label>
<?php
$i++;
endforeach;
?>
</div>
<p class="description"><?php echo $value['desc']; ?></p>
</div>
</div>
<?php
}
/* Displays small Heading in tabs */
public function display_small_heading($value) {
$rel = "";
if ($value['display_checkbox_id'])
$rel = " rel=".$value['display_checkbox_id'];
else
$rel = "";
?>
<div<?php echo $rel; ?> class="dt_separator">
<h4><?php echo $value['title']; ?></h4>
</div>
<?php
}



/* Hiding div start ("type" => "toggle_div_start" */
public function display_toggle_div_start($value) {
$rel = "";
if ($value['display_checkbox_id'])
$rel = " rel=".$value['display_checkbox_id'];
else
$rel = "";
?>
<div<?php echo $rel; ?>>
<?php
}
/* Hiding div end ("type" => "toggle_toggle_div_end" */
public function display_toggle_div_end() { ?>
</div>                    
<?php
}
public function save_options() {
if (isset($_POST['action']) && $_POST['action'] == "acera_save_options") {
foreach ($this->options as $value) {
$the_type = $value['type'];
if ($the_type == "heading" || $the_type == "section" || $the_type == "small_heading")
continue;
else if ($the_type != "checkbox" && $the_type != "checkbox_image") {
update_option($value['id'], $_POST[$value['id']]);
} else if ($the_type == "checkbox" || $the_type == "checkbox_image") {
$i = 0;
foreach ($value['options'] as $box) {
$curr_id = $value['id'][$i];
if (isset($_POST[$curr_id]))
update_option($curr_id, 'true');
else
update_option($curr_id, 'false');
$i++;
}
}
}
}
}
}
}
?>
