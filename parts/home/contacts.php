<?php if ( ! defined( 'ABSPATH' ) ) { exit; }; ?>





<section class="section contacts lazy" id="contacts" data-src="<?php echo get_theme_mod( DUMDJ_THEME_SLUG . '_contacts_bgi', DUMDJ_THEME_URL . '/images/contacts/bg.jpg' ); ?>">
    <h2><?php echo get_theme_mod( DUMDJ_THEME_SLUG . '_contacts_title', __( 'Контакты', DUMDJ_THEME_TEXTDOMAIN ) ); ?></h2>
    <div class="container">
        <div class="row middle-xs center-xs">
            <div class="col-xs-12 col-sm-9 col-md-8 col-lg-5">
                <div class="wrap">

                    <?php if ( ! empty( get_theme_mod( DUMDJ_THEME_SLUG . '_contacts_items', array() ) ) ) : ?>
                        <ul class="contacts__list list">
                            <?php foreach ( $items as $key => $value ) : ?>
                                <li class="<?php echo key; ?>"><?php echo $value; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <?php if ( ! empty( trim( $content = get_theme_mod( DUMDJ_THEME_SLUG . '_modal_content', '' ) ) ) ) : ?>
                        <div class="text-center">
                            <a class="btn btn-primary" id="contacts-form-toggle" role="button" href="#contacts-form-modal">
                                <?php echo get_theme_mod( DUMDJ_THEME_SLUG . '_contacts_modal_label', __( 'Напишите нам', DUMDJ_THEME_TEXTDOMAIN ) ); ?>
                            </a>
                            <div id="contacts-form-modal" style="display: none; min-width: 300px;">
                                <?php echo do_shortcode( $content ); ?>
                            </div>
                        </div>
                        <?php wp_enqueue_script( 'fancybox' ); wp_add_inline_script( 'fancybox', "jQuery( 'a.equipment__entry.entry' ).fancybox();", 'after' ); ?>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>