<header class="mainheader">
<!--     <div class="title-bar" data-responsive-toggle="navigation-principale" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle></button>
      <div class="title-bar-title"><?php bloginfo('name'); ?></div>
    </div> -->

    <div class="top-bar" id="navigation-principale">
      <div class="top-bar-left show-for-medium">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>">
          <img class="logo" src="<?php echo get_template_directory_uri(); ?>/dist/images/cedreo-designer.svg" alt="Cedreo Designer">
        </a>
      </div>
      <nav class="top-bar-right nav-primary">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'vertical medium-horizontal menu']);
          endif;
        ?>
      </nav>
    </div>
</header>

