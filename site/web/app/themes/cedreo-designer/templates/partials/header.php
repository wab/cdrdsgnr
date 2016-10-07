<header class="mainheader">
  <div class="mainheader--wrapper">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
      <?php get_template_part('partials/logo'); ?>
    </a>
    <nav class="main--navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'main--navigation--menu dropdown vertical medium-horizontal menu']);
        endif;
      ?>
    </nav>
  </div>
</header>

