<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'section_title' => array(
        'type' => 'text',
        'label' => __('Sorting title', 'bt'),
        'value' => '',
        'desc' => __('Enter a name (it is for internal use and will not appear on the front end) ', 'bt')
    ),
    'is_fullwidth' => array(
        'label' => __('Full Width', 'bt'),
        'type' => 'switch',
    ),
    'default_spacing' => array(
        'type' => 'switch',
        'label' => __('Default Spacing', 'bt'),
        'desc' => __('Use default top and bottom spacing?', 'bt'),
        'value' => 'yes',
        'right-choice' => array(
            'value' => 'yes',
            'label' => __('Yes', 'bt'),
        ),
        'left-choice' => array(
            'value' => 'no',
            'label' => __('No', 'bt'),
        ),
    ),
    'height' => array(
        'label' => __('Height', 'bt'),
        'desc' => __("Select the section's height in px (Ex: 400) (dont include with <b>px</b>)", "fw"),
        'type' => 'radio-text',
        'value' => 'auto',
        'choices' => array(
            'auto' => __('auto', 'bt'),
            'fw-section-height-sm' => __('small', 'bt'),
            'fw-section-height-md' => __('medium', 'bt'),
            'fw-section-height-lg' => __('large', 'bt'),
        ),
        'custom' => 'custom_width',
        'help' => __('This option to set extra height in your section. we have used three classs for extra height which fw-section-height-sm = 350px, fw-section-height-md= 450px , fw-section-height-lg = 650px. you can use your custom height to like just add 400 (dont include with px)', 'bt'),
    ),
    'background_options' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'background' => array(
                'label' => __('Background', 'bt'),
                'desc' => __('Select the background for your section', 'bt'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'bt'),
                    'color' => __('Color', 'bt'),
                    'image' => __('Image', 'bt'),
                    'video' => __('Video', 'bt'),
                ),
                'value' => 'none'
            ),
        ),
        'choices' => array(
            'none' => array(),
            'color' => array(
                'background_color' => array(
                    'label' => __('', 'bt'),
                    'desc' => __('Select the background color', 'bt'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
            ),
            'image' => array(
                'background_image' => array(
                    'label' => __('', 'bt'),
                    'type' => 'background-image',
                    'choices' => array(//	in future may will set predefined images
                    )
                ),
                'tab_item' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'selected_value' => array(
                            'label' => __('Overlay', 'bt'),
                            'desc' => __('Select the tab type', 'bt'),
                            'attr' => array('class' => 'fw-checkbox-float-left'),
                            'value' => 'text',
                            'type' => 'radio',
                            'choices' => array(
                                'overlay11' => __('Overlay', 'bt'),
                                'gradient11' => __('Gradient', 'bt'),
                            ),
                        )
                    ),
                    'choices' => array(
                        'overlay11' => array(
                            'background' => array(
                                'label' => __('', 'bt'),
                                'desc' => __('Select the overlay color', 'bt'),
                                'value' => 'rgba(0,0,0,0.55)',
                                'type' => 'rgba-color-picker'
                            ),
                        ),
                       
                    ),
                    'show_borders' => false,
                ),
            ),
            'video' => array(
                'video' => array(
                    'label' => __('', 'bt'),
                    'desc' => __('Insert a YouTube or Vimeo video URL', 'bt'),
                    'type' => 'text',
                ),
            ),
        ),
        'show_borders' => false,
    ),
    'class' => array(
        'label' => __('Custom Class', 'bt'),
        'desc' => __('Enter custom CSS class', 'bt'),
        'type' => 'text',
        'value' => '',
    ),
);
