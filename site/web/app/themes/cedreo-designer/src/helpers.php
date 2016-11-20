<?php

namespace App;

use Roots\Sage\Asset;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template;

function template($layout = 'base')
{
    return Template::$instances[$layout];
}

function template_part($template, array $context = [], $layout = 'base')
{
    extract($context);
    include template($layout)->partial($template);
}

/**
 * @param $filename
 * @return string
 */
function asset_path($filename)
{
    static $manifest;
    isset($manifest) || $manifest = new JsonManifest(get_stylesheet_directory() . '/' . Asset::$dist . '/assets.json');
    return (string) new Asset($filename, $manifest);
}

/**
 * Determine whether to show the sidebar
 * @return bool
 */
function display_sidebar()
{
    static $display;
    isset($display) || $display = apply_filters('sage/display_sidebar', true);
    return $display;
}

/**
 * Page titles
 * @return string
 */
function title()
{
    if (is_home()) {
        if ($home = get_option('page_for_posts', true)) {
            return get_the_title($home);
        }
        return __('Latest Posts', 'sage');
    }
    if (is_archive()) {
        return get_the_archive_title();
    }
    if (is_search()) {
        return sprintf(__('Search Results for %s', 'sage'), get_search_query());
    }
    if (is_404()) {
        return __('Not Found', 'sage');
    }
    return get_the_title();
}

function list_child_pages() {

    global $post;

    $pageID = $post->ID;

    $ancestors = get_post_ancestors($pageID);
    $parent = wp_get_post_parent_id($pageID);

    if( empty($post->post_parent) ) {
        $parent = $post->ID;
    } else {
        $parent = end($ancestors);
    }
    $children = wp_list_pages(array(
        'child_of' => $pageID,
        'echo' => '0',
        'title_li' => '',
        'orderby' => 'menu_order'
    ));

    if ($children) {
        return '<p><strong>' . _e('More details ?', 'cedreo-designer') . '</strong></p><ul class="menu vertical">'.$children.'</ul>';
    }

}

/* easy excerpt limitation
*/
function easy_excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt);
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt) . ' [&hellip;]';
    return $excerpt;
}
