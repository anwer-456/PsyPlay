<?php

function epcontrols_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}
function epcontrols_add_meta_box() {
	add_meta_box(
		'ep-controls',
		__( 'Previous & Next Buttons', 'psythemes' ),
		'epcontrols_html',
		'episodes',
		'side',
		'high'
	);
}
add_action( 'add_meta_boxes', 'epcontrols_add_meta_box' ); function epcontrols_html( $post) { wp_nonce_field( '_epcontrols_nonce', 'epcontrols_nonce' ); ?>
<div class="admin-ep-controls">
<p><label>Important: Mark only if necessary.</label></p>
<p><input type="radio" name="ep_pagination" id="ab0" value="ab0" <?php if( series_get_meta('ep_pagination') == 'ab0' ) { ?>checked="checked"<?php } ?>>
<label for="ab0"><?php _e( 'First Episode of Any Season', 'psythemes' ); ?></label></p>
<p><input type="radio" name="ep_pagination" id="ab2" value="ab2" <?php if( series_get_meta('ep_pagination') == 'ab2' ) { ?>checked="checked"<?php } ?>>
<label for="ab2"><?php _e( 'Last Episode of Any Season', 'psythemes' ); ?></label></p>
<p><input type="radio" name="ep_pagination" id="ab1" value="ab1" <?php if( series_get_meta('ep_pagination') == 'ab1' ) { ?>checked="checked"<?php } ?>>
<label for="ab1"><?php _e( 'First Episode of the First Season', 'psythemes' ); ?></label></p>
<p><input type="radio" name="ep_pagination" id="ab3" value="ab3" <?php if( series_get_meta('ep_pagination') == 'ab3' ) { ?>checked="checked"<?php } ?>>
<label for="ab3"><?php _e( 'Last Episode of the Last Season', 'psythemes' ); ?></label></p>
<p><input type="radio" name="ep_pagination" id="abc" value="default" <?php $checked = 'checked="checked"'; if( series_get_meta('ep_pagination') == '' ) { echo $checked; } elseif( series_get_meta('ep_pagination') == 'default' ) { echo $checked; }?>
<label for="default"><?php _e( 'None of the above', 'psythemes' ); ?></label></p>
</div>
<?php }


function epcontrols_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['epcontrols_nonce'] ) || ! wp_verify_nonce( $_POST['epcontrols_nonce'], '_epcontrols_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;


if ( isset( $_POST['ep_pagination'] ) )
update_post_meta( $post_id, 'ep_pagination', esc_attr( $_POST['ep_pagination'] ) );

}
add_action( 'save_post', 'epcontrols_save' );



