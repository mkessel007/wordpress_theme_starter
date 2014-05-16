<?php 
require_once locate_template('/lib/jquery.php'); 
require_once locate_template('/lib/excerpt.php'); 
require_once locate_template('/lib/infinite-scroll.php'); 
require_once locate_template('/lib/icons.php');
//require_once locate_template('/lib/woocommerce.php'); 
require_once locate_template('/lib/images.php'); 



if ( function_exists( 'add_theme_support' ) ):
  add_theme_support( 'menus' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
endif;

function nbbx_scripts() {
    wp_enqueue_style( 'vitruvi', get_template_directory_uri() . '/css/dev/style.css' );
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/bower_components/modernizr/modernizr.js', false, null, false);
    wp_enqueue_script('angularjs', '//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js', '', '', true );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/scripts/js/dev/app.concat.js', '', '', true );
}
add_action( 'wp_enqueue_scripts', 'nbbx_scripts', 20 );



if ( function_exists('register_sidebars') ):
  register_sidebar(array(
    'name'=>'Sidebar',
    'before_title'=>'<h4>',
    'after_title'=>'</h4>'
  ));
endif;


if ( function_exists('register_nav_menus') ):
  register_nav_menus( array(
    'primary' => 'Primary',
    'secondary' => 'Secondary'
  ) );
endif;







