<?php class relnews_widget extends WP_Widget{
	function relnews_widget() {
		$widget_opts = array("class_name" => "relnews_widget","description" => __('Related News widget','psythemes'));
		$this->WP_Widget("relnews_widget","PsyPlay: Related News",$widget_opts);
	}
function widget($args, $instance) { echo $before_widget; ?>
<?php get_template_part('loop/sidebar-related-news'); ?>
<?php echo $after_widget; } function update($new_instance, $old_instance) { } function form($instance) { ?>
<div class="widget_note_muntothemes">
<?php _e('Related News Sidebar','psythemes'); ?>
</div>
<?php }	 } add_action('widgets_init', create_function('', 'return register_widget("relnews_widget");'));

?>
