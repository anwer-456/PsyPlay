<div class="movies-list-wrap mlw-topview mt20">
<div class="ml-title">
<span class="pull-left"><?php echo get_option('sugg_title'); ?> <i class="fa fa-chevron-right ml10"></i></span>
<a href="<?php echo get_option("mov_archive");?>" class="pull-right cat-more"><?php _e('View more »', 'psythemes'); ?></a>
<ul id="sug-nav" role="tablist" class="nav nav-tabs">
<?php $active = get_option('sugg-featured-mov'); if ($active == "enable") { ?>
<li class="active"><a data-toggle="tab" role="tab" href="#movie-featured" aria-expanded="false"><?php _e('Featured', 'psythemes'); ?></a></li>
<?php }?>
<?php $active = get_option('sugg_mviews'); if ($active == "true") { ?>
<li><a data-toggle="tab" role="tab" href="#topview-today" aria-expanded="false"><?php _e('Most Viewed', 'psythemes'); ?></a></li>
<?php }?>
<?php $active = get_option('sugg_mfav'); if ($active == "true") { ?>
<li><a data-toggle="tab" role="tab" href="#top-favorite" aria-expanded="false"><?php _e('Most Favorite', 'psythemes'); ?></a></li>
<?php }?>
<?php $active = get_option('sugg_trating'); if ($active == "true") { ?>
<li><a data-toggle="tab" role="tab" href="#top-rating" aria-expanded="false"><?php _e('Top Rating', 'psythemes'); ?></a></li>
<?php }?>
<?php $active = get_option('sugg_timdb'); if ($active == "true") { ?>
<li><a data-toggle="tab" role="tab" href="#top-imdb" aria-expanded="false"><?php _e('Top IMDb', 'psythemes'); ?></a></li>
<?php }?>
</ul>
<div class="clearfix"></div>
</div>
<div id="sug-cont" class="tab-content">
<?php include_once 'featured.php'; ?>	
<?php $active = get_option('sugg_mviews'); if ($active == "true") { ?>
<div id="topview-today" class="movies-list movies-list-full tab-pane in fade">
<div id="content-box">
<?php include_once 'most_viewed.php'; ?>	
</div>
<div class="clearfix"></div>
</div>
<?php }?>

<?php $active = get_option('sugg_mfav'); if ($active == "true") { ?>                   
<div id="top-favorite" class="movies-list movies-list-full tab-pane in fade">
<div id="content-box">
<?php include_once 'most_favorite.php'; ?>
</div>
<div class="clearfix"></div>
</div>
<?php }?>

<?php $active = get_option('sugg_trating'); if ($active == "true") { ?>
<div id="top-rating" class="movies-list movies-list-full tab-pane in fade">
<div id="content-box">
<?php include_once 'top_rating.php'; ?>
</div>
<div class="clearfix"></div>
</div>
<?php }?>

<?php $active = get_option('sugg_timdb'); if ($active == "true") { ?>
<div id="top-imdb" class="movies-list movies-list-full tab-pane in fade">
<div id="content-box">
<?php include_once 'top_imdb.php'; ?>
</div>
<div class="clearfix"></div>
</div>
<?php }?>

</div>

</div>