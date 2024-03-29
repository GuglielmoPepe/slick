<?php // slick theme functions

#
# HOOKS
#

// add theme setup
add_action( 'after_setup_theme', 'slick_setup' );

// enqueue scripts and styles
add_action( 'wp_enqueue_scripts', 'slick_enqueue' );  


#
# FUNCTIONS
#

// Sets up theme defaults and registers support for various WordPress features
function slick_setup() {

    // Add editor styles.
    add_editor_style( 'style.css' );

    // Add support for block styles.
    add_theme_support( 'wp-block-styles' );
}



// Enqueue scripts and styles
function slick_enqueue() {

    // Add style.css
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}

