<?php
/**
 * Template part for displaying page content in page_old.php.
 * @package mfc2017
 */

?>

<?php get_header(); ?>

<section class="page-content clearfix">
        <div class="row">
            <div class="col-md-12">
                <section class="main-content">
                    <div class="content-area">
                        <main id="main" class="site-main" role="main">

                            <?php

                            while ( have_posts() ) : the_post();


                                get_template_part( 'template-parts/content', 'page' );


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
</section>

</div>
</div>
</div>
<?php get_footer(); ?>
