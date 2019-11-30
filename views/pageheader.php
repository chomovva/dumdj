<?php if ( ! defined( 'ABSPATH' ) ) { exit; }; ?>

<div class="pageheader">
	<?php if ( isset( $thumbnail_id ) && $thumbnail_id ) : ?>
		<a class="fancybox thumbnail" href="<?php echo wp_get_attachment_image_url( $thumbnail_id, 'full' ); ?>">
			<img class="lazy wp-post-thumbnail" src="#" data-src="<?php echo wp_get_attachment_image_url( $thumbnail_id, 'thumbnail' ); ?>" alt="<?php echo esc_attr( $title ); ?>">
		</a>
	<?php endif; ?>
	<div class="wrap">
		<h1 class="title"><?php echo $title; ?></h1>
		<?php if ( ! empty( $excerpt ) ) : ?><p class="excerpt"></p><?php endif; ?>
	</div>
</div>