<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
   
    'title' => array(
        'type' => 'text',
        'label' => __('Title of the Box', 'bt'),
        'value' => 'Photography',
    ),
    'icon' => array(
        'type' => 'new-icon',
        'label' => __('Icon of the Box', 'bt'),
        'value' => 'fa fa-clock-o',
    ),
    'content' => array(
        'label' => __('Description', 'bt'),
        'desc' => __('Enter the Service description', 'bt'),
        'type' => 'textarea',
    ),
);
