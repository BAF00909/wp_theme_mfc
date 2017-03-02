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

                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="list-title-news"> <a title="" href="<?php the_permalink() ?>"> <?php the_title(); ?> </a> </h4>
                                    </div>
                                </div>

                                <?php endwhile; else: ?>
                                <?php endif; ?>

                                <?php } else { ?>

                                <?php if (have_posts()) : while (have_posts()) : the_post();?>

                                    <div class="col-md-12">
                                        <h3 class="title-category"><?php single_cat_title(); ?></h3>
                                    </div>

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
