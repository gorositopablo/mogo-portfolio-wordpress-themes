<?php

if (!defined('FW'))
    die('Forbidden');



$options = array(
    'testimonial' => array(
        'label' => __('Testimonial Item', 'bt'),
        'type' => 'addable-popup',
        'desc' => false,
        'limit' => 4,
        'template' => '{{-name }}',
        'add-button-text' => __('Add Testimonial Item', 'bt'),
        'popup-options' => array(
            'image' => array(
                'label' => __('Iamge', 'bt'),
                'type' => 'upload',
                'desc' => __('Upload Your Favorite Image', 'bt'),
            ),
            'description' => array(
                'label' => __('Description', 'bt'),
                'type' => 'textarea',
                'desc' => __('Type your testimonial Description.', 'bt'),
            ),
            'name' => array(
                'label' => __('Name', 'bt'),
                'type' => 'text',
                'desc' => __('Type your name.', 'bt'),
                'value' => 'Jhon Doe',
            ),
        )
    )
);
