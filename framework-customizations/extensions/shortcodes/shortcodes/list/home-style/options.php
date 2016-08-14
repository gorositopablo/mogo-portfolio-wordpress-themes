<?php

if (!defined('FW'))
    die('Forbidden');



$options = array(
    'background_style_settings' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'background' => array(
                'label' => __('Background', 'mogo'),
                'desc' => __('Select the background for your section', 'mogo'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'default' => __('Default', 'mogo'),
                    'slider' => __('Slider', 'mogo'),
                ),
                'value' => 'default'
            ),
        ),
        'choices' => array(
            'default' => array(
                
                'homepage_style_settings' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'homepage_style' => array(
                            'label' => __('Homepage Style', 'mogo'),
                            'type' => 'image-picker',
                            'value' => 'home-1',
                            'desc' => __('Select Home page style.', 'mogo'),
                            'choices' => array(
                                'home-3' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => MOGO_IMAGES . '/image-picker/home3.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 214,
                                        'src' => MOGO_IMAGES . '/image-picker/home3.jpg'
                                    ),
                                ),
                                'home-1' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => MOGO_IMAGES . '/image-picker/home1.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 214,
                                        'src' => MOGO_IMAGES . '/image-picker/home1.jpg'
                                    ),
                                ),
                                'home-2' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => MOGO_IMAGES . '/image-picker/home2.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 214,
                                        'src' => MOGO_IMAGES . '/image-picker/home2.jpg'
                                    ),
                                ),
                                'home-4' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => MOGO_IMAGES . '/image-picker/home4.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 214,
                                        'src' => MOGO_IMAGES . '/image-picker/home4.jpg'
                                    ),
                                ),
                                'home-6' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => MOGO_IMAGES . '/image-picker/home7.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 214,
                                        'src' => MOGO_IMAGES . '/image-picker/home7.jpg'
                                    ),
                                ),
                                'home-7' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => MOGO_IMAGES . '/image-picker/home8.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 214,
                                        'src' => MOGO_IMAGES . '/image-picker/home8.jpg'
                                    ),
                                ),
                                'home-8' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => MOGO_IMAGES . '/image-picker/coming-soon.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 214,
                                        'src' => MOGO_IMAGES . '/image-picker/coming-soon.jpg'
                                    ),
                                ),
                                'home-5' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => MOGO_IMAGES . '/image-picker/home5.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 214,
                                        'src' => MOGO_IMAGES . '/image-picker/home5.jpg'
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'choices' => array(
                        'home-1' => array(
                            'mailchimp' => array(
                                'type' => 'text',
                                'label' => __('Mailchimp URL', 'mogo'),
                                'desc' => __('Add mailchimp OptIn URL. you can check this how to get optin Mailchimp OptIn URL <b>http://goo.gl/vjnzZm</b>', 'mogo'),
                            )
                        ),
                        'home-2' => array(
                            'side_image' => array(
                                'type' => 'upload',
                                'label' => __('Right side Image', 'mogo'),
                                'desc' => __('Upload any image mobile or whatever.  which will display in right side.  you can use it blank. so only left side text will show in home page', 'mogo'),
                            )
                        ),
                        'home-4' => array(
                            'email' => array(
                                'type' => 'text',
                                'label' => __('Form Email', 'mogo'),
                                'desc' => __('Add Email Address. which you recive email', 'mogo'),
                                'value' => __('example@example.com', 'mogo'),
                            ),
                            'title' => array(
                                'type' => 'text',
                                'label' => __('Form Title', 'mogo'),
                                'value' => __('TRY OUR SERVICE', 'mogo'),
                            ),
                            'button_text' => array(
                                'type' => 'text',
                                'label' => __('Button Text', 'mogo'),
                                'value' => __('Lets Try Free', 'mogo'),
                            )
                        ),
                        'home-5' => array(
                            'bottom_image' => array(
                                'type' => 'upload',
                                'label' => __('Bottom Image', 'mogo'),
                            )
                        ),
                        'home-6' => array(
                            'right_video_link' => array(
                                'type' => 'text',
                                'label' => __('Video link', 'mogo'),
                                'desc' => __('Add your youtube or vimeo video link.  youtube video link will be embed video link', 'mogo'),
                                'value' => __('http://player.vimeo.com/video/104566183', 'mogo'),
                            )
                        ),
                        'home-7' => array(
                            'date' => array(
                                'type' => 'text',
                                'label' => __('Date', 'mogo'),
                                'desc' => __('Date', 'mogo'),
                                'value' => __('Saturday, Nov 29 11:00 PM — 6:00 PM', 'mogo'),
                            ),
                            'event' => array(
                                'type' => 'date-picker',
                                'label' => __('Events Countdown', 'mogo'),
                                'desc' => __('Add event date from here', 'mogo'),
                                'min-date' => null,
                                'value' => '',
                            )
                        ),
                        'home-8' => array(
                            'event' => array(
                                'type' => 'date-picker',
                                'label' => __('Countdown', 'mogo'),
                                'desc' => __('Add countdown date from here', 'mogo'),
                                'min-date' => null,
                                'value' => '',
                            ),
                            'subscribe' => array(
                                'type' => 'text',
                                'label' => __('Subscription Title', 'mogo'),
                                'desc' => __('Subscription title', 'mogo'),
                                'value' => __('Subscribe with us. to get update . When our SIte Will Be publish', 'mogo'),
                            ),
                            'mailchimp' => array(
                                'type' => 'text',
                                'label' => __('Mailchimp URL', 'mogo'),
                                'desc' => __('Add mailchimp OptIn URL. you can check this how to get optin Mailchimp OptIn URL <b>http://goo.gl/vjnzZm</b>', 'mogo'),
                            )
                        ),
                    ),
                    'show_borders' => false,
                ),
                'home_title' => array(
                    'label' => __('Title', 'mogo'),
                    'type' => 'text',
                    'value' => 'Launce your %sstartup with wow%s landing Page Theme',
                    'desc' => __('%s will be bold font. use this like %sstartup%s if you just use startup  text will be normal.', 'mogo'),
                ),
                'home_subtitle' => array(
                    'label' => __('Sub Title', 'mogo'),
                    'type' => 'textarea',
                    'value' => 'wow ultimate landing page builder save your tons of time to design your website, Loren ipsum dolar sit amet cool Apps showcase ',
                    'desc' => __('Add home page Message.', 'mogo'),
                ),
                'home_button' => array(
                    'label' => __('Button', 'mogo'),
                    'type' => 'addable-popup',
                    'desc' => __('Add Homepage button', 'mogo'),
                    'template' => 'Button : {{- btn_label }}',
                    'popup-options' => array(
                        'btn_style' => array(
                            'label' => __('Style', 'mogo'),
                            'desc' => __('Choose button style', 'mogo'),
                            'type' => 'image-picker',
                            'value' => '',
                            'choices' => array(
                                'default' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => MOGO_IMAGES . '/image-picker/button-style1.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 208,
                                        'src' => MOGO_IMAGES . '/image-picker/button-style1.jpg'
                                    ),
                                ),
                                'primary' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => MOGO_IMAGES . '/image-picker/button-style2.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 208,
                                        'src' => MOGO_IMAGES . '/image-picker/button-style2.jpg'
                                    ),
                                ),
                                'download' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => MOGO_IMAGES . '/image-picker/button-style3.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 208,
                                        'src' => MOGO_IMAGES . '/image-picker/button-style3.jpg'
                                    ),
                                ),
                            ),
                        ),
                        'btn_label' => array(
                            'label' => __('Button Label', 'mogo'),
                            'desc' => __('This is the text that appears on your button', 'mogo'),
                            'type' => 'text',
                            'value' => 'Read More'
                        ),
                        'btn_link' => array(
                            'label' => __('Button Link', 'mogo'),
                            'desc' => __('Where should your button link to', 'mogo'),
                            'type' => 'text',
                            'value' => '#'
                        ),
                        'btn_target' => array(
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
                        'btn_icon_group' => array(
                            'type' => 'group',
                            'options' => array(
                                'icon' => array(
                                    'type' => 'icon',
                                    'label' => __('Icon', 'mogo')
                                ),
                                'icon_position' => array(
                                    'type' => 'switch',
                                    'label' => __('', 'mogo'),
                                    'desc' => __('Choose the icon position', 'mogo'),
                                    'right-choice' => array(
                                        'value' => 'pull-right',
                                        'label' => __('Right', 'mogo'),
                                    ),
                                    'left-choice' => array(
                                        'value' => '',
                                        'label' => __('Left', 'mogo'),
                                    ),
                                ),
                            )
                        ),
                    )
                ),),
            //slider
            'slider' => array(
                'slider_style' => array(
                    'label' => __('Slider', 'mogo'),
                    'type' => 'addable-popup',
                    'desc' => __('Add Slider Image And and Text.', 'mogo'),
                    'template' => '{{- slider_title }}',
                    'popup-options' => array(
                        'slider_image' => array(
                            'label' => __('Slider Image', 'mogo'),
                            'desc' => __('Upload Slider Image.', 'mogo'),
                            'type' => 'upload',
                        ),
                        'slider_title' => array(
                            'label' => __('Slider Title', 'mogo'),
                            'type' => 'text',
                            'value' => 'wow %sLanding Page%s Wordpress Theme',
                            'desc' => __('Add Slider Heading Title. %s for bold Text', 'mogo'),
                        ),
                        'slider_subtitle' => array(
                            'label' => __('Slider Sub Title', 'mogo'),
                            'type' => 'text',
                            'value' => 'wow Just Awesome,  build your Wordpress Theme on the fly',
                            'desc' => __('Add Slider Heading Title.', 'mogo'),
                        ),
                        'slider_button' => array(
                            'label' => __('Button', 'mogo'),
                            'type' => 'addable-popup',
                            'desc' => __('Add Slider button button', 'mogo'),
                            'template' => 'Button : {{- btn_label }}',
                            'popup-options' => array(
                                'btn_style' => array(
                                    'label' => __('Style', 'mogo'),
                                    'desc' => __('Choose button style', 'mogo'),
                                    'type' => 'image-picker',
                                    'value' => '',
                                    'choices' => array(
                                        'default' => array(
                                            'small' => array(
                                                'height' => 70,
                                                'src' => MOGO_IMAGES . '/image-picker/button-style1.jpg'
                                            ),
                                            'large' => array(
                                                'height' => 208,
                                                'src' => MOGO_IMAGES . '/image-picker/button-style1.jpg'
                                            ),
                                        ),
                                        'primary' => array(
                                            'small' => array(
                                                'height' => 70,
                                                'src' => MOGO_IMAGES . '/image-picker/button-style2.jpg'
                                            ),
                                            'large' => array(
                                                'height' => 208,
                                                'src' => MOGO_IMAGES . '/image-picker/button-style2.jpg'
                                            ),
                                        ),
                                        'download' => array(
                                            'small' => array(
                                                'height' => 70,
                                                'src' => MOGO_IMAGES . '/image-picker/button-style3.jpg'
                                            ),
                                            'large' => array(
                                                'height' => 208,
                                                'src' => MOGO_IMAGES . '/image-picker/button-style3.jpg'
                                            ),
                                        ),
                                    ),
                                ),
                                'btn_label' => array(
                                    'label' => __('Button Label', 'mogo'),
                                    'desc' => __('This is the text that appears on your button', 'mogo'),
                                    'type' => 'text',
                                    'value' => 'Read More'
                                ),
                                'btn_link' => array(
                                    'label' => __('Button Link', 'mogo'),
                                    'desc' => __('Where should your button link to', 'mogo'),
                                    'type' => 'text',
                                    'value' => '#'
                                ),
                                'btn_target' => array(
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
                                'btn_icon_group' => array(
                                    'type' => 'group',
                                    'options' => array(
                                        'icon' => array(
                                            'type' => 'icon',
                                            'label' => __('Icon', 'mogo')
                                        ),
                                        'icon_position' => array(
                                            'type' => 'switch',
                                            'label' => __('', 'mogo'),
                                            'desc' => __('Choose the icon position', 'mogo'),
                                            'right-choice' => array(
                                                'value' => 'pull-right',
                                                'label' => __('Right', 'mogo'),
                                            ),
                                            'left-choice' => array(
                                                'value' => '',
                                                'label' => __('Left', 'mogo'),
                                            ),
                                        ),
                                    )
                                ),
                            )
                        ),
                    ),
                ),
            ),
        ),
        'show_borders' => false,
    ),
);
