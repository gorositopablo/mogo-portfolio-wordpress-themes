<?php

if (!defined('FW')) {
    die('Forbidden');
}

$template_directory = get_template_directory_uri();
$options = array(
    'list_group' => array(
        'type' => 'group',
        'options' => array(
            'list_items' => array(
                'type' => 'addable-popup',
                'label' => __('List Items', 'mogo'),
                'desc' => __('Add list items', 'mogo'),
                'template' => '{{=item}}',
                'popup-options' => array(
                    'sublist_group' => array(
                        'type' => 'group',
                        'options' => array(
                            'item' => array(
                                'label' => __('Item', 'mogo'),
                                'desc' => __('Enter an item in list', 'mogo'),
                                'type' => 'text',
                            ),
                            'sublist_items' => array(
                                'type' => 'addable-popup',
                                'label' => __('Sublist Items', 'mogo'),
                                'desc' => __('Add sublist items', 'mogo'),
                                'template' => '{{=subitem}}',
                                'popup-options' => array(
                                    'subitem' => array(
                                        'label' => __('Sublist Item', 'mogo'),
                                        'desc' => __('Enter a sublist item', 'mogo'),
                                        'type' => 'text',
                                    ),
                                    'btn_link_group' => array(
                                        'type' => 'group',
                                        'options' => array(
                                            'link' => array(
                                                'label' => __('Link', 'mogo'),
                                                'desc' => __('you can add link if you want', 'mogo'),
                                                'type' => 'text',
                                            ),
                                            'target_subitem' => array(
                                                'type' => 'switch',
                                                'label' => __('', 'mogo'),
                                                'desc' => __('Open link in new window?', 'mogo'),
                                                'value' => '_self',
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
                                    ),
                                ),
                            ),
                        )
                    ),
                    'btn_link_group' => array(
                        'type' => 'group',
                        'options' => array(
                            'link' => array(
                                'label' => __('Link', 'mogo'),
                                'desc' => __('you can add link if you want', 'mogo'),
                                'type' => 'text',
                            ),
                            'target' => array(
                                'type' => 'switch',
                                'label' => __('', 'mogo'),
                                'desc' => __('Open link in new window?', 'mogo'),
                                'value' => '_self',
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
                    ),
                ),
            ),
            'separator' => array(
                'type' => 'switch',
                'label' => __('', 'mogo'),
                'desc' => __('Separate each list item by a line?', 'mogo'),
                'value' => '_self',
                'right-choice' => array(
                    'value' => 'list-bordered',
                    'label' => __('Yes', 'mogo'),
                ),
                'left-choice' => array(
                    'value' => '',
                    'label' => __('No', 'mogo'),
                ),
            ),
        )
    ),
    'list_type' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'selected_value' => array(
                'label' => __('Add Element', 'mogo'),
                'desc' => __('Make a numbered list or add an icon to list items', 'mogo'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'value' => 'list-default',
                'type' => 'radio',
                'choices' => array(
                    'list-default' => __('None', 'mogo'),
                    'list-numbers' => __('Number', 'mogo'),
                    'list-icon' => __('Icon', 'mogo'),
                ),
            )
        ),
        'choices' => array(
            'list-default' => array(),
            'list-numbers' => array(),
            'list-icon' => array(
                'icon' => array(
                    'type' => 'icon',
                    'label' => __('', 'mogo')
                ),
            ),
        ),
        'show_borders' => false,
    ),
    'class' => array(
        'label' => __('Custom Class', 'mogo'),
        'desc' => __('Enter custom CSS class', 'mogo'),
        'type' => 'text',
        'value' => '',
        'help' => __('You can use this class to further style this shortcode', 'mogo'),
    ),
);
