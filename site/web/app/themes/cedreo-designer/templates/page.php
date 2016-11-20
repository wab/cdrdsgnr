<?php while (have_posts()) : the_post(); ?>

  <div class="page-wrapper" >

      <div class="page-column page-contenu" id="page-contenu">
        <?php get_template_part('partials/content-page'); ?>
      </div>
       <div class="page-column sidebar hide-for-large">
        <nav>
          <?= App\list_child_pages(); ?>
        </nav>
      </div>

  </div>

<?php endwhile; ?>
