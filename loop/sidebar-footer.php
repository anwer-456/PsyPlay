<div class="row">
<div class="col-lg-4 footer-one">
<div id="foot_nav">
<?php
$location = 'menu_footer1'; $menu_obj = wpse45700_get_menu_by_location($location ); 
wp_nav_menu( array( 'theme_location' => $location, 'container' => 'false', 'items_wrap' => '<div class="footer-link"><h3 class="footer-link-head">'.esc_html($menu_obj->name).'</h3>%3$s</div>',  'walker' => new Walker_Quickstart_Menu() ) ); ?>


<?php
$location = 'menu_footer2'; $menu_obj = wpse45700_get_menu_by_location($location ); 
wp_nav_menu( array( 'theme_location' => $location, 'container' => 'false', 'items_wrap' => '<div class="footer-link"><h3 class="footer-link-head">'.esc_html($menu_obj->name).'</h3>%3$s</div>',  'walker' => new Walker_Quickstart_Menu() ) ); ?>

<?php
$location = 'menu_footer3'; $menu_obj = wpse45700_get_menu_by_location($location ); 
wp_nav_menu( array( 'theme_location' => $location, 'container' => 'false', 'items_wrap' => '<div class="footer-link"><h3 class="footer-link-head">'.esc_html($menu_obj->name).'</h3>%3$s</div>',  'walker' => new Walker_Quickstart_Menu() ) ); ?>
</div>
<script>$("#foot_nav div.footer-link:last-child").addClass("end");</script>
<div class="clearfix"></div>
</div>


<div class="col-lg-4 footer-subs">
<h3 class="footer-link-head"><?php if ($url = get_option('social_title_footer') ) { echo $url; } else { echo 'Stay Connected' ;} ?></h3>

                    <p class="desc"><?php if ($url = get_option('social_message_footer') ) { echo $url; } else { echo 'Like &amp; follow us on social networking sites to get the latest updates on movies, tv-series and
                        news' ;} ?></p>

<div class="form-subs mt20"><div id="social-foot" class="footer-social">
<?php if(get_option('fb_icon_footer') == "true") {?><a href="<?php if ($url = get_option('social_fb_footer') ) { echo $url; } else { echo '#' ;} ?>" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a><?php }?>
<?php if(get_option('tw_icon_footer') == "true") {?> <a href="<?php if ($url = get_option('social_tw_footer') ) { echo $url; } else { echo '#' ;} ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php }?>
<?php if(get_option('gp_icon_footer') == "true") {?><a href="<?php if ($url = get_option('social_gp_footer') ) { echo $url; } else { echo '#' ;} ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a><?php }?>
  <?php if(get_option('yt_icon_footer') == "true") {?><a href="<?php if ($url = get_option('social_yt_footer') ) { echo $url; } else { echo '#' ;} ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a><?php }?>
  </div><div class="clearfix"></div>
                    </div>
                    <div id="error-email-subs-footer" class="alert alert-danger error-block"></div>
                    <div id="success-subs-footer" class="alert alert-success error-block"></div>
                    <div class="clearfix"></div>
                </div>
				
				
<div class="col-lg-4 footer-copyright">
<p>
<?php $logo = get_option('psy-footer-logo');if (!empty($logo)) { ?>
<img id="logo-footer" border="0" src="<?php echo $logo; ?>" alt="<?php bloginfo('name') ?>" class="mv-ft-logo" />
<?php } else { ?>
<img id="logo-footer" border="0" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name') ?>" class="mv-ft-logo" />
<?php } ?>
</p>

                    <p><?php psy_footer_copyrights(); ?></p>
<?php if($copy = get_option('disclaimer_footer')) { ?>
                    <p style="font-size: 11px; line-height: 14px; color: rgba(255,255,255,0.4)"><?php echo stripslashes($copy); ?></p>
					<?php } else { ?>
					<p style="font-size: 11px; line-height: 14px; color: rgba(255,255,255,0.4)"><?php _e('Disclaimer: This site does not store any files on its server. All contents are provided by non-affiliated third parties.', 'mundothemes'); ?></p>
						<?php } ?>
                </div>
                <div class="clearfix"></div>
            </div>