<?php get_header(); ?>

<main class="content">
  <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        the_content();
      endwhile;
    else :
      echo '<p>Nenhum conteúdo encontrado.</p>';
    endif;
  ?>
</main>

<?php get_footer(); ?>
