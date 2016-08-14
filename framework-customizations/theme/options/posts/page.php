<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'main' => array(
        'title' => false,
        'type' => 'box',
        'options' => array(
            'Page' => array(
                'title' => __('Page Options', 'mogo'),
                'type' => 'tab',
                'options' => array(
                    'page_sections' => array(
                        'type' => 'multi-picker',
                        'label' => false,
                        'desc' => false,
                        'picker' => array(
                            'xs_page_section' => array(
                                'label' => __('This page is a section:', 'mogo'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'on',
                                    'label' => __('Yes', 'mogo')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'mogo')
                                ),
                                'value' => 'no',
                                'desc' => __('If this a <b>One page Section</b>,  set this field to <b>yes</b>. And if this page is not section, set it to <b>no</b>', 'mogo'),
                                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('If this page for one page section. set yes ', 'mogo'), __('For One page always will be <b>yes</b>', 'mogo')
                                ),
                            )
                        ),
                        'choices' => array(
                            'on' => array(
                                'hide_title_from_menu' => array(
                                    'type' => 'switch',
                                    'label' => __('Hide title from menu ?', 'mogo'),
                                    'right-choice' => array(
                                        'value' => 'yes',
                                        'label' => __('Yes', 'mogo')
                                    ),
                                    'left-choice' => array(
                                        'value' => 'no',
                                        'label' => __('No', 'mogo')
                                    ),
                                    'value' => 'no',
                                    'desc' => __('If you dont want to add title(or this page) on menu. you can set yes. if you set yes. this menu will be hide in menu.', 'mogo'),
                                ),
                            ),
                            'no' => array(),
                        ),
                        'show_borders' => false,
                    ),
                ),
            ),
        ),
    ),
);




//if (!defined('FW')) {
//    die('Forbidden');
//}
//
//$options = array(
//    'main' => array(
//        'title' => false,
//        'type' => 'box',
//        'options' => array(
//            'page_sections' => array(
//                'type' => 'multi-picker',
//                'label' => false,
//                'desc' => false,
//                'picker' => array(
//                    'xs_page_section' => array(
//                        'label' => __('This page is a section:', 'mogo'),
//                        'type' => 'switch',
//                        'right-choice' => array(
//                            'value' => 'on',
//                            'label' => __('Yes', 'mogo')
//                        ),
//                        'left-choice' => array(
//                            'value' => 'no',
//                            'label' => __('No', 'mogo')
//                        ),
//                        'value' => 'no',
//                        'desc' => __('If this a <b>One page Section</b>,  set this field to <b>yes</b>. And if this page is not section, set it to <b>no</b>', 'mogo'),
//                        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('If this page for one page section. set yes ', 'mogo'), __('For One page always will be <b>yes</b>', 'mogo')
//                        ),
//                    )
//                ),
//                'choices' => array(
//                    'on' => array(
//                        'hide_title_from_menu' => array(
//                            'type' => 'switch',
//                            'label' => __('Hide title from menu ?', 'mogo'),
//                            'right-choice' => array(
//                                'value' => 'yes',
//                                'label' => __('Yes', 'mogo')
//                            ),
//                            'left-choice' => array(
//                                'value' => 'no',
//                                'label' => __('No', 'mogo')
//                            ),
//                            'value' => 'no',
//                            'desc' => __('If you dont want to add title(or this page) on menu. you can set yes. if you set yes. this menu will be hide in menu.', 'mogo'),
//                        ),
//                    ),
//                    'no' => array(),
//                ),
//                'show_borders' => false,
//            ),
//        ),
//    ),
//);
