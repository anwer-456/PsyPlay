<div class="pp-main">
<div class="ppm-head">
<div class="ppmh-title"><i class="fa fa-user mr5"></i> <?php _e('Profile','psythemes'); ?></div>
</div>
<div class="ppm-content user-content profile">
<div class="uct-avatar">
<img class="avatar" src="<?php echo get_template_directory_uri(); ?>/images/default_avatar.jpg" title="<?php the_author_meta( 'first_name', $current_user->ID ); ?> <?php the_author_meta( 'last_name', $current_user->ID ); ?>" alt="<?php the_author_meta( 'first_name', $current_user->ID ); ?> <?php the_author_meta( 'last_name', $current_user->ID ); ?>">
</div>
<div class="uct-info">
<div class="block">
<label><?php _e('Full name:','psythemes'); ?></label> <?php the_author_meta( 'first_name', $current_user->ID ); ?> <?php the_author_meta( 'last_name', $current_user->ID ); ?></div>
<div class="block">
<label><?php _e('Username:','psythemes'); ?></label><?php global $current_user; get_currentuserinfo(); echo $current_user->user_login; ?></div>
<div class="block">
<label><?php _e('Email','psythemes'); ?></label> <?php the_author_meta( 'user_email', $current_user->ID ); ?>                            </div>
<div class="block">
<label><?php _e('Facebook','psythemes'); ?></label> <a href="<?php the_author_meta( 'facebook', $current_user->ID ); ?>" target="_blank"><?php the_author_meta( 'facebook', $current_user->ID ); ?></a>                            </div>
<div class="block">
<label><?php _e('Twitter','psythemes'); ?></label> <a href="<?php the_author_meta( 'twitter', $current_user->ID ); ?>" target="_blank"><?php the_author_meta( 'twitter', $current_user->ID ); ?></a>                            </div>
<div class="block">
<label><?php _e('Google+','psythemes'); ?></label><a href="<?php the_author_meta( 'googleplus', $current_user->ID ); ?>" target="_blank"><?php the_author_meta( 'googleplus', $current_user->ID ); ?></a>                             </div>
<div class="block">
<label><?php _e('Join Date','psythemes'); ?></label>  <?php global $wp_query; $registered = date_i18n( "Y-m-d", strtotime( get_the_author_meta( 'user_registered', $wp_query->queried_object_id ) ) ); echo $registered;?>
</div>
<div class="mt20">
<a href="<?php the_permalink(); ?>?action=edit" class="btn btn-successful" title=""><?php _e('Edit account info','psythemes'); ?></a>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>