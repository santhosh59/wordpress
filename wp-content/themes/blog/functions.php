<?php


/*
	==========================================
	 1 Include scripts 
	==========================================
*/
      function visual_script_enqueue() {
    	   	
    	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '2.5', 'all');
    	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/fontawesome.css', array(), '2.5', 'all');
    	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/sty.css', array(), '1.0.4', 'all');
    	wp_enqueue_style('header', get_template_directory_uri() . '/css/footer.css', array(), '1.0.5', 'all');
    	wp_enqueue_style('single', get_template_directory_uri() . '/css/single.css', array(), '1.0.5', 'all');
        wp_enqueue_style('mobile', get_template_directory_uri() . '/css/mobile.css', array(), '1.0.3', 'all');
	    wp_enqueue_style('owl_carousel', get_template_directory_uri() . '/css/owl-carousel/owl_carousel.css', array(), '2.4', 'all');
    	wp_enqueue_style('owl_theme', get_template_directory_uri() . '/css/owl-carousel/owl_theme.css', array(), '2.5', 'all');

  
    	
    	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', true);
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', true);
	    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', true);
       	wp_enqueue_script('isotope', get_template_directory_uri() . '/js/isotope.js', true);
       	wp_enqueue_script('owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', true);
    	
		  wp_enqueue_style( 'bootstrap' );
		    wp_enqueue_script( 'jquery' );
	       
          	wp_enqueue_script( 'isotope' );
          	wp_enqueue_script( 'owl.carousel.min' );
			wp_enqueue_script( 'custom' );



	
		  
		  
    }
    add_action( 'wp_enqueue_scripts', 'visual_script_enqueue');

		
/*
	==========================================
comment text
	==========================================
*/

//bottom command
function wpb_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
 
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );
	

	
	//added input plaseholder
function modify_comment_form_fields($fields){
    $fields['author'] = '<p class="comment-form-author">' . ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="author" name="author" type="text" placeholder=" Your Name" value="' . esc_attr( $commenter['comment_author'] ) . '" size="20"' . $aria_req . ' /></p>';
   
   
   $fields['email'] = '<p class="comment-form-email">' . ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="email" name="email" type="email" placeholder="Enter Your Email" value="' . esc_attr( $commenter['comment_email'] ) . '" size="20"' . $aria_req . ' /></p>';
 

  return $fields;
}

add_filter('comment_form_default_fields','modify_comment_form_fields');

		//added textarea plaseholder

	function wpsites_customize_comment_form_text_area($arg) {
    $arg['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x( 'Your Feedback Is Appreciated', 'noun' ) . '</label><textarea id="comment" name="comment" placeholder="Your Comments" cols="45" rows="7" aria-required="true"></textarea></p>';
    return $arg;
}

add_filter('comment_form_defaults', 'wpsites_customize_comment_form_text_area');
/*
	==========================================
    end comment text
	==========================================
*/
	
	
	
	
/*
	==========================================
	 2	active menus
	==========================================
*/
  function visual_theme_setup() {
    	register_nav_menu('primary', 'Primary Header Navigation');
    	register_nav_menu('secondary', 'Footer Navigation');
    }
   add_action('init', 'visual_theme_setup');
   
/*
	==========================================
	 3 theme support function
	==========================================
*/
	add_theme_support('menus');
   	add_theme_support('custom-header');
    add_theme_support('custom-background');
   	add_theme_support('post-thumbnails');
   	add_theme_support('post-category');
   	add_theme_support('post-formats',array('aside','image','video'));
   	add_theme_support('html5',array('search_form'));


	/*
	==========================================
	 4	sidebar function
	==========================================
*/
		   	function visual_widget_setup(){
    			register_sidebar(
			array(
			'name' => 'Sidebar',
			'id'   =>  'sidebar-1',
			'class' => 'side1',
			'description' => 'standard sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h2 class="container widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init','visual_widget_setup');
/*
	==========================================
	end sidebar function 
	==========================================
*/

/*
	==========================================
	5 include walker files 
	==========================================
*/

    // require get_template_directory() . '/inc/walker-sample.php';
  
    /*
	==========================================
        6 post width more options
	==========================================
*/
/* Modify the read more link on the_excerpt() */
 
function et_excerpt_length($length) {
    return 50;
}
add_filter('excerpt_length', 'et_excerpt_length');
 
/* Add a link  to the end of our excerpt contained in a div for styling purposes and to break to a new line on the page.*/
 
function et_excerpt_more($more) {
    global $post;
    return '<div class="view-full-post"><a href="'. get_permalink($post->ID) . '" class="view-full-post-btn">read more</a></div>';
}
add_filter('excerpt_more', 'et_excerpt_more');


 /*
	==========================================
         7 pagination   
	==========================================
*/
  function wpbeginner_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="navigation"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
 
}
 /*
	==========================================
       end pagination 
	==========================================
*/
/*
	==========================================
	 8 Custom Post Type
	==========================================
*/
/*
	==========================================
	end Custom Post Type
	==========================================
*/


/*
	==========================================
	9 owl carousel
	==========================================
*/
add_image_size( 'carousel-pic', 350, 180, true ); 
// Custom control for carousel category
 
if (class_exists('WP_Customize_Control')) {
    class WP_Customize_Category_Control extends WP_Customize_Control {
 
        public function render_content() {
   
            $dropdown = wp_dropdown_categories( 
                array(
                    'name'              => '_customize-dropdown-category-' . $this->id,
                    'echo'              => 0,
                    'show_option_none'  => __( '&mdash; Select &mdash;' ),
                    'option_none_value' => '0',
                    'selected'          => $this->value(),
                     
                )
            );
 
            $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );
  
            printf(
                '<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
                $this->label,
                $dropdown
            );
        }
    }
}
 
// Register slider customizer section 
 
add_action( 'customize_register' , 'carousel_options' );
 
function carousel_options( $wp_customize ) {
 
$wp_customize->add_section(
    'carousel_section',
    array(
        'title'     => 'Carousel settings',
        'priority'  => 202,
        'capability'  => 'edit_theme_options',
    )
);
 
$wp_customize->add_setting(
    'carousel_setting',
     array(
    'default'   => '',
  )
);
 
$wp_customize->add_control(
    new WP_Customize_category_Control(
        $wp_customize,
        'carousel_category',
        array(
            'label'    => 'Category',
            'settings' => 'carousel_setting',
            'section'  => 'carousel_section'
        )
    )
);
 
$wp_customize->add_setting(
    'count_setting',
     array(
    'default'   => '6',
 
  )
);
 
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'carousel_count',
        array(
            'label'          => __( 'Number of posts', 'theme_name' ),
            'section'        => 'carousel_section',
            'settings'       => 'count_setting',
            'type'           => 'text',
        )
    )
);
 
}

