<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/images/favicon.ico" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="stylesheet" href="<?php echo THEME_DIR; ?>/style.css">
    <?php if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) wp_enqueue_script('comment-reply'); ?>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>


    <?php wp_head(); ?>

    

</head>
<body <?php body_class(); ?> >

<header class="page-header clearfix">
    <div class="container clearfix">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <a href="<?php echo get_home_url(); ?>" class="logo-link"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt=""></a>
                <p class="slogan">государственные<br>и муниципальные услуги</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9">
                <div class="bvi-block">
                    <a href="#" class="bvi-panel-open">Версия для слабовидящих</a>
                </div>
                <div class="page-header__top-panel">
                    <span class="top-panel__info">﻿ Центр телефонного обслуживания: <a href="tel: <?php echo get_theme_mod('header-phone', '8 (473) 226-99-99'); ?>" ><?php echo get_theme_mod('header-phone', '8 (473) 226-99-99'); ?></a></span>
                        <?php dynamic_sidebar( 'sidebar_top' ); ?>
                </div>

                <nav class="page-header-nav">

                    <a href="#" class="mobile-menu"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/menu.svg" width="30" height="30" alt=""></a>

                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header_menu',
                        'menu_class' => 'v-menu main-menu',
                        'menu_id' => 'main-menu'
                    ));
                    ?>

                </nav>

                <h1 class="title-text"><?php echo get_theme_mod('title-text', 'Название организации'); ?></h1>
                </div>
            </div>
        </div>
    </header>