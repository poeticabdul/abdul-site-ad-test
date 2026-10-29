<?php
/**
 * Abdul Site theme functions.
 *
 * @package abdul-site
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action(
	'after_setup_theme',
	function () {
		add_theme_support( 'wp-block-styles' );
		add_editor_style( 'style.css' );
	}
);

add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style(
			'abdul-site-style',
			get_stylesheet_uri(),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
);
