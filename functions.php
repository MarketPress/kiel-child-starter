<?php
/**
* Feature Name:		Functions for the kiel child starter
*/


/**
 * Sets up theme defaults and registers support for various WordPress features
 * of Kiel Child Theme.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support for post thumbnails.
 *
 * @since   05/21/2014
 * @return  void
 */
function kiel_child_starter_setup() {

	/* The .min suffix for stylesheets and scripts.
	 *
	 * In order to provide a quick start, this child theme by default will load
	 * regular CSS and javascript files (whereas its parent theme loads
	 * minified versions of its stylesheets and scripts by default).
	 *
	 * If you want your child theme to default on minified stylesheets and scripts,
	 * set the following filter:
	 *
	 * if( function_exists( 'kiel_get_script_suffix' ) ) {
	 *     add_filter( 'kiel_child_starter_get_script_suffix', 'kiel_get_script_suffix' );
	 * }
	 *
	 * Don’t forget to actually add applicable .min files to your child theme first!
	 *
	 * You can then temporarily switch back to unminified versions of the same
	 * files by setting the constant SCRIPT_DEBUG to TRUE in your wp-config.php:
	 * define( 'SCRIPT_DEBUG', TRUE );
	 */

	// set the vendor dir
	$vendor_dir = __DIR__ . '/vendors/';

	// localization
	load_theme_textdomain( 'kiel-child-starter', get_template_directory() . '/languages' );

	if ( ! is_admin() ) {

		// styles
		include_once( $vendor_dir . 'kiel-child-starter/frontend/style.php' );
		add_filter( 'kiel_get_styles', 'kiel_child_starter_filter_kiel_get_styles_add_stylesheets' );

		// scripts
		include_once( $vendor_dir . 'kiel-child-starter/frontend/script.php' );
		add_filter( 'kiel_get_scripts', 'kiel_child_starter_filter_kiel_get_scripts_add_scripts' );

		// general
		include_once( $vendor_dir . 'kiel-child-starter/frontend/general.php' );
		add_filter( 'kiel_get_footer_theme_info', 'kiel_child_starter_filter_kiel_get_footer_theme_info' );
	}
}
add_action( 'after_setup_theme', 'kiel_child_starter_setup' );
