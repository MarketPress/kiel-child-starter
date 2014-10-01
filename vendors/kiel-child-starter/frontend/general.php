<?php
/**
 * Feature Name:    Some general functions for the kiel child starter
 * Version:		    0.1
 * Author:		    Inpsyde GmbH for MarketPress.com
 * Author URI:	    http://inpsyde.com/
 */

/**
 * Adding our own Theme-Info
 *
 * @wp-hook kiel_get_theme_info
 * @param   String $text
 * @return  String $text
 */
function kiel_child_starter_filter_kiel_get_footer_theme_info( $text ) {

	$home_url = home_url( '/' );
	$home_url = esc_url( $home_url );

	$text = sprintf(
		'<p class="mp-site-info">&copy; %s <a href="%s" rel="nofollow">%s</a></p>',
		date( 'Y' ),
		$home_url,
		get_bloginfo( 'name' )
	);

	return $text;
}