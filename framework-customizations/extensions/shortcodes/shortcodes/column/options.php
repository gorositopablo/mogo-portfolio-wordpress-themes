<?php

if (!defined('FW')) {
    die('Forbidden');
}



$options = array(
    'default_padding' => array(
        'type' => 'switch',
        'label' => __('Default Spacing', 'mogo'),
        'desc' => __('Use default left and right spacing?', 'mogo'),
        'help' => __("Default left and right spacings are set to 15px", "fw"),
        'value' => '',
        'right-choice' => array(
            'value' => '',
            'label' => __('Yes', 'mogo'),
        ),
        'left-choice' => array(
            'value' => 'fw-col-no-padding',
            'label' => __('No', 'mogo'),
        ),
    ),
    'padding_group' => array(
        'type' => 'group',
        'options' => array(
            'html_label' => array(
                'type' => 'html',
                'value' => '',
                'label' => __('Inner Spacing', 'mogo'),
                'html' => '',
            ),
            'padding_top' => array(
                'label' => false,
                'desc' => __('top', 'mogo'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_right' => array(
                'label' => false,
                'desc' => __('right', 'mogo'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_bottom' => array(
                'label' => false,
                'desc' => __('bottom', 'mogo'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_left' => array(
                'label' => false,
                'desc' => __('left', 'mogo'),
                'type' => 'short-text',
                'value' => '0',
            ),
        )
    ),
    'margin_group' => array(
        'type' => 'group',
        'options' => array(
            'html_label' => array(
                'type' => 'html',
                'value' => '',
                'label' => __('Outer Spacing', 'mogo'),
                'html' => '',
            ),
            'margin_top' => array(
                'label' => false,
                'desc' => __('top', 'mogo'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'margin_right' => array(
                'label' => false,
                'desc' => __('right', 'mogo'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'margin_bottom' => array(
                'label' => false,
                'desc' => __('bottom', 'mogo'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'margin_left' => array(
                'label' => false,
                'desc' => __('left', 'mogo'),
                'type' => 'short-text',
                'value' => '0',
            ),
        )
    ),
    'height' => array(
        'label' => __('Height', 'mogo'),
        'type' => 'radio-text',
        'value' => 'auto',
        'choices' => array(
            'auto' => __('auto', 'mogo'),
        ),
        'custom' => 'custom_height',
        'help' => __('This option to use your custom height to like just add 500 (dont include with px)', 'mogo'),
    ),
    'background_options' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'background' => array(
                'label' => __('Background', 'mogo'),
                'desc' => __('Select the background for your column', 'mogo'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'mogo'),
                    'image' => __('Image', 'mogo'),
                    'bgcolor' => __('Color', 'mogo'),
                ),
                'value' => 'none'
            ),
        ),
        'choices' => array(
            'none' => array(),
            'color' => array(
                'background_color' => array(
                    'label' => __('', 'mogo'),
                    'help' => __('', 'mogo'),
                    'desc' => __('Select the background color', 'mogo'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
            ),
            'image' => array(
                'background_image' => array(
                    'label' => __('', 'mogo'),
                    'type' => 'background-image',
                    'choices' => array(//	in future may will set predefined images
                    )
                ),
                'repeat' => array(
                    'label' => __('', 'mogo'),
                    'desc' => __('Select how will the background repeat', 'mogo'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => 'no-repeat',
                    'choices' => array(
                        'no-repeat' => __('No-Repeat', 'mogo'),
                        'repeat' => __('Repeat', 'mogo'),
                        'repeat-x' => __('Repeat-X', 'mogo'),
                        'repeat-y' => __('Repeat-Y', 'mogo'),
                    )
                ),
                'bg_position_x' => array(
                    'label' => __('Position', 'mogo'),
                    'desc' => __('Select the horizontal background position', 'mogo'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'left' => __('Left', 'mogo'),
                        'center' => __('Center', 'mogo'),
                        'right' => __('Right', 'mogo'),
                    )
                ),
                'bg_position_y' => array(
                    'label' => __('', 'mogo'),
                    'desc' => __('Select the vertical background position', 'mogo'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'top' => __('Top', 'mogo'),
                        'center' => __('Center', 'mogo'),
                        'bottom' => __('Bottom', 'mogo'),
                    )
                ),
                'bg_size' => array(
                    'label' => __('Size', 'mogo'),
                    'desc' => __('Select the background size', 'mogo'),
                    'help' => __('<strong>Auto</strong> - Default value, the background image has the original width and height.<br><br><strong>Cover</strong> - Scale the background image so that the background area is completely covered by the image.<br><br><strong>Contain</strong> - Scale the image to the largest size such that both its width and height can fit inside the content area.', 'mogo'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'auto' => __('Auto', 'mogo'),
                        'cover' => __('Cover', 'mogo'),
                        'contain' => __('Contain', 'mogo'),
                    )
                ),
                'overlay_options' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'overlay' => array(
                            'type' => 'switch',
                            'label' => __('Overlay Color', 'mogo'),
                            'desc' => __('Enable image overlay color?', 'mogo'),
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
                    ),
                    'choices' => array(
                        'no' => array(),
                        'yes' => array(
                            'background' => array(
                                'label' => __('', 'mogo'),
                                'help' => __('', 'mogo'),
                                'desc' => __('Select the overlay color', 'mogo'),
                                'type' => 'rgba-color-picker',
                                'value' => 'rgba(0,0,0,0.55)'
                            ),
                        ),
                    ),
                ),
            ),
            'bgcolor' => array(
                'background_color' => array(
                    'label' => __('', 'mogo'),
                    'help' => __('', 'mogo'),
                    'desc' => __('Select the background color', 'mogo'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
            )
        ),
        'show_borders' => false,
    ),
    'txtcolor' => array(
        'label' => __('Text Color', 'mogo'),
        'type' => 'color-picker',
        'desc' => 'You can change color also',
    ),
    'animation' => array(
        'label' => __('Animation', 'mogo'),
        'type' => 'select',
        //'value' => 'c',
        'desc' => __('Add animation when your site fast load on browser.', 'mogo'),
        'choices' => array(
            '' => '---',
            array(
                'attr' => array(
                    'label' => __('Attention Effects', 'mogo'),
                ),
                'choices' => array(
                    'fadeIn' => __('fadeIn', 'unyson'),
                    'bounce' => __('bounce', 'unyson'),
                    'flash' => __('flash', 'unyson'),
                    'pulse' => __('pulse', 'unyson'),
                    'rubberBand' => __('rubberBand', 'unyson'),
                    'shake' => __('shake', 'unyson'),
                    'swing' => __('swing', 'unyson'),
                    'tada' => __('tada', 'unyson'),
                    'wobble' => __('wobble', 'unyson'),
                    'jello' => __('jello', 'unyson'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Bouncing Effects', 'mogo'),
                ),
                'choices' => array(
                    'bounceIn' => __('bounceIn', 'unyson'),
                    'bounceInDown' => __('bounceInDown', 'unyson'),
                    'bounceInLeft' => __('bounceInLeft', 'unyson'),
                    'bounceInRight' => __('bounceInRight', 'unyson'),
                    'bounceInUp' => __('bounceInUp', 'unyson'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Fading Effects', 'mogo'),
                ),
                'choices' => array(
                    'fadeIn' => __('fadeIn', 'unyson'),
                    'fadeInDown' => __('fadeInDown', 'unyson'),
                    'fadeInLeft' => __('fadeInLeft', 'unyson'),
                    'fadeInRight' => __('fadeInRight', 'unyson'),
                    'fadeInUp' => __('fadeInUp', 'unyson'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Flippers', 'mogo'),
                ),
                'choices' => array(
                    'flip' => __('flip', 'unyson'),
                    'flipInX' => __('flipInX', 'unyson'),
                    'flipInY' => __('flipInY', 'unyson'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Rotating Effect', 'mogo'),
                ),
                'choices' => array(
                    'rotateIn' => __('rotateIn', 'unyson'),
                    'rotateInDownLeft' => __('rotateInDownLeft', 'unyson'),
                    'rotateInDownRight' => __('rotateInDownRight', 'unyson'),
                    'rotateInUpLeft' => __('rotateInUpLeft', 'unyson'),
                    'rotateInUpRight' => __('rotateInUpRight', 'unyson'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Zoom Effect', 'mogo'),
                ),
                'choices' => array(
                    'zoomIn' => __('zoomIn', 'unyson'),
                    'zoomInDown' => __('zoomInDown', 'unyson'),
                    'zoomInLeft' => __('zoomInLeft', 'unyson'),
                    'zoomInRight' => __('zoomInRight', 'unyson'),
                    'zoomInUp' => __('zoomInUp', 'unyson'),
                    'hinge' => __('hinge', 'unyson'),
                    'rollIn' => __('rollIn', 'unyson'),
                ),
            ),
        ),
    ),
    'tablet' => array(
        'label' => __('Responsive Layout for Tablet', 'mogo'),
        'desc' => __('Choose the responsive tablet display for this column', 'mogo'),
        'help' => __('Use this option in order to control how this column behaves on tablets (and devices with the resoution between 768px - 990px). Note that on phones all the columns are 1/1 by default.', 'mogo'),
        'type' => 'select',
        'value' => '',
        'choices' => array(
            '' => __('Automatically inherit default layout', 'mogo'),
            'fw-col-sm-2' => __('Make it a 1/6 column', 'mogo'),
            'fw-col-sm-3' => __('Make it a 1/4 column', 'mogo'),
            'fw-col-sm-4' => __('Make it a 1/3 column', 'mogo'),
            'fw-col-sm-6' => __('Make it a 1/2 column', 'mogo'),
            'fw-col-sm-8' => __('Make it a 2/3 column', 'mogo'),
            'fw-col-sm-9' => __('Make it a 3/4 column', 'mogo'),
            'fw-col-sm-12' => __('Make it a 1/1 column', 'mogo'),
        )
    ),
    'offset' => array(
        'label' => __('Layout Offset', 'mogo'),
        'desc' => __('Move columns to the right using .fw-col-md-offset-* classes ', 'mogo'),
        'help' => __('These classes increase the left margin of a column by * columns. For example, .fw-col-md-offset-4 moves .fw-col-md-4 over four columns.', 'mogo'),
        'type' => 'select',
        'value' => '',
        'choices' => array(
            '' => __('Nothing', 'mogo'),
            'fw-col-sm-offset-1' => __('moves 1 column', 'mogo'),
            'fw-col-sm-offset-2' => __('moves 2 column', 'mogo'),
            'fw-col-sm-offset-3' => __('moves 3 column', 'mogo'),
            'fw-col-sm-offset-4' => __('moves 4 column', 'mogo'),
            'fw-col-sm-offset-5' => __('moves 5 column', 'mogo'),
            'fw-col-sm-offset-6' => __('moves 6 column', 'mogo'),
        )
    ),
    'class' => array(
        'label' => __('Custom Class', 'mogo'),
        'desc' => __('Enter custom CSS class', 'mogo'),
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'mogo'),
        'type' => 'text',
        'value' => '',
    ),
);
