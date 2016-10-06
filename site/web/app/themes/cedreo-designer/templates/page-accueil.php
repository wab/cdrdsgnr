<?php
/**
 * Template Name: Accueil
 */
?>

<?php while (have_posts()) : the_post(); ?>

  <header class="page-header text-center banner">
    <div class="wrapper">
      <h1><?php the_field('maintitle'); ?></h1>
      <?php if (get_field('cta_link')): ?>
        <a href="<?php the_field('cta_link'); ?>" class="button large alert"><?php if (get_field('cta_intitule')) {the_field('cta_intitule');} else {echo 'Créer mon projet' ;} ?></a>
      <?php endif; ?>
    </div>
  </header>

  <div class="section">
    <div class="row column">
      Accès directs
    </div>
  </div>

  <div class="section">
    <div class="row">
      <div class="columns">
        <h2 class="section--title">Pourquoi <?php bloginfo('title'); ?></h2>
      </div>
      <div class="columns large-6">
        <?php if( have_rows('arguments') ): ?>
          <ul class="no-bullet lead">
          <?php  while ( have_rows('arguments') ) : the_row(); ?>

            <li><?php the_sub_field('text'); ?></li>

          <?php  endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
      <div class="columns large-6">
        <div class="videoframe" id="video-player" data-id='<?php the_field('video_id'); ?>'>
          lecteur video
        </div>
      </div>

    </div>
  </div>

  <div class="section">
    <div class="row column">
      <h2 class="section--title">Pour les pros</h2>
      <ul class="row no-bullet">
        <li class="columns large-3">
          <h3>Bâtiment Neuf</h3>
          <?php if( have_rows('pro1') ): ?>
          <ul class="no-bullet">
          <?php  while ( have_rows('pro1') ) : the_row(); ?>

            <li><?php the_sub_field('item'); ?></li>

          <?php  endwhile; ?>
          </ul>
          <?php endif; ?>
        </li>
        <li class="columns large-3">
          <h3>Bâtiment Ancien</h3>
          <?php if( have_rows('pro2') ): ?>
          <ul class="no-bullet">
          <?php  while ( have_rows('pro2') ) : the_row(); ?>

            <li><?php the_sub_field('item'); ?></li>

          <?php  endwhile; ?>
          </ul>
          <?php endif; ?>
        </li>
        <li class="columns large-3">
          <h3>Agencement intérieur</h3>
          <?php if( have_rows('pro3') ): ?>
          <ul class="no-bullet">
          <?php  while ( have_rows('pro3') ) : the_row(); ?>

            <li><?php the_sub_field('item'); ?></li>

          <?php  endwhile; ?>
          </ul>
          <?php endif; ?>
        </li>
        <li class="columns large-3">
          <h3>Agencement extérieur</h3>
          <?php if( have_rows('pro4') ): ?>
          <ul class="no-bullet">
          <?php  while ( have_rows('pro4') ) : the_row(); ?>

            <li><?php the_sub_field('item'); ?></li>

          <?php  endwhile; ?>
          </ul>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </div>

  <div class="section">
    <div class="row">
      <div class="columns large-6">image</div>
      <div class="columns large-6">
        <h2 class="section--title"><?php the_field('f1_title'); ?></h2>
        <?php the_field('f1_contenu'); ?>
        <a href="<?php the_field('f1_link'); ?>">Accéder</a>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="row">
      <div class="columns large-6">
        <h2 class="section--title"><?php the_field('f2_title'); ?></h2>
        <?php the_field('f2_contenu'); ?>
        <a href="<?php the_field('f2_link'); ?>">Accéder</a>
      </div>
      <div class="columns large-6">image</div>
    </div>
  </div>
  <div class="section">
    <div class="row">
      <div class="columns large-6">image</div>
      <div class="columns large-6">
        <h2 class="section--title"><?php the_field('f3_title'); ?></h2>
        <?php the_field('f3_contenu'); ?>
        <a href="<?php the_field('f3_link'); ?>">Accéder</a>
      </div>
    </div>
  </div>

   <div class="section">
    <div class="row column">
      <h2 class="section--title">Galerie</h2>
      <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et alias perspiciatis, dolore aperiam molestias aliquid repellat! Recusandae porro accusantium possimus soluta numquam, fugit! Et tempora, nam architecto quibusdam, unde molestiae!</p>
      <ul class="row no-bullet">
        <li class="columns large-4">image</li>
        <li class="columns large-4">image</li>
        <li class="columns large-4">image</li>
      </ul>
      <p class="text-center"><a href="<?php echo get_post_type_archive_link( 'imgallery' ); ?>" class="button large hollow">Voir la galerie</a></p>
    </div>
  </div>

<?php endwhile; ?>
