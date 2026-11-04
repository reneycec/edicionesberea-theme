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
		var selectedPaymentMethod = $( 'input[name="payment_method"]:checked' ).val() || '';
		var creditMethodIds = ( window.bereaCheckoutPolicies && bereaCheckoutPolicies.creditPaymentMethodIds ) || [];

		setPolicyVisibility( 'berea_accept_shipping_policy', needsShippingPolicy );
		setPolicyVisibility( 'berea_accept_credit_policy', creditMethodIds.indexOf( selectedPaymentMethod ) !== -1 );
	}

	$( document.body ).on( 'change', 'input[name^="shipping_method"], input[name="payment_method"]', updatePolicyVisibility );
	$( document.body ).on( 'updated_checkout', updatePolicyVisibility );

	$( updatePolicyVisibility );
} )( jQuery );
