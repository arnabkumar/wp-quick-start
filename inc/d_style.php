
<?php
function wp_q_s_css() {?>
	<style type="text/css">
	  
	   .header_footer_area{background:<?php get_option_tree( 'header_bg_id', '', 'true' ); ?>;}
	   .call_to_action_area, .front_widgets_area{background:<?php get_option_tree( 'call_action_and_wiget_bg_id', '', 'true' ); ?>;}
		
		
		
		
		
	</style>
<?php
}




add_action('wp_head', 'wp_q_s_css');


function wp_q_s_c_css_header() {?>
	<style type="text/css">
	  
	   .header_footer_area {
  background: url(<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />);
}
		
		
		
		
		
	</style>
<?php
}




add_action('wp_head', 'wp_q_s_c_css_header');




