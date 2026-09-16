<?php
/**
 * Lógica de la Home — Librería Cristiana
 *
 * Este archivo se separa de functions.php para no ensuciar el archivo
 * principal del child theme y facilitar el mantenimiento/versionado.
 *
 * Requiere: require_once get_stylesheet_directory() . '/inc/functions-home.php';
 * al final de tu functions.php actual.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function berea_home_get_field( $field_name, $post_id = false ) {
	if ( ! function_exists( 'get_field' ) ) {
		return null;
	}

	return get_field( $field_name, $post_id );
}

/* -------------------------------------------------------------------------
 * 1. ASSETS DEL HOME
 * -----------------------------------------------------------------------*/
add_action( 'wp_enqueue_scripts', function () {
	if ( ! is_front_page() ) {
		return;
	}

	wp_enqueue_style( 'dashicons' );

	wp_enqueue_style(
		'libreria-home',
		get_stylesheet_directory_uri() . '/assets/css/home.css',
		array( 'storefront-style' ),
		filemtime( get_stylesheet_directory() . '/assets/css/home.css' )
	);

	wp_enqueue_script(
		'libreria-home-newsletter',
		get_stylesheet_directory_uri() . '/assets/js/newsletter.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_localize_script( 'libreria-home-newsletter', 'libreriaHome', array(
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'nonce'   => wp_create_nonce( 'libreria_newsletter_nonce' ),
	) );
} );

/* -------------------------------------------------------------------------
 * 2. CPT: TESTIMONIOS
 * Por qué CPT y no ACF Options repeater: necesitas que el equipo de
 * marketing agregue testimonios ilimitados desde el admin sin tocar ACF
 * ni depender de la versión PRO (Repeater es feature de pago).
 * -----------------------------------------------------------------------*/
add_action( 'init', function () {
	register_post_type( 'testimonio', array(
		'labels' => array(
			'name'          => 'Testimonios',
			'singular_name' => 'Testimonio',
			'add_new_item'  => 'Agregar testimonio',
			'edit_item'     => 'Editar testimonio',
		),
		'public'        => false,
		'show_ui'       => true,
		'show_in_menu'  => true,
		'menu_icon'     => 'dashicons-format-quote',
		'supports'      => array( 'title' ),
		'has_archive'   => false,
	) );
} );

/* -------------------------------------------------------------------------
 * 3. TAXONOMÍA: EDITORIAL (autores / casas editoriales)
 * Se asocia a 'product' para poder filtrar el catálogo por editorial,
 * y además la usamos en el home para la sección de marcas destacadas.
 * -----------------------------------------------------------------------*/
add_action( 'init', function () {
	register_taxonomy( 'editorial', array( 'product' ), array(
		'labels' => array(
			'name'          => 'Editoriales',
			'singular_name' => 'Editorial',
		),
		'public'            => true,
		'hierarchical'      => false,
		'show_admin_column' => true,
		'rewrite'           => array( 'slug' => 'editorial' ),
	) );
} );

/* -------------------------------------------------------------------------
 * 4. CAMPOS ACF (enfoque híbrido — sin dependencias de ACF PRO)
 *
 * Nota de arquitectura: Repeater, Flexible Content y Options Page son
 * features de ACF PRO. Para no forzarte a comprar la licencia ahora,
 * los campos del Hero / franja de confianza / newsletter se anclan
 * directamente a la página marcada como "Portada estática" en
 * Ajustes > Lectura (location rule: Page == front page). Si más adelante
 * subes a ACF PRO, migra esto a una Options Page + Repeater real.
 * -----------------------------------------------------------------------*/
