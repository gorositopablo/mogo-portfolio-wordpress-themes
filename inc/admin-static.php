<?php

if (!defined('ABSPATH'))
    die('Direct access forbidden.');
/**
 * Include static files: javascript and css for backend
 */
wp_enqueue_style('startuploading-theme.css', MOGO_CSS . '/bt_admin.css', null, MOGO_VERSION);
wp_enqueue_style('bt-iconfonts.css', MOGO_CSS . '/iconfont.css', null, MOGO_VERSION);
