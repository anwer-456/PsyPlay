<?php
// Register category Series TV Shows
function tvshows_taxonomy() {
register_taxonomy('tvshows_categories', array('tvshows,episodes',),
array(
	'show_admin_column' => true, 
	'hierarchical' => true, 
	'rewrite' => array('slug' => get_option('tvshows-category')),)
);
}
add_action('init', 'tvshows_taxonomy', 0);
function prefijo_series() {
flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'prefijo_series' );
// Register Series
function series() {

	$labels = array(
		'name'                => _x( 'TV-Series', 'Post Type General Name', 'psythemes' ),
		'singular_name'       => _x( 'TV-Serie', 'Post Type Singular Name', 'psythemes' ),
		'menu_name'           => __( 'TV-Series', 'psythemes' ),
		'name_admin_bar'      => __( 'TV-Series', 'psythemes' ),
		'add_new_item'        => __( 'Add TV-Series', 'psythemes' ),
		'add_new'             => __( 'Add TV-Series', 'psythemes' ),
	);
	$rewrite = array(
		'slug'                => 'series',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'TV-Serie', 'psythemes' ),
		'description'         => __( 'TV series manage', 'psythemes' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail','comments' ),
		'taxonomies'          => array('category','post_tag', 'quality', 'director','stars','country','release-year'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 3,
		'menu_icon'           => 'dashicons-welcome-view-site',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => false,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'tvshows', $args );
}
add_action( 'init', 'series', 0 );
// Metadatos y taxonomias
include('metabox.php');
include('taxonomia.php');
include_once 'episodios/tipo.php';