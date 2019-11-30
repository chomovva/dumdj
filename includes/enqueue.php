<?php



if ( ! defined( 'ABSPATH' ) ) { exit; };





/**
 * Подключение скриптов
 *
 * @param string $handle Имя / идентификатор скрипта
 * @param string $src URL на файл скрипта
 * @param array $deps массив зависимостей
 * @param string|bool $ver версия
 * @param bool $in_footer подключать в шапке или подвале
 */
function theme_dumdj_scripts() {
	wp_enqueue_script( 'dumdj-theme-main', DUMDJ_THEME_URL . 'scripts/main.min.js', array( 'jquery', 'fancybox' ), DUMDJ_THEME_VERSION, true );
	wp_localize_script( 'dumdj-theme-main', 'dumtheme', array( 'toTopBtn' => 'Наверх' ) );
	wp_enqueue_script( 'lazyload', DUMDJ_THEME_URL . 'scripts/lazyload.min.js', array( 'jquery' ), '1.7.6', true );
	wp_enqueue_script( 'fancybox', DUMDJ_THEME_URL . 'scripts/fancybox.min.js', array( 'jquery' ), '3.3.5', true );
	wp_add_inline_script( 'fancybox', "jQuery( '.fancybox' ).fancybox();", 'after' );
	wp_add_inline_script( 'lazyload', "jQuery( '.lazy' ).lazy();", 'after' );
	wp_enqueue_script( 'superembed', DUMDJ_THEME_URL . 'scripts/superembed.min.js', array( 'jquery' ), '3.1', true );
	wp_register_script( 'slick', DUMDJ_THEME_URL . 'scripts/slick.min.js', array( 'jquery' ), '1.8.0', true );
	wp_register_script( 'jquery.background-video', DUMDJ_THEME_URL . 'scripts/jquery.background-video.min.js', array( 'jquery' ), '1.1.0', true );
	wp_add_inline_script( 'jquery.background-video', "jQuery( '.bg-video' ).bgVideo();", 'after' );
}
add_action( 'wp_enqueue_scripts', 'theme_dumdj_scripts' );









/**
 * Подключение стилей
 *
 * @param string $handle Имя / идентификатор стиля
 * @param string $src URL на файла стиля
 * @param array $deps массив зависимостей
 * @param string|bool $ver версия
 * @param string $media для каких устройств подключать
 */
function theme_dumdj_styles() {
	wp_enqueue_style( 'dumdj-theme-main', DUMDJ_THEME_URL . 'styles/main.min.css', array(), DUMDJ_THEME_VERSION, 'all' );
	wp_register_style( 'jquery.background-video', DUMDJ_THEME_URL . 'styles/jquery.background-video.min.css', array(), '1.1.0', 'all' );
	wp_enqueue_style( 'slick', DUMDJ_THEME_URL . 'styles/slick.min.css', array(), '1.8.0', 'all' );
	wp_enqueue_style( 'fancybox', DUMDJ_THEME_URL . 'styles/fancybox.min.css', array(), '3.3.5', 'all' );
}
add_action( 'wp_enqueue_scripts', 'theme_dumdj_styles', 10, 0 );






function themedumdj_ctitical_styles() {
	if ( file_exists( DUMDJ_THEME_DIR . 'styles/critical.min.css' ) ) {
		echo '<style type="text/css">' . file_get_contents( DUMDJ_THEME_DIR . 'styles/critical.min.css' ) . '</style>';
	}
}
add_action( 'wp_head', 'themedumdj_ctitical_styles', 10, 0 );