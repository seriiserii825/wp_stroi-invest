<?php 

add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );
function theme_add_scripts() {
  // подключаем файл стилей темы
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');

  wp_enqueue_style( 'style-name', get_stylesheet_uri() );


  // подключаем js файл темы
  wp_enqueue_script( 'jquery-cdn', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', [], null, true);
  wp_enqueue_script( 'jquery-easy-scroll', get_template_directory_uri() .  '/assets/libs/jquery-easy-scroll/jquery.easeScroll.js', ['jquery-cdn'], null, true);
  wp_enqueue_script( 'jquery-slick', get_template_directory_uri() .  '/assets/libs/slick/slick.min.js', ['jquery-cdn'], null, true);
  wp_enqueue_script( 'main', get_template_directory_uri() .  '/assets/js/main.js', ['jquery-cdn'], null, true);
}

