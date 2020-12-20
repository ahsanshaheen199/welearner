<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function welearner_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'welearner' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'welearner' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
    );
    
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar 1', 'welearner' ),
			'id'            => 'footer-sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'welearner' ),
			'before_widget' => '<div id="%1$s" class="widget welearner-footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
    );
    
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar 2', 'welearner' ),
			'id'            => 'footer-sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'welearner' ),
			'before_widget' => '<div id="%1$s" class="widget welearner-footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
    );
    
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar 3', 'welearner' ),
			'id'            => 'footer-sidebar-3',
			'description'   => esc_html__( 'Add widgets here.', 'welearner' ),
			'before_widget' => '<div id="%1$s" class="widget welearner-footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
    );
    
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar 4', 'welearner' ),
			'id'            => 'footer-sidebar-4',
			'description'   => esc_html__( 'Add widgets here.', 'welearner' ),
			'before_widget' => '<div id="%1$s" class="widget welearner-footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
    );
    
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar 5', 'welearner' ),
			'id'            => 'footer-sidebar-5',
			'description'   => esc_html__( 'Add widgets here.', 'welearner' ),
			'before_widget' => '<div id="%1$s" class="widget welearner-footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'welearner_widgets_init' );