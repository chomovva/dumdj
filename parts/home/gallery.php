<?php


if ( ! defined( 'ABSPATH' ) ) { exit; };


?>












<?php if ( is_array( $items = get_theme_mod( DUMDJ_THEME_SLUG . '_gallery_items', array() ) ) && ! empty( $items ) ) : ?>
    <section class="gallery" id="gallery">
        <div class="container-fluid">
            <div class="row center-xs">
                <?php foreach ( $items as $item ) : ?>
                    <?php if ( wp_attachment_is_image( $item ) ) : ?>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <a class="gallery__item item fancybox" href="<?php echo wp_get_attachment_image_url( $item, 'full', false ); ?>" data-fancybox="gallery">
                                <img src="<?php echo wp_get_attachment_image_url( $item, 'medium', false ); ?>" alt="<?php echo esc_attr( wp_get_attachment_caption( $item ) ); ?>">
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>