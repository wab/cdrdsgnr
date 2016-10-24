<?php
$image = get_field('image');
$terms = wp_get_object_terms( $post->ID,  'gallerytag' );
?>

<div <?php post_class('gallery--item'); ?>>
  <article class="gallery--item--wrapper">
    <img class="gallery--item--thumb" src="<?php echo $image['sizes']['gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
    <button class="gallery--item--overlay" data-src="<?php echo $image['url']; ?>" data-sub-html="<?php the_content(); ?>" data-pinterest-text="<?php the_title(); ?> - image produite avec <?php bloginfo('title'); ?>" data-tweet-text="<?php the_title(); ?> - image produite avec <?php bloginfo('title'); ?>" data-facebook-share-url="<?php bloginfo("url") ?><?php echo $image['url']; ?>" data-twitter-share-url="<?php bloginfo("url") ?><?php echo $image['url']; ?>" data-googleplus-share-url="<?php bloginfo("url") ?><?php echo $image['url']; ?>" data-pinterest-share-url="<?php bloginfo("url") ?><?php echo $image['url']; ?>">
      <div class="gallery--item--overlay--container text-center">
          <h2><?php the_title(); ?></h2>
          <?php
            if ( ! empty( $terms ) ) {
              if ( ! is_wp_error( $terms ) ) {
                echo '<ul class="gallery--terms">';
                  foreach( $terms as $term ) {
                    echo '<li class="gallery--term">' . esc_html( $term->name ) . '</li>';
                  }
                echo '</ul>';
              }
            }
          ?>
          <span class="gallery--item--button"><svg class="icon-search"><use xlink:href="#icon-search"></use></svg></span>
      </div>
      <div class="gallery--item--caption">

      </div>
    </button>
  </article>
</div>
