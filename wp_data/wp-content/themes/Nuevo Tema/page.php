<?php get_header() ?>
<?php
while (have_posts()):
   the_post(); //Extrae el atributo del post actual
   ?>
   <div class="container">
      <div class="row">
         <div class="col">
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?> </p>
            <p><?php the_author(); ?></p>
            <p><?php the_time(); ?></p>
         </div>
      </div>
   </div>

<?php endwhile; ?>

<?php get_footer() ?>