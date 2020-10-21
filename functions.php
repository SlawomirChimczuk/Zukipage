<?php

function zuki_script_enqueue(){
    wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/styles.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/functions.js', array(), '1.0.0', true );
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'zuki_script_enqueue');

function zuki_theme_setup(){

    add_theme_support('menus');
    add_filter('acf/settings/remove_wp_meta_box', '__return_false');

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Responsive Navigation');
}

add_action('init', 'zuki_theme_setup');

add_filter('acf/settings/remove_wp_meta_box', '__return_false');