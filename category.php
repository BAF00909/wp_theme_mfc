<?php get_header(); ?>

<section class="page-content clearfix">
    <div class="container clearfix">
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
                    <section class="main-content">


                            <?php if(in_category('4')){?>

                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="title-category">Новости</h3>
                                    </div>
                                </div>

                                <?php if (have_posts()) : while (have_posts()) : the_post();?>

                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="list-title-news"> <a title="" href="<?php the_permalink() ?>"> <?php the_title(); ?> </a> </h4>
                                    </div>
                                </div>

                                <?php endwhile; else: ?>
                                <?php endif; ?>

                                <?php } ?>

                    </section>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
