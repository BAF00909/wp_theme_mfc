<?php get_header(); ?>

<section class="page-content clearfix">

        <div class="row">
            <div class="col-md-12">
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

</section>


<?php get_footer(); ?>

