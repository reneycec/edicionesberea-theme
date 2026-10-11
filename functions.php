<?php
// Cargar estilos y fuentes del tema padre y del tema hijo
add_action( 'wp_enqueue_scripts', 'berea_child_enqueue_styles' );
function berea_child_enqueue_styles() {
    // 1. Google Fonts: Playfair Display (Serif editorial) y Plus Jakarta Sans
    wp_enqueue_style(
        'berea-google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // 2. Estilo del tema padre (Storefront)
    wp_enqueue_style( 'storefront-style', get_template_directory_uri() . '/style.css' );

    // 3. Estilo base del tema hijo (style.css)
    wp_enqueue_style( 'berea-child-style', get_stylesheet_uri(), array( 'storefront-style' ), wp_get_theme()->get( 'Version' ) );

    // 4. Sistema de Diseño Global Unificado (Encabezados, Tipografía, Header Fijo, Menú Móvil y Footer)
    $global_css_path = get_stylesheet_directory() . '/assets/css/berea-global.css';
    wp_enqueue_style(
        'berea-global-style',
        get_stylesheet_directory_uri() . '/assets/css/berea-global.css',
        array( 'storefront-style', 'berea-google-fonts' ),
        file_exists( $global_css_path ) ? filemtime( $global_css_path ) : wp_get_theme()->get( 'Version' )
    );

    // 5. Script Global de Navegación, Drawer Móvil y Newsletter AJAX
    $nav_js_path = get_stylesheet_directory() . '/assets/js/berea-navigation.js';
    wp_enqueue_script(
        'berea-global-nav',
        get_stylesheet_directory_uri() . '/assets/js/berea-navigation.js',
        array(),
        file_exists( $nav_js_path ) ? filemtime( $nav_js_path ) : wp_get_theme()->get( 'Version' ),
        true
    );

    wp_localize_script( 'berea-global-nav', 'bereaGlobal', array(
        'ajaxUrl'         => admin_url( 'admin-ajax.php' ),
        'newsletterNonce' => wp_create_nonce( 'libreria_newsletter_nonce' ),
    ) );

    // 6. Estilos específicos para la plantilla de Servicios Editoriales
    if ( is_page_template( 'page-servicios-editoriales.php' ) || is_page( 'servicios-editoriales' ) ) {
        $servicios_css = get_stylesheet_directory() . '/assets/css/servicios-editoriales.css';
        wp_enqueue_style(
            'berea-servicios-editoriales',
            get_stylesheet_directory_uri() . '/assets/css/servicios-editoriales.css',
            array( 'berea-global-style' ),
            file_exists( $servicios_css ) ? filemtime( $servicios_css ) : wp_get_theme()->get( 'Version' )
        );
    }

    // 7. Estilos específicos para la plantilla de Nosotros / Nuestra Historia
    if ( is_page_template( 'page-nosotros.php' ) || is_page( array( 'nosotros', 'historia', 'nuestra-historia' ) ) ) {
        $nosotros_css = get_stylesheet_directory() . '/assets/css/nosotros.css';
        wp_enqueue_style(
            'berea-nosotros',
            get_stylesheet_directory_uri() . '/assets/css/nosotros.css',
            array( 'berea-global-style' ),
            file_exists( $nosotros_css ) ? filemtime( $nosotros_css ) : wp_get_theme()->get( 'Version' )
        );
    }

    // 8. Estilos específicos para la plantilla de Eventos y Seminarios
    if ( is_page_template( 'page-eventos.php' ) || is_page( array( 'eventos', 'seminarios', 'eventos-seminarios' ) ) ) {
        $eventos_css = get_stylesheet_directory() . '/assets/css/eventos.css';
        wp_enqueue_style(
            'berea-eventos',
            get_stylesheet_directory_uri() . '/assets/css/eventos.css',
            array( 'berea-global-style' ),
            file_exists( $eventos_css ) ? filemtime( $eventos_css ) : wp_get_theme()->get( 'Version' )
        );
    }
}

// Incluir módulos del tema
require_once get_stylesheet_directory() . '/inc/custom-header.php';
require_once get_stylesheet_directory() . '/inc/custom-footer.php';
require_once get_stylesheet_directory() . '/inc/functions-home.php';

function berea_carrusel_scripts() {
    if ( is_front_page() ) {
        // Estilos de Swiper
        wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0' );
        // Script de Swiper
        wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true );
        // Inicialización
        wp_add_inline_script( 'swiper-js', "
            document.addEventListener('DOMContentLoaded', function () {
                var swiper = new Swiper('.berea-slider', {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    loop: true,
                    autoplay: { delay: 4500, disableOnInteraction: false },
                    pagination: { el: '.swiper-pagination', clickable: true },
                    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
                    breakpoints: {
                        640: { slidesPerView: 2, spaceBetween: 20 },
                        1024: { slidesPerView: 4, spaceBetween: 25 }
                    }
                });

                // Hero carrusel: solo si hay más de un slide configurado
                var heroEl = document.querySelector('.libreria-hero--carrusel');
                if ( heroEl ) {
                    new Swiper(heroEl, {
                        effect: 'fade',
                        fadeEffect: { crossFade: true },
                        loop: true,
                        speed: 900,
                        autoplay: { delay: 6000, disableOnInteraction: false },
                        pagination: { el: '.libreria-hero__paginacion', clickable: true }
                    });
                }
            });
        " );
    }
}
add_action( 'wp_enqueue_scripts', 'berea_carrusel_scripts' );

/**
 * Asignar peso y dimensiones por defecto en WooCommerce
 * Evita fallos en la API de Skydropx cuando un producto no tiene medidas registradas.
 */

// 1. Peso por defecto (0.4 kg = 400 g)
add_filter( 'woocommerce_product_get_weight', 'berea_fallback_weight', 10, 2 );
add_filter( 'woocommerce_product_variation_get_weight', 'berea_fallback_weight', 10, 2 );
function berea_fallback_weight( $weight, $product ) {
    return ( empty( $weight ) || floatval( $weight ) <= 0 ) ? '0.40' : $weight;
}

// 2. Largo por defecto (21 cm - formato estándar de libro)
add_filter( 'woocommerce_product_get_length', 'berea_fallback_length', 10, 2 );
add_filter( 'woocommerce_product_variation_get_length', 'berea_fallback_length', 10, 2 );
function berea_fallback_length( $length, $product ) {
    return ( empty( $length ) || floatval( $length ) <= 0 ) ? '21' : $length;
}

// 3. Ancho por defecto (14 cm)
add_filter( 'woocommerce_product_get_width', 'berea_fallback_width', 10, 2 );
add_filter( 'woocommerce_product_variation_get_width', 'berea_fallback_width', 10, 2 );
function berea_fallback_width( $width, $product ) {
    return ( empty( $width ) || floatval( $width ) <= 0 ) ? '14' : $width;
}

// 4. Altura / Grosor por defecto (3 cm)
add_filter( 'woocommerce_product_get_height', 'berea_fallback_height', 10, 2 );
add_filter( 'woocommerce_product_variation_get_height', 'berea_fallback_height', 10, 2 );
function berea_fallback_height( $height, $product ) {
    return ( empty( $height ) || floatval( $height ) <= 0 ) ? '3' : $height;
}