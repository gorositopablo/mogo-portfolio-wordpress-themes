<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'category' => array(
        'label' => __('Display From', 'mogo'),
        'desc' => __('Select a blog category', 'mogo'),
        'type' => 'select',
        'value' => '',
        'choices' => mogo_get_category_term_list(),
    ),

    'class' => array(
        'attr' => array('class' => 'border-bottom-none'),
        'label' => __('Custom Class', 'mogo'),
        'desc' => __('Enter custom CSS class', 'mogo'),
        'type' => 'text',
        'help' => __('You can use this class to further style this shortcode by adding your custom CSS in the <strong>style.css</strong> file. This file is located on your server in the <strong>child-theme</strong> folder.', 'mogo'),
        'value' => '',
    ),
);
