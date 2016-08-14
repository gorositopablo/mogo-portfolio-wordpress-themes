<?php if ( ! defined( 'ABSPATH' ) ) die( 'Direct access forbidden.' );


    function startuplanding_action_theme_include_custom_option_types() {
        if (is_admin()) {
            require_once dirname(__FILE__) . '/option-types/new-icon/class-fw-option-type-new-icon.php';
            require_once dirname(__FILE__) . '/option-types/fw-multi-inline/class-fw-option-type-fw-multi-inline.php';
            // and all other option types
        }
    }
    add_action('fw_option_types_init', 'startuplanding_action_theme_include_custom_option_types');

