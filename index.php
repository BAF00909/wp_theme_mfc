<?php get_header(); ?>
<!-- new-->
<div class="row">
    <div class="page-content">
        <div class="col-md-12">
            <div class="content clearfix">
                <header class="content-header">

                    <div id="slider-wrap">

                        <div class="owl-carousel owl-theme">

                            <div class="slide">
                                <img src="<?php echo THEME_DIR; ?>/images/01.jpg">
                            </div>
                            <div class="slide">
                                <img src="<?php echo THEME_DIR; ?>/images/02.jpg">
                            </div>
                            <div class="slide">
                                <img src="<?php echo THEME_DIR; ?>/images/03.jpg">
                            </div>
                            <div class="slide">
                                <img src="<?php echo THEME_DIR; ?>/images/04.jpg">
                            </div>
                            <div class="slide">
                                <img src="<?php echo THEME_DIR; ?>/images/05.jpg">
                            </div>
                            <div class="slide">
                                <img src="<?php echo THEME_DIR; ?>/images/06.jpg">
                            </div>
                            <div class="slide">
                                <img src="<?php echo THEME_DIR; ?>/images/07.jpg">
                            </div>
                            <div class="slide">
                                <img src="<?php echo THEME_DIR; ?>/images/08.jpg">
                            </div>

                        </div>

                    </div>

                </header>
                <section class="main-content">

                    <div class="row clearfix">
                        <?php $catID = get_cat_ID( 'Новости' ); ?>
                        <div class="col-md-12"><a href="<?php echo get_category_link( $catID ); ?>" class="btn_all-news">Новости</a></div>
                    </div>

                    <div class="row clearfix">



                        <?php query_posts('category_name=news&showposts=3'); ?>

                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) :  the_post();  ?>

                                <div class="col-md-4">
                                    <article class="news">
                                        <div class="image-news">
                                            <?php

                                            $img = get_the_post_thumbnail($id,array(269,180));

                                            if($img == ''){
                                                echo ' <img src="'.THEME_DIR.'/images/default-img.jpg">';
                                            } else {
                                                echo $img;
                                            }

                                            ?>
                                        </div>
                                        <p class="news-date"><?php echo get_the_date('d.m.Y'); ?></p>
                                        <a class="news__title" href="<?php the_permalink() ?>"><?php trim_title_words(20, '...'); ?></a>
                                        <!-- <p class="news__preview-text">
                                                <?php the_excerpt(); ?>
                                            </p>-->
                                        <div>
                                            <div class="arrow">
                                                <a class="btn custom-readmore" href="<?php the_permalink() ?>">Подробнее</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                            <?php endwhile; endif; ?>


                    </div>

                    <div class="row clearfix">
                        <div class="col-md-4">
                            <?php
                            $category = get_category_by_slug( 'documents' );
                            $catIDdoc = $category->term_id;
                            ?>
                            <h3 class="block-title"><a href="<?php echo get_category_link( $catIDdoc ); ?>" class="btn_all-news btn_all-news--sm">Документы</a></h3>
                            <?php query_posts('category_name=documents&showposts=5'); ?>

                            <ul class="content-list content-list--documents">
                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) :  the_post();  ?>

                                        <li class="content-list__item">
                                            <i class="fa fa-files-o" aria-hidden="true"></i>  <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                        </li>

                                    <?php endwhile; endif; ?>
                            </ul>

                        </div>
                        <div class="col-md-4">
                            <?php
                            $category = get_category_by_slug( 'filials' );
                            $catIDfil = $category->term_id;
                            ?>
                            <h3 class="block-title"><a href="<?php echo get_home_url(); ?>/map/" class="btn_all-news btn_all-news--sm">Отделы МФЦ</a></h3>
                            <?php query_posts('category_name=filials&showposts=5'); ?>
                            <ul class="content-list content-list--filials">
                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) :  the_post();  ?>
                                        <li class="content-list__item">
                                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                        </li>
                                    <?php endwhile; endif; ?>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h3 class="block-title"><a href="#" class="btn_all-news btn_all-news--sm" onclick="return false;">Часы работы</a></h3>
                            <span class="days-work">ПН-ПТ : </span><span class="time-work"><?php echo get_theme_mod('five-days', 'с 8:00 до 19:00'); ?></span>
                            <span class="days-work">СБ : </span><span class="time-work"><span><?php echo get_theme_mod('one-day', 'с 9:00 до 13:00'); ?></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <?php if ( is_active_sidebar( 'banners_block' ) ) : ?>

                                <div id="banners_block" class="banners_block">

                                    <?php dynamic_sidebar( 'banners_block' ); ?>

                                </div>

                            <?php endif; ?>

                        </div>
                    </div>


                </section>
            </div>
        </div>
    </div>
</div>
<!-- new end-->


<?php get_footer(); ?>
