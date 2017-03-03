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
                        <?php if(in_category('Новости')){?>
                            <div class="row">
                                 <div class="col-md-12">
                                    <h2><?php the_title(); ?></h2>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                   <div class="img-wrapper" id="img-wrapper--in"> <?php the_post_thumbnail(); ?></div>
                                </div>
                                <div class="col-md-8">
                                    <?php $post = get_post($post_id);?>
                                    <p>
                                        <?php echo $post->post_content;?>
                                    </p>
                                </div>
                            </div>
                        <?php } else {?>

                        <div class="row">
                            <div class="col-md-12">
                                <h2><?php the_title(); ?></h2>
                                <?php $post = get_post($post_id);?>
                                <div class="content-post">
                                    <?php echo $post->post_content;?>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                    </section>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

