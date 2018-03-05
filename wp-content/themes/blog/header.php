<!doctype html>
<html lang="en">	
<head>
		<meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>ivisual theme</title>
		
		<?php wp_head(); ?>
	</head>
	
	
   
 <?php //add_filter('show_admin_bar', '__return_false'); ?>
	
	              <?php
	             
//post				 
	                  if( is_front_page() ):
	              		$ivisual_classes = array( 'ivisual-class', 'my-class' );
	              	else:
	              		$ivisual_classes = array( 'no-ivisual-class' );
	              	endif;
	              	?>
			 
		
	
	<body <?php body_class($ivisual_classes); ?>>
	
<!--navbar --> 


 <nav class="navbar">
        <div class="container">
            <div class="navbar-header"> 	                   
			
               <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
	     	</button>

		         <a class="navbar-brand" href="#">
		        			     <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
		      	</a>
		      	 
            </div>
                          <div id="navbar" class="collapse navbar-collapse">
              			 <?php wp_nav_menu( array( 'theme_location' => 'primary' , 'menu_class' => 'primary-menu' ) ); ?>
	                   <div class="nav123">   <?php get_search_form(); ?></div>

            </div>
        </div>

    </nav>
    
	
