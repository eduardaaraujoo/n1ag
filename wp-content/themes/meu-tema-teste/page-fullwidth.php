<?php
/* Template Name: Página Full Width (elementor) */
get_header(); ?>

<main id="conteudo" class="page-fullwidth">
  <div class="container">
    <?php
    while ( have_posts() ) : the_post();
      the_content(); // o elementor vai renderizar aqui
    endwhile;
    ?>
  </div>
</main>

<?php get_footer(); ?>
