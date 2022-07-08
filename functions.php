<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wonder
 * @since 1.0.0
 */

if ( ! defined( 'WONDER_VERSION' ) ) {
	define( 'WONDER_VERSION', wp_get_theme()->get( 'Version' ) );
}

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
function wonder_styles() {
	wp_enqueue_style(
		'wonder-style',
		get_stylesheet_uri(),
		array(),
		WONDER_VERSION
	);
	wp_enqueue_style(
		'general-block-style',
		get_theme_file_uri( 'assets/css/general-block-style.css' ),
		array(),
		WONDER_VERSION
	);
	wp_enqueue_style(
		'registered-block-style',
		get_theme_file_uri( 'assets/css/registered-block-styles.css' ),
		array(),
		WONDER_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'wonder_styles' );


if ( ! function_exists( 'wonder_theme_setup' ) ) {
	/**
	 * Theme support declarations
	 */
	function wonder_theme_setup() {
		add_theme_support( 'wp-block-styles' );
		add_editor_style( './assets/css/general-block-style.css' );
		add_editor_style( './assets/css/registered-block-styles.css' );
	}
	add_action( 'after_setup_theme', 'wonder_theme_setup' );
}

/**
 * Enable again the customizer
 */
add_action( 'customize_register', '__return_true' );

// Block patterns.
require_once get_theme_file_path( 'inc/register-block-patterns.php' );

// Block styles.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// WooCommerce.
if ( class_exists( 'woocommerce' ) ) {
	require_once get_theme_file_path( 'inc/woocommerce.php' );
}
