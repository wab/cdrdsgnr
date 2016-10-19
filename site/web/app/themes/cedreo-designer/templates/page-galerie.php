<?php
/**
 * Template Name: Galerie d'images
 */

$args = array(
    'post_type' => 'imgallery',
    'order' => 'ASC'
);

$terms = get_terms( 'gallerytag', array(
    'hide_empty' => 0
));
?>
<?php while (have_posts()) : the_post(); ?>

  <div class="page-wrapper">

        <div class="text-center">
            <h2 class="section--title"><span>Idées &amp; styles déco</span></h2>
            <?php get_template_part('partials/content-page'); ?>
        </div>

        <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ): ?>
            <nav class="gallery--filters">
                <button data-filter="*" class="gallery--filter button hollow is-checked">Tous</button>
                <?php foreach ( $terms as $term ) { ?>
                <button data-filter=".gallerytag-<?php echo $term->slug ?>" class="gallery--filter button hollow"><?php echo $term->name ?></button>
                    <?php } ?>
            </nav>
        <?php endif; ?>

        <?php
        // the query
        $the_query = new WP_Query( $args ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

            <!-- pagination here -->


            <ul class="gallery--items">

                <li class="grid-sizer"></li>

            <!-- the loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <li <?php post_class('gallery--item'); ?>>
                    <?php get_template_part('partials/excerpt-gallery'); ?>
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

<?php endwhile; ?>
