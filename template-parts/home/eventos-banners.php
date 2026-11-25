<?php
/**
 * Template part: banners editables de cupón y evento especial.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$banners = array(
	array(
		'imagen' => berea_home_get_field( 'evento_imagen_1' ),
		'enlace' => berea_home_get_field( 'evento_url_1' ),
		'texto'  => 'Cupón para Eventos y Seminarios',
	),
	array(
		'imagen' => berea_home_get_field( 'evento_imagen_2' ),
		'enlace' => berea_home_get_field( 'evento_url_2' ),
		'texto'  => 'Evento especial',
	),
);

$banners = array_filter( $banners, function ( $banner ) {
	return ! empty( $banner['imagen'] );
} );

if ( empty( $banners ) ) {
	return;
}
?>
<section class="berea-home-event-banners berea-home-image-banners">
	<h2 class="libreria-section__titulo">Eventos y Seminarios</h2>
	<div class="berea-home-image-banners__grid">
		<?php foreach ( $banners as $banner ) : ?>
			<?php if ( ! empty( $banner['enlace'] ) ) : ?>
				<a class="berea-home-image-banners__item" href="<?php echo esc_url( $banner['enlace'] ); ?>">
					<img src="<?php echo esc_url( $banner['imagen'] ); ?>" alt="<?php echo esc_attr( $banner['texto'] ); ?>" loading="lazy">
				</a>
			<?php else : ?>
				<div class="berea-home-image-banners__item">
					<img src="<?php echo esc_url( $banner['imagen'] ); ?>" alt="<?php echo esc_attr( $banner['texto'] ); ?>" loading="lazy">
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
</section>
