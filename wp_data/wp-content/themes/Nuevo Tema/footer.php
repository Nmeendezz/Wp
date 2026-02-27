<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <footer class="py-3 my-4">
        <div class="container">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'container' => false,
                'menu_class' => '',
                'items_wrap' => '<ul id="%1$s" class="nav justify-content-center border-bottom pb-3 mb-3 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
            <p class="text-center text-body-secondary">&copy; 2025 Company, Inc</p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>