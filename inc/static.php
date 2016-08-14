<?php

if (!defined('ABSPATH'))
    die('Direct access forbidden.');
/**
 * Enqueue all theme scripts and styles
 *

  /** --------------------------------------
 * ** REGISTERING THEME ASSETS
 * ** ------------------------------------ */
/**
 * Enqueue styles.
 */
if (!is_admin()) {
    wp_enqueue_style('bt-bootstrap.min', MOGO_CSS . '/bootstrap.min.css', null, MOGO_VERSION);
    wp_enqueue_style('bt_admin', MOGO_CSS . '/bt_admin.css', null, MOGO_VERSION);
    wp_enqueue_style('bt_main', MOGO_CSS . '/bt_main.css', null, MOGO_VERSION);
    wp_enqueue_style('bt-fonticons', MOGO_CSS . '/fonticons.css', null, MOGO_VERSION);
    wp_enqueue_style('bt-fonts', MOGO_CSS . '/fonts.css', null, MOGO_VERSION);
    wp_enqueue_style('bt-plugins', MOGO_CSS . '/plugins.css', null, MOGO_VERSION);
    wp_enqueue_style('bt-blog', MOGO_CSS . '/blog.css', null, MOGO_VERSION);

    wp_enqueue_style('bt-style', MOGO_CSS . '/style.css', null, MOGO_VERSION);
    wp_enqueue_style('bt-responsive', MOGO_CSS . '/responsive.css', null, MOGO_VERSION);
}




/**
 * Enqueue scripts.
 */
if (!is_admin()) {
    // wp_enqueue_script() syntax, $handle, $src, $deps, $version, $in_footer(boolean)
    // load wordpress jquery
    wp_enqueue_script('jquery');

    wp_enqueue_script('bt-bootstrap.min.js', MOGO_SCRIPTS . '/vendor/bootstrap.min.js', array('jquery'), MOGO_VERSION, true);
    wp_enqueue_script('bt-modernizr-2.8.3-respond-1.4.2.min.js', MOGO_SCRIPTS . '/vendor/modernizr-2.8.3-respond-1.4.2.min.js', array('jquery'), MOGO_VERSION, true);

    wp_enqueue_script('bt-gmaps.min', MOGO_SCRIPTS . '/gmaps.min.js', array('jquery'), MOGO_VERSION, true);
    wp_enqueue_script('bt-jquery.easing.1.3', MOGO_SCRIPTS . '/jquery.easing.1.3.js', array('jquery'), MOGO_VERSION, true);
    wp_enqueue_script('bt-jquery.fancybox.pack.js', MOGO_SCRIPTS . '/jquery.fancybox.pack.js', array('jquery'), MOGO_VERSION, true);
    wp_enqueue_script('bt-jquery.masonry.min', MOGO_SCRIPTS . '/jquery.masonry.min.js', array('jquery'), MOGO_VERSION, true);
    wp_enqueue_script('bt-jquery.mixitup.min', MOGO_SCRIPTS . '/jquery.mixitup.min.js', array('jquery'), MOGO_VERSION, true);

    wp_enqueue_script('bt-plugins.js', MOGO_SCRIPTS . '/plugins.js', array('jquery'), MOGO_VERSION, true);
    wp_enqueue_script('bt-main.js', MOGO_SCRIPTS . '/main.js', array('jquery'), MOGO_VERSION, true);




    // Load Wordpress Comment js
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}


