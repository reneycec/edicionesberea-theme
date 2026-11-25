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

$slides = array_slice( $slides, 0, 3 );

if ( empty( $slides ) ) {
	return;
}
?>
<section class="berea-home-event-gallery">
	<h2 class="libreria-section__titulo">Fotos de Eventos y Seminarios</h2>
	<div class="berea-home-event-gallery__grid">
		<?php foreach ( $slides as $slide ) : ?>
			<div class="berea-home-event-gallery__item">
				<?php echo wp_get_attachment_image( $slide['image_id'], 'large', false, array( 'loading' => 'lazy' ) ); ?>
				<p><?php echo esc_html( $slide['title'] ); ?></p>
			</div>
		<?php endforeach; ?>
	</div>
</section>
