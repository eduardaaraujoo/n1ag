<?php get_header(); ?>

<main class="content" id="conteudo">
  <header class="archive-head">
    <div class="container">
      <h1><?php the_archive_title(); ?></h1>
      <?php the_archive_description('<p class="desc">','</p>'); ?>
    </div>
  </header>

  <div class="container posts-grid">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="post-card">
        <a class="post-card__thumb" href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('card', ['loading'=>'lazy']); ?>
        </a>
        <h3 class="post-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p class="post-card__excerpt"><?php echo get_the_excerpt(); ?></p>
      </article>
    <?php endwhile; else: ?>
      <p>Nenhum post encontrado.</p>
    <?php endif; ?>
  </div>

  <div class="container pagination">
    <?php the_posts_pagination(); ?>
  </div>
</main>

<?php get_footer(); ?>
