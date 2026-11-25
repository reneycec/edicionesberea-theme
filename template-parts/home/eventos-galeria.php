<?php
/**
 * Template part: fotografías de los eventos vigentes.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$slides = array();
foreach ( berea_home_get_active_events() as $evento ) {
	$blocks = parse_blocks( get_post_field( 'post_content', $evento->ID ) );

	foreach ( berea_home_get_event_gallery_image_ids( $blocks ) as $image_id ) {
		if ( wp_attachment_is_image( $image_id ) ) {
			$slides[] = array(
				'image_id' => $image_id,
				'title'    => get_the_title( $evento ),
			);
		}
	}
}

if ( empty( $slides ) ) {
	return;
}
?>
<section class="berea-home-event-gallery">
	<h2 class="libreria-section__titulo">Galería de Eventos y Seminarios</h2>
	<div class="swiper berea-home-event-gallery__slider">
		<div class="swiper-wrapper">
			<?php foreach ( $slides as $slide ) : ?>
				<div class="swiper-slide berea-home-event-gallery__slide">
					<?php echo wp_get_attachment_image( $slide['image_id'], 'large', false, array( 'loading' => 'lazy' ) ); ?>
					<p><?php echo esc_html( $slide['title'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
		<?php if ( count( $slides ) > 1 ) : ?>
			<div class="swiper-pagination"></div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		<?php endif; ?>
	</div>
</section>
