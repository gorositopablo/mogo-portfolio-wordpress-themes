<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'homepage' => array(
        'label' => __('Home Page Slider', 'bt'),
        'limit' => '3',
        'type' => 'addable-popup',
        'size' => 'large',
        'desc' => __('Add home page slider', 'bt'),
        'template' => 'Slider Title : {{-home_title }}',
        'popup-options' => array(
            'home_title' => array(
                'label' => __('Title', 'bt'),
                'type' => 'text',
                'value' => 'Creative Template',
                'desc' => __('Type your homepage title.', 'bt'),
            ),
            'home_subtitle' => array(
                'label' => __('Sub Title', 'bt'),
                'type' => 'textarea',
                'value' => 'Welcome to MoGo',
                'desc' => __('Type your homepage subtitle.', 'bt'),
            ),
            'btn_txt' => array(
                'type' => 'text',
                'label' => __('Button Text', 'bt'),
                'desc' => __('Type your button text', 'bt'),
                 'value' => 'Learn More',
            ),
        ),
    ),
);
