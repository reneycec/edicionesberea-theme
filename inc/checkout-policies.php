<?php
/**
 * Required policy acknowledgements for the classic WooCommerce checkout.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Return the payment gateway IDs that represent an approved Berea credit account.
 *
 * Credit-card gateways are intentionally excluded: the policy applies to
 * customers with a separately approved account, not to card payments.
 *
 * @return string[]
 */
function berea_credit_payment_method_ids() {
	$payment_method_ids = apply_filters( 'berea_credit_payment_method_ids', array( 'berea_credit' ) );

	return array_map( 'sanitize_key', (array) $payment_method_ids );
}

/**
 * Check whether the posted or currently selected shipping rates include delivery.
 *
 * @param array $data Checkout data.
 * @return bool
 */
function berea_checkout_requires_shipping_policy( $data = array() ) {
	if ( ! function_exists( 'WC' ) || ! WC()->cart || ! WC()->cart->needs_shipping() ) {
		return false;
	}

	if ( isset( $data['shipping_method'] ) ) {
		$shipping_methods = (array) $data['shipping_method'];
	} elseif ( WC()->session ) {
		$shipping_methods = (array) WC()->session->get( 'chosen_shipping_methods', array() );
	} else {
		$shipping_methods = array();
	}

	foreach ( $shipping_methods as $shipping_method ) {
		$shipping_method = wc_clean( $shipping_method );

		if ( '' !== $shipping_method && 0 !== strpos( $shipping_method, 'local_pickup' ) ) {
			return true;
		}
	}

	return false;
}

/**
 * Determine whether a credit-account policy acknowledgement applies.
 *
 * @param array $data Checkout data.
 * @return bool
 */
function berea_checkout_requires_credit_policy( $data = array() ) {
	$payment_method = isset( $data['payment_method'] ) ? sanitize_key( $data['payment_method'] ) : '';

	return '' !== $payment_method && in_array( $payment_method, berea_credit_payment_method_ids(), true );
}

/**
 * Render a policy acknowledgement checkbox.
 *
 * @param string $field_name Checkout field name.
 * @param string $link_url Policy page URL.
 * @param string $label Label text preceding the policy link.
 * @param bool   $required Whether the checkbox currently applies.
 * @param bool   $hidden Whether the checkbox should initially be hidden.
 * @return void
 */
function berea_render_checkout_policy_checkbox( $field_name, $link_url, $label, $required, $hidden = false ) {
	$checked = isset( $_POST[ $field_name ] ) && '1' === wc_clean( wp_unslash( $_POST[ $field_name ] ) );
	?>
	<p class="form-row validate-required berea-checkout-policy__item" data-berea-policy="<?php echo esc_attr( $field_name ); ?>"<?php echo $hidden ? ' style="display:none" aria-hidden="true"' : ''; ?>>
		<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox" for="<?php echo esc_attr( $field_name ); ?>">
			<input
				class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
				type="checkbox"
				name="<?php echo esc_attr( $field_name ); ?>"
				id="<?php echo esc_attr( $field_name ); ?>"
				value="1"
				<?php checked( $checked ); ?>
				<?php echo $required ? 'required' : ''; ?>
			/>
			<span>
				<?php echo esc_html( $label ); ?>
				<a href="<?php echo esc_url( $link_url ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Política completa', 'berea' ); ?></a>.
			</span>
			<abbr class="required" title="<?php esc_attr_e( 'requerido', 'berea' ); ?>">*</abbr>
		</label>
	</p>
	<?php
}

/**
 * Add policy acknowledgements before the order submit button.
 *
 * @return void
 */
function berea_render_checkout_policy_acknowledgements() {
	if ( ! function_exists( 'WC' ) || ! WC()->cart || WC()->cart->is_empty() ) {
		return;
	}

	$needs_shipping = WC()->cart->needs_shipping();
	$shipping_required = berea_checkout_requires_shipping_policy();
	$credit_required = berea_checkout_requires_credit_policy(
		array(
			'payment_method' => WC()->session ? WC()->session->get( 'chosen_payment_method', '' ) : '',
		)
	);

	if ( ! $needs_shipping && ! $credit_required ) {
		return;
	}

	$shipping_policy_url = home_url( '/politica-de-envios-cambios-devoluciones/' );
	$credit_policy_url   = home_url( '/politica-de-credito-facturacion-y-pagos/' );
	?>
	<div class="berea-checkout-policy">
		<?php if ( $needs_shipping ) : ?>
			<?php
			berea_render_checkout_policy_checkbox(
				'berea_accept_changes_returns_policy',
				$shipping_policy_url,
				__( 'He leído y acepto las condiciones de cambios, devoluciones y reembolsos de Ediciones Berea.', 'berea' ),
				true
			);
			berea_render_checkout_policy_checkbox(
				'berea_accept_shipping_policy',
				$shipping_policy_url,
				__( 'He leído y acepto las condiciones de envío de Ediciones Berea.', 'berea' ),
				$shipping_required,
				! $shipping_required
			);
			?>
		<?php endif; ?>

		<?php
		berea_render_checkout_policy_checkbox(
			'berea_accept_credit_policy',
			$credit_policy_url,
			__( 'He leído y acepto la Política de Crédito, Facturación y Pagos. Entiendo que el crédito requiere una cuenta previamente aprobada.', 'berea' ),
			$credit_required,
			! $credit_required
		);
		?>
	</div>
	<?php
}
add_action( 'woocommerce_review_order_before_submit', 'berea_render_checkout_policy_acknowledgements', 20 );

