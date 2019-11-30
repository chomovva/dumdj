<?php



if ( ! defined( 'ABSPATH' ) ) { exit; };



$wp_customize->add_section(
    DUMDJ_THEME_SLUG . '_equipment',
    array(
        'title'            => __( 'Оборудование', DUMDJ_THEME_TEXTDOMAIN ),
        'priority'         => 10,
        'description'      => __( 'Секция главной страницы', DUMDJ_THEME_TEXTDOMAIN ),
        'panel'            => DUMDJ_THEME_SLUG
    )
); /**/



$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_equipment_flag',
    array(
        'default'           => false,
        'transport'         => 'reset'
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_equipment_flag',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_equipment',
        'label'             => __( 'Использовать секцию', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'checkbox',
    )
); /**/



$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_equipment_page_id',
    array(
        'default'           => '',
        'transport'         => 'reset'
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_equipment_page_id',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_equipment',
        'label'             => __( 'Описание', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'dropdown-pages',
    )
); /**/



if ( class_exists( 'CustomizeImageGalleryControl\Control' ) ) {
    $wp_customize->add_setting(
        DUMDJ_THEME_SLUG . '_equipment_fotos',
        array(
            'default'           => array(),
            'transport'         => 'reset',
            'sanitize_callback' => 'wp_parse_id_list',
        )
    );
    $wp_customize->add_control( new CustomizeImageGalleryControl\Control (
        $wp_customize,
        DUMDJ_THEME_SLUG . '_equipment_fotos',
        array(
            'label'    => __( 'Галерея', DUMDJ_THEME_TEXTDOMAIN ),
            'section'  => DUMDJ_THEME_SLUG . '_equipment',
            'settings' => DUMDJ_THEME_SLUG . '_equipment_fotos',
            'type'     => 'image_gallery',
        )
    ) );
} else {
    $wp_customize->add_setting(
        DUMDJ_THEME_SLUG . '_equipment_thumbnail_id',
        array(
            'default'      => false,
            'transport'    => 'reset',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            DUMDJ_THEME_SLUG . '_equipment_thumbnail_id',
            array(
                'label'    => __( 'Изображение', DUMDJ_THEME_TEXTDOMAIN ),
                'settings' => DUMDJ_THEME_SLUG . '_equipment_thumbnail_id',
                'section'  => DUMDJ_THEME_SLUG . '_equipment'
            )
        )
    );
}