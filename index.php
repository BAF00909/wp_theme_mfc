<?php get_header(); ?>

<section class="page-content clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-3">

                <!--Аккордион-->

                <?php if ( is_active_sidebar( 'true_side' ) ) : ?>

                    <div id="true-side" class="sidebar">

                        <?php dynamic_sidebar( 'true_side' ); ?>

                    </div>

                <?php endif; ?>
                

                <div class="sidebar__contacts">
                    <p class="title-block">Контакты центрального филиала</p>
                    <p class="contacts">
                        394026, г. Воронеж
                        ул. Дружинников, д. 3Б (ост.Политехнический институт)
                        Тел./факс: <a href="tel: 8 (473) 226-99-99">8 (473) 226-99-99</a>
                        Эл. почта: <a href="mailto: mfc@govvrn.ru">mfc@govvrn.ru</a>
                        Филиалы АУ "МФЦ" на карте
                    </p>
                </div>

                <div class="sidebar__contacts">
                    <p class="title-block">Часы работы центрального филиала</p>
                    <ul class="schedule clearfix">
                        <li class="schedule__item">
                            <span class="schedule__day">Понедельник</span> <span class="schedule__time">09:00 - 18:00</span>
                        </li>
                        <li class="schedule__item">
                            <span class="schedule__day">Вторник</span> <span class="schedule__time">09:00 - 20:00</span>
                        </li>
                        <li class="schedule__item">
                            <span class="schedule__day">Среда</span> <span class="schedule__time">09:00 - 20:00</span>
                        </li>
                        <li class="schedule__item">
                            <span class="schedule__day">Четверг</span> <span class="schedule__time">09:00 - 20:00</span>
                        </li>
                        <li class="schedule__item">
                            <span class="schedule__day">Пятница</span> <span class="schedule__time">09:00 - 20:00</span>
                        </li>
                        <li class="schedule__item">
                            <span class="schedule__day">Суббота</span> <span class="schedule__time">09:00 - 16:45</span>
                        </li>
                        <li class="schedule__item">
                            <span class="schedule__day">Воскресенье</span> <span class="schedule__time">Выходной</span>
                        </li>
                    </ul>

                    <p class="sidebar-text">Время работы ближайшего филиала уточняйте в соответствующем <a href="#">разделе</a></p>
                    <p class="sidebar-text">Планируя свой визит, уточняйте время работы специалистов по телефону горячей линии.</p>
                </div>

                <div class="sidebar__contacts">
                    <p class="title-block">Интерактивная карта Воронежской области</p>
                    <a href="#" class="sidebar__map">
                        <img src="<?php bloginfo('template_directory'); ?>/images/map-preview.png" alt="карта">
                    </a>
                </div>

                <div class="sidebar__contacts">
                    <p class="title-block">Как получить услугу в МФЦ</p>
                    <a href="#" class="sidebar__map">
                        <img src="<?php bloginfo('template_directory'); ?>/images/KakPoluchitUslugu3.jpg" alt="Как получить услугу в МФЦ">
                    </a>
                </div>

                <div class="sidebar__contacts">
                    <p class="title-block">Узнать задолжность ФНС</p>
                    <a href="#" class="sidebar__map">
                        <img src="<?php bloginfo('template_directory'); ?>/images/uznat_zadolzhennost.gif" alt="Узнать задолжность ФНС">
                    </a>
                </div>

            </div>
            <div class="col-md-9">
                <div class="content clearfix">
                    <header class="content-header">

                        <div id="slider-wrap">
                            <div id="slider">

                                <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/sl10.png"  height="480">
                                </div>
                                <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/sreda.png"  height="480">
                                </div>
                                <div class="slide" style="position: absolute; top: 0px; left: 0px; display: none">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/sl12.png"  height="480">
                                </div>
                                <div class="slide" style="position: absolute; top: 0px; left: 0px; display: block">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/sl2.png"  height="480">
                                </div>
                            </div>
                            <!--   <div class="sli-links">
                                 <span class="control-slide">0</span>
                                  <span class="control-slide">1</span>
                                  <span class="control-slide">2</span>
                                  <span class="control-slide active">3</span>
                            </div> -->
                        </div>

                    </header>
                    <section class="main-content">

                        <div class="row">
                            <div class="col-md-12"><a href="http://fz.pautino.ru/Force/?cat=4">Все новости</a></div>
                        </div>

                        <div class="row">

                            <?php query_posts('category_name=Новости'); ?>
                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) :  the_post();  ?>
                                    <div class="col-md-4">
                                        <article class="news">
                                            <?php the_post_thumbnail( ); ?>
                                           <!-- <img src="<?php bloginfo('template_directory'); ?>/images/Pasport_N_Usman-1.png" alt="картинка">-->
                                            <p class="news__date"><?php the_time('j F Y'); ?></p>
                                            <p class="news__preview-text">
                                                <?php the_excerpt(); ?>
                                            </p>
                                            <a class="btn custom-readmore" href="<?php the_permalink() ?>">Подробнее...</a>
                                        </article>
                                    </div>

                                <?php endwhile; endif; ?>



                            <!--<div class="col-md-4">
                                <article class="news">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/Pasport_N_Usman-1.png" alt="картинка">
                                    <p class="news__date">22.02.2017</p>
                                    <p class="news__preview-text">
                                        Lorem Ipsum - это текст-"рыба",
                                        часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой"
                                        для текстов на латинице с начала XVI века.
                                    </p>
                                    <a class="btn custom-readmore" href="#">Подробнее...</a>
                                </article>
                            </div>

                            <div class="col-md-4">
                                <article class="news">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/Pasport_N_Usman-1.png" alt="картинка">
                                    <p class="news__date">22.02.2017</p>
                                    <p class="news__preview-text">
                                        Lorem Ipsum - это текст-"рыба",
                                        часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой"
                                        для текстов на латинице с начала XVI века.
                                    </p>
                                    <a class="btn custom-readmore" href="#">Подробнее...</a>
                                </article>
                            </div>

                            <div class="col-md-4">
                                <article class="news">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/Pasport_N_Usman-1.png" alt="картинка">
                                    <p class="news__date">22.02.2017</p>
                                    <p class="news__preview-text">
                                        Lorem Ipsum - это текст-"рыба",
                                        часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой"
                                        для текстов на латинице с начала XVI века.
                                    </p>
                                    <a class="btn custom-readmore" href="#">Подробнее...</a>
                                </article>
                            </div>-->

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
