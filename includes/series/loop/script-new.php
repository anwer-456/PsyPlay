<script>
	jQuery('input[name=generartv]').click(function() {
	var input = jQuery('input[name=id]').get(0).value;
	var url = "https://api.themoviedb.org/3/tv/";
	var agregar = "?append_to_response=images,trailers";
	var idioma = "&language=<?php echo get_option('tmdbidioma') ?>&include_image_language=<?php echo get_option('tmdbidioma')?>,null";
	var apikey = "&api_key=<?php echo get_option('tmdbkey')?>";
	// Send Request
    jQuery.getJSON(url + input + agregar + idioma + apikey, function(tmdbdata) {
    var valPlo = "";
    var valImg = "";
    var valBac = "";
    jQuery.each(tmdbdata, function(key, val) {
        jQuery('input[name=' + key + ']').val(val);
			jQuery('#message').remove();
            jQuery('#psy-content-info .inside').prepend('<div id=\"message\" class=\"notice rebskt updated \"><p><?php if(info_movie_get_meta( 'id' )){ _e("The data have been updated, check please","mtms"); } else { _e("Data were completed, check please","mtms"); } ?></p></div>');
			jQuery("#verify").show();			  
        if (key == "name") {
            jQuery('#title').val(val);
        }
        if (key == "vote_count") {
            jQuery('#serie_vote_count').val(val);
        }
        if (key == "vote_average") {
            jQuery('#serie_vote_average').val(val);
        }
		if(key == "overview"){
		valPlo+= ""+val+"";
		}
        if (key == "poster_path") {
            valImg += "https://image.tmdb.org/t/p/w185" + val + "";
        }
        if (key == "backdrop_path") {
            valBac += "https://image.tmdb.org/t/p/original" + val + "";
        }
        <?php $api = get_option('apigenero'); if ($api == "true") { ?>
        if (key == "genres") {
            var genr = "";
			var genr1_arr=[];
            jQuery.each(tmdbdata.genres, function(i, item) {
       	 		genr += "" + item.name + ", ";
				genr1 = item.name;
				jQuery('input[name=newcategory]').val( genr1 );
				jQuery('#category-add-submit').trigger('click');
				jQuery('#category-add-submit').prop("disabled", false);
				jQuery('input[name=newcategory]').val("");
				genr1_arr.push(genr1);
            });
            jQuery('input[name=' + key + ']').val(genr);
			jQuery('#categorychecklist .selectit').each(function(){
					jQuery(this).children("input[type=checkbox]").prop("checked",false);	
			});
			jQuery('#categorychecklist .selectit').each(function(){
					gen = jQuery.trim(jQuery(this).text());
					if(jQuery.inArray(gen,genr1_arr) !== -1)
					{
						jQuery(this).children("input[type=checkbox]").prop("checked",true);
					}
				});
        }
        <?php } ?>
        if (key == "images") {
            var imgt = "";
            jQuery.each(tmdbdata.images.backdrops, function(i, item) {
                imgt += "https://image.tmdb.org/t/p/w300" + item.file_path + "\n";
            });
            jQuery('textarea[name="imagenes"]').val(imgt);
        }
        if (key == "first_air_date") {
            jQuery('#new-tag-release-year').val(val.slice(0, 4));
        }
		
		       if (key == "created_by") {
            var crea = "";
            jQuery.each(tmdbdata.created_by, function(i, item) {
                crea += item.name + ",";
            });
            jQuery('#new-tag-director').val(crea);
        }
        if (key == "production_companies") {
            var pro = "";
            jQuery.each(tmdbdata.production_companies, function(i, item) {
                pro += item.name + ",";
            });
            jQuery('#new-tag-studio').val(pro);
        }
        if (key == "networks") {
            var net = "";
            jQuery.each(tmdbdata.networks, function(i, item) {
                net += item.name + ",";
            });
            jQuery('#new-tag-networks').val(net);
        }
        jQuery.getJSON(url + input + "/credits?" + apikey, function(tmdbdata) {
            jQuery.each(tmdbdata, function(key, val) {
                if (key == "cast") {
                    var valCast = "";
                    jQuery.each(tmdbdata.cast, function(i, item) {
                        valCast += "" + item.name + ", "; //
                    });
                    jQuery('#new-tag-stars').val(valCast);
                }
            });
            jQuery.getJSON(url + input + "/videos?" + apikey, function(tmdbdata) {
                jQuery.each(tmdbdata, function(key, val) {
                    var videomt = "";
                    jQuery.each(tmdbdata.results, function(i, item) {
                        videomt += "[" + item.key + "]";
                    });
                    jQuery('#youtube_id').val(videomt.slice(0, 13));
                });
            });
        });
    });
    jQuery('#content').val(valPlo);
    jQuery('#poster_url').val(valImg);
    jQuery('#fondo_player').val(valBac);
    });
    });
</script>