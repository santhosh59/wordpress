
<footer>
<hr>
<div class="container">
	<?php //wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'footer-menu'  )); ?>
	
  <div class="row">
           <div class="col-sm-3">	
		           <div class="col_1">   <a class="navbar-brand" href="#">
		        			     <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
		              	</a>
						<br>
						<br>
        				   <br>
		                <p>The art and practice of planning and projecting ideas and experiences with visual and textual contents.</p>
                       <ul class="social_icon">
                          <li><a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;"><i class="fa fa-facebook"></i></a>  </a></li>
                          <li><a class="twitter" href="http://twitter.com/home?status=Reading: <?php the_permalink(); ?>" title="Share this post on Twitter!" target="_blank"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa fa-youtube-play" ></i></a></li>
                          <li><a href="#"><i class="fa fa-google-plus" ></i></a></li>
                          <li><a href="#"><i class="fa fa-instagram" ></i></a></li>
                        </ul>
		   		   </div>

		 </div>
		 <div class="col-sm-3">
		    <div class="side_resent col_2">
              	<h2>Latest News</h2>
		 		     <ul class="quick_link">
			              <li><a href="#">About Us</a></li>
                          <li><a href="#">resent projects</a></li>
                          <li><a href="#">our mission</a></li>
                          <li><a href="#">pricvicy & policy</a></li>                   	
                     </ul>
					
	       </div>
	      </div>
			 
                 <div class="col-sm-3">
                    <div class="side_resent">
                       	<h2>Latest News</h2>
                                <?php 
                                $args = array( 'posts_per_page' => '2' );
                                $recent_posts = new WP_Query($args);
                                while( $recent_posts->have_posts() ) :  
                                    $recent_posts->the_post() ?>
                                    <div class="side_resent">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                		        <a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail(array(79,69)) ?></a> 
                                                
                                				<div class="side_text">   <a href="<?php echo get_permalink() ?>"><?php the_title() ?></a> <br>
                                                     <small><i class="fa fa-calendar" aria-hidden="true"></i>   &nbsp;&nbsp; <?php the_time('F j, y'); ?> </small>
                                				</div>
                                        <?php endif ?>    
                                    </div>
                               <?php endwhile; ?>
                               <?php wp_reset_postdata(); # reset post data so that other queries/loops work ?> 
                     </div>
	            </div>
				
                <div class="col-sm-3">
               	 <div class="side_resent">
                         	<h2>Contact Us</h2>
               	 		     <div class="col_4">
							   <ul>
							   
                                     <li><span class="icons fa fa-map-marker"></span>K.S.R,Kalvinager,Thiruchangode<br>TamilNadu.</li>
                                     <li><span class="icons fa fa-volume-control-phone"></span>0123456789</li>
                                     <li><span class="icons fa fa-clock-o"></span>hello@ivisual.com</li>
                                </ul>
							</div>
							
								
				 </div>

                </div>
	
	</div>
	
	
	
	
	
	
	
	
	
	
	</div>
	
</footer>

 <?php // wp_footer(); ?>
 
</body>
</html>