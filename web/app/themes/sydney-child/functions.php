<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles(){
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/*
 * Register Google Fonts
 */
function load_fonts() {
  wp_register_style( 'affinity-googleFonts', 'https://fonts.googleapis.com/css?family=Archivo+Black|Comfortaa|Shrikhand|Ubuntu+Condensed');
  wp_enqueue_style( 'affinity-googleFonts');
}
add_action( 'wp_print_styles', 'load_fonts');



/*
 * Requiring latest news widget file from childtheme
 */
require get_stylesheet_directory() . "/widgets/affinity-latest-news.php";

/*
 * Registering new latest news widget
 */
function sydney_child_register_new_latest_news_widget(){
  register_widget( 'Affinity_Latest_news' ); // Widget class name
}
add_action( 'widgets_init', 'sydney_child_register_new_latest_news_widget' );