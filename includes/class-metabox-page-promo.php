<?php



if ( ! defined( 'ABSPATH' ) ) { exit; };



class dumdjMetaboxPagePromo {



    protected $slug;



    protected $mime_types;



    function __construct() {
        $this->slug = DUMDJ_THEME_SLUG . '_page_promo';
        $this->mime_types = array(
            'video/mp4',
            'video/webm',
            'video/ogg',
        );       
    }


    public function run() {
        add_action( 'add_meta_boxes', array( $this, 'add' ) );
        add_action( 'save_post', array( $this, 'save' ) );
    }


    public function add( $post_type ) {
        if ( in_array( $post_type, array( 'page' ) ) ) add_meta_box(
            $this->slug,
            __( 'Настройки "Промо"', DUMDJ_THEME_TEXTDOMAIN ),
            array( $this, 'render_content' ),
            $post_type,
            'side',
            'high',
            null
        );
    }


    protected function check_secure( $post_id ) {
        $result = __return_true();
        if (
            ! isset( $_POST[ 'promo' ] ) ||
            ! wp_verify_nonce( $_POST[ "promo_nonce" ], $this->slug ) ||
            ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) ||
            wp_is_post_revision( $post_id )
        ) $result = __return_false();
        if ( 'page' == $_POST[ 'post_type' ] ) {
            if ( ! current_user_can( 'edit_page', $post_id ) ) return $result = __return_false();
        } elseif ( ! current_user_can( 'edit_post', $post_id ) ) {
            $result = __return_false();
        }
        return $result;
    }


    public function save( $post_id ) {
        if ( ! $this->check_secure( $post_id ) ) {
            // wp_nonce_ays( 'log-out' );
            return;
        } else {
            foreach ( $this->mime_types as $mime_type ) {
                if ( isset( $_POST[ "{$this->slug}_{$mime_type}" ] ) ) {
                    update_post_meta( $post_id, "{$this->slug}_{$mime_type}", sanitize_url( $_POST[ "{$this->slug}_{$mime_type}" ] ) );
                } else {
                    delete_post_meta( $post_id, "{$this->slug}_{$mime_type}" );
                }
            }
        }
    }


    public function render_content( $post ) {
        wp_nonce_field( DUMDJ_THEME_SLUG, 'promo_nonce' );
        wp_enqueue_media();
        $mime_types = get_theme_mod( "{$this->slug}_mime_types", array() );
        // foreach ( $this->mime_types as $key ) {
        //     if ( ! isset( $mime_types[ $key ] ) ) {
        //         $mime_types[ $key ] = '';
        //     }
        // }
        include get_theme_file_path( 'views/metabox-page-promo.php' );
    }


}