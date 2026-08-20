<?php
// Cargar estilos del tema padre y del tema hijo, y assets personalizados
add_action( 'wp_enqueue_scripts', 'berea_child_enqueue_styles' );
function berea_child_enqueue_styles() {
    // Estilo del tema padre (Storefront)
    wp_enqueue_style( 'storefront-style', get_template_directory_uri() . '/style.css' );

    // Estilo principal del tema hijo (style.css)
    wp_enqueue_style( 'berea-child-style', get_stylesheet_uri(), array( 'storefront-style' ), wp_get_theme()->get( 'Version' ) );

    // Archivo CSS personalizado dentro de assets/css/home.css
    wp_enqueue_style( 'berea-home-css', get_stylesheet_directory_uri() . '/assets/css/home.css', array(), '1.0.0' );

    // Archivo JS personalizado dentro de assets/js/newsletter.js
    wp_enqueue_script( 'berea-newsletter-js', get_stylesheet_directory_uri() . '/assets/js/newsletter.js', array( 'jquery' ), '1.0.0', true );
}

// Incluir funciones adicionales desde la carpeta /inc
require_once get_stylesheet_directory() . '/inc/functions-home.php';
