<?php
/**
 * Enqueue scripts and styles.
 */
function time_keeper_scripts() {
	wp_enqueue_style( 'time-keeper-main-style', TIME_ROOT_CSS. '/style.css', [], TIME_VERSION );
	wp_enqueue_style( 'time-keeper-main-res-style', TIME_ROOT_CSS. '/responsive.css', [], TIME_VERSION );

	wp_enqueue_style( 'time-keeper-style', get_stylesheet_uri(), [], TIME_VERSION );
	wp_style_add_data( 'time-keeper-style', 'rtl', 'replace' );

	wp_enqueue_script( 'time-keeper-navigation', TIME_ROOT_URI . '/navigation.js', [], TIME_VERSION, true );

	wp_enqueue_script( 'time-keeper-main', TIME_ROOT_URI . '/main.js', ['jquery'], TIME_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'time_keeper_scripts' );