<?php while (have_posts()) : the_post(); ?>


  <article class="page-wrapper">
      <div class="page-column page-contenu">
        <?php get_template_part('partials/content-page'); ?>
      </div>
      <aside class="page-column sidebar">
        <?= App\list_child_pages(); ?>
      </aside>
  </article>

<?php endwhile; ?>
