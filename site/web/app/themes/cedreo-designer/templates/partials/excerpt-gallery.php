<?php $image = get_field('image');
$terms = wp_get_object_terms( $post->ID,  'gallerytag' );
?>

<div <?php post_class('gallery--item'); ?>>
  <article class="gallery--item--wrapper">
    <img class="gallery--item--thumb" src="<?php echo $image['sizes']['gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
    <button class="gallery--item--overlay" data-src="<?php echo $image['url']; ?>" data-sub-html=".gallery--item--caption" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1" data-facebook-share-url="facebook-share.html" data-twitter-share-url="twitter-share.html" data-googleplus-share-url="googleplus-share.html" data-pinterest-share-url="pinterest-share.html">
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
        <?php the_content(); ?>
      </div>
    </button>
  </article>
</div>
