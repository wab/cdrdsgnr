<?php
/**
 * Template Name: Accueil
 */
?>

<?php while (have_posts()) : the_post(); ?>

  <header class="page-header text-center banner">
    <div class="wrapper">
      <h1 class="maintitle"><?php the_field('main-title'); ?></h1>
      <?php if (get_field('cta_link')): ?>
        <a href="<?php the_field('cta_link'); ?>" class="button large focus"><?php if (get_field('cta_intitule')) {the_field('cta_intitule');} else {echo 'Créer mon projet' ;} ?></a>
      <?php endif; ?>
    </div>
  </header>

  <div class="section accesdirect">
    <div class="row column">
      <nav class="no-bullet accesdirect--items">
        <a class="accesdirect--button" href="#why">Pourquoi</a>
        <span class="chevron"></span>
        <a class="accesdirect--button" href="#f1"><?php the_field('f1_title'); ?></a>
        <span class="chevron"></span>
        <a class="accesdirect--button" href="#f2"><?php the_field('f2_title'); ?></a>
        <span class="chevron"></span>
        <a class="accesdirect--button" href="#f3"><?php the_field('f3_title'); ?></a>
      </nav>
    </div>
  </div>

  <div class="section why">
    <a name="why" id="why" class="anchor"></a>
    <div class="row">
      <div class="columns">
        <h2 class="section--title"><span>Pourquoi <?php bloginfo('title'); ?></span></h2>
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
        <div class="video-wrapper flex-video widescreen" data-id="<?php the_field('video_id'); ?>">
          <div class="videoframe" id="video-player">
            lecteur video
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <a name="why" id="why" class="anchor"></a>
    <div class="row column">
      <h2 class="section--title"><span>Pour les pros</span></h2>
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

  <div class="section feature">
    <a name="f1" id="f1" class="anchor"></a>
    <div class="feature--wrapper">
      <div class="feature--column">image</div>
      <div class="feature--column">
        <h2 class="section--title"><span><?php the_field('f1_title'); ?></span></h2>
        <div class="text-justify">
          <?php the_field('f1_contenu'); ?>
        </div>
        <p class="text-right"><a href="<?php the_field('f1_link'); ?>">Accéder</a></p>
      </div>
    </div>
  </div>
  <div class="section feature">
    <a name="f2" id="f2" class="anchor"></a>
    <div class="feature--wrapper">
      <div class="feature--column"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/img-amenager.png" alt="Aménager"></div>
      <div class="feature--column">
        <h2 class="section--title"><span><?php the_field('f2_title'); ?></span></h2>
        <div class="text-justify">
          <?php the_field('f2_contenu'); ?>
        </div>
        <p class="text-right"><a href="<?php the_field('f2_link'); ?>">Accéder</a></p>
      </div>
    </div>
  </div>
  <div class="section feature">
    <a name="f3" id="f3" class="anchor"></a>
    <div class="feature--wrapper">
      <div class="feature--column"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/img-valoriser.png" alt="Aménager"></div>
      <div class="feature--column">
        <h2 class="section--title"><span><?php the_field('f3_title'); ?></span></h2>
        <div class="text-justify">
          <?php the_field('f3_contenu'); ?>
        </div>
        <p class="text-right"><a href="<?php the_field('f3_link'); ?>">Accéder</a></p>
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
