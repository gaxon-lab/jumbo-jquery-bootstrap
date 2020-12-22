<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Base_Controller {

    /**
     * Index Page for this controller.
     */
    public function index($page = '') {
        $layout = '';
        $frontend_pages = array('login', 'signup', 'forgot-password', 'lock-screen', '404', '500');
        if (in_array($page, $frontend_pages)) {
            $layout = 'frontend';
        }

        $this->bulid_layout("templates/pages/page-" . $page, $layout);
    }
}
