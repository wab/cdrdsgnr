<?php $image = get_field('image'); ?>
<article class="gallery--item--wrapper">
  <img class="gallery--item--thumb" src="<?php echo $image['sizes']['gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
  <div class="gallery--item--overlay" href="<?php echo $image['url']; ?>">
    <div class="gallery--item--overlay--container">
        <h2><?php the_title(); ?></h2>
        <p><?php echo $image['caption']; ?></p>
    </div>
  </div>
</article>