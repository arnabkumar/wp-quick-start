<?php if(have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>	
 
  <!--  Blog Post -->
                <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <p class="lead">
                    by <a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a>&nbsp;in&nbsp;<a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a>
                </p>
                <p><i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:00 PM&nbsp;&nbsp;-<?php if ( comments_open() ) : ?>
					<span class="entry-comments right"><?php comments_popup_link('No Comment', '1 Comment', '% Comments'); ?></span>
				<?php endif; ?></p>
                <hr>
                <a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('blog_post_f_image', array('class' => 'img-responsive img-hover')); ?>
                </a>
                <hr>
                <p><?php echo excerpt('30'); ?></p>
				 <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right"></i></a>

                <hr>
 
<?php endwhile; ?>

<?php else : ?>
						
					<?php get_template_part('inc/not-found'); ?>
						
					<?php endif; ?>	
                