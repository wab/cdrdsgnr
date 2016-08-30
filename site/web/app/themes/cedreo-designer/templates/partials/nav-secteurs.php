<?php
$args_secteurs = array(
    'post_type' => 'page',
    'post_status' => 'publish',
    'post_parent' => 81,
    'orderby' => 'ID',
    'order' => 'ASC'
);
// the query
$nav_secteurs = new WP_Query( $args_secteurs ); ?>

<?php if ( $nav_secteurs->have_posts() ) : ?>

  <!-- pagination here -->

   <nav class="secteurs">
    <div class="tablet">
      <h2 class="tablet--title">Facile, rapide et de haute qualité</h2>
      <p class="text-center">My Sketcher est le moyen le plus <strong>facile</strong> et le <strong>meilleur</strong> de créer des modèles de maison et de plans en ligne. <br>En quelques clics, vous pouvez dessiner votre plan avec plus de 1000 items et matériaux et générer des <strong>rendus 3D haut de gamme</strong>.</p>
      <ul class="secteurs--list">

      <!-- the loop -->
      <?php while ( $nav_secteurs->have_posts() ) : $nav_secteurs->the_post(); ?>
        <li class="secteurs--item">
          <a class="secteurs--link" href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) {the_post_thumbnail();} ?>
            <h3 class="secteurs--title"><?php the_title(); ?></h3>
          </a>
        </li>
      <?php endwhile; ?>
      <!-- end of the loop -->

  <!-- pagination here -->

        </ul>
    </div>
  </nav>


  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>