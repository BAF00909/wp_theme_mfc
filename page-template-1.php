<?php
/*
Template Name: template-page1
*/
?>

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

            </div>
            <div class="col-md-9">
                <div class="content clearfix">
                    <section class="main-content">
                        <div class="row">

                            <h2> <?php wp_title();?></h2>

                            <?php if(in_category('Отделы МФЦ')){?>

                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="title-category">Отделы МФЦ</h3>
                                    </div>
                                </div>
                                <?php query_posts('category_name=Отделы МФЦ&showposts=5'); ?>

                                <?php if (have_posts()) : while (have_posts()) : the_post();?>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="list-title-news"> <a title="" href="<?php the_permalink() ?>"> <?php the_title(); ?> </a> </h4>
                                        </div>
                                    </div>

                                <?php endwhile; else: ?>
                                <?php endif; ?>

                            <?php } ?>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
