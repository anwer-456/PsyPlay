<?php


// Year
function tax_episode_date() {
	$labels = array(
		'name'                       => _x( 'Year', 'Taxonomy General Name', 'psythemes' ),
		'singular_name'              => _x( 'Year', 'Taxonomy Singular Name', 'psythemes' ),
		'menu_name'                  => __( 'Year', 'psythemes' ),
	);
	$rewrite = array(
		'slug'                       => 'episode-date',
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
	register_taxonomy( 'episodedate', array( 'episodes' ), $args );
}
add_action( 'init', 'tax_episode_date', 0 );


// Guest star
function tax_guest_star() {
	$labels = array(
		'name'                       => _x( 'Guest Star', 'Taxonomy General Name', 'psythemes' ),
		'singular_name'              => _x( 'Guest Star', 'Taxonomy Singular Name', 'psythemes' ),
		'menu_name'                  => __( 'Guest Star', 'psythemes' ),
	);
	$rewrite = array(
		'slug'                       => 'guest-star',
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
	register_taxonomy( 'gueststar', array( 'episodes' ), $args );
}
add_action( 'init', 'tax_guest_star', 0 );


