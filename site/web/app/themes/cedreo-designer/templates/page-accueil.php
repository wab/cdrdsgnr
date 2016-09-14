<?php
/**
 * Template Name: Accueil
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <header class="banner">
    <h1 class="site--title"><span class="textcolor">Plans 3D</span>, rendus intérieurs et extérieurs en haute qualité, <span class="textcolor">simplement et rapidement</span></h1>

    <?php if( have_rows('banner_step') ): ?>

      <ol class="step--list">

      <?php while( have_rows('banner_step') ): the_row();

        // vars
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $url = $image['url'];
        $alt = $image['alt'];
        $caption = $image['caption'];

        // thumbnail
        $size = 'medium';
        $thumb = $image['sizes'][ $size ];

        ?>

        <li class="step--item">


            <p><img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" /></p>
            <p class="step--title"><?php echo $title; ?></p>
            <svg class="icon-step"><use xlink:href="#icon-step"></use></svg>

        </li>

      <?php endwhile; ?>

      </ol>

    <?php endif; ?>

    <div class="cta">
      <a href="<?php echo get_permalink(7); ?>" class="button alert try"><svg class="icon-download"><use xlink:href="#icon-download"></use></svg> Essai gratuit</a>
      <span class="picto"><svg class="icon-timer"><use xlink:href="#icon-timer"></use></svg></span>
      <a data-open="presentation-video" class="button">Présentation vidéo</a>
    </div>

  </header>


  <section class="demonstration section">
    <div class="demonstration--wrapper">
      <div class="demonstration--column text-center">
       <?php if (get_field('demo_title')) : ?>
        <h2 class="demonstration--title">
          <?php the_field('demo_title'); ?><br>
          <span class="textcolor"><svg class="icon-arrow"><use xlink:href="#icon-arrow"></use></svg></span>
        </h2>
       <?php endif; ?>
      </div>
      <div class="demonstration--column">
      <?php

        $imagesdemo = get_field('demo_slider');

        if( $imagesdemo ): ?>
          <div class="owl-carousel no-bullet">
            <?php foreach( $imagesdemo as $image ): ?>

                <?php
                $alt = $image['alt'];
                $size = 'medium';
                $thumb = $image['sizes'][ $size ];
                ?>

                <div class="slides">
                    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
                    <p><?php echo $image['caption']; ?></p>
                </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </section>

  <?php get_template_part('partials/nav-secteurs'); ?>

  <section class="section step">
    <span class="picto"><svg class="icon-cog"><title>Les étapes</title><use xlink:href="#icon-cog"></use></svg></span>
    <?php if( have_rows('step_items') ): ?>

      <ol class="step--list">

      <?php while( have_rows('step_items') ): the_row();

        // vars
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $text = get_sub_field('texte');

        $alt = $image['alt'];
        $size = 'medium';
        $thumb = $image['sizes'][ $size ];

        ?>

        <li class="step--item">


            <p class="text-center"><img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" /></p>
            <p class="step--title"><?php echo $title; ?></p>
            <p><?php echo $text; ?></p>
            <svg class="icon-step"><use xlink:href="#icon-step"></use></svg>

        </li>

      <?php endwhile; ?>

      </ol>

    <?php endif; ?>

  </section>

  <section class="section help">
    <span class="picto"><svg class="icon-cog"><title>Les étapes</title><use xlink:href="#icon-cog"></use></svg></span>
    <div class="row">
      <div class="columns medium-6">
      <?php

        $helpmosaic = get_field('help_mosaic');

        if( $helpmosaic ): ?>
          <div class="images-grid">
            <?php foreach( $helpmosaic as $image ): ?>

                <?php
                  $alt = $image['alt'];
                  $size = 'medium';
                  $thumb = $image['sizes'][ $size ];
                ?>
                <div class="images-grid--item">
                    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
                </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>

      <div class="columns medium-6">
        <h2>Besoin d'aide pour réaliser vos plans ?</h2>
        <ul class="menu vertical">
          <li><a href="#"><svg class="icon-users"><use xlink:href="#icon-users"></use></svg>Accédez au forum</a></li>
          <li><a href="<?php echo get_permalink(11); ?>"><svg class="icon-tutos"><use xlink:href="#icon-tutos"></use></svg>Consultez les tutoriels</a></li>
          <li><a class="contactlink" href="<?php echo get_permalink(37); ?>"><svg class="icon-envelop"><use xlink:href="#icon-envelop"></use></svg>Contactez-nous</a></li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section why">
    <span class="picto"><svg class="icon-cog"><title>Les étapes</title><use xlink:href="#icon-cog"></use></svg></span>
    <h2 class="text-center">Pourquoi devriez-vous utiliser My Sketcher ?</h2>
    <div class="row">
      <div class="columns medium-6">
        <?php if( have_rows('arg-1') ): ?>

          <ul class="why--list">

          <?php while( have_rows('arg-1') ): the_row();

            // vars
            $item = get_sub_field('item');

            ?>
            <li class="why--item"><svg class="icon-check"><use xlink:href="#icon-check"></use></svg> <?php echo $item; ?></li>

          <?php endwhile; ?>

          </ul>

        <?php endif; ?>

      </div>
      <div class="columns medium-6">
        <?php if( have_rows('arg-2') ): ?>

          <ul class="why--list">

          <?php while( have_rows('arg-2') ): the_row();

            // vars
            $item = get_sub_field('item');

            ?>
            <li class="why--item"><svg class="icon-check"><use xlink:href="#icon-check"></use></svg> <?php echo $item; ?></li>

          <?php endwhile; ?>

          </ul>

        <?php endif; ?>

      </div>
    </div>
  </section>

  <div class="reveal" id="presentation-video" data-reveal>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/fewtMiz_BI4" frameborder="0" allowfullscreen></iframe>
  </div>
<?php endwhile; ?>
