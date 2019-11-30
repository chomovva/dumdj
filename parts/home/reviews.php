<?php



if ( ! defined( 'ABSPATH' ) ) { exit; };



$category_id = get_theme_mod( DUMDJ_THEME_SLUG . '_reviews_category_id', '' );

$entries = get_posts( array(
        'numberposts' => get_theme_mod( DUMDJ_THEME_SLUG . '_reviews_numberposts', '5' ),
        'category'    => $category_id,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'post',
) );


?>














<?php if ( is_array( $entries ) && ! empty( $entries ) ) : ?>
    <section class="section reviews slider" id="reviews">
        <div class="container">
            <h2><?php echo get_cat_name( $category_id ); ?></h2>
            <div class="slider__list list" id="reviews-list">
                <?php foreach ( $entries as $entry ) : setup_postdata( $entry ); ?>
                    <div class="reviews__entry entry">
                        <?php if ( has_post_thumbnail( $entry->ID ) ) : ?>
                            <img class="wp-post-thumbnail" src="#" data-lazy="/images/reviews/01.jpg" alt="<?php echo esc_attr( $entry->post_title ); ?>">
                        <?php endif; ?>
                        <h3 class="title"><?php echo apply_filters( 'the_title', $entry->post_title, $entry->ID ); ?></h3>
                        <blockquote class="blockquote"><?php echo wp_trim_words( $entry->ID, '20', '&hellip;' ); ?></blockquote>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
            <?php if ( count( $entries ) > 1 ) : $init_script_path = get_theme_file_path( 'scripts/reviews-slider-init.js' ); ?>
                <?php if ( file_exists( $init_script_path ) ) : wp_enqueue_script( 'slick' ); wp_add_inline_script( 'slick', file_get_contents( $init_script_path ), 'after' ); ?>
                    <button class="slider__arrow arrow arrow--prev">
                        <div class="sr-only"><?php _e( 'Предыдущий слайд', DUMDJ_THEME_TEXTDOMAIN ); ?></div>
                    </button>
                    <button class="slider__arrow arrow arrow--next">
                        <div class="sr-only"><?php _e( 'Следующий слайд', DUMDJ_THEME_TEXTDOMAIN ); ?></div>
                    </button>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>