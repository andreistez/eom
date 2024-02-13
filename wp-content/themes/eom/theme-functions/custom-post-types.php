<?php

// Person post type.
register_post_type(
	'person',
	[
		'labels'				=> [
			'name'				=> esc_html__( 'People', 'eom' ),
			'singular_name'		=> esc_html__( 'Person', 'eom' ),
			'add_new'			=> esc_html__( 'Add New Person', 'eom' ),
			'add_new_item'		=> esc_html__( 'Add New Person', 'eom' ),
			'edit_item'			=> esc_html__( 'Edit Person', 'eom' ),
			'new_item'			=> esc_html__( 'New Person', 'eom' ),
			'view_item'			=> esc_html__( 'View Person', 'eom' ),
			'search_items'		=> esc_html__( 'Find Person', 'eom' ),
			'not_found'         => esc_html__( 'People not found', 'eom' ),
			'not_found_in_trash'=> esc_html__( 'There are no People in the trash', 'eom' ),
			'parent_item_colon'	=> '',
			'menu_name'			=> esc_html__( 'People', 'eom' )
		],
		'menu_icon'				=> 'dashicons-businessperson',
		'public'				=> true,
		'publicly_queryable'	=> true,
		'exclude_from_search'	=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_rest'			=> true,
		'query_var'				=> true,
		'rewrite'               => true,
		'capability_type'		=> 'post',
		'map_meta_cap'			=> true,
		'has_archive'			=> false,
		'hierarchical'			=> false,
		'menu_position'			=> 6,
		'supports'				=> ['title', 'thumbnail', 'editor']
	]
);

