<?php get_header() ?>
<?php while (have_posts()):the_post();?>
    <aside class="d-none d-md-flex flex-column position-fixed start-0 top-0 h-100 bg-black"
        style="width: 115px; z-index: 1050; padding-top: 180px;">
        <div class="d-flex flex-column align-items-center gap-3 w-100 px-2">
            <a href="#"
                class="btn btn-outline-warning bg-black border-2 d-flex flex-column align-items-center w-100 py-3">
                Facebook
            </a>

            <a href="#"
                class="btn btn-outline-warning bg-black border-2 d-flex flex-column align-items-center w-100 py-3">
                Twitter
            </a>

            <a href="#"
                class="btn btn-outline-warning bg-black border-2 d-flex flex-column align-items-center w-100 py-3">
                Instagram
            </a>
        </div>
    </aside>
    <div class="container-fluid bg-warning">
        <div class="row g-0">
            <div class="col-md-1 d-none d-md-block"></div>
            <div class="col-md-10 bg-dark text-light min-vh-100 px-4 py-5">

                <h1 class="text-warning text-center mb-5">
                    <?php the_title(); ?>
                </h1>

                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="card bg-black border-warning border-2 p-2">
                            <div class="card-body">
                                <h5 class="card-title text-warning mb-4">Menú</h5>
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'menu-principal',
                                    'container' => false,
                                    'menu_class' => 'navbar-nav w-100 menu-lateral-full',
                                    'fallback_cb' => '__return_false',
                                    'items_wrap' => '<ul id="%1$s" class="navbar-nav d-grid gap-2 %2$s">%3$s</ul>',
                                    'depth' => 2,
                                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                                ));
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 text-center">
                        <div class="img-animada-transformer">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('inicio-nosotros', ['class' => 'img-fluid rounded-3']); ?>
                            <?php endif; ?>
                        </div>
                        <div class="text-start text-light mt-5 mb-3">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 justify-content-center">

                </div>

            </div>

            <div class="col-md-1 d-none d-md-block"></div>
        </div>
    </div>
<?php endwhile; ?>

<?php get_footer() ?>
