<?php
/**
 * test functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.2.2' );
}


require get_template_directory() . '/inc/private-site.php';
require get_template_directory() . '/inc/scripts.php';
require get_template_directory() . '/inc/automatic-updates.php';