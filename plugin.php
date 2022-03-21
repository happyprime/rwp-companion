<?php
/**
 * Plugin Name:       RWP Companion
 * Plugin URI:        https://wordpress.org/plugins/rwp-companion/
 * Description:       A companion plugin for the RWP package used to publish to WordPress with R.
 * Author:            Happy Prime
 * Author URI:        https://happyprime.co
 * Version:           1.1.0
 * Requires at least: 5.9
 * Requires PHP:      7.2
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once __DIR__ . '/includes/assets.php';
require_once __DIR__ . '/includes/common.php';
require_once __DIR__ . '/includes/meta.php';
require_once __DIR__ . '/includes/template.php';
