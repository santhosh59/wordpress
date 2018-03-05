



<!--	==========================================
	                 Search
	    ==========================================-->
 <form class="form-wrapper-2 cf" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div class="side_search"><label class="screen-reader-text" for="s"></label>
        <input placeholder="Search here..." type="text" value="" name="s" id="s" />
		 <button type="submit"><i class="fa fa-search"></i></button>
    </div>
</form>
<!--	==========================================
	           end  Search
	    ==========================================-->


<!--	==========================================
	                     tabs
	    ==========================================-->
		
<?php  /*
// Code displayed before the tabs (outside)
// Tabs
$tab = ( ! empty( $_GET['tab'] ) ) ? esc_attr( $_GET['tab'] ) : 'first';
page_tabs( $tab );

if ( $tab == 'first' ) {

	echo "san";
    // add the code you want to be displayed in the first tab
}
if ( $tab == 'second' ) {
	$args = array( 'numberposts' => '5' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
		if ( has_post_thumbnail() ) { 
        the_post_thumbnail('thumbnail', array(150,150));
    }
	}
	wp_reset_query();
	echo "sasfsefnthosh";
    // add the code you want to be displayed in the second tab
}
if ( $tab == 'third' ) {
	$recent_posts = wp_get_recent_posts();
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
	}
	wp_reset_query();
	echo "third";
    // add the code you want to be displayed in the third tab
}
 
// Code after the tabs (outside)
*/
?>
<!--	==========================================
	                 end    tabs
	    ==========================================-->
		
		
		<!--	==========================================
	                Recent Post
	    ==========================================-->

<div class="side_resent">
	<h2>Recent Post</h2>
<?php 
$args = array( 'posts_per_page' => '3' );
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
	<!--	==========================================
	                Recent Post
	    ==========================================-->


<div id="sidebar" class="widgets-area">
    	<?php dynamic_sidebar('sidebar-1'); ?>
</div>

   