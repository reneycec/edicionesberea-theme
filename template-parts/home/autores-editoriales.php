<?php
/**
 * Template part: Autores / editoriales destacadas
 *
 * Lee el campo ACF "autores_editoriales" (taxonomy field) configurado
 * en la página de portada. Cada término de la taxonomía "editorial"
 * lleva su propio logo (campo ACF anclado a la taxonomía). Al hacer
 * clic, se navega al archivo de la taxonomía (catálogo filtrado por
 * esa editorial) — reutiliza el motor de filtrado nativo de WooCommerce.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$editoriales = get_field( 'autores_editoriales' );

if ( empty( $editoriales ) ) {
	return;
}
?>
<section class="libreria-editoriales">
	<h2 class="libreria-section__titulo">Autores y editoriales destacadas</h2>
	<div class="libreria-editoriales__grid">
		<?php foreach ( $editoriales as $editorial ) :
			$logo = get_field( 'editorial_logo', $editorial );
			?>
			<a class="libreria-editoriales__item" href="<?php echo esc_url( get_term_link( $editorial ) ); ?>">
				<?php if ( $logo ) : ?>
					<img src="<?php echo esc_url( $logo ); ?>" alt="<?php echo esc_attr( $editorial->name ); ?>" loading="lazy" />
				<?php else : ?>
					<span><?php echo esc_html( $editorial->name ); ?></span>
				<?php endif; ?>
			</a>
		<?php endforeach; ?>
	</div>
</section>
