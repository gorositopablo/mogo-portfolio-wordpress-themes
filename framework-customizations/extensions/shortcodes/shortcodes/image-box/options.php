<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'image' => array(
        'label' => __('Image', 'mogo'),
        'type' => 'upload',
        'desc' => __('Upload Your Image'),
    ),

    'icon' => array(
        'label' => __('Icon', 'mogo'),
        'type' => 'new-icon',
        'value' => 'fa fa-users',
    ),
    'title' => array(
        'label' => __('Title', 'mogo'),
        'desc' => __('Type Your Title', 'mogo'),
        'type' => 'text',
        'value' => 'Super Team',
    ),
 
   
);
