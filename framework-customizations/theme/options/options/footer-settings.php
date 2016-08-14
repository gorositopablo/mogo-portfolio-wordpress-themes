<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'footer_settings' => array(
        'title' => __('Footer Settings', 'bt'),
        'type' => 'tab',
        'options' => array(
            'footer_box' => array(
                'title' => __('Footer Settings', 'bt'),
                'type' => 'box',
                'options' => array(
                    'footer_logo' => array(
                        'label' => __('Footer Logo', 'bt'),
                        'type' => 'upload',
                        'desc' => __('Upload Your Footer Logo', 'bt'),
                    ),
                    'text' => array(
                        'label' => __('Footer Text', 'bt'),
                        'type' => 'textarea',
                        'desc' => __('Type Footer Text.', 'bt'),
                    ),
                    
                    'copyright' => array(
                        'label' => __('Copyright Text', 'bt'),
                        'type' => 'wp-editor',
                        'value' => 'Made with  by Bootstrap Themes2016. All Rights Reserved',
                        'desc' => __('Footer Copyright Text.', 'bt'),
                    ),
                ),
            ),
        ),
    ),
);
