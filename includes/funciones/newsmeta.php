<?php
function noticias_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}
function noticias_add_meta_box() {
	add_meta_box(
		'psy-content-info',
		__( 'Article Heading', 'psythemes' ),
		'noticias_html',
		'noticias',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'noticias_add_meta_box' ); function noticias_html( $post) { wp_nonce_field( '_noticias_nonce', 'noticias_nonce' ); ?>

<table class="options-table-responsive psy-details-table">
	<tbody>
		
	
			<tr id="psy_featured_slide_img_box">
		<td class="label">
			<label for="featured_slide_img"><?php _e('Article Cover Photo', 'psythemes'); ?></label>
			<p class="description"><?php _e('It will appear above the single article.', 'psythemes'); ?></p>
		</td>
		<td class="field">
		<input class="regular-text" type="text" name="news_cover" id="news_cover" value="<?php echo series_get_meta( 'news_cover' ); ?>">
		<input id="boton" class="up_images upaa button-secondary" type="button" value="<?php _e('Upload', 'psythemes'); ?>" />
		</td>
	</tr>
		
	</tbody>
</table>


<?php }
function noticias_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['noticias_nonce'] ) || ! wp_verify_nonce( $_POST['noticias_nonce'], '_noticias_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;
if ( isset( $_POST['news_cover'] ) )
update_post_meta( $post_id, 'news_cover', esc_attr( $_POST['news_cover'] ) );
}
add_action( 'save_post', 'noticias_save' );
function custom_admin_js4() { global $post_type; if( $post_type == 'noticias' ) { ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/includes/framework/js/idtabstbb.js"></script>
<style>
p.description .dashicons {
    font-size: 20px;
    margin-top: -2px;
    margin-right: 3px;
    margin-left: 5px;
    color: #e25958;
}
</style>
<?php 
  } }
add_action('admin_footer', 'custom_admin_js4');