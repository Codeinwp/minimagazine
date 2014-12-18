<?php
/**
 * cwp Theme Customizer
 *
 * @package cwp
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
 

function cwp_customize_register( $wp_customize ) {

	class minimagazine_Theme_Support extends WP_Customize_Control
	{
		public function render_content()
		{

		}

	} 

	$wp_customize->remove_section('header_image');
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	/* theme notes */
	$wp_customize->add_section( 'codeinwp_theme_notes' , array(
		'title'      => __('ThemeIsle theme notes','codeinwp'),
		'description' => sprintf( __( "Thank you for being part of this! We've spent almost 6 months building ThemeIsle without really knowing if anyone will ever use a theme or not, so we're very grateful that you've decided to work with us. Wanna <a href='http://themeisle.com/contact/' target='_blank'>say hi</a>?
		<br/><br/><a href='http://themeisle.com/demo/?theme=MiniMagazine' target='_blank' />View Theme Demo</a> | <a href='http://themeisle.com/forums/forum/minimagazine' target='_blank'>Get theme support</a><br/><br/><a href='http://themeisle.com/documentation-minimagazine' target='_blank'>Documentation</a>")),
		'priority'   => 30,
	));
	$wp_customize->add_setting(
        'codeinwp_theme_notes'
	,array('sanitize_callback' => 'cwp_sanitize_text') );

	$wp_customize->add_control( new minimagazine_Theme_Support( $wp_customize, 'codeinwp_theme_notes',
	    array(
	        'section' => 'codeinwp_theme_notes',
	   )
	));

	
	
	/* Logo */
	$wp_customize->add_section( 'codeinwp_logo_section' , array(
    	'title'       => __( 'Logo', 'cwp' ),
    	'priority'    => 30,
    	'description' => __('Logo details','cwp'),
	) );

	$wp_customize->add_setting( 'codeinwp_logo',array('sanitize_callback' => 'cwp_sanitize_text') );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
	    'label'    => __( 'Upload your logo file', 'cwp' ),
	    'section'  => 'codeinwp_logo_section',
	    'settings' => 'codeinwp_logo',
		'priority'    => 1
	) ) );
	
	/* Logo text */
	$wp_customize->add_setting( 'codeinwp_logo_text',array('sanitize_callback' => 'cwp_sanitize_text') );
	$wp_customize->add_control( 'codeinwp_logo_text', array(
	    'label'    => __( 'Text logo', 'cwp' ),
	    'section'  => 'codeinwp_logo_section',
	    'settings' => 'codeinwp_logo_text',
		'priority'    => 2
	) );
	
	/* Footer logo */
	$wp_customize->add_section( 'codeinwp_footerlogo_section' , array(
    	'title'       => __( 'Footer Logo', 'cwp' ),
    	'priority'    => 31,
    	'description' => __('Upload your footer logo file','cwp'),
	) );

	$wp_customize->add_setting( 'codeinwp_footerlogo' ,array('sanitize_callback' => 'cwp_sanitize_text') );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_footerlogo', array(
	    'label'    => __( 'Footer logo', 'cwp' ),
	    'section'  => 'codeinwp_footerlogo_section',
	    'settings' => 'codeinwp_footerlogo',
		'priority'    => 1
	) ) );
	
	/* Footer logo text */
	$wp_customize->add_setting( 'codeinwp_footerlogo_text',array('sanitize_callback' => 'cwp_sanitize_text') );
	$wp_customize->add_control( 'codeinwp_footerlogo_text', array(
	    'label'    => __( 'Text for footer logo', 'cwp' ),
	    'section'  => 'codeinwp_footerlogo_section',
	    'settings' => 'codeinwp_footerlogo_text',
		'priority'    => 2
	) );
	
	/* Copyright */
	$wp_customize->add_section( 'codeinwp_copyright_section' , array(
    	'title'       => __( 'Copyright', 'cwp' ),
    	'priority'    => 32
	) );
	$wp_customize->add_setting( 'codeinwp_copyright',array('sanitize_callback' => 'cwp_sanitize_text') );
	$wp_customize->add_control( 'codeinwp_copyright', array(
	    'label'    => __( 'Enter text for copyright', 'cwp' ),
	    'section'  => 'codeinwp_copyright_section',
	    'settings' => 'codeinwp_copyright'
	) );
	
	/* Socials options */
	$wp_customize->add_section( 'codeinwp_socials_section' , array(
    	'title'       => __( 'Socials options', 'cwp' ),
    	'priority'    => 33
	) );
	
	/* Facebook */
	$wp_customize->add_setting( 'codeinwp_fb',array('sanitize_callback' => 'esc_url_raw') );
	$wp_customize->add_control( 'codeinwp_fb', array(
	    'label'    => __( 'Enter your facebook link', 'cwp' ),
	    'section'  => 'codeinwp_socials_section',
	    'settings' => 'codeinwp_fb'
	) );
	
	/* Twitter */
	$wp_customize->add_setting( 'codeinwp_tw',array('sanitize_callback' => 'esc_url_raw') );
	$wp_customize->add_control( 'codeinwp_tw', array(
	    'label'    => __( 'Enter your Twitter link', 'cwp' ),
	    'section'  => 'codeinwp_socials_section',
	    'settings' => 'codeinwp_tw'
	) );
	
	/* RSS */
	$wp_customize->add_setting( 'codeinwp_rss',array('sanitize_callback' => 'esc_url_raw') );
	$wp_customize->add_control( 'codeinwp_rss', array(
	    'label'    => __( 'Enter your RSS link', 'cwp' ),
	    'section'  => 'codeinwp_socials_section',
	    'settings' => 'codeinwp_rss'
	) );
	
	/* Linkedin */
	$wp_customize->add_setting( 'codeinwp_linkedin',array('sanitize_callback' => 'esc_url_raw') );
	$wp_customize->add_control( 'codeinwp_linkedin', array(
	    'label'    => __( 'Enter your linkedin link', 'cwp' ),
	    'section'  => 'codeinwp_socials_section',
	    'settings' => 'codeinwp_linkedin'
	) );
	
	/* Pinterest */
	$wp_customize->add_setting( 'codeinwp_pinterest',array('sanitize_callback' => 'esc_url_raw') );
	$wp_customize->add_control( 'codeinwp_pinterest', array(
	    'label'    => __( 'Enter your pinterest link', 'cwp' ),
	    'section'  => 'codeinwp_socials_section',
	    'settings' => 'codeinwp_pinterest'
	) );
	
	/* Slider */
	$wp_customize->add_section( 'codeinwp_slider_section' , array(
    	'title'       => __( 'Slider options', 'cwp' ),
    	'priority'    => 34
	) );
	
	/* Slide #1 */
	$wp_customize->add_setting( 'slide1_image' ,array('sanitize_callback' => 'cwp_sanitize_text') );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_slide1', array(
	    'label'    => __( 'First slide image', 'cwp' ),
	    'section'  => 'codeinwp_slider_section',
	    'settings' => 'slide1_image',
		'priority'    => 1
	) ) );
	
	$wp_customize->add_setting( 'slide1_title',array('sanitize_callback' => 'cwp_sanitize_text') );
	$wp_customize->add_control( 'slide1_title', array(
	    'label'    => __( 'First slide title', 'cwp' ),
	    'section'  => 'codeinwp_slider_section',
	    'settings' => 'slide1_title',
		'priority'    => 2
	) );
	
	$wp_customize->add_setting( 'slide1_text',array('sanitize_callback' => 'cwp_sanitize_text') );
	$wp_customize->add_control( 'slide1_text', array(
	    'label'    => __( 'First slide text', 'cwp' ),
	    'section'  => 'codeinwp_slider_section',
	    'settings' => 'slide1_text',
		'priority'    => 3
	) );
	
	$wp_customize->add_setting( 'slide1_button_text',array('sanitize_callback' => 'cwp_sanitize_text') );
	$wp_customize->add_control( 'slide1_button_text', array(
	    'label'    => __( 'First slide text for button', 'cwp' ),
	    'section'  => 'codeinwp_slider_section',
	    'settings' => 'slide1_button_text',
		'priority'    => 4
	) );
	
	$wp_customize->add_setting( 'slide1_button_link',array('sanitize_callback' => 'esc_url_raw') );
	$wp_customize->add_control( 'slide1_button_link', array(
	    'label'    => __( 'First slide link for button', 'cwp' ),
	    'section'  => 'codeinwp_slider_section',
	    'settings' => 'slide1_button_link',
		'priority'    => 5
	) );
	
	/* Slide #2 */
	$wp_customize->add_setting( 'slide2_image' ,array('sanitize_callback' => 'cwp_sanitize_text') );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_slide2', array(
	    'label'    => __( 'Second slide image', 'cwp' ),
	    'section'  => 'codeinwp_slider_section',
	    'settings' => 'slide2_image',
		'priority'    => 6
	) ) );
	
	$wp_customize->add_setting( 'slide2_title',array('sanitize_callback' => 'cwp_sanitize_text') );
	$wp_customize->add_control( 'slide2_title', array(
	    'label'    => __( 'Second slide title', 'cwp' ),
	    'section'  => 'codeinwp_slider_section',
	    'settings' => 'slide2_title',
		'priority'    => 7
	) );
	
	$wp_customize->add_setting( 'slide2_text',array('sanitize_callback' => 'cwp_sanitize_text') );
	$wp_customize->add_control( 'slide2_text', array(
	    'label'    => __( 'Second slide text', 'cwp' ),
	    'section'  => 'codeinwp_slider_section',
	    'settings' => 'slide2_text',
		'priority'    => 8
	) );
	
	$wp_customize->add_setting( 'slide2_button_text',array('sanitize_callback' => 'cwp_sanitize_text') );
	$wp_customize->add_control( 'slide2_button_text', array(
	    'label'    => __( 'Second slide text for button', 'cwp' ),
	    'section'  => 'codeinwp_slider_section',
	    'settings' => 'slide2_button_text',
		'priority'    => 9
	) );
	
	$wp_customize->add_setting( 'slide2_button_link',array('sanitize_callback' => 'esc_url_raw') );
	$wp_customize->add_control( 'slide2_button_link', array(
	    'label'    => __( 'Second slide link for button', 'cwp' ),
	    'section'  => 'codeinwp_slider_section',
	    'settings' => 'slide2_button_link',
		'priority'    => 10
	) );
	
	/* Slide #3 */
	$wp_customize->add_setting( 'slide3_image' ,array('sanitize_callback' => 'cwp_sanitize_text') );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_slide3', array(
	    'label'    => __( 'Third slide image', 'cwp' ),
	    'section'  => 'codeinwp_slider_section',
	    'settings' => 'slide3_image',
		'priority'    => 11
	) ) );
	
	$wp_customize->add_setting( 'slide3_title',array('sanitize_callback' => 'cwp_sanitize_text') );
	$wp_customize->add_control( 'slide3_title', array(
	    'label'    => __( 'Third slide title', 'cwp' ),
	    'section'  => 'codeinwp_slider_section',
	    'settings' => 'slide3_title',
		'priority'    => 12
	) );
	
	$wp_customize->add_setting( 'slide3_text',array('sanitize_callback' => 'cwp_sanitize_text') );
	$wp_customize->add_control( 'slide3_text', array(
	    'label'    => __( 'Third slide text', 'cwp' ),
	    'section'  => 'codeinwp_slider_section',
	    'settings' => 'slide3_text',
		'priority'    => 13
	) );
	
	$wp_customize->add_setting( 'slide3_button_text',array('sanitize_callback' => 'cwp_sanitize_text') );
	$wp_customize->add_control( 'slide3_button_text', array(
	    'label'    => __( 'Third slide text for button', 'cwp' ),
	    'section'  => 'codeinwp_slider_section',
	    'settings' => 'slide3_button_text',
		'priority'    => 14
	) );
	
	$wp_customize->add_setting( 'slide3_button_link',array('sanitize_callback' => 'esc_url_raw') );
	$wp_customize->add_control( 'slide3_button_link', array(
	    'label'    => __( 'Third slide link for button', 'cwp' ),
	    'section'  => 'codeinwp_slider_section',
	    'settings' => 'slide3_button_link',
		'priority'    => 15
	) );
	
	/* Image for header of pages */
	$wp_customize->add_section( 'codeinwp_headerimage_section' , array(
    	'title'       => __( 'Header image', 'cwp' ),
    	'priority'    => 35
	) );

	$wp_customize->add_setting( 'minimagazine_header_image',array('sanitize_callback' => 'cwp_sanitize_text') );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_headerimage', array(
	    'label'    => __( 'Recommended image size is 1900 x 150 px', 'cwp' ),
	    'section'  => 'codeinwp_headerimage_section',
	    'settings' => 'minimagazine_header_image',
		'priority'    => 1
	) ) );
}
add_action( 'customize_register', 'cwp_customize_register' );

function cwp_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cwp_customize_preview_js() {
	wp_enqueue_script( 'cwp_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'cwp_customize_preview_js' );
