<nav class="main--navigation navigation-desktop show-for-large">
    <ul id="menu-navigation-principale" class="main--navigation--menu show-for-large horizontal menu">
      <?php if (has_nav_menu('features_navigation')) : ?>
      <li class="menu-item menu-item-has-children menu-fonctionnalites">
        <a href="#" data-toggle="menu-features"><?php echo __('Fonctionnalités', 'cedreo-designer') ?></a>
        <div class="dropdown-pane" id="menu-features" data-dropdown data-animate="slide-in-down slide-out-up" data-v-offset="0" data-auto-focus="false" data-hover="true" data-hover-pane="true">
          <?php wp_nav_menu(['theme_location' => 'features_navigation', 'menu_class' => 'submenu', 'depth' => 2]); ?>
        </div>
      </li>
      <?php endif; ?>

      <?php if (has_nav_menu('users_navigation')) : ?>
      <li class="menu-item menu-item-has-children menu-fonctionnalites">
        <a href="#" data-toggle="menu-users"><?php echo __('Pour qui ?', 'cedreo-designer') ?></a>
        <div class="dropdown-pane" id="menu-users" data-dropdown data-animate="slide-in-down slide-out-up" data-v-offset="0" data-auto-focus="false" data-hover="true" data-hover-pane="true">
          <?php wp_nav_menu(['theme_location' => 'users_navigation', 'menu_class' => 'sub-menu', 'depth' => 2]); ?>
        </div>
      </li>
      <?php endif; ?>

      <li class="menu-item menu-galerie"><a href="<?php echo get_permalink(9); ?>"><?php echo get_the_title(9); ?></a></li>
      <li class="menu-item menu-tarifs"><a href="<?php echo get_permalink(15); ?>"><?php echo get_the_title(15); ?></a></li>
      <li class="menu-item menu-support"><a href="http://help.cedreo-designer.com"><?php echo __('Support', 'cedreo') ?></a></li>
      <li class="menu-item menu-blog"><a href="<?php echo get_permalink(17); ?>"><?php echo get_the_title(17); ?></a></li>
      <li class="link-login menu-item menu-connexion"><a href="http://app.cedreo-designer.com/fr/login"><?php echo __('Connexion', 'cedreo') ?></a></li>
      <?php pll_the_languages(array('show_flags'=>1,'show_names'=>0, 'hide_current'=> 1));?>
    </ul>
</nav>