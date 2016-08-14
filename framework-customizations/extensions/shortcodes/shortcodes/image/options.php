<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'large_image' => array(
        'type' => 'upload',
        'label' => __('Large Image', 'bt'),
        'desc' => __('Either upload a large new, or choose an existing large image from your media library', 'bt')
    ),
    'small_image' => array(
        'type' => 'upload',
        'label' => __('Small Image', 'bt'),
        'desc' => __('Either upload a small new, or choose an existing small image from your media library', 'bt')
    ),
);

