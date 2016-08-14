<?php

if (!defined('ABSPATH'))
    die('Direct access forbidden.');

if (!function_exists('mogo_widget_init')) {

    function mogo_widget_init() {
        if (function_exists('register_sidebar')) {
            register_sidebar(
                    array(
                        'name' => __('Main Widget Area', 'mogo'),
                        'id' => 'sidebar-1',
                        'description' => __('Appears on posts and pages.', 'mogo'),
                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                        'after_widget' => '</div> <!-- end widget -->',
                        'before_title' => '<h5 class="widget-title">',
                        'after_title' => '</h5>',
                    )
            );
            register_sidebar(array(
                'name' => 'Footer Social Area',
                'id' => 'social',
                'before_widget' => '<div>',
                'after_widget' => '</div>',
                'before_title' => '<h5 class="monseratregular">',
                'after_title' => '</h2>',
            ));
            register_sidebar(array(
                'name' => 'Footer Blog Area',
                'id' => 'blog',
                'before_widget' => '<div>',
                'after_widget' => '</div>',
                'before_title' => '<h5 class="monseratregular">',
                'after_title' => '</h2>',
            ));

            register_sidebar(array(
                'name' => 'Footer Flickr Area',
                'id' => 'flickr',
                'before_widget' => '<div>',
                'after_widget' => '</div>',
                'before_title' => '<p class="monseratregular">',
                'after_title' => '</h2>',
            ));
        }
    }

    add_action('widgets_init', 'mogo_widget_init');
}

function _action_mogo_register_required_plugins() {

    $plugin_dir = MOGO_THEMEROOT_DIR . '/inc/includes/plugins';

    $plugins = array(
        array(
            'name' => 'Unyson',
            'slug' => 'unyson',
            'required' => true,
            'source' => $plugin_dir . '/unyson.zip',
        ),
        array(
            'name' => 'Accesspress Social Counter',
            'slug' => 'accesspress-social-counter',
            'required' => true,
            'external_url' => 'https://wordpress.org/plugins/accesspress-social-counter/',
        ),
        array(
            'name' => 'Gnu Social Followers Widget',
            'slug' => 'gnu-social-followers-widget',
            'required' => true,
            'external_url' => 'https://wordpress.org/plugins/gnu-social-followers-widget',
        ),
        array(
            'name' => 'Recent Posts Widget with Thumbnails',
            'slug' => 'recent-posts-widget-with-thumbnails',
            'required' => true,
            'external_url' => 'https://wordpress.org/plugins/recent-posts-widget-with-thumbnails',
        ),
        array(
            'name' => 'Simple Flickr Widget',
            'slug' => 'simple-flickr-widget',
            'required' => true,
            'external_url' => 'https://wordpress.org/plugins/simple-flickr-widget',
        ),
        array(
            'name' => 'wp Postviews',
            'slug' => 'wp-postviews',
            'required' => true,
            'external_url' => 'https://wordpress.org/plugins/wp-postviews',
        ),
    );


    $config = array(
        'id' => 'mogo', // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '', // Default absolute path to bundled plugins.
        'menu' => 'mogo-install-plugins', // Menu slug.
        'parent_slug' => 'themes.php', // Parent menu slug.
        'capability' => 'edit_theme_options', // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices' => true, // Show admin notices or not.
        'dismissable' => true, // If false, a user cannot dismiss the nag message.
        'dismiss_msg' => '', // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => true, // Automatically activate plugins after installation or not.
        'message' => '', // Message to output right before the plugins table.
    );

    mogopa($plugins, $config);
}

add_action('mogopa_register', '_action_mogo_register_required_plugins');

// Mega menu filter.

function _filter_mega_menu_wp_nav_menu_objects($sorted_menu_items, $args) {
    $frontpage_ID = mogo_main(get_option('page_on_front'), false);
    $home = (mogo_main(get_the_ID(), false) == $frontpage_ID) ? true : false;
    $mega_menu = array();
    $prefx = ($home != true) ? esc_url(home_url('/#')) : '#';

    foreach ($sorted_menu_items as $item) {
        if (mogo_get_post_meta(mogo_main($item->object_id, false), 'hide_title_from_menu') == 'yes') {
            $item->classes[] = 'hidden cross-fire';
        }

        $section = mogo_get_post_meta(mogo_main($item->object_id, false), 'xs_page_section');

        if (in_array('menu-item-has-children', $item->classes)) {

            $item->url = '#';
        } else {
            if ($section == 'on') {
                $item->url = esc_url($prefx . mogo_sectionID(mogo_main($item->object_id, false)));
            }
        }
    }


    return $sorted_menu_items;
}

add_filter('wp_nav_menu_objects', '_filter_mega_menu_wp_nav_menu_objects', 10, 2);
