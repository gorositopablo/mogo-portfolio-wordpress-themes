<?php

if (!defined('FW'))
    die('Forbidden');



$options = array(
    'image' => array(
        'label' => __('Image', 'bt'),
        'type' => 'upload',
        'desc' => __('Upload Your Favorite Image', 'bt'),
    ),
     'name' => array(
        'label' => __('Name', 'bt'),
        'type' => 'text',
        'desc' => __('Type your name.', 'bt'),
        'value' => 'Mathew Dix',
    ),
     'title' => array(
        'label' => __('Job Title', 'bt'),
        'type' => 'text',
        'desc' => __('Type your job title.', 'bt'),
        'value' => 'Graphic Design',
    ),
    'message' => array(
        'label' => __('Message', 'bt'),
        'type' => 'textarea',
        'desc' => __('Type your testimonial description message.', 'bt'),
    ),
   
    
);
