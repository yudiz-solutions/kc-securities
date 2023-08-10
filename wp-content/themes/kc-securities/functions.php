<?php

// Upload SVG in media
add_filter('upload_mimes', 'SVG_upload');
function SVG_upload($file_types)
{
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes);
	return $file_types;
}




// Script & Styles
function enqueue_scripts()
{
	// Styles
	wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/assets/css/slick.css');
	wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css');
	wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/assets/css/animate.min.css');
	wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/style.css', 999);

	// Scripts
	wp_enqueue_script('jquery-bootstrap-main-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script('jquery-popper-min-js', get_stylesheet_directory_uri() . '/assets/js/popper.min.js');
	wp_enqueue_script('jquery-slick-js', get_stylesheet_directory_uri() . '/assets/js/slick.min.js');
	//custom js
	wp_enqueue_script('custom_js', (get_stylesheet_directory_uri() . '/assets/js/custom.js'), array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts', 9999);