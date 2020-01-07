<?php



if ( ! defined( 'ABSPATH' ) ) { exit; };


$heading = get_theme_mod( "{$slug}_cources_heading", __( 'Курсы', DUMDJ_THEME_TEXTDOMAIN ) );
$cources = get_theme_mod( "{$slug}_cources", __return_empty_array() );
$section_name = 'cources';


if ( is_array( $entries ) && ! empty( $entry ) ) {

    for ( $i=0;  $i<4;  $i++ ) { 
        $title = $cources[ $i ][ 'title' ];
        $excerpt = $cources[ $i ][ 'excerpt' ];
        $label = $cources[ $i ][ 'label' ];
        $bgc = $cources[ $i ][ 'bgc' ];
        $page_id = $cources[ $i ][ 'page_id' ];
        $permalink = get_permalink( $page_id );
        include get_theme_file_path( 'views/home/cource.php' );
    }

}