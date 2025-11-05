<?php
// ===== Suportes do tema =====
add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
  add_theme_support('align-wide');

  register_nav_menus([
    'menu-principal' => __('Menu Principal', 'meu-tema-teste'),
    'menu-rodape'    => __('Menu Rodapé', 'meu-tema-teste'),
  ]);

  // tamanho útil para cards de post
  add_image_size('card', 640, 360, true);
});

// ===== Enfileirar CSS/JS =====
function meu_tema_scripts() {
  // style.css do tema
  $style = get_stylesheet_directory() . '/style.css';
  wp_enqueue_style(
    'meu-tema-style',
    get_stylesheet_uri(),
    [],
    file_exists($style) ? filemtime($style) : null
  );

  // assets/css/main.css (seu CSS principal)
  $main_css_path = get_theme_file_path('assets/css/main.css');
  if (file_exists($main_css_path)) {
    wp_enqueue_style(
      'meu-tema-main',
      get_theme_file_uri('assets/css/main.css'),
      ['meu-tema-style'],
      filemtime($main_css_path)
    );
  }

  // JS opcional
  $main_js_path = get_theme_file_path('assets/js/main.js');
  if (file_exists($main_js_path)) {
    wp_enqueue_script(
      'meu-tema-js',
      get_theme_file_uri('assets/js/main.js'),
      [],
      filemtime($main_js_path),
      true
    );
  }
}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');

// ===== Pequenas otimizações =====
// remover emojis do core (menos JS/CSS)
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// forçar a logo sem width/height inline (se usar custom logo)
add_filter('get_custom_logo', function ($html) {
  return preg_replace('/(width|height)="\d*"\s/', '', $html);
});
