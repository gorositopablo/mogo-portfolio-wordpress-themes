<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'portfolios' => array(
        'type' => 'addable-popup',
        'label' => __('Portfolio Image', 'bt'),
        'desc' => __('Add Portfolio Image', 'bt'),
        'template' => '{{=title}}',
        'popup-options' => array(
            'image' => array(
                'label' => __('Image', 'bt'),
                'desc' => __('Upload your portfolios image', 'bt'),
                'value' => false,
                'type' => 'upload'
            ),
            'icon' => array(
                'label' => __('Icon', 'bt'),
                'desc' => __('Select your favorite icon', 'bt'),
                'type' => 'new-icon',
                'value' => 'fa fa-picture-o',
            ),
            'title' => array(
                'label' => __('Title', 'bt'),
                'desc' => __('Enter Title', 'bt'),
                'type' => 'text',
                'value' => 'Creatively Designed',
            ),
            'subtitle' => array(
                'type' => 'text',
                'desc' => 'Enter Subtitle',
                'label' => 'Subtitle',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ),
         
        ),
    ),
);
