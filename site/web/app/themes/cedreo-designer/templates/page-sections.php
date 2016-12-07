<?php
/**
 * Template Name: Page avec sections
 */

while (have_posts()) : the_post(); ?>

  <div class="row">

    <div class="columns large-8">
      <div class="page-wrapper">
        <?php get_template_part('partials/content-page'); ?>
      </div>

    </div>


  </div>

  <?php if( have_rows('section') ): ?>

  <?php while( have_rows('section') ): the_row();

    // vars
    $image = get_sub_field('image');
    $content = get_sub_field('content');
    $title = get_sub_field('title');

    ?>

    <div class="section">

      <div class="row">

        <div class="columns <?php if( !empty($image) ) { echo 'large-6';} else {echo 'large-8';} ?>">
         <h2 class="section--title"><span><?php echo $title; ?></span></h2>
          <?php echo $content; ?>
        </div>
        <?php if( !empty($image) ): ?>
          <div class="columns large-6"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></div>
        <?php endif; ?>

      </div>

    </div>

  <?php endwhile; ?>

<?php endif; ?>

<?php endwhile; ?>
