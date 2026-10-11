<?php
/**
 * The template for displaying the footer.
 *
 * Child theme override for Storefront — Ediciones Berea
 *
 * @package berea-child-home
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<?php 
	if ( function_exists( 'berea_render_site_footer' ) ) {
		berea_render_site_footer();
	}
	?>

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
