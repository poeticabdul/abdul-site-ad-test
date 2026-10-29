<?php
/**
 * VIP config file. Loaded early, before WordPress, on every request.
 * Use for constants and environment-specific configuration.
 *
 * @see https://docs.wpvip.com/wordpress-skeleton/vip-config-directory/
 */

if ( ! defined( 'VIP_GO_APP_ENVIRONMENT' ) ) {
	define( 'VIP_GO_APP_ENVIRONMENT', 'local' );
}
