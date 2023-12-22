<?php
/**
 * Digital Services Agency functions and definitions
 *
 * @package digital_services_agency
 * @since 1.0
 */

if ( ! function_exists( 'digital_services_agency_support' ) ) :
	function digital_services_agency_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}
endif;

add_action( 'after_setup_theme', 'digital_services_agency_support' );

if ( ! function_exists( 'digital_services_agency_styles' ) ) :
	function digital_services_agency_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'digital-services-agency-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'digital_services_agency_styles' );

function digital_services_agency_google_fonts() {
 
	wp_enqueue_style( 'archivo', 'https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap', false ); 
}

add_action( 'wp_enqueue_scripts', 'digital_services_agency_google_fonts' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';