<?php
// Cargar estilos del tema padre y del tema hijo
add_action( 'wp_enqueue_scripts', 'berea_child_enqueue_styles' );
function berea_child_enqueue_styles() {
    // Estilo del tema padre (Storefront)
    wp_enqueue_style( 'storefront-style', get_template_directory_uri() . '/style.css' );

    // Estilo principal del tema hijo (style.css)
    wp_enqueue_style( 'berea-child-style', get_stylesheet_uri(), array( 'storefront-style' ), wp_get_theme()->get( 'Version' ) );

}

// Incluir funciones adicionales desde la carpeta /inc
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