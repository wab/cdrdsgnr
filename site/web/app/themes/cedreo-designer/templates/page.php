<?php while (have_posts()) : the_post(); ?>

  <div class="page-wrapper" >

      <div class="page-column page-contenu" id="page-contenu">
        <?php get_template_part('partials/content-page'); ?>
      </div>
       <div class="page-column sidebar hide-for-large">
        <nav>
          <?= App\list_child_pages(); ?>
        </nav>
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

      <div class="rox">
        <div class="columns-large-6"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></div>
        <div class="columns-large-6">
         <h2 class="section--title"><?php echo $title; ?></h2>
          <?php echo $content; ?>
        </div>
      </div>

    </div>

  <?php endwhile; ?>

<?php endif; ?>

<?php endwhile; ?>
