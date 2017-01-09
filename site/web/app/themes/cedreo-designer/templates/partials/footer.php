<footer class="mainfooter">
  <div class="widget--area">
    <div class="widget">
      <p class="widget--title"><?php bloginfo('title'); ?></p>
      <nav class="nav-footer scrollreveal">
        <ul class="no-bullet nav-footer--menu">
          <li class="nav-footer--item"><svg class="icon icon-info"><use xlink:href="#icon-info"></use></svg><?php icl_link_to_element(262);  ?></li>
          <li class="nav-footer--item"><svg class="icon icon-tutos"><use xlink:href="#icon-tutos"></use></svg> <?php icl_link_to_element(11);  ?></li>
          <li class="nav-footer--item"><svg class="icon icon-users"><use xlink:href="#icon-users"></use></svg><?php icl_link_to_element(1024);  ?></li>
          <li class="nav-footer--item"><svg class="icon icon-star"><use xlink:href="#icon-star"></use></svg><?php icl_link_to_element(35);  ?></li>
          <li class="nav-footer--item"><svg class="icon icon-envelop"><use xlink:href="#icon-envelop"></use></svg><?php icl_link_to_element(37);  ?></li>
        </ul>
      </nav>
    </div>

    <div class="widget">
      <p class="widget--title"><?php _e('Recent posts', 'cedreo-designer'); ?></p>
      <?php
      // the query
      $lastposts = new WP_Query( array('post_type' => 'post', 'posts_per_page' => '2') ); ?>

      <?php if ( $lastposts->have_posts() ) : ?>

        <!-- pagination here -->

        <ul class="no-bullet">

        <!-- the loop -->
        <?php while ( $lastposts->have_posts() ) : $lastposts->the_post(); ?>
          <li class="scrollreveal widget--item">
            <strong class="textcolor"><?php the_date(); ?></strong>
            <p class="post--title"><?php the_title(); ?></p>
            <?= App\easy_excerpt(20); ?><br>
            <a href="<?php the_permalink(); ?>">&rarr; <?php _e('Read', 'cedreo-designer'); ?></a>
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
      <p class="widget--title"><?php _e('Recent tweets', 'cedreo-designer'); ?></p>
    </div>

    <div class="widget">
      <p class="widget--title"><?php _e('Follow us', 'cedreo-designer'); ?></p>
      <ul class="reseaux--list no-bullet scrollreveal">
        <li class="reseaux--item"><button class="reseaux--link" onclick="window.location.href='https://twitter.com/mysketcher'"><svg class="icon-twitter"><use xlink:href="#icon-twitter"></use></svg></button></li>
        <li class="reseaux--item"><button class="reseaux--link" onclick="window.location.href='https://www.facebook.com/My-Sketcher-1548463242070456'"><svg class="icon-facebook"><use xlink:href="#icon-facebook"></use></svg></button></li>
        <li class="reseaux--item"><button class="reseaux--link" onclick="window.location.href='https://plus.google.com/118015676047486854511'"><svg class="icon-google-plus"><use xlink:href="#icon-google-plus"></use></svg></button></li>
        <li class="reseaux--item"><button class="reseaux--link" onclick="window.location.href='https://www.youtube.com/user/MrMySketcher'"><svg class="icon-youtube-play"><use xlink:href="#icon-youtube-play"></use></svg></button></li>
        <li class="reseaux--item"><button class="reseaux--link" onclick="window.location.href='https://fr.pinterest.com/mysketcher/'"><svg class="icon-pinterest"><use xlink:href="#icon-pinterest"></use></svg></button></li>
      </ul>
    </div>
  </div>
  <div class="ours text-center">
    <div class="row column">
      <div class="scrollreveal">
       <?php icl_link_to_element(382);  ?> - <?php icl_link_to_element(385);  ?> - &copy; copyright <?php echo date("Y") ?> Cedreo Interactive
      </div>
    </div>
  </div>
</footer>
