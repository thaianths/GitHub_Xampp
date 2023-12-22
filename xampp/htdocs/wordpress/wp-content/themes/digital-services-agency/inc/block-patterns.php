<?php
/**
 * Block Patterns
 *
 * @package digital_services_agency
 * @since 1.0
 */

function digital_services_agency_register_block_patterns() {
	$block_pattern_categories = array(
		'digital-services-agency' => array( 'label' => esc_html__( 'Digital Services Agency', 'digital-services-agency' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'digital-services-agency' ) ),
	);

	$block_pattern_categories = apply_filters( 'digital_services_agency_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'digital_services_agency_register_block_patterns', 9 );