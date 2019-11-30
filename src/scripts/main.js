// мобильное меню
jQuery( document ).ready( function() {
	var $nav = jQuery( '#mobilenav' ),
			$body = jQuery( 'body' ),
			$open = jQuery( '#mobilenav-open' ),
			$close = jQuery( '#mobilenav-close' );
	$open.click( function () {
		$nav.addClass( 'active' );
		$body.css( { overflow: 'hidden' } );
		$open.css( { opacity: 0 } );
	} );
	$close.click( function () {
		$nav.removeClass( 'active' );
		$body.css( { overflow: 'auto' } );
		$open.css( { opacity: 1 } );
	} );
} );




// кнопка навверх
jQuery( document ).ready( function () {
  var $w = jQuery( window ),
    $toTopBtn = jQuery( '<button>', {
      class: 'to-top-button',
      id: 'toTopBtn',
      title: dumtheme.toTopBtn,
    } ).appendTo( jQuery( 'body' ) );
  function _btnHide() {
    if ( $w.scrollTop() > screen.height * 0.5) {
      $toTopBtn.show();
    } else {
      $toTopBtn.hide();
    }
  }
  function _toTopBtnClick() {
    jQuery( 'body, html' ).animate( {
      scrollTop: 0
    }, 500 );
    return false;
  }
  _btnHide();
  $w.bind( 'scroll', _btnHide );
  $toTopBtn.bind( 'click', _toTopBtnClick );
} );




( function() {
  var $w = jQuery( window ),
      $items = jQuery( '.progress .progress__item.item' );


  $items.each( function( index, element ) {
    var $item = jQuery( element );
    $item.attr( 'data-percent', $item.find( '.percent' ).text() );
    $item.attr( 'data-calc', '0' )
    $item.find( '.percent' ).text( '0' );
  } );
  $w.bind( 'scroll', scroll );

  function calc( element, current ) {
    if ( current < jQuery( element ).attr( 'data-percent' ) ) {
      current = current + 1;
      jQuery( element ).find( '.percent' ).text( current );
      setTimeout( function() {
        calc( element, current );
      }, 25 );
    }
  }

  function scroll() {
    var scroll = $w.scrollTop();
    $items.each( function( index, element ) {
      var $item = jQuery( element ),
          position = $item.offset().top;
      if (
          ( $item.attr( 'data-calc' ) == '0' ) &&
          ( scroll + document.documentElement.clientHeight > position + $item.height() ) &&
          ( scroll < position )
        ) {
        $item.attr( 'data-calc', '1' );
        calc( element, 0 );
      }
    } );
  }

} )();