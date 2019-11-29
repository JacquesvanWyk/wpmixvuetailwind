<?php

function JvwTheme_setup_theme(){
    add_theme_support( 'post-thumbnails' );

    register_nav_menu( 'primary', __( 'main-nav', 'JvwTheme' ) );

    add_image_size('post_image', 1100, 600, true);
    add_image_size('post_preview_image', 1100, 600, true);

}