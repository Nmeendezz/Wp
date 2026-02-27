<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="site-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-black py-3">
            <div class="container-fluid">
                <a class="navbar-brand text-warning" href="<?php echo esc_url(home_url('/')); ?>">
                    3ra evaluacion 2026
                    <img src="<?php echo get_template_directory_uri(); ?>/img/foto1.png" alt="logo" class="ms-2 rounded-2" style="height: 50px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-principal',
                        'container' => false,
                        'menu_class' => 'navbar-nav mb-2 mb-lg-0',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav mb-2 mb-lg-0 %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                    ?>
                </div>

            </div>
        </nav>
    </header>

</body>

</html>