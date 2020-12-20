<?php

function welearner_tgmpa_register() {

	// Get array of recommended plugins.
	$plugins = array(
		array(
			'name'				=> 'Welearner Core',
            'slug'				=> 'welearner-core',
            'source'            => get_stylesheet_directory() . '/inc/plugins/welearner-core.zip',
			'required'			=> false,
			'force_activation'	=> false,
		),
	);

	// Register notice
	tgmpa( $plugins, array(
		'id'           => 'welearner_theme',
		'domain'       => 'welearner',
		'menu'         => 'install-required-plugins',
		'has_notices'  => true,
		'is_automatic' => true,
		'dismissable'  => true,
	) );

}
add_action( 'tgmpa_register', 'welearner_tgmpa_register' );