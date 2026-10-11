<?php
/**
 * Módulo de Pie de Página (Footer) — Ediciones Berea
 *
 * Registra menús de navegación específicos para el pie de página
 * y renderiza la estructura de 3 bloques con la identidad gráfica oficial.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// 1. REGISTRAR UBICACIONES DE MENÚ PARA EL FOOTER
add_action( 'after_setup_theme', 'berea_register_footer_menus' );
function berea_register_footer_menus() {
	register_nav_menus( array(
		'footer_col_1' => __( 'Footer: Columna 1 (Mi Cuenta / Clientes)', 'berea' ),
		'footer_col_2' => __( 'Footer: Columna 2 (Ayuda y Soporte)', 'berea' ),
		'footer_col_3' => __( 'Footer: Columna 3 (Editorial / Catálogo)', 'berea' ),
		'footer_legal' => __( 'Footer: Enlaces Legales', 'berea' ),
	) );
}

// 2. RENDERIZADO DEL PIE DE PÁGINA COMPLETO
function berea_render_site_footer() {
	$whatsapp_number = '525510803880';
	$whatsapp_display = '+52 55 1080 3880';
	$contact_email   = 'ventas@edicionesberea.com';
	$home_url        = home_url( '/' );
	$year            = date( 'Y' );
	?>
	<footer id="colophon" class="site-footer berea-footer" role="contentinfo">

		<!-- ====================================================================
		     BLOQUE 1: NAVEGACIÓN Y NEWSLETTER (Deep Navy)
		     ==================================================================== -->
		<div class="berea-footer__top">
			<div class="berea-footer-container">
				<div class="berea-footer__grid">

					<!-- Columna 1: Mi Cuenta / Usuarios -->
					<div class="berea-footer__col">
						<h4 class="berea-footer__col-title">
							<span><?php esc_html_e( 'Mi Cuenta', 'berea' ); ?></span>
						</h4>
						<?php if ( has_nav_menu( 'footer_col_1' ) ) : ?>
							<?php wp_nav_menu( array(
								'theme_location' => 'footer_col_1',
								'container'      => false,
								'menu_class'     => 'berea-footer__nav-list',
								'depth'          => 1,
							) ); ?>
						<?php else : ?>
							<!-- Enlaces por defecto inteligentes -->
							<ul class="berea-footer__nav-list">
								<li><a href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'myaccount' ) : home_url( '/mi-cuenta' ) ); ?>"><?php esc_html_e( 'Acceder a mi cuenta', 'berea' ); ?></a></li>
								<li><a href="<?php echo esc_url( function_exists( 'wc_get_endpoint_url' ) ? wc_get_endpoint_url( 'orders', '', wc_get_page_permalink( 'myaccount' ) ) : home_url( '/mi-cuenta/orders' ) ); ?>"><?php esc_html_e( 'Mis pedidos', 'berea' ); ?></a></li>
								<li><a href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'cart' ) : home_url( '/carrito' ) ); ?>"><?php esc_html_e( 'Ver carrito de compras', 'berea' ); ?></a></li>
								<li><a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Olvidé mi contraseña', 'berea' ); ?></a></li>
							</ul>
						<?php endif; ?>
					</div>

					<!-- Columna 2: Ayuda y Soporte -->
					<div class="berea-footer__col">
						<h4 class="berea-footer__col-title">
							<span><?php esc_html_e( 'Ayuda y Soporte', 'berea' ); ?></span>
						</h4>
						<?php if ( has_nav_menu( 'footer_col_2' ) ) : ?>
							<?php wp_nav_menu( array(
								'theme_location' => 'footer_col_2',
								'container'      => false,
								'menu_class'     => 'berea-footer__nav-list',
								'depth'          => 1,
							) ); ?>
						<?php else : ?>
							<ul class="berea-footer__nav-list">
								<li><a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>"><?php esc_html_e( 'Centro de contacto', 'berea' ); ?></a></li>
								<li><a href="<?php echo esc_url( home_url( '/preguntas-frecuentes' ) ); ?>"><?php esc_html_e( 'Preguntas frecuentes', 'berea' ); ?></a></li>
								<li><a href="<?php echo esc_url( home_url( '/envios-y-entregas' ) ); ?>"><?php esc_html_e( 'Envíos y entregas nacionales', 'berea' ); ?></a></li>
								<li><a href="<?php echo esc_url( home_url( '/politica-de-devoluciones' ) ); ?>"><?php esc_html_e( 'Políticas de devolución', 'berea' ); ?></a></li>
								<li><a href="https://wa.me/<?php echo esc_attr( $whatsapp_number ); ?>?text=Hola%2C%20necesito%20ayuda%20con%20un%20pedido%20en%20Ediciones%20Berea" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Atención por WhatsApp', 'berea' ); ?></a></li>
							</ul>
						<?php endif; ?>
					</div>

					<!-- Columna 3: Editorial / Secciones -->
					<div class="berea-footer__col">
						<h4 class="berea-footer__col-title">
							<span><?php esc_html_e( 'Editorial Berea', 'berea' ); ?></span>
						</h4>
						<?php if ( has_nav_menu( 'footer_col_3' ) ) : ?>
							<?php wp_nav_menu( array(
								'theme_location' => 'footer_col_3',
								'container'      => false,
								'menu_class'     => 'berea-footer__nav-list',
								'depth'          => 1,
							) ); ?>
						<?php else : ?>
							<ul class="berea-footer__nav-list">
								<li><a href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/tienda' ) ); ?>"><?php esc_html_e( 'Catálogo de libros', 'berea' ); ?></a></li>
								<li><a href="<?php echo esc_url( home_url( '/servicios-editoriales' ) ); ?>" class="berea-highlight-link"><?php esc_html_e( 'Servicios editoriales', 'berea' ); ?> <span class="berea-badge-pill"><?php esc_html_e( 'Nuevo', 'berea' ); ?></span></a></li>
								<li><a href="<?php echo esc_url( home_url( '/nosotros' ) ); ?>"><?php esc_html_e( 'Nuestra visión y misión', 'berea' ); ?></a></li>
								<li><a href="<?php echo esc_url( home_url( '/autores' ) ); ?>"><?php esc_html_e( 'Autores y sellos', 'berea' ); ?></a></li>
								<li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><?php esc_html_e( 'Noticias y devocionales', 'berea' ); ?></a></li>
							</ul>
						<?php endif; ?>
					</div>

					<!-- Columna 4: Tarjeta Blanca de Newsletter -->
					<div class="berea-footer__col berea-footer__col--newsletter">
						<div class="berea-newsletter-card">
							<div class="berea-newsletter-card__header">
								<h3 class="berea-newsletter-card__title"><?php esc_html_e( 'SUSCRÍBETE', 'berea' ); ?></h3>
								<p class="berea-newsletter-card__subtitle"><?php esc_html_e( 'y recibe exclusivas ofertas y devocionales', 'berea' ); ?></p>
							</div>

							<form id="berea-footer-newsletter-form" class="berea-newsletter-form" method="post">
								<div class="berea-form-field">
									<label for="berea-footer-email" class="screen-reader-text"><?php esc_html_e( 'Correo electrónico', 'berea' ); ?></label>
									<input 
										type="email" 
										id="berea-footer-email" 
										name="email" 
										placeholder="<?php esc_attr_e( 'EMAIL', 'berea' ); ?>" 
										required 
										autocomplete="email"
									/>
								</div>

								<div class="berea-form-consent">
									<label class="berea-checkbox-label">
										<input type="checkbox" id="berea-footer-consent" required />
										<span class="berea-checkbox-text">
											<?php esc_html_e( 'Acepto las condiciones y recibir boletines y promociones de Berea.', 'berea' ); ?>
										</span>
									</label>
									<p class="berea-form-disclaimer">
										<?php esc_html_e( 'Puedes cancelar tu suscripción cuando quieras con un solo clic.', 'berea' ); ?>
									</p>
								</div>

								<button type="submit" id="berea-footer-submit" class="berea-newsletter-btn">
									<span><?php esc_html_e( 'SUSCRIBIRSE', 'berea' ); ?></span>
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
								</button>
							</form>

							<p id="berea-footer-newsletter-msg" class="berea-form-message" role="status" aria-live="polite"></p>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- ====================================================================
		     BLOQUE 2: FRANJA INTERMEDIA (Contacto, Pagos y Redes)
		     ==================================================================== -->
		<div class="berea-footer__middle">
			<div class="berea-footer-container">
				<div class="berea-footer-middle__wrap">

					<!-- Contacto Directo Berea -->
					<div class="berea-footer-contact">
						<div class="berea-footer-contact__icon-wrap">
							<!-- Icono Libro / Sello Berea -->
							<svg class="berea-contact-brand-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
								<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
								<path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
							</svg>
						</div>
						<div class="berea-footer-contact__info">
							<a href="https://wa.me/<?php echo esc_attr( $whatsapp_number ); ?>" target="_blank" rel="noopener noreferrer" class="berea-contact-phone">
								<!-- Icono WhatsApp -->
								<svg class="berea-contact-wa-icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
									<path d="M17.472 14.382c-.301-.15-1.781-.879-2.056-.98-.276-.1-.477-.15-.678.15-.2.301-.778.98-.954 1.18-.175.201-.351.226-.652.075-.301-.15-1.272-.469-2.423-1.496-.895-.798-1.5-1.784-1.675-2.085-.176-.301-.019-.464.132-.614.136-.135.301-.351.452-.527.15-.176.2-.301.301-.502.101-.201.05-.377-.025-.527-.075-.151-.678-1.634-.929-2.237-.245-.588-.493-.508-.678-.518-.175-.01-.376-.01-.577-.01s-.527.075-.803.377c-.276.301-1.054 1.03-1.054 2.511 0 1.482 1.079 2.913 1.23 3.114.15.201 2.124 3.243 5.146 4.548.719.311 1.281.497 1.719.636.723.23 1.381.197 1.901.12.579-.087 1.781-.728 2.032-1.431.251-.703.251-1.306.176-1.431-.076-.126-.277-.202-.578-.352z"></path>
									<path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.524 3.659 1.434 5.176L2 22l4.981-1.396A9.957 9.957 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18.062c-1.65 0-3.18-.492-4.469-1.336l-.321-.21-2.957.828.843-2.883-.228-.337A8.026 8.026 0 0 1 3.938 12c0-4.446 3.616-8.062 8.062-8.062 4.446 0 8.062 3.616 8.062 8.062 0 4.446-3.616 8.062-8.062 8.062z"></path>
								</svg>
								<span><?php echo esc_html( $whatsapp_display ); ?></span>
							</a>
							<a href="mailto:<?php echo esc_attr( $contact_email ); ?>" class="berea-contact-email">
								<?php echo esc_html( $contact_email ); ?>
							</a>
						</div>
					</div>

					<!-- Métodos de Pago Seguros -->
					<div class="berea-footer-payments" aria-label="<?php esc_attr_e( 'Métodos de pago aceptados', 'berea' ); ?>">
						<!-- PayPal -->
						<div class="berea-payment-badge" title="PayPal">
							<svg viewBox="0 0 60 25" width="46" height="20" fill="currentColor" aria-hidden="true">
								<path d="M12.8 3.5h-8c-.7 0-1.3.5-1.4 1.2L1 21.2c-.1.5.3 1 .8 1h4.2c.6 0 1.1-.4 1.2-1l1.1-7.1c.1-.6.6-1.1 1.3-1.1h2.2c5.3 0 8.4-2.6 9.2-7.8.4-2.3 0-3.9-1.1-4.9-1.1-.9-3-1.4-5.9-1.4zm.8 6.7c-.5 3.3-2.6 4.3-5.2 4.3h-1.8l1.4-9.1c.1-.4.4-.7.8-.7h1.5c1.8 0 3.3.3 3.8 1.8.3.9.1 2.3-.5 3.7z"/>
								<path d="M28.4 8.7h-4.3c-.6 0-1.1.4-1.2 1l-.2 1.3c-.5-.8-1.7-1.4-3.1-1.4-3.8 0-7 2.9-7.7 7.2-.4 2.3.2 4.5 1.5 6 1.2 1.4 3 2.1 4.9 2.1 3.4 0 5.3-2.2 5.3-2.2l-.2 1.2c-.1.5.3 1 .8 1h3.9c.6 0 1.1-.5 1.2-1.1l1.9-12.8c.2-.7-.3-1.3-1-1.3zm-4.8 7.3c-.4 2.3-2.1 3.8-4.3 3.8-1.1 0-2-.4-2.5-1.1-.5-.7-.7-1.7-.5-2.7.4-2.3 2.2-3.8 4.3-3.8 1.1 0 2 .4 2.5 1.1.6.7.7 1.7.5 2.7z"/>
								<path d="M37.8 8.7l-4.2 12.4c-.2.6-.7 1-1.3 1h-3.4c-.6 0-1-.5-.8-1l1.7-4.9-4.3-8.5c-.3-.6.1-1.3.8-1.3h4.3c.5 0 .9.3 1.1.8l2 5.1 2.9-5.1c.3-.5.7-.8 1.2-.8h4.2c.8 0 1.2.9.8 1.6l-4.7 1.7z"/>
							</svg>
						</div>
						<!-- Visa -->
						<div class="berea-payment-badge" title="Visa">
							<svg viewBox="0 0 60 25" width="46" height="20" fill="currentColor" aria-hidden="true">
								<path d="M24.7 4.1l-3.8 16.7h-4.5L19 4.1h5.7zm16.5 16.2l3.4-16.2h-4.4c-.9 0-1.6.5-1.9 1.3l-6.8 15h4.8l1-2.7h5.8l.5 2.6h4.6zm-5-6.8l2.3-6.4 1.3 6.4h-3.6zM15 4.1L10.7 15.6l-.5-2.4c-.8-2.7-3.3-5.6-6.1-7.1l4 14.7h4.8l7.2-16.7H15zM48 20.3c3.8 0 6.6-2 6.7-5.1 0-3.9-5.4-4.2-5.4-6 0-.6.7-1.2 2.2-1.2 1.3 0 2.8.4 3.7.8l.7-3.4c-1.1-.4-2.6-.7-4.4-.7-4.7 0-7.8 2.5-7.8 5.9 0 3.8 5.4 4.1 5.4 6.2 0 .8-.9 1.3-2.3 1.3-1.8 0-3.4-.5-4.5-1l-.8 3.5c1.4.6 3.8 1 5.9 1"/>
							</svg>
						</div>
						<!-- Mastercard -->
						<div class="berea-payment-badge" title="Mastercard">
							<svg viewBox="0 0 50 30" width="36" height="22" aria-hidden="true">
								<circle cx="18" cy="15" r="11" fill="#eb001b"/>
								<circle cx="32" cy="15" r="11" fill="#f79e1b"/>
								<path d="M25 6.8a11 11 0 0 0 0 16.4 11 11 0 0 0 0-16.4" fill="#ff5f00"/>
							</svg>
						</div>
						<!-- American Express -->
						<div class="berea-payment-badge" title="American Express">
							<span class="berea-amex-text">AMEX</span>
						</div>
						<!-- Mercado Pago -->
						<div class="berea-payment-badge" title="Mercado Pago / SPEI">
							<span class="berea-mp-text">MERCADO PAGO</span>
						</div>
					</div>

					<!-- Redes Sociales Oficiales -->
					<div class="berea-footer-social">
						<!-- WhatsApp -->
						<a href="https://wa.me/<?php echo esc_attr( $whatsapp_number ); ?>" target="_blank" rel="noopener noreferrer" class="berea-social-link berea-social-link--wa" aria-label="WhatsApp">
							<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
								<path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.524 3.659 1.434 5.176L2 22l4.981-1.396A9.957 9.957 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18.062c-1.65 0-3.18-.492-4.469-1.336l-.321-.21-2.957.828.843-2.883-.228-.337A8.026 8.026 0 0 1 3.938 12c0-4.446 3.616-8.062 8.062-8.062 4.446 0 8.062 3.616 8.062 8.062 0 4.446-3.616 8.062-8.062 8.062z"></path>
							</svg>
						</a>

						<!-- Facebook -->
						<a href="https://facebook.com/edicionesberea" target="_blank" rel="noopener noreferrer" class="berea-social-link berea-social-link--fb" aria-label="Facebook">
							<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
								<path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path>
							</svg>
						</a>

						<!-- Instagram -->
						<a href="https://instagram.com/edicionesberea" target="_blank" rel="noopener noreferrer" class="berea-social-link berea-social-link--ig" aria-label="Instagram">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
								<rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
								<path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
								<line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
							</svg>
						</a>

						<!-- YouTube -->
						<a href="https://youtube.com/@edicionesberea" target="_blank" rel="noopener noreferrer" class="berea-social-link berea-social-link--yt" aria-label="YouTube">
							<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
								<path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.5 12 3.5 12 3.5s-7.505 0-9.377.55a3.016 3.016 0 0 0-2.122 2.136C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.55 9.376.55 9.376.55s7.505 0 9.377-.55a3.016 3.016 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path>
							</svg>
						</a>
					</div>

				</div>
			</div>
		</div>

		<!-- ====================================================================
		     BLOQUE 3: LEGAL Y COPYRIGHT
		     ==================================================================== -->
		<div class="berea-footer__bottom">
			<div class="berea-footer-container">
				<div class="berea-footer-bottom__wrap">
					<p class="berea-copyright">
						<?php printf( esc_html__( 'Copyright © %1$s Ediciones Berea. Todos los derechos reservados.', 'berea' ), esc_html( $year ) ); ?>
					</p>

					<!-- Enlaces Legales -->
					<div class="berea-legal-links">
						<?php if ( has_nav_menu( 'footer_legal' ) ) : ?>
							<?php wp_nav_menu( array(
								'theme_location' => 'footer_legal',
								'container'      => false,
								'menu_class'     => 'berea-legal-nav',
								'depth'          => 1,
							) ); ?>
						<?php else : ?>
							<ul class="berea-legal-nav">
								<li><a href="<?php echo esc_url( home_url( '/aviso-legal' ) ); ?>"><?php esc_html_e( 'Aviso legal', 'berea' ); ?></a></li>
								<li><a href="<?php echo esc_url( home_url( '/politica-de-privacidad' ) ); ?>"><?php esc_html_e( 'Política de privacidad', 'berea' ); ?></a></li>
								<li><a href="<?php echo esc_url( home_url( '/terminos-y-condiciones' ) ); ?>"><?php esc_html_e( 'Términos y condiciones', 'berea' ); ?></a></li>
								<li><a href="<?php echo esc_url( home_url( '/politica-de-cookies' ) ); ?>"><?php esc_html_e( 'Política de cookies', 'berea' ); ?></a></li>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<?php
}
