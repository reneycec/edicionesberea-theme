( function ( $ ) {
	'use strict';

	function setPolicyVisibility( fieldName, isVisible ) {
		var $wrapper = $( '[data-berea-policy="' + fieldName + '"]' );
		var $checkbox = $wrapper.find( 'input[type="checkbox"]' );

		$wrapper.toggle( isVisible ).attr( 'aria-hidden', ! isVisible );
		$checkbox.prop( 'required', isVisible );

		if ( ! isVisible ) {
			$checkbox.prop( 'checked', false );
		}
	}

	function updatePolicyVisibility() {
		var selectedShippingMethods = $( 'input[name^="shipping_method"]:checked' )
			.map( function () {
				return this.value;
			} )
			.get();
		var needsShippingPolicy = selectedShippingMethods.some( function ( method ) {
			return method.indexOf( 'local_pickup' ) !== 0;
		} );

		setPolicyVisibility( 'berea_accept_shipping_policy', needsShippingPolicy );
	}

	$( document.body ).on( 'change', 'input[name^="shipping_method"]', updatePolicyVisibility );
	$( document.body ).on( 'updated_checkout', updatePolicyVisibility );

	$( updatePolicyVisibility );
} )( jQuery );
