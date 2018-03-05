<?php
/**
* A Simple Tags Template
*/
 
get_header(); ?> 
 
  	<div class="container">	
	<div class="bread_back img-responsive">
       
             <div class="overflow ">	   
             <h3 class="archive-title">Tags: <?php single_cat_title( '', true ); ?></h3>
                  <?php custom_breadcrumbs(); ?> 
               </div>
 </div>	<div class="po"></div>
<div class="row">
<div class="col-sm-8">
		  <div class="sig_post1">

<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>

<?php
 
// The Loop
while ( have_posts() ) : the_post(); ?>
<?php get_template_part('content'); ?>
 
<?php endwhile; 
 
else: ?>
<p>Sorry, no posts matched your criteria.</p>
 
 
<?php endif; ?>
</div>
</div>

 
 		
<div class="col-sm-4">
<?php get_sidebar(); ?>
</div>
		
	</div>
	</div>
	
	
	<?php get_footer(); ?>