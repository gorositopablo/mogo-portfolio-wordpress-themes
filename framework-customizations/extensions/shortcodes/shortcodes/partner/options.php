<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
 
    'partner_gallery' => array(
        'type' => 'addable-popup',
        'label' => __('Partner Image', 'bt'),
        'desc' => __('Add your partner image.', 'bt'),
        'template' => '{{- partner_text}}',
        'limit' => 6,
        'sortable' => true,
        'popup-options' => array(
            'partner_image' => array(
                'label' => __('Partner Image', 'bt'),
                'type' => 'upload',
            ),
            'partner_link' => array(
                'label' => __('Image Link', 'bt'),
                'desc' => __('if you want you can use partner link also. or just Leave it blank', 'bt'),
                'type' => 'text',
                'value' => '#',
            ),
            'partner_text' => array(
                'label' => __('Alt Text', 'bt'),
                'desc' => __('You can use partner alt text. or just Leave it blank', 'bt'),
                'type' => 'text',
                'value' => 'Partner Image',
            ),
        ),
    )
);