function episodios_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}
function episodios_add_meta_box() {
	add_meta_box(
		'psy-content-info',
		__( 'Episode Information', 'psythemes' ),
		'episodios_html',
		'episodes',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'episodios_add_meta_box' ); function episodios_html( $post) { wp_nonce_field( '_episodios_nonce', 'episodios_nonce' ); ?>




<table class="options-table-responsive psy-details-table">
	<tbody>
	<tr id="ids_box">
			<td class="label">
				<label>Generate data</label>
				<p class="description">Generate data from <strong>themoviedb.org</strong></p>
			</td>
			<td style="background: #f7f7f7" class="field">
			<input class="extra-small-text" type="text" name="ids" id="ids" value="<?php echo series_get_meta( 'ids' ); ?>" placeholder="<?php _e('1402','psythemes'); ?>">
<input class="extra-small-text" type="text" name="temporada" id="temporada" value="<?php echo series_get_meta( 'temporada' ); ?>" placeholder="<?php _e('1','psythemes'); ?>">
<input class="extra-small-text" type="text" name="episodio" id="episodio" value="<?php echo series_get_meta( 'episodio' ); ?>" placeholder="<?php _e('7','psythemes'); ?>">
<input type="button" class="generate button button-primary" name="generarepis" value="<?php _e('Generate Data','psythemes'); ?>">
			
			
			

			

				<p class="description">E.g. https://www.themoviedb.org/tv/<strong>1402</strong>-the-walking-dead/season/<strong>1</strong>/episode/<strong>7</strong></p>
				<p id="verify" style="display:none"><a class="button button-secondary" id="comprovate"><?php _e('Check duplicate content','psythemes'); ?></a><p>
			</p></td>
		</tr>
	
	<tr id="episode_name_box">
			<td class="label">
				<label><?php _e('Episode title','psythemes'); ?></label>
			</td>
			<td class="field">
			<input class="regular-text" type="text" name="name" id="name" value="<?php echo series_get_meta( 'name' ); ?>">
			</td>
		</tr>
		<tr id="rating_tmdb_box">
		<td class="label">
			<label for="vote_average"><?php _e('Season & Episode','psythemes'); ?></label>
			<p class="description"><?php _e('Season / episode','psythemes'); ?></p>
		</td>
		<td class="field">
		<input class="extra-small-text" type="text" name="season_number" id="season_number" value="<?php echo series_get_meta( 'season_number' ); ?>"> - 
			<input class="extra-small-text" type="text" name="episode_number" id="episode_number" value="<?php echo series_get_meta( 'episode_number' ); ?>">
		</td>
	</tr>
			<tr id="serie_name_box">
			<td class="label">
				<label><?php _e('Serie name','psythemes'); ?></label>
			</td>
			<td class="field">
				<input class="regular-text" type="text" name="serie" id="serie" value="<?php echo series_get_meta( 'serie' ); ?>">
			</td>
		</tr>
		<tr id="psy_poster_box">
		<td class="label">
			<label for="psy_poster"><?php _e('Poster','psythemes'); ?></label>
			<p class="description"><?php _e('Add url image','psythemes'); ?></p>
		</td>
		<td class="field">

		<input class="regular-text" type="text" name="poster_serie" id="poster_serie" value="<?php echo series_get_meta( 'poster_serie' ); ?>">
<input id="boton" class="up_images upaa button-secondary" type="button" value="<?php _e('Upload', 'psythemes'); ?>" />
		</td>
	</tr>
	<tr id="psy_backdrop_box">
		<td class="label">
			<label for="psy_backdrop"><?php _e('Main Backdrop','psythemes'); ?></label>
			<p class="description"><?php _e('Add url image','psythemes'); ?></p>
		</td>
		<td class="field">
		<input class="regular-text" type="text" name="fondo_player" id="fondo_player" value="<?php echo series_get_meta( 'fondo_player' ); ?>">
<input id="boton" class="up_images upaa button-secondary" type="button" value="<?php _e('Upload', 'psythemes'); ?>" />
		</td>
	</tr>
	<tr id="imagenes_box">
		<td class="label">
			<label for="imagenes"><?php _e('Backdrops','psythemes'); ?></label>
			<p class="description"><?php _e('Place each image url below another','psythemes'); ?></p>
		</td>
		<td class="field">
		<textarea name="imagenes" id="imagenes" rows="5"><?php echo series_get_meta( 'imagenes' ); ?></textarea>
		
<input id="boton" class="up_images upaa button-secondary" type="button" value="<?php _e('Upload', 'psythemes'); ?>" />
		</td>
	</tr>
<tr id="air_date_box">
			<td class="label">
				<label><?php _e('Air date','psythemes'); ?></label>
			</td>
			<td class="field">
				<input class="smalltext" type="date" name="air_date" id="air_date" value="<?php echo series_get_meta( 'air_date' ); ?>">
			</td>
		</tr>
	</tbody>
</table>
































<?php }
function episodios_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['episodios_nonce'] ) || ! wp_verify_nonce( $_POST['episodios_nonce'], '_episodios_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

if ( isset( $_POST['ids'] ) )
update_post_meta( $post_id, 'ids', esc_attr( $_POST['ids'] ) );
if ( isset( $_POST['temporada'] ) )
update_post_meta( $post_id, 'temporada', esc_attr( $_POST['temporada'] ) );
if ( isset( $_POST['episodio'] ) )
update_post_meta( $post_id, 'episodio', esc_attr( $_POST['episodio'] ) );
if ( isset( $_POST['air_date'] ) )
update_post_meta( $post_id, 'air_date', esc_attr( $_POST['air_date'] ) );
if ( isset( $_POST['name'] ) )
update_post_meta( $post_id, 'name', esc_attr( $_POST['name'] ) );
if ( isset( $_POST['episode_number'] ) )
update_post_meta( $post_id, 'episode_number', esc_attr( $_POST['episode_number'] ) );
if ( isset( $_POST['season_number'] ) )
update_post_meta( $post_id, 'season_number', esc_attr( $_POST['season_number'] ) );
if ( isset( $_POST['poster_serie'] ) )
update_post_meta( $post_id, 'poster_serie', esc_attr( $_POST['poster_serie'] ) );
if ( isset( $_POST['fondo_player'] ) )
update_post_meta( $post_id, 'fondo_player', esc_attr( $_POST['fondo_player'] ) );
if ( isset( $_POST['imagenes'] ) )
update_post_meta( $post_id, 'imagenes', esc_attr( $_POST['imagenes'] ) );
if ( isset( $_POST['serie'] ) )
update_post_meta( $post_id, 'serie', esc_attr( $_POST['serie'] ) );





}
add_action( 'save_post', 'episodios_save' );
function custom_admin_js3() { global $post_type; if( $post_type == 'episodes' ) { ?>
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
<script>
	jQuery('input[name=generarepis]').click(function() {
	var input = jQuery('input[name=ids]').get(0).value;
	var temp = jQuery('input[name=temporada]').get(0).value;
	var epis = jQuery('input[name=episodio]').get(0).value;
	var imgplus = "?append_to_response=images";
	var adde = '/season/'+temp+'/episode/'+ epis + imgplus;
	var url = "https://api.themoviedb.org/3/tv/";
	var idioma = "&language=<?php echo get_option('tmdbidioma') ?>&include_image_language=<?php echo get_option('tmdbidioma')?>,null";
	var apikey = "&api_key=<?php echo get_option('tmdbkey')?>";
	// Send Request
    jQuery.getJSON(url + input + adde + idioma + apikey, function(tmdbdata) {
    var valPlo = "";
    var valImg = "";
    var valBac = "";
    jQuery.each(tmdbdata, function(key, val) {
        jQuery('input[name=' + key + ']').val(val);
		
					jQuery('#message').remove();
            jQuery('#psy-content-info .inside').prepend('<div id=\"message\" class=\"notice rebskt updated \"><p><?php if(episodios_get_meta( 'ids' )){ _e("The data have been updated, check please","mtms"); } else { _e("Data were completed, check please","mtms"); } ?></p></div>');
			jQuery("#verify").show();		
		
        if (key == "vote_count") {
            jQuery('#serie_vote_count').val(val);
        }
		  if (key == "season_number") {
            jQuery('#season_number').val(val);
        }
				  if (key == "episode_number") {
            jQuery('#episode_number').val(val);
        }
        if (key == "vote_average") {
            jQuery('#serie_vote_average').val(val);
        }
		if(key == "overview"){
		valPlo+= ""+val+"";
		}
        if (key == "still_path") {
            valImg += "https://image.tmdb.org/t/p/w780" + val + "";
        }
        if (key == "images") {
            var imgt = "";
            jQuery.each(tmdbdata.images.stills, function(i, item) {
                imgt += "https://image.tmdb.org/t/p/w300" + item.file_path + "\n";
            });
            jQuery('textarea[name="imagenes"]').val(imgt);
        }
        if (key == "air_date") {
            jQuery('#new-tag-episodedate').val(val.slice(0, 4));
        }

        if (key == "crew") {
            var crew_d = crew_w = crew_a = "";
            jQuery.each(tmdbdata.crew, function(i, item) {
                if (item.department == "Directing") {
                    crew_d += "" + item.name + ",";
                }
            });
            jQuery('#new-tag-director').val(crew_d);
        }
        if (key == "guest_stars") {
            var star_a = "";
            jQuery.each(tmdbdata.guest_stars, function(i, item) {
                star_a += "" + item.name + ", ";
            });

            jQuery('#new-tag-gueststar').val(star_a);

        }
        jQuery.getJSON(url + input + "?" + idioma + apikey, function(tmdbdata) {

            jQuery.each(tmdbdata, function(key, item) {
                if (key == "name") {
                    jQuery('#serie').val(item);
					jQuery('#title').val(item + " " + "Season" + " " + temp + " " + "Episode" + " "+ epis);
                }
                if (key == "poster_path") {
                    jQuery('#poster_serie').val("https://image.tmdb.org/t/p/w185" + item);
                }
            });
        });

    });
    jQuery('#content').val(valPlo);
    jQuery('#fondo_player').val(valImg);

    });
    });
</script>
<?php 
  } }
add_action('admin_footer', 'custom_admin_js3');