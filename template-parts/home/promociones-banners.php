<?php
/**
 * Template part: dos banners editables de Ofertas y Promociones.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$promociones = array(
	array(
		'imagen' => berea_home_get_field( 'promocion_imagen_1' ),
		'enlace' => berea_home_get_field( 'promocion_url_1' ),
	),
	array(
		'imagen' => berea_home_get_field( 'promocion_imagen_2' ),
		'enlace' => berea_home_get_field( 'promocion_url_2' ),
	),
);

$promociones = array_filter( $promociones, function ( $promocion ) {
	return ! empty( $promocion['imagen'] );
} );

if ( empty( $promociones ) ) {
	return;
}
?>
<section class="berea-home-promo-banners">
	<h2 class="libreria-section__titulo">Ofertas y Promociones</h2>
	<div class="berea-home-promo-banners__grid">
		<?php foreach ( $promociones as $promocion ) : ?>
			<?php if ( ! empty( $promocion['enlace'] ) ) : ?>
				<a class="berea-home-promo-banners__item" href="<?php echo esc_url( $promocion['enlace'] ); ?>">
					<img src="<?php echo esc_url( $promocion['imagen'] ); ?>" alt="<?php esc_attr_e( 'Ofertas y promociones de Ediciones Berea', 'berea' ); ?>">
				</a>
			<?php else : ?>
				<div class="berea-home-promo-banners__item">
					<img src="<?php echo esc_url( $promocion['imagen'] ); ?>" alt="<?php esc_attr_e( 'Ofertas y promociones de Ediciones Berea', 'berea' ); ?>">
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
</section>
