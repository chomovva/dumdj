<?php



$title = get_theme_mod( DUMDJ_THEME_SLUG . '_jumbotron_title', get_bloginfo( 'name' ) );
$description = get_theme_mod( DUMDJ_THEME_SLUG . '_jumbotron_title', get_bloginfo( 'description' ) );
$label = get_theme_mod( DUMDJ_THEME_SLUG . '_jumbotron_label', __( 'О нас', DUMDJ_THEME_TEXTDOMAIN ) );
$permalink = ( $page_id = get_theme_mod( DUMDJ_THEME_SLUG . '_jumbotron_page_id', false ) ) ? get_permalink( $page_id ) : '#';
$bgi = get_theme_mod( DUMDJ_THEME_SLUG . '_jumbotron_bgi', DUMDJ_THEME_URL . '/images/progress/bg.jpg' );
$videos = get_theme_mod( DUMDJ_THEME_SLUG . "_jumbotron_video", array() );

include get_theme_file_path( 'views/jumbotron.php' );