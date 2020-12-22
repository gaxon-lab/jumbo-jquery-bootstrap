<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Apps extends Base_Controller {

    public function __construct() {
        parent::__construct();

        $this->addjs(assets_url("js/" . $this->data['theme'] . "/apps/app.js"), TRUE);
    }

    /**
     * Index Page for this controller.
     */
    public function index() {
        $this->task_manager();
    }

    /*
     * Tasks list
     */

    function task_manager() {
        $this->bulid_layout("templates/apps/task-manager");
    }

    /*
     * Tasks Detail
     */

    function task_detail() {
        $this->addcss(base_url("node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css"));
        $this->addjs(base_url("node_modules/moment/min/locales.min.js"), TRUE);
        $this->addjs(base_url("node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"), TRUE);
        $this->addjs(assets_url("js/global/apps/task-manager.js"), TRUE);
        $this->bulid_layout("templates/apps/task-detail");
    }

    /*
     * Mails list
     */

    function mail() {
        $this->addjs(assets_url("js/global/apps/mail-app.js"), TRUE);

        $this->bulid_layout("templates/apps/mail");
    }

    /*
     * Mail Detail
     */

    function mail_detail() {
        $this->addjs(assets_url("js/global/apps/mail-app.js"), TRUE);

        $this->bulid_layout("templates/apps/mail-detail");
    }

    /*
     * Contacts list
     */

    function contact() {
        $this->bulid_layout("templates/apps/contact");
    }

    /*
     * Chat
     */

    function chat() {
        $this->bulid_layout("templates/apps/chat");
    }

    /*
     * Chat Start
     */

    function chat_start() {
        $this->bulid_layout("templates/apps/chat-start");
    }

}
