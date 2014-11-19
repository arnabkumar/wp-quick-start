<?php
 add_action( 'admin_init', 'custom_theme_options', 1 );
     
    function custom_theme_options() {
     
      $saved_settings = get_option( 'option_tree_settings', array() );
     
     
      $custom_settings = array(
	                          
							  // This sections 
	
	
	  'sections'        => array(
          array(
            'id'          => 'general',
            'title'       => 'Site Settings'
          ),
		   array(
            'id'          => 'other_sec',
            'title'       => 'Others'
          )
        ),
		
		                          // This settings 
		                         
								 //1. This settings One
        'settings'        => array(
          array(
            'id'          => 'header_bg_id',
            'label'       => 'Body Bg',
            'desc'        => 'Body Backgroubd',
            'type'        => 'colorpicker',
            'section'     => 'general'
          ),
		  
		                        //1. This settings two
          array(
            'id'          => 'call_action_and_wiget_bg_id',
            'label'       => 'Call to Action and Front widgets area Bg',
			'desc'        => 'Call to Action and Front widgets area Bg',
            'type'        => 'colorpicker',
            'section'     => 'general'
          ),
		        //1. This settings Three
          array(
            'id'          => 'service_cate_id',
            'label'       => 'Category',
			'desc'        => 'Enter Category Name ',
            'type'        => 'text',
            'section'     => 'other_sec'
          )
		  
        )
      );
     
      if ( $saved_settings !== $custom_settings ) {
        update_option( 'option_tree_settings', $custom_settings );
      }
     
    }
     ?>