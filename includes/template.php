<?php

namespace RWP\Template;

add_filter( 'body_class', __NAMESPACE__ . '\filter_body_class' );

/**
 * Filter the classes attached to the body element.
 *
 * @param array $classes A list of classes.
 * @return array A modified list of classes.
 */
function filter_body_class( $classes ) {
	if ( is_single() && \RWP\is_generated() ) {
		$classes[] = 'rwp-document';
	}

	return $classes;
}
