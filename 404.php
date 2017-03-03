<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>

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
                    <div id="content" class="site-content" role="main">

                        <header class="page-header">
                            <h1 class="page-title"><?php _e( '404 страница не найдена', 'mfc' ); ?></h1>
                        </header>

                        <div class="page-wrapper">
                            <div class="page-content">
                                <h2><?php _e( 'Уппсс!', 'mfc' ); ?></h2>
                                <p><?php _e( 'Похоже, ничего не было найдено. Может быть, попробовать поиск?', 'mfc' ); ?></p>

                                <?php get_search_form(); ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>