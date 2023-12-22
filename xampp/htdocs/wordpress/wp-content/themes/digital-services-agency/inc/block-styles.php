<?php
/**
 * Block Styles
 *
 * @package digital_services_agency
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function digital_services_agency_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'digital-services-agency-padding-0',
				'label' => esc_html__( 'No Padding', 'digital-services-agency' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'digital-services-agency-post-author-card',
				'label' => esc_html__( 'Theme Style', 'digital-services-agency' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'digital-services-agency-button',
				'label'        => esc_html__( 'Plain', 'digital-services-agency' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'digital-services-agency-post-comments',
				'label'        => esc_html__( 'Theme Style', 'digital-services-agency' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'digital-services-agency-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'digital-services-agency' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'digital-services-agency-wp-table',
				'label'        => esc_html__( 'Theme Style', 'digital-services-agency' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'digital-services-agency-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'digital-services-agency' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'digital-services-agency-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'digital-services-agency' ),
			)
		);
	}
	add_action( 'init', 'digital_services_agency_register_block_styles' );
}
