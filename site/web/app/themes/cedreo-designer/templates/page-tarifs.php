<?php
/**
 * Template Name: Page tarifs
 */


?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('partials/page-header'); ?>

  <div class="pricing-table--wrapper">
    <div class="pricing-table--column">
      <ul class="pricing-table no-bullet text-center">
        <li class="title">&nbsp;</li>
        <li class="price">Prix</li>
        <li class="description">Nombre de projets</li>
        <li class="description">Images d'essais <small>430 x 250 pixels</small></li>
        <li class="description">Images format Web <small>640 x 360 pixels</small></li>
        <li class="description">Images d'essais <small>430 x 250 pixels</small></li>
        <li class="description">Images d'essais <small>430 x 250 pixels</small></li>
      </ul>
    </div>
    <div class="pricing-table--column">
      <ul class="pricing-table no-bullet text-center">
        <li class="title">Free</li>
        <li class="price">Gratuit</li>
        <li>3 / an</li>
        <li>1 / an</li>
        <li>0</li>
        <li>0</li>
        <li>0</li>
        <li><a class="button large" href="#">Démarrer</a></li>
      </ul>
    </div>
    <div class="pricing-table--column">
      <ul class="pricing-table no-bullet text-center">
        <li class="title">S</li>
        <li class="price">290€ / an</li>
        <li>36 / an</li>
        <li>1 / an</li>
        <li>0</li>
        <li>0</li>
        <li>0</li>
        <li><a class="button large" href="#">Démarrer</a></li>
      </ul>
    </div>
    <div class="pricing-table--column">
      <ul class="pricing-table no-bullet text-center">
        <li class="title">M</li>
        <li class="price">490€ / an</li>
        <li>100 / an</li>
        <li>1 / an</li>
        <li>0</li>
        <li>0</li>
        <li>0</li>
        <li><a class="button large" href="#">Démarrer</a></li>
      </ul>
    </div>
    <div class="pricing-table--column">
      <ul class="pricing-table no-bullet text-center">
        <li class="title">L</li>
        <li class="price">990€ / an</li>
        <li>250 / an</li>
        <li>1 / an</li>
        <li>0</li>
        <li>0</li>
        <li>0</li>
        <li><a class="button large" href="#">Démarrer</a></li>
      </ul>
    </div>
  </div>



<?php endwhile; ?>
