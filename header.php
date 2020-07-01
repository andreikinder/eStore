<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eStore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<?php //body_class(); ?>
<body >
<?php wp_body_open(); ?>
 
	 
	<header class="header" id="home1">

	<?php 
	/**
		 * header_parts hook.
		 *
		 * @hooked estore_header_modal - 10
		 * @hooked estore_container_start - 15
		 * @hooked estore_header_login_icon - 20
		 * @hooked estore_header_logo - 30
		 * @hooked estore_header_search - 40
		 * @hooked estore_header_mini_cart - 50
		 * @hooked estore_container_end - 55
		 * @hooked estore_header_navbar - 60
		 *
	 */
		do_action('header_parts'); ?>
	</header>
	<div class="site-content" id="content">