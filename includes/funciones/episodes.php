<?php
define('WP_USE_THEMES', false);
require('../../../../../wp-blog-header.php');
status_header(200);
nocache_headers();
set_time_limit(30000);
if (current_user_can('manage_options')) {
	if(get_option( DT_KEY ) == "valid") {
		if (($_POST["se"] != NULL) && ($_POST["te"] != NULL)) {
			$api_tmdb   = get_option('tmdbkey');
			$lang_tmdb  = get_option('tmdbidioma', 'en');
			$dtemporada = $_POST["te"];
			$ids        = $_POST["se"];
			if (($ids != NULL) && ($dtemporada != NULL)) {
				$urltname    = wp_remote_get("https://api.themoviedb.org/3/tv/" . $ids . "?&language=" . $lang_tmdb . "&include_image_language=" . $lang_tmdb . ",null&api_key=" . $api_tmdb );
				$json2       = wp_remote_retrieve_body($urltname);
				$data2       = json_decode($json2, TRUE);
				$tituloserie = $data2['name'];
				$urltoc       = wp_remote_get("https://api.themoviedb.org/3/tv/" . $ids . "/season/" . $dtemporada . "?append_to_response=images,trailers&language=" . $lang_tmdb . "&include_image_language=" . $lang_tmdb . ",null&api_key=" . $api_tmdb );
				$json1        = wp_remote_retrieve_body($urltoc);
				$data1        = json_decode($json1, TRUE);
				$sdasd        = count($data1['episodes']);
				$poster_serie = 'https://image.tmdb.org/t/p/w185'. $data1['poster_path'];
				for ($cont = 1; $cont <= $sdasd; $cont++) {
					$url        = wp_remote_get('https://api.themoviedb.org/3/tv/' . $ids . '/season/' . $dtemporada . '/episode/' . $cont . '?append_to_response=images&language=' . $lang_tmdb . '&include_image_language=' . $lang_tmdb . ',null&api_key=' . $api_tmdb );
					$json       = wp_remote_retrieve_body($url);
					$data       = json_decode($json, TRUE);
					$season     = $data['season_number'];
					$episode    = $data['episode_number'];
					$name       = $data['name'];
					$dmtid      = $data['id'];
					$overview   = $data['overview'];
					$air_date   = $data['air_date'];
					$still_path = 'https://image.tmdb.org/t/p/w780'. $data['still_path'];
					$year       = substr($data['air_date'], 0, 4);
					$crew        = $data['crew'];
					$guest_stars = $data['guest_stars'];
					$images      = $data['images']["stills"];
					$castor      = $img = $cast = $director = $writer = "";
					foreach ($crew as $valor) {
						$departamente = $valor['department'];
						if ($valor['profile_path'] == NULL) {
							$valor['profile_path'] = "null";
						}
						if ($departamente == "Directing") {
							$director .= $valor['name'] . ",";
						}
						if ($departamente == "Writing") {
							$writer .= $valor['name'] . ",";
						}
					}
					foreach ($guest_stars as $valor1) {
						if ($valor1['profile_path'] == NULL) {
							$valor1['profile_path'] = "null";
						}
						$castor .= $valor1['name'] . ",";
					}
					foreach ($images as $valor2) {
						$img .= 'https://image.tmdb.org/t/p/w300'. $valor2['file_path'] . "\n";
					}
					$dt_episodes = array(
						'post_title' => wp_strip_all_tags(html_entity_decode(($tituloserie) . " " . "Season" . " " . $season . " " . "Episode" . " " . $episode)),
						'post_content' => wp_strip_all_tags(html_entity_decode($overview)),
						'post_status' => 'publish',
						'post_type' => 'episodes',
						'post_author' => 1
					);
					$post_id = wp_insert_post($dt_episodes);
					wp_set_post_terms($post_id, $castor, 'gueststar', false);
					wp_set_post_terms($post_id, $director, 'director', false);
					wp_set_post_terms($post_id, $year, 'episodedate', false);
					add_post_meta($post_id, "ids", ($ids), true);
					add_post_meta($post_id, "temporada", ($season), true);
					add_post_meta($post_id, "episodio", ($episode), true);
					add_post_meta($post_id, "serie", ($tituloserie), true);
					add_post_meta($post_id, "season_number", ($season), true);
					add_post_meta($post_id, "episode_number", ($episode), true);
					add_post_meta($post_id, "name", ($name), true);
					add_post_meta($post_id, "air_date", ($air_date), true);
					add_post_meta($post_id, "imagenes", ($img), true);
					add_post_meta($post_id, "fondo_player", ($still_path), true);
					add_post_meta($post_id, "poster_serie", ($poster_serie), true);
					add_post_meta($post_id, "dt_string", ($dmtid), true);
				}
			}
			wp_redirect( get_admin_url() ."edit.php?post_type=episodes"); exit;
		} else { echo 'no data'; }
	} else { echo 'Invalid license'; }
} else { echo 'login'; }