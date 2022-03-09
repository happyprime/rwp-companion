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
			wp_enqueue_style( 'bootstrap', plugin_dir_url( __DIR__ ) . 'assets/rmarkdown/tables.css', array(), null );
			wp_enqueue_script( 'bootstrap', plugin_dir_url( __DIR__ ) . 'assets/rmarkdown/bootstrap.min.js', array( 'jquery' ), null, true );
			wp_enqueue_script( 'tabsets', plugin_dir_url( __DIR__ ) . 'assets/rmarkdown/tabsets.js', array(), null, true );
		}
	}
}
