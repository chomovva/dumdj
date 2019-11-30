<?php



if ( ! defined( 'ABSPATH' ) ) { exit; };



$wp_customize->add_section(
    DUMDJ_THEME_SLUG . '_gallery',
    array(
        'title'            => __( 'Галерея', DUMDJ_THEME_TEXTDOMAIN ),
        'priority'         => 10,
        'description'      => __( 'Секция главной страницы', DUMDJ_THEME_TEXTDOMAIN ),
        'panel'            => DUMDJ_THEME_SLUG
    )
); /**/



$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_gallery_flag',
    array(
        'default'           => false,
        'transport'         => 'reset'
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_gallery_flag',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_gallery',
        'label'             => __( 'Использовать секцию', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'checkbox',
    )
); /**/


if ( class_exists( 'CustomizeImageGalleryControl\Control' ) ) {
    $wp_customize->add_setting(
        DUMDJ_THEME_SLUG . '_gallery_items',
        array(
            'default'           => array(),
            'transport'         => 'reset',
            'sanitize_callback' => 'wp_parse_id_list',
        )
    );
    $wp_customize->add_control( new CustomizeImageGalleryControl\Control (
        $wp_customize,
        DUMDJ_THEME_SLUG . '_equipment_items',
        array(
            'label'    => __( 'Галерея', DUMDJ_THEME_TEXTDOMAIN ),
            'section'  => DUMDJ_THEME_SLUG . '_gallery',
            'settings' => DUMDJ_THEME_SLUG . '_gallery_items',
            'type'     => 'image_gallery',
        )
    ) );
}