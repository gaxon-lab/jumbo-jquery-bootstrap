<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_visualization extends Base_Controller {

    /**
     * Index Page for this controller.
     */
    public function index() {
        $this->charts();
    }

    /*
     * Charts
     */

    function charts($chart = 'chartjs') {
        $function = str_replace("-", "_", $chart);
        $this->$function();
    }

    /*
     * Chart ChartJs
     */
    function chartjs() {
        $this->addjs(base_url("node_modules/chart.js/dist/Chart.min.js"), true);
        $this->addjs(base_url("node_modules/patternomaly/dist/patternomaly.js"), true);
        $this->addjs(assets_url("js/global/charts/page-chartjs.js"), true);
        
        $this->bulid_layout("templates/data-visualization/charts/chart-chartjs");        
    }

    /*
     * Chart Am
     */
    function amcharts() {
        $this->addjs(base_url("node_modules/amcharts3/amcharts/amcharts.js"), true);
        $this->addjs(base_url("node_modules/amcharts3/amcharts/themes/light.js"), true);
        $this->addjs(base_url("node_modules/amcharts3/amcharts/serial.js"), true);
        $this->addjs(base_url("node_modules/amcharts3/amcharts/pie.js"), true);
        $this->addjs(base_url("node_modules/amcharts3/amcharts/gauge.js"), true);
        $this->addjs(base_url("node_modules/amcharts3/amcharts/plugins/animate/animate.min.js"), true);
        $this->addjs(base_url("node_modules/amcharts3/amcharts/plugins/responsive/responsive.min.js"), true);
        $this->addjs(assets_url("js/global/charts/page-amcharts.js"), true);
        
        $this->bulid_layout("templates/data-visualization/charts/chart-amcharts");        
    }

    /*
     * Maps
     */

    function maps($map = 'basic') {
        if($map == 'am-maps') {
            $this->ammaps();
        } elseif($map == 'data-maps') {
            $this->data_maps();
        } else {
            $this->google_map($map);
        }
    }

    /*
     * Google Maps
     */
    function google_map($map = 'basic') {
        $this->addjs("//maps.google.com/maps/api/js?key=AIzaSyBbyv4oQ2Y4cDpMC8MGhERZ_kicy4YKcuc", true);
        $this->addjs(base_url("node_modules/gmaps/gmaps.min.js"), true);
        $this->addjs(assets_url("js/global/maps/gmaps.js"), true);
        
        $this->bulid_layout("templates/data-visualization/maps/map-" . $map);        
    }

    /*
     * Data Maps
     */
    function data_maps() {
        $this->addjs(base_url("node_modules/d3/d3.min.js"), true);
        $this->addjs(base_url("node_modules/topojson/build/topojson.min.js"), true);
        $this->addjs(base_url("node_modules/datamaps/dist/datamaps.all.min.js"), true);        
        $this->addjs(assets_url("js/global/maps/data-maps.js"), true);
        
        $this->bulid_layout("templates/data-visualization/maps/data-maps");        
    }

    /*
     * Map Am
     */
    function ammaps() {
        $this->addjs(base_url("node_modules/ammap3/ammap/ammap.js"), true);
        $this->addjs(base_url("node_modules/ammap3/ammap/themes/light.js"), true);
        $this->addjs(base_url("node_modules/ammap3/ammap/maps/js/continentsLow.js"), true);
        $this->addjs(base_url("node_modules/ammap3/ammap/maps/js/worldLow.js"), true);
        $this->addjs(assets_url("js/global/maps/am-maps.js"), true);
        
        $this->bulid_layout("templates/data-visualization/maps/am-maps");        
    }

}
