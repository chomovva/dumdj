<?php


if ( ! defined( 'ABSPATH' ) ) { exit; };


$wp_customize->add_section(
    DUMDJ_THEME_SLUG . '_cources',
    array(
        'title'            => __( 'Курсы', DUMDJ_THEME_TEXTDOMAIN ),
        'priority'         => 10,
        'description'      => __( 'Секция главной страницы', DUMDJ_THEME_TEXTDOMAIN ),
        'panel'            => DUMDJ_THEME_SLUG
    )
); /**/



$wp_customize->add_setting(
    "{$slug}_cources_heading",
    array(
        'default'           => __( 'Курсы', DUMDJ_THEME_TEXTDOMAIN ),
        'transport'         => 'reset'
    )
);
$wp_customize->add_control(
    "{$slug}_cources_heading",
    array(
        'section'           => "{$slug}_cources",
        'label'             => __( 'Название секции', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'text',
    )
); /**/



$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_cources_flag',
    array(
        'default'           => false,
        'transport'         => 'reset'
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_cources_flag',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_cources',
        'label'             => __( 'Использовать секцию', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'checkbox',
    )
); /**/



for ( $i=0; $i<4; $i++ ) { 
    $wp_customize->add_setting(
        "{$slug}_cources[{$i}][title]",
        array(
            'default'           => '',
            'transport'         => 'reset',
        )
    );
    $wp_customize->add_control(
        "{$slug}_cources[{$i}][title]",
        array(
            'section'           => "{$slug}_cources",
            'label'             => sprintf( __( 'Заголовок %1$s', DUMDJ_THEME_TEXTDOMAIN ), ( $i + 1 ) ),
            'type'              => 'text',
        )
    ); /**/
    $wp_customize->add_setting(
        "{$slug}_cources[{$i}][excerpt]",
        array(
            'default'           => '',
            'transport'         => 'reset',
        )
    );
    $wp_customize->add_control(
        "{$slug}_cources[{$i}][excerpt]",
        array(
            'section'           => "{$slug}_cources",
            'label'             => sprintf( __( 'Подзаголовок %1$s', DUMDJ_THEME_TEXTDOMAIN ), ( $i + 1 ) ),
            'type'              => 'text',
        )
    ); /**/
    $wp_customize->add_setting(
        "{$slug}_cources[{$i}][page_id]",
        array(
            'default'           => '',
            'transport'         => 'reset',
        )
    );
    $wp_customize->add_control(
        "{$slug}_cources[{$i}][page_id]",
        array(
            'section'           => "{$slug}_cources",
            'label'             => sprintf( __( 'Страница %1$s', DUMDJ_THEME_TEXTDOMAIN ), ( $i + 1 ) ),
            'type'              => 'dropdown-pages',
        )
    ); /**/
    $wp_customize->add_setting(
        "{$slug}_cources[{$i}][label]",
        array(
            'default'           => '',
            'transport'         => 'reset',
        )
    );
    $wp_customize->add_control(
        "{$slug}_cources[{$i}][label]",
        array(
            'section'           => "{$slug}_cources",
            'label'             => sprintf( __( 'Текст кнопки %1$s', DUMDJ_THEME_TEXTDOMAIN ), ( $i + 1 ) ),
            'type'              => 'text',
        )
    ); /**/
}