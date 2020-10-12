<?php


/**
 * Framework version.
 */
define( 'BIWOMEN_BOSTON_VERSION', '1.0.0' );

/**
 * Enqueue CSS files.
 */
function bi_enqueue_styles() {
    wp_enqueue_style( 'biwomen-boston', get_stylesheet_directory_uri() . "/style.css", array( 'twenty-twenty-one-style' ), BIWOMEN_BOSTON_VERSION, 'all' );
 //   wp_enqueue_style( 'biwomen-boston-ie', get_stylesheet_directory_uri() . "/ie$postfix.css", array(), get_responsive_theme_version(), 'all' );
}
add_action( 'wp_enqueue_scripts', 'bi_enqueue_styles' );
