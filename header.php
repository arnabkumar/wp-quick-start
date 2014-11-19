<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="description" content="">
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> <!--for responsive -->

       <!--for wp development (main stylesheet)-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
		
		<!-- call google fonts  -->
<link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
	 
	 <!-- font-awesome call from server -->
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
		
			<!-- call bootstrap from cdn -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- call bootstrap Optional theme from cdn -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
				
		<!--[if IE]>
				<script src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
		<![endif]-->
		 
		
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
		<style type="text/css" media="screen">
    .hls { background: #D3E18A; }
  </style>
  <!-- How to Highlight Search Terms with jQuery 
  http://weblogtoolscollection.com/archives/2009/04/10/how-to-highlight-search-terms-with-jquery/
  -->
  
  <script type="text/javascript">
  jQuery.fn.extend({
    highlight: function(search, insensitive, hls_class){
      var regex = new RegExp("(<[^>]*>)|(\\b"+ search.replace(/([-.*+?^${}()|[\]\/\\])/g,"\\$1") +")", insensitive ? "ig" : "g");
      return this.html(this.html().replace(regex, function(a, b, c){
        return (a.charAt(0) == "<") ? a : "<strong class=\""+ hls_class +"\">" + c + "</strong>";
      }));
    }
  });
  jQuery(document).ready(function($){
    if(typeof(hls_query) != 'undefined'){
      $("div.col-sm-8").highlight(hls_query, 1, "hls");
    }
  });
  </script>
    </head>
	
    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<?php if( is_home() ) { ?>

<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/css/front-style.css" />
<?php } ?>
        
		<div class="header_area">
			<div class="header container">
				  <div class="row">
					<div class="col-sm-12">
					<nav class="navbar navbar-default" role="navigation">

    <!-- toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	
	<?php
				if (function_exists('wp_nav_menu')) {
					wp_nav_menu(array('theme_location' => 'main_menu', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_quickstart_default_menu'));
				}
				else {
					wp_quickstart_default_menu();
				}
				?>
     <!--  <ul class="nav navbar-nav">
        <li class="active current_page_item"><a href="#">home</a></li>
        <li><a href="#">Link</a></li>
      </ul> -->
      <form class="navbar-form navbar-right" role="search" method="get" action="<?php echo home_url(); ?>">
        <div class="form-group">
          <input type="text" value="<?php esc_attr_e( 'Search', 'brightpage' ); ?>" name="s" class="form-control" placeholder="Search">
        </div>
        <button type="submit" value="<?php esc_attr_e( 'Go', 'brightpage' ); ?>" class="btn btn-default">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
 <!-- /.container-fluid -->
</nav>
						</div>
				  </div>
				  
				  
			</div>
		</div>
		
		<div class="header_footer_area">
		  <div class="header_footer container">
		    <div class="row">
			  <div class="col-sm-12">
			    <a href="<?php echo site_url(); ?>"><h1 class="text-center"><?php bloginfo('name'); ?></h1></a>
				<h3 class="text-center"><?php bloginfo('description'); ?> </h3>
				<!-- Breadcrumbs -->
				<ol class="breadcrumb">
                    <?php wp_quick_start_the_breadcrumb(); ?>
                </ol>
			  </div>
			</div>
			
		  </div>
		</div>