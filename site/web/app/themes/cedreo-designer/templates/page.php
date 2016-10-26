<?php while (have_posts()) : the_post(); ?>


  <div class="page-wrapper" >
      <div class="page-column page-contenu" id="page-contenu">
        <?php get_template_part('partials/content-page'); ?>
      </div>
      <div class="page-column sidebar" data-sticky-container >
        <nav class="sticky" data-sticky data-anchor="page-contenu">
          <?= App\list_child_pages(); ?>
        </nav>
      </div>
  </div>

<?php endwhile; ?>
