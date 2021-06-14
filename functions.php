<?php // slick theme functions

#
# HOOKS
#

add_action( 'after_setup_theme', 'slick_setup' );



#
# FUNCTIONS
#

// Sets up theme defaults and registers support for various WordPress features
function slick_setup() {
    // Adding support for featured images.
    add_theme_support( 'post-thumbnails' );

    // Adding support for core block visual styles.
    add_theme_support( 'wp-block-styles' );

    // Adding support for responsive embedded content.
    add_theme_support( 'responsive-embeds' );

    // Add support for editor styles.
    add_theme_support( 'editor-styles' );

    // Enqueue editor styles.
    add_editor_style( 'style.css' );

    // Add support for custom units.
    add_theme_support( 'custom-units' );
}




