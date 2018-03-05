


<div class="imas">
	<div class="thumbnail-img img-responsive"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(600,280)); ?></a></div>


	<div class="imas_liter"> 
      <div class="content">

	<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	   <small><i class="fa fa-calendar" aria-hidden="true"></i>   &nbsp;&nbsp; <?php the_time('F j, y'); ?>     &nbsp;    
	   <i class="fa fa-user" aria-hidden="true"></i>&nbsp; <?php $author = the_author(); ?></small>
<br> 
<br> 
         <?php the_excerpt(); ?>        

            

	</div>
	</div>
	</div> 
	
