<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'demo_text' => array(
        'label' => __('Text', 'mogo'),
        'type' => 'text',
        'value' => 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_short_text' => array(
        'label' => __('Short Text', 'mogo'),
        'type' => 'short-text',
        'value' => '7',
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_password' => array(
        'label' => __('Password', 'mogo'),
        'type' => 'password',
        'value' => 'Dotted text',
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_hidden' => array(
        'label' => false,
        'type' => 'hidden',
        'value' => '{some: "json"}',
        'desc' => false,
    ),
    'demo_textarea' => array(
        'label' => __('Textarea', 'mogo'),
        'type' => 'textarea',
        'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => array(
            'icon' => 'video',
            'html' => '<iframe width="420" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>'
        ),
    ),
    'demo_wp_editor' => array(
        'label' => __('Rich Text Editor', 'mogo'),
        'type' => 'wp-editor',
        'value' => 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_html' => array(
        'label' => __('HTML', 'mogo'),
        'type' => 'html',
        'value' => '{some: "json"}',
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'html' => '<em>Lorem</em> <b>ipsum</b> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAANbY1E9YMgAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAADWSURBVDjLlZNNCsIwEEZzKW/jyoVbD+Aip/AGgmvRldCKNxDBv4LSfSG7kBZix37BQGiapA48ZpjMvIZAGRExwDmnESw7MMvsHnMFTdOQUsqjrmtXsggKEEVReCDseZc/HbOgoCxLDytwUEFBVVUe/fjNDguEEFGSAiml4Xq+DdZJAV78sM1oOpnT/fI0oEYPZ0lBtjuaBWSttcHtRQWvx9sMrlcb7+HQwxlmojfI9ycziGyj34sK3AV8zd7KFSYFCCwO1aMFsQgK8DO1bRsFM0HBP9i9L2ONMKHNZV7xAAAAAElFTkSuQmCC">',
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_checkbox' => array(
        'label' => __('Checkbox', 'mogo'),
        'type' => 'checkbox',
        'value' => true,
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'text' => __('Custom text', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_checkboxes' => array(
        'label' => __('Checkboxes', 'mogo'),
        'type' => 'checkboxes',
        'value' => array(
            'c1' => false,
            'c2' => true,
        ),
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'choices' => array(
            'c1' => __('Checkbox 1 Custom Text', 'mogo'),
            'c2' => __('Checkbox 2 Custom Text', 'mogo'),
            'c3' => __('Checkbox 3 Custom Text', 'mogo'),
        ),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_switch' => array(
        'label' => __('Switch', 'mogo'),
        'type' => 'switch',
        'right-choice' => array(
            'value' => 'yes',
            'label' => __('Yes', 'mogo')
        ),
        'left-choice' => array(
            'value' => 'no',
            'label' => __('No', 'mogo')
        ),
        'value' => 'yes',
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_select' => array(
        'label' => __('Select', 'mogo'),
        'type' => 'select',
        'value' => 'c',
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'choices' => array(
            '' => '---',
            'a' => __('Lorem ipsum', 'mogo'),
            'b' => array(
                'text' => __('Consectetur', 'mogo'),
                'attr' => array(
                    'label' => __('Label overrides text', 'mogo'),
                    'data-whatever' => 'some data',
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Optgroup Label', 'mogo'),
                    'data-whatever' => 'some data',
                ),
                'choices' => array(
                    'c' => __('Sed ut perspiciatis', 'mogo'),
                    'd' => __('Excepteur sint occaecat', 'mogo'),
                ),
            ),
            1 => __('One', 'mogo'),
            2 => __('Two', 'mogo'),
            3 => __('Three', 'mogo'),
        ),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_short_select' => array(
        'label' => __('Short Select', 'mogo'),
        'type' => 'short-select',
        'value' => '7',
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'choices' => array(
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
            '6' => '6',
            '7' => '7',
        ),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_select_multiple' => array(
        'label' => __('Select Multiple', 'mogo'),
        'type' => 'select-multiple',
        'value' => array('c', '2'),
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'choices' => array(
            '' => '---',
            'a' => __('Lorem ipsum', 'mogo'),
            'b' => array(
                'text' => __('Consectetur', 'mogo'),
                'attr' => array(
                    'label' => __('Label overrides text', 'mogo'),
                    'data-whatever' => 'some data',
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Optgroup Label', 'mogo'),
                    'data-whatever' => 'some data',
                ),
                'choices' => array(
                    'c' => __('Sed ut perspiciatis', 'mogo'),
                    'd' => __('Excepteur sint occaecat', 'mogo'),
                ),
            ),
            1 => __('One', 'mogo'),
            2 => __('Two', 'mogo'),
            3 => __('Three', 'mogo'),
        ),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_multi_select_posts' => array(
        'type' => 'multi-select',
        'label' => __('Multi-Select: Posts', 'mogo'),
        'population' => 'posts',
        'source' => 'page',
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_multi_select_taxonomies' => array(
        'type' => 'multi-select',
        'label' => __('Multi-Select: Taxonomies', 'mogo'),
        'population' => 'taxonomy',
        'source' => 'category',
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_multi_select_users' => array(
        'type' => 'multi-select',
        'label' => __('Multi-Select: Users', 'mogo'),
        'population' => 'users',
        'source' => 'administrator',
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_multi_select_array' => array(
        'type' => 'multi-select',
        'label' => __('Multi-Select: Custom Array', 'mogo'),
        'population' => 'array',
        'choices' => array(
            'hello' => __('Hello', 'mogo'),
            'world' => __('World', 'mogo'),
        ),
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_radio' => array(
        'label' => __('Radio', 'mogo'),
        'type' => 'radio',
        'value' => 'c2',
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'choices' => array(
            'c1' => __('Radio 1 Custom Text', 'mogo'),
            'c2' => __('Radio 2 Custom Text', 'mogo'),
            'c3' => __('Radio 3 Custom Text', 'mogo'),
        ),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_radio_text' => array(
        'label' => __('Radio Text', 'mogo'),
        'type' => 'radio-text',
        'value' => '50',
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'choices' => array(
            '25' => __('25%', 'mogo'),
            '50' => __('50%', 'mogo'),
            '100' => __('100%', 'mogo'),
        ),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_image_picker' => array(
        'label' => __('Image Picker', 'mogo'),
        'type' => 'image-picker',
        'value' => '',
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'attr' => array(
            'data-height' => 70,
        ),
        'choices' => array(
            'choice-1' => array(
                'small' => array(
                    'height' => 70,
                    'src' => get_template_directory_uri() . '/images/image-picker-demo/thumb1.jpg'
                ),
                'large' => array(
                    'height' => 214,
                    'src' => get_template_directory_uri() . '/images/image-picker-demo/tooltip1.jpg'
                ),
            ),
            'choice-2' => array(
                'small' => array(
                    'height' => 70,
                    'src' => get_template_directory_uri() . '/images/image-picker-demo/thumb2.jpg'
                ),
                'large' => array(
                    'height' => 214,
                    'src' => get_template_directory_uri() . '/images/image-picker-demo/tooltip2.jpg'
                ),
            ),
        ),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_icon' => array(
        'label' => __('Icon', 'mogo'),
        'type' => 'icon',
        'value' => 'fa fa-linux',
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_upload' => array(
        'label' => __('Single Upload', 'mogo'),
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'type' => 'upload',
        'images_only' => false,
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_upload_images' => array(
        'label' => __('Single Upload (Images Only)', 'mogo'),
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'type' => 'upload',
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_multi_upload' => array(
        'label' => __('Multi Upload', 'mogo'),
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'type' => 'multi-upload',
        'images_only' => false,
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_multi_upload_images' => array(
        'label' => __('Multi Upload (Images Only)', 'mogo'),
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'type' => 'multi-upload',
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_color_picker' => array(
        'label' => __('Color Picker', 'mogo'),
        'type' => 'color-picker',
        'value' => '',
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_rgba_color_picker' => array(
        'label' => __('RGBA Color Picker', 'mogo'),
        'type' => 'rgba-color-picker',
        'value' => 'rgba(255, 0, 0, .5)',
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_gradient' => array(
        'label' => __('Gradient', 'mogo'),
        'type' => 'gradient',
        'value' => array(
            'primary' => '#ffffff',
            'secondary' => '#ffffff'
        ),
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_background_image' => array(
        'label' => __('Background Image', 'mogo'),
        'type' => 'background-image',
        'value' => 'none',
        'choices' => array(
            'none' => array(
                'icon' => get_template_directory_uri() . '/images/patterns/no_pattern.jpg',
                'css' => array(
                    'background-image' => 'none'
                )
            ),
            'bg-1' => array(
                'icon' => get_template_directory_uri() . '/images/patterns/diagonal_bottom_to_top_pattern_preview.jpg',
                'css' => array(
                    'background-image' => 'url("' . get_template_directory_uri() . '/images/patterns/diagonal_bottom_to_top_pattern.png' . '")',
                    'background-repeat' => 'repeat',
                )
            ),
            'bg-2' => array(
                'icon' => get_template_directory_uri() . '/images/patterns/diagonal_top_to_bottom_pattern_preview.jpg',
                'css' => array(
                    'background-image' => 'url("' . get_template_directory_uri() . '/images/patterns/diagonal_top_to_bottom_pattern.png' . '")',
                    'background-repeat' => 'repeat',
                )
            ),
            'bg-3' => array(
                'icon' => get_template_directory_uri() . '/images/patterns/dots_pattern_preview.jpg',
                'css' => array(
                    'background-image' => 'url("' . get_template_directory_uri() . '/images/patterns/dots_pattern.png' . '")',
                    'background-repeat' => 'repeat',
                )
            ),
            'bg-4' => array(
                'icon' => get_template_directory_uri() . '/images/patterns/romb_pattern_preview.jpg',
                'css' => array(
                    'background-image' => 'url("' . get_template_directory_uri() . '/images/patterns/romb_pattern.png' . '")',
                    'background-repeat' => 'repeat',
                )
            ),
            'bg-5' => array(
                'icon' => get_template_directory_uri() . '/images/patterns/square_pattern_preview.jpg',
                'css' => array(
                    'background-image' => 'url("' . get_template_directory_uri() . '/images/patterns/square_pattern.png' . '")',
                    'background-repeat' => 'repeat',
                )
            ),
            'bg-6' => array(
                'icon' => get_template_directory_uri() . '/images/patterns/noise_pattern_preview.jpg',
                'css' => array(
                    'background-image' => 'url("' . get_template_directory_uri() . '/images/patterns/noise_pattern.png' . '")',
                    'background-repeat' => 'repeat',
                )
            ),
            'bg-7' => array(
                'icon' => get_template_directory_uri() . '/images/patterns/vertical_lines_pattern_preview.jpg',
                'css' => array(
                    'background-image' => 'url("' . get_template_directory_uri() . '/images/patterns/vertical_lines_pattern.png' . '")',
                    'background-repeat' => 'repeat',
                )
            ),
            'bg-8' => array(
                'icon' => get_template_directory_uri() . '/images/patterns/waves_pattern_preview.jpg',
                'css' => array(
                    'background-image' => 'url("' . get_template_directory_uri() . '/images/patterns/waves_pattern.png' . '")',
                    'background-repeat' => 'repeat',
                )
            ),
        ),
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_typography' => array(
        'label' => __('Typography', 'mogo'),
        'type' => 'typography',
        'value' => array(
            'size' => 17,
            'family' => 'Verdana',
            'style' => '300italic',
            'color' => '#0000ff'
        ),
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_datetime_range' => array(
        'type' => 'datetime-range',
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
        'label' => __('Demo date range', 'mogo'),
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
        'datetime-pickers' => array(
            'from' => array(
                'timepicker' => false,
                'datepicker' => true,
            ),
            'to' => array(
                'timepicker' => false,
                'datepicker' => true,
            )
        ),
        'value' => array(
            'from' => '',
            'to' => ''
        )
    ),
    'demo_datetime_picker' => array(
        'type' => 'datetime-picker',
        'value' => '',
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
        'label' => __('Date & Time picker', 'mogo'),
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
        'datetime-picker' => array(
            'format' => 'd-m-Y H:i',
            'extra-formats' => array(),
            'moment-format' => 'DD-MM-YYYY HH:mm',
            'scrollInput' => false,
            'maxDate' => false,
            'minDate' => false,
            'timepicker' => true,
            'datepicker' => true,
            'defaultTime' => '12:00'
        )
    ),
    'demo_slider' => array(
        'label' => __('Slider', 'mogo'),
        'type' => 'slider',
        'value' => 10,
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_range_slider' => array(
        'label' => __('Range Slider', 'mogo'),
        'type' => 'range-slider',
        'value' => array(
            'from' => 30,
            'to' => 50
        ),
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
    ),
    'demo_addable_popup' => array(
        'label' => __('Addable Popup', 'mogo'),
        'type' => 'addable-popup',
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'template' => '{{- demo_text }}',
        'popup-options' => array(
            'demo_text' => array(
                'label' => __('Text', 'mogo'),
                'type' => 'text',
                'value' => 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
                ),
            ),
            'demo_image_picker' => array(
                'label' => __('Image Picker', 'mogo'),
                'type' => 'image-picker',
                'value' => '',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
                'choices' => array(
                    'choice-1' => array(
                        'label' => __('First Image', 'mogo'),
                        'small' => array(
                            'height' => 70,
                            'src' => get_template_directory_uri() . '/images/image-picker-demo/thumb1.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => get_template_directory_uri() . '/images/image-picker-demo/tooltip1.jpg'
                        ),
                    ),
                    'choice-2' => array(
                        'label' => __('Second Image', 'mogo'),
                        'small' => array(
                            'height' => 70,
                            'src' => get_template_directory_uri() . '/images/image-picker-demo/thumb2.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => get_template_directory_uri() . '/images/image-picker-demo/tooltip2.jpg'
                        ),
                    ),
                ),
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
                ),
            ),
            'demo_upload_images' => array(
                'label' => __('Single Upload (Images Only)', 'mogo'),
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
                'type' => 'upload',
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
                ),
            ),
            'demo_addable_popup_inner' => array(
                'label' => __('Addable Popup', 'mogo'),
                'type' => 'addable-popup',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
                'template' => 'Title color-picker value : {{- demo_color_picker }}',
                'popup-options' => array(
                    'demo_multi_upload_images' => array(
                        'label' => __('Multi Upload (images only)', 'mogo'),
                        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
                        'type' => 'multi-upload',
                        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
                        ),
                    ),
                    'demo_color_picker' => array(
                        'label' => __('Color Picker', 'mogo'),
                        'type' => 'color-picker',
                        'value' => '',
                        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
                        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
                        ),
                    )
                )
            ),
        ),
    ),
    'demo_addable_option' => array(
        'label' => __('Addable Option', 'mogo'),
        'type' => 'addable-option',
        'option' => array(
            'type' => 'text',
        ),
        'value' => array('Option 1', 'Option 2', 'Option 3'),
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        )
    ),
    'demo_addable_box' => array(
        'label' => __('Addable Box', 'mogo'),
        'type' => 'addable-box',
        'value' => array(),
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
        ),
        'box-controls' => array(//'custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',
        ),
        'box-options' => array(
            'demo_text' => array(
                'label' => __('Text', 'mogo'),
                'type' => 'text',
                'value' => 'Lorem ipsum dolor sit amet',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'), __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'mogo')
                ),
            ),
            'demo_textarea' => array(
                'label' => __('Textarea', 'mogo'),
                'type' => 'textarea',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mogo'),
                'help' => array(
                    'icon' => 'video',
                    'html' => '<iframe width="420" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>'
                ),
            ),
        ),
        'template' => '{{- demo_text }}',
        'limit' => 3,
    ),
);
