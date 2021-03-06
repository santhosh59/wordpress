<?php

	
/* Collection of Walker classes */

	/*
		
		wp_nav_menu()
		
		<div class="menu-container">
			<ul> // start_lvl()
				<li><a><span> // start_el()
				
					</a></span>
					
					<ul>
					</li> // end_el()
					
				<li><a>Link</a></li>
				<li><a>Link</a></li>
				<li><a>Link</a></li>
				
			</ul> // end_lvl()
		</div>
		
	*/


/* ----------------------------------------------------------------------------------
	ADD MENU DESCRIPTION FEATURE
---------------------------------------------------------------------------------- */

class walker_nav_primary extends Walker_Nav_Menu {

	function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
		global $wp_query;
		
		$item_output = NULL;
		
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
 
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';
 
		$output .= $indent . '<li id="menu-item-' . esc_attr( $item->ID ) . '"' . $value . $class_names . '>';

		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_url( $item->url ) . '"' : ' href="' . esc_url( get_permalink( $item->ID ) ) . '"';

        // Insert title for top level
		if ( has_nav_menu( 'header_menu' ) ) {
			$title = ( $depth == 0 )
				? '<span>' . apply_filters( 'the_title', $item->title, $item->ID ) . '</span>' : apply_filters( 'the_title', $item->title, $item->ID );
		} else {
			$title = ( $depth == 0 )
				? '<span>' . apply_filters( 'the_title', get_the_title($item->ID), $item->ID ) . '</span>' : apply_filters( 'the_title', get_the_title($item->ID), $item->ID );
		}

        // Insert description for top level elements only
		$description = ( ! empty ( $item->description ) and $depth == 0 )
			? '<span>' . esc_attr( $item->description ) . '</span>' : '';

        // Structure of output
		if ( ! empty( $description ) ) {
			$item_output .= '<a'. $attributes .'><div class="header-walker">';
			$item_output .= $title;
			$item_output .= $description;
			$item_output .= '</div></a>';
		} else {
			$item_output .= '<a'. $attributes .'>';
			$item_output .= $title;
			$item_output .= '</a>';
		}

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}
