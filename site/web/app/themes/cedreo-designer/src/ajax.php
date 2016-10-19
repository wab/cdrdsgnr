<?php

namespace App;

use WP_Query;

// Ajax Load full image gallery
add_action( 'wp_ajax_imgLoad', __NAMESPACE__ . '\\imgLoad' );
add_action( 'wp_ajax_nopriv_imgLoad', __NAMESPACE__ . '\\imgLoad' );

function imgLoad() {

    $imageId = $_POST['imageId'];

    $args = array(
      'post_type' =>'imgallery',
      'p' => $imageId
    );

    $ajax_query = new WP_Query($args);

    if ( $ajax_query->have_posts() ) : while ( $ajax_query->have_posts() ) : $ajax_query->the_post();
      get_template_part('partials/single-gallery');

    endwhile;
    endif;

    die();
}

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

    if ( $ajax_query->have_posts() ) : while ( $ajax_query->have_posts() ) : $ajax_query->the_post();
      get_template_part('partials/excerpt-gallery');
      echo '[/]';

    endwhile;
    endif;

    die();
}