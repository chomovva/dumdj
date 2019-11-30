<?php if ( ! defined( 'ABSPATH' ) ) { exit; }; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php echo get_bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <nav class="mobilenav" id="mobilenav">
      <div class="container">
        <div class="text-right">
          <button class="mobilenav__close close" id="mobilenav-close"></button>
        </div>
      </div>
    </nav>
    <div class="wrapper" id="wrapper">
      <header class="wrapper__item wrapper__item--header header">
        <div class="container">
          <a class="header__bloginfo bloginfo" href="<?php echo home_url( '/' ); ?>">
            <?php echo get_theme_mod( DUMDJ_THEME_SLUG . 'blog_logo', '' ); ?>
            <div class="bloginfo__name name"><?php bloginfo( 'name' ); ?></div>
          </a>
          <nav class="header__nav nav">
            <?php
              wp_nav_menu( array(
                'theme_location'  => 'menu_main',
                'menu'            => 'menu_main',
                'container'       => false,  
                'menu_class'      => 'nav__list list', 
                'menu_id'         => 'main-menu',
                'echo'            => true,
                'depth'           => 1,
              ) );
            ?>
          </nav>
          <button class="header__burger burger" id="mobilenav-open">
            <div class="sr-only"><?php _e( 'Открыть меню', DUMDJ_THEME_TEXTDOMAIN ); ?></div>
            <svg x="0px" y="0px" viewBox="0 0 73.168 73.168" style="enable-background:new 0 0 73.168 73.168;" xml:space="preserve">
              <path d="M4.242,14.425h64.684c2.344,0,4.242-1.933,4.242-4.324c0-2.385-1.898-4.325-4.242-4.325H4.242     C1.898,5.776,0,7.716,0,10.101C0,12.493,1.898,14.425,4.242,14.425z M68.926,32.259H4.242C1.898,32.259,0,34.2,0,36.584     c0,2.393,1.898,4.325,4.242,4.325h64.684c2.344,0,4.242-1.933,4.242-4.325C73.168,34.2,71.27,32.259,68.926,32.259z      M68.926,58.742H4.242C1.898,58.742,0,60.683,0,63.067c0,2.393,1.898,4.325,4.242,4.325h64.684c2.344,0,4.242-1.935,4.242-4.325     C73.168,60.683,71.27,58.742,68.926,58.742z" data-original="#000000" fill="#eee"></path>
            </svg>
          </button>
        </div>
      </header>
      <main class="wrapper__item wrapper__item--main main" id="main">