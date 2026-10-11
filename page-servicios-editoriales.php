<?php
/**
 * Template Name: Servicios Editoriales
 * Description: Página de alto impacto para servicios editoriales, traducción, maquetación e imprenta.
 */

get_header(); ?>

<main id="primary" class="site-main servicios-editorial-page" role="main">
    <div class="servicios-editoriales-wrap">

        <!-- ====================================================================
             1. HERO EDITORIAL INMERSIVO
             ==================================================================== -->
        <section class="be-hero be-breakout">
            <div class="be-container">
                <div class="be-hero__content">
                    <div class="be-badge be-badge--gold-dark">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        Sello Editorial Berea &bull; Excelencia y Rigor Doctrinal
                    </div>

                    <h1 class="be-hero__title">
                        Transformamos tu manuscrito en una <span class="be-hero__title-accent">obra editorial de trascendencia</span>
                    </h1>

                    <p class="be-hero__lead">
                        Acompañamos a autores, pastores y ministerios en cada etapa del camino de publicación: desde la traducción teológica y corrección de estilo minuciosa, hasta el diseño tipográfico de alta gama, impresión física prémium y distribución nacional.
                    </p>

                    <div class="be-hero__actions">
                        <a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="be-btn be-btn--primary">
                            <span>Solicitar Asesoría y Cotización</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>

                        <a href="#proceso-editorial" class="be-btn be-btn--secondary">
                            <span>Conoce el Proceso Editorial</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                    </div>

                    <!-- Indicadores de confianza / Stats -->
                    <div class="be-hero__stats">
                        <div class="be-stat-item">
                            <span class="be-stat-number">100%</span>
                            <span class="be-stat-label">Rigor Teológico</span>
                        </div>
                        <div class="be-stat-item">
                            <span class="be-stat-number">InDesign</span>
                            <span class="be-stat-label">Maquetación Prémium</span>
                        </div>
                        <div class="be-stat-item">
                            <span class="be-stat-number">Tirajes</span>
                            <span class="be-stat-label">Bajo Demanda y Masivos</span>
                        </div>
                        <div class="be-stat-item">
                            <span class="be-stat-number">ISBN</span>
                            <span class="be-stat-label">Registro &amp; Distribución</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             2. PILARES DE CONFIANZA EDITORIAL
             ==================================================================== -->
        <section class="be-pilares-section be-breakout">
            <div class="be-container">
                <div class="be-pilares-grid">
                    <article class="be-pilar-card">
                        <div class="be-pilar-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                        </div>
                        <h3>Fidelidad Doctrinal</h3>
                        <p>Cuidado minucioso en la precisión exegética, citas bíblicas y coherencia teológica de cada párrafo.</p>
                    </article>

                    <article class="be-pilar-card">
                        <div class="be-pilar-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        </div>
                        <h3>Cánones Tipográficos</h3>
                        <p>Diseño y composición en proporciones áureas que garantizan una lectura sosegada, elegante y descansada.</p>
                    </article>

                    <article class="be-pilar-card">
                        <div class="be-pilar-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                        </div>
                        <h3>Calidad de Imprenta</h3>
                        <p>Papeles ahuesados de óptima textura, encuadernación rústica o pasta dura con acabados en barniz y foil.</p>
                    </article>

                    <article class="be-pilar-card">
                        <div class="be-pilar-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                        </div>
                        <h3>100% Tus Derechos</h3>
                        <p>Mantienes la propiedad intelectual y derechos de tu obra en todo momento. Trabajamos a tu servicio.</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             3. CATÁLOGO DETALLADO DE SERVICIOS (GRID BENTO)
             ==================================================================== -->
        <section class="be-servicios-section" id="servicios-catalogo">
            <div class="be-container">
                <div class="be-section-header">
                    <div class="be-badge be-badge--gold-light">Soluciones Integrales</div>
                    <h2 class="be-section-title">Nuestros Servicios Editoriales Especializados</h2>
                    <p class="be-section-subtitle">
                        Diseñamos soluciones modulares adaptadas a la etapa en que se encuentre tu proyecto, garantizando el más alto estándar de la industria.
                    </p>
                </div>

                <div class="be-servicios-grid">

                    <!-- SERVICIO 1: Traducción Teológica -->
                    <article class="be-card-servicio be-card-servicio--span-6">
                        <div class="be-card-header">
                            <div class="be-card-icon-wrap">
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                            </div>
                            <span class="be-card-tag">Especialidad Berea</span>
                        </div>
                        <h3>Traducción Teológica Rigurosa</h3>
                        <p>
                            Traducción experta del inglés u otros idiomas al español de tratados teológicos, comentarios exegéticos, biografías y devocionales. Preservamos la pureza doctrinal, la precisión de términos técnicos y la fluidez del lenguaje contemporáneo.
                        </p>
                        <div class="be-card-features-title">Qué incluye:</div>
                        <ul class="be-card-features">
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Cotejo exegético y apego riguroso al texto doctrinal.</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Glosario de términos teológicos estandarizado.</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Doble lectura por traductores especializados en literatura cristiana.</span>
                            </li>
                        </ul>
                    </article>

                    <!-- SERVICIO 2: Corrección de Estilo -->
                    <article class="be-card-servicio be-card-servicio--span-6">
                        <div class="be-card-header">
                            <div class="be-card-icon-wrap">
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                            </div>
                            <span class="be-card-tag">Cuidado Textual</span>
                        </div>
                        <h3>Corrección de Estilo y Cuidado Ortotipográfico</h3>
                        <p>
                            Revisión profunda de ortografía, semántica, concordancia y sintaxis. Pulimos el texto para asegurar una lectura limpia, fluida y persuasiva, respetando siempre la voz particular y la unción del autor.
                        </p>
                        <div class="be-card-features-title">Qué incluye:</div>
                        <ul class="be-card-features">
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Verificación minuciosa de citas bíblicas y referencias de fuentes.</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Eliminación de redundancias, errores ortotipográficos y discordancias.</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Entrega con control de cambios transparente para tu aprobación.</span>
                            </li>
                        </ul>
                    </article>

                    <!-- SERVICIO 3: Diseño y Maquetación -->
                    <article class="be-card-servicio be-card-servicio--span-4">
                        <div class="be-card-header">
                            <div class="be-card-icon-wrap">
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                            </div>
                            <span class="be-card-tag">Alto Impacto</span>
                        </div>
                        <h3>Diseño y Maquetación Interior</h3>
                        <p>
                            Portadas que destacan inmediatamente en librerías y formación tipográfica interior profesional bajo estándares de alta editorial.
                        </p>
                        <div class="be-card-features-title">Qué incluye:</div>
                        <ul class="be-card-features">
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Diseño integral de portada, lomo y contraportada.</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Maquetación profesional en Adobe InDesign.</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Adaptación a e-Book (ePub y Kindle).</span>
                            </li>
                        </ul>
                    </article>

                    <!-- SERVICIO 4: Impresión Editorial -->
                    <article class="be-card-servicio be-card-servicio--span-4">
                        <div class="be-card-header">
                            <div class="be-card-icon-wrap">
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                            </div>
                            <span class="be-card-tag">Producción</span>
                        </div>
                        <h3>Impresión y Acabados de Lujo</h3>
                        <p>
                            Gestión integral de imprenta. Asesoría en selección de papel que no fatiga la vista, encuadernación cosida y acabados especiales.
                        </p>
                        <div class="be-card-features-title">Qué incluye:</div>
                        <ul class="be-card-features">
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Papel ahuesado de alta opacidad y textura cálida.</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Pasta dura, rústica con solapas y barniz a registro.</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Pruebas de galera y control de color antes del tiraje.</span>
                            </li>
                        </ul>
                    </article>

                    <!-- SERVICIO 5: Distribución Nacional -->
                    <article class="be-card-servicio be-card-servicio--span-4">
                        <div class="be-card-header">
                            <div class="be-card-icon-wrap">
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                            </div>
                            <span class="be-card-tag">Comercialización</span>
                        </div>
                        <h3>ISBN y Distribución Nacional</h3>
                        <p>
                            Formalización legal de tu libro y conexión logística con puntos de venta y paqueterías con seguimiento a cualquier punto de la república.
                        </p>
                        <div class="be-card-features-title">Qué incluye:</div>
                        <ul class="be-card-features">
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Tramitación legal de ISBN y código de barras.</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Oportunidad de presencia en el catálogo Berea.</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Envíos asegurados y logística a eventos y librerías.</span>
                            </li>
                        </ul>
                    </article>

                </div>
            </div>
        </section>

        <!-- ====================================================================
             4. EL CAMINO EDITORIAL (TIMELINE PASO A PASO)
             ==================================================================== -->
        <section class="be-proceso-section be-breakout" id="proceso-editorial">
            <div class="be-container">
                <div class="be-section-header">
                    <div class="be-badge be-badge--gold-dark">Metodología Clara</div>
                    <h2 class="be-section-title be-section-title--light">El Camino de Publicación Paso a Paso</h2>
                    <p class="be-section-subtitle be-section-subtitle--light">
                        Un proceso transparente y colaborativo diseñado para que disfrutes ver nacer tu libro con total tranquilidad.
                    </p>
                </div>

                <div class="be-proceso-grid">
                    <div class="be-proceso-step">
                        <div class="be-proceso-number">01</div>
                        <h3>Diagnóstico y Plan</h3>
                        <p>Evaluamos tu manuscrito o idea, determinamos el alcance y te brindamos una propuesta transparente y ajustada a tu visión.</p>
                    </div>

                    <div class="be-proceso-step">
                        <div class="be-proceso-number">02</div>
                        <h3>Cuidado Editorial</h3>
                        <p>Nuestros editores y traductores realizan la corrección o traducción, cotejando cada detalle en diálogo continuo contigo.</p>
                    </div>

                    <div class="be-proceso-step">
                        <div class="be-proceso-number">03</div>
                        <h3>Diseño y Formación</h3>
                        <p>Diseñamos la portada y maquetamos las páginas interiores hasta lograr tu aprobación final en pruebas de galera.</p>
                    </div>

                    <div class="be-proceso-step">
                        <div class="be-proceso-number">04</div>
                        <h3>Producción y Entrega</h3>
                        <p>Impresión con acabados de excelencia, tramitación de ISBN y entrega a tus manos o distribución a lectores.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             5. PREGUNTAS FRECUENTES (FAQ ACORDEÓN)
             ==================================================================== -->
        <section class="be-faq-section be-breakout">
            <div class="be-container">
                <div class="be-section-header">
                    <div class="be-badge be-badge--gold-light">Respuestas Claras</div>
                    <h2 class="be-section-title">Preguntas Frecuentes de Autores</h2>
                    <p class="be-section-subtitle">
                        Todo lo que necesitas saber antes de iniciar tu proyecto editorial con nosotros.
                    </p>
                </div>

                <div class="be-faq-list">
                    <details class="be-faq-item" open>
                        <summary class="be-faq-question">
                            <span>¿Quién conserva los derechos de autor de mi libro?</span>
                            <div class="be-faq-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </div>
                        </summary>
                        <div class="be-faq-answer">
                            Tú conservas el 100% de la propiedad intelectual y los derechos de autor de tu obra. En Berea brindamos servicios profesionales de producción y cuidado editorial como tus aliados técnicos; no nos adueñamos de tu contenido.
                        </div>
                    </details>

                    <details class="be-faq-item">
                        <summary class="be-faq-question">
                            <span>¿Puedo contratar solo uno de los servicios (por ejemplo, solo corrección o maquetación)?</span>
                            <div class="be-faq-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </div>
                        </summary>
                        <div class="be-faq-answer">
                            Sí, por supuesto. Nuestros servicios son totalmente modulares. Puedes contratarnos para un paquete integral "llave en mano" o únicamente para la fase específica que tu manuscrito requiera.
                        </div>
                    </details>

                    <details class="be-faq-item">
                        <summary class="be-faq-question">
                            <span>¿Cuál es el tiraje mínimo que puedo imprimir?</span>
                            <div class="be-faq-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </div>
                        </summary>
                        <div class="be-faq-answer">
                            Nos adaptamos a las necesidades de cada autor y ministerio. Ofrecemos tirajes cortos bajo demanda (desde 50 o 100 ejemplares) ideales para conferencias o lanzamientos iniciales, así como tirajes masivos en offset de miles de copias con costos unitarios altamente competitivos.
                        </div>
                    </details>

                    <details class="be-faq-item">
                        <summary class="be-faq-question">
                            <span>¿Cuánto tiempo toma publicar un libro completo?</span>
                            <div class="be-faq-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </div>
                        </summary>
                        <div class="be-faq-answer">
                            El tiempo promedio varía según la extensión y el estado del manuscrito, situándose comúnmente entre 4 y 8 semanas para un proyecto completo de corrección, maquetación, pruebas e impresión física.
                        </div>
                    </details>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             6. BANNER DE CONVERSIÓN FINAL (CTA DE ALTO IMPACTO)
             ==================================================================== -->
        <section class="be-cta-section" id="cotizar-seccion">
            <div class="be-container">
                <div class="be-cta-card">
                    <div class="be-cta-content">
                        <div class="be-badge be-badge--gold-dark">Comienza Hoy Mismo</div>
                        <h2>¿Tienes un proyecto editorial en mente?</h2>
                        <p>
                            Conversemos sobre tu visión. Te asesoramos sin compromiso para definir el plan de publicación que mejor honre el mensaje de tu libro.
                        </p>
                        <div class="be-cta-actions">
                            <a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="be-btn be-btn--primary">
                                <span>Solicitar Cotización Editorial</span>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                            <a href="https://wa.me/?text=Hola%2C%20quisiera%20recibir%20informaci%C3%B3n%20sobre%20los%20servicios%20editoriales%20de%20Berea" target="_blank" rel="noopener noreferrer" class="be-btn be-btn--whatsapp">
                                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.301-.15-1.781-.879-2.056-.98-.276-.1-.477-.15-.678.15-.2.301-.778.98-.954 1.18-.175.201-.351.226-.652.075-.301-.15-1.272-.469-2.423-1.496-.895-.798-1.5-1.784-1.675-2.085-.176-.301-.019-.464.132-.614.136-.135.301-.351.452-.527.15-.176.2-.301.301-.502.101-.201.05-.377-.025-.527-.075-.151-.678-1.634-.929-2.237-.245-.588-.493-.508-.678-.518-.175-.01-.376-.01-.577-.01s-.527.075-.803.377c-.276.301-1.054 1.03-1.054 2.511 0 1.482 1.079 2.913 1.23 3.114.15.201 2.124 3.243 5.146 4.548.719.311 1.281.497 1.719.636.723.23 1.381.197 1.901.12.579-.087 1.781-.728 2.032-1.431.251-.703.251-1.306.176-1.431-.076-.126-.277-.202-.578-.352z"></path><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.524 3.659 1.434 5.176L2 22l4.981-1.396A9.957 9.957 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18.062c-1.65 0-3.18-.492-4.469-1.336l-.321-.21-2.957.828.843-2.883-.228-.337A8.026 8.026 0 0 1 3.938 12c0-4.446 3.616-8.062 8.062-8.062 4.446 0 8.062 3.616 8.062 8.062 0 4.446-3.616 8.062-8.062 8.062z"></path></svg>
                                <span>Consultar por WhatsApp</span>
                            </a>
                        </div>
                        <p class="be-cta-footer-note">
                            Atención personalizada para pastores, autores independientes, iglesias e instituciones teológicas.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>