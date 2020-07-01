<?php
/**
 * eStore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package eStore
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	load_template( get_template_directory() . '/includes/carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', 'estore_register_custom_fields' );
function estore_register_custom_fields() {
	require get_template_directory() . '/includes/custom-fields-options/metabox.php';
	require get_template_directory() . '/includes/custom-fields-options/theme-options.php';
}



/*
	Подключение настроек темы

*/


require get_template_directory() . '/includes/theme-settings.php';


require get_template_directory() . '/includes/widget-areas.php';


require get_template_directory() . '/includes/wp_enque-scripts-style.php';



/*
 * Вспомогательные функции
 */
require get_template_directory() . '/includes/helpers.php';


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

require get_template_directory() . '/includes/custom-footer.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';


require get_template_directory() . '/includes/navigation.php';


require get_template_directory() . '/includes/ajax.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/includes/woocommerce.php';
	require get_template_directory() . '/woocommerce\includes\wc-functions-remove.php';

	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-single.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-cart.php';
	require get_template_directory() . '/woocommerce/includes/wc-function-archive.php';

	



}
