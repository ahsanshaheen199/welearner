<?php


	$wp_customize->add_section('popularcreatorsection',[
		'title' => __( 'Popular Creator','welearner' ),
		'priority'	=> 140,
    ]);
    
    $wp_customize->add_setting( 'popularcreator_section_title', [
		'default' => __('Our Popular Creator','welearner'),
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'popularcreator_section_title', [
		'type'      => 'textarea',
		'priority'  => 10,
		'section'   => 'popularcreatorsection', 
		'label'     => __( 'Section Title','welearner' )
    ] );
    
    $wp_customize->add_setting( 'popularcreator_section_desc', [
		'default' => __('45+ million people are already learning on Welearners','welearner'),
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'popularcreator_section_desc', [
		'type'      => 'textarea',
		'priority'  => 20,
		'section'   => 'popularcreatorsection', 
		'label'     => __( 'Section Title','welearner' )
    ] );

	$wp_customize->add_setting( 'popularcreator_per_page', [
		'default' => '3',
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'popularcreator_per_page', [
		'type'      => 'text',
		'priority'  => 30,
		'section'   => 'popularcreatorsection', 
		'label'     => __( 'Posts Per Page','welearner' )
	] );

	$wp_customize->add_setting( 'popularcreator_order', [
		'default' => 'DESC',
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'popularcreator_order', [
		'type'      => 'select',
		'priority'  => 40,
		'section'   => 'popularcreatorsection', 
        'label'     => __( 'Order','welearner' ),
        'choices'     => [
            'ASC'       => __( 'Ascending', 'welearner' ),
            'DESC'      => __( 'Descending', 'welearner' ),
        ],
	] );

	$wp_customize->add_setting( 'popularcreator_orderby', [
		'default' => 'date',
		'type'	  => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	] );

	$wp_customize->add_control( 'popularcreator_orderby', [
		'type'      => 'select',
		'priority'  => 50,
		'section'   => 'popularcreatorsection', 
        'label'     => __( 'Order','welearner' ),
        'choices'     => [
            'date'       => __( 'Date', 'welearner' ),
            'modified'   => __( 'Modified Date', 'welearner' ),
            'title'      => __( 'Title', 'welearner' ),
            'rand'       => __( 'Random', 'welearner' ),
        ],
    ] );