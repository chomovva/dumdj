<?php if ( ! defined( 'ABSPATH' ) ) { exit; }; ?>

            </main>
            <footer class="wrapper__item wrapper__item--footer footer">
                <div class="container">
                    <div class="row middle-xs">
                        <div class="col-xs-12 col-sm-4">
                            <p class="footer__copyright copytight"><?php bloginfo( 'name' ); ?> &copy; <?php echo date( 'Y' ); ?></p>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <?php
                                echo dumdj_theme_render_socials_list( array(
                                    'links'            => get_theme_mod( DUMDJ_THEME_SLUG . '_social', array() ),
                                    'container_class'  => 'footer__social',
                                ) );
                            ?>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <p class="footer__developer developer"><?php get_template_part( 'parts/developer' ); ?></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div> <!-- // #wrapper -->
        <?php wp_footer(); ?>
    </body>
</html>