<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/lib/css/bootstrap.min.css' ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

  <?php wp_head(); ?>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-header.css' ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-footer.css' ?>">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shoreditch' ); ?></a>

  <nav class="nav">
    <div class="nav-logo-container">
      <a href="http://camposycampos.mx">
        <img class="nav-logo" src="<?php echo get_template_directory_uri() . '/img/logos/logo-cyc-white.png' ?>" alt="Nav logo">
      </a>
    </div>
    <div data-attribute="" class="hamburger-visibility"  id="hamburgerMenu">
      <div class="nav-hamburguer" data-attribute="">
        <div class="hamburger-line-icon-container" data-attribute="">
          <div class="hamburger-line-icon" data-attribute=""></div>
          <div class="hamburger-line-icon" data-attribute=""></div>
          <div class="hamburger-line-icon" data-attribute=""></div>
        </div>
      </div>
      <span class="nav-hamburger-text helveneue-bold" style="color: white;" data-attribute="">Menu</span>
    </div>
    <div class="hamburger-menu-container" id="menuContainer" data-attribute="">
      <div class="hamburger-menu-header" data-attribute="">
        <div class="hamburger-logo-container" data-attribute="">
          <a href="http://camposycampos.mx" data-attribute="">
            <img class="hamburger-logo" src="<?php echo get_template_directory_uri() . '/img/logos/logo-cyc-white.png' ?>" data-attribute="" alt="Hamburger menu logo">
          </a>
        </div>
        <div class="hamburger-close-container" id="hideHamburger">
          <img class="hamburger-close" src="<?php echo get_template_directory_uri() . '/img/icons/icon-close.png' ?>" alt="Close hamburger menu">
          <span class="nav-hamburger-text helveneue-bold" style="color: white;" data-attribute="">Cerrar</span>
        </div>
      </div>
      <div class="hamburger-menu-body nunitosans-regular" data-attribute="">
        <div class="hamburger-text-container">
          <div data-attribute="">
            <a href="http://camposycampos.mx" data-attribute="">
              <span class="hamburger-text bebasneue-bold">inicio</span>
            </a>
          </div>
          <div data-attribute="">
            <a href="http://camposycampos.mx/servicios.html" data-attribute="">
              <span class="hamburger-text bebasneue-bold">servicios</span>
            </a>
          </div>
          <div data-attribute="">
            <a href="http://camposycampos.mx/compliance-penal.html" data-attribute="">
              <span class="hamburger-text bebasneue-bold">compliance</span>
            </a>
          </div>
          <div data-attribute="">
            <a href="http://camposycampos.mx/nosotros.html" data-attribute="">
              <span class="hamburger-text bebasneue-bold">nosotros</span>
            </a>
          </div>
          <div data-attribute="">
            <a href="" data-attribute="">
              <span class="hamburger-text bebasneue-bold hamburger-active">blog</span>
            </a>
          </div>
          <div data-attribute="">
            <a href="http://camposycampos.mx/contacto.html" data-attribute="">
              <span class="hamburger-text bebasneue-bold">contacto</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div id="content" class="site-content">
    <?php if (is_home()) : ?>
      <div class="site-content-title-wrapper">
      <h2 class="site-content-title bebasneue-bold">Blog</h2>
    </div>
    <?php endif; ?>
    <?php if ( get_header_image() ) : ?>
      <div class="header-image">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
        </a>
      </div><!-- .header-image -->
    <?php endif; // End header image check. ?>

<script type="text/javascript">
  function showMenu() {
    document.querySelector('#menuContainer').style.width = '100%';
    document.querySelector('#hamburgerMenu').style.display = 'flex';
  }

  function hideMenu() {
    document.querySelector('#menuContainer').style.width = '0%';
    document.querySelector('#hamburgerMenu').style.display = 'flex';
  }

  window.addEventListener('click', function(e) {
    if (!e.target.dataset.hasOwnProperty('attribute')) {
      hideMenu();
    }
  });

  /*Events of touchstart to mobile version*/

  var showHamburger = document.querySelector('#hamburgerMenu');

  showHamburger.addEventListener('touchstart', function(e) {
    e.preventDefault();
    showMenu();
  });

  var hideHamburger = document.querySelector('#hideHamburger');

  hideHamburger.addEventListener('touchstart', function(e) {
    e.preventDefault();
    hideMenu();
  });

  /* Events of click to desktop version*/

  showHamburger.addEventListener('click', function(e) {
    e.preventDefault();
    showMenu();
  });

  hideHamburger.addEventListener('click', function(e) {
    e.preventDefault();
    hideMenu();
  });
</script>
