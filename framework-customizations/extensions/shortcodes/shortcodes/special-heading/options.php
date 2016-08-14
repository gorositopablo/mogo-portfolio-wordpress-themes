<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'title' => array(
        'type' => 'text',
        'label' => __('Heading Title', 'mogo'),
        'desc' => __('Write the heading title content', 'mogo'),
    ),
    'heading' => array(
        'type' => 'select',
        'label' => __('Heading Size', 'mogo'),
        'choices' => array(
            'h1' => 'H1',
            'h2' => 'H2',
            'h3' => 'H3',
            'h4' => 'H4',
            'h5' => 'H5',
            'h6' => 'H6',
        )
    ),
    'subtitle' => array(
        'type' => 'text',
        'label' => __('Heading Subtitle', 'mogo'),
        'desc' => __('Write the heading subtitle content', 'mogo')
    ),
    
    'subheading' => array(
        'type' => 'select',
        'label' => __('Sub Heading Size', 'mogo'),
        'choices' => array(
            'h1' => 'H1',
            'h2' => 'H2',
            'h3' => 'H3',
            'h4' => 'H4',
            'h5' => 'H5',
            'h6' => 'H6',
        )
    ),
    'centered' => array(
        'type' => 'switch',
        'label' => __('Centered', 'mogo'),
//		'left-choice' => array(
//			'value' => 'no',
//			'label' => __('No', 'mogo'),
//		),
//		'right-choice' => array(
//			'value' => 'yes',
//			'label' => __('Yes', 'mogo'),
//		),
    ),
    'color' => array(
        'type' => 'color-picker',
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
        'label' => __('Heading Color', 'mogo'),
        'desc' => __('If you want use diffrent color for parallax or video section', 'mogo'),
        'help' => __('If you want use diffrent heading color for parallax or video section. you can easily change from here', 'mogo'),
    ),
    'separator' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'show_separator' => array(
                'type' => 'switch',
                'value' => '',
                'label' => __('Separator', 'mogo'),
                'desc' => __('Show separator?', 'mogo'),
                'left-choice' => array(
                    'value' => 'no',
                    'label' => __('No', 'mogo'),
                ),
                'right-choice' => array(
                    'value' => 'yes',
                    'label' => __('Yes', 'mogo'),
                )
            ),
        ),
    ),
    'class' => array(
        'type' => 'text',
        'label' => __('Custom Class', 'mogo'),
        'desc' => __('Enter a custom CSS class', 'mogo'),
        'help' => __('You can use this class to further style this shortcode by adding your custom CSS.', 'mogo'),
    ),
);
