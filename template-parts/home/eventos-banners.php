<?php
/**
 * Template part: banners vigentes de Eventos y Seminarios.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$eventos = berea_home_get_active_events();
$eventos_con_banner = array_filter( $eventos, function ( $evento ) {
	return has_post_thumbnail( $evento );
} );

if ( empty( $eventos_con_banner ) ) {
	return;
}
?>
<section class="berea-home-event-banners">
	<h2 class="libreria-section__titulo">Eventos y Seminarios</h2>
	<div class="swiper berea-home-event-banners__slider">
		<div class="swiper-wrapper">
			<?php foreach ( $eventos_con_banner as $evento ) : ?>
				<div class="swiper-slide berea-home-event-banners__slide">
					<?php echo get_the_post_thumbnail( $evento, 'full', array( 'loading' => 'lazy' ) ); ?>
				</div>
			<?php endforeach; ?>
		</div>
		<?php if ( count( $eventos_con_banner ) > 1 ) : ?>
			<div class="swiper-pagination"></div>
		<?php endif; ?>
	</div>
</section>
