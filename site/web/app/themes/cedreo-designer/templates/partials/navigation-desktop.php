<?php if (get_locale() == 'fr-FR') {$lg == 'fr';} else {$lg = 'en';} ?>
<nav class="main--navigation navigation-desktop show-for-large">
    <ul id="menu-navigation-principale" class="main--navigation--menu show-for-large horizontal menu">
      <?php if (has_nav_menu('features_navigation')) : ?>
      <li class="menu-item menu-parent menu-fonctionnalites">
        <a href="#" data-toggle="menu-features"><?php _e('Features', 'cedreo-designer') ?></a>
        <div class="dropdown-pane" id="menu-features" data-dropdown data-animate="slide-in-down slide-out-up" data-v-offset="0" data-auto-focus="false" data-hover="true" data-hover-pane="true">
          <?php wp_nav_menu(['theme_location' => 'features_navigation', 'menu_class' => 'submenu', 'depth' => 2]); ?>
        </div>
      </li>
      <?php endif; ?>

      <?php if (has_nav_menu('users_navigation')) : ?>
      <li class="menu-item menu-parent menu-users">
        <a href="#" data-toggle="menu-users"><?php _e('For businesses', 'cedreo-designer') ?></a>
        <div class="dropdown-pane" id="menu-users" data-dropdown data-animate="slide-in-down slide-out-up" data-v-offset="0" data-auto-focus="false" data-hover="true" data-hover-pane="true">
          <?php wp_nav_menu(['theme_location' => 'users_navigation', 'menu_class' => 'submenu', 'depth' => 2]); ?>
        </div>
      </li>
      <?php endif; ?>

      <li class="menu-item menu-galerie <?php if(is_page(9) || is_page(icl_object_id(9, 'page', false))) {echo 'active'; } ?>"><?php icl_link_to_element(9);  ?></li>
      <li class="menu-item menu-tarifs <?php if(is_page(15) || is_page(icl_object_id(15, 'page', false))) {echo 'active'; } ?>"><?php icl_link_to_element(15);  ?></li>
      <li class="menu-item menu-support <?php if(is_page(1024) || is_page(icl_object_id(1024, 'page', false))) {echo 'active'; } ?>"><?php icl_link_to_element(1024);  ?></li>
      <li class="menu-item menu-blog <?php if(is_home() || is_archive() || is_single() ) {echo 'active'; } ?>"><a href="<?php the_permalink(17); ?>"><?php echo get_the_title(17); ?></a></li>
      <li class="menu-item link-login">
        <a data-toggle="menu-login"><svg class="icon-users"><use xlink:href="#icon-users"></use></svg><?php _e('My account', 'cedreo-designer') ?></a>
        <div class="dropdown-pane bottom" id="menu-login" data-dropdown data-hover="true" data-hover-pane="true" data-v-offset="0">
          <ul class="sub-menu">
            <li class="menu-item">
              <svg class="icon-power"><use xlink:href="#icon-power"></use></svg>
              <a href="http://app.cedreo-designer.com/<?php echo $lg; ?>/login"><?php _e('Login', 'cedreo-designer') ?></a>
            </li>
            <li class="menu-item">
              <svg class="icon-key"><use xlink:href="#icon-key"></use></svg>
              <a href="http://app.cedreo-designer.com/<?php echo $lg; ?>/register"><?php _e('Register', 'cedreo-designer') ?></a>
            </li>
          </ul>
        </div>
      </li>
      <?php pll_the_languages(array('show_flags'=>1,'show_names'=>0, 'hide_current'=> 1));?>
    </ul>
</nav>