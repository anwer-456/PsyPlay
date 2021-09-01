<?php
	register_taxonomy 
	( 'director', 'post', array(
	/* ============================================= */
	'hierarchical' => false,  'label' => __( 'Directors', 'psythemes' ),
	'query_var' => true, 'rewrite' => true)
	);
	register_taxonomy 
	( 'stars', 'post', array(
	/* ============================================= */
	'hierarchical' => false,  'label' => __( 'Actors', 'psythemes' ),
	'query_var' => true, 'rewrite' => true)
	);
	// register_taxonomy 
	// ( 'cast', 'post', array(
	// /* ============================================= */
	// 'hierarchical' => false,  'label' => __( 'Cast', 'psythemes' ),
	// 'query_var' => true, 'rewrite' => true)
	// );
	register_taxonomy 
	( 'country', 'post', array(
	/* ============================================= */
	'hierarchical' => false,  'label' => __( 'Country', 'psythemes' ),
	'query_var' => true, 'rewrite' => true)
	);
	register_taxonomy 
	( 'release-year', 'post', array(
	/* ============================================= */
	'hierarchical' => false,  'label' => __( 'Year', 'psythemes' ),
	'query_var' => true, 'rewrite' => true)
	);
	register_taxonomy 
	( 'quality', 'post', array(
	/* ============================================= */
	'hierarchical' => false,  'label' => __( 'Quality', 'psythemes' ),
	'query_var' => true, 'rewrite' => true)
	);