<?php



if ( ! defined( 'ABSPATH' ) ) { exit; };



$wp_customize->add_section(
    DUMDJ_THEME_SLUG . '_contacts',
    array(
        'title'            => __( 'Контакты', DUMDJ_THEME_TEXTDOMAIN ),
        'priority'         => 10,
        'description'      => __( 'Секция главной страницы', DUMDJ_THEME_TEXTDOMAIN ),
        'panel'            => DUMDJ_THEME_SLUG
    )
); /**/



$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_contacts_flag',
    array(
        'default'           => false,
        'transport'         => 'reset'
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_contacts_flag',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_contacts',
        'label'             => __( 'Использовать секцию', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'checkbox',
    )
); /**/



$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_contacts_title',
    array(
        'default'           => __( 'Контакты', DUMDJ_THEME_TEXTDOMAIN ),
        'transport'         => 'reset',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_contacts_title',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_contacts',
        'label'             => __( 'Заголовок секции', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'text',
    )
); /**/



$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_contacts_modal_label',
    array(
        'default'           => __( 'Напишите нам', DUMDJ_THEME_TEXTDOMAIN ),
        'transport'         => 'reset',
        'sanitize_callback' => 'strip_tags',
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_contacts_modal_label',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_contacts',
        'label'             => __( 'Текст кнопки', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'text',
    )
); /**/



$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_contacts_modal_content',
    array(
        'default'           => '',
        'transport'         => 'reset',
        'sanitize_callback' => 'sanitize_textarea_field',
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_contacts_modal_content',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_contacts',
        'label'             => __( 'Содержимое модального окна', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'textarea',
    )
); /**/



$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_contacts_bgi',
    array(
        'default'           => DUMDJ_THEME_URL . '/images/contacts/bg.jpg',
        'transport'         => 'reset',
        'sanitize_callback' => 'sanitize_url',
    )
);
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        DUMDJ_THEME_SLUG . '_contacts_bgi',
        array(
            'label'         => __( 'Фон', DUMDJ_THEME_TEXTDOMAIN ),
            'settings'      => DUMDJ_THEME_SLUG . '_contacts_bgi',
            'section'       => DUMDJ_THEME_SLUG . '_contacts'
        )
    )
);


/**
 * Адрес, телефон, email
 */


foreach ( array(
    'phone'    => __( 'Телефон', DUMDJ_THEME_TEXTDOMAIN ),
    'email'    => __( 'Email', DUMDJ_THEME_TEXTDOMAIN ),
    'address'  =>  __( 'Адрес', DUMDJ_THEME_TEXTDOMAIN ),
) as $key => $label ) {
    $wp_customize->add_setting(
        DUMDJ_THEME_SLUG . "_contacts_items[$key]",
        array(
            'default'           => '',
            'transport'         => 'reset',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        DUMDJ_THEME_SLUG . "_contacts_items[$key]",
        array(
            'section'           => DUMDJ_THEME_SLUG . '_contacts',
            'label'             => $label,
            'type'              => 'text',
        )
    );
}