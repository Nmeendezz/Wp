<?php get_header() ?>

<p>Esto es de <strong>page.php</strong></p>
<?php
while (have_posts()):
   the_post(); //Extrae el atributo del post actual
   ?>
   <h1><?php the_title(); ?></h1>
   <p><?php the_content(); ?> </p>
   <p><?php the_author(); ?></p>
   <p><?php the_time(); ?></p>
<?php endwhile; ?>

<?php get_footer() ?>