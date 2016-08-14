<?php

if (!defined('FW')) {
    die('Forbidden');
}

$manifest = array();

$manifest['name'] = __('Mogo', 'fw');
$manifest['uri'] = 'http://themeforest.com/user/XpeedStudio';
$manifest['description'] = __('Mogo WordPress Theme', 'fw');
$manifest['version'] = '1.0';
$manifest['author'] = 'XpeedStuio';
$manifest['author_uri'] = 'http://themeforest.com/user/XpeedStudio';
$manifest['requirements'] = array(
    'wordpress' => array(
        'min_version' => '4.1',
    /* 'max_version' => '4.99.9' */
    ),
);

$manifest['id'] = 'scratch';

$manifest['supported_extensions'] = array(
    'page-builder' => array(),
//    'slider' => array(),
    //'portfolio' => array(),
    'seo' => array(),
    'backups' => array(),
    'forms' => array(),
    'mailer' => array(),
    //'events' => array(),
    'analytics' => array(),
    //'styling' => array(),
    //'breadcrumbs' => array(),
    //'events' => array(),
    //'learning' => array(),
    //'sidebars' => array(),
);
