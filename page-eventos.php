<?php
/**
 * Template Name: Eventos y Seminarios
 * Description: Página de exhibición para conferencias magnas (CIMA 2027, SED 2027), seminarios bíblicos, talleres matrimoniales y solicitud de eventos para iglesias.
 */

get_header(); 

$img_dir = get_stylesheet_directory_uri() . '/assets/img/';
$foto_atril_guayabera = $img_dir . 'IMG-20240407-WA0026.jpg';
$foto_predicando_rojo = $img_dir . 'IMG-20240407-WA0024.jpg';
$foto_biblia_abierta  = $img_dir . 'IMG-20240407-WA0034.jpg';
$whatsapp_url_eventos = 'https://wa.me/525510803880?text=Hola%2C%20quisiera%20solicitar%20informaci%C3%B3n%20para%20llevar%20un%20seminario%20o%20conferencia%20de%20Ediciones%20Berea%20a%20nuestra%20iglesia';
?>

<main id="primary" class="site-main page-eventos-editorial" role="main">
    <div class="be-eventos-wrap">

        <!-- ====================================================================
             1. HERO DE EVENTOS Y SEMINARIOS
             ==================================================================== -->
        <section class="be-events-hero be-breakout">
            <div class="be-container">
                <div class="be-events-hero__content">
                    <div class="be-badge be-badge--gold-dark">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        Formación Continua &bull; Conferencias y Seminarios Berea
                    </div>

                    <h1 class="be-events-hero__title">
                        Seminarios y Conferencias que <span class="be-hero__title-accent">forman, inspiran y renuevan</span>
                    </h1>

                    <p class="be-events-hero__lead">
                        Espacios intensivos diseñados para sumergirse en las Escrituras, fortalecer matrimonios, equipar a pastores y formar a las familias para los desafíos espirituales de nuestros tiempos.
                    </p>

                    <div class="be-events-hero__actions">
                        <a href="#conferencias-destacadas" class="be-btn be-btn--primary">
                            <span>Ver Próximas Conferencias</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                        <a href="#solicitar-evento" class="be-btn be-btn--secondary">
                            <span>Llevar un Seminario a tu Iglesia</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             2. CONFERENCIAS MAGNAS DESTACADAS (CIMA 2027 & SED 2027)
             ==================================================================== -->
        <section class="be-featured-events-section" id="conferencias-destacadas">
            <div class="be-container">
                <div class="be-section-header">
                    <div class="be-badge be-badge--gold-light">Grandes Encuentros</div>
                    <h2 class="be-section-heading">Nuestras Conferencias Cumbres 2027</h2>
                    <p class="be-section-subheading">
                        Eventos magnos que congregan a pastores, obreros y líderes de diversas naciones para días de profunda edificación bíblica.
                    </p>
                </div>

                <div class="be-featured-events-grid">

                    <!-- CONFERENCIA 1: CIMA 2027 -->
                    <article class="be-event-feature-card">
                        <div class="be-event-feature-card__img-wrap">
                            <img src="<?php echo esc_url( $foto_atril_guayabera ); ?>" alt="Conferencia CIMA 2027 — Ediciones Berea" class="be-event-photo" loading="lazy" />
                            <div class="be-event-badge-floating">
                                <span>Cumbre Anual 2027</span>
                            </div>
                        </div>
                        <div class="be-event-feature-card__body">
                            <div class="be-event-meta">
                                <span class="be-event-date">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                    Próximamente 2027
                                </span>
                                <span class="be-event-mode">Presencial &bull; Cupo Limitado</span>
                            </div>

                            <h3 class="be-event-title">CIMA 2027: Conferencia Internacional de Liderazgo y Ministerio</h3>
                            <p class="be-event-desc">
                                El encuentro cumbre para pastores, ancianos y líderes ministeriales. Tres días enfocados en la salud del alma del líder, el discipulado bíblico generacional y la proclamación valiente en tiempos de relativismo moral.
                            </p>

                            <div class="be-event-topics">
                                <div class="be-topic-pill">Liderazgo Bíblico</div>
                                <div class="be-topic-pill">Salud Ministerial</div>
                                <div class="be-topic-pill">Discipulado Exponencial</div>
                            </div>

                            <div class="be-event-card-actions">
                                <a href="<?php echo esc_url( $whatsapp_url_eventos ); ?>" target="_blank" rel="noopener noreferrer" class="be-btn be-btn--primary">
                                    <span>Solicitar Información y Registro</span>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- CONFERENCIA 2: SED 2027 -->
                    <article class="be-event-feature-card">
                        <div class="be-event-feature-card__img-wrap">
                            <img src="<?php echo esc_url( $foto_predicando_rojo ); ?>" alt="Seminario SED 2027 — Ediciones Berea" class="be-event-photo" loading="lazy" />
                            <div class="be-event-badge-floating">
                                <span>Intensivo Doctrinal 2027</span>
                            </div>
                        </div>
                        <div class="be-event-feature-card__body">
                            <div class="be-event-meta">
                                <span class="be-event-date">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                    Edición 2027
                                </span>
                                <span class="be-event-mode">Presencial &bull; Talleres Prácticos</span>
                            </div>

                            <h3 class="be-event-title">SED 2027: Seminario de Entrenamiento Doctrinal y Pastoral</h3>
                            <p class="be-event-desc">
                                Capacitación intensiva en teología bíblica aplicada, técnicas de predicación expositiva y herramientas de consejería pastoral. Diseñado para consolidar la doctrina en el equipo ministerial de tu congregación.
                            </p>

                            <div class="be-event-topics">
                                <div class="be-topic-pill">Teología Aplicada</div>
                                <div class="be-topic-pill">Predicación Expositiva</div>
                                <div class="be-topic-pill">Consejería Bíblica</div>
                            </div>

                            <div class="be-event-card-actions">
                                <a href="<?php echo esc_url( $whatsapp_url_eventos ); ?>" target="_blank" rel="noopener noreferrer" class="be-btn be-btn--primary">
                                    <span>Solicitar Información y Registro</span>
                                </a>
                            </div>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <!-- ====================================================================
             3. SEMINARIOS TEMÁTICOS DISPONIBLES PARA IGLESIAS
             ==================================================================== -->
        <section class="be-modular-seminars-section be-breakout">
            <div class="be-container">
                <div class="be-section-header">
                    <div class="be-badge be-badge--gold-dark">Catálogo de Capacitación</div>
                    <h2 class="be-section-heading be-section-heading--light">Seminarios Temáticos para Congregaciones</h2>
                    <p class="be-section-subheading be-section-subheading--light">
                        Módulos diseñados para impartirse en congresos locales, fines de semana de renovación o retiros de tu congregación.
                    </p>
                </div>

                <div class="be-seminars-grid">

                    <!-- SEMINARIO 1: Matrimonios -->
                    <div class="be-seminar-card">
                        <div class="be-seminar-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        </div>
                        <h3>Pacto Sagrado: Restauración Matrimonial</h3>
                        <p>
                            Un recorrido profundo por el diseño divino del matrimonio. Principios bíblicos para sanar heridas, resolver conflictos sin violencia verbal, avivar la intimidad y blindar el hogar frente a la ruptura.
                        </p>
                        <div class="be-seminar-details">
                            <span>⏱ Formato: Fin de semana (Viernes a Domingo)</span>
                            <span>📖 Incluye material impreso de trabajo Berea</span>
                        </div>
                    </div>

                    <!-- SEMINARIO 2: Discipulado -->
                    <div class="be-seminar-card">
                        <div class="be-seminar-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h3>Discipulado Bíblico Multiplicador</h3>
                        <p>
                            Estrategias prácticas para transformar una iglesia de simples asistentes dominicales en una comunidad de discípulos maduros que saben estudiar la Biblia, orar y formar a otros creyentes.
                        </p>
                        <div class="be-seminar-details">
                            <span>⏱ Formato: 2 días intensivos o 4 sesiones semanales</span>
                            <span>📖 Guía práctica del discipulador incluida</span>
                        </div>
                    </div>

                    <!-- SEMINARIO 3: Finanzas Bíblicas -->
                    <div class="be-seminar-card">
                        <div class="be-seminar-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path><line x1="12" y1="6" x2="12" y2="18"></line></svg>
                        </div>
                        <h3>Libertad Financiera y Mayordomía del Reino</h3>
                        <p>
                            Rompiendo las cadenas del endeudamiento y la mala administración. Principios bíblicos de presupuesto, ahorro, provisión e integridad comercial honrando a Dios con cada recurso.
                        </p>
                        <div class="be-seminar-details">
                            <span>⏱ Formato: Taller intensivo de 1 jornada</span>
                            <span>📖 Plantillas de presupuesto familiar bíblico</span>
                        </div>
                    </div>

                    <!-- SEMINARIO 4: Crianza Cristiana -->
                    <div class="be-seminar-card">
                        <div class="be-seminar-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        </div>
                        <h3>Crianza Bíblica en Tiempos de Confusión</h3>
                        <p>
                            Herramientas para padres y tutores: cómo ganar el corazón de los hijos para Cristo, establecer disciplina sin ira, manejar las redes sociales y transmitir una fe firme en la era digital.
                        </p>
                        <div class="be-seminar-details">
                            <span>⏱ Formato: Taller de 2 jornadas o campamento familiar</span>
                            <span>📖 Manual para padres de familia Berea</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ====================================================================
             4. QUÉ DISTINGUE LOS EVENTOS BEREA
             ==================================================================== -->
        <section class="be-experience-section">
            <div class="be-container">
                <div class="be-section-header">
                    <div class="be-badge be-badge--gold-light">Nuestra Metodología</div>
                    <h2 class="be-section-heading">Una Experiencia Formativa Completa</h2>
                </div>

                <div class="be-experience-grid">
                    <div class="be-exp-item">
                        <div class="be-exp-num">01</div>
                        <h4>Exposición Bíblica Rigurosa</h4>
                        <p>Mensajes respaldados en el texto bíblico original con claridad, reverencia y pertinencia actual.</p>
                    </div>

                    <div class="be-exp-item">
                        <div class="be-exp-num">02</div>
                        <h4>Material Editorial Incluido</h4>
                        <p>Cada asistente recibe guías de trabajo y libros editados por Berea para dar seguimiento en casa.</p>
                    </div>

                    <div class="be-exp-item">
                        <div class="be-exp-num">03</div>
                        <h4>Sesiones de Preguntas &amp; Respuestas</h4>
                        <p>Diálogo directo y abierto con los expositores para responder dudas teológicas y pastorales reales.</p>
                    </div>

                    <div class="be-exp-item">
                        <div class="be-exp-num">04</div>
                        <h4>Ministración y Oración Pastoral</h4>
                        <p>Tiempos significativos de intercesión por las familias, matrimonios y ministerios congregados.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             5. INVITA A EDICIONES BEREA A TU IGLESIA (CTA PRINCIPAL)
             ==================================================================== -->
        <section class="be-invite-section be-breakout" id="solicitar-evento">
            <div class="be-container">
                <div class="be-invite-card">
                    <div class="be-invite-content">
                        <div class="be-badge be-badge--gold-dark">Coordinación Ministerial</div>
                        <h2>¿Deseas llevar un seminario a tu congregación o ciudad?</h2>
                        <p>
                            Coordinamos fechas y detalles logísticos para acompañar a tu iglesia con seminarios de fin de semana, conferencias de liderazgo o talleres de matrimonio y finanzas.
                        </p>
                        <div class="be-invite-actions">
                            <a href="<?php echo esc_url( $whatsapp_url_eventos ); ?>" target="_blank" rel="noopener noreferrer" class="be-btn be-btn--whatsapp">
                                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.524 3.659 1.434 5.176L2 22l4.981-1.396A9.957 9.957 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18.062c-1.65 0-3.18-.492-4.469-1.336l-.321-.21-2.957.828.843-2.883-.228-.337A8.026 8.026 0 0 1 3.938 12c0-4.446 3.616-8.062 8.062-8.062 4.446 0 8.062 3.616 8.062 8.062 0 4.446-3.616 8.062-8.062 8.062z"></path></svg>
                                <span>Consultar Disponibilidad por WhatsApp (+52 55 1080 3880)</span>
                            </a>
                            <a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="be-btn be-btn--primary">
                                <span>Formulario de Contacto</span>
                            </a>
                        </div>
                        <p class="be-invite-footer-note">
                            Atendemos solicitudes para iglesias locales, concilios, institutos bíblicos y asociaciones pastorales.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
