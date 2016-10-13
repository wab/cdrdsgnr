<?php if (is_front_page()): ?>
  <header class="page-header text-center banner">
    <div class="wrapper">
      <h1 class="maintitle"><?php the_field('main-title'); ?></h1>
      <?php if (get_field('cta_link')): ?>
        <a href="<?php the_field('cta_link'); ?>" class="button large focus"><?php if (get_field('cta_intitule')) {the_field('cta_intitule');} else {echo 'Créer mon projet' ;} ?></a>
      <?php endif; ?>
    </div>
  </header>
<?php else:  ?>
  <header class="page-header text-center banner">
    <div class="wrapper">
      <h1><?= App\title(); ?></h1>
    </div>
  </header>
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display')):?>
    <div class="row column">
      <?php bcn_display(); ?>
    </div>
    <?php endif; ?>
  </div>
<?php endif; ?>

