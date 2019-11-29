<?php
function JvwTheme_widgets(){
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
}
