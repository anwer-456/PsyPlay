<?php
$active1 = get_option('mobile_ios'); 
$active2 = get_option('mobile_android'); 
if ($active1 == "true") { 
$activate = $active1;	
} elseif  ($active2 == "true") {
$activate = $active2;
}
 if ($activate == "true") {?>
<?php $activate = get_option('mobile_ios'); if ($activate == "true") { ?><a href="#" class="tnca-block ios"><i class="fa fa-apple"></i><span><?php bloginfo('name'); ?></span><?php _e(' for Apple iOs','psythemes'); ?></a><?php }?>
<?php $activate = get_option('mobile_android'); if ($activate == "true") { ?><a href="#" class="tnca-block android"><i class="fa fa-android"></i><span><?php bloginfo('name'); ?></span><?php _e(' for Android','psythemes'); ?></a><?php }?>

 <?php }?>