<?php 
// Register Custom Post Type testimonial
function create_testimonial_cpt() {

	$labels = array(
		'name' => _x( 'testimonial', 'Post Type General Name', 'platform' ),
		'singular_name' => _x( 'testimonial', 'Post Type Singular Name', 'platform' ),
		'menu_name' => _x( 'testimonial', 'Admin Menu text', 'platform' ),
		'name_admin_bar' => _x( 'testimonial', 'Add New on Toolbar', 'platform' ),
		'archives' => __( 'testimonial Archives', 'platform' ),
		'attributes' => __( 'testimonial Attributes', 'platform' ),
		'parent_item_colon' => __( 'Parent testimonial:', 'platform' ),
		'all_items' => __( 'All testimonial', 'platform' ),
		'add_new_item' => __( 'Add New testimonial', 'platform' ),
		'add_new' => __( 'Add New', 'platform' ),
		'new_item' => __( 'New testimonial', 'platform' ),
		'edit_item' => __( 'Edit testimonial', 'platform' ),
		'update_item' => __( 'Update testimonial', 'platform' ),
		'view_item' => __( 'View testimonial', 'platform' ),
		'view_items' => __( 'View testimonial', 'platform' ),
		'search_items' => __( 'Search testimonial', 'platform' ),
		'not_found' => __( 'Not found', 'platform' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'platform' ),
		'featured_image' => __( 'Featured Image', 'platform' ),
		'set_featured_image' => __( 'Set featured image', 'platform' ),
		'remove_featured_image' => __( 'Remove featured image', 'platform' ),
		'use_featured_image' => __( 'Use as featured image', 'platform' ),
		'insert_into_item' => __( 'Insert into testimonial', 'platform' ),
		'uploaded_to_this_item' => __( 'Uploaded to this testimonial', 'platform' ),
		'items_list' => __( 'testimonial list', 'platform' ),
		'items_list_navigation' => __( 'testimonial list navigation', 'platform' ),
		'filter_items_list' => __( 'Filter testimonial list', 'platform' ),
	);
	$args = array(
		'label' => __( 'testimonial', 'platform' ),
		'description' => __( 'Site testimonials are added here', 'platform' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-editor-quote',
		'supports' => array('excerpt', 'author', 'custom-fields', 'title'),
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
	register_post_type( 'testimonial', $args );

}

add_action( 'init', 'create_testimonial_cpt', 0 );