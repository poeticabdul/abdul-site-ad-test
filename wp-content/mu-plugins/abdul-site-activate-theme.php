<?php
/**
 * Plugin Name: Abdul Site – Activate Theme
 * Description: Ensures the Abdul Site theme is active on first load.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action(
	'init',
	function () {
		if ( 'abdul-site' !== get_stylesheet() && wp_get_theme( 'abdul-site' )->exists() ) {
			switch_theme( 'abdul-site' );
		}
	}
);
