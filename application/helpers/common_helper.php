<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * This is function will be call to get body classes
 * 
 * @return string of body classes
 */

function body_classes() {
    $CI = & get_instance();
    $body_classes = implode(" ", $CI->body_classes);

    return $body_classes;
}

/**
 * Print data in Pre tag
 * @param type $data
 */
function printWithPre($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

/**
 * Get Menus List
 */
function getMenuList() {
    $menus = array(
        array('type' => 'group', 'title' => 'Main', 'icon' => '', 'children' => array(
                array('type' => 'collapse', 'title' => 'Dashboard', 'icon' => 'icon-dashboard', 'children' => array(
                        array('type' => 'item', 'title' => 'Listing', 'url' => site_url('main/dashboard/listing'), 'icon' => 'icon-listing-dbrd'),
                        array('type' => 'item', 'title' => 'Real Estate', 'url' => site_url('main/dashboard/real_estate'), 'icon' => 'icon-company'),
                        array('type' => 'item', 'title' => 'Crypto', 'url' => site_url('main/dashboard/crypto'), 'icon' => 'icon-crypto'),
                        array('type' => 'item', 'title' => 'Crm', 'url' => site_url('main/dashboard/crm'), 'icon' => 'icon-crm'),
                    )),
                array('type' => 'item', 'title' => 'Metrics', 'url' => site_url('main/metrics'), 'icon' => 'icon-metrics'),
                array('type' => 'item', 'title' => 'Layouts', 'url' => site_url('pages/layouts'), 'icon' => 'icon-layout')
            )),
    );
}

/**
 * Copy a whole Directory
 *
 * Copy a directory recrusively ( all file and directories inside it )
 *
 * @access    public
 * @param    string    path to source dir
 * @param    string    path to destination dir
 * @return    array
 */
if (!function_exists('directory_copy')) {

    function directory_copy($srcdir, $dstdir) {
        //preparing the paths
        $srcdir = rtrim($srcdir, '/');
        $dstdir = rtrim($dstdir, '/');

        //creating the destination directory
        if (!is_dir($dstdir))
            mkdir($dstdir, 0777, true);

        //Mapping the directory
        $dir_map = directory_map($srcdir);

        foreach ($dir_map as $object_key => $object_value) {
            if (is_numeric($object_key))
                copy($srcdir . '/' . $object_value, $dstdir . '/' . $object_value); //This is a File not a directory
            else
                directory_copy($srcdir . '/' . $object_key, $dstdir . '/' . $object_key); //this is a directory
        }
    }

}

/**
 * Delete a whole Directory
 * 
 * Delete a directory recrusively ( all file and directories inside it )
 * 
 * @access    public
 * @param    string    path to source dir
 * @return    boolean
 */
if (!function_exists('remove_directory')) {

    function remove_directory($directory, $empty = FALSE) {
        if (substr($directory, -1) == '/') {
            $directory = substr($directory, 0, -1);
        }

        if (!file_exists($directory) || !is_dir($directory)) {
            return FALSE;
        } elseif (!is_readable($directory)) {

            return FALSE;
        } else {

            $handle = opendir($directory);
            while (FALSE !== ($item = readdir($handle))) {
                if ($item != '.' && $item != '..') {
                    $path = $directory . '/' . $item;
                    if (is_dir($path)) {
                        remove_directory($path);
                    } else {
                        unlink($path);
                    }
                }
            }
            closedir($handle);
            if ($empty == FALSE) {
                if (!rmdir($directory)) {
                    return FALSE;
                }
            }
            return TRUE;
        }
    }

}