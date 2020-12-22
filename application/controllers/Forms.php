<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends Base_Controller {

    /**
     * Index Page for this controller.
     */
    public function index() {
        $this->basic();
    }

    /*
     * Basic Form
     */

    function basic() {
        $this->bulid_layout("templates/forms/basic-form");
    }

    /*
     * File Upload
     */

    function file_upload() {
        $this->addcss(base_url("node_modules/dropzone/dist/min/dropzone.min.css"));
        $this->addjs(base_url("node_modules/dropzone/dist/min/dropzone.min.js"), true);
        $this->addjs(assets_url("js/global/dropzone.js"), true);
        
        $this->bulid_layout("templates/forms/file-upload");
    }

}
