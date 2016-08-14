<?php

if (!defined('FW')) {
    die('Forbidden');
}

$template_directory = get_template_directory_uri();
$options = array(
    'height' => array(
        'label' => __('Height', 'mogo'),
        'desc' => __('Select the space height in px (Small = 30px, Medium = 60px, Large = 100px) also you can use custom height according to your need.', 'mogo'),
        'type' => 'radio-text',
        'choices' => array(
            'space-sm' => __('Small', 'mogo'),
            'space-md' => __('Medium', 'mogo'),
            'space-lg' => __('Large', 'mogo'),
        ),
        'value' => 'space-md',
        'custom' => 'custom_height',
    ),
);
