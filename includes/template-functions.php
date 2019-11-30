<?php


if ( ! defined( 'ABSPATH' ) ) { exit; };





function dumdj_theme_empty_values_of_associative_array( array $array ) {
    if ( array() === $array ) {
        return empty( $array );
    } else {
        foreach ( $array as $key => $value ) {
            if ( ! empty( $value ) ) {
                return true;
            }
        }
    }
    return true;
}




if ( ! function_exists( 'dumdj_theme_get_categories_array' ) ) {
    function dumdj_theme_get_categories_array() {
        $result = __return_empty_array();
        $categories = get_categories( array(
            'taxonomy'     => 'category',
            'type'         => 'post',
            'child_of'     => 0,
            'parent'       => '',
            'orderby'      => 'name',
            'order'        => 'ASC',
            'hide_empty'   => 0,
            'hierarchical' => 1,
            'number'       => 0,
            'pad_counts'   => false,
            'fields'       => 'id=>name',
        ) );
        if ( is_array( $categories ) && ! empty( $categories ) ) {
            $result = array_merge(
                array( ''  => __( 'Не выбрано', DUMDJ_THEME_TEXTDOMAIN ) ),
                $categories
            );
        }
        return $result;
    }
}





if ( ! function_exists( 'dumdj_theme_render_socials_list' ) ) {
    function dumdj_theme_render_socials_list( $args ) {
        $args = wp_parse_args( $args, array(
            'container'        => 'ul',
            'container_class'  => '',
            'item'             => 'li',
            'links'            => array(),
        ) );
        $result = __return_empty_array();
        if ( is_array( $args[ 'links' ] ) && ! empty( $args[ 'links' ] ) ) {
            foreach ( $args[ 'links' ] as $key => $link ) {
                if ( ! empty( $link ) ) $result[] = sprintf(
                    '<%1$s><a class="%2$s" href="%3$s"><span class="sr-only">%2$s</span></a></%1$s>',
                    $args[ 'item' ],
                    $key,
                    esc_attr( $value )
                );
            }
        }
        return ( empty( $result ) ) ? '' : sprintf(
            '<%1$s class="%2$s social">%3$s</%1$s>',
            $args[ 'container' ],
            $args[ 'container_class' ],
            implode( "\r\n", $result )
        );
    }
}





function dumdj_theme_the_breadcrumbs() {
    ob_start();
    if ( function_exists( 'yoast_breadcrumb' ) ) {
        yoast_breadcrumb();
    } else {
        if ( ! is_front_page() ) {
            echo '<a href="';
            echo home_url();
            echo '">'.__( 'Главная', DUMDJ_THEME_TEXTDOMAIN );
            echo "</a> » ";
            if ( is_category() || is_single() ) {
                the_category(' ');
                if ( is_single() ) {
                    echo " » ";
                    the_title();
                }
            } elseif ( is_page() ) {
                echo the_title();
            }
        }
        else {
            echo __( 'Домашняя страница', DUMDJ_THEME_TEXTDOMAIN );
        }
    }
    $result = ob_get_contents();
    ob_end_clean();
    if ( ! empty( $result ) ) {
        echo '<div id="breadcrumbs" class="breadcrumbs">';
        echo $result;
        echo '</div>';
    }
}






if ( ! function_exists( 'dumdj_theme_the_pageheader' ) ) {
    function dumdj_theme_the_pageheader() {
        if ( is_archive() ) {
            $title = get_the_archive_title();
            $excerpt = get_the_archive_description();
            $term = get_queried_object();
            $thumbnail_id = get_term_meta( $term->term_id, DUMDJ_THEME_SLUG . '_thumbnail', true );
        } else {
            $title = get_the_title();
            $excerpt = ( has_excerpt( get_the_ID() ) ) ? get_the_excerpt( get_the_ID() ) : false;
            $thumbnail_id = ( has_post_thumbnail( get_the_ID() ) ) ? get_post_thumbnail_id( get_the_ID() ) : false;
        }
        include get_theme_file_path( 'views/pageheader.php' );
    }
}








if ( ! function_exists( 'dumdj_theme_the_pager' ) ) {
    function dumdj_theme_the_pager() {
        ob_start();
        foreach ( array(
            'previous'  => get_previous_post(),
            'next'      => get_next_post(),
        ) as $key => $entry ) {
            if ( $entry && ! is_wp_error( $entry ) ) {
                include get_theme_file_path( 'views/adjacent-post.php' );
            }
        }
        $content = ob_get_contents();
        if ( ! empty( $content ) ) {
            echo '<nav class="pager">' . $content . '</nav>';
        }
    }
}





if ( ! function_exists( 'dumdj_theme_render_tmpl' ) ) {
    function dumdj_theme_render_tmpl( $id, $path ) {
        if ( file_exists( $path ) ) printf(
            '<script type="text/html" id="tmpl-%1$s">%2$s</script>',
            $id,
            file_get_contents( $path )
        );
    }
}






if ( ! function_exists( 'dumdj_theme_get_contacts_links' ) ) {
    function dumdj_theme_get_contacts_links( $value, $key = '', $args = array() ) {
        $result = __return_empty_array();
        $args = wp_parse_args( $args, array(
            'before'    => '',
            'after'     => '',
            'separator' => ','
        ) );
        if ( in_array( $key, array( 'phone', 'tel', 'email' ) ) ) {
            switch ( $key ) {
                case 'phone':
                case 'tel':
                    # code...
                    break;
                case 'email':
                    $items = wp_parse_list( $value );
                    break;
                
                default:
                    # code...
                    break;
            }
        } else {
            $result[] = $value;
        }
        return implode( "\r\n", $result );
    }
}




if ( ! function_exists( 'dumdj_theme_sanitize_emails_list' ) ) {
    function dumdj_theme_sanitize_emails_list( $value ) {
        $result = array_filter( map_deep( wp_parse_list( $value ), 'sanitize_email' ), 'is_email' );
        return ( is_array( $result ) ) ? implode( ", ", $result ) : '';
    }
}