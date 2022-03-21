<?php

namespace RWP\Assets;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );

/**
 * Enqueue the assets used for a specific page view.
 */
function enqueue_assets() {

	if ( is_single() ) {
		$rwp_tabset = get_post_meta( get_queried_object_id(), 'rwp_tabset', true );

		// This view expects tabset handling to be loaded.
		if ( $rwp_tabset ) {
			wp_enqueue_style( 'bootstrap', plugin_dir_url( __DIR__ ) . 'assets/rmarkdown/tables.css', array(), null ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion

			$asset_data = require_once dirname( __DIR__ ) . '/build/tabsets.asset.php';

			wp_enqueue_script(
				'tabsets',
				plugin_dir_url( __DIR__ ) . 'build/tabsets.js',
				$asset_data['dependencies'],
				$asset_data['version'],
				true
			);
		}
	}
}
