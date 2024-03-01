<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function h4x0r_theme_setup() {
	// Enqueue editor styles.
	add_editor_style( 'style.css' );
}

add_action( 'after_setup_theme', 'h4x0r_theme_setup' );

/**
 * Enqueue styles.
 */
function h4x0r_theme_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'h4x0r_theme_styles' );