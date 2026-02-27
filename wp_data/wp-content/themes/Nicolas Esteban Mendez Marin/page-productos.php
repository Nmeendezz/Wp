<?php get_header(); ?>
<?php while (have_posts()):
    the_post(); ?>
    <aside class="d-none d-md-flex flex-column position-fixed start-0 top-0 h-100 bg-black"
        style="width: 115px; z-index: 1050; padding-top: 180px;">
        <div class="d-flex flex-column align-items-center gap-3 w-100 px-2">
            <a href="#" class="btn btn-outline-warning bg-black border-2 d-flex flex-column align-items-center w-100 py-3">
                Facebook
            </a>

            <a href="#" class="btn btn-outline-warning bg-black border-2 d-flex flex-column align-items-center w-100 py-3">
                Twitter
            </a>

            <a href="#" class="btn btn-outline-warning bg-black border-2 d-flex flex-column align-items-center w-100 py-3">
                Instagram
            </a>
        </div>
    </aside>

    <div class="container-fluid bg-warning">
        <div class="row g-2">
            <div class="col-md-1 d-none d-md-block"></div>

            <div class="col-md-10 bg-dark text-light min-vh-100 px-4 py-5">
                <h1 class="text-warning text-center mb-5"><?php the_title(); ?></h1>

                <div class="row g-4">
                    <?php
                    $args = array(
                        'posts_per_page' => 12,
                        'post_type' => 'post'
                    );
                    $productos_query = new WP_Query($args);

                    $cont = 0;

                    if ($productos_query->have_posts()):
                        while ($productos_query->have_posts()):
                            $productos_query->the_post();

                            if ($cont % 2 == 0): ?>
                                <div class="col-md-4">
                                    <div class="card bg-warning h-100 border-0 shadow-sm card-vacia-decorativa">
                                    </div>
                                </div>
                                <?php
                                $cont++;
                            endif; ?>

                            <div class="col-md-4">
                                <div class="card bg-dark text-light h-100 card-producto">
                                    <div class="contenedor-img-card">
                                        <?php if (has_post_thumbnail()): ?>
                                            <img src="<?php the_post_thumbnail_url('large'); ?>" class="card-img-top img-producto">
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-body d-flex flex-column text-light">
                                        <h5 class="card-title mb-2"><?php the_title(); ?></h5>
                                        <div class="card-text mb-3">
                                            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                        </div>
                                        <a href="<?php the_permalink(); ?>"
                                            class="btn btn-warning mt-auto">Leer más</a>
                                    </div>
                                </div>
                            </div>

                            <?php
                            $cont++;
                            if ($cont == 3) {
                                $cont = 0;
                            }

                        endwhile;
                    endif; ?>
                </div>

            </div>
        </div>
    </div>
    <?php get_footer(); ?>
<?php endwhile; ?>

<?php get_footer() ?>