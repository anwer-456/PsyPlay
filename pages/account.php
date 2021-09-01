<?php 
/*
Template Name: Account page
*/
if (is_user_logged_in()):
	// pagina de mi cuenta
	if($_GET['action'] =='edit'):
		get_template_part('includes/usercp/account_edit'); 
	else:
		get_template_part('includes/usercp/account');
	endif;
else:
	get_template_part('header'); 
	if($_GET['action'] =='register'):
		get_template_part('pages/register'); 
	else:
		get_template_part('pages/login');
	endif;
	get_template_part('footer'); 
endif;
?>



