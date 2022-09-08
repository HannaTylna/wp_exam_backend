<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package armata
 */
/**
* Hook - armata_action_doctype.
*
* @hooked armata_doctype -  10
*/
do_action( 'armata_action_doctype' );
?>
<head>
<?php
/**
* Hook - armata_action_head.
*
* @hooked armata_head -  10
*/
do_action( 'armata_action_head' );
?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<?php

/**
* Hook - armata_action_before.
*
* @hooked armata_page_start - 10
*/
do_action( 'armata_action_before' );

/**
*
* @hooked armata_header_start - 10
*/
do_action( 'armata_action_before_header' );

/**
*
*@hooked armata_site_branding - 10
*@hooked armata_header_end - 15 
*/
do_action('armata_action_header');

/**
*
* @hooked armata_content_start - 10
*/
do_action( 'armata_action_before_content' );

/**
 * Banner start
 * 
 * @hooked armata_banner_header - 10
*/
do_action( 'armata_banner_header' );  
