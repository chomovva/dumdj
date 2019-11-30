<?php


/*
Template Name: Promo
*/


get_header();

if ( have_posts() ) {

    while( have_posts() ) {

        $title = get_post_meta( get_the_ID(), DUMDJ_THEME_SLUG . '_jumbotron_title', get_bloginfo( 'name' ) );
        $description = get_post_meta( get_the_ID(), DUMDJ_THEME_SLUG . '_jumbotron_title', get_bloginfo( 'description' ) );
        $label = get_post_meta( get_the_ID(), DUMDJ_THEME_SLUG . '_jumbotron_label', __( 'О нас', DUMDJ_THEME_TEXTDOMAIN ) );
        $permalink = ( $page_id = get_post_meta( get_the_ID(), DUMDJ_THEME_SLUG . '_jumbotron_page_id', false ) ) ? get_permalink( $page_id ) : '#';
        $bgi = get_post_meta( get_the_ID(), DUMDJ_THEME_SLUG . '_jumbotron_bgi', DUMDJ_THEME_URL . '/images/progress/bg.jpg' );
        $videos = get_post_meta( get_the_ID(), DUMDJ_THEME_SLUG . "_jumbotron_video", array() );

        include get_theme_file_path( 'views/jumbotron.php' );

        ?>

            <div class="container">
                
                <?php dumdj_theme_the_breadcrumbs(); ?>

                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        
        <?php

    }

}

get_footer();

?>