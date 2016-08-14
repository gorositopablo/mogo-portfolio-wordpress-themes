<?php

if (!defined('FW')) {
    die('Forbidden');
}

$colors = array('color_1' => '#96243a', 'color_2' => '#17284d', 'color_3' => '#71c7e0', 'color_4' => '#ffffff', 'color_5' => '#2b303d');
$admin_url = admin_url();
$color_settings = fw_get_db_settings_option('color_settings', $colors);
$template_directory = get_template_directory_uri();

$options = array(
    'general' => array(
        'title' => __('General', 'mogo'),
        'type' => 'tab',
        'options' => array(
            'general-box' => array(
                'title' => __('General Settings', 'mogo'),
                'type' => 'box',
                'options' => array(
                    'menu_logo' => array(
                        'label' => __('Menu Logo', 'mogo'),
                        'desc' => __('Add your website menu logo', 'mogo'),
                        'type' => 'upload',
                    ),
                    'menu_logo' => array(
                        'label' => __('Menu Logo', 'mogo'),
                        'desc' => __('Add your website menu logo', 'mogo'),
                        'type' => 'upload',
                    ),
                    'favicon' => array(
                        'label' => __('Favicon', 'mogo'),
                        'desc' => __('Upload a favicon image', 'mogo'),
                        'type' => 'upload'
                    ),
                    'loader' => array(
                        'type' => 'switch',
                        'label' => __('Pre Loader', 'mogo'),
                        'desc' => false,
                        'right-choice' => array(
                            'value' => 'yes',
                            'label' => __('Yes', 'mogo'),
                        ),
                        'left-choice' => array(
                            'value' => 'no',
                            'label' => __('No', 'mogo'),
                        ),
                    ),
                  
                ),
            ),
        )
    )
);
