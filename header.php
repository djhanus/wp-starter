<!DOCTYPE html>
<html class="no-js no-svg">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css" media="screen" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>
  <header>

    <!-- HAMBURGER BUTTON -->
    <div class="hamburger-wrapper">
      <div class="hamburger-menu"></div>
    </div>

    <!-- MOBILE MENU -->
    <div class="mobile-menu-container">
      <div class="mobile-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
      </div>

      <div class="social-icons">
        <a href="#" alt="Facebook" title="Facebook" target="_blank">
          <i class="fab fa-facebook-square"></i>
        </a>

        <a href="#" alt="Twitter" title="Twitter" target="_blank">
          <i class="fab fa-twitter-square"></i>
        </a>

        <a href="#" alt="Instagram" title="Twitter" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
    </div>

    <!-- MAIN MENU -->
    <div class="main-menu-container">
      <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg"></a>
        <div class="main-menu">
          <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
        </div>
    </div>

  </header>
<main>