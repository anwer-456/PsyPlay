<?php if( have_rows('player') ): ?>
<div class="player2">
<div class="embed2">
<?php $numerado = 1; { while( have_rows('player') ): the_row(); ?>
<div id="player2<?php echo $numerado; ?>">

<?php if($dato = get_sub_field('embed_player')) {  ?>
<?php echo do_shortcode($dato); ?>
<?php } ?>
</div>
<?php $numerado++; ?>   
<?php endwhile; } ?>
</div>
<div class="navplayer2">
<span class="tiplayer">    </span>
<ul class="player2ul idTabs">
<li class="mainer"><a><?php _e('Select','psythemes'); ?> <i class="icon-sort"></i></a>
<ul>
<?php $numerado = 1; { while( have_rows('player') ): the_row(); ?>
<script>
  $( function() {
    $( "<?php echo $numerado; ?>" ).tabs();
  } );
  </script>

<li><a href="#player2<?php echo $numerado; ?>"><?php  the_sub_field('titulo_player'); ?></a></li>
<?php $numerado++; ?>   
<?php endwhile; } ?>
</ul>
</li>
</ul>
</div>
</div>
<?php else : ?>
<div class="nodata"><?php _e('No data available','psythemes'); ?></div>
<?php endif; ?>