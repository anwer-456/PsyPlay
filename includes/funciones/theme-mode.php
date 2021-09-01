<?php $default = get_option('psy-default-style'); if($default == 'light') {?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css?ver=<?php recoger_version();?>" type="text/css">
<?php } else {?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.dark.css?ver=<?php recoger_version();?>" type="text/css">
<?php }?>