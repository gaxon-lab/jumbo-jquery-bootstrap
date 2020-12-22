<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Layouts extends Base_Controller {

    /**
     * Index Page for this controller.
     */
    public function index($theme = 'layout-1') {
        $this->theme = $theme;
        
        $this->crm();
    }

    /*
     * Dashboard CRM
     */
    function crm() {
        $this->addjs(base_url("node_modules/chart.js/dist/Chart.min.js"), TRUE);

        $this->addjs(base_url("node_modules/ammap3/ammap/ammap.js"), TRUE);
        $this->addjs(base_url("node_modules/ammap3/ammap/maps/js/continentsLow.js"), TRUE);
        $this->addjs(base_url("node_modules/ammap3/ammap/themes/light.js"), TRUE);

        $this->addjs(base_url("node_modules/amcharts3/amcharts/amcharts.js"), TRUE);
        $this->addjs(base_url("node_modules/amcharts3/amcharts/gauge.js"), TRUE);
        $this->addjs(assets_url("js/custom/charts/dashboard-default.js"), TRUE);

        $this->bulid_layout("templates/main/dashboards/crm");
    }
}