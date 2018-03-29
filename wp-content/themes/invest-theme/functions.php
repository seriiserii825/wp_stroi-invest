<?php 

/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
function load_my_scripts() {
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('powerange', get_template_directory_uri() . '/assets/libs/powerange/dist/powerange.css');
  
  wp_enqueue_style( 'style', get_stylesheet_uri() );


  /**
   * register jquery
   */
  wp_deregister_script( 'jquery-core' );

  wp_register_script( 'jquery-my', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', [], null, true);
  wp_enqueue_script( 'jquery-my' );


  wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/assets/libs/jquery-migrate/jquery-migrate.min.js', ['jquery-my'], null, true);

  wp_enqueue_script('jquery-ease-scroll', get_template_directory_uri() . '/assets/libs/jquery-easy-scroll/jquery.easeScroll.js', ['jquery-my'], null, true);

  wp_enqueue_script('jquery-slick', get_template_directory_uri() . '/assets/libs/slick/slick.min.js', ['jquery-my'], null, true);

  wp_enqueue_script('jquery-powerange', get_template_directory_uri() . '/assets/libs/powerange/dist/powerange.min.js', ['jquery-my'], null, true);

  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', ['jquery-my'], null, true);
  
}
add_action( 'wp_enqueue_scripts', 'load_my_scripts' );

/**
 * custom-logo
 */
add_theme_support( 'custom-logo' );

/*register menu
=======================================*/ 
register_nav_menu( 'header-menu', 'Меню в шапке' );

/*register categories in sidebar
=======================================*/ 
/**
 * Creates a sidebar
 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
 */
$args = array(
  'name'          => __( 'Sidebar-categories', 'text-domain' ),
  'id'            => 'sidebar-categories-id',
  'description'   => 'Категории в сайдбаре',
  'class'         => '',
  'before_widget' => '',
  'after_widget'  => '',
  'before_title'  => '',
  'after_title'   => '',
);

register_sidebar( $args );
