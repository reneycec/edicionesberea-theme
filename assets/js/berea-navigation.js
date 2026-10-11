/**
 * Navegación Global, Menú Hamburguesa y Newsletter — Ediciones Berea
 */

(function () {
	'use strict';

	document.addEventListener('DOMContentLoaded', function () {

		/* ======================================================================
		   1. HEADER FIJO GLOBAL (STICKY HEADER)
		   ====================================================================== */
		var header = document.getElementById('masthead');
		if (header) {
			var triggerOffset = 70;

			var handleScroll = function () {
				if (window.scrollY > triggerOffset) {
					if (!document.body.classList.contains('berea-sticky-active')) {
						var headerH = header.offsetHeight;
						document.body.classList.add('berea-sticky-active');
						document.body.style.paddingTop = headerH + 'px';
					}
				} else {
					if (document.body.classList.contains('berea-sticky-active')) {
						document.body.classList.remove('berea-sticky-active');
						document.body.style.paddingTop = '';
					}
				}
			};

			window.addEventListener('scroll', handleScroll, { passive: true });
			handleScroll();
		}

		/* ======================================================================
		   2. MENÚ DE HAMBURGUESA Y DRAWER OFF-CANVAS
		   ====================================================================== */
		var hamburgerBtn = document.getElementById('berea-mobile-hamburger');
		var drawerEl     = document.getElementById('berea-mobile-drawer');
		var overlayEl    = document.getElementById('berea-drawer-overlay');
		var closeBtn     = document.getElementById('berea-drawer-close');

		function openDrawer() {
			if (!drawerEl) return;
			drawerEl.classList.add('is-open');
			drawerEl.setAttribute('aria-hidden', 'false');
			if (overlayEl) {
				overlayEl.classList.add('is-visible');
				overlayEl.setAttribute('aria-hidden', 'false');
			}
			if (hamburgerBtn) {
				hamburgerBtn.classList.add('is-active');
				hamburgerBtn.setAttribute('aria-expanded', 'true');
			}
			document.body.classList.add('berea-drawer-open');
		}

		function closeDrawer() {
			if (!drawerEl) return;
			drawerEl.classList.remove('is-open');
			drawerEl.setAttribute('aria-hidden', 'true');
			if (overlayEl) {
				overlayEl.classList.remove('is-visible');
				overlayEl.setAttribute('aria-hidden', 'true');
			}
			if (hamburgerBtn) {
				hamburgerBtn.classList.remove('is-active');
				hamburgerBtn.setAttribute('aria-expanded', 'false');
			}
			document.body.classList.remove('berea-drawer-open');
		}

		if (hamburgerBtn) {
			hamburgerBtn.addEventListener('click', function (e) {
				e.preventDefault();
				if (drawerEl && drawerEl.classList.contains('is-open')) {
					closeDrawer();
				} else {
					openDrawer();
				}
			});
		}

		if (closeBtn) {
			closeBtn.addEventListener('click', function (e) {
				e.preventDefault();
				closeDrawer();
			});
		}

		if (overlayEl) {
			overlayEl.addEventListener('click', function () {
				closeDrawer();
			});
		}

		// Cerrar drawer al presionar Escape
		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape' && drawerEl && drawerEl.classList.contains('is-open')) {
				closeDrawer();
			}
		});

		// Manejo de submenús en el Drawer móvil
		if (drawerEl) {
			var menuItemsWithChildren = drawerEl.querySelectorAll('.menu-item-has-children > a');
			menuItemsWithChildren.forEach(function (link) {
				// Crear toggle botón
				var toggleBtn = document.createElement('button');
				toggleBtn.className = 'berea-submenu-toggle';
				toggleBtn.setAttribute('aria-label', 'Desplegar submenú');
				toggleBtn.innerHTML = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>';
				
				link.parentNode.insertBefore(toggleBtn, link.nextSibling);

				toggleBtn.addEventListener('click', function (e) {
					e.preventDefault();
					var parentLi = toggleBtn.parentNode;
					parentLi.classList.toggle('submenu-expanded');
					var isExpanded = parentLi.classList.contains('submenu-expanded');
					toggleBtn.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
				});
			});
		}

		/* ======================================================================
		   3. NEWSLETTER DEL PIE DE PÁGINA (AJAX)
		   ====================================================================== */
		var newsletterForm = document.getElementById('berea-footer-newsletter-form');
		var newsletterMsg  = document.getElementById('berea-footer-newsletter-msg');
		var submitBtn      = document.getElementById('berea-footer-submit');

		if (newsletterForm && newsletterMsg) {
			newsletterForm.addEventListener('submit', function (e) {
				e.preventDefault();

				var emailInput = document.getElementById('berea-footer-email');
				var consent    = document.getElementById('berea-footer-consent');

				if (!emailInput || !emailInput.value) {
					newsletterMsg.className = 'berea-form-message is-error';
					newsletterMsg.textContent = 'Por favor ingresa un correo electrónico.';
					return;
				}

				if (consent && !consent.checked) {
					newsletterMsg.className = 'berea-form-message is-error';
					newsletterMsg.textContent = 'Debes aceptar las condiciones para suscribirte.';
					return;
				}

				if (submitBtn) {
					submitBtn.disabled = true;
				}
				newsletterMsg.className = 'berea-form-message is-loading';
				newsletterMsg.textContent = 'Registrando suscripción...';

				var ajaxUrl = (window.bereaGlobal && window.bereaGlobal.ajaxUrl) ? window.bereaGlobal.ajaxUrl : '/wp-admin/admin-ajax.php';
				var nonce   = (window.bereaGlobal && window.bereaGlobal.newsletterNonce) ? window.bereaGlobal.newsletterNonce : '';

				var formData = new URLSearchParams();
				formData.append('action', 'libreria_newsletter_subscribe');
				formData.append('nonce', nonce);
				formData.append('email', emailInput.value);

				fetch(ajaxUrl, {
					method: 'POST',
					headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
					body: formData.toString()
				})
				.then(function (res) { return res.json(); })
				.then(function (data) {
					if (data.success) {
						newsletterMsg.className = 'berea-form-message is-success';
						newsletterMsg.textContent = (data.data && data.data.message) ? data.data.message : '¡Gracias por suscribirte!';
						newsletterForm.reset();
					} else {
						newsletterMsg.className = 'berea-form-message is-error';
						newsletterMsg.textContent = (data.data && data.data.message) ? data.data.message : 'Ocurrió un error al registrar.';
					}
				})
				.catch(function () {
					newsletterMsg.className = 'berea-form-message is-error';
					newsletterMsg.textContent = 'Error de conexión. Intenta nuevamente.';
				})
				.finally(function () {
					if (submitBtn) {
						submitBtn.disabled = false;
					}
				});
			});
		}

	});
})();
