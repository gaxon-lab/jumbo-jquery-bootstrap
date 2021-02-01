<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Components extends Base_Controller {

    /**
     * Index Page for this controller.
     */
    public function index() {
        $this->basic();
    }

    /**
     * Basic Components
     */
    public function basic($component = 'alerts') {
        $this->addcss(assets_url("js/global/prismjs/prism.css"));
        $this->addjs(assets_url("js/global/prismjs/prism.js"), true);
        $this->bulid_layout("templates/components/basic/" . $component);
    }

    /**
     * Basic Table
     */
    public function tables($table = 'basic-table') {
        $function = str_replace("-", "_", $table);
        $this->$function();
    }

    function basic_table() {
        $this->bulid_layout("templates/components/tables/basic-table");
    }

    /**
     * Data Table
     */
    public function data_table() {
        $this->addcss(base_url("node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css"));
        $this->addjs(base_url("node_modules/datatables.net/js/jquery.dataTables.js"), true);
        $this->addjs(base_url("node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"), true);
        $this->addjs(assets_url("js/global/data-table.js"), true);

        $this->bulid_layout("templates/components/tables/data-table");
    }
}
