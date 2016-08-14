<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'image' => array(
        'type' => 'upload',
        'label' => __('Image', 'mogo'),
        'desc' => __('Either upload a new, or choose an existing image from your media library', 'mogo')
    ),
    
    'alt' => array(
        'type' => 'text',
        'label' => __('Alt text', 'mogo'),
        'desc' => __('Add alt text', 'mogo')
    ),
    'image-link-group' => array(
        'type' => 'group',
        'options' => array(
            'link' => array(
                'type' => 'text',
                'label' => __('Image Link', 'mogo'),
                'desc' => __('Where should your image link to?', 'mogo'),
                'value' => 'http://bootstrapthemes.co/'
            ),
            'target' => array(
                'type' => 'switch',
                'label' => __('Open Link in New Window', 'mogo'),
                'desc' => __('Select here if you want to open the linked page in a new window', 'mogo'),
                'right-choice' => array(
                    'value' => '_blank',
                    'label' => __('Yes', 'mogo'),
                ),
                'left-choice' => array(
                    'value' => '_self',
                    'label' => __('No', 'mogo'),
                ),
            ),
        )
    )
);

