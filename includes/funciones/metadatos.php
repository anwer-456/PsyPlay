<?php

// define ('IMDB_API_URL',  get_bloginfo('stylesheet_directory'). '/includes/plugins/imdb/');
function info_movie_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}
function info_movie_add_meta_box() {
	add_meta_box(
		'psy-content-info',
		__('Movie Information', 'psythemes'),
		'info_movie_html',
		'post',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'info_movie_add_meta_box' );
function info_movie_html( $post) {
wp_nonce_field( '_info_movie_nonce', 'info_movie_nonce' ); ?>
<table class="options-table-responsive psy-details-table">
	<tbody>
		<tr id="ids_box">
		<td class="label">
			<label for="ids"><?php _e('Generate Data','psythemes'); ?></label>
			<p class="description"><?php _e('Generate data from','psythemes'); ?> <strong>imdb.com</strong></p>
		</td>
		<td style="background: #f7f7f7" class="field">
		<input class="regular-text" type="text" name="Checkbx2" id="Checkbx2" value="<?php echo info_movie_get_meta( 'Checkbx2' ); ?>">
		<input type="button" class="button button-primary generate" name="Checkbx" value="<?php _e('Generate Data','psythemes'); ?>">
			<p class="description">E.g. http://www.imdb.com/title/<strong>tt1375666</strong>/</p>
			<p id="verify" style="display:none"><a class="button button-secondary" id="comprovate"><?php _e('Check duplicate content','psythemes'); ?></a><p>
		</p></td>
	</tr>
	<tr>
		<td colspan="2"><h3><?php _e('Images and Trailer','psythemes'); ?></h3></td>
	</tr>
			<tr id="psy_featured_slide_img_box">
		<td class="label">
			<label for="featured_slide_img"><?php _e('Slide Featured Image','psythemes'); ?></label>
			<p class="description"><?php _e('Recommended size is: 1200x418','psythemes'); ?></p>
		</td>
		<td class="field">
		<input class="regular-text" type="text" name="featureds_img" id="featureds_img" value="<?php echo info_movie_get_meta( 'featureds_img' ); ?>">
<input id="boton" class="up_images upaa button-secondary" type="button" value="<?php _e('Upload', 'psythemes'); ?>" />
<p class="description"><?php _e('It will be used in the featured slider. If empty, main backdrop image will be used.','psythemes'); ?></p>
		</td>
	</tr>
		<tr id="psy_poster_box">
		<td class="label">
			<label for="psy_poster"><?php _e('Poster','psythemes'); ?></label>
			<p class="description"><?php _e('Add url image','psythemes'); ?></p>
		</td>
		<td class="field">
<input class="regular-text" type="text" name="poster_url" id="poster_url" value="<?php echo info_movie_get_meta( 'poster_url' ); ?>">
<input id="boton" class="up_images upaa button-secondary" type="button" value="<?php _e('Upload', 'psythemes'); ?>" />
		</td>
	</tr>
	<tr id="psy_backdrop_box">
		<td class="label">
			<label for="psy_backdrop"><?php _e('Main Backdrop','psythemes'); ?></label>
			<p class="description"><?php _e('Add url image','psythemes'); ?></p>
		</td>
		<td class="field">
<input class="regular-text" type="text" name="fondo_player" id="fondo_player" value="<?php echo info_movie_get_meta( 'fondo_player' ); ?>">
<input id="boton" class="up_images upaa button-secondary" type="button" value="<?php _e('Upload', 'psythemes'); ?>" />
		</td>
	</tr>
	<tr id="imagenes_box">
		<td class="label">
			<label for="imagenes"><?php _e('Backdrops','psythemes'); ?></label>
			<p class="description"><?php _e('Place each image url below another','psythemes'); ?></p>
		</td>
		<td class="field">
<textarea name="imagenes" id="imagenes" rows="5"><?php echo info_movie_get_meta( 'imagenes' ); ?></textarea>
<input id="boton" class="up_images upaa button-secondary" type="button" value="<?php _e('Upload', 'psythemes'); ?>" />
		</td>
	</tr>
	<tr id="youtube_id_box">
		<td class="label">
			<label for="youtube_id"><?php _e('Video trailer','psythemes'); ?></label>
			<p class="description"><?php _e('Add id Youtube video','psythemes'); ?></p>
		</td>
		<td class="field">
			<input class="small-text" type="text" name="youtube_id" id="youtube_id" value="<?php echo info_movie_get_meta( 'youtube_id' ); ?>" placeholder="[RllJtOw0USI]">
			<p class="description">[id_video_youtube]</p>
		</td>
	</tr>
		<tr>
		<td colspan="2"><h3><?php _e('IMDb.com Data','psythemes'); ?></h3></td>
	</tr>
	<tr id="rating_imdb_box">
		<td class="label">
			<label for="imdbRating"><?php _e('Rating IMDb','psythemes'); ?></label>
			<p class="description"><?php _e('Average / votes','psythemes'); ?></p>
		</td>
		<td class="field">
		<input class="extra-small-text" type="text" name="imdbRating" id="imdbRating" value="<?php echo info_movie_get_meta( 'imdbRating' ); ?>"> - 
		<input class="extra-small-text" type="text" name="imdbVotes" id="imdbVotes" value="<?php echo info_movie_get_meta( 'imdbVotes' ); ?>">
		</td>
	</tr>
	<tr id="Rated_box">
		<td class="label">
			<label for="Rated"><?php _e('Rated','psythemes'); ?></label>
		</td>
		<td class="field">
		<input class="regular-text" type="text" name="Rated" id="Rated" value="<?php echo info_movie_get_meta( 'Rated' ); ?>">

		</td>
	</tr>
	<tr id="Country_box">
		<td class="label">
			<label for="Country"><?php _e('Country','psythemes'); ?></label>
		</td>
		<td class="field">
			<input class="regular-text" type="text" name="Country" id="Country" value="<?php echo info_movie_get_meta( 'Country' ); ?>">
		</td>
	</tr>
			<tr>
		<td colspan="2"><h3><?php _e('TMDb.org Data','psythemes'); ?></h3></td>
	</tr>
	<tr id="original_title_box">
		<td class="label">
			<label for="original_title"><?php _e('Original title','psythemes'); ?></label>
		</td>
		<td class="field">
			<input class="regular-text" type="text" name="Title" id="Title" value="<?php echo info_movie_get_meta( 'Title' ); ?>">
		</td>
	</tr>
	<tr id="tagline_box">
		<td class="label">
			<label for="tagline"><?php _e('Tag line','psythemes'); ?></label>
		</td>
		<td class="field">
			<input class="regular-text" type="text" name="tagline" id="tagline" value="<?php echo info_movie_get_meta( 'tagline' ); ?>">
		</td>
	</tr>
	<tr id="release_date_box">
		<td class="label">
			<label for="release_date"><?php _e('Release Date','psythemes'); ?></label>
		</td>
		<td class="field">
			<input class="regular-text" type="date" name="release_date" id="release_date" value="<?php echo info_movie_get_meta( 'release_date' ); ?>">
		</td>
	</tr>
	<tr id="rating_tmdb_box">
		<td class="label">
			<label for="vote_average"><?php _e('Rating TMDb','psythemes'); ?></label>
			<p class="description"><?php _e('Average / votes','psythemes'); ?></p>
		</td>
		<td class="field">
			<input class="extra-small-text" type="text" name="vote_average" id="vote_average" value="<?php echo info_movie_get_meta( 'vote_average' ); ?>"> - 
			<input class="extra-small-text" type="text" name="vote_count" id="vote_count" value="<?php echo info_movie_get_meta( 'vote_count' ); ?>">
		</td>
	</tr>
	<tr id="runtime_box">
		<td class="label">
			<label for="runtime"><?php _e('Runtime','psythemes'); ?></label>
		</td>
		<td class="field">
			<input class="regular-text" type="text" name="Runtime" id="Runtime" value="<?php echo info_movie_get_meta( 'Runtime' ); ?>">
		</td>
	</tr>
	
	</tbody>
</table>


















<?php }
function info_movie_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['info_movie_nonce'] ) || ! wp_verify_nonce( $_POST['info_movie_nonce'], '_info_movie_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;
/*  Guardar datos */
    if ( isset( $_POST['Checkbx2'] ) ) update_post_meta( $post_id, 'Checkbx2', esc_attr( $_POST['Checkbx2'] ) );
	if ( isset( $_POST['featureds_img'] ) ) update_post_meta( $post_id, 'featureds_img', esc_attr( $_POST['featureds_img'] ) );
	if ( isset( $_POST['poster_url'] ) ) update_post_meta( $post_id, 'poster_url', esc_attr( $_POST['poster_url'] ) );
	if ( isset( $_POST['fondo_player'] ) ) update_post_meta( $post_id, 'fondo_player', esc_attr( $_POST['fondo_player'] ) );
	if ( isset( $_POST['imagenes'] ) ) update_post_meta( $post_id, 'imagenes', esc_attr( $_POST['imagenes'] ) );
	if ( isset( $_POST['youtube_id'] ) ) update_post_meta( $post_id, 'youtube_id', esc_attr( $_POST['youtube_id'] ) );
	if ( isset( $_POST['imdbRating'] ) ) update_post_meta( $post_id, 'imdbRating', esc_attr( $_POST['imdbRating'] ) );
	if ( isset( $_POST['imdbVotes'] ) ) update_post_meta( $post_id, 'imdbVotes', esc_attr( $_POST['imdbVotes'] ) );
	if ( isset( $_POST['Title'] ) ) update_post_meta( $post_id, 'Title', esc_attr( $_POST['Title'] ) );
	if ( isset( $_POST['Rated'] ) ) update_post_meta( $post_id, 'Rated', esc_attr( $_POST['Rated'] ) );
	if ( isset( $_POST['release_date'] ) ) update_post_meta( $post_id, 'release_date', esc_attr( $_POST['release_date'] ) );
	if ( isset( $_POST['Runtime'] ) ) update_post_meta( $post_id, 'Runtime', esc_attr( $_POST['Runtime'] ) );
	if ( isset( $_POST['Awards'] ) ) update_post_meta( $post_id, 'Awards', esc_attr( $_POST['Awards'] ) );
	if ( isset( $_POST['Country'] ) ) update_post_meta( $post_id, 'Country', esc_attr( $_POST['Country'] ) );
	if ( isset( $_POST['vote_average'] ) ) update_post_meta( $post_id, 'vote_average', esc_attr( $_POST['vote_average'] ) );
	if ( isset( $_POST['vote_count'] ) ) update_post_meta( $post_id, 'vote_count', esc_attr( $_POST['vote_count'] ) );
	if ( isset( $_POST['budget'] ) ) update_post_meta( $post_id, 'budget', esc_attr( $_POST['budget'] ) );
	if ( isset( $_POST['revenue'] ) ) update_post_meta( $post_id, 'revenue', esc_attr( $_POST['revenue'] ) );
	if ( isset( $_POST['popularity'] ) ) update_post_meta( $post_id, 'popularity', esc_attr( $_POST['popularity'] ) );
	if ( isset( $_POST['id'] ) ) update_post_meta( $post_id, 'id', esc_attr( $_POST['id'] ) );
	if ( isset( $_POST['status'] ) ) update_post_meta( $post_id, 'status', esc_attr( $_POST['status'] ) );
	if ( isset( $_POST['tagline'] ) ) update_post_meta( $post_id, 'tagline', esc_attr( $_POST['tagline'] ) );

}
add_action( 'save_post', 'info_movie_save' );
function custom_admin_js() { 
global $post_type; if( $post_type == 'post' ) { ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/includes/framework/js/idtabstbb.js"></script>
<?php get_template_part('includes/funciones/script'); ?>
<?php  } }
add_action('admin_footer', 'custom_admin_js');

