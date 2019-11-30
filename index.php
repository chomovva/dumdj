<?php if ( ! defined( 'ABSPATH' ) ) { exit; }; ?>

<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 <?php echo ( is_dynamic_sidebar( 'main_column' ) ) ? 'col-md-8 col-lg-8' : 'col-md-12 col-lg-12'; ?>">
			
			<?php

				dumdj_theme_the_pageheader();

				dumdj_theme_the_breadcrumbs();

				get_template_part( 'parts/loop' );
				
				the_posts_pagination( array(
					'show_all'           => false,
					'prev_next'          => true,
					'prev_text'          => '«',
					'next_text'          => '»',
					'screen_reader_text' => __( 'Навигация по записям', DUMDJ_THEME_TEXTDOMAIN ),
				) );

			?>

		</div>
		<?php if ( is_dynamic_sidebar( 'main_column' ) ) : ?>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<?php get_sidebar(); ?>
			</div>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>