<?php
/**
 * armata Theme Customizer
 *
 * @package armata
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function armata_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Load customize sanitize.
	include get_template_directory() . '/inc/customizer/sanitize.php';

	// Load header sections option.
	include get_template_directory() . '/inc/customizer/theme-section.php';
	
}
add_action( 'customize_register', 'armata_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function armata_customize_preview_js() {
	wp_enqueue_script( 'armata_customizer', get_template_directory_uri() . '/inc/customizer/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'armata_customize_preview_js' );
/**
 *
 */
function armata_customize_backend_scripts() {

	wp_enqueue_style( 'armata-fontawesome-all', get_template_directory_uri() . '/assets/css/all.css' );

	wp_enqueue_style( 'armata-admin-customizer-style', get_template_directory_uri() . '/inc/customizer/css/customizer-style.css' );

	wp_enqueue_script( 'armata-admin-customizer', get_template_directory_uri() . '/inc/customizer/js/customizer-script.js', array( 'jquery', 'customize-controls' ), '20151215', true );
}
add_action( 'customize_controls_enqueue_scripts', 'armata_customize_backend_scripts', 10 );