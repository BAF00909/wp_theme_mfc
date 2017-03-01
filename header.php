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
    <title><?php wp_title(); ?><?php bloginfo( 'name' ); ?></title>


    <?php wp_head(); ?>

    

</head>
<body <?php body_class(); ?> >

<header class="page-header clearfix">
    <div class="container clearfix">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <a href="http://fz.pautino.ru/Force/" class="logo-link"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt=""></a>
                <p class="slogan">государственные<br>и муниципальные услуги</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9">

                <div class="page-header__top-panel">
                    <span class="top-panel__info">﻿ Центр телефонного обслуживания: <a href="tel: 8 (473) 226-99-99" >8 (473) 226-99-99</a></span>
                    <span class="account"><a href="#">Войти через ЕСИА</a></span>
                </div>

                <nav class="page-header-nav">

                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header_menu',
                        'menu_class' => 'v-menu main-menu',
                        'menu_id' => 'main-menu'
                    ));
                    ?>

                    <!--<ul class="v-menu main-menu">
                        <li class="v-menu__item main-menu__item"><a href="#" class="menu__link main-menu__link">Физическим лицам</a>
                        </li>
                        <li class="v-menu__item main-menu__item"><a href="#" class="menu__link main-menu__link">Юридическим лицам</a>
                        </li>
                        <li class="v-menu__item main-menu__item"><a href="#" class="menu__link main-menu__link">Участникам МФЦ</a>
                        </li>
                        <li class="v-menu__item main-menu__item"><a href="#" class="menu__link main-menu__link">Услуги по жизненным ситуациям</a>
                        </li>
                    </ul>-->
                </nav>

                <h1 class="title-text">Автономное учреждение Воронежской области «Многофункциональный центр предоставления государственных и муниципальных услуг»</h1>
                </div>
            </div>
        </div>
    </header>