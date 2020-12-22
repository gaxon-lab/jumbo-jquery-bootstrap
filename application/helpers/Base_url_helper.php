<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * This function will return theme raltive path
 */

function view_path($file_path) {
    $CI = & get_instance();
    return VIEWPATH . 'layouts/' . $CI->data['theme'] . '/' . $file_path;
}

/*
 * This function will load file from themes
 */

function assets_url($file_path = '') {
    return base_url('assets/' . $file_path);
}