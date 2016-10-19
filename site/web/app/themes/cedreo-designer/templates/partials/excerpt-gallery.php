<?php $image = get_field('image'); ?>
<div <?php post_class('gallery--item'); ?>>
  <article class="gallery--item--wrapper">
    <img class="gallery--item--thumb" src="<?php echo $image['sizes']['gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
    <div class="gallery--item--overlay">
      <div class="gallery--item--overlay--container">
          <h2><?php the_title(); ?></h2>
          <p><?php echo $image['caption']; ?></p>
          <button class="gallery--item--button" data-id="<?php the_ID(); ?>">ouvrir</button>
      </div>
    </div>
  </article>
</div>