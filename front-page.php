<?php

if ( ! defined( 'ABSPATH' ) ) { exit; };

get_header();


if ( get_theme_mod( DUMDJ_THEME_SLUG . '_jumbotron_flag', false ) ) get_template_part( 'parts/home/jumbotron' );
if ( get_theme_mod( DUMDJ_THEME_SLUG . '_cources_flag', false ) ) get_template_part( 'parts/home/cources' );
if ( get_theme_mod( DUMDJ_THEME_SLUG . '_gallery_flag', false ) ) get_template_part( 'parts/home/gallery' );
if ( get_theme_mod( DUMDJ_THEME_SLUG . '_teachers_flag', false ) ) get_template_part( 'parts/home/teachers' );
if ( get_theme_mod( DUMDJ_THEME_SLUG . '_progress_flag', false ) ) get_template_part( 'parts/home/progress' );
if ( get_theme_mod( DUMDJ_THEME_SLUG . '_equipment_flag', false ) ) get_template_part( 'parts/home/equipment' );
if ( get_theme_mod( DUMDJ_THEME_SLUG . '_reviews_flag', false ) ) get_template_part( 'parts/home/reviews' );
if ( get_theme_mod( DUMDJ_THEME_SLUG . '_contacts_flag', false ) ) get_template_part( 'parts/home/contacts' );


get_footer();