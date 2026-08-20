<?php
/**
 * Template part: Franja de confianza
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$items = array(
	array(
		'icono' => get_field( 'confianza_1_icono' ) ?: 'dashicons-car',
		'texto' => get_field( 'confianza_1_texto' ) ?: 'Envío a todo el país',
	),
	array(
		'icono' => get_field( 'confianza_2_icono' ) ?: 'dashicons-lock',
		'texto' => get_field( 'confianza_2_texto' ) ?: 'Pago seguro con Stripe y PayPal',
	),
	array(
		'icono' => get_field( 'confianza_3_icono' ) ?: 'dashicons-update',
		'texto' => get_field( 'confianza_3_texto' ) ?: 'Devoluciones sencillas',
	),
);
?>
<section class="libreria-confianza">
	<?php foreach ( $items as $item ) : ?>
		<div class="libreria-confianza__item">
			<span class="dashicons <?php echo esc_attr( $item['icono'] ); ?>" aria-hidden="true"></span>
			<span><?php echo esc_html( $item['texto'] ); ?></span>
		</div>
	<?php endforeach; ?>
</section>
