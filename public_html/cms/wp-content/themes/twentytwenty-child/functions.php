<?php
function my_child_theme_enqueue_styles() {
    $parent_style = 'twentytwentyfour-style'; // zależnie od motywu nadrzędnego

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', [$parent_style]);
}
add_action('wp_enqueue_scripts', 'my_child_theme_enqueue_styles');
