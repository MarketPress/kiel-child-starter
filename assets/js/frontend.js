/**
 * Feature Name:    Frontend Scripts
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
