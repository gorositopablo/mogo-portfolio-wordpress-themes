<?php

/**
 * functions.php
 *
 * The theme's functions and definitions.
 */
/**
 * 1.0 - Define constants. Current Version number & Theme Name.
 */
define('MOGO_THEME', 'Mogo Portfolio Template');
define('MOGO_VERSION', '1.0');
define('MOGO_THEMEROOT', get_template_directory_uri());
define('MOGO_THEMEROOT_DIR', get_template_directory());
define('MOGO_IMAGES', MOGO_THEMEROOT . '/assets/images');
define('MOGO_IMAGES_DIR', MOGO_THEMEROOT_DIR . '/assets/images');
define('MOGO_CSS', MOGO_THEMEROOT . '/assets/css');
define('MOGO_CSS_DIR', MOGO_THEMEROOT_DIR . '/assets/css');
define('MOGO_SCRIPTS', MOGO_THEMEROOT . '/assets/js');
define('MOGO_SCRIPTS_DIR', MOGO_THEMEROOT_DIR . '/assets/js');








/**
 * ----------------------------------------------------------------------------------------
 * 3.0 - Set up the content width value based on the theme's design.
 * ----------------------------------------------------------------------------------------
 */
if (!isset($content_width)) {
    $content_width = 800;
}






/**
 * ----------------------------------------------------------------------------------------
 * 4.0 - Set up theme default and register various supported features.
 * ----------------------------------------------------------------------------------------
 */
if (!function_exists('xs_setup')) {

    function xs_setup() {
        /**
         * Make the theme available for translation.
         */
        $lang_dir = MOGO_THEMEROOT . '/languages';
        load_theme_textdomain('bt', $lang_dir);

        /**
         * Add support for post formats.
         */
        add_theme_support('post-formats', array()
        );

        /**
         * Add support for automatic feed links.
         */
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');


        /**
         * Add support for post thumbnails.
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(300, 300, array('center', 'center')); // Hard crop center center

        if (function_exists('add_image_size')) {
            add_image_size('recent_post', 350, 235, array('center', 'center'));
            add_image_size('blog-thumb', 770, 335, TRUE);
        }



        /**
         * Register nav menus.
         */
        register_nav_menus(
                array(
                    'primary' => __('Main Menu', 'startuplanding')
                )
        );
        register_nav_menus(
                array(
                    'footer' => __('Footer Menu', 'startuplanding')
                )
        );
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));
    }

    add_action('after_setup_theme', 'xs_setup');
}

/**
 * ----------------------------------------------------------------------------------------
 * Widget Area
 * ----------------------------------------------------------------------------------------
 */


include_once get_template_directory() . '/inc/init.php';



