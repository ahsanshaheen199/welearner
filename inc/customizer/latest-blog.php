<?php


	$wp_customize->add_section('latestblogsection',[
		'title' => __( 'Latest Blog','welearner' ),
		'priority'	=> 150,
    ]);
    
    $wp_customize->add_setting( 'blogpost_section_title', [
		'default' => __('Learning Support features','welearner'),
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'blogpost_section_title', [
		'type'      => 'textarea',
		'priority'  => 10,
		'section'   => 'latestblogsection', 
		'label'     => __( 'Section Title','welearner' )
    ] );

	$wp_customize->add_setting( 'blogpost_per_page', [
		'default' => '3',
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'blogpost_per_page', [
		'type'      => 'text',
		'priority'  => 20,
		'section'   => 'latestblogsection', 
		'label'     => __( 'Posts Per Page','welearner' )
	] );

	$wp_customize->add_setting( 'blogpost_order', [
		'default' => 'DESC',
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'blogpost_order', [
		'type'      => 'select',
		'priority'  => 30,
		'section'   => 'latestblogsection', 
        'label'     => __( 'Order','welearner' ),
        'choices'     => [
            'ASC'       => __( 'Ascending', 'welearner' ),
            'DESC'      => __( 'Descending', 'welearner' ),
        ],
	] );

	$wp_customize->add_setting( 'blogpost_orderby', [
		'default' => 'date',
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'blogpost_orderby', [
		'type'      => 'select',
		'priority'  => 40,
		'section'   => 'latestblogsection', 
        'label'     => __( 'Order','welearner' ),
        'choices'     => [
            'date'       => __( 'Date', 'welearner' ),
            'modified'   => __( 'Modified Date', 'welearner' ),
            'title'      => __( 'Title', 'welearner' ),
            'rand'       => __( 'Random', 'welearner' ),
        ],
    ] );
    
    
	$wp_customize->add_setting( 'blogpost_category', [
		'default' => '',
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'blogpost_category', [
		'type'      => 'select',
		'priority'  => 50,
		'section'   => 'latestblogsection', 
        'label'     => __( 'Category','welearner' ),
        'choices'   => welearner_blogpost_category(),
    ] );