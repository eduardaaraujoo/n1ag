<?php get_header(); ?>

<main class="content" id="conteudo">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class(); ?>>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
    <?php the_posts_pagination(); ?>
  <?php else : ?>
    <p>Nenhum conteúdo encontrado.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
