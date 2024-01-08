<?php
/**
 * test functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package test
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Enqueue scripts and styles.
 */
function ideation_scripts() {
	wp_enqueue_style( 'test-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_dequeue_style( 'wp-block-library' ); // Remove block library CSS
}

add_action( 'wp_enqueue_scripts', 'ideation_scripts' );

