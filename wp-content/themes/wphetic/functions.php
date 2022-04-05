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
