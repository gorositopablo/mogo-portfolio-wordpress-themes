<?php

add_action('wp_head', '_action_xs_hook_css', 100);

function _action_xs_hook_css() {
    if (defined('FW')) {
        $hero_heading = mogo_get_option('general_posts_header');
        $hero_overlay = $hero_heading['header_overlay_color'];
        $mogo_page_hero_heading = mogo_get_option('general_page_header');
        $page_hero_overlay = $mogo_page_hero_heading['header_overlay_color'];


        $blog_hero = $hero_heading['header_image'] != '' ? $hero_heading['header_image']['url'] : ARCHER_IMAGES . '/exman.jpg';
        $page_hero = $mogo_page_hero_heading['header_image'] != '' ? $mogo_page_hero_heading['header_image']['url'] : ARCHER_IMAGES . '/exman.jpg';

        $custom_css = mogo_get_option('custom_css');
        $output = "<style type='text/css'>"
                . ".blog-hero-bg {background: url($blog_hero) no-repeat center center fixed;-moz-background-size:cover;-moz-background-size:cover;-webkit-background-size:cover;-o-background-size:cover;background-size:cover;width:100%;overflow: hidden;}"
                . ".page-hero-bg {background: url($page_hero) no-repeat center center fixed;-moz-background-size:cover;-moz-background-size:cover;-webkit-background-size:cover;-o-background-size:cover;background-size:cover;width:100%;overflow: hidden;}"
                . ".blog-hero {background: $hero_overlay;width: 100%;} .page-hero {background: $page_hero_overlay;width: 100%;} .colorsbg, .separator, .separator-left, .separator {background: $main_color;}"
                . "$custom_css"
                . "</style>";
        echo $output;
    }
}
