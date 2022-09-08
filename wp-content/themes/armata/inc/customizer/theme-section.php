<?php
/**
 * Theme Options.
 *
 * @package armata
 */

$default = armata_get_default_theme_options();

// Add Panel.
$wp_customize->add_panel( 'theme_option_panel',
	array(
	'title'      => __( 'Theme Options', 'armata' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

// Sidebar Layout
$wp_customize->add_section('section_sidebar_layout', array(    
	'title'       => __('Sidebar Layout', 'armata'),
	'panel'       => 'theme_option_panel'    
));

// Blog Layout
$wp_customize->add_setting('theme_options[layout_options_blog]', 
	array(
	'default' 			=> $default['layout_options_blog'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'armata_sanitize_select'
	)
);

$wp_customize->add_control(new armata_Image_Radio_Control($wp_customize, 'theme_options[layout_options_blog]', 
	array(		
	'label' 	=> __('Blog Layout', 'armata'),
	'section' 	=> 'section_sidebar_layout',
	'settings'  => 'theme_options[layout_options_blog]',
	'type' 		=> 'radio-image',
	'choices' 	=> array(		
		'left-sidebar' 	=> get_template_directory_uri() . '/assets/images/left-sidebar.png',						
		'right-sidebar' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
		'no-sidebar' 	=> get_template_directory_uri() . '/assets/images/no-sidebar.png',
		),	
	))
);

// Archive Layout
$wp_customize->add_setting('theme_options[layout_options_archive]', 
	array(
	'default' 			=> $default['layout_options_archive'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'armata_sanitize_select'
	)
);

$wp_customize->add_control(new armata_Image_Radio_Control($wp_customize, 'theme_options[layout_options_archive]', 
	array(		
	'label' 	=> __('Archive Layout', 'armata'),
	'section' 	=> 'section_sidebar_layout',
	'settings'  => 'theme_options[layout_options_archive]',
	'type' 		=> 'radio-image',
	'choices' 	=> array(		
		'left-sidebar' 	=> get_template_directory_uri() . '/assets/images/left-sidebar.png',						
		'right-sidebar' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
		'no-sidebar' 	=> get_template_directory_uri() . '/assets/images/no-sidebar.png',
		),	
	))
);


// Page Layout
$wp_customize->add_setting('theme_options[layout_options_page]', 
	array(
	'default' 			=> $default['layout_options_page'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'armata_sanitize_select'
	)
);

$wp_customize->add_control(new armata_Image_Radio_Control($wp_customize, 'theme_options[layout_options_page]', 
	array(		
	'label' 	=> __('Page Layout', 'armata'),
	'section' 	=> 'section_sidebar_layout',
	'settings'  => 'theme_options[layout_options_page]',
	'type' 		=> 'radio-image',
	'choices' 	=> array(		
		'left-sidebar' 	=> get_template_directory_uri() . '/assets/images/left-sidebar.png',						
		'right-sidebar' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
		'no-sidebar' 	=> get_template_directory_uri() . '/assets/images/no-sidebar.png',
		),	
	))
);

// Single Post Layout
$wp_customize->add_setting('theme_options[layout_options_single]', 
	array(
	'default' 			=> $default['layout_options_single'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'armata_sanitize_select'
	)
);

$wp_customize->add_control(new armata_Image_Radio_Control($wp_customize, 'theme_options[layout_options_single]', 
	array(		
	'label' 	=> __('Single Post Layout', 'armata'),
	'section' 	=> 'section_sidebar_layout',
	'settings'  => 'theme_options[layout_options_single]',
	'type' 		=> 'radio-image',
	'choices' 	=> array(		
		'left-sidebar' 	=> get_template_directory_uri() . '/assets/images/left-sidebar.png',						
		'right-sidebar' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
		'no-sidebar' 	=> get_template_directory_uri() . '/assets/images/no-sidebar.png',
		),	
	))
);

// Excerpt Length
$wp_customize->add_section('section_excerpt_length', 
	array(    
	'title'       => __('Excerpt Length', 'armata'),
	'panel'       => 'theme_option_panel'    
	)
);

$wp_customize->add_setting( 'theme_options[excerpt_length]', array(
	'default'           => $default['excerpt_length'],
	'sanitize_callback' => 'armata_sanitize_number_range',
) );
$wp_customize->add_control( 'theme_options[excerpt_length]', array(
	'label'       => esc_html__( 'Excerpt Length', 'armata' ),
	'section'     => 'section_excerpt_length',
	'type'        => 'number',
	'input_attrs' => array( 'min' => 1, 'max' => 200, 'style' => 'width: 80px;' ),
) );

// Blog Settings
$wp_customize->add_section('section_blog_setting', 
	array(    
	'title'       => __('Blog / Archive Settings', 'armata'),
	'panel'       => 'theme_option_panel'    
	)
);

// Footer Setting Section starts
$wp_customize->add_section('section_footer', 
	array(    
	'title'       => __('Footer Setting', 'armata'),
	'panel'       => 'theme_option_panel'    
	)
);

// Setting copyright_text.
$wp_customize->add_setting( 'theme_options[copyright_text]',
	array(
	'default'           => $default['copyright_text'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'transport'         => 'refresh',
	)
);
$wp_customize->add_control( 'theme_options[copyright_text]',
	array(
	'label'    => __( 'Copyright Text', 'armata' ),
	'section'  => 'section_footer',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Show / Hide Blog Title
$wp_customize->add_setting( 'theme_options[show_blog_posts_title]', array(
	'default'           => $default['show_blog_posts_title'],
	'sanitize_callback' => 'armata_sanitize_select',
) );

$wp_customize->add_control( 'theme_options[show_blog_posts_title]', array(
	'label'              => esc_html__( 'Display Title', 'armata' ),
	'section'            => 'section_blog_setting',
	'type'               => 'select',
	'choices' 	         => array(		
		'title-enable' 	 => 'Yes',						
		'title-disable'  => 'No',
	),	
) );

// Show / Hide Blog Content
$wp_customize->add_setting( 'theme_options[show_blog_posts_content]', array(
	'default'           => $default['show_blog_posts_content'],
	'sanitize_callback' => 'armata_sanitize_select',
) );

$wp_customize->add_control( 'theme_options[show_blog_posts_content]', array(
	'label'       => esc_html__( 'Display Content', 'armata' ),
	'section'     => 'section_blog_setting',
	'type'        => 'select',
	'choices' 	  => array(		
		'content-enable' 	=> 'Yes',						
		'content-disable'  => 'No',
	),	
) );

// Show / Hide Blog Image
$wp_customize->add_setting( 'theme_options[show_blog_posts_image]', array(
	'default'           => $default['show_blog_posts_image'],
	'sanitize_callback' => 'armata_sanitize_select',
) );

$wp_customize->add_control( 'theme_options[show_blog_posts_image]', array(
	'label'              => esc_html__( 'Display Image', 'armata' ),
	'section'            => 'section_blog_setting',
	'type'               => 'select',
	'choices' 	         => array(		
		'image-enable' 	 => 'Yes',						
		'image-disable'   => 'No',
	),	
) );

// Show / Hide Blog Comment
$wp_customize->add_setting( 'theme_options[show_blog_posts_comment]', array(
	'default'           => $default['show_blog_posts_comment'],
	'sanitize_callback' => 'armata_sanitize_select',
) );

$wp_customize->add_control( 'theme_options[show_blog_posts_comment]', array(
	'label'              => esc_html__( 'Display Comment', 'armata' ),
	'section'            => 'section_blog_setting',
	'type'               => 'select',
	'choices' 	         => array(		
		'comment-enable' 	 => 'Yes',						
		'comment-disable'    => 'No',
	),	
) );

// Show / Hide Blog Button
$wp_customize->add_setting( 'theme_options[show_blog_posts_posted_ago]', array(
	'default'           => $default['show_blog_posts_posted_ago'],
	'sanitize_callback' => 'armata_sanitize_select',
) );

$wp_customize->add_control( 'theme_options[show_blog_posts_posted_ago]', array(
	'label'       => esc_html__( 'Display Posted Ago', 'armata' ),
	'section'     => 'section_blog_setting',
	'type'        => 'select',
	'choices' 	  => array(		
		'posted-ago-enable' 	=> 'Yes',						
		'posted-ago-disable'    => 'No',
	),	
) );