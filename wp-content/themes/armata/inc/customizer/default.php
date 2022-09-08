<?php
/**
 * Default theme options.
 *
 * @package armata
 */

if ( ! function_exists( 'armata_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
function armata_get_default_theme_options() {

	$defaults = array();

	// Theme Options
	$defaults['layout_options_blog']					= 'no-sidebar';
	$defaults['layout_options_archive']					= 'no-sidebar';
	$defaults['layout_options_page']					= 'no-sidebar';	
	$defaults['layout_options_single']					= 'right-sidebar';	
	$defaults['excerpt_length']							= 8;
	$defaults['show_blog_posts_title']		    		= 'title-enable';
	$defaults['show_blog_posts_content']				= 'content-enable';
	$defaults['show_blog_posts_image']		    		= 'image-enable';
	$defaults['show_blog_posts_comment']				= 'comment-enable';
	$defaults['show_blog_posts_posted_ago']		    	= 'posted-ago-enable';

	//Footer section 		
	$defaults['copyright_text']							= esc_html__( '&copy; Copyright 2022 armata. All Rights Reserved.', 'armata' );

	// Pass through filter.
	$defaults = apply_filters( 'armata_filter_default_theme_options', $defaults );
	return $defaults;
}

endif;

/**
*  Get theme options
*/
if ( ! function_exists( 'armata_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function armata_get_option( $key ) {

		$default_options = armata_get_default_theme_options();
		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;