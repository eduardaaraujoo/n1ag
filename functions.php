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
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// forçar a logo sem width/height inline (se usar custom logo)
add_filter('get_custom_logo', function ($html) {
  return preg_replace('/(width|height)="\d*"\s/', '', $html);
});

// ===== Tempo de leitura (ex.: "8 min") =====
function meu_tema_tempo_leitura( $post_id = null, $wpm = 200 ) {
  $post_id = $post_id ?: get_the_ID();
  $content = get_post_field('post_content', $post_id);
  $words   = str_word_count( wp_strip_all_tags( $content ) );
  $min     = max(1, ceil($words / $wpm));
  return sprintf(__('%d min', 'meu-tema-teste'), $min);
}

// ===== Shortcode do grid do blog: [blog_grid qty="3" cat="" tag=""] =====
function meu_tema_shortcode_blog_grid( $atts = [] ) {
  $a = shortcode_atts([
    'qty' => 3,  // quantidade de posts
    'cat' => '', // slug da categoria (opcional)
    'tag' => '', // slug da tag (opcional)
  ], $atts, 'blog_grid');

  $args = [
    'posts_per_page'      => max(1, (int) $a['qty']),
    'ignore_sticky_posts' => 1,
    'post_status'         => 'publish',
  ];
  if ( $a['cat'] ) $args['category_name'] = sanitize_title( $a['cat'] );
  if ( $a['tag'] ) $args['tag']           = sanitize_title( $a['tag'] );

  $q = new WP_Query($args);
  ob_start();

  if ( $q->have_posts() ) {
    echo '<div class="grid-blog">';
    while ( $q->have_posts() ) {
      $q->the_post();

      $cats = get_the_category();
      $cat_label = (!empty($cats)) ? esc_html($cats[0]->name) : __('Blog', 'meu-tema-teste');

      ?>
      <article class="blog-card">
        <div class="blog-img">
          <a class="thumb" href="<?php echo esc_url( get_permalink() ); ?>">
            <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail('card', ['loading' => 'lazy']);
            }
            ?>
          </a>
          <span class="category"><?php echo $cat_label; ?></span>
        </div>

        <div class="blog-content">
          <div class="meta">
            <span>📅 <?php echo esc_html( date_i18n('j M Y', get_post_time('U', true)) ); ?></span>
            <span>👤 <?php echo esc_html( get_the_author() ); ?></span>
            <span>⏱ <?php echo esc_html( meu_tema_tempo_leitura() ); ?></span>
          </div>

          <h3><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h3>
          <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 30, '…' ) ); ?></p>

          <a class="read-more" href="<?php echo esc_url( get_permalink() ); ?>">
            <?php _e('Ler mais →', 'meu-tema-teste'); ?>
          </a>
        </div>
      </article>
      <?php
    }
    echo '</div>';
    wp_reset_postdata();
  } else {
    echo '<p>' . esc_html__( 'Nenhum post encontrado.', 'meu-tema-teste' ) . '</p>';
  }

  return ob_get_clean();
}
add_shortcode('blog_grid', 'meu_tema_shortcode_blog_grid');
function meu_tema_hello_shortcode() { return 'OK do shortcode'; }
add_shortcode('hello_test', 'meu_tema_hello_shortcode');
