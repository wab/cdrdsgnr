<?php
/**
 * Template Name: Page sommaire
 */

?>

<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('partials/page-header'); ?>

  <div class="page-wrapper">
    <div class="page-column page-contenu">
      <?php get_template_part('partials/content-page'); ?>
      <?php $childpages = new WP_Query( array('post_parent' => $post->ID, 'post_type' => 'page') ); ?>
      <?php if ( $childpages->have_posts() ) : ?>

      <!-- pagination here -->

      <p class="lead">Sommaire :</p>

      <!-- the loop -->
      <?php while ( $childpages->have_posts() ) : $childpages->the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
        <hr>
      <?php endwhile; ?>
      <!-- end of the loop -->

      <!-- pagination here -->

      <?php wp_reset_postdata(); ?>

      <?php endif; ?>
    </div>
  </div>

<?php endwhile; ?>
