<nav class="main--navigation navigation-desktop show-for-large">
    <ul id="menu-navigation-principale" class="main--navigation--menu show-for-large horizontal menu">
      <?php if (has_nav_menu('features_navigation')) : ?>
      <li class="menu-item menu-parent menu-fonctionnalites">
        <a href="#" data-toggle="menu-features"><?php echo __('Fonctionnalités', 'cedreo-designer') ?></a>
        <div class="dropdown-pane" id="menu-features" data-dropdown data-animate="slide-in-down slide-out-up" data-v-offset="0" data-auto-focus="false" data-hover="true" data-hover-pane="true">
          <?php wp_nav_menu(['theme_location' => 'features_navigation', 'menu_class' => 'submenu', 'depth' => 2]); ?>
        </div>
      </li>
      <?php endif; ?>

      <?php if (has_nav_menu('users_navigation')) : ?>
      <li class="menu-item menu-parent menu-users">
        <a href="#" data-toggle="menu-users"><?php echo __('Pour qui ?', 'cedreo-designer') ?></a>
        <div class="dropdown-pane" id="menu-users" data-dropdown data-animate="slide-in-down slide-out-up" data-v-offset="0" data-auto-focus="false" data-hover="true" data-hover-pane="true">
          <?php wp_nav_menu(['theme_location' => 'users_navigation', 'menu_class' => 'submenu', 'depth' => 2]); ?>
        </div>
      </li>
      <?php endif; ?>

      <li class="menu-item menu-galerie <?php if(is_page(9)) {echo 'active'; } ?>"><a href="<?php the_permalink(9); ?>"><?php echo get_the_title(9); ?></a></li>
      <li class="menu-item menu-tarifs <?php if(is_page(15)) {echo 'active'; } ?>"><a href="<?php the_permalink(15); ?>"><?php echo get_the_title(15); ?></a></li>
      <li class="menu-item menu-support <?php if(is_page(1024)) {echo 'active'; } ?>"><a href="<?php the_permalink(1024); ?>"><?php echo __('Support', 'cedreo') ?></a></li>
      <li class="menu-item menu-blog <?php if(is_home() || is_archive() || is_single() ) {echo 'active'; } ?>"><a href="<?php the_permalink(17); ?>"><?php echo get_the_title(17); ?></a></li>
      <li class="menu-item link-login">
        <a data-toggle="menu-login"><svg class="icon-users"><use xlink:href="#icon-users"></use></svg><?php echo __('Mon Compte', 'cedreo') ?></a>
        <div class="dropdown-pane bottom" id="menu-login" data-dropdown data-hover="true" data-hover-pane="true" data-v-offset="0">
          <ul class="sub-menu">
            <li class="menu-item">
              <svg class="icon-power"><use xlink:href="#icon-power"></use></svg>
              <a href="http://app.cedreo-designer.com/fr/login">Se connecter</a>
            </li>
            <li class="menu-item">
              <svg class="icon-key"><use xlink:href="#icon-key"></use></svg>
              <a href="http://app.cedreo-designer.com/fr/register">S'inscrire</a>
            </li>
          </ul>
        </div>
      </li>
      <?php pll_the_languages(array('show_flags'=>1,'show_names'=>0, 'hide_current'=> 1));?>
    </ul>
</nav>