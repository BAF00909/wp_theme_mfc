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




//customizer
add_action('admin_menu', function(){
    add_theme_page('Настроить', 'Настроить', 'edit_theme_options', 'customize.php');
});
add_action('customize_register', function($customizer){
    //footer
    $customizer->add_section(
        'example_section_one',
        array(
            'title' => 'Настройки футера',
            'description' => 'Настройки контактов в футере',
            'priority' => 35,
        )
    );

    $customizer->add_setting(
        'copyright_textbox',
        array('default' => 'Отделение МФЦ')
    );
    $customizer->add_control(
        'copyright_textbox',
        array(
            'label' => 'Текст копирайта',
            'section' => 'example_section_one',
            'type' => 'text',
        )
    );

    $customizer->add_setting(
        'footer-phone',
        array('default' => 'Телефон тех.поддержки')
    );
    $customizer->add_control(
        'footer-phone',
        array(
            'label' => 'Телефон тех.поддержки',
            'section' => 'example_section_one',
            'type' => 'text',
        )
    );

    $customizer->add_setting(
        'footer-email',
        array('default' => 'Email тех.поддержки')
    );
    $customizer->add_control(
        'footer-email',
        array(
            'label' => 'Email тех.поддержки',
            'section' => 'example_section_one',
            'type' => 'text',
        )
    );

    // header

    $customizer->add_section(
        'example_section_two',
        array(
            'title' => 'Настройки шапки',
            'description' => 'Настройки шапки',
            'priority' => 36,
        )
    );
    
    $customizer->add_setting(
        'title-text',
        array('default' => 'Название организации')
    );
    $customizer->add_control(
        'title-text',
        array(
            'label' => 'Текст в шапке',
            'section' => 'example_section_two',
            'type' => 'text',
        )
    );

    $customizer->add_setting(
        'header-phone',
        array('default' => '8 (473) 226-99-99')
    );
    $customizer->add_control(
        'header-phone',
        array(
            'label' => 'Телефон организации',
            'section' => 'example_section_two',
            'type' => 'text',
        )
    );

    // work time

    $customizer->add_section(
        'example_section_three',
        array(
            'title' => 'Время Работы',
            'description' => 'Время Работы учреждения',
            'priority' => 36,
        )
    );

    $customizer->add_setting(
        'five-days',
        array('default' => 'с 8:00 до 19:00 ')
    );
    $customizer->add_control(
        'five-days',
        array(
            'label' => 'ПН-ПТ',
            'section' => 'example_section_three',
            'type' => 'text',
        )
    );

    $customizer->add_setting(
        'one-day',
        array('default' => 'с 9:00 до 13:00')
    );
    $customizer->add_control(
        'one-day',
        array(
            'label' => 'СБ',
            'section' => 'example_section_three',
            'type' => 'text',
        )
    );

});

// mark

function true_apply_categories_for_pages(){
    add_meta_box( 'categorydiv', 'Категории', 'post_categories_meta_box', 'page', 'side', 'normal'); // добавляем метабокс категорий для страниц
    register_taxonomy_for_object_type('category', 'page'); // регистрируем рубрики для страниц
}
// обязательно вешаем на admin_init
add_action('admin_init','true_apply_categories_for_pages');

function true_expanded_request_category($q) {
    if (isset($q['category_name'])) // если в запросе присутствует параметр рубрики
        $q['post_type'] = array('post', 'page'); // то, помимо записей, выводим также и страницы
    return $q;
}

add_filter('request', 'true_expanded_request_category');

/**
* Search form
*/

function my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	<div><label class="screen-reader-text" for="s">' . '</label>
	<input type="text" id="search" class="search-field" placeholder="поиск" value="' . get_search_query() . '" name="s" />
	</div>
	</form>';

    return $form;
}

add_filter( 'get_search_form', 'my_search_form' );


?>