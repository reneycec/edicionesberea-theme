<?php
/**
 * Template part: Hero
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$imagen   = berea_home_get_field( 'hero_imagen' ) ?: get_stylesheet_directory_uri() . '/assets/img/hero-default.jpg';
$titulo   = berea_home_get_field( 'hero_titulo' ) ?: 'Alimenta tu fe con la mejor literatura cristiana';
$subtitulo = berea_home_get_field( 'hero_subtitulo' ) ?: 'Biblias, estudios, devocionales y más, con envío a todo el país.';
$boton_texto = berea_home_get_field( 'hero_boton_texto' ) ?: 'Ver catálogo';
$boton_url   = berea_home_get_field( 'hero_boton_url' );

if ( ! $boton_url ) {
	$boton_url = function_exists( 'wc_get_page_id' )
		? get_permalink( wc_get_page_id( 'shop' ) )
		: home_url( '/' );
}
?>
<section class="libreria-hero" style="background-image:url('<?php echo esc_url( $imagen ); ?>');">
	<div class="libreria-hero__overlay">
		<div class="libreria-hero__contenido">
			<h1 class="libreria-hero__titulo"><?php echo esc_html( $titulo ); ?></h1>
			<p class="libreria-hero__subtitulo"><?php echo esc_html( $subtitulo ); ?></p>
			<a class="libreria-hero__boton button" href="<?php echo esc_url( $boton_url ); ?>">
				<?php echo esc_html( $boton_texto ); ?>
			</a>
			<?php if ( shortcode_exists( 'fibosearch' ) ) : ?>
				<div class="libreria-hero__buscador">
					<?php echo do_shortcode( '[fibosearch]' ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
