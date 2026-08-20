<?php
/**
 * Template part: Productos destacados
 *
 * Se usa wc_get_products() + wc_get_template_part('content','product')
 * en vez del shortcode [featured_products]: mismo resultado, pero sin
 * el overhead de parseo de shortcodes y con control total del wrapper.
 * El template "content-product" de WooCommerce ya trae el botón
 * "Añadir al carrito" con soporte AJAX nativo (ajax_add_to_cart).
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$productos = wc_get_products( array(
	'status'   => 'publish',
	'limit'    => 8,
	'featured' => true,
) );

if ( empty( $productos ) ) {
	return;
}
?>
<section class="libreria-productos">
	<h2 class="libreria-section__titulo">Novedades y destacados</h2>
	<ul class="products libreria-productos__grid">
		<?php foreach ( $productos as $producto ) :
			$GLOBALS['product'] = $producto;
			wc_get_template_part( 'content', 'product' );
		endforeach; ?>
	</ul>
</section>
