<header class="page-header text-center banner">
  <div class="wrapper">
    <h1><?= App\title(); ?></h1>
    <?php if(function_exists('bcn_display')):?>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
      <?php bcn_display(); ?>
    </div>
    <?php endif; ?>
  </div>
</header>
