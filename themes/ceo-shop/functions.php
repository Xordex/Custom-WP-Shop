<?php

add_action('wp_enqueue_scripts', 'load_theme_assets');

function load_theme_assets() {
    wp_enqueue_style('resetstyles', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('definefonts', get_template_directory_uri() . '/assets/css/fonts.css');

    wp_enqueue_script('greetings', get_template_directory_uri() . '/assets/js/greetings.js');
}