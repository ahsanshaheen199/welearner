<?php
/**
 * Welearner Theme Customizer
 *
 * @package Welearner
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function welearner_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'welearner_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'welearner_customize_partial_blogdescription',
			)
		);
	}



	//welearner

	// Hero
	require get_theme_file_path('inc/customizer/hero.php');

	// Popular Topics
	require get_theme_file_path('inc/customizer/popular-topics.php');

	// Tranding Course
	require get_theme_file_path('inc/customizer/tranding-course.php');

	// Top Rated Course
	require get_theme_file_path('inc/customizer/toprated-course.php');

	// Testimonials
	require get_theme_file_path('inc/customizer/testimonials.php');

	// Popular Creator
	require get_theme_file_path('inc/customizer/popular-creator.php');

	// latset Blog
	require get_theme_file_path('inc/customizer/latest-blog.php');

	// Call to action
	require get_theme_file_path('inc/customizer/cta.php');

	// Call to action
	require get_theme_file_path('inc/customizer/footer.php');
	
}
add_action( 'customize_register', 'welearner_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function welearner_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function welearner_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function welearner_customize_preview_js() {
	wp_enqueue_script( 'welearner-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), WELEARNER_VERSION, true );
}
add_action( 'customize_preview_init', 'welearner_customize_preview_js' );
