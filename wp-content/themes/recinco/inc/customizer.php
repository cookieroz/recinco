<?php
/**
 * recinco Theme Customizer.
 *
 * @package recinco
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function recinco_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'recinco_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function recinco_customize_preview_js() {
	wp_enqueue_script( 'recinco_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'recinco_customize_preview_js' );


/* Footer Text section */
add_action('customize_register', 'recinco_footer_customizer');

function recinco_footer_customizer($wp_customize){
  // adding section in wordpress customizer   
  $wp_customize->add_section('footer_settings_section', array(
    'title'          => 'Footer Text Section',
    'type'           => 'theme_mod'
   ));
  // adding setting for Footer paragraph text for 'Elige Recinco Text'
  $wp_customize->add_setting('text_setting', array(
    'default'        => 'Default Text For Footer Section',
   ));
  $wp_customize->add_control('text_setting', array(
    'label'   => 'Elige Recinco Texto',
    'section' => 'footer_settings_section',
    'type'    => 'textarea',
  ));
  // adding setting for footer phone number 
  $wp_customize->add_setting('phone_setting', array(
    'default'        => '622 222 222',
   ));
  $wp_customize->add_control('phone_setting', array(
    'label'   => 'Numero Telefono',
    'section' => 'footer_settings_section',
    'type'    => 'textarea',
  ));
}

/* Homepage section */
add_action('customize_register', 'recinco_homepage_customizer');

function recinco_homepage_customizer($wp_customize){
  // adding section in wordpress customizer   
  $wp_customize->add_section('homepage_settings_section', array(
    'title'          => 'Homepage Section',
    'type'           => 'theme_mod'
   ));
  // adding setting for Title under slideshow
  $wp_customize->add_setting('slideshow_title', array(
    'default'        => 'No lo piensas mas - Elige Recinco',
   ));
  $wp_customize->add_control('slideshow_title', array(
    'label'   => 'Title under slideshow',
    'section' => 'homepage_settings_section',
    'type'    => 'textarea',
  ));
  // adding setting for text under slideshow 
  $wp_customize->add_setting('slideshow_text', array(
    'default'        => 'Et harum quidem rerum facilis est',
   ));
  $wp_customize->add_control('slideshow_text', array(
    'label'   => 'Text under slideshow',
    'section' => 'homepage_settings_section',
    'type'    => 'textarea',
  ));
  // adding setting for Left Home Title 
  $wp_customize->add_setting('left_title', array(
    'default'        => 'Nuestras Bandas',
   ));
  $wp_customize->add_control('left_title', array(
    'label'   => 'Left homepage Title',
    'section' => 'homepage_settings_section',
    'type'    => 'textarea',
  ));
  // adding setting for Right Home title 
  $wp_customize->add_setting('right_title', array(
    'default'        => 'Nuestras Marcas',
   ));
  $wp_customize->add_control('right_title', array(
    'label'   => 'Right homepage title',
    'section' => 'homepage_settings_section',
    'type'    => 'textarea',
  ));
}
