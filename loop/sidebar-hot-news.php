<div class="box hot-news">
<div class="box-head">
<div class="nlh"><?php if ($activate = get_option('article-hot-title')) { ?><?php echo $activate; } else { echo 'Hot Article'; }?></div>
<div class="clearfix"></div>
</div>
<div class="ns-list">


<?php
$ppp = get_option('article-hot-amount');
query_posts( array('post_type' => 'noticias', 'meta_key' => 'views', 'showposts' => $ppp,'orderby' => 'meta_value_num', 'order' => 'DESC' ) );
 if (have_posts()) :
while (have_posts()) : the_post();  ?>
<div class="news-list-item">
<div class="info">
<h2>
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<p class="time">
<p class="label label-default label-sm mr10"><?php _e('News', 'mundothemes'); ?></p>
<i class="fa fa-clock-o mr5"></i><?php _e('Posted', 'mundothemes'); ?> <?php echo get_the_date('Y/m/d');?></p>
</div>
<div class="clearfix"></div>
</div>
<?php endwhile; endif; ?>

</div>