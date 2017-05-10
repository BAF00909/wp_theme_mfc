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

                                <div class="col-md-4 col-sm-4">
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
                    
                    <div class="row">
                        <div class="col-md-12">
                            <?php if ( is_active_sidebar( 'banners_block' ) ) : ?>

                                <div id="banners_block" class="banners_block">

                                    <?php dynamic_sidebar( 'banners_block' ); ?>

                                </div>

                            <?php endif; ?>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            $mypage= get_page_by_title('Главная');
                            if($mypage){
                            $mypage_id= $mypage->ID;
                            $post = get_post($mypage_id);
                            $content = $post->post_content;
                            echo $content;
                            }
                            ?>
                        </div>
                    </div>


                </section>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<!-- new end-->




<?php get_footer(); ?>
