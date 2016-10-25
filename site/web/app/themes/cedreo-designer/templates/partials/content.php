<article <?php post_class('excerpt'); ?>>
  <header class="entry--header">
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php get_template_part('partials/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php if( has_post_thumbnail() ) {the_post_thumbnail('thumbnail', array( 'class' => 'alignright' )); } ?>
    <?php the_excerpt(); ?>
  </div>
  <div class="tags">
    <?php the_tags( '<svg class="icon-tag"><use xlink:href="#icon-tag"></use></svg> ', ' • ', '<br />' ); ?>
  </div>
</article>
