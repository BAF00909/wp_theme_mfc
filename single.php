<?php get_header(); ?>

<section class="page-content clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php if ( is_active_sidebar( 'true_side' ) ) : ?>
                    <div id="true-side" class="sidebar">
                        <?php dynamic_sidebar( 'true_side' ); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-9">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main" role="main">
                            <?php
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() );
                            endwhile;
                            ?>
                        </main>
                    </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

