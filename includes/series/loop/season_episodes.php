<?php get_template_part('includes/single/controls'); ?>
<?php get_template_part('includes/series/loop/ep_sched'); ?>
<?php if( have_rows('temporadas') ): ?>
<div id="seasons">

<?php if( have_rows('temporadas') ): 
$numerado = 1; { 
while( have_rows('temporadas') ): the_row(); ?>

<div class="tvseason">    <div class="les-title"> <i class="fa fa-server mr5"></i>
                        <strong><?php _e('Season','psythemes') ?> <?php echo $numerado; ?></strong></div>
<?php if( have_rows('episodios') ): ?>
<div class="les-content" <?php if ($count == 0) : ?>style="display: block"<?php endif; $count++; ?>>

<?php $numerado2 = 1; { while( have_rows('episodios') ): the_row(); ?>


<a href="<?php bloginfo('url'); ?>/episode/<?php echo get_sub_field('slug'); ?>">
<?php _e('Episode', 'psythemes'); ?> <?php echo $numerado2 ?> <?php if($title = get_sub_field('titlee')) { echo '- '; echo $title; } ?>
</a>


<?php $numerado2++; ?> 
<?php endwhile; } ?> 
</ul>
</div>
<?php else : ?>
<div class="se-a">

<div class="numerando"><?php echo $numerado; ?> x -</div>
<div class="episodiotitle">
<a><?php _e('no data','psythemes'); ?></a>
<span><?php _e('n/a','psythemes'); ?></span>
<div>

</div>
<?php endif; ?>
</div>
<?php $numerado++; ?> 
<?php endwhile; } ?> 
<?php endif; ?>
</div>
<?php endif; ?>