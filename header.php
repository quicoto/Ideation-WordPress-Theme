<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	<link rel="apple-touch-icon" sizes="180x180" href="<?= get_stylesheet_directory_uri() ?>/assets/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= get_stylesheet_directory_uri() ?>/assets/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= get_stylesheet_directory_uri() ?>/assets/favicon-16x16.png">
	<link rel="manifest" href="<?= get_stylesheet_directory_uri() ?>/assets/site.webmanifest?ver=1.0.2">
	<link rel="mask-icon" href="<?= get_stylesheet_directory_uri() ?>/assets/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#092635">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">	<?php bloginfo( 'name' ); ?></a></h1>
			<?php
			$test_description = get_bloginfo( 'description', 'display' );
			if ( $test_description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $test_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
