<div class="box fanpage">
<div class="fb-page" data-href="<?php echo get_option('article-likebox-fbid');?>" data-tabs="<?php if (get_option('likebox-timeline') == "true") { ?>timeline<?php }?>"  data-small-header="<?php if (get_option('likebox-header') == "true") { ?>true<?php } else {  echo 'false'; }?>"  data-height="400" data-adapt-container-width="true" data-hide-cover="<?php if (get_option('likebox-cover') == "true") { ?>true<?php } else { echo 'false'; }?> " data-show-facepile="<?php if (get_option('likebox-facepile') == "true") { ?>true<?php } else { echo 'false'; }?>"><blockquote cite="<?php echo get_option('article-likebox-fbid');?>" class="fb-xfbml-parse-ignore"><a href="<?php echo get_option('article-likebox-fbid');?>"><?php bloginfo('name'); ?></a></blockquote></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</div>