<?php

add_action('wp_enqueue_scripts', 'load_theme_assets');

function load_theme_assets() {
    wp_enqueue_style('resetstyles', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('definefonts', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style('headerstyle', get_template_directory_uri() . '/assets/css/header.css');

    wp_enqueue_script('greetings', get_template_directory_uri() . '/assets/js/greetings.js');
}

add_action('after_setup_theme', 'ceoshop_register_menu');

function ceoshop_register_menu() {
    register_nav_menus(array(
        'main_menu' => 'Main menu',
        'footer_menu' => 'Footer menu'
    ));
}