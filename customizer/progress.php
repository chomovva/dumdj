<?php



if ( ! defined( 'ABSPATH' ) ) { exit; };



$wp_customize->add_section(
    DUMDJ_THEME_SLUG . '_progress',
    array(
        'title'            => __( 'Прогресс', DUMDJ_THEME_TEXTDOMAIN ),
        'priority'         => 10,
        'description'      => __( 'Секция главной страницы', DUMDJ_THEME_TEXTDOMAIN ),
        'panel'            => DUMDJ_THEME_SLUG
    )
); /**/



$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_progress_flag',
    array(
        'default'           => false,
        'transport'         => 'reset'
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_progress_flag',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_progress',
        'label'             => __( 'Использовать секцию', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'checkbox',
    )
); /**/



$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_progress_title',
    array(
        'default'           => __( 'Контакты', DUMDJ_THEME_TEXTDOMAIN ),
        'transport'         => 'reset',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_progress_title',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_progress',
        'label'             => __( 'Заголовок секции', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'text',
    )
); /**/


$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_progress_bgi',
    array(
        'default'           => DUMDJ_THEME_URL . '/images/progress/bg.jpg',
        'transport'         => 'reset',
        'sanitize_callback' => 'sanitize_url',
    )
);
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        DUMDJ_THEME_SLUG . '_progress_bgi',
        array(
            'label'         => __( 'Фон', DUMDJ_THEME_TEXTDOMAIN ),
            'settings'      => DUMDJ_THEME_SLUG . '_progress_bgi',
            'section'       => DUMDJ_THEME_SLUG . '_progress'
        )
    )
);


for ( $i=0; $i<3; $i++ ) {
    $wp_customize->add_setting(
        DUMDJ_THEME_SLUG . "_progress_items[{$i}][title]",
        array(
            'default'           => '',
            'transport'         => 'reset',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        DUMDJ_THEME_SLUG . "_progress_items[{$i}][title]",
        array(
            'section'           => DUMDJ_THEME_SLUG . '_progress',
            'label'             => sprintf( '%1$s %2$s', __( 'Заголовок', DUMDJ_THEME_TEXTDOMAIN ), ( $i + 1 ) ),
            'type'              => 'text',
        )
    ); /**/
     $wp_customize->add_setting(
        DUMDJ_THEME_SLUG . "_progress_items[{$i}][indicator]",
        array(
            'default'           => 0,
            'transport'         => 'reset',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        DUMDJ_THEME_SLUG . "_progress_items[{$i}][indicator]",
        array(
            'section'           => DUMDJ_THEME_SLUG . '_progress',
            'label'             => sprintf( '%1$s %2$s', __( 'Прогресс', DUMDJ_THEME_TEXTDOMAIN ), ( $i + 1 ) ),
            'type'              => 'number',
        )
    ); /**/
}

