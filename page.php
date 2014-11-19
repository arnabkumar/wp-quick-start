<?php get_header(); ?>
		
		<div class="main_content_area">
		
		 <div class="main_content container">
		   <div class="row">
		   	<div class="col-sm-8">
			 <?php if(have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>	

              <!--  Blog Post -->
                <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <hr>
                <a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('blog_post_f_image', array('class' => 'img-responsive img-hover')); ?>
                </a>
                <hr>
                <p><?php the_content(); ?></p>

                <hr>
			  

<?php endwhile; ?>	

<?php else : ?>
						
					<?php get_template_part('inc/not-found'); ?>
						
					<?php endif; ?>	
                
			</div>
			<?php get_sidebar(); ?>
		   </div>
		 </div>
		</div>
		<?php get_footer(); ?>