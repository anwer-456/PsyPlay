<?php

function news_taxonomy() {
register_taxonomy('article_categories', array('noticias'),
array(
	'show_admin_column' => true, 
	'hierarchical' => true, 
	'rewrite' => array('slug' => get_option('article-category')),)
);
}
add_action('init', 'news_taxonomy', 0);
// Articles
function noticias() {
	$labels = array(
		'name'                => _x( 'Articles', 'Post Type General Name', 'psythemes' ),
		'singular_name'       => _x( 'Article', 'Post Type Singular Name', 'psythemes' ),
		'menu_name'           => __( 'Articles', 'psythemes' ),
		'parent_item_colon'   => __( 'Parent Item:', 'psythemes' ),
		'all_items'           => __( 'All Articles', 'psythemes' ),
		'view_item'           => __( 'View Articles', 'psythemes' ),
		'add_new_item'        => __( 'Add Articles', 'psythemes' ),
		'add_new'             => __( 'Add Articles', 'psythemes' ),
		'edit_item'           => __( 'Edit', 'psythemes' ),
		'update_item'         => __( 'Update', 'psythemes' ),
		'search_items'        => __( 'Search', 'psythemes' ),
		'not_found'           => __( 'It was not found', 'psythemes' ),
		'not_found_in_trash'  => __( 'Was found in the trash', 'psythemes' ),
	);
	$rewrite = array(
		'slug'                => 'articles',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'articles', 'psythemes' ),
		'description'         => __( 'Add articles', 'psythemes' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments' ),
		'taxonomies'          => array( 'article_categories' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 2,
		'menu_icon'           => 'dashicons-rss',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'noticias', $args );
}
add_action( 'init', 'noticias', 0 );
// Tags
function tax_news_tags() {
	$labels = array(
		'name'                       => _x( 'Tags', 'Taxonomy General Name', 'psythemes' ),
		'singular_name'              => _x( 'Tags', 'Taxonomy Singular Name', 'psythemes' ),
		'menu_name'                  => __( 'Tags', 'psythemes' ),
	);
	$rewrite = array(
		'slug'                       => 'tags',
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
	register_taxonomy( 'articlestags', array( 'noticias' ), $args );
}
add_action( 'init', 'tax_news_tags', 0 );

include('newsmeta.php');