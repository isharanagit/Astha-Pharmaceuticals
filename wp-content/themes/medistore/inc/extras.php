<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Theme Palace
 * @subpackage  medistore
 * @since  medistore 1.0.0
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function medistore_body_classes( $classes ) {
	$options = medistore_get_theme_options();

	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	
	$classes[] = 'menu-sticky';

	if ( class_exists('WooCommerce') ) {
		$classes[] = 'woocommerce';
	}

	// Add a class for layout
	$classes[] = esc_attr( $options['site_layout'] );

	if(is_404()) $classes[] = 'no-sidebar';

	// Add a class for sidebar
	$sidebar_position = medistore_layout();
	$sidebar = 'sidebar-1';
	if ( is_singular() || is_home() ) {
		$id = ( is_home() && ! is_front_page() ) ? get_option( 'page_for_posts' ) : get_the_id();
	  	$sidebar = get_post_meta( $id, 'medistore-selected-sidebar', true );
	  	$sidebar = ! empty( $sidebar ) ? $sidebar : 'sidebar-1';
	}
	
	if ( is_active_sidebar( $sidebar ) ) {
		$classes[] = esc_attr( $sidebar_position );
	} else {
		$classes[] = 'right-sidebar';
	}

	$theme_version  = ! empty ( $options['theme_version'] ) ? $options['theme_version'] : '' ;
	$classes[]		= esc_attr( $theme_version );
	
	$classes[]		= esc_attr( $options['home_layout'] ) ;

	return $classes;
}
add_filter( 'body_class', 'medistore_body_classes' );
