<?php 
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}


/**
 * Enqueue scripts and styles.
 */

add_action( 'wp_enqueue_scripts', 'estore_styles' );
function estore_styles() {
	wp_enqueue_style( 'estore-style', get_stylesheet_uri(), array('bootstrap-style'));
	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style('fasthover', get_template_directory_uri() . '/assets/css/fasthover.css');
	wp_enqueue_style('popuo-box', get_template_directory_uri() . '/assets/css/popuo-box.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css');
	wp_enqueue_style('jquery.countdown', get_template_directory_uri() . '/assets/css/jquery.countdown.css');
	//wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap');
}
 

add_action( 'wp_enqueue_scripts', 'estore_scripts' );

function estore_scripts() {
	 

	wp_enqueue_script( 'estore-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), null, true );
	wp_enqueue_script( 'easyResponsiveTabs', get_template_directory_uri() . '/assets/js/easyResponsiveTabs.js', array('jquery'), null, true );
	wp_enqueue_script( 'boostrap-script', get_template_directory_uri() . '/assets/js/bootstrap-3.1.1.min.js', array('jquery'), null, true );
	
	wp_enqueue_script( 'flex-slider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array('jquery'), null, true );
	wp_enqueue_script( 'imagezoom', get_template_directory_uri() . '/assets/js/imagezoom.js', array('jquery'), null, true );
	wp_enqueue_script( 'flexisel', get_template_directory_uri() . '/assets/js/jquery.flexisel.js', array('jquery'), null, true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array('jquery'), null, true );
	wp_enqueue_script( 'wmuSlider', get_template_directory_uri() . '/assets/js/jquery.wmuSlider.js', array('jquery'), null, true );
	wp_enqueue_script( 'minicart', get_template_directory_uri() . '/assets/js/minicart.js', array('jquery'), null, true );
	wp_enqueue_script( 'cout-down', get_template_directory_uri() . '/assets/js/jquery.countdown.js', array('jquery'), null, true );


	wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/assets/js/ajax-search.js', array('jquery'), null, true );
	wp_localize_script( 'ajax-script', 'search_form', array(
		'url' => admin_url( 'admin-ajax.php'),	
		'nonce' => wp_create_nonce( 'search-nonce' )
	) );
	
	wp_enqueue_script( 'ajax-qick', get_template_directory_uri() . '/assets/js/ajax-qick-view.js', array('jquery'), null, true );
	wp_localize_script( 'ajax-qick', 'ajax_qick', array(
		'url' => admin_url( 'admin-ajax.php'),	
		'nonce' => wp_create_nonce( 'qick-nonce' )
	) );



	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true );

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


?>