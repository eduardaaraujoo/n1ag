<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container">

    <!-- Logo -->
    <a href="<?php echo home_url(); ?>">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo.png' ); ?>" alt="<?php bloginfo('name'); ?>">
    </a>

    <!-- Menu -->
    <?php
      wp_nav_menu([
        'theme_location' => 'menu-principal',
        'container'      => 'nav',
        'menu_class'     => 'menu-list'
      ]);
    ?>

    <!-- Botão -->
    <a href="#contato" class="btn">Fale Conosco</a>
  </div>
</header>


