<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('partials/page-header'); ?>
  <div class="page-container section">
    <div class="row">
    <div class="columns medium-8">
      <?php get_template_part('partials/content-page'); ?>
    </div>
    <div class="columns medium-4">
      <?= App\list_child_pages(); ?>
    </div>
  </div>
  </div>


<?php endwhile; ?>
