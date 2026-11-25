<?php
/**
 * Template part: Hero (carrusel de hasta 3 slides con fade automático)
 *
 * Comportamiento híbrido:
 * - 1 solo slide con imagen configurado → hero estático (sin JS extra).
 * - 2-3 slides con imagen → Swiper con efecto fade + autoplay. Reutiliza el Swiper
 *   que ya se carga en la home para el carrusel de libros.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Construir los slides: el primero siempre existe y los demás requieren imagen.
$slides = array(
	array(
		'imagen' => berea_home_get_field( 'hero_imagen' ) ?: get_stylesheet_directory_uri() . '/assets/img/hero-default.jpg',
	),
);

foreach ( array( 2, 3 ) as $n ) {
	$imagen = berea_home_get_field( "hero{$n}_imagen" );

	if ( empty( $imagen ) ) {
		continue;
	}

	$slides[] = array(
		'imagen' => $imagen,
	);
}

$es_carrusel = count( $slides ) > 1;

// Precargar la imagen del primer slide: acelera el LCP (Largest Contentful Paint)
add_action( 'wp_head', function () use ( $slides ) {
	printf(
		'<link rel="preload" as="image" href="%s" fetchpriority="high">' . "\n",
		esc_url( $slides[0]['imagen'] )
	);
}, 5 );
?>
<section class="libreria-hero <?php echo $es_carrusel ? 'libreria-hero--carrusel swiper' : ''; ?>" <?php echo $es_carrusel ? '' : "style=\"background-image:url('" . esc_url( $slides[0]['imagen'] ) . "');\""; ?>>
	<?php if ( $es_carrusel ) : ?>
		<div class="swiper-wrapper">
			<?php foreach ( $slides as $slide ) : ?>
				<div class="swiper-slide libreria-hero__slide" style="background-image:url('<?php echo esc_url( $slide['imagen'] ); ?>');">
					<div class="libreria-hero__overlay"></div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="swiper-pagination libreria-hero__paginacion"></div>
	<?php else : ?>
		<div class="libreria-hero__overlay"></div>
	<?php endif; ?>
</section>
