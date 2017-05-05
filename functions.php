<?php

define("THEME_DIR", get_template_directory_uri());



remove_action('wp_head', 'wp_generator');

function enqueue_styles() {
    wp_register_style( 'normilize', THEME_DIR . '/css/normilize.css', array(), 'all' );
    wp_enqueue_style( 'normilize' );
    wp_register_style( 'bootstrap', THEME_DIR . '/css/bootstrap.min.css', array(), 'all' );
    wp_enqueue_style( 'bootstrap' );
    wp_register_style( 'bvi', THEME_DIR . '/css/bvi.min.css', array(), 'all' );
    wp_enqueue_style( 'bvi' );
    wp_register_style( 'font-awesome', THEME_DIR . '/font-awesome/css/font-awesome.min.css', array(), 'all' );
    wp_enqueue_style( 'font-awesome' );
    wp_register_style( 'owl', THEME_DIR . '/css/owl.carousel.min.css', array(), 'all' );
    wp_enqueue_style( 'owl' );
    wp_register_style( 'owl-default', THEME_DIR . '/css/owl.theme.default.min.css', array(), 'all' );
    wp_enqueue_style( 'owl-default' );
    wp_register_style( 'style', THEME_DIR . '/style.css', array(), '2017.05.05' );
    wp_enqueue_style( 'style' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );


function enqueue_scripts() {

    wp_register_script( 'jquery', THEME_DIR .  '/js/jquery-3.1.1.min.js', array(), '1' , true );
    wp_enqueue_script( 'jquery' );
    wp_register_script( 'bootstrap', THEME_DIR .  '/js/bootstrap.min.js', array(), '1' , true );
    wp_enqueue_script( 'bootstrap' );
    wp_register_script( 'custom', THEME_DIR .  '/js/custom.js', array(), '1', true );
    wp_enqueue_script( 'custom' );
    wp_register_script( 'response', THEME_DIR .  '/js/responsivevoice.min.js', array(), '1', true );
    wp_enqueue_script( 'response' );
    wp_register_script( 'bvi-min', THEME_DIR .  '/js/bvi.min.js', array(), '1', true );
    wp_enqueue_script( 'bvi-min' );
    wp_register_script( 'bvi-panel', THEME_DIR .  '/js/bvi-panel.min.js', array(), '1', true );
    wp_enqueue_script( 'bvi-panel' );
    wp_register_script( 'js-cookie', THEME_DIR .  '/js/js.cookie.js', array(), '1', true );
    wp_enqueue_script( 'js-cookie' );
    wp_register_script( 'owl', THEME_DIR .  '/js/owl.carousel.min.js', array(), '1', true );
    wp_enqueue_script( 'owl' );
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

    register_sidebar(
        array(
            'id' => 'sidebar_top',
            'name' => 'блок авторизации',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '<span id="%1$s" class="authorization">',
            'after_widget' => '</span>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );

    register_sidebar(
        array(
            'id' => 'banners_block',
            'name' => 'Баннер',
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.',
            'before_widget' => '<span id="%1$s" class="authorization">',
            'after_widget' => '</span>',
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


add_filter('excerpt_more', function($more) {
    return '...';
});


//customizer

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


/*
 * "Хлебные крошки" для WordPress
*/
function dimox_breadcrumbs() {

    /* === ОПЦИИ === */
    $text['home'] = 'Главная'; // текст ссылки "Главная"
    $text['category'] = '%s'; // текст для страницы рубрики
    $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
    $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
    $text['author'] = 'Статьи автора %s'; // текст для страницы автора
    $text['404'] = 'Ошибка 404'; // текст для страницы 404
    $text['page'] = 'Страница %s'; // текст 'Страница N'
    $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'

    $wrap_before = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
    $wrap_after = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
    $sep = '›'; // разделитель между "крошками"
    $sep_before = '<span class="sep">'; // тег перед разделителем
    $sep_after = '</span>'; // тег после разделителя
    $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
    $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
    $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
    $before = '<span class="current">'; // тег перед текущей "крошкой"
    $after = '</span>'; // тег после текущей "крошки"
    /* === КОНЕЦ ОПЦИЙ === */

    global $post;
    $home_url = home_url('/');
    $link_before = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
    $link_after = '</span>';
    $link_attr = ' itemprop="item"';
    $link_in_before = '<span itemprop="name">';
    $link_in_after = '</span>';
    $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
    $frontpage_id = get_option('page_on_front');
    $parent_id = ($post) ? $post->post_parent : '';
    $sep = ' ' . $sep_before . $sep . $sep_after . ' ';
    $home_link = $link_before . '<a href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;

    if (is_home() || is_front_page()) {

        if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;

    } else {

        echo $wrap_before;
        if ($show_home_link) echo $home_link;

        if ( is_category() ) {
            $cat = get_category(get_query_var('cat'), false);
            if ($cat->parent != 0) {
                $cats = get_category_parents($cat->parent, TRUE, $sep);
                $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
                if ($show_home_link) echo $sep;
                echo $cats;
            }
            if ( get_query_var('paged') ) {
                $cat = $cat->cat_ID;
                echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
            }

        } elseif ( is_search() ) {
            if (have_posts()) {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
            } else {
                if ($show_home_link) echo $sep;
                echo $before . sprintf($text['search'], get_search_query()) . $after;
            }

        } elseif ( is_day() ) {
            if ($show_home_link) echo $sep;
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
            echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
            if ($show_current) echo $sep . $before . get_the_time('d') . $after;

        } elseif ( is_month() ) {
            if ($show_home_link) echo $sep;
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
            if ($show_current) echo $sep . $before . get_the_time('F') . $after;

        } elseif ( is_year() ) {
            if ($show_home_link && $show_current) echo $sep;
            if ($show_current) echo $before . get_the_time('Y') . $after;

        } elseif ( is_single() && !is_attachment() ) {
            if ($show_home_link) echo $sep;
            if ( get_post_type() != 'post' ) {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
                if ($show_current) echo $sep . $before . get_the_title() . $after;
            } else {
                $cat = get_the_category(); $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $sep);
                if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
                echo $cats;
                if ( get_query_var('cpage') ) {
                    echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
                } else {
                    if ($show_current) echo $before . get_the_title() . $after;
                }
            }

            // custom post type
        } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
            $post_type = get_post_type_object(get_post_type());
            if ( get_query_var('paged') ) {
                echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . $post_type->label . $after;
            }

        } elseif ( is_attachment() ) {
            if ($show_home_link) echo $sep;
            $parent = get_post($parent_id);
            $cat = get_the_category($parent->ID); $cat = $cat[0];
            if ($cat) {
                $cats = get_category_parents($cat, TRUE, $sep);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
                echo $cats;
            }
            printf($link, get_permalink($parent), $parent->post_title);
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif ( is_page() && !$parent_id ) {
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif ( is_page() && $parent_id ) {
            if ($show_home_link) echo $sep;
            if ($parent_id != $frontpage_id) {
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    if ($parent_id != $frontpage_id) {
                        $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                    }
                    $parent_id = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                for ($i = 0; $i < count($breadcrumbs); $i++) {
                    echo $breadcrumbs[$i];
                    if ($i != count($breadcrumbs)-1) echo $sep;
                }
            }
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif ( is_tag() ) {
            if ( get_query_var('paged') ) {
                $tag_id = get_queried_object_id();
                $tag = get_tag($tag_id);
                echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
            }

        } elseif ( is_author() ) {
            global $author;
            $author = get_userdata($author);
            if ( get_query_var('paged') ) {
                if ($show_home_link) echo $sep;
                echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
            }

        } elseif ( is_404() ) {
            if ($show_home_link && $show_current) echo $sep;
            if ($show_current) echo $before . $text['404'] . $after;

        } elseif ( has_post_format() && !is_singular() ) {
            if ($show_home_link) echo $sep;
            echo get_post_format_string( get_post_format() );
        }

        echo $wrap_after;

    }
}

if ( ! isset( $content_width ) ) $content_width = 900;


function mytheme_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
    <div class="comment-author vcard">
        <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
        <?php printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
    </div>
    <?php if ( $comment->comment_approved == '0' ) : ?>
        <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
        <br />
    <?php endif; ?>

    <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
            <?php
            /* translators: 1: date, 2: time */
            printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
        ?>
    </div>

    <?php comment_text(); ?>

    <div class="reply">
        <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
    </div>
    <?php if ( 'div' != $args['style'] ) : ?>
        </div>
    <?php endif; ?>
    <?php
}

function trim_title_words($count, $after) {
    $title = get_the_title();
    $words = explode(' ', $title);
    if (count($words) > $count) {
        array_splice($words, $count);
        $title = implode(' ', $words);
    }
    else $after = '';
    echo $title . $after;
}


?>