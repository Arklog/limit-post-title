<?php

/**
 * Plugin Name: Limit post title
 * Description: This plugin limit the blog post title word count
 */


function lpt_filter_title($title)
{

    $len = 33; //the maximun number of characters to display
    $trail = "..."; //trailing characters

    if (strlen($title) > $len && !is_single())
        return substr($title, 0, $len) . $trail;
    return $title;
}
add_filter('the_title', 'lpt_filter_title', 10, 1);
