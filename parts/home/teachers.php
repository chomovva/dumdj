<?php



if ( ! defined( 'ABSPATH' ) ) { exit; };



$parent_page_id = get_theme_mod( DUMDJ_THEME_SLUG . '_teachers_page_id', '' );

$entries = get_posts( array(
		'sort_order'   => 'ASC',
		'sort_column'  => 'post_date',
		'parent'       => $parent_page_id,
		'number'       => get_theme_mod( DUMDJ_THEME_SLUG . '_teachers_number', '3' ),
		'post_type'    => 'page',
) );


?>


<?php if ( is_array( $entries ) && ! empty( $entries ) ) : ?>
	<section class="teachers section" id="teachers">
		<div class="container">
			<h2><?php echo get_the_title( $parent_page_id ); ?></h2>
			<div class="row center-xs">
				<?php foreach ( $entries as $entry ) : setup_postdata( $entry ) ?>
					<div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
						<a class="teachers__entry entry" href="<?php echo get_permalink( $entry->ID ); ?>">
							<?php if ( has_post_thumbnail( $entry->ID ) ) : ?>
								<img class="wp-post-thumbnail lazy" src="#" data-src="<?php echo get_the_post_thumbnail_url( $entry->ID, 'post-thumbnail' ); ?>" alt="<?php echo esc_attr( $entry->post_title ); ?>">
							<?php endif; ?>
							<h3 class="title"><?php echo apply_filters( 'the_title', $entry->post_title, $entry->ID ); ?></h3>
							<?php if ( ! empty( trim( $entry->post_title ) ) ) : ?><p class="excerpt"><?php echo get_the_excerpt( $entry->ID ); ?></p><?php endif; ?>
						</a>
					</div>
				<?php endforeach; wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
<?php endif; ?>