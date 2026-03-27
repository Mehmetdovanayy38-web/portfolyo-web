<?php
function my_portfolio_theme_setup() {
    add_theme_support( 'title-tag' );
    
    // Register custom menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'my_portfolio' ),
    ) );
}
add_action( 'after_setup_theme', 'my_portfolio_theme_setup' );

function my_portfolio_scripts() {
    // Enqueue Google Fonts (Inter)
    wp_enqueue_style( 'my-portfolio-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), null );
    
    // Enqueue FontAwesome
    wp_enqueue_style( 'my-portfolio-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );
    
    // Enqueue main stylesheet
    wp_enqueue_style( 'my-portfolio-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_portfolio_scripts' );
