

<?php if( has_post_thumbnail() ): ?>
		
	<div class="thumbnail-img "><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small')); ?></a></div>

	<?php endif; ?>
	
	<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
	
	<small><?php the_category(); ?></small>
	
	
