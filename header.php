<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" <?php language_attributes(); ?>>
 <head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="robots" content="index,follow">
<meta http-equiv="content-language" content="en">
<?php get_template_part('includes/funciones/seo'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta name="Generator" content="PsyPlay <?php recoger_version();?> and WordPress">
<?php $favicon = get_option('general-favicon'); if (!empty($favicon)) { ?>
<link rel="shortcut icon" href="<?php echo $favicon; ?>" type="image/x-icon" />
<?php } else { ?>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon" />
<?php } ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css?v=0.1" type="text/css">
<?php get_template_part('includes/funciones/theme-mode'); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.cluetip.css?ver=<?php recoger_version();?>" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.qtip.min.css?ver=<?php recoger_version();?>" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css?ver=<?php recoger_version();?>" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slide.css?ver=<?php recoger_version();?>" type="text/css">
<?php if (!function_exists('automatic_feed_links')) { ?>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<?php } ?>
<?php wp_head(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.lazyload.js?ver=<?php recoger_version();?>"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.qtip.min.js?ver=<?php recoger_version();?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js?ver=<?php recoger_version();?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/detectmobilebrowser.js?ver=<?php recoger_version();?>s"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/psyplay.custom.min.js?ver=<?php recoger_version();?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.idTabs.min.js?ver=<?php recoger_version();?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js?ver=<?php recoger_version();?>"></script>
<?php $ganalytics = get_option('analitica'); if (!empty($ganalytics)) {?>
<script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create','<?php echo $ganalytics; ?>','auto');ga('send','pageview');</script>
<?php }?>
<?php $activar = get_option('activate_js'); if ($activar == "true") { $js = get_option('code_js'); if(!empty($js)) { echo '<script type="text/javascript">'.$js.'</script>';  } } ?>
<?php if(get_option('psy-splash-screen') =="enable") {?>
<script>$(document).ready(function() {$("a.splash-image").click(function() {$( ".splash-image" ).remove();$('#content-embed').css('display', 'block');});});<?php if($values = info_movie_get_meta("youtube_id")) { ?>$(function() {$("a.pop-trailer").on("click", function(e) {$('#iframe-trailer').attr('src', "<?php $trailers = get_post_meta($post->ID, "youtube_id", $single = true); script_trailer($trailers) ?>");});$(document).on("click", function(e) {if ($(e.target).is("a.pop-trailer") === false) {$('#iframe-trailer').attr('src', '');}});});<?php }?>
</script>
<style>#content-embed{display:none;}</style><?php }?><style>.wp-video-shortcode video, video.wp-video-shortcode {height:100%!important;}.movieplay .mejs-container.mejs-container-fullscreen { max-height: 100%!important; height: 100%!important; }
<?php if(is_home){ echo '#main {min-height: calc(100vh - 371px);}';}?>
<?php if($logo_d = get_option('psy-dark-logo')) {?>#logo.night, #logo-home.night {background-image: url(<?php echo $logo_d;?>);}<?php }?>
<?php if($logo_l = get_option('psy-light-logo')) {?>#logo.light, #logo-home.light {background-image: url(<?php echo $logo_l;?>);}<?php }?>
<?php if(get_option('psy-default-style') == "dark") {?>
<?php if($logo = get_option('psy-dark-logo')) {?>#logo, #logo-home {background-image: url(<?php echo $logo;?>);}<?php }?>
<?php }else if(get_option('psy-default-style') == "light") {?>
<?php if($logo = get_option('psy-light-logo')) {?>#logo, #logo-home {background-image: url(<?php echo $logo;?>);}<?php }?>
<?php }?><?php $active = get_option('content-preview'); if($active == "true") { } else {echo '.qtip {display:none!important;}';}?><?php $active = get_option('rounded-corners'); if($active == "true") {echo '.movies-list .ml-item, .movies-list .ml-item .mli-info {border-radius: 5px!important;}';}?><?php if(get_option('premade_style1') == 'true') {$bordercolor = '#0397D6'; }elseif(get_option('psy-color-scheme') == 'blue') {$bordercolor = '#0397D6'; } elseif(get_option('psy-color-scheme') == 'purple') {$bordercolor = '#9e39e8'; } elseif(get_option('psy-color-scheme') == 'pink') {$bordercolor = '#e45cc0'; } elseif(get_option('psy-color-scheme') == 'orange') {$bordercolor = '#ff7b39'; } elseif(get_option('psy-color-scheme') == 'red') {$bordercolor = '#d60303'; } else {$bordercolor = '#79C142'; } $color = $bordercolor; $active = get_option('border-effect'); if($active == "true") {echo '.movies-list .ml-item:hover {border: 4px solid '.$bordercolor.';}';}?></style>
<?php if(is_single()) { ?>
<script>var timer=0;var perc=0;function updateProgress(percentage){$('#pbar_innerdiv').css("width",percentage+"%");$('#pbar_innertext').text(percentage+"%");} function animateUpdate(){perc++;updateProgress(perc);if(perc<100){timer=setTimeout(animateUpdate,550);}} $(document).ready(function(){$('#pbar_outerdiv').click(function(){clearTimeout(timer);perc=0;animateUpdate();});});$(document).ready(function(){$("#arriba").click(function(){return $("html, body").animate({scrollTop:0},1250),!1})});</script>
<?php }?>
<?php $activar = get_option('activate_css'); if ($activar == "true") { $css = get_option('code_css'); if(!empty($css)) { echo '<style>'.$css.'</style>';  } } ?>
<?php get_template_part('includes/funciones/psy-colors'); ?>
<?php $activar = get_option('activar-fake'); if ($activar == "true") { ?>
<?php if($colorad = get_option('color_adplayer')) { ?>
<style type='text/css'>.fake_player section span.barra span.played { background: #<?php echo $colorad; ?>;}.fake_player section span.barra span.played { background: #<?php echo $colorad; ?>;}.fake_player section span.controles i.fa:hover { color: #<?php echo $colorad; ?>;}.fake_player a.lnkplay:hover>.playads i.fa.fa-play { color: #<?php echo $colorad; ?>;}.fake_player a.lnkplay:hover>span.playads { background: rgba(0,0,0,0);}</style>
<?php }}?>
<?php
$active1 = get_option('news-module'); 
$active2 = get_option('notice-module'); 
if ($active1 == "enable") { 
$activate = $active1;	
} elseif  ($active2 == "enable") {
$activate = $active2;
}
 if ($activate == "enable") echo ''; else {?>
<style type='text/css'>#slider{width:100%}</style>
<?php }?>
<?php if(get_option('sli-social') == "disable") { ?>
<style>.top-content{box-shadow:0 3px 3px 0 rgba(0,0,0,0.2)}</style><?php }?>
<?php $activar = get_option('activar_notice'); if ($activar == "true") { ?>
<?php if($notice_link = get_option('color_lnknotice')){?>
<style type='text/css'>.ann-home a { color: #<?php echo $notice_link; ?>;}</style><?php }}?>
<script>$('.mobile-menu').on('click',function(){$('#menu').toggleClass('active');});</script>
<style tyle="text/css"><?php if (get_option('users_can_register') == "1") { ?>@media screen and (max-width: 520px){#switch-mode{top:8px;right:95px}.mobile-search{left:auto;right:55px}}@media screen and (max-width: 991px){#switch-mode{right:95px}.mobile-search{right:55px}.user-content .uct-avatar{display:none}.user-content .uct-info{padding-left:0}}@media screen and (max-width: 670px){.profiles-wrap .pp-main .ppm-content.user-content.profile{padding:40px 20px !important}}@media screen and (max-width: 350px){.user-content .uct-info .block label{width:100%}}<?php if (is_user_logged_in()) { echo ''; } else {?>@media screen and (max-width: 520px) {#switch-mode { top: 8px; right: 137px;}.mobile-search { left: auto; right: 95px;}}@media screen and (max-width: 991px) {	#switch-mode { right: 95px; } .mobile-search {	<?php $activar = get_option('night-mode'); if ($activar == "false") { ?> right: 95px; <?php } else {?> right: 137px; <?php }?>}}<?php }?><?php }?><?php if($color = get_option('first_visit_notice_bg')) {?>.alert-bottom { background: #<?php echo $color; ?>; }<?php }?></style>
</head>
<body>
<?php $activar = get_option('night-mode'); if ($activar == "true") { ?>		
<div id="switch-mode">
<?php $default = get_option('psy-default-style'); if($default == 'light') {?>
<div class="sm-icon"><i class="fa fa-moon-o"></i></div>
<div class="sm-text"> <?php _e('Night Mode','psythemes'); ?></div>
 <?php } else {?>
 <div class="sm-icon"><i class="fa fa-sun-o"></i></div>
 <div class="sm-text"> <?php _e('Light Mode','psythemes'); ?></div>
 <?php }?>
<div class="sm-button"><span></span></div>
</div>
<?php }?>
<!--header-->
<header>
<div class="container">
<div class="header-logo">
<a title="<?php bloginfo('name') ?>" href="<?php bloginfo('url'); ?>" id="logo"></a>
</div>
<div class="mobile-menu"><i class="fa fa-reorder"></i></div>
<div class="mobile-search"><i class="fa fa-search"></i></div>
<div id="menu">
<?php if(get_option('edd_sample_theme_license_key')) {
function_exists('wp_nav_menu') && has_nav_menu('menu_navegador' );
wp_nav_menu( array( 'theme_location' => 'menu_navegador', 'container' => '',  'menu_class' => 'top-menu', 'walker' => new WPSE_78121_Sublevel_Walker) );
} ?>
<div class="clearfix"></div>
</div>
<div id="top-user">
<div class="top-user-content <?php if (is_user_logged_in()) {echo logged; } else { echo guest;} ?>">
<?php $active = get_option('users_can_register'); if ($active == "1") { ?>
<?php if (is_user_logged_in()) { ?>
<div class="logged-user">
<a href="#" class="avatar user-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/images/default_avatar.jpg"><i class="fa fa-chevron-down"></i></a>
<ul class="dropdown-menu">
<li><a href="<?php echo get_option('account_page'); ?>/?action=profile"><i class="fa fa-user mr5"></i> <?php _e('Profile','psythemes'); ?></a></li>
<li><a href="<?php echo get_option('account_page'); ?>/?action=favorites"><i class="fa fa-heart mr5"></i> <?php _e('My Favorites','psythemes'); ?></a></li>
<li><a href="<?php echo get_option('account_page'); ?>/?action=edit"><i class="fa fa-pencil mr5"></i> <?php _e('Update Profile','psythemes'); ?></a></li>
<li><a href="<?php echo wp_logout_url(); ?>"><i class="fa fa-power-off mr5"></i> <?php _e('Logout','psythemes'); ?></a></li>
</ul>
</div>

<?php } else { ?>
<style tyle="text/css">

</style>
<a href="#pt-login" class="btn btn-successful btn-login" title="Login" data-target="" data-toggle="modal"> <?php _e('LOGIN','psythemes'); ?></a>
<?php } ?>
<?php } ?>
</div>
</div>
<div id="search">
<div class="search-content">
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
<input class="form-control search-input" type="text" placeholder="<?php _e('Search..', 'psythemes'); ?>" name="s" id="s" value="<?php echo $_GET['s'] ?>" <?php if(get_option('live-search') == "true") { echo 'data-swplive="true"';}?>>
<button type="submit"><i class="fa fa-search"></i></button>

</form>
</div>
</div>
<div class="clearfix"></div>
</div>
</header>
<!--/header-->
<div class="header-pad"></div>