add_action( 'acf/init', function () {

	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	// --- Grupo: contenido editable de la Home ---
	acf_add_local_field_group( array(
		'key'      => 'group_home_libreria',
		'title'    => 'Home — Librería (contenido editable)',
		'fields'   => array(
			array(
				'key'   => 'field_hero_titulo',
				'label' => 'Hero — título',
				'name'  => 'hero_titulo',
				'type'  => 'text',
			),
			array(
				'key'   => 'field_hero_subtitulo',
				'label' => 'Hero — subtítulo',
				'name'  => 'hero_subtitulo',
				'type'  => 'textarea',
				'rows'  => 2,
			),
			array(
				'key'          => 'field_hero_imagen',
				'label'        => 'Hero — imagen de fondo',
				'name'         => 'hero_imagen',
				'type'         => 'image',
				'return_format'=> 'url',
				'preview_size' => 'medium',
			),
			array(
				'key'   => 'field_hero_boton_texto',
				'label' => 'Hero — texto del botón',
				'name'  => 'hero_boton_texto',
				'type'  => 'text',
				'default_value' => 'Ver catálogo',
			),
			array(
				'key'   => 'field_hero_boton_url',
				'label' => 'Hero — URL del botón',
				'name'  => 'hero_boton_url',
				'type'  => 'url',
			),
			array(
				'key'   => 'field_confianza_tab',
				'label' => 'Franja de confianza',
				'type'  => 'tab',
			),
			array(
				'key'   => 'field_confianza_1_icono',
				'label' => 'Item 1 — ícono (dashicon slug)',
				'name'  => 'confianza_1_icono',
				'type'  => 'text',
				'default_value' => 'dashicons-car',
			),
			array(
				'key'   => 'field_confianza_1_texto',
				'label' => 'Item 1 — texto',
				'name'  => 'confianza_1_texto',
				'type'  => 'text',
				'default_value' => 'Envío a todo el país',
			),
			array(
				'key'   => 'field_confianza_2_icono',
				'label' => 'Item 2 — ícono (dashicon slug)',
				'name'  => 'confianza_2_icono',
				'type'  => 'text',
				'default_value' => 'dashicons-lock',
			),
			array(
				'key'   => 'field_confianza_2_texto',
				'label' => 'Item 2 — texto',
				'name'  => 'confianza_2_texto',
				'type'  => 'text',
				'default_value' => 'Pago seguro con Stripe y PayPal',
			),
			array(
				'key'   => 'field_confianza_3_icono',
				'label' => 'Item 3 — ícono (dashicon slug)',
				'name'  => 'confianza_3_icono',
				'type'  => 'text',
				'default_value' => 'dashicons-update',
			),
			array(
				'key'   => 'field_confianza_3_texto',
				'label' => 'Item 3 — texto',
				'name'  => 'confianza_3_texto',
				'type'  => 'text',
				'default_value' => 'Devoluciones sencillas',
			),
			array(
				'key'   => 'field_editoriales_tab',
				'label' => 'Autores / editoriales destacadas',
				'type'  => 'tab',
			),
			array(
				'key'           => 'field_autores_editoriales',
				'label'         => 'Editoriales a destacar en el home',
				'name'          => 'autores_editoriales',
				'type'          => 'taxonomy',
				'taxonomy'      => 'editorial',
				'field_type'    => 'checkbox',
				'return_format' => 'object',
				'add_term'      => 1,
			),
			array(
				'key'   => 'field_newsletter_tab',
				'label' => 'Newsletter',
				'type'  => 'tab',
			),
			array(
				'key'   => 'field_newsletter_titulo',
				'label' => 'Newsletter — título',
				'name'  => 'newsletter_titulo',
				'type'  => 'text',
				'default_value' => 'Recibe un devocional cada semana',
			),
		),
		'location' => array(
			array(
				array(
					'param'    => 'page_type',
					'operator' => '==',
					'value'    => 'front_page',
				),
			),
		),
	) );

	// --- Grupo: logo por término de la taxonomía "editorial" ---
	acf_add_local_field_group( array(
		'key'    => 'group_editorial_logo',
		'title'  => 'Editorial — logo',
		'fields' => array(
			array(
				'key'           => 'field_editorial_logo',
				'label'         => 'Logo de la editorial',
				'name'          => 'editorial_logo',
				'type'          => 'image',
				'return_format' => 'url',
				'preview_size'  => 'thumbnail',
			),
		),
		'location' => array(
			array(
				array(
					'param'    => 'taxonomy',
					'operator' => '==',
					'value'    => 'editorial',
				),
			),
		),
	) );

	// --- Grupo: campos del CPT Testimonio ---
	acf_add_local_field_group( array(
		'key'    => 'group_testimonio_fields',
		'title'  => 'Datos del testimonio',
		'fields' => array(
			array(
				'key'   => 'field_testimonio_texto',
				'label' => 'Texto del testimonio',
				'name'  => 'testimonio_texto',
				'type'  => 'textarea',
				'rows'  => 3,
			),
			array(
				'key'   => 'field_testimonio_autor',
				'label' => 'Nombre del autor',
				'name'  => 'testimonio_autor',
				'type'  => 'text',
			),
			array(
				'key'           => 'field_testimonio_rating',
				'label'         => 'Calificación (1-5)',
				'name'          => 'testimonio_rating',
				'type'          => 'number',
				'min'           => 1,
				'max'           => 5,
				'default_value' => 5,
			),
		),
		'location' => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'testimonio',
				),
			),
		),
	) );
} );

