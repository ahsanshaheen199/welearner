<?php


	$wp_customize->add_section('toprated_course_section',[
		'title' => __( 'Top Rated Course','welearner' ),
		'priority'	=> 120,
    ]);
    
    $wp_customize->add_setting( 'toprated_course_section_title', [
		'default' => __('Top Rated','welearner'),
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'toprated_course_section_title', [
		'type'      => 'textarea',
		'priority'  => 10,
		'section'   => 'toprated_course_section', 
		'label'     => __( 'Section Title','welearner' )
    ] );

    $wp_customize->add_setting( 'toprated_course_btn_text', [
        'default' => __('Show All','welearner'),
        'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
    ] );
    
    $wp_customize->add_control( 'toprated_course_btn_text', array(
        'type' => 'text',
        'priority' => 20,
        'section' => 'toprated_course_section', 
        'label' => __( 'Button Text','welearner' )
    ) );
    
    
    $wp_customize->add_setting( 'toprated_course_btn_link', [
        'default' => '#',
        'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
    ] );
    
    $wp_customize->add_control( 'toprated_course_btn_link', array(
        'type' => 'text',
        'priority' => 30,
        'section' => 'toprated_course_section', 
        'label' => __( 'Button Link','welearner' )
    ) );

	$wp_customize->add_setting( 'toprated_course_per_page', [
		'default' => '3',
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'toprated_course_per_page', [
		'type'      => 'text',
		'priority'  => 40,
		'section'   => 'toprated_course_section', 
		'label'     => __( 'Posts Per Page','welearner' )
	] );

	$wp_customize->add_setting( 'toprated_course_order', [
		'default' => 'DESC',
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'toprated_course_order', [
		'type'      => 'select',
		'priority'  => 50,
		'section'   => 'toprated_course_section', 
        'label'     => __( 'Order','welearner' ),
        'choices'     => [
            'ASC'       => __( 'Ascending', 'welearner' ),
            'DESC'      => __( 'Descending', 'welearner' ),
        ],
	] );

	$wp_customize->add_setting( 'toprated_course_orderby', [
		'default' => 'date',
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'toprated_course_orderby', [
		'type'      => 'select',
		'priority'  => 60,
		'section'   => 'toprated_course_section', 
        'label'     => __( 'Order','welearner' ),
        'choices'     => [
            'date'       => __( 'Date', 'welearner' ),
            'modified'   => __( 'Modified Date', 'welearner' ),
            'title'      => __( 'Title', 'welearner' ),
            'rand'       => __( 'Random', 'welearner' ),
        ],
    ] );
    
    
	$wp_customize->add_setting( 'toprated_course_category', [
		'default' => '',
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'toprated_course_category', [
		'type'      => 'select',
		'priority'  => 70,
		'section'   => 'toprated_course_section', 
        'label'     => __( 'Category','welearner' ),
        'choices'   => welearner_course_topic_category(),
    ] );