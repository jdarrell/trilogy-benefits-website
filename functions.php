<?php
/**
 * Load CSS and Javascript
 */

function load_styles_and_scripts(){
	//load styles
	wp_enqueue_style(
		'bootstrap-styles',
		get_template_directory_uri().'/css/bootstrap.min.css'
		);
	wp_enqueue_style(
		'main-styles',
		get_template_directory_uri().'/style.css'
		);
	//load scripts
	wp_enqueue_script(
		'jquery',
		'http://code.jquery.com/jquery.min.js'
		);
	wp_enqueue_script(
		'bootstrap-scripts',
		get_template_directory_uri().'/js/bootstrap.min.js'
		);
}

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

/**
* Register navigation menus
**/

register_nav_menus(array(
	'main-nav' => 'Main Navigation',
	'footer-nav' => 'Footer Navigation'
));

/**
* Register Sidebar
*/

register_sidebar( array(
	'name' => 'main-sidebar',
	'description' => 'This is the main sidebar',
	'before_widget' => '<div id="sidebar-wrap">',
	'after_widget' => "</div>",
	'before_title' => '<h4 class="text-center">',
	'after_title' => "</h4>"
	) 
);

/**
*	Register the Testimonial post type
*/

function create_testimonials_post_type() {
	$labels = array(
		'name' => 'Testimonials',
		'singular_name' => 'Testimonial',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Testimonial',
		'edit_item' => 'Edit Testimonial',
		'new_item' => 'New Testimonial',
		'all_items' => 'All Testimonials',
		'view_item' => 'View Testimonial',
		'search_items' => 'Search testimonials',
		'not_found' => 'No testimonials found',
		'not_found_in_trash' => 'No testimonials found in Trash',
		'parent_item_colon' => '',
		'menu_name' => 'Testimonials'
	);

	$args = array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true, 
	    'show_in_menu' => true, 
	    'query_var' => true,
	    'rewrite' => array( 'slug' => 'testimonial' ),
	    'capability_type' => 'post',
	    'has_archive' => true, 
	    'hierarchical' => false,
	    'menu_position' => null,
	    'supports' => array( 'title' )
	); 

	register_post_type( 'testimonial', $args );
}
add_action( 'init', 'create_testimonials_post_type' );

?>