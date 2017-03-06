<?php get_header(); ?>

<section class="page-content">
    <div class="container clearfix">
        <div class="row">
            <div class="col-md-3">


                <?php if ( is_active_sidebar( 'true_side' ) ) : ?>

                    <div id="true-side" class="sidebar">

                        <?php dynamic_sidebar( 'true_side' ); ?>

                    </div>

                <?php endif; ?>


            </div>
            <div class="col-md-9">
                <div class="content clearfix">
                    <header class="content-header">

                        <div id="slider-wrap">
                            <div id="slider">

                                <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/sl10.png" width="100%"  height="480">
                                </div>
                                <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/sreda.png" width="100%" height="480">
                                </div>
                                <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/sl12.png" width="100%" height="480">
                                </div>
                                <div class="slide" style="position: absolute; top: 0px; left: 0px; display: block">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/sl2.png" width="100%" height="480">
                                </div>
                            </div>
                        </div>

                    </header>
                    <section class="main-content">

                        <div class="row clearfix">
                            <?php $catID = get_cat_ID( 'Новости' ); ?>
                            <div class="col-md-12"><a href="<?php echo get_category_link( $catID ); ?>" class="btn_all-news">Все новости</a></div>
                        </div>

                        <div class="row clearfix">



                            <?php query_posts('category_name=Новости&showposts=3'); ?>

                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) :  the_post();  ?>

                                    <div class="col-md-4">
                                        <article class="news">
                                            <a class="news__title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                            <p class="news__preview-text">
                                                <?php the_excerpt(); ?>
                                            </p>
                                            <a class="btn custom-readmore" href="<?php the_permalink() ?>">Подробнее ></a>
                                        </article>
                                    </div>

                                <?php endwhile; endif; ?>


                        </div>

                        <div class="row clearfix">
                            <div class="col-md-4">
                                <h3 class="block-title"><a href="#" class="btn_all-news">Документы</a></h3>
                                <?php query_posts('category_name=Документы&showposts=5'); ?>

                                <ul class="content-list">
                                    <?php if (have_posts()) : ?>
                                        <?php while (have_posts()) :  the_post();  ?>

                                            <li class="content-list__item">
                                                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                            </li>

                                        <?php endwhile; endif; ?>
                                </ul>

                            </div>
                            <div class="col-md-4">
                                <h3 class="block-title"><a href="#" class="btn_all-news">Отделы МФЦ</a></h3>
                                <?php query_posts('category_name=Филиалы МФЦ&showposts=5'); ?>
                                <ul class="content-list">
                                    <?php if (have_posts()) : ?>
                                        <?php while (have_posts()) :  the_post();  ?>
                                            <li class="content-list__item">
                                                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                            </li>
                                        <?php endwhile; endif; ?>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h3 class="block-title"><a href="#" class="btn_all-news" onclick="return false;">Часы работы</a></h3>
                                <span class="days-work">ПН-ПТ : </span><span class="time-work"><?php echo get_theme_mod('five-days', 'с 8:00 до 19:00'); ?></span>
                                <span class="days-work">СБ : </span><span class="time-work"><span><?php echo get_theme_mod('one-day', 'с 9:00 до 13:00'); ?></span>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
