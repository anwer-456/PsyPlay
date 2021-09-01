<?php $active1 = get_option('news-module'); $active2 = get_option('notice-module'); if ($active1 == "enable") { $activate = $active1;	} elseif  ($active2 == "enable") {$activate = $active2;}?>
<?php if ($activate == "enable") {?>
<div id="top-news">
<div class="top-news">
<ul class="nav nav-tabs" role="tablist">
<?php if ($active1 == "enable") {?><li class="active"><a href="#tn-news" role="tab" data-toggle="tab"><?php _e('Latest News','psythemes'); ?></a></li><?php }?>
<?php if ($active2 == "enable") {?><li><a href="#tn-notice" role="tab" data-toggle="tab"><?php _e('Notice','psythemes'); ?></a></li><?php }?>
</ul>
<div class="top-news-content">
<div class="tab-content">
<?php if ($active1 == "enable") {?><?php get_template_part('includes/home/news/news'); ?><?php }?>
<?php if ($active2 == "enable") {?><?php get_template_part('includes/home/news/notice'); ?><?php }?>					
</div>
</div>
</div>
</div>
<?php } ?>