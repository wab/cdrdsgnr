<?php
/**
 * Template Name: Page tutoriels
 */
use Cocur\Slugify\Slugify;

$slugify = new Slugify();

?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('partials/page-header'); ?>

  <div class="row">
    <div class="columns large-8">
      <?php get_template_part('partials/content-page'); ?>
      <?php

        // check if the repeater field has rows of data
        if( have_rows('tutoriels') ): ?>

        <section class="tutoriel--container">
         <?php while ( have_rows('tutoriels') ) : the_row(); ?>

           <?php
              //vars
              $title = get_sub_field('title');
              $slugtitle = $slugify->slugify($title);
            ?>
            <a name="<?php echo $slugtitle; ?>"></a>
            <h2 class="tutoriel--title"><?php echo $title; ?></h2>
            <div class="tutoriel--contenu">
              <?php the_sub_field('contenu'); ?>
            </div>

          <?php endwhile; ?>
        </section>
      <?php endif; ?>

    </div>
    <div class="columns large-4">
      <nav class="tutoriels--navigation">
        <h2>Liste des tutoriaux</h2>
        <?php

        // check if the repeater field has rows of data
        if( have_rows('tutoriels') ):
          // vars
          $counter_menu = 0;

        ?>

        <ul class="tutoriel--navigation--list">
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
