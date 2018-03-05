
<?php
 /*
   template name:blogs
   Template Post Type: post, page, event
*/

get_header(); ?>



<div class="bread_back img-responsive">
       
             <div class="overflow ">	   
			      <h3> <?php the_title(); ?> </h3>
                  <?php custom_breadcrumbs(); ?> 
               </div>
 </div>
		  	<div class="po"></div>
<div class="container">
 <div class="row">
	<div class="col-sm-8">
	
	 <?php
		query_posts(array('posts_per_page' => 2));
		if(have_posts()) : while(have_posts()) : the_post();
		?>
	
		<div class="  single_post">
					<?php get_template_part('content', 'search'); ?>
					
									

					
		</div>		
					<?php
		    endwhile; 
			endif;						
            wpbeginner_numeric_posts_nav(); 
			wp_reset_query();
		

		?>
		</div>
	
		
		
<div class="col-sm-4">
<?php get_sidebar(); ?>
</div>
		
	</div>
	</div>

	<?php get_footer(); ?>