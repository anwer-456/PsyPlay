<!-- contenido -->
<div class="box">

<div class="box_item">
<div class="peliculas">
<?php 
if($_GET['mt']) { 
require_once "formularios/recaptchalib.php";
     $siteKey = get_option('public_key_rcth');
     $secret = get_option('private_key_rcth');
     $lang = "es";
     $resp = null;
     $error = null;
     $reCaptcha = new ReCaptcha($secret);
if ($_POST["g-recaptcha-response"]) {
    $resp = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
if ($resp != null && $resp->success) { 
include_once 'includes/funciones/posting.php';  ?>
<div class="aviso verde">
<div class="icon"><b class="icon-checkmark"></b></div>
<div class="contenido">
<span><?php _e('Movie sent','mundothemes'); ?></span>
<?php _e('Excellent, the data has been sent.','mundothemes'); ?></div>
</div>
<?php } else { ?>
<div class="aviso rojo">
<div class="icon"><b class="icon-notice"></b></div>
<div class="contenido">
<span><?php _e('Error','mundothemes'); ?></span>
<?php _e('Your publication could not be processed', 'mundothemes'); ?>, <a href="javascript:history.back()"><?php _e('Try again', 'mundothemes'); ?></a></div>
</div>
<?php } } ?>
<?php agregar_movie(); ?>
</div>
<div class="lateral">
<div id="fixer2">
<a class="add_movie" href="<?php bloginfo('url'); ?>"><b class="icon-home"></b> <?php _e('Back','mundothemes'); ?></a>


</div>
</div>
</div>
</div>
<!-- Contenido -->
