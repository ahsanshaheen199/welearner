<?php


	$wp_customize->add_section('testimonialsection',[
		'title' => __( 'Testimonials','welearner' ),
		'priority'	=> 130,
    ]);
    
    $wp_customize->add_setting( 'testimonial_section_title', [
		'default' => __('What our students have to say','welearner'),
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'testimonial_section_title', [
		'type'      => 'textarea',
		'priority'  => 10,
		'section'   => 'testimonialsection', 
		'label'     => __( 'Section Title','welearner' )
    ] );

    $wp_customize->add_setting( 'testimonial_section_desc', [
		'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique placerat ligula, eget blandit ante tincidunt vel','welearner'),
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'testimonial_section_desc', [
		'type'      => 'textarea',
		'priority'  => 20,
		'section'   => 'testimonialsection', 
		'label'     => __( 'Section Title','welearner' )
    ] );

	$wp_customize->add_setting( 'testimonial_per_page', [
		'default' => '3',
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'testimonial_per_page', [
		'type'      => 'text',
		'priority'  => 30,
		'section'   => 'testimonialsection', 
		'label'     => __( 'Posts Per Page','welearner' )
	] );

	$wp_customize->add_setting( 'testimonial_order', [
		'default' => 'DESC',
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'testimonial_order', [
		'type'      => 'select',
		'priority'  => 40,
		'section'   => 'testimonialsection', 
        'label'     => __( 'Order','welearner' ),
        'choices'     => [
            'ASC'       => __( 'Ascending', 'welearner' ),
            'DESC'      => __( 'Descending', 'welearner' ),
        ],
	] );

	$wp_customize->add_setting( 'testimonial_orderby', [
		'default' => 'date',
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'testimonial_orderby', [
		'type'      => 'select',
		'priority'  => 50,
		'section'   => 'testimonialsection', 
        'label'     => __( 'Order','welearner' ),
        'choices'     => [
            'date'       => __( 'Date', 'welearner' ),
            'modified'   => __( 'Modified Date', 'welearner' ),
            'title'      => __( 'Title', 'welearner' ),
            'rand'       => __( 'Random', 'welearner' ),
        ],
    ] );