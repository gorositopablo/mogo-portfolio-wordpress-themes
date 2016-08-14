<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'image' => array(
        'label' => __('Image', 'bt'),
        'desc' => __('Upload an image', 'bt'),
        'type' => 'upload'
    ),
    'name' => array(
        'label' => __('Name', 'bt'),
        'desc' => __('Enter the team member name', 'bt'),
        'type' => 'text',
        'value' => ''
    ),
    'job' => array(
        'label' => __('Job Title', 'bt'),
        'desc' => __('Enter the job title', 'bt'),
        'type' => 'text',
        'value' => ''
    ),
  
    'socials' => array(
        'type' => 'addable-popup',
        'limit' => '4',
        'label' => __('Social Links', 'bt'),
        'desc' => __('Add social links', 'bt'),
        'template' => '{{=name}}',
        'popup-options' => array(
            'name' => array(
                'label' => __('Name', 'bt'),
                'desc' => __('Enter a name (it is for internal use and will not appear on the front end)', 'bt'),
                'type' => 'text',
                'value' => 'Facebook',
            ),
            'icon' => array(
                'type' => 'new-icon',
                'value' => 'fa fa-facebook',
                'label' => 'Icon',
            ),
            'link' => array(
                'label' => __('Link', 'bt'),
                'desc' => __('Enter your social URL link', 'bt'),
                'type' => 'text',
                'value' => '#',
            )
        ),
    ),
);
