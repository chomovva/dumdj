<?php if ( ! defined( 'ABSPATH' ) ) { exit; }; ?>


<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 <?php echo ( is_dynamic_sidebar( 'main_column' ) ) ? 'col-md-8 col-lg-8' : 'col-md-12 col-lg-12'; ?>">

				<?php
					if ( have_posts() ) {
						while( have_posts() ) {
							the_post();
							dumdj_theme_the_pageheader();
							dumdj_theme_the_breadcrumbs();
							echo '<div class="content">' . get_the_content() . '</div>';
							get_template_part( 'parts/pager' );
							comments_template();
						}
					}
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