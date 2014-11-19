<?php 

//Call Latest jQuery from Wordpress
function wp_quickstart_jquery() {
	wp_enqueue_script('jquery');
}
add_action('init', 'wp_quickstart_jquery');


/**
 * Enqueue scripts and styles
 */
 
 function wp_quickstart_scripts_and_styles() {
 
 /*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).*/
	 
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );	
		

	// load bootstrap css
	wp_enqueue_style( 'wp_quickstart_bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	
	// load bootstrap-theme.min css
	wp_enqueue_style( 'wp_quickstart_bootstrap_theme_css', get_template_directory_uri() . '/css/bootstrap-theme.min.css' );
	
	
	//load bootstrap js
	
	wp_enqueue_script('wp_quickstart_bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery') );

	// load Font Awesome css
	wp_enqueue_style( 'wp_quickstart_font_awesome', get_template_directory_uri() . '/css/font-awesome.min.css', false, '4.1.0' );
	
	//load active js
	
	wp_enqueue_script('wp_quickstart_active_js', get_template_directory_uri().'/js/active.js', array('jquery') );
	
	
	// load normalize css
	wp_enqueue_style( 'wp_quickstart_normalize_css', get_template_directory_uri() . '/css/normalize.css', false );
	
	
	// load custom css
	wp_enqueue_style( 'wp_quickstart_custom_css', get_template_directory_uri() . '/css/custom.css', false );
	
	// load responsive css
	wp_enqueue_style( 'wp_quickstart_responsive_css', get_template_directory_uri() . '/css/responsive.css', false );
	
	
	
	
}
add_action( 'wp_enqueue_scripts', 'wp_quickstart_scripts_and_styles' );

//Set up theme defaults and register support for various WordPress features

/* Enable support for post-thumbnails */
    add_theme_support( 'post-thumbnails'); // Add it for posts
	
/* This code enable Shortcodes in WordPress Text Widget */

add_filter('widget_text', 'do_shortcode');



/*code for enable php code  in widget*/
add_filter('widget_text', 'php_text', 99);

function php_text($text) {
 if (strpos($text, '<' . '?') !== false) {
 ob_start();
 eval('?' . '>' . $text);
 $text = ob_get_contents();
 ob_end_clean();
 }
 return $text;
}
	
/* post-excerpt and read more in index.php */

/* code for read more  in functions.php*/

function excerpt($num) {
 
$limit = $num+1;
 
$excerpt = explode(' ', get_the_excerpt(), $limit);
 
array_pop($excerpt);
 
$excerpt = implode(" ",$excerpt)." <a href='" .get_permalink($post->ID) ." ' class='".readmore." '>Read More</a>";
 
echo $excerpt;
 
}

//load feature images
include_once( 'inc/feature_images.php' );

//load menu 
include_once( 'inc/menus.php' );

//load widgets
include_once('inc/widgets.php');

include_once('inc/shortcodes.php');
//load custom-posts
include_once('inc/custom-posts.php');
//load custom_taxonomy
include_once('inc/custom_taxonomy.php');



/* Breadcrumb ********************************************/

	function wp_quick_start_the_breadcrumb() {
		if (!is_home()) {
			echo '<li><a href="';
			echo home_url('Home');
			echo '">';
			echo ('Home');
			echo "</a></li> &raquo; ";
			if (is_single()) {
				the_title('');
				if (is_single()) {
					echo "";
				}
			} elseif (is_page()) {
				echo the_title();
			}
		}
	}

	
/* option tree theme option and metabox */
 //Activate Option Tree
     
add_filter( 'ot_show_pages', '__return_false' ); // if this under comment this is Documentation
 
add_filter( 'ot_show_new_layout', '__return_false' );// this code for option panel css
 
add_filter( 'ot_theme_mode', '__return_true' ); // this code for option panel css
 
include_once( 'inc/option-tree/ot-loader.php' );
 
include_once( 'inc/theme_options.php' );
include_once('inc/meta_boxes.php');


//style options by option tree
include_once('inc/d_style.php');


/** custom background support */
		 
		$background_args = array(
		  'default-color'  => 'f0f0f0',
		  'default-repeat' => 'fixed',
		);
		add_theme_support( 'custom-background', $background_args );
		


		 /* How to Highlight Search Terms with jQuery 
  http://weblogtoolscollection.com/archives/2009/04/10/how-to-highlight-search-terms-with-jquery/
 */
		function hls_set_query() {
  $query  = attribute_escape(get_search_query());

  if(strlen($query) > 0){
    echo '
      <script type="text/javascript">
        var hls_query  = "'.$query.'";
      </script>
    ';
  }
}

function hls_init_jquery() {
  wp_enqueue_script('jquery');
}

add_action('init', 'hls_init_jquery');
add_action('wp_print_scripts', 'hls_set_query');
		