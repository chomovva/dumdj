





<section class="section progress lazy" id="progress" data-src="<?php echo get_theme_mod( DUMDJ_THEME_SLUG . '_progress_bgi', DUMDJ_THEME_URL . '/images/progress/bg.jpg' ); ?>">
    <div class="container">
        <h2><?php echo get_theme_mod( DUMDJ_THEME_SLUG . '_progress_title', __( 'Наши успехи', DUMDJ_THENE_TEXTDOMAIN ) ); ?></h2>
        <div class="row center-xs">
            <?php if ( ! empty( $items = get_theme_mod( DUMDJ_THEME_SLUG . "_progress_items", array() ) ) ) : ?>
                <?php foreach ( $items as $item ) : ?>
                    <?php if ( isset( $item[ 'title' ] ) && ! empty( $item[ 'title' ] ) ) : ?>
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                            <div class="progress__item item">
                                <div class="percent"><?php echo $item[ 'indicator' ]; ?></div>
                                <div class="title"><?php echo $item[ 'title' ]; ?></div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>