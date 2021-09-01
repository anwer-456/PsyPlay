<div id="bar-player">
<style>#bar-player span:after {content: ""!important;}</style>
<?php $active = get_option('watch-light'); if ($active == "true") { ?>
<a href="<?php echo get_permalink(); ?>#mv-info" class="btn bp-btn-light" <?php if (is_single() && is_post_type('tvshows')){?>style="display:none;"<?php }?>><i class="fa fa-lightbulb-o" ></i> <span><?php _e('Turn off light');?></span></a>
<?php }?>

<?php $active = get_option('watch-favorite'); if ($active == "true") { ?>
	<?php if(get_option('favorite-settings') == "true") {?>
                    <span id="button-favorite">
					<?php if(get_option('fav-allow-settings') == "1") { ?>
					<?php echo favorite_user_only(); ?>
					<?php } elseif(get_option('fav-allow-settings') == "2") { ?>
					<?php echo favorite_user_guest(); ?>
					<?php }?>
    
                    </span>
					<?php }?>
<?php }?>

<?php if (is_single() && is_post_type('episodes')){?>
<?php $active = get_option('watch-next-previous-ep'); if ($active == "true") { ?>
<?php if($pagina = series_get_meta('ep_pagination')) { 
	get_template_part('loop/paginar_episodio/'. $pagina .'');
		} else { 
	get_template_part('loop/paginar_episodio/default'); 
	} 
?>
<?php }?>
<?php }?>

<?php $active = get_option('watch-comment'); if ($active == "true") { ?>
<a href="<?php echo get_permalink( $post->ID ); ?>#commentfb" class="btn bp-btn-review"><i class="fa fa-comments"></i>
<span><?php _e('Comments', 'psythemes'); ?></span> 
<?php if(get_option('comment-sys') == "wp_comment") {?>
(<span id="comment-count"><?php $totalcomments = get_comments_number(); echo $totalcomments; ?></span>)
<?php } elseif(get_option('comment-sys') == "fb_comment"){?>
(<span id="comment-count"><fb:comments-count href="<?php echo get_permalink($post->ID); ?>"></fb:comments-count></span>)
<?php }?>
</a>
<?php }?>

<?php $active = get_option('watch-report'); if ($active == "true") { ?>
<a class="btn bp-btn-report" data-target="#pop-report" data-toggle="modal" style="color: #fff000; float: right"><i class="fa fa-warning"></i> <span><?php _e('Report', 'psythemes'); ?></span></a>
<?php }?>

<div class="clearfix"></div>
</div>


 
