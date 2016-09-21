<footer class="mainfooter">
  <div class="widget--area">
    <div class="widget">
      <h3>My Sketcher</h3>
      <nav class="nav-footer">
        <ul class="no-bullet nav-footer--menu">
          <li class="nav-footer--item"><svg class="icon icon-info"><use xlink:href="#icon-info"></use></svg> <a class="nav-footer--link" href="<?php bloginfo('url'); ?>/qui-sommes-nous">Qui sommes-nous ?</a></li>
          <li class="nav-footer--item"><svg class="icon icon-tutos"><use xlink:href="#icon-tutos"></use></svg> <a class="nav-footer--link" href="<?php bloginfo('url'); ?>/tutoriels">Tutoriels</a></li>
          <li class="nav-footer--item"><svg class="icon icon-users"><use xlink:href="#icon-users"></use></svg> <a class="nav-footer--link" href="">Forum</a></li>
          <li class="nav-footer--item"><svg class="icon icon-star"><use xlink:href="#icon-star"></use></svg> <a class="nav-footer--link" href="<?php bloginfo('url'); ?>/partenaires">Devenez partenaires</a></li>
          <li class="nav-footer--item"><svg class="icon icon-envelop"><use xlink:href="#icon-envelop"></use></svg> <a class="nav-footer--link" href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
        </ul>
      </nav>
    </div>
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
  <div class="ours text-center">
    <p><a href="#">Conditions d'utilisation</a> - <a href="#">Mentions légales</a> - &copy; Copyright 2016 Mysketcher</p>
    <ul class="reseaux--list no-bullet">
      <li class="reseaux--item"><a class="reseaux--link" href="#"><svg class="icon icon-download"><use xlink:href="#icon-twitter"></use></svg></a></li>
      <li class="reseaux--item"><a class="reseaux--link" href="#"><svg class="icon icon-download"><use xlink:href="#icon-facebook"></use></svg></a></li>
      <li class="reseaux--item"><a class="reseaux--link" href="#"><svg class="icon icon-download"><use xlink:href="#icon-google-plus"></use></svg></a></li>
      <li class="reseaux--item"><a class="reseaux--link" href="#"><svg class="icon icon-download"><use xlink:href="#icon-youtube-play"></use></svg></a></li>
      <li class="reseaux--item"><a class="reseaux--link" href="#"><svg class="icon icon-download"><use xlink:href="#icon-pinterest"></use></svg></a></li>
    </ul>
  </div>
</footer>

<?php get_template_part('partials/icons'); ?>
