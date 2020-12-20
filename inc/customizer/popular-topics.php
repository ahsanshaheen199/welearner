<?php

    $wp_customize->add_section('popular_topics_section',[
		'title' => __( 'Popular Topics','weleaner' ),
		'priority'	=> 100,
    ]);
    
    $wp_customize->add_setting( 'popular_topics_section_title', [
		'default' => __('Popular Topics','welearner'),
		'type'	  => 'theme_mod',
	] );

	$wp_customize->add_control( 'popular_topics_section_title', [
		'type'      => 'textarea',
		'priority'  => 10,
		'section'   => 'popular_topics_section', 
		'label'     => __( 'Section Title','welearner' )
    ] );

    $wp_customize->add_setting( 'popular_topics_btn_text', [
        'default' => __('Show All','welearner'),
        'type'	  => 'theme_mod',
    ] );
    
    $wp_customize->add_control( 'popular_topics_btn_text', array(
        'type' => 'text',
        'priority' => 20,
        'section' => 'popular_topics_section', 
        'label' => __( 'Button Text','welearner' )
    ) );
    
    
    $wp_customize->add_setting( 'popular_topics_btn_link', [
        'default' => '#',
        'type'	  => 'theme_mod',
    ] );
    
    $wp_customize->add_control( 'popular_topics_btn_link', array(
        'type' => 'text',
        'priority' => 30,
        'section' => 'popular_topics_section', 
        'label' => __( 'Button Link','welearner' )
    ) );

    $wp_customize->add_setting( 'popular_topics_count', [
		'default' => '8',
		'type'	  => 'theme_mod',
	] );

	$wp_customize->add_control( 'popular_topics_count', [
		'type'      => 'text',
		'priority'  => 40,
		'section'   => 'popular_topics_section', 
		'label'     => __( 'Topic Count','welearner' )
	] );