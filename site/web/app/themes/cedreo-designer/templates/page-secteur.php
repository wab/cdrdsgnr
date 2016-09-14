<?php
/**
 * Template Name: Page secteur
 */
?>
<?php get_template_part('partials/page-header'); ?>

<div class="row section">
  <?php while (have_posts()) : the_post(); ?>

    <?php if (get_field('subtitle')) : ?>

      <div class="columns">
        <h2><?php the_field('subtitle'); ?></h2>
      </div>

    <?php endif; ?>

    <div class="columns large-6">
      <?php get_template_part('partials/content-page'); ?>
    </div>
    <div class="columns large-6">

    <?php

      $image = get_field('secteur_img');

      if( !empty($image) ): ?>



      <?php
          // vars
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];

          // thumbnail
          $size = 'medium';
          $thumb = $image['sizes'][ $size ];

          ?>


            <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />


          <?php if( $caption ): ?>

              <p class="wp-caption-text"><?php echo $caption; ?></p>

          <?php endif; ?>


      <?php endif; ?>
      </div>


  <?php endwhile; ?>
</div>
