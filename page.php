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
                <div class="content clearfix">
                    <section class="main-content">
                        <div class="row">


                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
