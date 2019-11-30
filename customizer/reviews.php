<?php


if ( ! defined( 'ABSPATH' ) ) { exit; };


$wp_customize->add_section(
    DUMDJ_THEME_SLUG . '_reviews',
    array(
        'title'            => __( 'Отзывы', DUMDJ_THEME_TEXTDOMAIN ),
        'priority'         => 10,
        'description'      => __( 'Секция главной страницы', DUMDJ_THEME_TEXTDOMAIN ),
        'panel'            => DUMDJ_THEME_SLUG
    )
); /**/



$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_reviews_flag',
    array(
        'default'           => false,
        'transport'         => 'reset'
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_reviews_flag',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_reviews',
        'label'             => __( 'Использовать секцию', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'checkbox',
    )
); /**/



$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_reviews_category_id',
    array(
        'default'           => '',
        'transport'         => 'reset'
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_reviews_category_id',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_reviews',
        'label'             => __( 'Родительская категория', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'select',
        'choices'           => dumdj_theme_get_categories_array()
    )
); /**/



$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_reviews_number',
    array(
        'default'           => '3',
        'transport'         => 'reset'
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_reviews_number',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_reviews',
        'label'             => __( 'Ограничение по количеству выводимых постов', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'number',
        'input_attrs'       => array(
            'min'             => '1',
            'max'             => '16',
        ),
    )
); /**/
