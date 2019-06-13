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
    wp_register_script('app', get_template_directory_uri() . '/js/app.js','',1, true);
    wp_enqueue_script('app');


}
add_action('wp_enqueue_scripts', 'load_javascript');