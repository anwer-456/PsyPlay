<?php
/*
Template Name: Keywords Page
*/
get_header(); ?>
<div class="header-pad"></div>
<!-- main -->
<div id="main" class="page-category">
<div class="container">
<div class="pad"></div>

<div class="main-content main-detail">
<?php if(get_option("notice_location") == "global" ){?>
<?php get_template_part('includes/aviso'); ?>
<?php }?>
<?php echo page_breadcrumbs(); ?>
<div class="infopage">
<div class="infopage-head"><?php the_title(); ?></div>
<div class="content">
<?php wp_tag_cloud('smallest=12&largest=40&'); ?>
</div>



</div>


</div>



</div>
</div>
</div>
<!--/main -->
<?php  get_footer(); ?>