function field_html ( $args ) {
switch ( $args[2] ) {
case 'textarea':
return text_area( $args );
case 'separame':
return sepa_1( $args );
case 'fin':
return sepa_2( $args );
case 'jqueryp':
return jqueryplus( $args );
case 'playermenu':
return menuplay( $args );
case 'menudata':
return menudatos( $args );
case 'checkbox':
case 'radio':
case 'button':
case 'text':
return text_button( $args );
case 'submit':
default:
return text_field( $args );
} }
function text_field ( $args ) {
global $post;
$args[2] = get_post_meta($post->ID, $args[0], true);
$args[1] = __($args[1], 'sp' );
$label_format =
'<label class="mtt" for="%1$s">%2$s</label>'
. '<input class="mt" type="text" id="%1$s" name="%1$s" value="%3$s" />';
return vsprintf( $label_format, $args );
}
function text_button ( $args ) {
$label_format = '<input type="button" class="button button-primary button-large mtmm" name="Checkbx" value="'.__("Generate data from IMDb","psythemes").'" />';
return vsprintf( $label_format, $args );
}
function text_area ( $args ) {
global $post;
$args[2] = get_post_meta($post->ID, $args[0], true);
$args[1] = __($args[1], 'sp' );
$label_format =
'<label  class="mtt" for="%1$s">%2$s</label>'
. '<textarea class="mttt" name="%1$s">%3$s</textarea>';
return vsprintf( $label_format, $args );
}
function sepa_1 ( $args ) {
global $post;
$args[2] = get_post_meta($post->ID, $args[0], true);
$args[1] = __($args[1], 'sp' );
$label_format = '<div id="%1$s" class="separador">';
return vsprintf( $label_format, $args );
}
function sepa_2 ( $args ) {
global $post;
$args = "";
$label_format = '</div>';
return vsprintf( $label_format, $args );
}
function jqueryplus ( $args ) {
global $post;
$args = "";
$label_format = '
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js?ver=2.1.3"></script>
<script type="text/javascript" src=" '.get_stylesheet_directory_uri().'/includes/framework/js/idtabstbb.js"></script>
';
return vsprintf( $label_format, $args );
}
function menuplay ( $args ) {
global $post;
$args = "";
$label_format = '<div class="menus_mt_datos"><ul class="idTabs menuplayer">
<li><a href="#sepa1" class="selected">'. __('Server 1', 'psythemes') .'</a></li>
<li><a href="#sepa2">'. __('Server 2', 'psythemes') .'</a></li>
<li><a href="#sepa3">'. __('Server 3', 'psythemes') .'</a></li>
<li><a href="#sepa4">'. __('Server 4', 'psythemes') .'</a></li>
<li><a href="#sepa5">'. __('Server 5', 'psythemes') .'</a></li>
<li><a href="#sepa6">'. __('Server 6', 'psythemes') .'</a></li>
<li><a href="#sepa7">'. __('Server 7', 'psythemes') .'</a></li>
<li><a href="#sepa8">'. __('Server 8', 'psythemes') .'</a></li>
</ul></div>';
return vsprintf( $label_format, $args );
}
function menudatos ( $args ) {
global $post;
$args = "";
$label_format = '<div class="menus_mt_datos"><ul class="idTabs menuplayer">
<li><a href="#media" class="selected">'. __('Media', 'psythemes') .'</a></li>
<li><a href="#imdb">'. __('IMDb', 'psythemes') .'</a></li>
<li><a href="#tmdb">'. __('TMDb', 'psythemes') .'</a></li>
</ul></div>';
return vsprintf( $label_format, $args );
}
function sp_save_postdata($post_id, $post) {
global $sp_boxes;
if ( ! wp_verify_nonce( $_POST['sp_nonce_name'], plugin_basename(__FILE__) ) ) {
return $post->ID; }
if ( 'page' == $_POST['post_type'] ) {
if ( ! current_user_can( 'edit_page', $post->ID ))
return $post->ID;
} else {
if ( ! current_user_can( 'edit_post', $post->ID ))
return $post->ID; }
foreach ( $sp_boxes as $sp_box ) {
foreach ( $sp_box as $sp_fields ) {
$my_data[$sp_fields[0]] =  $_POST[$sp_fields[0]];
} }
foreach ($my_data as $key => $value) {
if ( 'revision' == $post->post_type  ) {
return; }
$value = implode(',', (array)$value);
if ( get_post_meta($post->ID, $key, FALSE) ) {
update_post_meta($post->ID, $key, $value);
} else {
add_post_meta($post->ID, $key, $value);
}
if (!$value) {
delete_post_meta($post->ID, $key);
} } }
function echo_sp_nonce () {
echo sprintf(
'<input type="hidden" name="%1$s" id="%1$s" value="%2$s" />',
'sp_nonce_name',
wp_create_nonce( plugin_basename(__FILE__) )
);
}
if ( !function_exists('get_custom_field') ) {
function get_custom_field($field) {
global $post;
$custom_field = get_post_meta($post->ID, $field, true);
echo $custom_field; } }
function logo_admin_psythemesz() {  ?>
<style type="text/css">
h1 a {
<?php $logo = get_option('wpadmin-logo');if (!empty($logo)) { ?>
background-image: url(<?php echo $logo; ?>) !important;
<?php } else { ?>
background-image: url(<?php echo get_template_directory_uri(); ?>/images/logo_admin.png) !important;
<?php } ?>
background-size: 300px 80px !important; 
width: auto !important;
height: 80px !important;
}
</style>
<?php  } 
add_action('login_head', 'logo_admin_psythemesz');
function core_psyplay() {
}
add_action('admin_footer', 'core_psyplay'); 

