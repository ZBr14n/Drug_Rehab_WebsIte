<?php

// add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

// function enqueue_parent_styles() {
//    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
// }







function load_parent_child_styles() {
	
	// enqueue parent styles
	wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css');
	
	// enqueue child styles
	wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/style.css', array('parent-theme'));
	
}
add_action('wp_enqueue_scripts', 'load_parent_child_styles');

wp_enqueue_style ('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.5.1.slim.min.js', array( 'jquery' ),'',true );
wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', array( 'jquery' ),'',true );
wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array( 'jquery' ),'',true );


// wp_enqueue_script( 'googlemap', 'https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyB9wfOdbmESPO0xD9wtrXTYus7usm0jiEE&center=47.65,-122.35&zoom=12&format=png&maptype=roadmap&style=element:geometry%7Ccolor:0x212121&style=element:labels.icon%7Cvisibility:off&style=element:labels.text.fill%7Ccolor:0x757575&styl');




function js_scripts() {
	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/nav.js', array( 'jquery' ),'',true );
	
}
add_action( 'wp_enqueue_scripts', 'js_scripts' );




// calls external API/CDN for example
// add_action('wp_print_styles', 'load_fonts');
// function load_fonts() {
//     wp_register_style('et-googleFonts', 'https://fonts.googleapis.com/css?family=Open+Sans');
//     wp_enqueue_style( 'et-googleFonts');
// }






// removes widgets
// add_action( 'after_setup_theme', 'child_remove_parentWidgets');
// function child_remove_parentWidgets(){
//     remove_action( 'widgets_init', 'twentytwenty_sidebar_registration' );    
// }