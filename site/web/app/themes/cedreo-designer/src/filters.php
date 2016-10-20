<?php namespace App;

use Roots\Sage\Template;
use Roots\Sage\Template\Wrapper;

/**
 * Determine which pages should NOT display the sidebar
 * @link https://codex.wordpress.org/Conditional_Tags
 */
add_filter('sage/display_sidebar', function ($display) {
    // The sidebar will NOT be displayed if ANY of the following return true
    return $display ? !in_array(true, [
        is_404(),
        is_page(),
        is_page_template('templates/template-custom.php'),
    ]) : $display;
});

/**
 * Add <body> classes
 */
add_filter('body_class', function (array $classes) {
    // Add page slug if it doesn't exist
    if (is_single() || is_page() && !is_front_page()) {
        if (!in_array(basename(get_permalink()), $classes)) {
            $classes[] = basename(get_permalink());
        }
    }

    // Add class if sidebar is active
    if (display_sidebar()) {
        $classes[] = 'sidebar-primary';
    }

    return $classes;
});

/**
 * Add "… Continued" to the excerpt
 */
add_filter('excerpt_more', function () {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
});

/**
 * Use theme wrapper
 */
add_filter('template_include', function ($main) {
    if (!is_string($main) && !(is_object($main) && method_exists($main, '__toString'))) {
        return $main;
    }
    return ((new Template(new Wrapper($main)))->layout());
}, 109);

/**
 * Default social images
 */
add_filter('the_seo_framework_og_image_args', function($args) {
    $args['image'] = home_url('/app/uploads/cedreo-og.png');

    return $args;
});


// Remove the SEO plugin credit/notice
add_filter('the_seo_framework_indicator', '__return_false');

// Remove toolset types front-end display meta box
add_filter('types_information_table', '__return_false');

// Defer
add_filter('script_loader_tag', function($tag, $handle) {
    // add script handles to the array below
   $scripts_to_defer = array('gmaps');

   foreach($scripts_to_defer as $defer_script) {
      if ($defer_script === $handle) {
         return str_replace(' src', ' defer="defer" src', $tag);
      }
   }
   return $tag;
}, 10, 2);

// Async
add_filter('script_loader_tag', function($tag, $handle) {
    // add script handles to the array below
   $scripts_to_async = array('gmaps');

   foreach($scripts_to_async as $async_script) {
      if ($async_script === $handle) {
         return str_replace(' src', ' async="async" src', $tag);
      }
   }
   return $tag;
}, 10, 2);
