<?php
/**
 * Template Name: Page tarifs
 */


?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('partials/page-header'); ?>

  <div class="page-wrapper">

  <?php if( have_rows('plans') ): ?>

  <ul class="pricing-table--wrapper no-bullet">

  <?php while( have_rows('plans') ): the_row();

    // vars
    $image = get_sub_field('image');
    $content = get_sub_field('content');
    $link = get_sub_field('link');

    ?>

    <li class="pricing-table--column">

      <ul class="pricing-table no-bullet text-center">
        <li class="title"><?php the_sub_field('name'); ?></li>
        <li class="price"><?php the_sub_field('price'); ?></li>
        <li><p class="description">Nombre de projets</p> <?php the_sub_field('number_project'); ?> / an</li>
        <li><p class="description">Images d'essais <small>430 x 250 pixels</small></p> <?php the_sub_field('number_img_try'); ?> / an</li>
        <li>
        <?php if(get_sub_field('number_img_web')): ?>
          <p class="description">Images format Web <small>640 x 360 pixels</small></p><?php the_sub_field('number_img_web'); ?> / an
        <?php else: ?>
          <p>-</p>
        <?php endif; ?>
        </li>
        <li>
        <?php if(get_sub_field('number_img_hd')): ?>
          <p class="description">Images format HD <small>1280 x 720 pixels</small></p><?php the_sub_field('number_img_hd'); ?> / an
        <?php else: ?>
          <p>-</p>
        <?php endif; ?>
        </li>
        <li>
        <?php if(get_sub_field('number_img_4K')): ?>
          <p class="description">Images format 4K <small>3840 x 2160 pixels</small></p><?php the_sub_field('number_img_4K'); ?> / an
        <?php else: ?>
          <p>-</p>
        <?php endif; ?>
        </li>
        <li><a class="button large" href="#">Démarrer</a></li>
      </ul>

    </li>

  <?php endwhile; ?>

  </ul>

<?php endif; ?>

  </div>


<?php endwhile; ?>
