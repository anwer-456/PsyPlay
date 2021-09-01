<?php $activar = get_option('activar_notice'); if ($activar == "true") { ?>
<?php if($notice_note = get_option('notice')){?>
<div id="cookiedata" class="ann-home alert text-center" style=" font-size: 16px; font-weight: bold; background: #<?php echo get_option('color_notice'); ?>; color: #fff;">
<span><i class="fa fa-blink fa-bullseye mr10"></i> <?php echo stripslashes($notice_note); ?></span>
</div>
<?php } }?>