<nav class="main--navigation navigation-desktop show-for-large">
  <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'main--navigation--menu dropdown show-for-large horizontal menu']);
    endif;
  ?>
</nav>