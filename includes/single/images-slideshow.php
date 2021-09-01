<?php $active = get_option('images-slideshow-mv'); if ($active == "enable") { ?>
<!-- movie images -->
<div class="mvi-images">
<div id="backdrops" class="galeria">
  <?php $img = get_post_meta($post->ID, "imagenes", $single = true); backdrops ($img); ?>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
<!-- / movie images -->
<?php }?>