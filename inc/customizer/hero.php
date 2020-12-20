<?php


	$wp_customize->add_section('hero_section',[
		'title' => __( 'Hero Area','weleaner' ),
		'priority'	=> 90,
    ]);
    
    $wp_customize->add_setting( 'hero_section_title', [
		'default' => __('Discover a new way of learning','welearner'),
		'type'	  => 'theme_mod',
	] );

	$wp_customize->add_control( 'hero_section_title', [
		'type'      => 'textarea',
		'priority'  => 10,
		'section'   => 'hero_section', 
		'label'     => __( 'Title','welearner' )
    ] );
    
    $wp_customize->add_setting( 'hero_section_desc', [
		'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper dapibus turpis vel pellentesque.','welearner'),
		'type'	  => 'theme_mod',
	] );

	$wp_customize->add_control( 'hero_section_desc', [
		'type'      => 'textarea',
		'priority'  => 20,
		'section'   => 'hero_section', 
		'label'     => __( 'Description','welearner' )
    ] );


    $wp_customize->add_setting( 'hero_section_person_img', [
		'type'	  => 'theme_mod',
	] );

	$wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'hero_section_person_img',
            array(
                'label'      => __( 'Upload Person Image', 'welearner' ),
                'section'    => 'hero_section',
                'settings'   => 'hero_section_person_img',
                'priority'  => 30,
            )
        )
    );


    $wp_customize->add_setting( 'hero_section_bg_img', [
		'type'	  => 'theme_mod',
	] );

	$wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'hero_section_bg_img',
            array(
                'label'      => __( 'Upload Background Image', 'welearner' ),
                'section'    => 'hero_section',
                'settings'   => 'hero_section_bg_img',
                'priority'  => 30,
            )
        )
    );