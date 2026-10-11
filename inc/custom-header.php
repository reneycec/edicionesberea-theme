<?php
/**
 * Módulo de Cabecera y Navegación Móvil — Ediciones Berea
 *
 * Añade soporte para el menú superior fijo (Sticky Header) global,
 * botón de hamburguesa moderno y Drawer Off-Canvas para móviles y tablets.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// 1. INYECTAR BOTÓN DE HAMBURGUESA PERSONALIZADO EN LA CABECERA
add_action( 'storefront_header', 'berea_add_mobile_nav_toggle', 45 );
function berea_add_mobile_nav_toggle() {
	?>
	<button id="berea-mobile-hamburger" class="berea-hamburger-btn" aria-controls="berea-mobile-drawer" aria-expanded="false" aria-label="<?php esc_attr_e( 'Abrir menú de navegación', 'berea' ); ?>">
		<span class="berea-hamburger-box">
			<span class="berea-hamburger-inner"></span>
		</span>
		<span class="berea-hamburger-label"><?php esc_html_e( 'Menú', 'berea' ); ?></span>
	</button>
	<?php
}

// 2. RENDERIZAR EL DRAWER OFF-CANVAS EN EL FOOTER DEL DOCUMENTO
add_action( 'wp_footer', 'berea_render_mobile_drawer', 20 );
function berea_render_mobile_drawer() {
	$whatsapp_number = '525510803880';
	$whatsapp_display = '+52 55 1080 3880';
	$cart_count = ( function_exists( 'WC' ) && WC()->cart ) ? WC()->cart->get_cart_contents_count() : 0;
	?>
	<!-- Overlay oscuro de fondo -->
	<div id="berea-drawer-overlay" class="berea-drawer-overlay" tabindex="-1" aria-hidden="true"></div>

	<!-- Panel Lateral Off-Canvas -->
	<aside id="berea-mobile-drawer" class="berea-mobile-drawer" aria-label="<?php esc_attr_e( 'Menú de navegación móvil', 'berea' ); ?>" aria-hidden="true">
		<div class="berea-drawer__header">
			<div class="berea-drawer__branding">
				<span class="berea-drawer__logo-text">EDICIONES BEREA</span>
				<span class="berea-drawer__tagline"><?php esc_html_e( 'Excelencia Editorial Cristiana', 'berea' ); ?></span>
			</div>
			<button id="berea-drawer-close" class="berea-drawer-close" aria-label="<?php esc_attr_e( 'Cerrar menú', 'berea' ); ?>">
				<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
			</button>
		</div>

		<!-- Acciones Rápidas Superiores -->
		<div class="berea-drawer__quick-actions">
			<a href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'myaccount' ) : home_url( '/mi-cuenta' ) ); ?>" class="berea-drawer-quick-link">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
				<span><?php esc_html_e( 'Mi Cuenta', 'berea' ); ?></span>
			</a>
			<a href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'cart' ) : home_url( '/carrito' ) ); ?>" class="berea-drawer-quick-link berea-drawer-quick-link--cart">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
				<span><?php esc_html_e( 'Carrito', 'berea' ); ?></span>
				<?php if ( $cart_count > 0 ) : ?>
					<span class="berea-cart-pill"><?php echo esc_html( $cart_count ); ?></span>
				<?php endif; ?>
			</a>
		</div>

		<!-- Navegación Principal -->
		<nav class="berea-drawer__nav" role="navigation">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'berea-drawer-menu',
					'depth'          => 2,
				) );
			} elseif ( has_nav_menu( 'handheld' ) ) {
				wp_nav_menu( array(
					'theme_location' => 'handheld',
					'container'      => false,
					'menu_class'     => 'berea-drawer-menu',
					'depth'          => 2,
				) );
			} else {
				?>
				<ul class="berea-drawer-menu">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Inicio', 'berea' ); ?></a></li>
					<li><a href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/tienda' ) ); ?>"><?php esc_html_e( 'Catálogo de Libros', 'berea' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/servicios-editoriales' ) ); ?>" class="berea-drawer-highlight"><?php esc_html_e( 'Servicios Editoriales', 'berea' ); ?> <span class="berea-gold-tag"><?php esc_html_e( 'Prémium', 'berea' ); ?></span></a></li>
					<li><a href="<?php echo esc_url( home_url( '/nosotros' ) ); ?>"><?php esc_html_e( 'Nosotros', 'berea' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>"><?php esc_html_e( 'Contacto', 'berea' ); ?></a></li>
				</ul>
				<?php
			}
			?>
		</nav>

		<!-- Acceso Destacado a WhatsApp en el Menú Móvil -->
		<div class="berea-drawer__cta">
			<a href="https://wa.me/<?php echo esc_attr( $whatsapp_number ); ?>?text=Hola%2C%20quisiera%20recibir%20atenci%C3%B3n%20personalizada%20de%20Ediciones%20Berea" target="_blank" rel="noopener noreferrer" class="berea-drawer-wa-btn">
				<svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" aria-hidden="true"><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.524 3.659 1.434 5.176L2 22l4.981-1.396A9.957 9.957 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18.062c-1.65 0-3.18-.492-4.469-1.336l-.321-.21-2.957.828.843-2.883-.228-.337A8.026 8.026 0 0 1 3.938 12c0-4.446 3.616-8.062 8.062-8.062 4.446 0 8.062 3.616 8.062 8.062 0 4.446-3.616 8.062-8.062 8.062z"></path></svg>
				<span><?php esc_html_e( 'Atención por WhatsApp', 'berea' ); ?></span>
			</a>
			<p class="berea-drawer-phone"><?php echo esc_html( $whatsapp_display ); ?></p>
		</div>
	</aside>
	<?php
}
