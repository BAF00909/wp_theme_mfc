<?php

define("THEME_DIR", get_template_directory_uri());

remove_action('wp_head', 'wp_generator');

function enqueue_styles() {
    wp_register_style( 'normilize', THEME_DIR . '/css/normilize.css', array(), 'all' );
    wp_enqueue_style( 'normilize' );
    wp_register_style( 'bootstrap', THEME_DIR . '/css/bootstrap.min.css', array(), 'all' );
    wp_enqueue_style( 'bootstrap' );
    wp_register_style( 'screen-style', THEME_DIR . '/style.css', array(), 'all' );
    wp_enqueue_style( 'screen-style' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );


function enqueue_scripts() {

    wp_register_script( 'jquery', THEME_DIR .  '/js/jquery-3.1.1.min.js', array(), '1' , true );
    wp_enqueue_script( 'jquery' );
    wp_register_script( 'bootstrap', THEME_DIR .  '/js/bootstrap.min.js', array(), '1' , true );
    wp_enqueue_script( 'bootstrap' );
    wp_register_script( 'custom', THEME_DIR .  '/js/custom.js', array(), '1', true );
    wp_enqueue_script( 'custom' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );



register_nav_menus(array(
    'header_menu' => 'Главное меню',
    'sidebar_menu' => 'Меню сайтбара',
));



add_theme_support( 'post-thumbnails' );

function true_register_wp_sidebars() {

    register_sidebar(
        array(
            'id' => 'true_side',
            'name' => 'Боковая колонка',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '<div id="%1$s" class="mini-menu">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );


    register_sidebar(
        array(
            'id' => 'true_foot',
            'name' => 'Футер',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в футер.',
            'before_widget' => '<div id="%1$s" class="foot widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );
}

add_action( 'widgets_init', 'true_register_wp_sidebars' );

function new_excerpt_length($length) {
    return 15;
}
add_filter('excerpt_length', 'new_excerpt_length');


?>