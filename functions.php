<?php


if ( ! defined( 'ABSPATH' ) ) { exit; };


define( 'DUMDJ_THEME_URL', get_template_directory_uri() . '/' );
define( 'DUMDJ_THEME_DIR', get_template_directory() . '/' );
define( 'DUMDJ_THEME_TEXTDOMAIN', 'dumdj-theme' );
define( 'DUMDJ_THEME_VERSION', '0.0.1' );
define( 'DUMDJ_THEME_SLUG', 'dumdj_theme' );




locate_template( 'includes/enqueue.php', true );
locate_template( 'includes/template-functions.php', true );

if ( is_admin() && ! wp_doing_ajax() ) {
    locate_template( 'includes/class-metabox-page-promo.php', true );
    $promo_metabox = new dumdjMetaboxPagePromo();
    $promo_metabox->run();
}


if ( is_customize_preview() ) {
    add_action( 'customize_register', function ( $wp_customize ) {
        $wp_customize->add_panel(
            DUMDJ_THEME_SLUG,
            array(
                'capability'      => 'edit_theme_options',
                'title'           => __( 'Настройки темы "DumDJ"', 'pstu-next-theme' ),
                'priority'        => 200
            )
        );
        include get_theme_file_path( 'customizer/social.php' );
        include get_theme_file_path( 'customizer/jumbotron.php' );
        include get_theme_file_path( 'customizer/cources.php' );
        include get_theme_file_path( 'customizer/gallery.php' );
        include get_theme_file_path( 'customizer/equipment.php' );
        include get_theme_file_path( 'customizer/progress.php' );
        include get_theme_file_path( 'customizer/teachers.php' );
        include get_theme_file_path( 'customizer/reviews.php' );
        include get_theme_file_path( 'customizer/contacts.php' );
    } );
}





function dumdj_theme_register_nav_menus() {
    register_nav_menus( array(
        'menu_main'   => __( 'Главное меню', DUMDJ_THEME_TEXTDOMAIN ),
    ) );
}
add_action( 'after_setup_theme', 'dumdj_theme_register_nav_menus' );





function dumdj_theme_register_widgets(){
    register_sidebar( array(
        'name'          => __( 'Правая колонка', DUMDJ_THEME_TEXTDOMAIN ),
        'id'            => 'side_right',
        'description'   => __( 'Эти виджеты будут показаны в правой колонке сайта', DUMDJ_THEME_TEXTDOMAIN ),
        'before_widget' => '<div class="col-xs-12 col-sm-4 col-md-12 col-lg-12"><div class="widget">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class="title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'dumdj_theme_register_widgets' );