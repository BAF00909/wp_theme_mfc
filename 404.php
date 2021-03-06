<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>

    <div class="page-content clearfix">
        <div class="row">

            <div class="col-md-12">
                <div id="primary" class="content-area">
                    <div id="content" class="site-content" role="main">

                        <header class="page-header">
                            <h1 class="page-title"><?php _e( '404 страница не найдена', 'mfc2017' ); ?></h1>
                        </header>

                        <div class="page-wrapper">
                            <div class="page-content">
                                <h2><?php _e( 'Уппсс!', 'mfc2017' ); ?></h2>
                                <p><?php _e( 'Похоже, ничего не было найдено. Может быть, попробовать поиск?', 'mfc2017' ); ?></p>

                                <?php get_search_form(); ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>


<?php get_footer(); ?>