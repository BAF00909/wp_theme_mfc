<?php
/**
 * Template part for displaying page content in page.php.
 * @package mfc2017
 */

?>

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
                    <section class="main-content">
                            <div class="content-area">
                                <main id="main" class="site-main" role="main">


                                    <div class="breadcrumbs">
                                        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                                    </div>

                                    <?php

                                    while ( have_posts() ) : the_post();


                                        get_template_part( 'content', 'page' );


                                        if ( comments_open() || get_comments_number() ) :
                                            comments_template();
                                        endif;


                                    endwhile;
                                    ?>

                                </main>
                            </div>

                    </section>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
