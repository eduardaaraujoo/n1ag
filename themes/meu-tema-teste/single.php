<?php get_header(); ?>

<main class="content" id="conteudo">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article <?php post_class('single'); ?>>
      <header class="single-head">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <p class="meta">Por <?php the_author(); ?> — <?php echo get_the_date(); ?></p>
      </header>

      <?php if ( has_post_thumbnail() ) : ?>
        <figure class="single-thumb"><?php the_post_thumbnail('large'); ?></figure>
      <?php endif; ?>

      <div class="entry-content"><?php the_content(); ?></div>

      <nav class="post-nav">
        <div class="prev"><?php previous_post_link(); ?></div>
        <div class="next"><?php next_post_link(); ?></div>
      </nav>

      <?php comments_template(); ?>
    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
