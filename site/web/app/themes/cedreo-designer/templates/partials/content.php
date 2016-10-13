<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php get_template_part('partials/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php if( has_post_thumbnail() ) {the_post_thumbnail('thumbnail', array( 'class' => 'alignleft' )); } ?>
    <?php the_excerpt(); ?>
  </div>
</article>
