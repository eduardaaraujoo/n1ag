<?php
// Enfileirar estilos e scripts do tema
function meu_tema_scripts() {
  // style.css (obrigatório do WP)
  wp_enqueue_style(
    'meu-tema-style',
    get_stylesheet_uri(),
    [],
    filemtime( get_stylesheet_directory() . '/style.css' )
  );

  // assets/css/main.css (onde está TODO o seu CSS)
  wp_enqueue_style(
    'meu-tema-main',
    get_theme_file_uri('assets/css/main.css'),
    ['meu-tema-style'],
    filemtime( get_theme_file_path('assets/css/main.css') )
  );

  // JS opcional
  wp_enqueue_script(
    'meu-tema-js',
    get_theme_file_uri('assets/js/main.js'),
    [],
    filemtime( get_theme_file_path('assets/js/main.js') ),
    true
  );
}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');

// Menus
function meu_tema_setup() {
  add_theme_support('title-tag');
  register_nav_menus([
    'menu-principal' => __('Menu Principal', 'meu-tema'),
  ]);
}
add_action('after_setup_theme', 'meu_tema_setup');

// Força a logo do site a ignorar width e height inline
add_filter('get_custom_logo', function ($html) {
    // Remove os atributos width e height
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
    return $html;
});
