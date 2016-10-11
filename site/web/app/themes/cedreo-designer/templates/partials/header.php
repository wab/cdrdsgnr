<header class="mainheader">
  <div class="mainheader--wrapper">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
      <?php get_template_part('partials/logo'); ?>
    </a>
    <?php get_template_part('partials/navigation-desktop') ?>
    <?php get_template_part('partials/navigation-mobile') ?>
  </div>
</header>
