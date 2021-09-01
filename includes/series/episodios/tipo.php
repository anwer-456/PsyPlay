<?php
// Register Series
function episodios() {

	$labels = array(
		'name'                => _x( 'Episode', 'Post Type General Name', 'psythemes' ),
		'singular_name'       => _x( 'Episodes', 'Post Type Singular Name', 'psythemes' ),
		'menu_name'           => __( 'Episodes', 'psythemes' ),
		'name_admin_bar'      => __( 'Episodes', 'psythemes' ),
		'add_new_item'        => __( 'Add Episodes', 'psythemes' ),
		'add_new'             => __( 'Add Episodes', 'psythemes' ),
	);
	$rewrite = array(
		'slug'                => 'episode',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'Episode', 'psythemes' ),
		'description'         => __( 'Episode manage', 'psythemes' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail','comments' ),
		'taxonomies'          => array( 'post_tag', 'director','quality'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-controls-play',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => false,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'episodes', $args );
}
add_action( 'init', 'episodios', 0 );


// Metadatos y taxonomias
include('metabox.php');
include('taxonomia.php');