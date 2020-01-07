<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
    <div class="cource" style="background-color: #4db2f6">
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