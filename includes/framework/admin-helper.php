<?php

if (!function_exists('acera_admin_head')) { function acera_admin_head() { if ( isset($_GET['page']) && $_GET['page'] == 'psyplay' ) { ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/includes/framework/"; ?>css/acera_css.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/includes/framework/"; ?>css/colorpicker.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/includes/framework/"; ?>css/custom_style.css" />
<script type="text/javascript" src="<?php echo get_template_directory_uri()."/includes/framework/"; ?>js/colorpicker.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()."/includes/framework/"; ?>js/ajaxupload.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()."/includes/framework/"; ?>js/mainJs.js"></script>
        <?php
		}
    }
}


if (!function_exists('acera_admin_head_2')) { function acera_admin_head_2() { if ( isset($_GET['page']) && $_GET['page'] == 'psythemes' ) { ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/includes/framework/"; ?>css/admin.css" />

        <?php
		}
    }
}



if (!function_exists('acera_admin_head_3')) { function acera_admin_head_3() {  ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/includes/framework/"; ?>css/fix.css" />
        <?php
    }
}



function myPlugin_admin_scripts() {
   if ( is_admin() ){ 
      if ( isset($_GET['page']) && $_GET['page'] == 'psyplay' ) {
         wp_enqueue_script('jquery');
         wp_enqueue_script( 'jquery-form' );
      }
   }
}
add_action( 'admin_init', 'myPlugin_admin_scripts' );
?>