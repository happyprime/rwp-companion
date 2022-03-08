<?php

namespace RWP\Meta;

add_action( 'init', __NAMESPACE__ . '\register_meta' );

/**
 * Register the meta used by RWP.
 */
function register_meta() {
	// Track whether the post was created with the RWP package.
	register_meta(
		'post',
		'rwp_generated',
		array(
				'object_subtype'    => 'post',
				'type'              => 'boolean',
				'single'            => true,
				'show_in_rest'      => true,
		)
	);
}
