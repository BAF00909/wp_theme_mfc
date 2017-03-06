<?php get_header(); ?>

<section class="page-content clearfix">
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
                    <section class="main-content">


                            <?php if(in_category('Новости')){?>

                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="title-category">Новости</h3>
                                    </div>
                                </div>

                                <?php if (have_posts()) : while (have_posts()) : the_post();?>

                                <div class="row clearfix row--news">

                                    <div class="col-md-4">
                                        <?php the_post_thumbnail(array(240,170)); ?>
                                    </div>

                                    <div class="col-md-8">
                                        <p class="news__date"><?php the_time('j F Y'); ?></p>
                                        <a class="news__title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                        <p class="news__preview-text">
                                            <?php the_excerpt(); ?>
                                        </p>
                                    </div>

                                </div>

                                <?php endwhile; else: ?>
                                <?php endif; ?>

                                <div class="row">
                                    <div class="col-md-12">
                                        <?php the_posts_pagination(); ?>
                                    </div>
                                </div>

                                <?php } else { ?>
                                <div class="col-md-12">
                                    <h3 class="title-category"><?php single_cat_title(); ?></h3>
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

                        <div class="row">
                            <div class="col-md-12">
                                <?php the_posts_pagination(); ?>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
