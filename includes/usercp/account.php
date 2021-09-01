<?php get_header();
$pt = $_GET['action'];
 ?>
<div class="header-pad"></div>
<div id="main" class="page-detail page-profiles">
<div class="container">
<div class="pad"></div>
<div class="main-content main-detail">
<?php if(get_option("notice_location") == "global" ){?>
<?php get_template_part('includes/aviso'); ?>
<?php }?>
<div id="bread">
<ol class="breadcrumb">
<li><a href="<?php bloginfo('url'); ?>"><?php _e('Home','psythemes'); ?></a></li>
<li><?php _e('User','psythemes'); ?></li>
<?php if($_GET['action'] =='favorites') {?>
<li class="active"><?php _e('Favorites','psythemes'); ?></li>
<?php } else {?>
<li class="active"><?php _e('Profile','psythemes'); ?></li>
<?php }?>
</ol>
</div>

<?php if ( !is_user_logged_in() ) : ?>
<div class="alert alert-warning" style="margin-bottom: 0; border-radius: 0;">
<i class="fa fa-warning mr5"></i> <b><?php _e('You are either not logged in or do not have permission to view this page.', 'psythemes'); ?></b>
</div>
<!-- .warning -->
<?php else : ?>

<div class="profiles-wrap">
<div class="sidebar">
<div class="sidebar-menu">
<div class="sb-title"><i class="fa fa-navicon mr5"></i> <?php _e('Menu','psythemes'); ?></div>
<ul>
<li <?php echo $_GET['action'] == 'profile' ? 'class="active"' : ''; ?>>
<a href="<?php the_permalink(); ?>?action=profile">
<i class="fa fa-user mr5"></i> <?php _e('Profile','psythemes'); ?>
</a>
</li>
<li <?php echo $_GET['action'] == 'favorites' ? 'class="active"' : ''; ?>>
<a href="<?php the_permalink(); ?>?action=favorites">
<i class="fa fa-heart mr5"></i> <?php _e('My Favorites','psythemes'); ?>
</a>
</li>
<li <?php echo $_GET['action'] == 'edit' ? 'class="active"' : ''; ?>>
<a href="<?php the_permalink(); ?>?action=edit">
<i class="fa fa-pencil mr5"></i> <?php _e('Update Profile','psythemes'); ?>
</a>
</li>
</ul>
</div>
</div>

<?php if($pt =='') { ?>
<?php get_template_part('includes/usercp/profile'); ?>
<?php } elseif($pt =='profile') { ?>
<?php get_template_part('includes/usercp/profile'); ?>
<?php } elseif($pt =='favorites') { ?>
<?php get_template_part('includes/usercp/favorites'); ?>
<?php } ?>
<div class="clearfix"></div>
</div>
<?php endif;?>
</div>
</div>
</div>
</div>
<?php  get_footer(); ?>