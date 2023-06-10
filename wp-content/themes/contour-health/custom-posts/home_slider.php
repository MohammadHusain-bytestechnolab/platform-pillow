<?php
// Register Custom Post Type HomeSliders
function create_homesliders_cpt() {

	$labels = array(
		'name' => _x( 'HomeSlider', 'Post Type General Name', 'platform' ),
		'singular_name' => _x( 'HomeSliders', 'Post Type Singular Name', 'platform' ),
		'menu_name' => _x( 'HomeSlider', 'Admin Menu text', 'platform' ),
		'name_admin_bar' => _x( 'HomeSliders', 'Add New on Toolbar', 'platform' ),
		'archives' => __( 'HomeSliders Archives', 'platform' ),
		'attributes' => __( 'HomeSliders Attributes', 'platform' ),
		'parent_item_colon' => __( 'Parent HomeSliders:', 'platform' ),
		'all_items' => __( 'All HomeSlider', 'platform' ),
		'add_new_item' => __( 'Add New HomeSliders', 'platform' ),
		'add_new' => __( 'Add New', 'platform' ),
		'new_item' => __( 'New HomeSliders', 'platform' ),
		'edit_item' => __( 'Edit HomeSliders', 'platform' ),
		'update_item' => __( 'Update HomeSliders', 'platform' ),
		'view_item' => __( 'View HomeSliders', 'platform' ),
		'view_items' => __( 'View HomeSlider', 'platform' ),
		'search_items' => __( 'Search HomeSliders', 'platform' ),
		'not_found' => __( 'Not found', 'platform' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'platform' ),
		'featured_image' => __( 'Featured Image', 'platform' ),
		'set_featured_image' => __( 'Set featured image', 'platform' ),
		'remove_featured_image' => __( 'Remove featured image', 'platform' ),
		'use_featured_image' => __( 'Use as featured image', 'platform' ),
		'insert_into_item' => __( 'Insert into HomeSliders', 'platform' ),
		'uploaded_to_this_item' => __( 'Uploaded to this HomeSliders', 'platform' ),
		'items_list' => __( 'HomeSlider list', 'platform' ),
		'items_list_navigation' => __( 'HomeSlider list navigation', 'platform' ),
		'filter_items_list' => __( 'Filter HomeSlider list', 'platform' ),
	);
	$args = array(
		'label' => __( 'HomeSliders', 'platform' ),
		'description' => __( 'Home page slider', 'platform' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-align-center',
		'supports' => array('title', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'homesliders', $args );

}
add_action( 'init', 'create_homesliders_cpt', 0 );