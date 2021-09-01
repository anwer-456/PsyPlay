<?php

function enqueue_date_picker(){
    wp_enqueue_script(
        'field-date', 
        get_template_directory_uri() . '/includes/framework/js/field-date.js', 
		array('jquery', 'jquery-ui-core', 'jquery-ui-datepicker'),
        time(),
        true
    );  

    wp_enqueue_style( 'jquery-ui', '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css' );
}

add_action('admin_enqueue_scripts', 'enqueue_date_picker');

function sched_get_meta( $value ) {
	global $post;
	
	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}
function sched_add_meta_box() {
	add_meta_box(
		'ep-sched',
		__( 'Next Episode - Schedule', 'psythemes' ),
		'sched_html',
		'tvshows',
		'side',
		'high'
	);
}
add_action( 'add_meta_boxes', 'sched_add_meta_box' ); function sched_html( $post) { wp_nonce_field( '_sched_nonce', 'sched_nonce' ); ?>
<?php $activar = get_option('ep_sched'); if ($activar == "true") {?>
<style type="text/css">#ep-sched { display: block;}</style>
<?php }?>
<div class="sched_content">
<div class="date" style="margin-top: 5px;">
<label class="mtt" for="datepicker" style="width:auto;margin-top: 2px;margin-left: 5px;"><?php _e( 'Date:', 'psythemes' ); ?> </label>
<input type="text" class="mtt datepicker" name="next-ep" id="next-ep" placeholder="mm/dd/yyyy" style="margin-left: 15px;margin-top: -3px;" value="<?php echo series_get_meta( 'next-ep' ); ?>">
</div>
<div class="time">
<label class="mtt" for="datepicker" style="width:auto;margin-top: 2px;margin-left: 5px;"><?php _e( 'Time:', 'psythemes' ); ?></label>
<input type="text" class="mtt" name="time" id="time" placeholder="24:00" style="margin-left: 15px;margin-top: -3px;" value="<?php echo series_get_meta( 'time' ); ?>">
<br>
</div>
<div class="timezone">
<label class="mtt" for="datepicker" style="width:auto;margin-top: 2px;margin-left: 5px;"><?php _e( 'Timezone:', 'psythemes' ); ?></label>
<input type="text" class="mtt" name="timezone" id="timezone" placeholder="UTC +08:00 or EST" style="margin-left: 15px;margin-top: -3px;" value="<?php echo series_get_meta( 'timezone' ); ?>">
<br>
</div>
</div>
<div class="cd">
<label class="mtt" for="countdown" style="width:auto;margin-left: 5px;"><?php _e( 'Countdown Timer:', 'psythemes' ); ?> </label>
<input type="checkbox" class="mtt" name="countdown" id="countdown" style="margin-left: 15px;margin-top: -3px;" <?php if( series_get_meta('countdown') == true ) { ?>checked="checked"<?php } ?>><?php _e( 'Enable', 'psythemes' ); ?>
</div>
<?php  }

function sched_save( $post_id ) {
if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
if ( ! isset( $_POST['sched_nonce'] ) || ! wp_verify_nonce( $_POST['sched_nonce'], '_sched_nonce' ) ) return;
if ( ! current_user_can( 'edit_post', $post_id ) ) return;
if ( isset( $_POST['next-ep'] ) )
update_post_meta( $post_id, 'next-ep', esc_attr( $_POST['next-ep'] ) );
if ( isset( $_POST['time'] ) )
update_post_meta( $post_id, 'time', esc_attr( $_POST['time'] ) );
if ( isset( $_POST['timezone'] ) )
update_post_meta( $post_id, 'timezone', esc_attr( $_POST['timezone'] ) );
If( isset($_POST['countdown']) ){
    update_post_meta($post_id, "countdown", true );
}else{
    delete_post_meta($post_id, "countdown" );
}
return $post;

}
add_action( 'save_post', 'sched_save' );

