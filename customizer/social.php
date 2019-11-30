<?php


if ( ! defined( 'ABSPATH' ) ) { exit; };


$wp_customize->add_section(
    DUMDJ_THEME_SLUG . '_social',
    array(
        'title'            => __( 'Социальные сети', DUMDJ_THEME_TEXTDOMAIN ),
        'priority'         => 10,
        'description'      => '',
        'panel'            => DUMDJ_THEME_SLUG
    )
); /**/


foreach ( array(
    'facebook'  => __( 'Facebook', DUMDJ_THEME_TEXTDOMAIN ),
    'instagram' => __( 'Instagram', DUMDJ_THEME_TEXTDOMAIN ),
    'vk'        => __( 'Вконтакте', DUMDJ_THEME_TEXTDOMAIN ),
    'twitter'   => __( 'Twitter', DUMDJ_THEME_TEXTDOMAIN ),
    'youtube'   => __( 'YouTube', DUMDJ_THEME_TEXTDOMAIN ),
) as $key => $label ) {
    $wp_customize->add_setting(
        DUMDJ_THEME_SLUG . "_social[$key]",
        array(
            'default'           => '',
            'transport'         => 'reset',
        )
    );
    $wp_customize->add_control(
        DUMDJ_THEME_SLUG . "_social[$key]",
        array(
            'section'           => DUMDJ_THEME_SLUG . '_social',
            'label'             => $label,
            'type'              => 'text',
        )
    ); /**/
}