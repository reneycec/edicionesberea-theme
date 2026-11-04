<?php
/**
 * Template Name: Nosotros / Nuestra Historia
 * Description: Historia, misión y visión de Ediciones Berea.
 */

get_header(); 

$img_dir = get_stylesheet_directory_uri() . '/assets/img/';
$foto_predicando_biblia = $img_dir . 'IMG-20240407-WA0034.jpg';
$whatsapp_url = 'https://wa.me/525510803880?text=Hola%2C%20quisiera%20recibir%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Ediciones%20Berea%20y%20su%20ministerio';
?>

<main id="primary" class="site-main page-nosotros-editorial" role="main">
    <div class="be-nosotros-wrap">

        <!-- ====================================================================
             1. HERO INSTITUCIONAL
             ==================================================================== -->
        <section class="be-about-hero be-breakout">
            <div class="be-container">
                <div class="be-about-hero__content">
                    <div class="be-badge be-badge--gold-dark">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                        Ediciones Berea
                    </div>

                    <h1 class="be-about-hero__title">Historia, Misión y Visión</h1>

                    <p class="be-about-hero__lead">
                        Conoce la trayectoria, misión y visión de Ediciones Berea.
                    </p>

                    <div class="be-about-hero__actions">
                        <a href="#historia-origen" class="be-btn be-btn--primary">
                            <span>Conoce Nuestra Trayectoria</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="be-btn be-btn--secondary">
                            <span>Contactar al Ministerio</span>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- ====================================================================
             2. HISTORIA
             ==================================================================== -->
        <section class="be-about-origin-section" id="historia-origen">
            <div class="be-container">
                <div class="be-about-origin__grid">
                    
                    <!-- Historia de Ediciones Berea -->
                    <div class="be-about-origin__text">
                        <div class="be-badge be-badge--gold-light">Historia</div>
                        <h2 class="be-section-heading">Ediciones Berea</h2>
                        
                        <p class="be-lead-paragraph">
                            El 27 de abril de 1995, en la ciudad de Bogotá, Colombia, fue bautizado en Cristo el Arq. Héctor Gómez, quien a partir de 1996 fue llamado e incorporado al ministerio de las Iglesias de Cristo; allí conoció a su esposa Adriana Marcela Aranguren, con quien se casó en 1996. En diciembre de 1997 fueron enviados como misioneros a la ciudad de Quito, Ecuador, de donde regresaron en diciembre de 1998, para apoyar a la iglesia en la plantación de nuevas congregaciones y, en abril de 1999, Héctor Gómez fue nombrado Evangelista y Adriana Aranguren Líder del Ministerio de Mujeres (pastores).
                        </p>

                        <p>
                            En 2004, durante una crisis ministerial al interior de las Iglesias de Cristo a nivel global, el Espíritu Santo llevó a la familia Gómez Aranguren a atravesar por un desierto en el que los aguardaba un ministerio más allá de las fronteras denominacionales; en esa travesía, el Pr. Héctor Gómez tuvo un crucial encuentro con su entrañable amigo y compañero en la facultad de Arquitectura en la Universidad de los Andes (Bogotá, Colombia) y quien fuera uno de los más cercanos seguidores de su llamado ministerial, el también Arq. David Eduardo Serna (1965-2013), que en ese momento dirigía una prestigiosa empresa de publicaciones colombiana con amplio reconocimiento internacional. De su conversación, surgió la idea de apoyar un ministerio cristiano interdenominacional de publicaciones y enseñanza al servicio del cuerpo de Cristo: Ediciones Berea.
                        </p>

                        <p>
                            El mismo Espíritu abrió las puertas para establecer vínculos y alianzas con otros ministerios cristianos de América Latina, haciendo que muy pronto sus publicaciones y su actividad ministerial trascendieran del ámbito local colombiano a ser conocidas en toda América Latina (2006).
                        </p>

                        <p>
                            En 2015, la familia Gómez Aranguren fue invitada a unirse al equipo ministerial de una congregación en la Ciudad de México, adonde se trasladaron y establecieron la nueva sede de Ediciones Berea.
                        </p>

                        <p>
                            Hoy, Ediciones Berea tiene presencia en toda América y Europa a través de fuertes relaciones con ministerios, iglesias, seminarios e institutos bíblicos, distribuidores y libreros en cada país.
                        </p>
                    </div>

                    <!-- Imagen de la página institucional -->
                    <div class="be-about-origin__image-wrap">
                        <div class="be-image-frame">
                            <img src="<?php echo esc_url( $foto_predicando_biblia ); ?>" alt="Actividad de predicación" class="be-framed-photo" loading="lazy" />
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ====================================================================
             3. MISIÓN Y VISIÓN
             ==================================================================== -->
        <section class="be-mv-section be-breakout">
            <div class="be-container">
                <div class="be-mv-grid">
                    
                    <div class="be-mv-box be-mv-box--mision">
                        <span class="be-mv-tag">Ediciones Berea</span>
                        <h3>Misión</h3>
                        <p>
                            Servir y apoyar al crecimiento y la madurez del cuerpo de Cristo y sus miembros con publicaciones y recursos relevantes y sólidamente sustentados en la verdad de la Palabra de Dios.
                        </p>
                    </div>

                    <div class="be-mv-box be-mv-box--vision">
                        <span class="be-mv-tag">Ediciones Berea</span>
                        <h3>Visión</h3>
                        <p>
                            Ser un referente para los diversos ministerios cristianos en la producción y promoción de recursos confiables para el crecimiento y la madurez integral del cuerpo de Cristo y sus miembros.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- ====================================================================
             4. CONTACTO
             ==================================================================== -->
        <section class="be-about-cta-section">
            <div class="be-container">
                <div class="be-about-cta-card">
                    <div class="be-about-cta-content">
                        <div class="be-badge be-badge--gold-dark">Caminemos Juntos</div>
                        <h2>Conoce más sobre Ediciones Berea</h2>
                        <p>
                            Explora nuestras publicaciones o ponte en contacto con nosotros.
                        </p>
                        <div class="be-about-cta-actions">
                            <a href="<?php echo esc_url( home_url( '/tienda' ) ); ?>" class="be-btn be-btn--primary">
                                <span>Explorar Catálogo de Libros</span>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                            <a href="<?php echo esc_url( $whatsapp_url ); ?>" target="_blank" rel="noopener noreferrer" class="be-btn be-btn--whatsapp">
                                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.524 3.659 1.434 5.176L2 22l4.981-1.396A9.957 9.957 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18.062c-1.65 0-3.18-.492-4.469-1.336l-.321-.21-2.957.828.843-2.883-.228-.337A8.026 8.026 0 0 1 3.938 12c0-4.446 3.616-8.062 8.062-8.062 4.446 0 8.062 3.616 8.062 8.062 0 4.446-3.616 8.062-8.062 8.062z"></path></svg>
                                <span>Escribir por WhatsApp (+52 55 1080 3880)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
