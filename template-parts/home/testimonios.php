<?php
/**
 * Template part: Testimonios
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$query = new WP_Query( array(
	'post_type'      => 'testimonio',
	'posts_per_page' => 3,
	'orderby'        => 'date',
	'order'          => 'DESC',
	'no_found_rows'  => true,
) );

if ( ! $query->have_posts() ) {
	return;
}
?>
<section class="libreria-testimonios">
	<h2 class="libreria-section__titulo">Lo que dicen nuestros lectores</h2>
	<div class="libreria-testimonios__grid">
		<?php while ( $query->have_posts() ) : $query->the_post();
			$texto  = get_field( 'testimonio_texto' );
			$autor  = get_field( 'testimonio_autor' );
			$rating = (int) get_field( 'testimonio_rating' );
			?>
			<blockquote class="libreria-testimonios__item">
				<p>&ldquo;<?php echo esc_html( $texto ); ?>&rdquo;</p>
				<footer>
					<strong><?php echo esc_html( $autor ); ?></strong>
					<span class="libreria-testimonios__rating" aria-label="<?php echo esc_attr( $rating . ' de 5' ); ?>">
						<?php echo str_repeat( '★', max( 0, min( 5, $rating ) ) ); ?>
					</span>
				</footer>
			</blockquote>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>
</section>