// Trailer Fix
${"\x47L\x4fB\x41\x4c\x53"}["\x6d\x75\x61\x68\x64s"]="\x76al";${"\x47L\x4f\x42\x41\x4cS"}["i\x74\x77\x65od\x6ch\x6c\x62"]="id";function mostrar_trailer($id){$misakbnorf="\x69\x64";if(!empty(${$misakbnorf})){${"\x47LO\x42\x41\x4c\x53"}["\x66c\x67\x63\x77\x72\x64\x68ez"]="\x76\x61l";${${"\x47\x4c\x4f\x42\x41L\x53"}["\x66c\x67c\x77\x72\x64he\x7a"]}=str_replace(array("[","]",),array("\x3ci\x66r\x61m\x65\x20\x69d\x3d\x22\x69\x66\x72\x61\x6d\x65-tra\x69\x6cer\"\x20\x77id\x74\x68\x3d\"\x3600\x22 \x68eigh\x74\x3d\"\x3450\" s\x72c=\x22//\x77\x77w\x2ey\x6fut\x75\x62e\x2ec\x6f\x6d/\x65mbe\x64/","\" \x66\x72\x61\x6d\x65b\x6frder=\"0\"\x20a\x6clow\x66\x75lls\x63r\x65e\x6e\x3e</\x69\x66ra\x6d\x65\x3e",),${${"\x47\x4c\x4f\x42\x41LS"}["\x69\x74\x77\x65\x6f\x64\x6c\x68\x6cb"]});echo${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x6d\x75\x61hd\x73"]};}}function script_trailer($id){$qpgjvxvn="\x69d";if(!empty(${$qpgjvxvn})){$wfdhdadgf="\x76\x61\x6c";${$wfdhdadgf}=str_replace(array("[","]",),array("//\x77ww\x2eyout\x75be\x2e\x63om/\x65\x6d\x62e\x64/","",),${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x69\x74\x77e\x6fd\x6c\x68lb"]});echo${${"\x47\x4c\x4f\x42\x41\x4cS"}["mu\x61\x68\x64s"]};}}

function mostrar_trailer_meta($id) {
	if (!empty($id)) { 
		$val = str_replace(
			array("[","]",),
			array('<meta itemprop="embedUrl" content="https://www.youtube.com/embed/','">',),$id);
		    echo $val;
		} 
}
