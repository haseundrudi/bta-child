<?php
/**
 * Bta-child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bta-child
 */

add_action( 'wp_enqueue_scripts', 'bta_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function bta_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'bta-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'bta-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'bta-style' )
	);

}
