<?php
/**
 * Feature Name:    Scripts Functions for Kiel-Child-Starter
 */

/**
 * Adding the kiel child starter style to the kiel theme
 *
 * @wp-hook	kiel_get_styles
 * @return  Array
 */
function kiel_child_starter_filter_kiel_get_scripts_add_scripts() {

	// add suffix
	$suffix = apply_filters( 'kiel_child_starter_get_script_suffix', '' );

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
