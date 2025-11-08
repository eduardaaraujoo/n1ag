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

// ===== Enfileirar CSS/JS (ÚNICA FUNÇÃO) =====
function meu_tema_scripts() {
  // style.css do tema (sempre)
  $style_path = get_stylesheet_directory() . '/style.css';
  wp_enqueue_style(
    'meu-tema-style',
    get_stylesheet_uri(),
    [],
    file_exists($style_path) ? filemtime($style_path) : null
  );

  // assets/css/main.css (opcional)
  $main_css_rel  = 'assets/css/main.css';
  $main_css_path = get_theme_file_path($main_css_rel);
  if (file_exists($main_css_path)) {
    wp_enqueue_style(
      'meu-tema-main',
      get_theme_file_uri($main_css_rel),
      ['meu-tema-style'],               // depende do style.css
      filemtime($main_css_path)
    );
  }

  // assets/js/main.js (opcional)
  $main_js_rel  = 'assets/js/main.js';
  $main_js_path = get_theme_file_path($main_js_rel);
  if (file_exists($main_js_path)) {
    wp_enqueue_script(
      'meu-tema-js',
      get_theme_file_uri($main_js_rel),
      [],                               // sem dependências (vanilla)
      filemtime($main_js_path),
      true                              // no footer
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

// ===== Tempo de leitura (ex.: "8 min") =====
function meu_tema_tempo_leitura($post_id = null, $wpm = 200) {
  $post_id = $post_id ?: get_the_ID();
  $content = get_post_field('post_content', $post_id);
  $words   = str_word_count(wp_strip_all_tags($content));
  $min     = max(1, ceil($words / $wpm));
  return sprintf(__('%d min', 'meu-tema-teste'), $min);
}

// ===== Shortcode: [blog_grid qty="3"] =====
function meu_tema_blog_grid_shortcode($atts = []) {
  if (!is_array($atts)) $atts = [];
  $atts = shortcode_atts(['qty' => 3], $atts, 'blog_grid');

  $q = new WP_Query([
    'post_type'           => 'post',
    'posts_per_page'      => (int) $atts['qty'],
    'ignore_sticky_posts' => 1,
    'no_found_rows'       => true,
  ]);

  ob_start(); ?>
  <div class="grid-blog">
    <?php if ($q->have_posts()) : while ($q->have_posts()) : $q->the_post(); ?>
      <article class="blog-card">
        <div class="blog-img">
          <a class="thumb" href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) the_post_thumbnail('card', ['loading' => 'lazy']); ?>
          </a>
          <?php if ($cat = get_the_category()) : ?>
            <span class="category"><?php echo esc_html($cat[0]->name); ?></span>
          <?php endif; ?>
        </div>

        <div class="blog-content">
          <div class="meta">
            <span>📅 <?php echo esc_html(date_i18n('j M Y', get_post_time('U', true))); ?></span>
            <span>👤 <?php echo esc_html(get_the_author()); ?></span>
            <span>⏱ <?php echo esc_html(meu_tema_tempo_leitura()); ?></span>
          </div>

          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 28, '…')); ?></p>
          <a class="read-more" href="<?php the_permalink(); ?>">Ler mais →</a>
        </div>
      </article>
    <?php endwhile; else : ?>
      <p>Nenhum post encontrado.</p>
    <?php endif; wp_reset_postdata(); ?>
  </div>
  <?php
  return ob_get_clean();
}
add_shortcode('blog_grid', 'meu_tema_blog_grid_shortcode');
