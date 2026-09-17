<?php
/**
 * Template part: Los más vendidos
 *
 * Prueba social real: ordena por total_sales (dato de WooCommerce).
 * Si la tienda aún no registra ventas suficientes, hace fallback a los
 * productos marcados como "destacados" para no mostrar una sección vacía.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'wc_get_products' ) || ! function_exists( 'wc_get_template_part' ) ) {
	return;
}

// Intentar primero por ventas reales.
$productos = wc_get_products( array(
	'status'  => 'publish',
	'limit'   => 8,
	'orderby' => 'meta_value_num',
	'meta_key'=> 'total_sales',
	'order'   => 'DESC',
) );

// Fallback: si ninguno tiene ventas registradas, usar destacados.
$hay_ventas = false;
foreach ( $productos as $p ) {
	if ( (int) $p->get_total_sales() > 0 ) {
		$hay_ventas = true;
		break;
	}
}

if ( ! $hay_ventas ) {
	$productos = wc_get_products( array(
		'status'   => 'publish',
		'limit'    => 8,
		'featured' => true,
	) );
}

if ( empty( $productos ) ) {
	return;
}
?>
<section class="libreria-productos">
	<h2 class="libreria-section__titulo">Los más vendidos</h2>
	<p class="libreria-section__subtitulo">Los títulos que más han edificado a nuestra comunidad</p>
	<ul class="products libreria-productos__grid">
		<?php foreach ( $productos as $producto ) :
			$GLOBALS['product'] = $producto;
			wc_get_template_part( 'content', 'product' );
		endforeach; ?>
	</ul>
</section>
