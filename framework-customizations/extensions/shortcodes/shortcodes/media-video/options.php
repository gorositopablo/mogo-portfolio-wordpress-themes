<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'video' => array(
        'label' => __('Video', 'mogo'),
        'desc' => __('Enter Youtube or Vimeo video URL', 'mogo'),
        'type' => 'text',
    ),
    'width' => array(
        'label' => __('Width', 'mogo'),
        'desc' => __('Video width in pixels', 'mogo'),
        'type' => 'short-text',
        'value' => '',
    ),
    'height' => array(
        'label' => __('Height', 'mogo'),
        'desc' => __('Video height in pixels', 'mogo'),
        'type' => 'short-text',
        'value' => '',
    ),
    'frame' => array(
        'type' => 'switch',
        'value' => '',
        'label' => __('Video Border', 'mogo'),
        'desc' => __('Add a border to your video?', 'mogo'),
        'left-choice' => array(
            'value' => '',
            'label' => __('No', 'mogo'),
        ),
        'right-choice' => array(
            'value' => 'fw-video-frame',
            'label' => __('Yes', 'mogo'),
        )
    ),
    'class' => array(
        'attr' => array('class' => 'border-bottom-none'),
        'label' => __('Custom Class', 'mogo'),
        'desc' => __('Enter custom CSS class', 'mogo'),
        'type' => 'text',
        'help' => __('You can use this class to further style this shortcode.', 'mogo'),
        'value' => '',
    ),
);
