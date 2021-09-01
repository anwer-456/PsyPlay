<?php if(get_option('first-visit-notice') == "enable" ) {?>
<div class="alert-bottom" style="display: none;">
<div class="container">
<div class="alert-bottom-content">
<p class="desc">
<?php echo str_replace("{site}",get_bloginfo("name"), get_option("first-visit-notice-message"));?>
</p>
</div>
<?php if(get_option('first-visit-notice-buttons') == "true") {?>
<div class="ab-follow">
<?php if($title = get_option('first-visit-notice-title')) {?><span class="abf-text"><?php echo $title;?></span><?php }?>
<div class="abf-btn">
<?php if($fb = get_option ('notice-facebook-url')) {?>
<div id="fb-root"></div>
<script>!function(e,n,t){var o,c=e.getElementsByTagName(n)[0];e.getElementById(t)||(o=e.createElement(n),o.id=t,o.src="//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9",c.parentNode.insertBefore(o,c))}(document,"script","facebook-jssdk");</script>
<div class="fb-like" data-href="<?php echo $fb;?>" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
<?php }?>
<?php if($tw = get_option ('notice-twitter-url')) {?>
<a class="twitter-follow-button"  href="<?php echo $tw;?>"  data-size="default" data-show-count="false"></a>
<?php }?>
</div>
</div>
<?php }?>
<div title="Close" class="alert-bottom-close" id="alert-bottom-close">
<i class="fa fa-close"></i>
</div>
<div class="clearfix"></div>
</div>
</div>
<?php }?>