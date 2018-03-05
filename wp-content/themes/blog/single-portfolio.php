
<?php get_header(); ?>


          <div class="container">
         <div class="row">
	
	<div class="col-xs-12 col-sm-8">
		
		<?php 
		
		if( have_posts() ):
			while( have_posts() ): the_post(); ?>
				<?php if( has_post_thumbnail() ): ?>
    				<div class="img-responsive"><?php the_post_thumbnail( array(840,560) ); ?></div>
     				<?php the_title('<h2 class="entry-title">','</h2>' ); ?>

					<?php endif; ?>
				

				 <small><i class="fa fa-calendar" aria-hidden="true"></i>   &nbsp;&nbsp; <?php the_time('F j, y'); ?>     &nbsp;    
	   <i class="fa fa-user" aria-hidden="true"></i>&nbsp; <?php $author = the_author(); ?>&nbsp;&nbsp;<i class="fa fa-folder-open" aria-hidden="true"></i>
 </small>
					

<hr>					<p><?php the_content(); ?></p>
				
				<hr>
				<div class="single_pre pull-left">
                     <?php previous_post_link(); ?>
				</div>
				<div class="single_nxt pull-right">
		           <?php next_post_link(); ?>
				   </div>
					
				
					
					
					
				
			

			<?php endwhile;
			
		endif;
				
		?>
		
</div>

	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	
</div>
          <?php get_footer(); ?>
