<?Php /* Template Name: welcome-template.php */ ?>

<?php get_header(); ?>
<?php get_template_part('slider'); ?>
		<!-- call to action -->
		<hr>
		<div class="call_to_action_area">
		 <div class="call_to_action container">
		   <div class="well">
            <div class="row">
                <div class="col-sm-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="btn btn-lg btn-default btn-block">Call to Action</a>
                </div>
            </div>
        </div>
		 </div>
		</div>
		
		<div class="front_widgets_area">
		  <div class="front_widgets container">
		    <div class="row">
	<?php $service_cate_id = get_option_tree( 'service_cate_id', '', false ); ?>
			<?php
				global $post;
				$args = array( 'posts_per_page' => 3, 'post_type'=> 'service_items',
                $service_cate_id => 'service_cate'				);
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) : setup_postdata($post); ?>
				<?php $service_icon_m = get_post_meta($post->ID, 'service_icon_m', true); ?> 
			  <div class="col-sm-4">
			    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>
						 <?php if ( $service_icon_m ) : ?>
						<i class="fa <?php echo $service_icon_m; ?>"></i>
						<?php else : ?>
                <i class="fa fa-fw fa-gift"></i>
        <?php endif; ?>
						<?php the_title(); ?></h4>
                    </div>
                    <div class="panel-body">
                        <p><?php echo excerpt('30'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-default">Learn More</a>
                    </div>
                </div>
			  </div>
			  <?php endforeach; ?>
			  </div>
		  </div>
		</div>
		
<?php get_footer(); ?>