<?php

namespace App;

use WP_Query;

add_action( 'wp_ajax_load_more', __NAMESPACE__ . '\\load_more' );
add_action( 'wp_ajax_nopriv_load_more', __NAMESPACE__ . '\\load_more' );

function load_more() {

    global $post;

    $paged = $_POST['paged'];

    $args = array(
        'post_type' =>'imgallery',
        'paged' => $paged
    );

    $ajax_query = new WP_Query($args);

    $responses = [];

    if ( $ajax_query->have_posts() ) : while ( $ajax_query->have_posts() ) : $ajax_query->the_post();
      get_template_part('partials/excerpt-gallery');

    endwhile;
    endif;

    die();
}