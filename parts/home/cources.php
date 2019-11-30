<?php



if ( ! defined( 'ABSPATH' ) ) { exit; };



$parent_page_id = get_theme_mod( DUMDJ_THEME_SLUG . '_cources_page_id', '' );

$entries = get_posts( array(
    'sort_order'   => 'ASC',
    'sort_column'  => 'post_date',
    'parent'       => $parent_page_id,
    'number'       => get_theme_mod( DUMDJ_THEME_SLUG . '_cources_number', '4' ),
    'post_type'    => 'page',
) );


?>




<?php if ( is_array( $entries ) && ! empty( $entry ) ) : ?>
    <section class="section cources" id="cources">
        <h2><?php echo get_the_title( $parent_page_id ); ?></h2>
        <div class="container">
            <div class="row center-xs">
                <?php foreach ( $entries as $entry ) : setup_postdata( $entry ) ?>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="cources__entry entry" style="background-color: #4db2f6">
                            <?php if ( has_post_thumbnail( $entry->ID ) ) : ?>
                                <a class="thumbnail" href="<?php echo get_permalink( $entry->ID ); ?>">
                                    <img class="wp-post-thumbnail lazy" src="#" data-src="<?php echo get_the_post_thumbnail_url( $entry->ID, 'thumbnail' ); ?>" alt="<?php echo esc_attr( $entry->post_title ); ?>">
                                </a>
                            <?php endif; ?>
                            <h3 class="title"><?php echo apply_filters( 'the_title', $entry->post_title, $entry->ID ); ?></h3>
                            <?php if ( ! empty( trim( $entry->post_excerpt ) ) ) : ?><p class="excerpt"><?php echo $entry->post_excerpt; ?></p><?php endif; ?>
                            <a class="permalink" href="#"><?php _e( 'Подробней', DUMDJ_THEME_TEXTDOMAIN ); ?></a>
                        </div>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>