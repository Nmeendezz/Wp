<h1>Page con id</h1>

<?php while (have_posts()):
    the_post(); ?>
    <h1 class="text-center texto-primario"><?php the_title(); ?></h1>


    <?php the_content(); ?>

    Escrito por: <?php the_author() ?>
    Escrito Fecha: <?php the_date() ?>
<?php endwhile; ?>