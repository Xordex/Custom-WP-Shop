<?php

add_action('wp_enqueue_scripts', 'load_theme_assets');

function load_theme_assets() {
    wp_enqueue_style('vars_define', get_template_directory_uri() . '/assets/css/vars.css');
    wp_enqueue_style('resetstyles', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('definefonts', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style('maincontentstyle', get_template_directory_uri() . '/assets/css/maincontent.css');
    wp_enqueue_style('headerstyle', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('footerstyle', get_template_directory_uri() . '/assets/css/footer.css');
    wp_enqueue_style('frontpagestyle', get_template_directory_uri() . '/assets/css/frontpage.css');

    wp_enqueue_script('greetings', get_template_directory_uri() . '/assets/js/greetings.js');
}

add_action('after_setup_theme', 'ceoshop_register_menu');

function ceoshop_register_menu() {
    register_nav_menus(array(
        'left_main_menu' => 'Left main menu',
        'right_main_menu' => 'Right main menu',
        'footer_menu' => 'Footer menu'
    ));
}

function get_icon($name, $class = '') {
    $file_path = get_template_directory() . '/assets/icons/' . esc_attr($name) . '.svg';
    
    if($file_path) {
        echo '<span class="icon icon-' . esc_attr($name) . ' ' . esc_attr($class) . '">';
        include $file_path;
        echo '</span>';
    }
}