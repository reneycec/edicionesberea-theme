<?php
/**
 * Template part: banners editables de cupón y oferta especial.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$promociones = array(
	array(
		'imagen' => berea_home_get_field( 'promocion_imagen_1' ),
		'enlace' => berea_home_get_field( 'promocion_url_1' ),
		'texto'  => 'Cupón',
	),
	array(
		'imagen' => berea_home_get_field( 'promocion_imagen_2' ),
		'enlace' => berea_home_get_field( 'promocion_url_2' ),
		'texto'  => 'Oferta especial',
	),
);

$promociones = array_filter( $promociones, function ( $promocion ) {
	return ! empty( $promocion['imagen'] );
} );

if ( empty( $promociones ) ) {
	return;
}
?>
<section class="berea-home-promo-banners berea-home-image-banners">
	<h2 class="libreria-section__titulo">Ofertas y Promociones</h2>
	<div class="berea-home-image-banners__grid">
		<?php foreach ( $promociones as $promocion ) : ?>
			<?php if ( ! empty( $promocion['enlace'] ) ) : ?>
				<a class="berea-home-image-banners__item" href="<?php echo esc_url( $promocion['enlace'] ); ?>">
					<img src="<?php echo esc_url( $promocion['imagen'] ); ?>" alt="<?php echo esc_attr( $promocion['texto'] ); ?>">
				</a>
			<?php else : ?>
				<div class="berea-home-image-banners__item">
					<img src="<?php echo esc_url( $promocion['imagen'] ); ?>" alt="<?php echo esc_attr( $promocion['texto'] ); ?>">
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
</section>
