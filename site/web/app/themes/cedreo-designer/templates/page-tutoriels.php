<?php
/**
 * Template Name: Page tutoriels
 */
use Cocur\Slugify\Slugify;

$slugify = new Slugify();

?>

<?php while (have_posts()) : the_post(); ?>

  <div class="page-wrapper" >
    <div class="page-column page-contenu" id="page-contenu">
      <?php get_template_part('partials/content-page'); ?>
      <?php

        // check if the repeater field has rows of data
        if( have_rows('tutoriels') ): ?>


         <?php while ( have_rows('tutoriels') ) : the_row(); ?>

           <?php
              //vars
              $title = get_sub_field('title');
              $pdf = get_sub_field('pdf');
              $slugtitle = $slugify->slugify($title);
              $shortcode = '[gview file="'. $pdf . '" title="'. $title .'" save="1" cache="1"]';
            ?>
            <section class="tutoriel--container" id="<?php echo $slugtitle; ?>" data-magellan-target="<?php echo $slugtitle; ?>">
              <h2 class="tutoriel--title"><?php echo $title; ?></h2>
              <div class="tutoriel--contenu">
                <?php echo do_shortcode($shortcode); ?>
              </div>
            </section>
          <?php endwhile; ?>

      <?php endif; ?>

    </div>
    <div class="page-column sidebar" data-sticky-container>
      <nav class="tutoriels--navigation sticky" data-sticky data-anchor="page-contenu">
        <h2>Liste des tutoriaux</h2>
        <?php

        // check if the repeater field has rows of data
        if( have_rows('tutoriels') ):
          // vars
          $counter_menu = 0;

        ?>

        <ul class="tutoriel--navigation--list menu vertical" data-magellan>
         <?php while ( have_rows('tutoriels') ) : the_row(); ?>

            <?php
              //vars
              $title = get_sub_field('title');
              $slugtitle = $slugify->slugify($title);
            ?>

            <li class="tutoriel--navigation--item"><a class="tutoriel--navigation--link" href="#<?php echo $slugtitle; ?>"><?php echo $title; ?></a></li>

          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
      </nav>
    </div>

  </div>

<?php endwhile; ?>
