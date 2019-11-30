<label for=""><?php _e( 'Использовать блок с видео', DUMDJ_THEME_TEXTDOMAIN ); ?></label>
<input type="checkbox" value="on" <?php checked( $block_flat, 'on', true ); ?>>

<label for=""><?php _e( 'Заголовок', DUMDJ_THEME_TEXTDOMAIN ); ?></label>


<label for=""><?php _e( 'Подзаголовок', DUMDJ_THEME_TEXTDOMAIN ); ?></label>


<label for=""><?php _e( 'Страница с описанием', DUMDJ_THEME_TEXTDOMAIN ); ?></label>


<label for=""><?php _e( 'Текст кнопки', DUMDJ_THEME_TEXTDOMAIN ); ?></label>



<div class="pstu_wrap">
        <div class="form-group">
            <img class="img-responsive center-block img-bordered" data-default-src="<?php echo $default; ?>" id="pstu_bgi_image" src="<?php echo $src; ?>">
        </div>
    <div class="form-group">
      <input type="hidden" name="pstu_bgi" id="pstu_bgi_field" value="<?php echo $value; ?>" />
      <div class="clearfix">
        <button type="button" role="button" id="pstu_bgi_remove_image_btn" class="pull-right btn btn-danger"><?php _e( 'Удалить', 'pstu-next-theme' ); ?></button>
        <button type="button" role="button" id="pstu_bgi_upload_image_btn" class="pull-left btn btn-default"><?php _e( 'Установить', 'pstu-next-theme' ); ?></button>
      </div>
    </div>
</div>
<script>
    jQuery( function( $ ) {
            jQuery( '#pstu_bgi_upload_image_btn' ).click( function () {
                var send_attachment_bkp = wp.media.editor.send.attachment;
                var button = jQuery( this );
                wp.media.editor.send.attachment = function( props, attachment ) {
                    jQuery( '#pstu_bgi_image' ).attr( 'src', attachment.url );
                    jQuery( '#pstu_bgi_field' ).val( attachment.id );
                    wp.media.editor.send.attachment = send_attachment_bkp;
                }
                wp.media.editor.open( button );
                return false;
            } );
            jQuery( '#pstu_bgi_remove_image_btn' ).click( function () {
                var r = confirm( "Уверены?" );
                if ( r == true ) {
                    var src = jQuery( '#pstu_bgi_image' ).attr( 'data-default-src' );
                    jQuery( '#pstu_bgi_image' ).attr( 'src', src );
                    jQuery( '#pstu_bgi_field' ).val( '' );
                }
                return false;
            } );
        } );
</script>