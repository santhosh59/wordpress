
<?php get_header(); ?>

<div class="container">


<div class="bread_back img-responsive">
                    <div class="overflow ">	   
			      <h3> <?php the_title(); ?> </h3>
                  <?php custom_breadcrumbs(); ?> 
               </div>
 </div>
 
<div class="po"></div>
		<div class="row">
	
	<div class="col-xs-12 col-sm-8">
	
		  <div class="sig_post">
		<?php 
		
		if( have_posts() ):
			while( have_posts() ): the_post(); ?>
				<?php if( has_post_thumbnail() ): ?>

					<?php endif; ?>
				     				<div class="img-responsive sin_post"><br><?php the_post_thumbnail( array(840,560) ); ?></div>
				     	<div class="sin_text">
					                <?php the_title('<h2 class="entry-title">','</h2>' ); ?>
					                 <small class="sig_aut"><i class="fa fa-calendar" aria-hidden="true"></i>   &nbsp;&nbsp; <?php the_time('F j, y'); ?>     &nbsp;    
	                                          <i class="fa fa-user" aria-hidden="true"></i>&nbsp; <?php $author = the_author(); ?>&nbsp;&nbsp;<i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;<?php if(function_exists('bac_PostViews')) { 
                                             echo bac_PostViews(get_the_ID());    }?>&nbsp;&nbsp; <i class="fa fa-comments-o" aria-hidden="true"></i> &nbsp;&nbsp;  <?php $commentscount = get_comments_number(); echo $commentscount; ?>
                                      </small>
									<br>
				                      <p><?php the_content(); ?></p>
									 <br>
								
								<ul class="single_social social_icon">
                          <li>SHARE:</li>
                          <li><a href="#"><i class="fa fa-facebook" ></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter" ></i></a></li>
                          <li><a href="#"><i class="fa fa-google-plus" ></i></a></li>
                          <li><a href="#"><i class="fa fa-instagram" ></i></a></li>
                         	
                      </ul>
					  
					  </div>
                        </div>
					                <br>
					
				


		
         <div class="row">
				 <div class="col-sm-6">
				 <div class="prev">
			<?php previous_post_link('<strong class="pre_color">%link</strong>', '<  Newer Article<br> %title', TRUE, '5'); ?>			
			         </div>	
			     </div>	
			 	 <div class="col-sm-6 ">
			<?php next_post_link('<strong class="pre_color pull-right">%link</strong>', 'Older Article  ><br> %title', TRUE, '5'); ?>			
                 </div>	
				 </div>
	
 <hr>

				<div class="single_comment">
				<?php 
						if( comments_open() ){ 
							comments_template(); 
						} else {
							echo '<h5 class="text-center">Sorry, Comments are closed!</h5>';
						}
       				 ?>
				</div>
				<br>
			      


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
