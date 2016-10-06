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

