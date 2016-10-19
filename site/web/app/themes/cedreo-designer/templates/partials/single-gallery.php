<div class="inner row columns text-center">
  <?php $image = get_field('image'); ?>
  <h2><?php the_title(); ?></h2>
  <div class="gallery--item--full">
    <img class="" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
  </div>
  <div class="gallery--item--desc">
    <?php the_content(); ?>
  </div>
</div>
