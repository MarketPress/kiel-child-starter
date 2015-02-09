<?php
/**
 * Feature Name:    Scripts Functions for Kiel-Child-Starter
 * Version:		    0.1
 * Author:		    Inpsyde GmbH for MarketPress.com
 * Author URI:	    http://inpsyde.com/
 */

/**
 * Adding the kiel child starter style to the kiel theme
 *
 * @wp-hook	kiel_get_styles
 * @return  Array
 */
function kiel_child_starter_filter_kiel_get_scripts_add_scripts() {


	/**
	 * The .min suffix for stylesheets and scripts.
	 *
	 * In order to provide a quick start, this child theme by default will load
	 * regular style.css and frontend.js (whereas its parent theme Kiel loads
	 * minified versions of its stylesheets and scripts by default).
	 *
	 * If you want your child theme to default on minified stylesheets and
	 * scripts as well, just uncomment line 33.
	 * You can then temporarily switch back to unminified versions of the same
	 * files by setting the constant SCRIPT_DEBUG to TRUE in your wp-config.php:
	 * define( 'SCRIPT_DEBUG', TRUE );
	 */
	$suffix = '';
	// Uncomment to load minified stylesheet by default
	// $suffix = kiel_get_script_suffix();

	// getting the theme-data
	$theme_data = wp_get_theme();

	// adding our own styles to
	$styles[ 'kiel_child_starter' ] = array(
		'src'       => get_stylesheet_directory_uri() . '/assets/js/frontend' . $suffix . '.js',
		'deps'      => NULL,
		'version'   => $theme_data->Version,
		'in_footer' => TRUE
	);

	return $styles;
}