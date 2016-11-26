<?php
/**
 * Template Name: Galerie d'images
 */

$current_language = pll_current_language();

$args = array(
    'post_type' => 'imgallery',
    'order' => 'ASC',
    'lang' => $current_language,
    'posts_per_page'=> -1
);

$terms = get_terms( 'gallerytag', array(
    'hide_empty' => true,
    'taxonomy' => 'gallerytag'
));
?>
<?php while (have_posts()) : the_post(); ?>

  <div class="page-wrapper">

    <div class="columns">

        <div class="text-center">
        <?php if(get_field('subtitle')):  ?>
            <h2 class="section--title"><span><?php the_field('subtitle'); ?></span></h2>
        <?php endif; ?>
            <?php get_template_part('partials/content-page'); ?>
        </div>

        <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ): ?>
            <nav class="gallery--filters">
                <button data-filter="*" class="gallery--filter is-checked"><?php _e('all', 'cedreo-designer'); ?></button>
                <?php foreach ( $terms as $term ) { ?>
                    <button data-filter=".gallerytag-<?php echo $term->slug ?>" class="gallery--filter"><?php echo $term->name ?></button>
                <?php } ?>
            </nav>
        <?php endif; ?>

        <?php
        // the query
        $the_query = new WP_Query( $args ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

            <!-- pagination here -->


            <div class="gallery--items" id="gallery">

                <div class="grid-sizer"></div>

                <!-- the loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?php get_template_part('partials/excerpt-gallery'); ?>
                <?php endwhile; ?>
                <!-- end of the loop -->

            <!-- pagination here -->
            </div>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php _e('Sorry, no results were found.', 'sage'); ?></p>
        <?php endif; ?>


           <!--  <p class="text-center">
                <button class="load-more button secondary large hollow"><?php _e('see more', 'cerdeo-designer'); ?></button>
            </p> -->

        </div>


    </div>

<?php endwhile; ?>
