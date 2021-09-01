<?php 
/*
Template Name: Homepage
*/

get_header(); ?>
<!-- main -->
<div id="main">
<div class="container">
<?php $active = get_option('featslidmodule'); if ($active == "true") { ?>
<div class="top-content">
<!-- slider -->
<div id="slider" class="swiper-container-horizontal">
<?php get_template_part('includes/featured/slider'); ?>
<div class="swiper-pagination swiper-pagination-clickable"></div>
<div class="clearfix"></div>
</div>
<!--/slider -->
<!--top news-->
<?php get_template_part('includes/featured/news'); ?>
<!--/top news-->
<div class="clearfix"></div>
</div>
<?php get_template_part('includes/featured/social'); ?>
<?php }?>

<?php get_template_part('includes/aviso'); ?>

<div class="main-content">
<?php $active = get_option('homepage-ad-above'); if ($active == "true") { ?>

            <div class="content-kuss" style="">
<?php if ($note = get_option('ads-homepage-1-title')) { ?>
                <div id="content-kuss-title"> <span><?php echo $note; ?></span></div>
<?php }?>
				<?php if ($ads = get_option('ads-homepage-1-code')) { ?><div class="content-kuss-ads"><?php echo stripslashes($ads); ?></div><?php }?>
            </div>
<?php }?>


<?php $active = get_option('suggmodule'); if ($active == "true") { ?>
<?php include_once 'includes/home/suggestion/suggestion.php'; ?>
<?php }?>

<?php $active = get_option('homepage-ad-after'); if ($active == "true") { ?>

            <div class="content-kuss" style="">
<?php if ($note = get_option('ads-homepage-2-title')) { ?>
                <div id="content-kuss-title"> <span><?php echo $note; ?></span></div>
<?php }?>
				<?php if ($ads = get_option('ads-homepage-2-code')) { ?><div class="content-kuss-ads"><?php echo stripslashes($ads); ?></div><?php }?>
            </div>
<?php }?>

<?php homepage_modules();?>


<?php $active = get_option('homepage-ad-before'); if ($active == "true") { ?>

            <div class="content-kuss" style="">
<?php if ($note = get_option('ads-homepage-3-title')) { ?>
                <div id="content-kuss-title"> <span><?php echo $note; ?></span></div>
<?php }?>
				<?php if ($ads = get_option('ads-homepage-3-code')) { ?><div class="content-kuss-ads"><?php echo stripslashes($ads); ?></div><?php }?>
            </div>
<?php }?>	
</div>
</div>
</div>
<!--/main -->
<?php  get_footer(); ?>