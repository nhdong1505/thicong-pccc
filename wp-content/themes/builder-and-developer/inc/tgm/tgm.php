<?php

require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function builder_and_developer_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Video Popup Block by WPZOOM', 'builder-and-developer' ),
			'slug'             => 'wpzoom-video-popup-block',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'builder_and_developer_register_recommended_plugins' );