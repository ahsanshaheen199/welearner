<?php

$wp_customize->add_panel( 'ctasection', [
    'title' => __( 'Call To Action','welearner' ),
    'priority' => 160, // Mixed with top-level-section hierarchy.
] );

$wp_customize->add_section('ctasection1',[
    'title' => __( 'Section 1','weleaner' ),
    'priority'	=> 10,
    'panel'	=> 'ctasection'
]);

$wp_customize->add_setting( 'section1_cta_title', [
    'default' => __('Become an instructor','welearner'),
    'type'	  => 'theme_mod',
] );

$wp_customize->add_control( 'section1_cta_title', array(
    'type' => 'text',
    'priority' => 10,
    'section' => 'ctasection1', 
    'label' => __( 'Title','welearner' )
) );

$wp_customize->add_setting( 'section1_cta_desc', [
    'default' => __('Get unlimited access to 4,000+ of We Learner’s top courses for your team.','welearner'),
    'type'	  => 'theme_mod',
] );

$wp_customize->add_control( 'section1_cta_desc', array(
    'type' => 'textarea',
    'priority' => 20,
    'section' => 'ctasection1', 
    'label' => __( 'Description','welearner' )
) );

$wp_customize->add_setting( 'section1_cta_btn_text', [
    'default' => __('Get Started','welearner'),
    'type'	  => 'theme_mod',
] );

$wp_customize->add_control( 'section1_cta_btn_text', array(
    'type' => 'text',
    'priority' => 30,
    'section' => 'ctasection1', 
    'label' => __( 'Button Text','welearner' )
) );


$wp_customize->add_setting( 'section1_cta_btn_link', [
    'default' => '#',
    'type'	  => 'theme_mod',
] );

$wp_customize->add_control( 'section1_cta_btn_link', array(
    'type' => 'text',
    'priority' => 40,
    'section' => 'ctasection1', 
    'label' => __( 'Button Link','welearner' )
) );


$wp_customize->add_setting( 'section1_cta_bg_color', [
    'default' => '#FFE2E2',
    'type'	  => 'theme_mod',
] );

$wp_customize->add_control( 'section1_cta_bg_color', array(
    'type' => 'color',
    'priority' => 50,
    'section' => 'ctasection1', 
    'label' => __( 'Background Color','welearner' )
) );

$wp_customize->add_section('ctasection2',[
    'title' => __( 'Section 2','weleaner' ),
    'priority'	=> 10,
    'panel'	=> 'ctasection'
]);

$wp_customize->add_setting( 'section2_cta_title', [
    'default' => __('Become an instructor','welearner'),
    'type'	  => 'theme_mod',
] );

$wp_customize->add_control( 'section2_cta_title', array(
    'type' => 'text',
    'priority' => 10,
    'section' => 'ctasection2', 
    'label' => __( 'Title','welearner' )
) );

$wp_customize->add_setting( 'section2_cta_desc', [
    'default' => __('Get unlimited access to 4,000+ of We Learner’s top courses for your team.','welearner'),
    'type'	  => 'theme_mod',
] );

$wp_customize->add_control( 'section2_cta_desc', array(
    'type' => 'textarea',
    'priority' => 20,
    'section' => 'ctasection2', 
    'label' => __( 'Description','welearner' )
) );

$wp_customize->add_setting( 'section2_cta_btn_text', [
    'default' => __('Get Started','welearner'),
    'type'	  => 'theme_mod',
] );

$wp_customize->add_control( 'section2_cta_btn_text', array(
    'type' => 'text',
    'priority' => 30,
    'section' => 'ctasection2', 
    'label' => __( 'Button Text','welearner' )
) );


$wp_customize->add_setting( 'section2_cta_btn_link', [
    'default' => '#',
    'type'	  => 'theme_mod',
] );

$wp_customize->add_control( 'section2_cta_btn_link', array(
    'type' => 'text',
    'priority' => 40,
    'section' => 'ctasection2', 
    'label' => __( 'Button Link','welearner' )
) );


$wp_customize->add_setting( 'section2_cta_bg_color', [
    'default' => '#FEE5BD',
    'type'	  => 'theme_mod',
] );

$wp_customize->add_control( 'section2_cta_bg_color', array(
    'type' => 'color',
    'priority' => 50,
    'section' => 'ctasection2', 
    'label' => __( 'Background Color','welearner' )
) );