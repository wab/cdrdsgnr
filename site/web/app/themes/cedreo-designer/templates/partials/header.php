<header class="banner">
  <div class="row column">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
      <svg>
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/images/svg/logo.svg#horizontal"></use>
      </svg>
    </a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
