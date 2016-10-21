<nav class="main--navigation navigation-desktop show-for-large">
    <ul id="menu-navigation-principale" class="main--navigation--menu show-for-large horizontal menu">
      <li class="menu-item menu-item-has-children menu-fonctionnalites">
        <a href="#" data-toggle="menu-features">Fonctionnalités</a>
        <div class="dropdown-pane" id="menu-features" data-dropdown data-auto-focus="true" data-hover="true" data-hover-pane="true">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione eveniet culpa exercitationem voluptas incidunt consectetur minus, aliquid perspiciatis beatae cum aut, molestias id laudantium, deleniti nam quidem velit delectus cumque?
        </div>
      </li>
      <li class="menu-item menu-item-has-children menu-pour-qui">
        <a href="#" data-toggle="menu-users">Pour qui</a>
        <div class="dropdown-pane" id="menu-users" data-dropdown data-auto-focus="true" data-hover="true" data-hover-pane="true">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione eveniet culpa exercitationem voluptas incidunt consectetur minus, aliquid perspiciatis beatae cum aut, molestias id laudantium, deleniti nam quidem velit delectus cumque?
        </div>
      </li>
      <li class="menu-item menu-galerie"><a href="<?php echo get_permalink(9); ?>"><?php echo get_the_title(9); ?></a></li>
      <li class="menu-item menu-tarifs"><a href="<?php echo get_permalink(15); ?>"><?php echo get_the_title(15); ?></a></li>
      <li class="menu-item menu-support"><a href="http://help.cedreo-designer.com"><?php echo __('Support', 'cedreo') ?></a></li>
      <li class="menu-item menu-blog"><a href="<?php echo get_permalink(17); ?>"><?php echo get_the_title(17); ?></a></li>
      <li class="link-login menu-item menu-connexion"><a href="http://app.cedreo-designer.com/fr/login"><?php echo __('Connexion', 'cedreo') ?></a></li>
      <?php pll_the_languages(array('show_flags'=>1,'show_names'=>0, 'hide_current'=> 1));?>
    </ul>
</nav>