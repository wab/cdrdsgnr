<footer class="mainfooter">
  <div class="widget--area scrollreveal">
    <div class="widget">
      <h3 class="widget--title"><?php bloginfo('title'); ?></h3>
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

    <div class="widget">
      <h3 class="widget--title">Derniers Articles</h3>
      <?php
      // the query
      $lastposts = new WP_Query( array('post_type' => 'post', 'posts_per_page' => '3') ); ?>

      <?php if ( $lastposts->have_posts() ) : ?>

        <!-- pagination here -->

        <ul class="no-bullet">

        <!-- the loop -->
        <?php while ( $lastposts->have_posts() ) : $lastposts->the_post(); ?>
          <li>
            <strong class="textcolor"><?php the_date(); ?></strong>
            <?php the_excerpt(); ?>
          </li>
        <?php endwhile; ?>
        <!-- end of the loop -->

        <!-- pagination here -->
        </ul>

        <?php wp_reset_postdata(); ?>

      <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>

    </div>
    <div class="widget">
      <h3 class="widget--title">Derniers Tweets</h3>
    </div>

    <div class="widget">
      <h3 class="widget--title">Suivez-nous sur</h3>
      <ul class="reseaux--list no-bullet">
        <li class="reseaux--item"><a class="reseaux--link" href="#"><svg class="icon icon-download"><use xlink:href="#icon-twitter"></use></svg></a></li>
        <li class="reseaux--item"><a class="reseaux--link" href="#"><svg class="icon icon-download"><use xlink:href="#icon-facebook"></use></svg></a></li>
        <li class="reseaux--item"><a class="reseaux--link" href="#"><svg class="icon icon-download"><use xlink:href="#icon-google-plus"></use></svg></a></li>
        <li class="reseaux--item"><a class="reseaux--link" href="#"><svg class="icon icon-download"><use xlink:href="#icon-youtube-play"></use></svg></a></li>
        <li class="reseaux--item"><a class="reseaux--link" href="#"><svg class="icon icon-download"><use xlink:href="#icon-pinterest"></use></svg></a></li>
      </ul>
    </div>
  </div>
  <div class="ours text-center">
    <div class="row column">
      <a href="#">Conditions d'utilisation</a> - <a href="#">Mentions légales</a> - &copy; copyright <?php echo date("Y") ?> <?php bloginfo('title') ?>
    </div>
  </div>
</footer>
