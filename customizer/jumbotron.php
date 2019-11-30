<?php


if ( ! defined( 'ABSPATH' ) ) { exit; };


$wp_customize->add_section(
    DUMDJ_THEME_SLUG . '_jumbotron',
    array(
        'title'            => __( 'Первый экран', DUMDJ_THEME_TEXTDOMAIN ),
        'priority'         => 10,
        'description'      => 'Секция главной страницы',
        'panel'            => DUMDJ_THEME_SLUG
    )
); /**/




$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_jumbotron_flag',
    array(
        'default'           => false,
        'transport'         => 'reset'
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_jumbotron_flag',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_jumbotron',
        'label'             => __( 'Использовать секцию', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'checkbox',
    )
); /**/




$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_jumbotron_title',
    array(
        'default'           => get_bloginfo( 'name' ),
        'transport'         => 'reset',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_jumbotron_title',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_jumbotron',
        'label'             => __( 'Заголовок', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'text',
    )
); /**/





$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_jumbotron_description',
    array(
        'default'           => get_bloginfo( 'description' ),
        'transport'         => 'reset',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_jumbotron_description',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_jumbotron',
        'label'             => __( 'Поодзаголовок', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'text',
    )
); /**/




$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_jumbotron_bgi',
    array(
        'default'           => DUMDJ_THEME_URL . '/video/Scratch-that.jpg',
        'transport'         => 'reset',
        'sanitize_callback' => 'sanitize_url',
    )
);
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        DUMDJ_THEME_SLUG . '_jumbotron_bgi',
        array(
            'label'         => __( 'Фон', DUMDJ_THEME_TEXTDOMAIN ),
            'settings'      => DUMDJ_THEME_SLUG . '_jumbotron_bgi',
            'section'       => DUMDJ_THEME_SLUG . '_jumbotron'
        )
    )
);




$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_jumbotron_page_id',
    array(
        'default'           => false,
        'transport'         => 'reset',
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_jumbotron_page_id',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_jumbotron',
        'label'             => __( 'Страница с описанием', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'dropdown-pages',
    )
); /**/




$wp_customize->add_setting(
    DUMDJ_THEME_SLUG . '_jumbotron_label',
    array(
        'default'           => __( 'О нас', DUMDJ_THEME_TEXTDOMAIN ),
        'transport'         => 'reset',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    DUMDJ_THEME_SLUG . '_jumbotron_label',
    array(
        'section'           => DUMDJ_THEME_SLUG . '_jumbotron',
        'label'             => __( 'Подпись кнопки', DUMDJ_THEME_TEXTDOMAIN ),
        'type'              => 'text',
    )
); /**/


// видео

foreach ( array(
    'video/mp4',
    'video/webm',
    'video/ogg',
) as $mime_type ) {
  $wp_customize->add_setting(
      DUMDJ_THEME_SLUG . "_jumbotron_video[$mime_type]",
      array(
          'default'           => '',
          'transport'         => 'reset',
          'sanitize_callback' => 'sanitize_url',
      )
  );
  $wp_customize->add_control(
      new WP_Customize_Upload_Control(
          $wp_customize,
          DUMDJ_THEME_SLUG . "_jumbotron_video[$mime_type]",
          array(
              'label'         => __( 'Видео', DUMDJ_THEME_TEXTDOMAIN ) . ' ' . $mime_type,
              'settings'      => DUMDJ_THEME_SLUG . "_jumbotron_video[$mime_type]",
              'section'       => DUMDJ_THEME_SLUG . '_jumbotron',
              'mime_type'     => $mime_type,
          )
      )
  );  
}