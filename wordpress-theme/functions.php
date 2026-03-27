<?php
/**
 * Theme functions and definitions
 */

if ( ! function_exists( 'portfolyo_setup' ) ) :
	function portfolyo_setup() {
		/*
		 * Let WordPress manage the document title.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 */
		add_theme_support( 'post-thumbnails' );
	}
endif;
add_action( 'after_setup_theme', 'portfolyo_setup' );

/**
 * Enqueue scripts and styles.
 */
function portfolyo_scripts() {
	// Enqueue Google Fonts
	wp_enqueue_style( 'portfolyo-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), null );
	
	// Enqueue FontAwesome
	wp_enqueue_style( 'portfolyo-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );
	
	// Enqueue Theme Stylesheet
	wp_enqueue_style( 'portfolyo-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'portfolyo_scripts' );