/*
	==========================================
	end owl carousel
	==========================================
*/

/*
	==========================================
	10 tabs
	==========================================
*/
function page_tabs( $current = 'first' ) {
    $tabs = array(
        'first'   => __( 'First tab', 'plugin-textdomain' ), 
        'second'  => __( 'Second tab', 'plugin-textdomain' ),
        'third'  => __( 'third tab', 'plugin-textdomain' )
    );
    $html = '<h2 class="nav-tab-wrapper">';
    foreach( $tabs as $tab => $name ){
        $class = ( $tab == $current ) ? 'nav-tab-active' : '';
        $html .= '<a class="nav-tab ' . $class . '" href="?page=ipl_dbx_import_export&tab=' . $tab . '">' . $name . '</a>';
    }
    $html .= '</h3>';
    echo $html;
}
/*
	==========================================
	10   end tabs
	==========================================
*/


/*
	==========================================
	11   Breadcrumbs
	==========================================
*/
// Breadcrumbs
function custom_breadcrumbs() {
       
    // Settings
    $separator          = '&gt;';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    $home_title         = 'Homepage';
      
    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';
       
    // Get the query & post information
    global $post,$wp_query;
       
    // Do not display on the homepage
    if ( !is_front_page() ) {
       
        // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
           
        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="separator separator-home"> ' . $separator . ' </li>';
           
        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
              
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
              
        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
              
        } else if ( is_single() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            // Get post category info
            $category = get_the_category();
             
            if(!empty($category)) {
              
                // Get last category post is in
                $last_category = end(array_values($category));
                  
                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);
                  
                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                    $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
                }
             
            }
              
            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                   
                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
               
            }
              
            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {
                  
                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
              
            } else {
                  
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            }
              
        } else if ( is_category() ) {
               
            // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
               
        } else if ( is_page() ) {
               
            // Standard page
            if( $post->post_parent ){
                   
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                   
                // Get parents in the right order
                $anc = array_reverse($anc);
                   
                // Parent page loop
                if ( !isset( $parents ) ) $parents = null;
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }
                   
                // Display parent pages
                echo $parents;
                   
                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                   
            } else {
                   
                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                   
            }
               
        } else if ( is_tag() ) {
               
            // Tag page
               
            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
               
            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
           
        } elseif ( is_day() ) {
               
            // Day archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
               
            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_month() ) {
               
            // Month Archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_year() ) {
               
            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
               
        } else if ( is_author() ) {
               
            // Auhor archive
               
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
               
            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
           
        } else if ( get_query_var('paged') ) {
               
            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
               
        } else if ( is_search() ) {
           
            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
           
        } elseif ( is_404() ) {
               
            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }
       
        echo '</ul>';
           
    }
       
}

/*
	==========================================
	11 end  Breadcrumbs
	==========================================
*/



/*
	==========================================
	12 post viewer
	==========================================
*/

