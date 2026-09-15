<?php
/**
 * Template: Portada (front-page.php)
 *
 * WordPress prioriza este archivo automáticamente para la home SIEMPRE
 * que en Ajustes > Lectura tengas seleccionado "Una página estática"
 * (ver instrucciones de despliegue). No lleva markup pesado ni queries
 * de negocio: solo orquesta los template-parts.
 */

get_header(); ?>

<main id="main" class="site-main libreria-home" role="main">

	<?php get_template_part( 'template-parts/home/hero' ); ?>
	<?php get_template_part( 'template-parts/home/carrusel-libros' ); ?>
	<?php get_template_part( 'template-parts/home/categorias-destacadas' ); ?>
	<?php get_template_part( 'template-parts/home/productos-destacados' ); ?>
	<?php get_template_part( 'template-parts/home/autores-editoriales' ); ?>
	<?php get_template_part( 'template-parts/home/franja-confianza' ); ?>
	<?php get_template_part( 'template-parts/home/testimonios' ); ?>
	<?php get_template_part( 'template-parts/home/newsletter' ); ?>

</main>

<?php get_footer(); ?>
