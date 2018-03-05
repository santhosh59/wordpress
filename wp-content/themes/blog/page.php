<?php get_header(); ?>



		
<div class="bread_back img-responsive">
       
             <div class="overflow ">	   
			      <h3> <?php the_title(); ?> </h3>
                  <?php custom_breadcrumbs(); ?> 
               </div>
 </div>
		  <div class="container">

<div class="row">
	
	<div class="col-xs-12 col-sm-8">
	
		
		
		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<p><?php the_content(); ?></p>
				
				<h3><?php //the_title(); ?></h3>
				
				
			
			<?php endwhile;
			
		endif;
				
		?>
	
	</div>
	
	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	
</div>
</div>

<?php get_footer(); ?>