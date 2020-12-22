<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Extra_views extends Base_Controller {

    /**
     * Index Page for this controller.
     */
    public function index() {
        $this->grids();
    }

    /*
     * Grid
     */

    function grids($view = 'basic') {
        $function = str_replace("-", "_", $view) . '_grid';
        $this->$function();
    }

    /*
     * Basic Grid
     */

    function basic_grid() {
        $this->bulid_layout("templates/extra-views/grids/basic");
    }

    /*
     * Advanced Grid
     */

    function advanced_grid() {
        $this->addcss(base_url("node_modules/owl.carousel/dist/assets/owl.carousel.min.css"));
        $this->addjs(base_url("node_modules/owl.carousel/dist/owl.carousel.min.js"), true);
        $script = '$(document).ready(function () {
            $(".dt-slider .owl-carousel").owlCarousel({
                items: 1
            });
        });';
        
        $this->add_js_inline($script, TRUE);

        $this->bulid_layout("templates/extra-views/grids/advanced");
    }

    /*
     * List
     */

    function lists($view = 'basic') {
        $function = str_replace("-", "_", $view) . '_list';
        $this->$function();
    }

    /*
     * Basic Grid
     */

    function basic_list() {
        $this->bulid_layout("templates/extra-views/lists/basic");
    }

    /*
     * Advanced Grid
     */

    function advanced_list() {
        $this->addcss(base_url("node_modules/owl.carousel/dist/assets/owl.carousel.min.css"));
        $this->addjs(base_url("node_modules/owl.carousel/dist/owl.carousel.min.js"), true);
        $script = '$(document).ready(function () {
            $(".dt-slider .owl-carousel").owlCarousel({
                items: 1
            });
        });';
        
        $this->add_js_inline($script, TRUE);

        $this->bulid_layout("templates/extra-views/lists/advanced");
    }

}
