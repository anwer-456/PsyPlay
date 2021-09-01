<?php

// Studio
function tax_studio() {
	$labels = array(
		'name'                       => _x( 'Studio', 'Taxonomy General Name', 'psythemes' ),
		'singular_name'              => _x( 'Studio', 'Taxonomy Singular Name', 'psythemes' ),
		'menu_name'                  => __( 'Studio', 'psythemes' ),
	);
	$rewrite = array(
		'slug'                       => ('studio'),
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => false,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'studio', array( 'tvshows' ), $args );
}
add_action( 'init', 'tax_studio', 0 );
// Neworks
function tax_networks() {
	$labels = array(
		'name'                       => _x( 'Networks', 'Taxonomy General Name', 'psythemes' ),
		'singular_name'              => _x( 'Networks', 'Taxonomy Singular Name', 'psythemes' ),
		'menu_name'                  => __( 'Networks', 'psythemes' ),
	);
	$rewrite = array(
		'slug'                       => ('networks'),
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => false,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'networks', array( 'tvshows' ), $args );
}
add_action( 'init', 'tax_networks', 0 );
