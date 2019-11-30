<?php if ( ! defined( 'ABSPATH' ) ) { exit; }; ?>

<?php if ( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post(); ?>
		<div class="archive__entry entry">
			<?php if ( has_post_thumbnail( get_the_ID() ) ) : ?>
				<a class="thumbnail" href="<?php the_permalink(); ?>">
					<img class="wp-post-thumbnail lazy" src="#" data-src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medinum' ); ?>" alt="<?php echo esc_attr( get_the_title( get_the_ID() ) ); ?>" />
				</a>
			<?php endif; ?>
			<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
		</div>
	<?php endwhile; ?>
<?php endif; ?>