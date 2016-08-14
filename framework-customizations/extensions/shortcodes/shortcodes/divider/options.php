<?php

if (!defined('FW')) {
    die('Forbidden');
}



$options = array(
    'type' => array(
        'label' => __('Type', 'mogo'),
        'desc' => __('Select divider type', 'mogo'),
        'type' => 'image-picker',
        'value' => 'fw-line-solid',
        'choices' => array(
            'fw-line-solid' => array(
                'small' => array(
                    'height' => 50,
                    'src' => MOGO_IMAGES . '/image-picker/solid.jpg',
                    'title' => __('Solid Line', 'mogo')
                ),
            ),
            'fw-line-dashed' => array(
                'small' => array(
                    'height' => 50,
                    'src' => MOGO_IMAGES . '/image-picker/dashed.jpg',
                    'title' => __('Dashed Line', 'mogo')
                ),
            ),
            'fw-line-dotted' => array(
                'small' => array(
                    'height' => 50,
                    'src' => MOGO_IMAGES . '/image-picker/dotted.jpg',
                    'title' => __('Dotted Line', 'mogo')
                ),
            ),
            'fw-line-double' => array(
                'small' => array(
                    'height' => 50,
                    'src' => MOGO_IMAGES . '/image-picker/double.jpg',
                    'title' => __('Double Line', 'mogo')
                ),
            ),
            'fw-line-thick' => array(
                'small' => array(
                    'height' => 50,
                    'src' => MOGO_IMAGES . '/image-picker/thick.jpg',
                    'title' => __('Thick Line', 'mogo')
                ),
            ),
            'fw-divider-space' => array(
                'small' => array(
                    'height' => 50,
                    'src' => MOGO_IMAGES . '/image-picker/space_gap.jpg',
                    'title' => __('Space', 'mogo')
                ),
            ),
        ),
    ),
    'divider_size' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'size' => array(
                'label' => __('Height', 'mogo'),
                'desc' => __('Select the top and bottom margin in px', 'mogo'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'space-sm' => __('Small', 'mogo'),
                    'space-md' => __('Medium', 'mogo'),
                    'space-lg' => __('Large', 'mogo'),
                    'custom' => __('Custom', 'mogo'),
                ),
                'value' => 'space-md'
            ),
        ),
        'choices' => array(
            'custom' => array(
                'margin_top' => array(
                    'label' => __('Margin Top', 'mogo'),
                    'desc' => __('Enter margin-top in px', 'mogo'),
                    'attr' => array('class' => 'fw-option-width-small'),
                    'type' => 'short-text',
                    'value' => ''
                ),
                'margin_bottom' => array(
                    'label' => __('Margin Bottom', 'mogo'),
                    'attr' => array('class' => 'fw-option-width-small'),
                    'desc' => __('Enter margin-bottom in px', 'mogo'),
                    'type' => 'short-text',
                    'value' => ''
                ),
            ),
            'no' => array(),
        ),
        'show_borders' => false,
    ),
    'width' => array(
        'label' => __('Width', 'mogo'),
        'desc' => __('Select the width size in %', 'mogo'),
        'type' => 'radio-text',
        'choices' => array(
            '25' => __('25%', 'mogo'),
            '50' => __('50%', 'mogo'),
            '100' => __('100%', 'mogo'),
        ),
        'custom' => 'custom_width',
        'value' => '100'
    ),
    'bg_color' => array(
        'label' => __('Color', 'mogo'),
        'desc' => __('Select divider color', 'mogo'),
        'value' => '',
        'type' => 'color-picker'
    ),
    'special_divider' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'selected_value' => array(
                'label' => __('Add Element', 'mogo'),
                'desc' => __('Make a special divider by adding an icon or text to it', 'mogo'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'value' => 'none',
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'mogo'),
                    'text' => __('Text', 'mogo'),
                    'icon' => __('Icon', 'mogo'),
                ),
            )
        ),
        'choices' => array(
            'text' => array(
                'title_text' => array(
                    'label' => __('', 'mogo'),
                    'desc' => __('This text will be displayed on the divider', 'mogo'),
                    'type' => 'text',
                    'value' => '',
                ),
                'color' => array(
                    'label' => __('Text Color', 'mogo'),
                    'desc' => __('Select the text color', 'mogo'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
                'show_bg' => array(
                    'type' => 'switch',
                    'label' => __('Background', 'mogo'),
                    'desc' => __('Add a background to your text?', 'mogo'),
                    'value' => 'no',
                    'right-choice' => array(
                        'value' => 'yes',
                        'label' => __('Yes', 'mogo'),
                    ),
                    'left-choice' => array(
                        'value' => 'no',
                        'label' => __('No', 'mogo'),
                    ),
                ),
                'position' => array(
                    'label' => __('Position', 'mogo'),
                    'desc' => __('Select text position', 'mogo'),
                    'type' => 'image-picker',
                    'value' => '',
                    'choices' => array(
                        'title-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => MOGO_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'mogo')
                            ),
                        ),
                        '' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => MOGO_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'mogo')
                            ),
                        ),
                        'title-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => MOGO_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'mogo')
                            ),
                        ),
                    ),
                ),
                'divider_size' => array(
                    'label' => __('Size', 'mogo'),
                    'desc' => __('Select divider size', 'mogo'),
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'type' => 'radio',
                    'value' => 'fw-divider-size-md',
                    'choices' => array(
                        'fw-divider-size-sm' => __('Small', 'mogo'),
                        'fw-divider-size-md' => __('Medium', 'mogo'),
                        'fw-divider-size-lg' => __('Large', 'mogo'),
                    ),
                ),
            ),
            'icon' => array(
                'icon_class' => array(
                    'type' => 'icon',
                    'label' => __('', 'mogo')
                ),
                'color' => array(
                    'label' => __('Icon Color', 'mogo'),
                    'desc' => __('Select the icon color', 'mogo'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
                'position' => array(
                    'label' => __('Position', 'mogo'),
                    'desc' => __('Select icon position', 'mogo'),
                    'type' => 'image-picker',
                    'value' => '',
                    'choices' => array(
                        'title-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => MOGO_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'mogo')
                            ),
                        ),
                        '' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => MOGO_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'mogo')
                            ),
                        ),
                        'title-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => MOGO_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'mogo')
                            ),
                        ),
                    ),
                ),
                'divider_size' => array(
                    'label' => __('Size', 'mogo'),
                    'desc' => __('Select divider size', 'mogo'),
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'type' => 'radio',
                    'value' => 'fw-divider-size-md',
                    'choices' => array(
                        'fw-divider-size-sm' => __('Small', 'mogo'),
                        'fw-divider-size-md' => __('Medium', 'mogo'),
                        'fw-divider-size-lg' => __('Large', 'mogo'),
                    ),
                ),
            ),
            'none' => array(),
        ),
        'show_borders' => false,
    ),
    'link_id' => array(
        'type' => 'text',
        'label' => __('Link ID', 'mogo'),
        'desc' => __('Enter a custom CSS id for this divider', 'mogo'),
        'help' => sprintf("%s", __('Use this ID in any URL link in the page in order to anchor link to this divider', 'mogo')),
        'value' => '',
    ),
    'class' => array(
        'label' => __('Custom Class', 'mogo'),
        'desc' => __('Enter custom CSS class', 'mogo'),
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'mogo'),
        'type' => 'text',
        'value' => '',
    ),
);
