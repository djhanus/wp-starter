<?php

// ENQUEUE GLOBAL SCRIPTS
function enqueue_parent_styles() {
  wp_register_style('starter-style',  get_stylesheet_directory_uri() .'/style.css', array(), null, 'all');
  wp_enqueue_script('jquery-script', 'https://code.jquery.com/jquery-3.3.1.min.js', false, null, true);
  wp_enqueue_script('bootstrap-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', false, null, true);
  wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css');
  wp_enqueue_script('burger-script',  get_stylesheet_directory_uri() .'/js/burger.js', false, null, true);
}


   



add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

// CUSTOM MENUS
function register_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __('Primary'),
      'footer-menu' => __('Footer Menu')
    )
  );
}
add_action('init', 'register_menus');

// CUSTOM POST TYPE
function create_posttypes() {
  register_post_type( 'Events',
      array(
          'labels' => array(
              'name' => __( 'Events' ),
              'singular_name' => __( 'Event' )
          ),
          'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'events'),
      )
  );
add_action( 'init', 'create_posttypes' );

// ACF OPTIONS PANEL
if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Theme Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
}

?>