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

$url_tienda = function_exists( 'wc_get_page_id' )
	? get_permalink( wc_get_page_id( 'shop' ) )
	: home_url( '/' );

// Construir los slides: el primero siempre existe y los demás requieren imagen.
$slides = array(
	array(
		'imagen'      => berea_home_get_field( 'hero_imagen' ) ?: get_stylesheet_directory_uri() . '/assets/img/hero-default.jpg',
		'boton_texto' => berea_home_get_field( 'hero_boton_texto' ) ?: 'Ver catálogo',
		'boton_url'   => berea_home_get_field( 'hero_boton_url' ) ?: $url_tienda,
	),
);

foreach ( array( 2, 3 ) as $n ) {
	$imagen = berea_home_get_field( "hero{$n}_imagen" );

	if ( empty( $imagen ) ) {
		continue;
	}

	$slides[] = array(
		'imagen'      => $imagen,
		'boton_texto' => berea_home_get_field( "hero{$n}_boton_texto" ) ?: $slides[0]['boton_texto'],
		'boton_url'   => berea_home_get_field( "hero{$n}_boton_url" ) ?: $slides[0]['boton_url'],
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
					<div class="libreria-hero__overlay">
						<div class="libreria-hero__contenido">
							<a class="libreria-hero__boton button" href="<?php echo esc_url( $slide['boton_url'] ); ?>">
								<?php echo esc_html( $slide['boton_texto'] ); ?>
							</a>
							<?php if ( shortcode_exists( 'fibosearch' ) ) : ?>
								<div class="libreria-hero__buscador">
									<?php echo do_shortcode( '[fibosearch]' ); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="swiper-pagination libreria-hero__paginacion"></div>
	<?php else : ?>
		<div class="libreria-hero__overlay">
			<div class="libreria-hero__contenido">
				<a class="libreria-hero__boton button" href="<?php echo esc_url( $slides[0]['boton_url'] ); ?>">
					<?php echo esc_html( $slides[0]['boton_texto'] ); ?>
				</a>
				<?php if ( shortcode_exists( 'fibosearch' ) ) : ?>
					<div class="libreria-hero__buscador">
						<?php echo do_shortcode( '[fibosearch]' ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endif; ?>
</section>
