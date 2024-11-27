<?php

function motaphoto_enqueue_styles()
{
    wp_enqueue_style('motaphoto-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'motaphoto_enqueue_styles');

function motaphoto_register_menus()
{
    register_nav_menus(array(
        'header_menu' => __('Header Menu', 'motaphoto'),
        'footer_menu' => __('Footer Menu', 'motaphoto'),
    ));
}
add_action('after_setup_theme', 'motaphoto_register_menus');
