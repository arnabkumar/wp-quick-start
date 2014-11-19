<?php get_header(); ?>
		
		<div class="main_content_area">
		 <div class="main_content container">
		   <div class="row">
		   	<div class="col-sm-8">
			 

               <?php get_template_part( 'post-excerpt' ); ?>
			  
<?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { include('navigation.php'); } ?>

                
			</div>
			<?php get_sidebar(); ?>
		   </div>
		 </div>
		</div>
		<?php get_footer(); ?>