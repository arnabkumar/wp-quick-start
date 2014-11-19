<?php 

function wp_quickstart_widget_areas() {

  
	register_sidebar( array(
		'name' => __( 'Right Sidebar'),
		'id' => 'right_sidebar',
		'description'   => 'This is widgets',
        'class'         => '',
		'before_widget' => '<div class="well">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );


}
add_action('widgets_init', 'wp_quickstart_widget_areas');

?>