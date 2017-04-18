<?php get_header(); ?>

<section class="page-content clearfix">

        <div class="row">
            <div class="col-md-12">
                <div class="content clearfix">
                    <section class="main-content">

                        <h1 class="entry-title"><?php single_cat_title(); ?></h1>
                        <?php if(in_category('news')){?>

                            <?php if (have_posts()) : while (have_posts()) : the_post();?>

                                <div class="row clearfix row--news">

                                    <div class="col-md-4">
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
                                    </div>

                                    <div class="col-md-8">
                                        <article class="all-news-list">
                                            <p class="news-date"><?php echo get_the_date('d.m.Y'); ?></p>
                                            <a class="news__title news__title--color" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                            <p class="news__preview-text">
                                                <?php the_excerpt(); ?>
                                            </p>
                                            <div class="arrow">
                                                <a class="btn custom-readmore" href="<?php the_permalink() ?>">Подробнее</a>
                                            </div>
                                        </article>
                                    </div>

                                </div>

                            <?php endwhile; else: ?>
                            <?php endif; ?>
                        <?php } else { ?>

                            <?php if (have_posts()) : while (have_posts()) : the_post();?>

                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="list-title-news"> <a title="" href="<?php the_permalink() ?>"> <?php the_title(); ?> </a> </h4>
                                    </div>
                                </div>

                            <?php endwhile; else: ?>
                            <?php endif; ?>

                        <?php } ?>

                        <div class="row">
                            <div class="col-md-12">
                                <?php  the_posts_pagination( array(
                                    'show_all'     => False, // показаны все страницы участвующие в пагинации
                                    'end_size'     => 1,     // количество страниц на концах
                                    'mid_size'     => 1,     // количество страниц вокруг текущей
                                    'prev_next'    => True,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                                    'prev_text'    => __('« Предыдущая'),
                                    'next_text'    => __('Следующая »'),
                                    'add_args'     => False,
                                    'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                                    'screen_reader_text' => __( 'Постраничная навигация' ),
                                ) ); ?>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
</section>
</div>
</div>
</div>

<?php get_footer(); ?>
