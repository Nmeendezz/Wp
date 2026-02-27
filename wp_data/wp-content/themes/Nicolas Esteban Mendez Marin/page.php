<?php get_header() ?>
<?php
while (have_posts()):
    the_post(); //Extrae el atributo del post actual
    ?>
    <div class="container">
        <div class="row bg-dark justify-content-center">
            <h1 class="text-warning"><?php the_title(); ?></h1>
            <div class="col-6-lg">
                <div class="card bg-black border-warning" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Menu</h5>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-principal',
                            'container' => false,
                            'menu_class' => 'navbar-nav w-100',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav w-100 mb-2 mb-lg-0 d-grid gap-2 %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                        ?>
                    </div>
                </div>
                <p><?php the_content(); ?> </p>
                <p><?php the_author(); ?></p>
                <p><?php the_time(); ?></p>
            </div>
        </div>
    </div>

<?php endwhile; ?>

<?php get_footer() ?>