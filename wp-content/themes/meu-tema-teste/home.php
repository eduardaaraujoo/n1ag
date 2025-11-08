<?php get_header(); ?>
<?php echo "<!-- TEMPLATE: home.php (posts page) -->"; ?>


<main id="conteudo" class="archive-wrap">

  <!-- Cabeçalho do Blog -->
  <header class="archive-head">
    <div class="container">
      <h1 class="archive-title">
        <?php
          // Título da página de posts (se definida) ou “Blog”
          $posts_page_id = get_option('page_for_posts');
          echo esc_html( $posts_page_id ? get_the_title($posts_page_id) : __('Blog','meu-tema-teste') );
        ?>
      </h1>
      <?php
        // descrição opcional
        // echo '<p class="archive-desc">Últimos artigos do nosso time</p>';
      ?>
    </div>
  </header>

  <!-- Grid de posts -->
  <div class="container">
    <div class="grid-blog">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="blog-card">
          <div class="blog-img">
            <a class="thumb" href="<?php the_permalink(); ?>">
              <?php
                if ( has_post_thumbnail() ) {
                  the_post_thumbnail('card', ['loading'=>'lazy']);
                } else {
                  // fallback simples quando não tem thumb
                  echo '<img src="'.esc_url( get_template_directory_uri().'/assets/img/blog-placeholder.png' ).'" alt="'.esc_attr(get_the_title()).'" loading="lazy">';
                }
              ?>
            </a>
            <?php
              $cat = get_the_category();
              if ( $cat ) {
                echo '<span class="category">'.esc_html($cat[0]->name).'</span>';
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

    <nav class="pagination-wrap">
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
