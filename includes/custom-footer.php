<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


add_action( 'est_footer_parts', 'estore_footer_newsletter', 10 );
function estore_footer_newsletter() {
	get_template_part( 'template-parts/footer/newsletter' );
}


add_action( 'est_footer_parts', 'estore_footer_wrapper_start', 15 );
function estore_footer_wrapper_start() {
	echo '<footer class="footer">';
}



add_action( 'est_footer_parts', 'estore_footer_widgets', 20 );
function estore_footer_widgets() {
	get_template_part( 'template-parts/footer/widgets' );
}


add_action( 'est_footer_parts', 'estore_footer_copyright', 30 );
function estore_footer_copyright() {
	get_template_part( 'template-parts/footer/copyright' );
}


add_action( 'est_footer_parts', 'estore_footer_wrapper_end', 35 );
function estore_footer_wrapper_end() {
	echo '</footer>';
}