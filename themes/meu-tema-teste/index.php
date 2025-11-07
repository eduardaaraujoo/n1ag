<?php get_header(); ?>

<?php echo '<!-- DEBUG: carregou index.php -->'; ?>


<main id="conteudo" class="<?php echo is_home() ? 'archive-wrap' : 'content'; ?>">

  <?php if ( is_home() ) : // LISTAGEM DO BLOG (/blog) ?>

    <header class="archive-head">
      <div class="container">
        <h1 class="archive-title">
          <?php
            $posts_page_id = get_option('page_for_posts');
            echo $posts_page_id ? esc_html( get_the_title($posts_page_id) ) : 'Blog';
          ?>
        </h1>
      </div>
    </header>

    <div class="container">
      <div class="grid-blog">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article class="blog-card">
            <div class="blog-img">
              <a class="thumb" href="<?php the_permalink(); ?>">
                <?php if ( has_post_thumbnail() ) the_post_thumbnail('card', ['loading'=>'lazy']); ?>
              </a>
              <?php
                $cat = get_the_category();
                if ( $cat ) echo '<span class="category">'.esc_html($cat[0]->name).'</span>';
              ?>
            </div>

            <div class="blog-content">
              <div class="meta">
                <span>📅 <?php echo esc_html( date_i18n('j M Y', get_post_time('U', true)) ); ?></span>
                <span>👤 <?php echo esc_html( get_the_author() ); ?></span>
                <span>⏱ <?php echo esc_html( meu_tema_tempo_leitura() ); ?></span>
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

  <?php else : // PÁGINAS/OUTROS (mantém o comportamento que você tinha) ?>

    <div class="container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </article>
      <?php endwhile; else : ?>
        <p>Nenhum conteúdo encontrado.</p>
      <?php endif; ?>
    </div>

  <?php endif; ?>

</main>

<?php get_footer(); ?>
