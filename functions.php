<?php
/**
 * Time keeper functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Time_keeper
 */

/**=======================================
 * THEME VERSION CONTROL
=======================================*/
define( 'TIME_VERSION', wp_get_theme()->get( 'Version' ) );

/**=======================================
 * DEFINE FILE FOLDER ROOT
=======================================*/
define( 'TIME_ROOT', get_template_directory() );
define( 'TIME_ROOT_URI', get_template_directory_uri() );
define( 'TIME_ROOT_CSS', TIME_ROOT_URI . '/assets/css' );
define( 'TIME_ROOT_JS', TIME_ROOT_URI . '/assets/js' );
// define( 'TIME_ROOT_IMG', TIME_ROOT_URI . '/assets/images' );
// define( 'TIME_ROOT_FONTS', TIME_ROOT_URI . '/assets/fonts' );

/**======================================
 * ADD THEME AFTER SETUP FUNCTIONALITY
=======================================*/
if ( file_exists( TIME_ROOT . '/inc/setup.php' ) ) {
	require_once TIME_ROOT . '/inc/setup.php';
}

/**==============================
 * Enqueue scripts and styles.
===============================*/
if ( file_exists( TIME_ROOT . '/inc/scripts.php' ) ) {
	require_once TIME_ROOT . '/inc/scripts.php';
}

/**======================================
 * Codestar framework.
======================================*/
if ( file_exists( TIME_ROOT . '/inc/csf/codestar-framework.php' ) ) {
	require_once TIME_ROOT . '/inc/csf/codestar-framework.php';
}

/**======================================
 * Codestar framework Custom Option.
======================================*/
if ( file_exists( TIME_ROOT . '/inc/csf_customize/codestar.php' ) ) {
	require_once TIME_ROOT . '/inc/csf_customize/codestar.php';
}

/**======================================
 * Custom Functions.
======================================*/
// if ( file_exists( TIME_ROOT . '/inc/custom-functions.php' ) ) {
// 	require_once TIME_ROOT . '/inc/custom-functions.php';
// }

/**==============================================================
 * TGM plugin installer.
==============================================================*/
// if ( file_exists( TIME_ROOT . '/inc/installer.php' ) ) {
// 	require_once TIME_ROOT . '/inc/installer.php';
// }

/**============================
 * Customizer additions.
============================*/
if ( file_exists( TIME_ROOT . '/inc/customizer.php' ) ) {
	require_once TIME_ROOT . '/inc/customizer.php';
}

/**=====================================
 * Load Jetpack compatibility file.
=====================================*/
if ( defined( 'JETPACK__VERSION' ) ) {
	require TIME_ROOT . '/inc/jetpack.php';
}


// /**
//  * Custom template tags for this theme.
//  */
require get_template_directory() . '/inc/template-tags.php';

// /**
//  * Functions which enhance the theme by hooking into WordPress.
//  */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
