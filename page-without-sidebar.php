<?php if ( ! defined( 'ABSPATH' ) ) { exit; }; ?>

<?php get_header(); ?>

    <div class="container">

        <?php
            if ( have_posts() ) {
                while( have_posts() ) {
                    the_post();
                    dumdj_theme_the_pageheader();
                    dumdj_theme_the_breadcrumbs();
                    ?>
                    
                        <div class="content">
                            <?php get_the_content(); ?>
                        </div>

                    <?php
                    get_template_part( 'parts/pager' );
                    comments_template();
                }
            }
        ?>

    </div>

<?php get_footer(); ?>