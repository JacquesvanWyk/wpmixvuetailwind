<?php


function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('app', get_template_directory_uri() . '/css/app.css', '', 1, 'all');
    wp_enqueue_style('app');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript()
{
    wp_register_script('app', get_template_directory_uri() . '/js/app.js', '', 1, true);
    wp_enqueue_script('app');


}

add_action('wp_enqueue_scripts', 'load_javascript');

// Add Support
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Register Menus
register_nav_menus(
    array(
        'main-nav' => 'Top Menu',
    )
);

// Add Image Sizes
add_image_size('post_image', 1100, 600, true);
add_image_size('post_preview_image', 1100, 600, true);

// Add a Widget

register_sidebar(
    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4 class="text-lg border-b-2 py-2">',
        'after_title' => '</h4>',
    )
);
register_sidebar(
    array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'class' => '',
        'before_title' => '<h4 class="text-lg border-b-2 py-2">',
        'after_title' => '</h4>',
    )
);

// Woccommerce

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );