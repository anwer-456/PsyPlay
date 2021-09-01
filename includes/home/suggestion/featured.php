<?php 
if(get_option('sugg-mv') == "true") {
$mv = 'post';
}
if(get_option('sugg-tv') == "true") {
$tv = 'tvshows';
}
$value = get_option('sugg_featured_mov_id');
$active = get_option('sugg-featured-mov'); if ($active == "enable") { ?>
<?php $filter = get_option('sugg-filterby-cat'); if ($filter == "true")   {?>
<div id="movie-featured" class="movies-list movies-list-full tab-pane in fade">
<?php 

$postnum = get_option('sugg_num');
$args = array( 'posts_per_page' => $postnum, 'post_type' => array($mv, $tv), 'cat' => $value, );
$catquery = new WP_Query( $args );
while($catquery->have_posts()) : $catquery->the_post(); ?>
<?php include 'item.php'; ?>
<?php  endwhile; ?>						

	
<div class="clearfix"></div>
</div>
<?php } else {?>
<div id="movie-featured" class="movies-list movies-list-full tab-pane in fade">

<?php 
$postnum = get_option('slider_num');
if(!empty($value)) {
query_posts(array('tax_query' => array( array('taxonomy' => 'release-year','field' => 'term_id','terms' => $value)),'post_type'=>array($mv, $tv), 'showposts' => $postnum)); 
}else {
$year = date ("Y"); query_posts(array('release-year' => $year, 'posts_per_page' => 1, 'post_type'=>array($mv, $tv), 'showposts' => $postnum)); 
}
?>
<?php while (have_posts()) : the_post(); ?>
<?php include 'item.php'; ?>
<?php  endwhile; ?>		
<div class="clearfix"></div>
</div>		
<?php } }?>