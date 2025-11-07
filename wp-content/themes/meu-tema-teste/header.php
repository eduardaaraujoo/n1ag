<?php
/**
 * Cabeçalho do tema
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<header class="site-header">
  <div class="container header-inner">

    <!-- Logo -->
    <a class="site-logo" href="<?php echo esc_url( home_url('/') ); ?>">
      <?php
      if ( function_exists('the_custom_logo') && has_custom_logo() ) {
        the_custom_logo();
      } else {
        // usa seu logo.png do tema
        echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/img/logo.png' ) . '" alt="' . esc_attr( get_bloginfo('name') ) . '">';
      }
      ?>
    </a>

    <!-- Botão hambúrguer (mobile) -->
    <button class="nav-toggle" aria-controls="site-nav" aria-expanded="false" aria-label="<?php esc_attr_e('Abrir menu','meu-tema-teste'); ?>">
      <span class="bar"></span><span class="bar"></span><span class="bar"></span>
    </button>

    <!-- Menu principal -->
    <?php
    wp_nav_menu([
      'theme_location'  => 'menu-principal',
      'container'       => 'nav',
      'container_class' => 'site-nav',
      'container_id'    => 'site-nav',
      'menu_class'      => 'menu',
      'fallback_cb'     => '__return_empty_string',
    ]);
    ?>

    <!-- Botão CTA -->
    <a class="btn btn-cta" href="#contato"><?php echo esc_html__('Fale Conosco','meu-tema-teste'); ?></a>

  </div>
</header>
