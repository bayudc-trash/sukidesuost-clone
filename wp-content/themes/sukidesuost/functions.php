<?php

add_action('wp_enqueue_scripts', 'sukidesuost_asset');
function sukidesuost_asset() {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', null, null, 'all');
}

add_action('init', 'sukidesuost_menus');
function sukidesuost_menus() {
    add_theme_support('menus');
    register_nav_menu('header', 'Header Menu');
    register_nav_menu('footer', 'Footer Menu');
}

add_theme_support('post-thumbnails');

add_action('widgets_init', 'sukidesuost_widget');
function sukidesuost_widget() {
    register_sidebar([
        'name' => 'Sidebar 1',
        'id' => 'sidebar-1',
    ]);
    register_sidebar([
        'name' => 'Sidebar 2',
        'id' => 'sidebar-2',
    ]);
}
