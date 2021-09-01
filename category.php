<?php get_header(); ?>
<div class="header-pad"></div>
<!-- main -->
<div id="main" class="page-category">
<div class="container">
<div class="pad"></div>
<div class="main-content main-category">

<!--category-->
<div class="movies-list-wrap mlw-category">
<div class="ml-title ml-title-page">
<span><?php single_cat_title(); ?> <?php _e('Movies', 'psythemes'); ?></span>
<div class="clearfix"></div>
</div>
 <?php $active = get_option('results-ad-1'); if ($active == "true") { ?>

            <div class="content-kuss" style="margin: 0;">
<?php if ($note = get_option('ads_mains_1_title')) { ?>
                <div id="content-kuss-title"> <span><?php echo $note; ?></span></div>
<?php }?>
				<?php if ($ads = get_option('ads_mains_1_code')) { ?><div class="content-kuss-ads"><?php echo stripslashes($ads); ?></div><?php }?>
            </div>
<?php }?>               
                
<div class="movies-list movies-list-full">
<?php  if (have_posts()) : ?>
<?php post_movies_true(); ?>
<?php while (have_posts()) : the_post(); 
if(get_option('edd_sample_theme_license_key')) {
?>
<?php include 'includes/home/item.php'; ?>
<?php } endwhile; ?>						
<?php else : ?>
<h3 style="margin-left: 10px"><?php _e('No content available', 'psythemes'); ?></h3>
<?php endif; ?>

<div class="clearfix"></div>
</div>

<?php pagination($additional_loop->max_num_pages);?>

</div>
<?php $active = get_option('results-ad-2'); if ($active == "true") { ?>

            <div class="content-kuss" style="margin: 0;">
<?php if ($note = get_option('ads_mains_2_title')) { ?>
                <div id="content-kuss-title"> <span><?php echo $note; ?></span></div>
<?php }?>
				<?php if ($ads = get_option('ads_mains_2_code')) { ?><div class="content-kuss-ads"><?php echo stripslashes($ads); ?></div><?php }?>
            </div>
<?php }?>
</div>
</div>
</div>
<!--/main -->

<?php  get_footer(); ?>