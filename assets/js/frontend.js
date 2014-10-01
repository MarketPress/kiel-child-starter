/**
 * Feature Name:    Frontend Scripts
 * Version:         0.1
 * Author:          Inpsyde GmbH for MarketPress.com
 * Author URI:      http://inpsyde.com/
 */

/** Menu **/
( function( $ ) {
	var kiel_child_starter = {
			
		// Pseudo-Constructor of this class
		init: function () {
			$( '#comments' ).slideDown( 'slow' );
		}
	};
	
	$( document ).ready( kiel_child_starter.init );
} )( jQuery );