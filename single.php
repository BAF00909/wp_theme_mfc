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

                <!-- <div class="mini-menu">
                     <ul>
                         <li class="sub">
                             <a href="#">Услуги</a>
                             <ul>
                                 <li><a href="#">Ссылка - 1</a></li>
                                 <li><a href="#">Ссылка - 2</a></li>
                                 <li><a href="#">Ссылка - 3</a></li>
                                 <li><a href="#">Ссылка - 4</a></li>
                                 <li><a href="#">Ссылка - 5</a></li>
                                 <li><a href="#">Ссылка - 6</a></li>
                                 <li><a href="#">Ссылка - 7</a></li>
                                 <li><a href="#">Ссылка - 8</a></li>
                             </ul>
                         </li>
                         <li class="sub">
                             <a href="#">Для заявителя</a>
                             <ul>
                                 <li><a href="#">Ссылка - 1</a></li>
                                 <li><a href="#">Ссылка - 2</a></li>
                                 <li><a href="#">Ссылка - 3</a></li>
                                 <li><a href="#">Ссылка - 4</a></li>
                                 <li><a href="#">Ссылка - 5</a></li>
                                 <li><a href="#">Ссылка - 6</a></li>
                                 <li><a href="#">Ссылка - 7</a></li>
                                 <li><a href="#">Ссылка - 8</a></li>
                             </ul>
                         </li>
                         <li class="sub">
                             <a href="#">Электронные сервисы</a>
                             <ul>
                                 <li><a href="#">Ссылка - 1</a></li>
                                 <li><a href="#">Ссылка - 2</a></li>
                                 <li><a href="#">Ссылка - 3</a></li>
                                 <li><a href="#">Ссылка - 4</a></li>
                                 <li><a href="#">Ссылка - 5</a></li>
                                 <li><a href="#">Ссылка - 6</a></li>
                                 <li><a href="#">Ссылка - 7</a></li>
                                 <li><a href="#">Ссылка - 8</a></li>
                                 <li><a href="#">Ссылка - 9</a></li>
                             </ul>
                         </li>
                         <li class="sub">
                             <a href="#">Центр "мои документы"</a>
                             <ul>
                                 <li><a href="#">Ссылка - 1</a></li>
                                 <li><a href="#">Ссылка - 2</a></li>
                                 <li><a href="#">Ссылка - 3</a></li>
                                 <li><a href="#">Ссылка - 4</a></li>
                                 <li><a href="#">Ссылка - 5</a></li>
                             </ul>
                         </li>
                         <li class="sub">
                             <a href="#">Документы</a>
                             <ul>
                                 <li><a href="#">Ссылка - 1</a></li>
                                 <li><a href="#">Ссылка - 2</a></li>
                                 <li><a href="#">Ссылка - 3</a></li>
                                 <li><a href="#">Ссылка - 4</a></li>
                                 <li><a href="#">Ссылка - 5</a></li>
                             </ul>
                         </li>
                         <li class="sub">
                             <a href="#">МФЦ для бизнеса</a>
                             <ul>
                                 <li><a href="#">Ссылка - 1</a></li>
                                 <li><a href="#">Ссылка - 2</a></li>
                                 <li><a href="#">Ссылка - 3</a></li>
                                 <li><a href="#">Ссылка - 4</a></li>
                                 <li><a href="#">Ссылка - 5</a></li>
                             </ul>
                         </li>
                         <li class="sub">
                             <a href="#">Пресс-центр</a>
                             <ul>
                                 <li><a href="#">Ссылка - 1</a></li>
                                 <li><a href="#">Ссылка - 2</a></li>
                                 <li><a href="#">Ссылка - 3</a></li>
                                 <li><a href="#">Ссылка - 4</a></li>
                                 <li><a href="#">Ссылка - 5</a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="#">Фотогалерея</a>
                         </li>
                         <li>
                             <a href="#">Интерактивная игра</a>
                         </li>
                         <li>
                             <a href="#">Виртуальный тур</a>
                         </li>
                         <li>
                             <a href="#">Полезные ссылки</a>
                         </li>
                     </ul>
                 </div>-->

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
                        <?php if(in_category('Новости')){?>
                            <div class="row">
                                 <div class="col-md-12">
                                    <h2><?php the_title(); ?></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <?php the_post_thumbnail( ); ?>
                                    <!--<img src="<?php bloginfo('template_directory'); ?>/images/Pasport_N_Usman-1.png" alt="картинка">-->
                                </div>
                                <div class="col-md-8">
                                    <?php $post = get_post($post_id);?>
                                    <p>
                                        <?php echo $post->post_content;?>
                                    </p>
                                </div>
                            </div>
                        <?php }?>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

