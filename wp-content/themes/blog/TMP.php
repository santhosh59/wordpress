


<?php get_header(); ?>




          <div class="container">	  
            
                  <div class="col-xs-12 ">
				      <?php
			//last post		  
					  $lastBlog = new WP_Query('type=post&posts_per_page=1');
					  
                          	if( $lastBlog->have_posts() ):
                        	  while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                              	   <?php get_template_part('content', get_post_format() ); ?>
                              		<?php endwhile;
                        		endif;
                        		wp_reset_postdata();
                          ?>
                    </div>





		   <div class="row">
                    <div class="col-xs-12 col-sm-8">
				      <?php
                          	
								//print other 2 posts and not first post
								
								$args = array(
								    'type' => 'post',
									'posts_per_page' => 2,
									'offset' => 1,
								      
								);
								

							 $lastBlog = new WP_Query($args);
					  
                          	if( $lastBlog->have_posts() ):
                        	  while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                              	   <?php get_template_part('content', get_post_format() ); ?>
                              		<?php endwhile;
                        		endif;
                        	
							wp_reset_postdata();
								
	                          ?>
                    </div>
             
               <?php
				//print other 2 posts and not first post
                                    $args = array(
								    'type' => 'post',
									'posts_per_page' => 2,
									
								      
								);
					  $lastBlog = new WP_Query('type=post&posts_per_page=-1&cat=13');
					  
                          	if( $lastBlog->have_posts() ):
                        	  while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                              	   <?php get_template_part('content', get_post_format(),'featured'); ?>
                              		<?php endwhile;
                        		endif;
                        		wp_reset_postdata();
                          ?>
	




				  <div class="col-xs-12 col-sm-4">
	                  <?php get_sidebar(); ?>
	               </div>
	               
          </div>
	
	
	
 	

<?php get_footer(); ?>
