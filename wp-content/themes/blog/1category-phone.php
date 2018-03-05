
<?php
 
get_header(); ?>




	<div class="container">
	<div class="col-sm-8">
	  <?php
		query_posts(array('posts_per_page' => 15, 'category_name' => 'phone'));
		if(have_posts()) : while(have_posts()) : the_post();
		?>
						<?php get_template_part('content'); ?>
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
	</section>
	
	<?php get_footer(); ?>