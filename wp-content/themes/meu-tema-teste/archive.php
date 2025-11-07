<?php get_header(); ?>

<main id="conteudo" class="archive-wrap">
  <!-- Cabeçalho do arquivo -->
  <header class="archive-head">
    <div class="container">
      <h1 class="archive-title">
        <?php
          if (is_category())      { single_cat_title(); }
          elseif (is_tag())       { single_tag_title('#'); }
          elseif (is_author())    { the_post(); printf('Artigos de %s', esc_html(get_the_author())); rewind_posts(); }
          elseif (is_search())    { printf('Resultados para: %s', esc_html(get_search_query())); }
          elseif (is_date())      { echo get_the_archive_title(); }
          else                    { echo esc_html( get_the_title( get_option('page_for_posts') ) ?: 'Blog' ); }
        ?>
      </h1>
      <?php the_archive_description('<p class="archive-desc">','</p>'); ?>
    </div>
  </header>

  <!-- Lista de posts -->
  <div class="container">
    <div class="grid-blog">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="blog-card">
          <div class="blog-img">
            <a class="thumb" href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()) the_post_thumbnail('card', ['loading'=>'lazy']); ?>
            </a>
            <?php
              $cat = get_the_category();
              if ($cat) echo '<span class="category">'.esc_html($cat[0]->name).'</span>';
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
      <?php the_posts_pagination([
        'mid_size'  => 2,
        'prev_text' => '← Anteriores',
        'next_text' => 'Próximos →',
      ]); ?>
    </nav>
  </div>
</main>

<?php get_footer(); ?>
