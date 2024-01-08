<?php

/**
 * Enqueue scripts and styles.
 */
function ideation_scripts() {
	wp_enqueue_style( 'test-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_dequeue_style( 'wp-block-library' ); // Remove block library CSS
}

add_action( 'wp_enqueue_scripts', 'ideation_scripts' );