/**
 * Add policy checkbox values to WooCommerce's normalized checkout data.
 *
 * @param array $data Checkout data.
 * @return array
 */
function berea_add_policy_fields_to_checkout_data( $data ) {
	$policy_fields = array(
		'berea_accept_changes_returns_policy',
		'berea_accept_shipping_policy',
		'berea_accept_credit_policy',
	);

	foreach ( $policy_fields as $field_name ) {
		$data[ $field_name ] = isset( $_POST[ $field_name ] ) ? 1 : 0;
	}

	return $data;
}
add_filter( 'woocommerce_checkout_posted_data', 'berea_add_policy_fields_to_checkout_data' );

/**
 * Validate applicable acknowledgements on the server.
 *
 * @param array    $data Checkout data.
 * @param WP_Error $errors Checkout validation errors.
 * @return void
 */
function berea_validate_checkout_policy_acknowledgements( $data, $errors ) {
	if ( function_exists( 'WC' ) && WC()->cart && WC()->cart->needs_shipping() && empty( $data['berea_accept_changes_returns_policy'] ) ) {
		$errors->add(
			'berea_changes_returns_policy_required',
			__( 'Debes aceptar las condiciones de cambios, devoluciones y reembolsos para continuar.', 'berea' )
		);
	}

	if ( berea_checkout_requires_shipping_policy( $data ) && empty( $data['berea_accept_shipping_policy'] ) ) {
		$errors->add(
			'berea_shipping_policy_required',
			__( 'Debes aceptar las condiciones de envío para continuar con la opción de entrega seleccionada.', 'berea' )
		);
	}

	if ( berea_checkout_requires_credit_policy( $data ) && empty( $data['berea_accept_credit_policy'] ) ) {
		$errors->add(
			'berea_credit_policy_required',
			__( 'Debes aceptar la Política de Crédito, Facturación y Pagos para elegir esta opción.', 'berea' )
		);
	}
}
add_action( 'woocommerce_after_checkout_validation', 'berea_validate_checkout_policy_acknowledgements', 10, 2 );

/**
 * Store acceptance timestamps with the order for the policies that applied.
 *
 * @param WC_Order $order Order being created.
 * @param array    $data Checkout data.
 * @return void
 */
function berea_store_checkout_policy_acknowledgements( $order, $data ) {
	$accepted_at = current_time( 'mysql', true );

	if ( ! empty( $data['berea_accept_changes_returns_policy'] ) && function_exists( 'WC' ) && WC()->cart && WC()->cart->needs_shipping() ) {
		$order->update_meta_data( '_berea_changes_returns_policy_accepted_at', $accepted_at );
	}

	if ( ! empty( $data['berea_accept_shipping_policy'] ) && berea_checkout_requires_shipping_policy( $data ) ) {
		$order->update_meta_data( '_berea_shipping_policy_accepted_at', $accepted_at );
	}

	if ( ! empty( $data['berea_accept_credit_policy'] ) && berea_checkout_requires_credit_policy( $data ) ) {
		$order->update_meta_data( '_berea_credit_policy_accepted_at', $accepted_at );
	}
}
add_action( 'woocommerce_checkout_create_order', 'berea_store_checkout_policy_acknowledgements', 10, 2 );

/**
 * Keep the conditional checkboxes in sync with checkout selections.
 *
 * @return void
 */
function berea_enqueue_checkout_policy_script() {
	if ( ! function_exists( 'is_checkout' ) || ! is_checkout() || is_order_received_page() ) {
		return;
	}

	$script_path = get_stylesheet_directory() . '/assets/js/berea-checkout-policies.js';
	wp_enqueue_script(
		'berea-checkout-policies',
		get_stylesheet_directory_uri() . '/assets/js/berea-checkout-policies.js',
		array( 'jquery', 'wc-checkout' ),
		file_exists( $script_path ) ? filemtime( $script_path ) : wp_get_theme()->get( 'Version' ),
		true
	);

	wp_localize_script(
		'berea-checkout-policies',
		'bereaCheckoutPolicies',
		array(
			'creditPaymentMethodIds' => berea_credit_payment_method_ids(),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'berea_enqueue_checkout_policy_script', 20 );
