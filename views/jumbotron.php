<?php if ( ! defined( 'ABSPATH' ) ) { exit; }; ?>


<div class="jumbotron jquery-background-video-wrapper" id="jumbotron">
    <?php if ( dumdj_theme_empty_values_of_associative_array( $videos ) ) : ?>
        <video class="bg-video jquery-background-video" loop autoplay muted playsinline poster="<?php echo $bgi; ?>">
            <?php foreach ( $videos as $mime_type => $src ) : wp_enqueue_style( 'jquery.background-video' ); wp_enqueue_script( 'jquery.background-video' ); ?>
                <source src="<?php echo $src; ?>" type="<?php echo $mime_type; ?>">
            <?php endforeach; ?>
        </video>
    <?php else : ?>
        <div class="bgi lazy" data-src="<?php echo $bgi; ?>"></div>
    <?php endif; ?>
    <div class="wrap">
        <?php if ( ! empty( $title ) ) : ?><h1 class="title"><?php echo $title; ?></h1><?php endif; ?>
        <?php if ( ! empty( $description ) ) : ?><p class="subtitle"><?php echo $description; ?></p><?php endif; ?>
        <?php if ( empty( $permalink ) ) : ?><a class="permalink" href="<?php echo $permalink; ?>"><?php echo $label; ?></a><?php endif; ?>
    </div>
</div>