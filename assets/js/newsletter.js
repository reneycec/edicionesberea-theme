document.addEventListener('DOMContentLoaded', function () {
	var form = document.getElementById('libreria-newsletter-form');
	var mensaje = document.getElementById('libreria-newsletter-mensaje');

	if (!form) {
		return;
	}

	form.addEventListener('submit', function (event) {
		event.preventDefault();

		var email = document.getElementById('libreria-newsletter-email').value;
		var boton = form.querySelector('button[type="submit"]');

		boton.disabled = true;
		mensaje.textContent = 'Enviando...';

		var body = new URLSearchParams();
		body.append('action', 'libreria_newsletter_subscribe');
		body.append('nonce', window.libreriaHome.nonce);
		body.append('email', email);

		fetch(window.libreriaHome.ajaxUrl, {
			method: 'POST',
			headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
			body: body.toString()
		})
			.then(function (response) { return response.json(); })
			.then(function (data) {
				mensaje.textContent = data.data && data.data.message ? data.data.message : 'Ocurrió un error.';
				if (data.success) {
					form.reset();
				}
			})
			.catch(function () {
				mensaje.textContent = 'No se pudo enviar. Intenta de nuevo.';
			})
			.finally(function () {
				boton.disabled = false;
			});
	});
});
