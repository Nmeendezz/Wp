<?php
// Menu de navegacion
function mitemplate_menus() {
   register_nav_menus(array(
       'menu-principal' => __( 'Menu Principal', 'mitema'), //text domine 
       'menu-principal2' => __( 'Menu Principal2', 'mitema')
   ));
}
add_action( 'init', 'mitemplate_menus' ); //hooks de wp

function mitemplate_scripts_styles() {
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    wp_enqueue_style('mygooglefont', 'https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap', array(), '1.0.0');


    // Hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'mygooglefont'), '1.0.0'); //(nombre, ruta, dependencias, version)
}
add_action( 'wp_enqueue_scripts', 'mitemplate_scripts_styles' );
