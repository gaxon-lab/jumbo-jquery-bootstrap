<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Extra_components extends Base_Controller {

    /**
     * Index Page for this controller.
     */
    public function index() {
        $this->editors();
    }
    
    /*
     * Editors
     */
    function editors($editor = 'summernote') {
        $function = str_replace("-", "_", $editor);
        $this->$function();
    }
    
    /*
     * Summernote Editor
     */
    function summernote() {
        $this->addcss(base_url("node_modules/summernote/dist/summernote-bs4.css"));
        $this->addjs(base_url("node_modules/summernote/dist/summernote-bs4.js"), true);
        $this->addjs(assets_url("js/global/editor-summernote.js"), true);

        $this->bulid_layout("templates/extra-components/editors/editor-summernote");
    }
    
    /*
     * Code Editor
     */
    function code_editor() {
        $this->addcss(base_url("node_modules/codemirror/lib/codemirror.css"));
        $this->addcss(base_url("node_modules/codemirror/theme/blackboard.css"));
        $this->addjs(base_url("node_modules/codemirror/lib/codemirror.js"), true);
        $this->addjs(base_url("node_modules/codemirror/mode/javascript/javascript.js"), true);
        $this->addjs(assets_url("js/global/code-mirror/code-editor.js"), true);

        $this->bulid_layout("templates/extra-components/editors/code-editor");
    }
    
    /*
     * Pickers
     */
    function pickers($picker = 'datetime-picker') {
        $function = str_replace("-", "_", $picker);
        $this->$function();
    }
    
    /*
     * Datetime Picker
     */
    function datetime_picker() {
        $this->addcss(base_url("node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css"));
        $this->addjs(base_url("node_modules/moment/min/locales.min.js"), true);
        $this->addjs(base_url("node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"), true);
        $this->addjs(assets_url("js/global/datetime-pickers.js"), true);

        $this->bulid_layout("templates/extra-components/pickers/datetime-picker");
    }
    
    /*
     * Color Picker
     */
    function color_picker() {
        $this->addcss(base_url("node_modules/spectrum-colorpicker/spectrum.css"));
        $this->addjs(base_url("node_modules/spectrum-colorpicker/spectrum.js"), true);
        $this->addjs(assets_url("js/global/color-pickers.js"), true);

        $this->bulid_layout("templates/extra-components/pickers/color-picker");
    }
    
    /*
     * Sweet Alerts
     */
    function sweet_alerts() {
        $this->addjs(assets_url("js/global/sweet-alert.js"), true);
        
        $this->bulid_layout("templates/extra-components/sweet-alerts");
    }
    
    /*
     * Notification Alerts
     */
    function notification_alerts() {
        $this->addjs(assets_url("js/global/notification-alert.js"), true);
        
        $this->bulid_layout("templates/extra-components/notification-alerts");
    }
    
    /*
     * Drag and Drop
     */
    function drag_drop() {
        $this->addjs(assets_url("js/global/jquery-ui.js"), true);
        $this->addjs(assets_url("js/global/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"), true);
        $this->addjs(assets_url("js/global/sortable.js"), true);
        
        $this->bulid_layout("templates/extra-components/drag-drop");
    }
}