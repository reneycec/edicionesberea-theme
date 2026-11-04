<?php
// Consulta los últimos 8 libros de WooCommerce
$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 8,
    'post_status'    => 'publish',
);
$loop = new WP_Query( $args );
?>

<section class="berea-carrusel-seccion">
    <div class="berea-container">
        <div class="seccion-header">
            <h2>Novedades y Obras Destacadas</h2>
            <p>Edificación bíblica, teología y fundamentos para la familia</p>
        </div>

        <div class="swiper berea-slider">
            <div class="swiper-wrapper">
                <?php while ( $loop->have_posts() ) : $loop->the_post();
                    $product = wc_get_product( get_the_ID() );
                    if ( ! $product ) {
                        continue;
                    }
                    $author = '';
                    foreach ( $product->get_attributes() as $attribute ) {
                        if ( false !== stripos( wc_attribute_label( $attribute->get_name(), $product ), 'autor' ) ) {
                            $author = trim( $product->get_attribute( $attribute->get_name() ) );
                            break;
                        }
                    }
                ?>
                    <div class="swiper-slide card-libro">
                        <div class="libro-portada">
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'woocommerce_thumbnail' ); ?>
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="libro-info">
                            <h3 class="libro-titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php if ( '' !== $author ) : ?>
                                <p class="libro-autor">
                                    <span><?php esc_html_e( 'Autor', 'berea' ); ?></span>
                                    <strong><?php echo esc_html( $author ); ?></strong>
                                </p>
                            <?php endif; ?>
                            <span class="libro-precio"><?php echo $product->get_price_html(); ?></span>
                            <a href="<?php echo esc_url( $product->add_to_cart_url() ); ?>" class="btn-comprar button">
                                Añadir al carrito
                            </a>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <!-- Navegación -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>