<?php

/*
 * Main Base Controller
 */

class Base_Controller extends CI_Controller {

    var $files = array('css_header' => '', 'css_footer' => '', 'js_header' => '', 'js_footer' => '');
    var $body_classes = array();
    var $data = array('layout' => 'default', 'theme' => 'horizontal-dark-header', 'rtl_enable' => false, 'export_version' => 'development', 'classic_version' => false);

    public function __construct() {
        parent::__construct();
    }

    /*
     * Returns the data in json format
     * @param : data if anything else than controller's data attribute.
     * returns: either data passed in argument or controller's data attribute in JSON format.
     * Author: Pukhraj Prajapat, pukhraj.prajapat@g-axon.com
     */

    public function return_json($data = "") {
        if (!empty($data)) {
            return json_encode($data);
        }
    }

    /*
     * This function will be use to add js in view.
     * 
     * @pparam $filepath (js file path)
     * @param $in_footer (If true file will be include before body end
     */

    function addjs($filepath, $in_footer = false) {
        if ($in_footer) {
            $this->files['js_footer'] .= '<script src="' . $filepath . '"></script>' . "\n";
        } else {
            $this->files['js_header'] .= '<script type="text/javascript" src="' . $filepath . '"></script>' . "\n";
        }
    }

    /*
     * This function will be use to add js for ie.
     * 
     * @pparam $filepath (js file path)
     * @param $ie_version
     */

    function addjsIe($filepath, $ie_version = '') {
        if ($ie_version) {
            $this->files['js_header'] .= '<!--[if lte IE ' . $ie_version . ']><script type="text/javascript" src="' . $filepath . '"></script><![endif]-->' . "\n";
        }
    }

    /*
     * This function will be use to add inline js in view.
     * 
     * @pparam $script
     * @param $in_footer (If true file will be include before body end
     */

    function add_js_inline($script, $in_footer = false) {
        if ($in_footer) {
            $this->files['js_footer'] .= '<script>' . $script . '</script>' . "\n";
        } else {
            $this->files['js_header'] .= '<script>' . $script . '</script>' . "\n";
        }
    }

    /*
     * This function will be use to add css in view.
     * 
     * @pparam $filepath (css file path)
     * @param $in_footer (If true file will be include before body end
     */

    function addcss($filepath, $in_footer = false) {
        if ($in_footer) {
            $this->files['css_footer'] .= '<link rel="stylesheet" type="text/css" href="' . $filepath . '" media="all" />' . "\n";
        } else {
            $this->files['css_header'] .= '<link rel="stylesheet" type="text/css" href="' . $filepath . '" media="all" />' . "\n";
        }
    }

    /*
     * Function will be call to set Default data
     */

    protected function _setDefaultData() {
        $this->data['title'] = 'Drift - Admin Template';
        $this->data['pagetitle'] = '';
        $this->data['description'] = 'Drift - A fully responsive, HTML5 based admin template';
        $this->data['keywords'] = 'Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass';
        
        $this->body_classes = array('dt-layout--' . $this->data['theme']);
        if($this->data['theme'] == 'default') {
            $this->body_classes[] = 'dt-sidebar--fixed';
            $this->body_classes[] = 'dt-header--fixed';
        } elseif($this->data['theme'] == 'crm') {
            $this->body_classes[] = 'dt-sidebar--fixed';
        } elseif($this->data['theme'] == 'back-office') {
            $this->body_classes[] = 'dt-sidebar--fixed';
        } elseif($this->data['theme'] == 'back-office-mini') {
            $this->body_classes[] = 'dt-sidebar--fixed';
            $this->body_classes[] = 'dt-sidebar--folded';
        } elseif($this->data['theme'] == 'modern') {
            $this->body_classes[] = 'dt-sidebar--fixed';
        } elseif($this->data['theme'] == 'minimal') {
					$this->body_classes[] = 'dt-header--fixed';
					$this->body_classes[] = 'dt-sidebar--fixed';
					$this->body_classes[] = 'dt-sidebar--folded';
				} elseif($this->data['theme'] == 'minimal-no-header') {
					$this->body_classes[] = 'dt-sidebar--fixed';
					$this->body_classes[] = 'dt-sidebar--folded';
				}
    }

    /*
     * This function will be call to build view.
     * 
     * @param string $view file path
     * @param string $layout (optional)
     */

    function bulid_layout($view, $layout = '', $return = false) {
        $this->_setDefaultData();
        
        if ($layout) {
            $this->data['layout'] = $layout;
        }

        $this->data['view'] = $view;

        if ($return) {
            return $this->load->view('layouts/' . $this->data['theme'] . '/' . $this->data['layout'], array(), true);
        } else {

            // load main vies files.
            $this->load->view('layouts/' . $this->data['theme'] . '/' . $this->data['layout']);
        }
    }

}
