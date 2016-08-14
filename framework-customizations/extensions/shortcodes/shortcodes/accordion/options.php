<?php

if (!defined('FW')) {
    die('Forbidden');
}

$template_directory = get_template_directory_uri();
$options = array(
   
    'tabs' => array(
        'type' => 'addable-popup',
        'label' => __('Tabs', 'bt'),
        'popup-title' => __('Add/Edit Tabs', 'bt'),
        'desc' => __('Add tabs item', 'bt'),
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'label' => __('Title', 'bt'),
                'desc' => __('Enter the tab title', 'bt'),
                'type' => 'text',
            ),
            'content' => array(
                'label' => __('Content', 'bt'),
                'desc' => __('Enter the tabs content', 'bt'),
                'type' => 'textarea',
            ),
          
            'icon' => array(
                'label' => __('Icon', 'bt'),
                'type' => 'new-icon',
            ),
        )
    ),
    
);
