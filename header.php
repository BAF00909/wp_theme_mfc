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
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) wp_enqueue_script('comment-reply'); ?>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>


    <?php wp_head(); ?>

    

</head>
<body <?php body_class(); ?> >

<header class="page-header clearfix" id="header">
   
    <div class="container clearfix">
        
        <div class="row">
            <div class=" col-xs-12 col-sm-12 col-md-offset-3 col-md-9 col-lg-offset-3 col-lg-9 ">
                <div class="p-13">
                    <?php dynamic_sidebar( 'sidebar_top' ); ?>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <a href="<?php echo get_home_url(); ?>" class="logo-link"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="">
                <p class="slogan">государственные<br>и муниципальные услуги</p></a>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-9">

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
                <span class="top-panel__info">﻿ Центр телефонного обслуживания: <a href="tel: <?php echo get_theme_mod('header-phone', ''); ?>" ><?php echo get_theme_mod('header-phone', ''); ?></a></span>
                </div>
            </div>
        </div>
    </header>