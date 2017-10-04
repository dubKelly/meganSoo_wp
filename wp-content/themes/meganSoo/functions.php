<?php

function meganSoo_setup() {

	add_theme_support( 'menus' );
	register_nav_menu( 'primary', 'Primary Header Navigation' );

}
add_action( 'after_setup_theme', 'meganSoo_setup' );

function meganSoo_script_enqueue() {

	wp_enqueue_style( 'meganSooStyle', get_template_directory_uri() . '/styleSheets/css/indexStyles.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'meganSooJs', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'meganSoo_script_enqueue' );
