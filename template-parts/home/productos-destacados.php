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

// Intentar primero por ventas reales (solo productos que SÍ han vendido).
$productos = wc_get_products( array(
	'status'     => 'publish',
	'limit'      => 8,
	'orderby'    => 'meta_value_num',
	'meta_key'   => 'total_sales',
	'order'      => 'DESC',
	'meta_query' => array(
		array(
			'key'     => 'total_sales',
			'value'   => 0,
			'compare' => '>',
			'type'    => 'NUMERIC',
		),
	),
) );

// Fallback 1: productos marcados como destacados.
if ( empty( $productos ) ) {
	$productos = wc_get_products( array(
		'status'   => 'publish',
		'limit'    => 8,
		'featured' => true,
	) );
}

// Fallback 2: últimos productos publicados (nunca sección vacía).
if ( empty( $productos ) ) {
	$productos = wc_get_products( array(
		'status'  => 'publish',
		'limit'   => 8,
		'orderby' => 'date',
		'order'   => 'DESC',
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
			$GLOBALS['post']    = get_post( $producto->get_id() ); // Necesario para the_title() y the_permalink()
			setup_postdata( $GLOBALS['post'] );
			wc_get_template_part( 'content', 'product' );
		endforeach; wp_reset_postdata(); ?>
	</ul>
</section>
