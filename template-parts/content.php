<?php
/**
 * Template part for displaying posts.
 * @package mfc2017
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <?php
        if ( is_single() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' );
        endif;
        ?>
    </header>

    <div class="entry-content">
        <?php
        the_content( sprintf(
            __( 'Continue reading %s', 'mfc2017' ),
            the_title( '<span class="screen-reader-text">', '</span>', false )
        ) );
        ?>
    </div>
    <!--<footer class="entry-footer">
        <ul class="commentlist">
            <?php /*wp_list_comments( 'type=comment&callback=mytheme_comment' ); */?>
        </ul>
        <?php /*comment_form(); */?>
        <?php /*edit_post_link( __( 'Edit', 'mfc2017' ), '<span class="edit-link">', '</span>' ); */?>
        <?php /*the_tags('<ul><li>','</li><li>','</li></ul>'); */?>
    </footer>-->
    

</article>