function bac_PostViews($post_ID) {
 
    //Set the name of the Post's Custom Field.
    $count_key = 'post_views_count'; 
     
    //Returns values of the custom field with the specified key from the specified post.
    $count = get_post_meta($post_ID, $count_key, true);
     
    //If the User is NOT Logged In:
    if(!is_user_logged_in() ){
        //If the the Post Custom Field value is empty. 
        if($count == ''){
            $count = 0; // set the counter to zero.
             
            //Delete all custom fields with the specified key from the specified post. 
            delete_post_meta($post_ID, $count_key);
             
            //Add a custom (meta) field (Name/value)to the specified post.
            add_post_meta($post_ID, $count_key, '0');
            return $count . ' View';
         
        //If the the Post Custom Field value is NOT empty.
        }else{
            $count++; //increment the counter by 1.
            //Update the value of an existing meta key (custom field) for the specified post.
            update_post_meta($post_ID, $count_key, $count);
             
            //If statement, is just to have the singular form 'View' for the value '1'
            if($count == '1'){
            return $count . ' View';
            }
            //In all other cases return (count) Views
            else {
            return $count . ' Views';
            }
        }
    //If the User is Logged In, just return the View count. 
    //At a New Post, the $Count will be undefined until you log Out.
    }else {
        return $count . ' Views';
    }
}





//backend view
//Gets the  number of Post Views to be used later.
function get_PostViews($post_ID){
    $count_key = 'post_views_count';
    //Returns values of the custom field with the specified key from the specified post.
    $count = get_post_meta($post_ID, $count_key, true);
 
    return $count;
}
 
//Function that Adds a 'Views' Column to your Posts tab in WordPress Dashboard.
function post_column_views($newcolumn){
    //Retrieves the translated string, if translation exists, and assign it to the 'default' array.
    $newcolumn['post_views'] = __('Views');
    return $newcolumn;
}
 
//Function that Populates the 'Views' Column with the number of views count.
function post_custom_column_views($column_name, $id){
     
    if($column_name === 'post_views'){
        // Display the Post View Count of the current post.
        // get_the_ID() - Returns the numeric ID of the current post.
        echo get_PostViews(get_the_ID());
    }
}
//Hooks a function to a specific filter action.
//applied to the list of columns to print on the manage posts screen.
add_filter('manage_posts_columns', 'post_column_views');
 
//Hooks a function to a specific action. 
//allows you to add custom columns to the list post/custom post type pages.
//'10' default: specify the function's priority.
//and '2' is the number of the functions' arguments.
add_action('manage_posts_custom_column', 'post_custom_column_views',10,2);
/*
	==========================================
	12 end post viewer
	==========================================
*/
add_action( 'init', 'kv_register_shortcode_for_newsletter');

function kv_register_shortcode_for_newsletter(){
	
	add_shortcode('kv_email_subscriptions', 'kv_email_subscription_fn' );
}	
if('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['kv_submit_subscription'])) {

	if( filter_var($_POST['subscriber_email'], FILTER_VALIDATE_EMAIL) ){
	
		$blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);
					 
		$subject = sprintf(__('New Subscription on %s','kvc'), $blogname);
					 
		$to = get_option('admin_email'); 
					 
		$headers = 'From: '. sprintf(__('%s Admin', 'kvc'), $blogname) .' <No-repy@'.$_SERVER['SERVER_NAME'] .'>' . PHP_EOL;
					 
		$message  = sprintf(__('Hi ,', 'kvc')) . PHP_EOL . PHP_EOL;
		$message .= sprintf(__('You have a new subscription on your %s website.', 'kvc'), $blogname) . PHP_EOL . PHP_EOL;
		$message .= __('Email Details', 'kvc') . PHP_EOL;
		$message .= __('-----------------') . PHP_EOL;
		$message .= __('User E-mail: ', 'kvc') . stripslashes($_POST['subscriber_email']) . PHP_EOL;
		$message .= __('Regards,', 'kvc') . PHP_EOL . PHP_EOL;
		$message .= sprintf(__('Your %s Team', 'kvc'), $blogname) . PHP_EOL;
		$message .= trailingslashit(get_option('home')) . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL;
				
		if (wp_mail($to, $subject, $message, $headers)){					
			echo 'Your e-mail (' . $_POST['subscriber_email'] . ') has been added to our mailing list!';
		}else{
			echo 'There was a problem with your e-mail (' . $_POST['subscriber_email'] . ')';   
		}
				
	}else{
		echo 'There was a problem with your e-mail (' . $_POST['subscriber_email'] . ')';   
	}
}
if(!function_exists('kv_email_subscription_fn')) {
	add_action('kv_email_subscription' , 'kv_email_subscription_fn' );

	function kv_email_subscription_fn() {
		// Here your php code and its form components..
	}
}
class Kv_Subscription_widget extends WP_Widget {

	public function __construct() {
		$widget_ops = array( 
			'classname' => 'kv_email_subscription',
			'description' => 'A Simple Email Subscription Widget to get subscribers info',
		);
		parent::__construct( 'my_widget', 'Kv Subscriptions', $widget_ops );
	}

	public function widget( $args, $instance ) {
		echo '<aside>'; 
		
		
		do_action('kv_email_subscription'); // just adding this function will helps you to call the form and its actions with in it.
		echo '</aside>';
	}
}
add_action( 'widgets_init', function(){
	register_widget( 'Kv_Subscription_widget' );
});




/*
	==========================================
	sample
	==========================================
*/
?>