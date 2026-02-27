<?php get_header() ?>
<div id="pagina-galeria-fullwidth">
    <?php while (have_posts()):
        the_post(); ?>
        <div class="container-fluid bg-warning text-light min-vh-100 align-items-center">
            <div class="container bg-dark min-vh-100 align-items-center">
                <div class="row g-2 align-items-center">
                    <div class="col-md-1 d-none d-md-block"></div>

                    <div class="col-md-10 text-white min-vh-100 px-4 py-5">

                        <h1 class="text-warning text-center fw-bold mb-5"><?php the_title(); ?></h1>

                        <?php
                        // Consulta para obtener posts con imagen destacada
                        $args = [
                            'posts_per_page' => 6,
                            'meta_key' => '_thumbnail_id',
                        ];
                        $galeria_query = new WP_Query($args);
                        $imagenes = [];

                        if ($galeria_query->have_posts()) {
                            while ($galeria_query->have_posts()) {
                                $galeria_query->the_post();
                                $imagenes[] = get_the_post_thumbnail_url(get_the_ID(), 'large');
                            }
                        }
                        ?>

                        <div class="row g-3 mb-3 p-3 rounded-4 align-items-center">
                            <div class="col-md-6">
                                <div class="mosaico-item shadow">
                                    <img src="<?php echo $imagenes[0]; ?>" class="img-galeria">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mosaico-item shadow">
                                    <img src="<?php echo $imagenes[1]; ?>" class="img-galeria">
                                </div>
                            </div>

                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-4">
                                <div class="mosaico-item shadow">
                                    <img src="<?php echo $imagenes[2]; ?>" class="img-galeria">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mosaico-item shadow">
                                    <img src="<?php echo $imagenes[3]; ?>" class="img-galeria">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mosaico-item shadow">
                                    <img src="<?php echo $imagenes[4]; ?>" class="img-galeria">
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 justify-content-center">
                            <div class="col-md-8">
                                <div class="mosaico-item shadow">
                                    <img src="<?php echo $imagenes[5]; ?>" class="img-galeria h-auto"
                                        style="max-height: 400px;">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-1 d-none d-md-block"></div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>
<?php get_footer() ?>