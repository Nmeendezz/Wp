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
        <div class="contenedor">
            <div class="barra-navegacion">
                <!-- Ruta con funcionalidad de WP para hacer el codigo portable -->
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.webp" alt="Logo Site">
                </div>
                <?php
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($args);
                ?>
            </div>
        </div>
    </header>
</body>

</html>