<?php get_header(); ?>
   
   <?php //echo do_shortcode('[smartslider3 slider=2]'); ?>
    <?php //echo do_shortcode('[ninja_form id=3] '); ?>
	
<div class="container">
		<div class="row">
		<div class="col-sm-8">
		              <?php
	                   	query_posts(array('posts_per_page' => 5));
	                   	if(have_posts()) : while(have_posts()) : the_post();
	                   	?>
	                   					<?php get_template_part('content','get_post_format()'); ?>
	                   				<?php
	                   	    endwhile;
	                   		endif;
	                   		wp_reset_query();
		?>
	

		</div>		
		

		
		
		
		
		
<div class="col-sm-4">
     <?php get_sidebar(); ?>
 </div>
		
	</div>
	</div>		
					
<?php get_footer(); ?>
