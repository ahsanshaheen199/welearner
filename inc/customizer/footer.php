<?php


	$wp_customize->add_section('footer_section',[
		'title' => __( 'Footer','weleaner' ),
		'priority'	=> 170,
    ]);

    $wp_customize->add_setting( 'footer_section_bg_img', [
		'type'	  => 'theme_mod',
	] );

	$wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'footer_section_bg_img',
            array(
                'label'      => __( 'Upload Background Image', 'welearner' ),
                'section'    => 'footer_section',
                'settings'   => 'footer_section_bg_img',
                'priority'  => 10,
            )
        )
    );