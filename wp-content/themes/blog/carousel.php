
<div id="slider1">
 
    <?php
    $carousel_cat = get_theme_mod('carousel_setting','1');
    $carousel_count = get_theme_mod('count_setting','4');
    $new_query = new WP_Query( array( 'category_name' => phone  , 'showposts' => 6 ));
    while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
 
    <div class="item">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'carousel-pic' ); ?></a>
        <h3> <?php the_title();?> </h3>
    </div>
 
    <?php 
        endwhile;
        wp_reset_postdata(); 
    ?>
 
</div>

