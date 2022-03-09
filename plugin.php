<?php
/**
 * Plugin Name:       RWP Companion
 * Plugin URI:        https://github.com/happyprime/rwp-companion/
 * Description:       A companion plugin for the RWP package used to publish to WordPress with R.
 * Author:            Happy Prime, jeremyfelt
 * Author URI:        https://happyprime.co
 * Version:           1.0.0
 * Requires at least: 5.8
 * Requires PHP:      5.6
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// This plugin, like WordPress, requires PHP 5.6 and higher.
if ( version_compare( PHP_VERSION, '5.6', '<' ) ) {
	add_action( 'admin_notices', 'rwp_admin_notice' );
	/**
	 * Display an admin notice if PHP is not 5.6.
	 */
	function rwp_admin_notice() {
		echo '<div class=\"error\"><p>';
		echo __( 'RWP Companion requires PHP 5.6 to function properly. Please upgrade PHP or deactivate the plugin.', 'rwp-companion' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo '</p></div>';
	}

	return;
}

require_once __DIR__ . '/includes/assets.php';
require_once __DIR__ . '/includes/common.php';
require_once __DIR__ . '/includes/meta.php';
require_once __DIR__ . '/includes/template.php';
