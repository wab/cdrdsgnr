<?php

function foundation_pagination($arrows = true, $ends = true, $pages = 2) {
    if (is_singular()) return;

    global $wp_query, $paged;
    $pagination = '';

    $max_page = $wp_query->max_num_pages;
    if ($max_page == 1) return;
    if (empty($paged)) $paged = 1;

    if ($arrows) $pagination .= foundation_pagination_link($paged - 1, 'pagination-previous' . (($paged <= 1) ? ' disabled' : ''), 'Previous', 'Previous Page', (($paged <= 1) ? 'true' : ''));
    if ($ends && $paged > $pages + 1) $pagination .= foundation_pagination_link(1);
    if ($ends && $paged > $pages + 2) $pagination .= foundation_pagination_link(1, 'ellipsis', '&hellip;', '', 'true');
    for ($i = $paged - $pages; $i <= $paged + $pages; $i++) {
        if ($i > 0 && $i <= $max_page)
            $pagination .= foundation_pagination_link($i, ($i == $paged) ? 'current' : '');
    }
    if ($ends && $paged < $max_page - $pages - 1) $pagination .= foundation_pagination_link($max_page, 'ellipsis', '', '','true');
    if ($ends && $paged < $max_page - $pages) $pagination .= foundation_pagination_link($max_page);

    if ($arrows) $pagination .= foundation_pagination_link($paged + 1, 'pagination-next' . (($paged >= $max_page) ? ' disabled' : ''), 'Next', 'Next Page', (($paged >= $max_page) ? 'true' : ''));

    $pagination = '<ul class="pagination text-right" role="navigation" aria-label="Pagination">' . $pagination . '</ul>';
    echo $pagination;
}

function foundation_pagination_link($page, $class = '', $content = '', $title = '', $aria = '') {
    $href = (strrpos($class, 'unavailable') === false && strrpos($class, 'current') === false) ? get_pagenum_link($page) : "#";
    if ($class == 'ellipsis') {
        $class = empty($class) ? $class : " class=\"$class\"";
        return "<li $class></li>\n";
    } elseif (strpos($class, 'disabled') !== false) {
        $class = empty($class) ? $class : " class=\"$class\"";
        $aria = empty($aria) ? $aria : " aria-disabled=\"$aria\"";
        $content = !empty($content) ? $content : $page;
        return "<li $class>$content</li>\n";
    } elseif (strpos($class, 'current') !== false) {
        $class = empty($class) ? $class : " class=\"$class\"";
        $content = !empty($content) ? $content : $page;
        return "<li class='current'><span class='show-for-sr'>You're on page</span>$content</li>\n";
    } else {
        $aria = empty($aria) ? $aria : " aria-disabled=\"$aria\"";
        $class = empty($class) ? $class : " class=\"$class\"";
        $content = !empty($content) ? $content : $page;
        $title = !empty($title) ? $title : 'Page ' . $page;
        return "<li $class $aria><a href=\"$href\" title=\"$title\">$content</a></li>\n";
    }

}
