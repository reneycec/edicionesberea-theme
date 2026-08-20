<?php
/**
 * Template part: Categorías destacadas
 *
 * Se muestran las categorías raíz de producto (parent = 0), ordenadas
 * por el "menu_order" que ya puedes arrastrar en
 * Productos > Categorías. Evita depender de un flag ACF adicional.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$categorias = get_terms( array(
	'taxonomy'   => 'product_cat',
	'hide_empty' => true,
	'parent'     => 0,
	'orderby'    => 'menu_order',
	'order'      => 'ASC',
	'number'     => 4,
) );

if ( is_wp_error( $categorias ) || empty( $categorias ) ) {
	return;
}
?>
<section class="libreria-categorias">
	<h2 class="libreria-section__titulo">Categorías destacadas</h2>
	<div class="libreria-categorias__grid">
		<?php foreach ( $categorias as $categoria ) :
			$thumb_id = get_term_meta( $categoria->term_id, 'thumbnail_id', true );
			$imagen   = $thumb_id ? wp_get_attachment_image_url( $thumb_id, 'medium' ) : '';
			?>
			<a class="libreria-categorias__item" href="<?php echo esc_url( get_term_link( $categoria ) ); ?>">
				<?php if ( $imagen ) : ?>
					<img src="<?php echo esc_url( $imagen ); ?>" alt="<?php echo esc_attr( $categoria->name ); ?>" loading="lazy" />
				<?php endif; ?>
				<span><?php echo esc_html( $categoria->name ); ?></span>
			</a>
		<?php endforeach; ?>
	</div>
</section>
