<?php 

function wp_quickstart_theme_custom_post() {
	register_post_type( 'service_items',
		array(
			'labels' => array(
				'name' => __( 'Service' ),
				'singular_name' => __( 'Service' ),
				'add_new_item' => __( 'Add New Service' )
			),
			'public' => true,
			'menu_icon' => ('dashicons-sos'),
			'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'service-item'),
		)
	);
	
}

add_action( 'init', 'wp_quickstart_theme_custom_post' );

?>