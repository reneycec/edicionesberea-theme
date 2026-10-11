<?php
/**
 * Template Name: Nosotros / Nuestra Historia
 * Description: Página institucional de alto impacto para la historia, visión, pilares y ministerio pastoral de Ediciones Berea.
 */

get_header(); 

$img_dir = get_stylesheet_directory_uri() . '/assets/img/';
$foto_predicador_formal = $img_dir . 'FotoHG.jpeg';
$foto_predicando_biblia = $img_dir . 'IMG-20240407-WA0034.jpg';
$foto_predicando_atril  = $img_dir . 'IMG-20240407-WA0026.jpg';
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
                        Nuestra Historia &bull; Sello Berea &bull; Proclamando la Verdad
                    </div>

                    <h1 class="be-about-hero__title">
                        Guiados por la pasión de proclamar a Cristo y <span class="be-hero__title-accent">equipar a su Iglesia</span>
                    </h1>

                    <p class="be-about-hero__lead">
                        Nacimos con una convicción innegociable: la sana doctrina bíblica transforma vidas, restaura hogares y enciende un discipulado fiel que trasciende generaciones. Conoce el corazón, la visión y la trayectoria detrás de Ediciones Berea.
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

                    <!-- Métricas de Impacto -->
                    <div class="be-about-hero__stats">
                        <div class="be-stat-card">
                            <span class="be-stat-card__number">20+</span>
                            <span class="be-stat-card__label">Años de Ministerio Pastoral</span>
                        </div>
                        <div class="be-stat-card">
                            <span class="be-stat-card__number">100%</span>
                            <span class="be-stat-card__label">Fidelidad a las Escrituras</span>
                        </div>
                        <div class="be-stat-card">
                            <span class="be-stat-card__number">50k+</span>
                            <span class="be-stat-card__label">Creyentes Formados</span>
                        </div>
                        <div class="be-stat-card">
                            <span class="be-stat-card__number">Hch 17:11</span>
                            <span class="be-stat-card__label">Inspiración Doctrinal</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             2. EL ORIGEN Y LA VISIÓN (HECHOS 17:11)
             ==================================================================== -->
        <section class="be-about-origin-section" id="historia-origen">
            <div class="be-container">
                <div class="be-about-origin__grid">
                    
                    <!-- Columna de Texto Editorial -->
                    <div class="be-about-origin__text">
                        <div class="be-badge be-badge--gold-light">Nuestra Identidad</div>
                        <h2 class="be-section-heading">El Espíritu de Berea: Examinar cada día las Escrituras</h2>
                        
                        <p class="be-lead-paragraph">
                            El nombre <strong>Berea</strong> encuentra su origen en el libro de los Hechos (17:11), donde se describe a los creyentes de aquella ciudad como personas nobles que <em>«recibieron la palabra con toda solicitud, escudriñando cada día las Escrituras para ver si estas cosas eran así»</em>.
                        </p>

                        <p>
                            Frente a un panorama contemporáneo saturado de enseñanzas superficiales y pragmatismo, Ediciones Berea nació como una respuesta de fe y devoción. Nuestro llamado es ofrecer literatura, comentarios teológicos, manuales de discipulado y herramientas formativas caracterizadas por el rigor exegético y el calor pastoral.
                        </p>

                        <p>
                            No publicamos para alimentar tendencias pasajeras; publicamos y enseñamos para edificar creyentes cimentados en la roca inmutable de la Palabra de Dios. Cada tratado, conferencia y libro pasa por el crisol de la fidelidad teológica, sirviendo a iglesias locales, seminarios y hogares de todo el mundo hispanohablante.
                        </p>

                        <div class="be-quote-box">
                            <svg class="be-quote-icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                            <blockquote>
                                «Un pueblo que ama la Biblia con profundidad es un pueblo protegido contra el engaño y capacitado para transformar su sociedad.»
                            </blockquote>
                        </div>
                    </div>

                    <!-- Columna Visual con Foto de Impacto -->
                    <div class="be-about-origin__image-wrap">
                        <div class="be-image-frame">
                            <img src="<?php echo esc_url( $foto_predicando_biblia ); ?>" alt="Predicación expositiva con la Biblia abierta — Ediciones Berea" class="be-framed-photo" loading="lazy" />
                            <div class="be-image-frame__caption">
                                <span class="be-caption-tag">Ministerio Vivo</span>
                                <p>Proclamación expositiva y reverente de la Palabra de Dios en congregaciones e institutos bíblicos.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ====================================================================
             3. PERFIL PASTORAL Y VOCACIÓN DE ENSEÑANZA
             ==================================================================== -->
        <section class="be-pastoral-section be-breakout">
            <div class="be-container">
                <div class="be-pastoral-card">
                    <div class="be-pastoral-card__grid">

                        <!-- Foto del Maestro / Predicador -->
                        <div class="be-pastoral-card__photo-col">
                            <div class="be-portrait-wrapper">
                                <img src="<?php echo esc_url( $foto_predicador_formal ); ?>" alt="Pastor y Maestro — Ediciones Berea" class="be-portrait-img" />
                                <div class="be-portrait-badge">
                                    <span>Ministerio Pastoral Berea</span>
                                </div>
                            </div>
                        </div>

                        <!-- Semblanza y Vocación -->
                        <div class="be-pastoral-card__info-col">
                            <div class="be-badge be-badge--gold-dark">Corazón Pastoral</div>
                            <h2 class="be-pastoral-title">Una Vida Dedicada a la Enseñanza y el Cuidado de las Almas</h2>

                            <p class="be-pastoral-lead">
                                La labor editorial de Berea no es un ejercicio académico distante; es la extensión tangible de una vocación pastoral y docente forjada durante décadas en el ministerio activo.
                            </p>

                            <p>
                                A través de seminarios intensivos, conferencias nacionales e internacionales y consejería conyugal, nuestro liderazgo ha caminado al lado de pastores, matrimonios y jóvenes, comprendiendo de primera mano las pruebas, inquietudes y batallas que enfrenta la iglesia en el siglo XXI.
                            </p>

                            <div class="be-pastoral-traits">
                                <div class="be-trait-item">
                                    <div class="be-trait-icon">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                    </div>
                                    <div>
                                        <h4>Exégesis y Teología Bíblica</h4>
                                        <p>Enseñanza expositiva versículo a versículo con aplicación práctica inmediata.</p>
                                    </div>
                                </div>

                                <div class="be-trait-item">
                                    <div class="be-trait-icon">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                    </div>
                                    <div>
                                        <h4>Consejería Matrimonial</h4>
                                        <p>Restauración conyugal fundamentada en el pacto de gracia y el perdón mutuo.</p>
                                    </div>
                                </div>

                                <div class="be-trait-item">
                                    <div class="be-trait-icon">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    </div>
                                    <div>
                                        <h4>Formación de Nuevos Líderes</h4>
                                        <p>Mentoreo directo de plantadores de iglesias, maestros y discipuladores locales.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             4. LOS 4 PILARES MINISTERIALES DE BEREA
             ==================================================================== -->
        <section class="be-pilares-about-section">
            <div class="be-container">
                <div class="be-section-header">
                    <div class="be-badge be-badge--gold-light">Nuestros Énfasis</div>
                    <h2 class="be-section-heading">Cuatro Pilares Doctrinales y Prácticos</h2>
                    <p class="be-section-subheading">
                        Todo lo que imprimimos, enseñamos y compartimos se articula en torno a cuatro pilares fundamentales para la salud de la Iglesia.
                    </p>
                </div>

                <div class="be-about-pilares-grid">

                    <!-- Pilar 1: Jesucristo y la Cruz -->
                    <article class="be-pilar-bento">
                        <div class="be-pilar-bento__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="2" x2="12" y2="22"></line><line x1="5" y1="8" x2="19" y2="8"></line></svg>
                        </div>
                        <h3>1. Cristocentrismo Total</h3>
                        <p>
                            Cristo no es un tema secundario; es el centro absoluto de toda la Escritura. Nuestra teología proclama la suficiencia de su sacrificio expiatorio, la victoria de su resurrección y el señorío presente sobre su Iglesia.
                        </p>
                    </article>

                    <!-- Pilar 2: Discipulado Fiel -->
                    <article class="be-pilar-bento">
                        <div class="be-pilar-bento__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                        </div>
                        <h3>2. Discipulado Multiplicador</h3>
                        <p>
                            Rechazamos la fe pasiva de meros espectadores. Fomentamos el modelo bíblico de discipulado personal donde creyentes maduros forman a otros creyentes hasta reproducir obreros aprobados.
                        </p>
                    </article>

                    <!-- Pilar 3: Matrimonio y Familia -->
                    <article class="be-pilar-bento">
                        <div class="be-pilar-bento__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        </div>
                        <h3>3. Familia y Crianza Bíblica</h3>
                        <p>
                            Creemos que la iglesia local es tan fuerte como las familias que la componen. Diseñamos manuales y conferencias dedicadas a fortalecer el pacto conyugal y capacitar a padres en la crianza en el temor de Dios.
                        </p>
                    </article>

                    <!-- Pilar 4: Finanzas y Mayordomía -->
                    <article class="be-pilar-bento">
                        <div class="be-pilar-bento__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path><line x1="12" y1="6" x2="12" y2="18"></line></svg>
                        </div>
                        <h3>4. Mayordomía del Reino</h3>
                        <p>
                            Enseñamos la libertad y responsabilidad financiera según las Escrituras: libres de la codicia del evangelio de la prosperidad y libres de las deudas asfixiantes, administrando con generosidad e integridad.
                        </p>
                    </article>

                </div>
            </div>
        </section>

        <!-- ====================================================================
             5. MISIÓN Y VISIÓN
             ==================================================================== -->
        <section class="be-mv-section be-breakout">
            <div class="be-container">
                <div class="be-mv-grid">
                    
                    <div class="be-mv-box be-mv-box--mision">
                        <span class="be-mv-tag">Nuestra Misión</span>
                        <h3>Equipar con Excelencia</h3>
                        <p>
                            Producir, traducir y distribuir recursos literarios de alta fidelidad doctrinal y brindar formación bíblica rigurosa para edificar a pastores, iglesias locales y creyentes hispanohablantes en su caminar con Jesucristo.
                        </p>
                    </div>

                    <div class="be-mv-box be-mv-box--vision">
                        <span class="be-mv-tag">Nuestra Visión</span>
                        <h3>Ver Vidas Cimentadas</h3>
                        <p>
                            Ser un referente de confianza editorial y ministerial reconocido por su fidelidad a las Escrituras, propiciando un renacer del amor por la sana doctrina, hogares restaurados y generaciones discipuladas.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- ====================================================================
             6. CTA FINAL DE COMUNIÓN Y CONTACTO
             ==================================================================== -->
        <section class="be-about-cta-section">
            <div class="be-container">
                <div class="be-about-cta-card">
                    <div class="be-about-cta-content">
                        <div class="be-badge be-badge--gold-dark">Caminemos Juntos</div>
                        <h2>¿Deseas conectar con nuestro ministerio?</h2>
                        <p>
                            Ya sea que busques orientación pastoral, desees conocer nuestro catálogo de libros o quieras llevar un seminario bíblico a tu congregación, estamos a tu servicio.
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
