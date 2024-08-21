<?php

function univarsity_setup() {
	
	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

}
add_action( 'after_setup_theme', 'univarsity_setup' );

function univarsity_scripts_styles() {
	
	wp_enqueue_style( 'univarsity-bootstrap', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'univarsity-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
	wp_enqueue_style('univarsity-custom-style', get_template_directory_uri().'/build/index.css',  '1.0.0', 'all'); 
	// wp_enqueue_style('univarsity-index', get_template_directory_uri().'/build/style-index.css',  '1.0.0', 'all'); 
	wp_enqueue_style('univarsity-index', get_theme_file_uri('/build/style-index.css'),  '1.0.0', 'all'); 
	wp_enqueue_style( 'univarsity-style', get_stylesheet_uri());


	// scripts
	wp_enqueue_script( 'univarsity-script', get_template_directory_uri() . '/build/index.js', array( 'jquery' ), '1.0.0', true );


}
add_action( 'wp_enqueue_scripts', 'univarsity_scripts_styles' );
