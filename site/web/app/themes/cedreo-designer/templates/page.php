<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('partials/page-header'); ?>

  <div class="row columns">
      <?php get_template_part('partials/content-page'); ?>
  </div>

<?php endwhile; ?>
