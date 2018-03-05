<?php
/**
 * The template for displaying Search Results pages.
 *
 * 
 */

get_header(); ?>
<div class="container">

<div class="bread_back img-responsive">
       
              <div class="overflow ">	   
			      <h3> <?php the_title(); ?> </h3>
                  <?php custom_breadcrumbs(); ?> 
               </div>
 </div>
 <div class="po"></div>

 <div class="row">
 <div class="col-sm-8">
 		  <div class="sig_post1">

			<?php if ( have_posts() ) : ?>

				<div id="container">
				

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'search'  ); ?>

				<?php endwhile; ?>

				</div><div class="clearboth"></div>

				<?php   wpbeginner_numeric_posts_nav();  ?>

			<?php 
			
				else : echo wpautop( 'Sorry, no posts were found' );

			?>

				<?php get_template_part( 'no-results', 'search' ); ?>

			<?php endif; ?>
	</div>
	</div>
	<div class="col-sm-4">
	   <?php get_sidebar(); ?>
	    
	</div>
</div>
			
			
			
			
</div>
<?php get_footer(); ?>
