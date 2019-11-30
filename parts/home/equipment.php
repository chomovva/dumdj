<?php


if ( ! defined( 'ABSPATH' ) ) { exit; };


?>





<?php if ( $page_id = get_theme_mod( DUMDJ_THEME_SLUG . '_equipment_page_id', false ) ) : ?>
    <section class="section equipment lazy" id="equipment">
        <div class="container">
            <h2><?php echo get_the_title( $page_id ); ?></h2>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <?php echo wp_trim_words( get_the_content( $page_id ), 55, '&hellip;' ); ?>
                    <p class="text-center"><a class="btn btn-primary" href="<?php echo get_permalink( $page_id ); ?>"><?php _e( 'Подробней', DUMDJ_THEME_TEXTDOMAIN ); ?></a></p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 first-sm">
                    <?php
                        $fotos = get_theme_mod( DUMDJ_THEME_SLUG . '_equipment_fotos', array() );
                        if ( is_array( $fotos ) && ! empty( $fotos ) ) {
                            ?>
                                <div class="row center-xs">
                                    <?php
                                        wp_enqueue_script( 'fancybox' );
                                        wp_add_inline_script( 'fancybox', "jQuery( 'a.equipment__entry.entry' ).fancybox();", 'after' );
                                        foreach ( $fotos as $foto ) {
                                            if ( wp_attachment_is_image( $foto ) ) {
                                                ?>
                                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                                        <a class="equipment__entry entry" href="<?php echo wp_get_attachment_image_url( $foto, 'full', false ); ?>" data-fancybox="equipment">
                                                            <div class="thumbnail">
                                                                <img class="lazy" src="#" data-src="<?php echo wp_get_attachment_image_url( $foto, 'medium', false ); ?>" alt="<?php echo esc_attr( wp_get_attachment_caption( $foto ) ); ?>">
                                                            </div>
                                                            <div class="title"><?php echo wp_get_attachment_caption( $foto ); ?></div>
                                                        </a>
                                                    </div>
                                                <?php
                                            }
                                        }
                                    ?>
                                </div>
                            <?php
                        } elseif ( $thumbnail_id = get_theme_mod( DUMDJ_THEME_SLUG . '_equipment_thumbnail', false ) ) {
                            if ( wp_attachment_is_image( $thumbnail_id ) ) {
                                ?>
                                    <a class="center-block" href="<?php echo wp_get_attachment_image_url( $thumbnail_id, 'full', false ); ?>" data-fancybox="equipment">
                                        <img class="lazy" src="#" data-src="<?php echo wp_get_attachment_image_url( $thumbnail_id, 'medium', false ); ?>" alt="<?php echo esc_attr( wp_get_attachment_caption( $thumbnail_id ) ); ?>">
                                        <h3 class="text-center"><?php echo wp_get_attachment_caption( $thumbnail_id ); ?></h3>
                                    </a>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>