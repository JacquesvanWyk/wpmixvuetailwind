<?php
function JvwTheme_enqueue()
{
    $uri = get_theme_file_uri();
    $ver = JvwTheme_DEV_MODE ? time() : false;

    wp_register_style('JvwTheme_stylesheet', $uri . '/assets/style.css', [], $ver);
    wp_register_style('JvwTheme_app', $uri . '/assets/css/app.css', [], $ver);

    wp_enqueue_style('JvwTheme_stylesheet');
    wp_enqueue_style('JvwTheme_app');

    wp_register_script('JvwTheme_app', $uri . '/assets/js/app.js', [], $ver, true);

    wp_enqueue_script('JvwTheme_app');

}