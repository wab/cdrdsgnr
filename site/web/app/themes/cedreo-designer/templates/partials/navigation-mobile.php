<nav class="hide-for-large menu-wrapper">
  <div class="menumobile">
    <span class="menu-circle"></span>
    <button class="menu-link">
      <span class="menu-icon">
        <span class="menu-line menu-line-1"></span>
        <span class="menu-line menu-line-2"></span>
        <span class="menu-line menu-line-3"></span>
      </span>
    </button>
  </div>
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu-overlay vertical menu', 'depth' => 1]);
      endif;
    ?>
</nav>
