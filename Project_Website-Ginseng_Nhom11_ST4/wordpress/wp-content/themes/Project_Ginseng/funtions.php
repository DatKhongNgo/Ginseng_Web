<?php
function load_my_style()
{
    wp_enqueue_style('my_style', get_stylesheet_uri());
}
add_action('wp_enqueue_style', 'load_my_style');

function load_my_nav()
{
    register_nav_menu('headermenu', 'Header Menu');
    register_nav_menu('footermenu', 'Footer Menu');
}
add_action('after_setup_theme', 'load_my_nav');
