<div role="tabpanel" class="tab-pane fade" id="tn-notice">
<ul class="tn-news ps-container ps-active-y" >
<?php $args = array( 'post_type' => 'notice', 'showposts' => '3','orderby' => 'modified');$my_query = new WP_Query($args); ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; $IDPost = get_the_ID(); ?>
<li>
<div class="tnc-info">
 <h4><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
</div>
<div class="clearfix"></div>
 </li>
<?php endwhile; ?>
 <li class="view-more"><a href="<?php bloginfo('url'); ?>/<?php echo get_option('news'); ?>"> <?php _e('View More', 'psythemes'); ?> <i class="fa fa-chevron-circle-right"></i></a></li>
 <li class="tn-apps"><?php get_template_part('includes/featured/mobile_app'); ?></li>
 <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 365px; right: 3px;"><div class="ps-scrollbar-y" style="top: 0px; height: 137px;"></div></div>
</ul>
</div>