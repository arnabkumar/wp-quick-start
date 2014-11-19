<?php get_header(); ?>
		
		<div class="main_content_area">
		 <div class="main_content container">
		   <div class="row">
		   	<div class="col-sm-8">
			 
               <h2><?php printf( __( 'Search Results for: %s', 'sanchari' ), '<span>' . get_search_query() . '</span>' ); ?>
			<?php $title = get_the_title(); $keys= explode(" ",$s); $title = preg_replace('/('.implode('|', $keys) .')/iu', '<strong class="search-excerpt">\0</strong>', $title); ?>
			<?php echo $title; ?></h2>
               <?php get_template_part( 'post-excerpt' ); ?>
			  
<?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { include('navigation.php'); } ?>

                
			</div>
			<?php get_sidebar(); ?>
		   </div>
		 </div>
		</div>
		<?php get_footer(); ?>