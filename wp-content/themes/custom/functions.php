<?php

/*Styles & Scripts*/
function insure_init() {

	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'insure-style', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_style( 'insure-normalize', get_template_directory_uri() . '/assets/css/normalize.css', null, $theme_version );
	wp_enqueue_style( 'insure-app', get_template_directory_uri() . '/assets/css/app.css', array('insure-normalize'), $theme_version );

	//Scripts
	wp_enqueue_script( 'insure-js', get_template_directory_uri() . '/assets/js/app.js', array(), $theme_version, true );

}

add_action( 'wp_enqueue_scripts', 'insure_init' );



