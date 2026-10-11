<?php
/**
 * Template Name: Servicios Editoriales
 */
get_header(); ?>

<main id="primary" class="site-main page-servicios-contenido">
    <div class="berea-container">
        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <p class="lead">Soluciones integrales de publicación y cuidado editorial para autores y ministerios.</p>
        </header>

        <section class="servicios-grid-detalle">
            <article class="servicio-card">
                <div class="icono">✍️</div>
                <h2>Traducción Teológica</h2>
                <p>Traducción rigurosa de textos y manuscritos teológicos conservando la fidelidad doctrinal y el estilo original.</p>
            </article>

            <article class="servicio-card">
                <div class="icono">📖</div>
                <h2>Corrección de Estilo</h2>
                <p>Revisión ortotipográfica, semántica y cuidado minucioso de referencias bíblicas.</p>
            </article>

            <article class="servicio-card">
                <div class="icono">🎨</div>
                <h2>Diseño y Maquetación</h2>
                <p>Creación de portadas de alto impacto y composición de páginas interiores para impresión física y e-books.</p>
            </article>

            <article class="servicio-card">
                <div class="icono">🖨️</div>
                <h2>Impresión Editorial</h2>
                <p>Gestión de tirajes, selección de papel, encuadernación y acabados de primera calidad.</p>
            </article>

            <article class="servicio-card">
                <div class="icono">🚚</div>
                <h2>Distribución Nacional</h2>
                <p>Logística y entrega a través de paqueterías integradas con seguimiento y presencia en librerías.</p>
            </article>
        </section>
        
        <div class="cta-contacto">
            <h3>¿Tienes un proyecto editorial en mente?</h3>
            <a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="button">Solicitar cotización</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>