/* -------------------------------------------------------------------------
 * 5. AJAX: SUSCRIPCIÓN NEWSLETTER
 * Guardamos el lead como CPT en vez de tabla custom: cero migraciones,
 * exportable desde el admin, y suficiente para volumen bajo/medio.
 * Si el volumen crece, migrar a Mailchimp/Brevo vía su API REST.
 * -----------------------------------------------------------------------*/
add_action( 'init', function () {
	register_post_type( 'lead_newsletter', array(
		'labels'       => array( 'name' => 'Suscriptores newsletter' ),
		'public'       => false,
		'show_ui'      => true,
		'show_in_menu' => 'edit.php?post_type=testimonio',
		'supports'     => array( 'title' ),
	) );
} );

add_action( 'wp_ajax_libreria_newsletter_subscribe', 'libreria_handle_newsletter_subscribe' );
add_action( 'wp_ajax_nopriv_libreria_newsletter_subscribe', 'libreria_handle_newsletter_subscribe' );

function libreria_handle_newsletter_subscribe(): void {
	check_ajax_referer( 'libreria_newsletter_nonce', 'nonce' );

	$email = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';

	if ( empty( $email ) || ! is_email( $email ) ) {
		wp_send_json_error( array( 'message' => 'Ingresa un correo válido.' ), 400 );
	}

	// Evitar duplicados.
	$existe = get_page_by_title( $email, OBJECT, 'lead_newsletter' );
	if ( $existe ) {
		wp_send_json_success( array( 'message' => 'Ya estabas suscrito, ¡gracias!' ) );
	}

	wp_insert_post( array(
		'post_type'   => 'lead_newsletter',
		'post_title'  => $email,
		'post_status' => 'publish',
	) );

	wp_send_json_success( array( 'message' => '¡Listo! Revisa tu correo la próxima semana.' ) );
}

/* -------------------------------------------------------------------------
 * 6. MENÚ STICKY (header fijo al hacer scroll)
 * Se hace con clase JS en vez de position:fixed puro para compensar la
 * altura del header con padding en el body y evitar el "salto" de contenido.
 * -----------------------------------------------------------------------*/
add_action( 'wp_enqueue_scripts', function () {
	if ( ! is_front_page() && ! is_shop() && ! is_product_category() && ! is_product() ) {
		return;
	}

	$sticky_js = <<<'JS'
document.addEventListener('DOMContentLoaded', function () {
	var header = document.getElementById('masthead');
	if ( ! header ) { return; }
	var headerHeight = header.offsetHeight;
	var trigger = headerHeight + 40;

	function onScroll() {
		if ( window.scrollY > trigger ) {
			if ( ! document.body.classList.contains('berea-sticky-active') ) {
				document.body.classList.add('berea-sticky-active');
				document.body.style.paddingTop = headerHeight + 'px';
			}
		} else {
			if ( document.body.classList.contains('berea-sticky-active') ) {
				document.body.classList.remove('berea-sticky-active');
				document.body.style.paddingTop = '';
			}
		}
	}

	window.addEventListener('scroll', onScroll, { passive: true });
	onScroll();
});
JS;

	wp_register_script( 'berea-sticky-header', false, array(), wp_get_theme()->get( 'Version' ), true );
	wp_enqueue_script( 'berea-sticky-header' );
	wp_add_inline_script( 'berea-sticky-header', $sticky_js );
} );
