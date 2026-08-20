<?php
/**
 * Template part: Newsletter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$titulo = get_field( 'newsletter_titulo' ) ?: 'Recibe un devocional cada semana';
?>
<section class="libreria-newsletter">
	<h2 class="libreria-section__titulo"><?php echo esc_html( $titulo ); ?></h2>
	<form id="libreria-newsletter-form" class="libreria-newsletter__form">
		<label for="libreria-newsletter-email" class="screen-reader-text">Correo electrónico</label>
		<input type="email" id="libreria-newsletter-email" name="email" placeholder="tu@correo.com" required />
		<button type="submit">Suscribirme</button>
	</form>
	<p id="libreria-newsletter-mensaje" class="libreria-newsletter__mensaje" role="status" aria-live="polite"></p>
</section>
