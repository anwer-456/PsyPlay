<?php if(get_option('sli-social') == "true") {?>
<!--social home-->
<div class="social-home">
<div class="sh-like">

<!-- Go to www.addthis.com/dashboard to customize your tools -->
 <div class="addthis_inline_share_toolbox"></div>
 
</div>

<?php if($message = get_option('sli-social-message')) {?>
<span class="sh-text"><?php echo $message; ?></span>
<?php }?>

<div class="clearfix"></div>
</div>
<!--/social home-->
<?php } ?>