function series_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}
function series_add_meta_box() {
	add_meta_box(
		'psy-content-info',
		__( 'TV Series Information', 'psythemes' ),
		'series_html',
		'tvshows',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'series_add_meta_box' ); function series_html( $post) { wp_nonce_field( '_series_nonce', 'series_nonce' ); ?>


<table class="options-table-responsive psy-details-table">
	<tbody>
		<tr id="ids_box">
		<td class="label">
			<label for="ids"><?php _e('Generate Data','psythemes'); ?></label>
			<p class="description"><?php _e('Generate data from','psythemes'); ?> <strong>imdb.com</strong></p>
		</td>
		<td style="background: #f7f7f7" class="field">
		<input class="regular-text" type="text" name="id" id="id" value="<?php echo series_get_meta( 'id' ); ?>">
		
		<input type="button" class="button button-primary generate" name="generartv" value="<?php _e('Generate Data','psythemes'); ?>">

			<p class="description">E.g. https://www.themoviedb.org/tv/<strong>1402</strong>-the-walking-dead</p>
			<p id="verify" style="display:none"><a class="button button-secondary" id="comprovate"><?php _e('Check duplicate content','psythemes'); ?></a><p>
		</p></td>
	</tr>
	<tr id="tv_eps_num_box">
		<td class="label">
			<label for="tv_eps_num"><?php _e('Episodes Number','psythemes'); ?></label>
			<p class="description"><?php _e('Display amount of episodes','psythemes'); ?></p>
		</td>
		<td style="background: #f7f7f7" class="field">
		<input class="regular-text" type="text" name="tv_eps_num" id="tv_eps_num" value="<?php echo series_get_meta( 'tv_eps_num' ); ?>">
		</td>
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
		<input class="regular-text" type="text" name="poster_url" id="poster_url" value="<?php echo series_get_meta( 'poster_url' ); ?>">
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
		<td colspan="2"><h3><?php _e('TV Series Data','psythemes'); ?></h3></td>
	</tr>
	<tr id="original_title_box">
		<td class="label">
			<label for="original_title"><?php _e('Original title','psythemes'); ?></label>
		</td>
		<td class="field">
		<input class="regular-text" type="text" name="original_name" id="original_name" value="<?php echo series_get_meta( 'original_name' ); ?>">
		</td>
	</tr>
	<tr id="first_air_date_box">
			<td class="label">
				<label for="first_air_date"><?php _e('Firt air date','psythemes'); ?></label>
			</td>
			<td class="field">
			<input class="small-text" type="date" name="first_air_date" id="first_air_date" value="<?php echo series_get_meta( 'first_air_date' ); ?>">
			</td>
		</tr>
<tr id="last_air_date_box">
			<td class="label">
				<label for="last_air_date"><?php _e('Last air date','psythemes'); ?></label>
			</td>
			<td class="field">
				<input class="small-text" type="date" name="last_air_date" id="last_air_date" value="">
			</td>
		</tr>
	<tr id="rating_tmdb_box">
		<td class="label">
			<label for="vote_average"><?php _e('Rating TMDb','psythemes'); ?></label>
			<p class="description"><?php _e('Average / votes','psythemes'); ?></p>
		</td>
		<td class="field">
		<input class="extra-small-text" type="text" name="serie_vote_average" id="serie_vote_average" value="<?php echo series_get_meta( 'serie_vote_average' ); ?>"> - 
			<input class="extra-small-text" type="text" name="serie_vote_count" id="serie_vote_count" value="<?php echo series_get_meta( 'serie_vote_count' ); ?>">
		</td>
	</tr>
	<tr id="runtime_box">
		<td class="label">
			<label for="runtime"><?php _e('Runtime','psythemes'); ?></label>
		</td>
		<td class="field">
		<input class="regular-text" type="text" name="episode_run_time" id="episode_run_time" value="<?php echo series_get_meta( 'episode_run_time' ); ?>">
		</td>
	</tr>
	<tr id="status_box">
			<td class="label">
				<label for="status"><?php _e('Status','psythemes'); ?></label>
			</td>
			<td class="field">
			<input class="regular-text" type="text" name="status" id="status" value="<?php echo series_get_meta( 'status' ); ?>">
			</td>
		</tr>
	</tbody>
</table>




















<?php  }
function series_save( $post_id ) {
if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
if ( ! isset( $_POST['series_nonce'] ) || ! wp_verify_nonce( $_POST['series_nonce'], '_series_nonce' ) ) return;
if ( ! current_user_can( 'edit_post', $post_id ) ) return;
if ( isset( $_POST['id'] ) )
update_post_meta( $post_id, 'id', esc_attr( $_POST['id'] ) );
if ( isset( $_POST['tv_eps_num'] ) )
update_post_meta( $post_id, 'tv_eps_num', esc_attr( $_POST['tv_eps_num'] ) );
if ( isset( $_POST['featureds_img'] ) )
update_post_meta( $post_id, 'featureds_img', esc_attr( $_POST['featureds_img'] ) );
if ( isset( $_POST['poster_url'] ) )
update_post_meta( $post_id, 'poster_url', esc_attr( $_POST['poster_url'] ) );
if ( isset( $_POST['fondo_player'] ) )
update_post_meta( $post_id, 'fondo_player', esc_attr( $_POST['fondo_player'] ) );
if ( isset( $_POST['imagenes'] ) )
update_post_meta( $post_id, 'imagenes', esc_attr( $_POST['imagenes'] ) );
if ( isset( $_POST['youtube_id'] ) )
update_post_meta( $post_id, 'youtube_id', esc_attr( $_POST['youtube_id'] ) );
if ( isset( $_POST['number_of_episodes'] ) )
update_post_meta( $post_id, 'number_of_episodes', esc_attr( $_POST['number_of_episodes'] ) );
if ( isset( $_POST['number_of_seasons'] ) )
update_post_meta( $post_id, 'number_of_seasons', esc_attr( $_POST['number_of_seasons'] ) );
if ( isset( $_POST['original_name'] ) )
update_post_meta( $post_id, 'original_name', esc_attr( $_POST['original_name'] ) );
if ( isset( $_POST['status'] ) )
update_post_meta( $post_id, 'status', esc_attr( $_POST['status'] ) );
if ( isset( $_POST['serie_vote_average'] ) )
update_post_meta( $post_id, 'serie_vote_average', esc_attr( $_POST['serie_vote_average'] ) );
if ( isset( $_POST['serie_vote_count'] ) )
update_post_meta( $post_id, 'serie_vote_count', esc_attr( $_POST['serie_vote_count'] ) );
if ( isset( $_POST['episode_run_time'] ) )
update_post_meta( $post_id, 'episode_run_time', esc_attr( $_POST['episode_run_time'] ) );
if ( isset( $_POST['homepage'] ) )
update_post_meta( $post_id, 'homepage', esc_attr( $_POST['homepage'] ) );
if ( isset( $_POST['first_air_date'] ) )
update_post_meta( $post_id, 'first_air_date', esc_attr( $_POST['first_air_date'] ) );
if ( isset( $_POST['last_air_date'] ) )
update_post_meta( $post_id, 'last_air_date', esc_attr( $_POST['last_air_date'] ) );
if ( isset( $_POST['popularity'] ) )
update_post_meta( $post_id, 'popularity', esc_attr( $_POST['popularity'] ) );
if ( isset( $_POST['type'] ) )
update_post_meta( $post_id, 'type', esc_attr( $_POST['type'] ) );
}
add_action( 'save_post', 'series_save' );
function custom_admin_js2() { 
global $post_type; if( $post_type == 'tvshows' ) {	?> 
<style>
.wp-core-ui .generate.button-primary {
	background: #6db535;
    border-color: #6db535 #6db535 #4e901b;
    -webkit-box-shadow: 0 1px 0 #4e901b;
    box-shadow: 0 1px 0 #4e901b;
    color: #fff;
    text-decoration: none;
    text-shadow: 0 0 0 rgba(0, 0, 0, 0.3), 0 0 0 rgba(0, 0, 0, 0.3), 0 0 0 rgba(0, 0, 0, 0.3), 0 0 0 rgba(0, 0, 0, 0.3);
}
.wp-core-ui .generate.button-primary:hover {
	background: #62a72c;
    border-color: #6db535 #6db535 #3f7713;
    -webkit-box-shadow: 0 1px 0 #3f7713;
    box-shadow: 0 1px 0 #3f7713;
}
</style>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/includes/framework/js/idtabstbb.js"></script>
<?php get_template_part('includes/series/loop/script'); ?>
<?php 
  } }
add_action('admin_footer', 'custom_admin_js2');
function mostrar_trailer_tv($id) {
	if (!empty($id)) { 
		$val = str_replace(
			array("[","]",),
			array('<div class="youtube_id_tv"><iframe width="600" height="450" src="//www.youtube.com/embed/','" frameborder="0" allowfullscreen></iframe></div>',),$id);
		echo $val;
		} else {
			echo '<div class="nodata">'. __('No trailer available','psythemes') .'</div>'; 
		}
}
