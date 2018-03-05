  <div class="row">
     <div class="col-sm-4">
	                 <div class="thumbnail-img img-responsive"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(350,350)); ?></a></div>
    </div>
  
     <div class="col-sm-8">
           <small>posted on: <?php the_time('F j, y'); ?>at <?php the_time('g:i a') ?></small>
           <h3><?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?></h3>
     <?php the_excerpt(); ?>
	  </div>
  </div>