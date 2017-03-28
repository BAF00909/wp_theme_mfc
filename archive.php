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

                        <section id="primary" class="content-area">
                            <main id="main" class="site-main" role="main">

                                <?php if ( have_posts() ) : ?>

                                    <header class="page-header">
                                        <?php
                                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                                        ?>
                                    </header>

                                    <?php

                                    while ( have_posts() ) : the_post();


                                        get_template_part( 'template-parts/content', get_post_format() );


                                    endwhile;


                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'mfc2017' ),
                                        'next_text'          => __( 'Next page', 'mfc2017' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'mfc2017' ) . ' </span>',
                                    ) );

                                else :
                                    get_template_part( 'content', 'none' );

                                endif;
                                ?>

                            </main>
                        </section>


                    </section>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
