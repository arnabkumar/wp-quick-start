<div class="footer_area">
		  <div class="footer container">
		  
		  <div class="row">
			 
			 <div class="col-sm-12">
			 <?php wp_nav_menu( array( 'theme_location' => 'footer_menu', 'menu_class' => 'footer_menu list-inline text-center') ); ?>
			  <!-- <ul class="footer_menu list-inline text-center">
			    <li><a href="#">home</a></li>
			    <li><a href="#">home</a></li>
			    <li><a href="#">home</a></li>
			    <li><a href="#">home</a></li>
			    <li><a href="#">home</a></li>
			  </ul> -->
			 </div>
			</div>
		     <div class="row">
			 <div class="col-sm-6">
			  <p><a href="http://wordpress.org/"><?php _e('Proudly powered by WordPress', 'wp_quickstart'); ?></a> | <?php _e('Theme design by', 'wp_quickstart'); ?> <a href="http://arnabportfolio.blogspot.in/">arnabportfolio</a></p>
			 </div>
			 <div class="col-sm-6">
			  <p>&copy; <?php echo date('Y');?> <a href="<?php echo home_url(''); ?>/" title="<?php bloginfo('name');?>" ><?php bloginfo('name');?></a></p>
			 </div>
			</div>
		    
		  </div>
		</div>
		
		<!-- call bootstrap js from cdn  -->
		
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

      <?php wp_footer(); ?>
    </body>
</html>
