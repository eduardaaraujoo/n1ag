<?php
/**
 * Template da Página de Posts (Blog) — home.php
 */
get_header();
?>
<main id="conteudo" class="archive-wrap">

  <!-- Cabeçalho do Blog -->
  <header class="archive-head">
    <div class="container">
      <h1 class="archive-title">
        <?php
          $posts_page_id = get_option('page_for_posts');
          echo esc_html( $posts_page_id ? get_the_title($posts_page_id) : __('Blog','meu-tema-teste') );
        ?>
      </h1>
      <?php
        // Se quiser, use o excerpt da página de posts como descrição:
        if ( $posts_page_id ) {
          $desc = get_the_excerpt( $posts_page_id );
          if ( $desc ) {
            echo '<p class="archive-desc">'. esc_html( $desc ) .'</p>';
          }
        }
      ?>
    </div>
  </header>

  <!-- Grid de posts -->
  <div class="container">
    <div class="grid-blog">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article <?php post_class('blog-card'); ?>>
          <div class="blog-img">
            <a class="thumb" href="<?php the_permalink(); ?>">
              <?php
                if ( has_post_thumbnail() ) {
                  the_post_thumbnail('card', ['loading'=>'lazy']);
                } else {
                  $ph_rel  = 'assets/img/blog-placeholder.png';
                  $ph_path = get_theme_file_path($ph_rel);
                  if ( file_exists($ph_path) ) {
                    echo '<img src="'. esc_url( get_theme_file_uri($ph_rel) ) .'" alt="'. esc_attr( get_the_title() ) .'" loading="lazy">';
                  }
                }
              ?>
            </a>
            <?php
              $cat = get_the_category();
              if ( $cat ) {
                echo '<span class="category">'. esc_html($cat[0]->name) .'</span>';
              }
            ?>
          </div>

          <div class="blog-content">
            <div class="meta">
              <span>📅 <?php echo esc_html( date_i18n('j M Y', get_post_time('U', true)) ); ?></span>
              <span>👤 <?php echo esc_html( get_the_author() ); ?></span>
              <span>⏱ <?php echo esc_html( function_exists('meu_tema_tempo_leitura') ? meu_tema_tempo_leitura() : '' ); ?></span>
            </div>

            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 28, '…' ) ); ?></p>

            <a class="read-more" href="<?php the_permalink(); ?>">Ler mais →</a>
          </div>
        </article>
      <?php endwhile; else: ?>
        <p>Nenhum post encontrado.</p>
      <?php endif; ?>
    </div>

    <nav class="pagination-wrap" aria-label="Paginação do blog">
      <?php
        the_posts_pagination([
          'mid_size'  => 2,
          'prev_text' => '← Anteriores',
          'next_text' => 'Próximos →',
        ]);
      ?>
    </nav>
  </div>
</main>
<?php get_footer(); ?>
