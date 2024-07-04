<?php
/**
 * Theme functions and definitions
 *
 * @package Your_Theme
 * @link https://github.com/MahediZaber51/WordPress-Theme-Base-Template
 */


function your_theme_setup() {
    // Add support for various theme features.
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'custom-logo' );

    // Register a primary menu location.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'your-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'your_theme_setup' );

function your_theme_enqueue_styles() {
    wp_enqueue_style( 'main-styles', get_stylesheet_uri() );
}

function your_theme_enqueue_scripts() {
    wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true );
}

add_action( 'wp_enqueue_scripts', 'your_theme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'your_theme_enqueue_scripts' );


function your_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'your-theme' ),
        'id'            => 'primary-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'your_theme_widgets_init' );
?>
