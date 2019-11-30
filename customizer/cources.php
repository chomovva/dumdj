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



$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_cources_page_id',
    array(
        'default'           => '',
        'transport'         => 'reset'
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_cources_page_id',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_cources',
        'label'             => __( 'Родительская страница', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'dropdown-pages',
    )
); /**/



$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_cources_number',
    array(
        'default'           => '4',
        'transport'         => 'reset'
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_cources_number',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_cources',
        'label'             => __( 'Ограничение по количеству выводимых страниц', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'number',
        'input_attrs'       => array(
            'min'             => '1',
            'max'             => '16',
        ),
    )
); /**/
