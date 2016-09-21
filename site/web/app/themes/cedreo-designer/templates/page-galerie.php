<?php
/**
 * Template Name: Galerie d'images
 */
?>

<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('partials/page-header'); ?>

  <div class="page-container section">
    <div class="row column">

        <div class="text-center">
          <?php get_template_part('partials/content-page'); ?>
        </div>

        <?php

        $images = get_field('gallery');

        if( $images ): ?>

            <ul class="gallery--items row small-up-1 medium-up-2 large-up-4">
                <?php foreach( $images as $image ): ?>
                    <li class="gallery--item column">
                        <a class="gallery-link" href="<?php echo $image['url']; ?>">
                          <img class="thumbnail" src="<?php echo $image['sizes']['gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </a>
                        <p><?php echo $image['caption']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>

        <?php endif; ?>

    </div>
  </div>

<?php endwhile; ?>

