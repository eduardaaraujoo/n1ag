<?php get_header(); ?>

<!-- Barra de progresso de leitura -->
<div id="read-progress"></div>

<main id="conteudo" class="single-wrap">
  <div class="container">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <!-- BREADCRUMB -->
      <nav class="breadcrumb" aria-label="Você está em">
        <a href="<?php echo esc_url( home_url('/') ); ?>">Início</a>
        <?php
          $cats = get_the_category();
          if ( ! empty( $cats ) ) :
            $cat = $cats[0];
            echo ' <span>›</span> <a href="' . esc_url( get_category_link($cat->term_id) ) . '">' . esc_html( $cat->name ) . '</a>';
          endif;
        ?>
        <span>›</span> <span class="current"><?php the_title(); ?></span>
      </nav>

      <!-- TÍTULO + META -->
      <header class="single-head">
        <?php if ( ! empty( $cats ) ) : ?>
          <span class="badge-cat"><?php echo esc_html( $cat->name ); ?></span>
        <?php endif; ?>

        <h1 class="single-title"><?php the_title(); ?></h1>

        <div class="meta">
          <span class="meta-item">
            <svg class="icon" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-4.418 0-8 2.239-8 5v1h16v-1c0-2.761-3.582-5-8-5Z"/>
            </svg>
            <?php the_author(); ?>
          </span>
          <span class="meta-item">
            <svg class="icon" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M7 2v3m10-3v3M3 9h18M5 6h14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2Z"/>
            </svg>
            <?php echo esc_html( date_i18n( 'j M Y', get_post_time( 'U', true ) ) ); ?>
          </span>
          <span class="meta-item">
            <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 7v5l4 2M12 22a10 10 0 1 0-10-10 10 10 0 0 0 10 10Z"/></svg>
            <?php echo esc_html( meu_tema_tempo_leitura() ); ?>
          </span>
        </div>
      </header>

      <!-- HERO (thumb grande + legenda opcional) -->
      <?php if ( has_post_thumbnail() ) : ?>
        <figure class="single-hero">
          <?php the_post_thumbnail( 'large', ['loading' => 'eager'] ); ?>
          <?php if ( get_the_post_thumbnail_caption() ) : ?>
            <figcaption><?php echo wp_kses_post( get_the_post_thumbnail_caption() ); ?></figcaption>
          <?php endif; ?>
        </figure>
      <?php endif; ?>

      <!-- BOTÕES DE COMPARTILHAMENTO -->
      <?php
        $url   = urlencode( get_permalink() );
        $title = urlencode( get_the_title() );
      ?>
      <div class="share-bar">
        <span>Compartilhar:</span>
        <a class="share-btn" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $url; ?>" target="_blank" rel="noopener">LinkedIn</a>
        <a class="share-btn" href="https://twitter.com/intent/tweet?url=<?php echo $url; ?>&text=<?php echo $title; ?>" target="_blank" rel="noopener">X/Twitter</a>
        <a class="share-btn" href="https://api.whatsapp.com/send?text=<?php echo $title . '%20' . $url; ?>" target="_blank" rel="noopener">WhatsApp</a>
      </div>

      <!-- CONTEÚDO (tipografia bonita) -->
      <article <?php post_class('single-content prose'); ?>>
        <?php the_content(); ?>
        <?php wp_link_pages(['before'=>'<div class="page-links">Páginas:','after'=>'</div>']); ?>
        <?php the_tags('<p class="post-tags"><strong>Tags:</strong> ',' , ','</p>'); ?>
      </article>

      <!-- NAVEGAÇÃO ENTRE POSTS (com preview) -->
      <nav class="post-nav">
        <?php
          $prev = get_previous_post();
          $next = get_next_post();
        ?>
        <div class="prev">
          <?php if ( $prev ) : ?>
            <a href="<?php echo get_permalink($prev); ?>">
              <span>← Anterior</span>
              <strong><?php echo esc_html( get_the_title($prev) ); ?></strong>
            </a>
          <?php endif; ?>
        </div>
        <div class="next">
          <?php if ( $next ) : ?>
            <a href="<?php echo get_permalink($next); ?>">
              <span>Próximo →</span>
              <strong><?php echo esc_html( get_the_title($next) ); ?></strong>
            </a>
          <?php endif; ?>
        </div>
      </nav>

      <!-- RELACIONADOS (mesma categoria) -->
      <?php
        $rel_id = get_the_ID();
        $cat_ids = wp_list_pluck( get_the_category( $rel_id ), 'term_id' );
        if ( $cat_ids ) :
          $rel = new WP_Query([
            'post__not_in'        => [$rel_id],
            'posts_per_page'      => 3,
            'ignore_sticky_posts' => 1,
            'cat'                 => implode(',', $cat_ids),
          ]);
          if ( $rel->have_posts() ) :
      ?>
        <section class="related">
          <h2>Posts relacionados</h2>
          <div class="grid-blog">
            <?php while ( $rel->have_posts() ) : $rel->the_post(); ?>
              <article class="blog-card">
                <div class="blog-img">
                  <a class="thumb" href="<?php the_permalink(); ?>">
                    <?php if ( has_post_thumbnail() ) the_post_thumbnail('card', ['loading'=>'lazy']); ?>
                  </a>
                  <?php $c = get_the_category(); if ( !empty($c) ) echo '<span class="category">'.esc_html($c[0]->name).'</span>'; ?>
                </div>
                <div class="blog-content">
                  <div class="meta">
                    <span class="meta-item">
                      <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 2v3m10-3v3M3 9h18M5 6h14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2Z"/></svg>
                      <?php echo esc_html( date_i18n( 'j M Y', get_post_time( 'U', true ) ) ); ?>
                    </span>
                    <span class="meta-item">
                      <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 7v5l4 2M12 22a10 10 0 1 0-10-10 10 10 0 0 0 10 10Z"/></svg>
                      <?php echo esc_html( meu_tema_tempo_leitura() ); ?>
                    </span>
                  </div>
                  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <p><?php echo wp_trim_words( get_the_excerpt(), 24 ); ?></p>
                  <a class="read-more" href="<?php the_permalink(); ?>">Ler mais →</a>
                </div>
              </article>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
        </section>
      <?php
          endif;
        endif;
      ?>

      <?php comments_template(); ?>

    <?php endwhile; endif; ?>

  </div>
</main>

<?php get_footer(); ?>
