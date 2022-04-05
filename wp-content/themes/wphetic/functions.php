<?php
add_action("after_setup_theme", "wphetic_theme_support");

function wphetic_theme_support () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() ); /* enqueues style.css */
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

add_action('send_headers', 'site_router');

function site_router(){
    $root =  str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
    $url = str_replace($root, '', $_SERVER['REQUEST_URI']);
    $url = explode('/', $url);
    if (count($url) == 2 && $url[0] == 'login'){
        require 'tpl-login.php';
        die();
    } else if (count($url) == 2 && $url[0] == 'register'){
        require 'tpl-register.php';
        die();
    } else if (count($url) == 2 && $url[0] == 'logout'){
        wp_logout();
        header('location:'.$root);
        die();
    }
}

add_filter('show_admin_bar', '__return_false');