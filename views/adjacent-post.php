<?php if ( ! defined( 'ABSPATH' ) ) { exit; }; ?>

<a class="<?php echo $key; ?> pager__entry entry" href="<?php echo get_the_permalink( $entry->ID ); ?>">
	<?php if ( has_post_thumbnail( $entry->ID ) ) : ?>
		<div class="thumbnail">
			<img class="wp-post-thumbnail lazy" src="#" data-src="<?php echo get_the_post_thumbnail_url( $entry->ID, 'post-thumbnail' ); ?>" alt="<?php echo esc_attr( get_the_title( $entry->ID ) ); ?>">
		</div>
	<?php endif; ?>
	<h4 class="title"><?php echo get_the_title( $entry->ID ); ?></h4>
</a>