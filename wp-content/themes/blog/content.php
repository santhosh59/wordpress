


<div class="imas">
	<div class="thumbnail-img img-responsive"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(600,280)); ?></a></div>
 <small class="datess"> <?php the_time('M j'); ?>   </small>

	<div class="imas_liter"> 
      <div class="content">

	<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	  <small><i class="fa fa-calendar" aria-hidden="true"></i>   &nbsp;&nbsp; <?php the_time('F j, y'); ?>     &nbsp;    
	   <i class="fa fa-user" aria-hidden="true"></i>&nbsp; <?php $author = the_author(); ?> &nbsp;&nbsp;   <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp; <?php if(function_exists('bac_PostViews')) { 
                           echo bac_PostViews(get_the_ID()); 
                            }?>  &nbsp;&nbsp; <i class="fa fa-comments-o" aria-hidden="true"></i> &nbsp;&nbsp;  <?php $commentscount = get_comments_number(); echo $commentscount; ?>	   		

	</small>
<br> 
<br> 
         <?php the_excerpt(); ?>        

            <!--view reading  -->
					        
				     <!-- end view reading  -->

	</div>
	</div>
	</div> 
	
