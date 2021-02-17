<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends Base_Controller {

    /**
     * Index Page for this controller.
     */
    function index() {
        $this->__createVersion();

        $response = array('status' => 'ok', 'message' => 'Development version has been created.');
        return $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    function rtl() {
        $this->data['rtl_enable'] = true;
        $this->__createVersion();

        $response = array('status' => 'ok', 'message' => 'Development RTL version has been created.');
        return $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    function production() {
        $this->__createVersion('production', 'production');

        $response = array('status' => 'ok', 'message' => 'Production version has been created.');
        return $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    function production_rtl() {
        $this->data['rtl_enable'] = true;
        $this->__createVersion('production-rtl', 'production');

        $response = array('status' => 'ok', 'message' => 'Production RTL version has been created.');
        return $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    function classic($version = 'production') {
        $outputDir = ($version == 'production') ? 'classic' : 'classic-demo';
        $this->__createVersion($outputDir, $version, true);
        $this->_copyPlugins($outputDir);

        $response = array('status' => 'ok', 'message' => 'Classic ('. $outputDir .') version has been created.');
        return $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    function classic_rtl($version = 'production') {
        $outputDir = ($version == 'production') ? 'classic-rtl' : 'classic-rtl-demo';
        $this->data['rtl_enable'] = true;
        $this->__createVersion($outputDir, $version, true);
        $this->_copyPlugins($outputDir);

        $response = array('status' => 'ok', 'message' => 'Classic RTL ('. $outputDir .') version has been created.');
        return $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    /**
     * Create Version
     */
    private function __createVersion($dstPath = 'development', $version = 'development', $isClassic = false) {
        $this->load->helper('directory');
        $this->load->helper('file');
        $this->data['export_version'] = $version;
        $this->data['classic_version'] = $isClassic;

        $prefix = $isClassic ? 'classic-' : '';
        $plugins = $this->_getPluginsFiles();

        if (!is_dir($dstPath)) {
            mkdir($dstPath, 0777, TRUE);
        }

        $baseDir = $dstPath . '/';
        $this->_copyFiles($baseDir, $version, $isClassic);
        $layouts = array('back-office', 'back-office-mini', 'crm', 'default', 'intranet', 'modern', 'listing', 'saas');

        foreach ($layouts as $layout) {
            $this->data['theme'] = $layout;
            $dstdir = $baseDir . $layout;
            if (!is_dir($dstdir)) {
                mkdir($dstdir, 0777, TRUE);
            }

            $dashboards = array(
                'crm' => array('view_file' => 'crm', 'output_file' => 'crm', 'layout' => 'default', 'prefix' => 'dashboard-', 'url' => site_url('main/dashboard/crm')),
                'crypto' => array('view_file' => 'crypto', 'output_file' => 'crypto', 'layout' => 'default', 'prefix' => 'dashboard-', 'url' => site_url('main/dashboard/crypto')),
                'listing' => array('view_file' => 'listing', 'output_file' => 'index', 'layout' => 'default', 'prefix' => 'dashboard-', 'url' => site_url()),
                'real-estate' => array('view_file' => 'real-estate', 'output_file' => 'real-estate', 'layout' => 'default', 'prefix' => 'dashboard-', 'url' => site_url('main/dashboard/real_estate'))
            );

            switch ($layout) {
                case 'saas' :
                case 'crm' : $dashboards['crm'] = array('view_file' => 'crm', 'output_file' => 'index', 'layout' => 'default', 'prefix' => 'dashboard-', 'url' => site_url());
                    $dashboards['listing'] = array('view_file' => 'listing', 'output_file' => 'listing', 'layout' => 'default', 'prefix' => 'dashboard-', 'url' => site_url('main/dashboard/listing'));
                    break;

                case 'intranet' :
                case 'modern' : $dashboards['crypto'] = array('view_file' => 'crypto', 'output_file' => 'index', 'layout' => 'default', 'prefix' => 'dashboard-', 'url' => site_url());
                    $dashboards['listing'] = array('view_file' => 'listing', 'output_file' => 'listing', 'layout' => 'default', 'prefix' => 'dashboard-', 'url' => site_url('main/dashboard/listing'));
                    break;

                case 'listing' : $dashboards['real-estate'] = array('view_file' => 'real-estate', 'output_file' => 'index', 'layout' => 'default', 'prefix' => 'dashboard-', 'url' => site_url());
                    $dashboards['listing'] = array('view_file' => 'listing', 'output_file' => 'listing', 'layout' => 'default', 'prefix' => 'dashboard-', 'url' => site_url('main/dashboard/listing'));
                    break;

                default :
            }

            $widgets = array(
                array('view_file' => 'classic', 'output_file' => 'classic', 'layout' => 'default', 'prefix' => 'widget-', 'url' => site_url('main/widget/classic')),
                array('view_file' => 'modern', 'output_file' => 'modern', 'layout' => 'default', 'prefix' => 'widget-', 'url' => site_url('main/widget/modern'))
            );

            $apps = array(
                array('view_file' => 'chat', 'output_file' => 'chat', 'layout' => 'default', 'prefix' => 'app-', 'url' => site_url('apps/chat')),
                array('view_file' => 'chat-start', 'output_file' => 'chat-start', 'layout' => 'default', 'prefix' => 'app-', 'url' => site_url('apps/chat-start')),
                array('view_file' => 'contact', 'output_file' => 'contact', 'layout' => 'default', 'prefix' => 'app-', 'url' => site_url('apps/contact')),
                array('view_file' => 'mail', 'output_file' => 'mail', 'layout' => 'default', 'prefix' => 'app-', 'url' => site_url('apps/mail')),
                array('view_file' => 'mail-detail', 'output_file' => 'mail-detail', 'layout' => 'default', 'prefix' => 'app-', 'url' => site_url('apps/mail-detail')),
                array('view_file' => 'task-manager', 'output_file' => 'task-manager', 'layout' => 'default', 'prefix' => 'app-', 'url' => site_url('apps/task-manager')),
                array('view_file' => 'task-detail', 'output_file' => 'task-detail', 'layout' => 'default', 'prefix' => 'app-', 'url' => site_url('apps/task-detail'))
            );

            $components = array(
                array('view_file' => 'alerts', 'output_file' => 'alerts', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/alerts')),
                array('view_file' => 'badges', 'output_file' => 'badges', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/badges')),
                array('view_file' => 'breadcrumbs', 'output_file' => 'breadcrumbs', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/breadcrumbs')),
                array('view_file' => 'button-group', 'output_file' => 'button-group', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/button-group')),
                array('view_file' => 'buttons', 'output_file' => 'buttons', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/buttons')),
                array('view_file' => 'card-group', 'output_file' => 'card-group', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/card-group')),
                array('view_file' => 'card', 'output_file' => 'card', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/card')),
                array('view_file' => 'carousel', 'output_file' => 'carousel', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/carousel')),
                array('view_file' => 'collapse', 'output_file' => 'collapse', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/collapse')),
                array('view_file' => 'dropdown', 'output_file' => 'dropdown', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/dropdown')),
                array('view_file' => 'input-group', 'output_file' => 'input-group', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/input-group')),
                array('view_file' => 'jumbotron', 'output_file' => 'jumbotron', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/jumbotron')),
                array('view_file' => 'list-group', 'output_file' => 'list-group', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/list-group')),
                array('view_file' => 'modal', 'output_file' => 'modal', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/modal')),
                array('view_file' => 'navbar', 'output_file' => 'navbar', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/navbar')),
                array('view_file' => 'navs', 'output_file' => 'navs', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/navs')),
                array('view_file' => 'pagination', 'output_file' => 'pagination', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/pagination')),
                array('view_file' => 'popovers', 'output_file' => 'popovers', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/popovers')),
                array('view_file' => 'progress', 'output_file' => 'progress', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/progress')),
                array('view_file' => 'scrollspy', 'output_file' => 'scrollspy', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/scrollspy')),
                array('view_file' => 'tooltip', 'output_file' => 'tooltip', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/tooltip')),
                array('view_file' => 'typography', 'output_file' => 'typography', 'layout' => 'default', 'prefix' => 'component-', 'url' => site_url('components/basic/typography'))
            );

            $tables = array(
                array('view_file' => 'basic-table', 'output_file' => 'basic-table', 'layout' => 'default', 'prefix' => 'table-', 'url' => site_url('components/tables/basic-table')),
                array('view_file' => 'data-table', 'output_file' => 'data-table', 'layout' => 'default', 'prefix' => 'table-', 'url' => site_url('components/tables/data-table'))
            );

            $forms = array(
                array('view_file' => 'basic-form', 'output_file' => 'basic', 'layout' => 'default', 'prefix' => 'form-', 'url' => site_url('forms/basic')),
                array('view_file' => 'file-upload', 'output_file' => 'file-upload', 'layout' => 'default', 'prefix' => 'form-', 'url' => site_url('forms/file-upload'))
            );

            $editors = array(
                array('view_file' => 'code-editor', 'output_file' => 'code-editor', 'layout' => 'default', 'prefix' => 'editor-', 'url' => site_url('extra-components/editors/code-editor')),
                array('view_file' => 'editor-summernote', 'output_file' => 'summernote', 'layout' => 'default', 'prefix' => 'editor-', 'url' => site_url('extra-components/editors/summernote'))
            );

            $pickers = array(
                array('view_file' => 'color-picker', 'output_file' => 'color-picker', 'layout' => 'default', 'prefix' => 'picker-', 'url' => site_url('extra-components/pickers/color-picker')),
                array('view_file' => 'datetime-picker', 'output_file' => 'datetime-picker', 'layout' => 'default', 'prefix' => 'picker-', 'url' => site_url('extra-components/pickers/datetime-picker'))
            );

            $charts = array(
                array('view_file' => 'chart-amcharts', 'output_file' => 'amcharts', 'layout' => 'default', 'prefix' => 'chart-', 'url' => site_url('data-visualization/charts/amcharts')),
                array('view_file' => 'chart-chartjs', 'output_file' => 'chartjs', 'layout' => 'default', 'prefix' => 'chart-', 'url' => site_url('data-visualization/charts/chartjs'))
            );

            $maps = array(
                array('view_file' => 'am-maps', 'output_file' => 'am-maps', 'layout' => 'default', 'prefix' => 'map-', 'url' => site_url('data-visualization/maps/am-maps')),
                array('view_file' => 'data-maps', 'output_file' => 'data-maps', 'layout' => 'default', 'prefix' => 'map-', 'url' => site_url('data-visualization/maps/data-maps')),
                array('view_file' => 'map-advance-route', 'output_file' => 'advance-route', 'layout' => 'default', 'prefix' => 'map-', 'url' => site_url('data-visualization/maps/advance-route')),
                array('view_file' => 'map-basic', 'output_file' => 'basic', 'layout' => 'default', 'prefix' => 'map-', 'url' => site_url('data-visualization/maps/basic')),
                array('view_file' => 'map-events', 'output_file' => 'events', 'layout' => 'default', 'prefix' => 'map-', 'url' => site_url('data-visualization/maps/events')),
                array('view_file' => 'map-geo-polygons', 'output_file' => 'geo-polygons', 'layout' => 'default', 'prefix' => 'map-', 'url' => site_url('data-visualization/maps/geo-polygons')),
                array('view_file' => 'map-geocoding', 'output_file' => 'geocoding', 'layout' => 'default', 'prefix' => 'map-', 'url' => site_url('data-visualization/maps/geocoding')),
                array('view_file' => 'map-geolocation', 'output_file' => 'geolocation', 'layout' => 'default', 'prefix' => 'map-', 'url' => site_url('data-visualization/maps/geolocation')),
                array('view_file' => 'map-markers', 'output_file' => 'markers', 'layout' => 'default', 'prefix' => 'map-', 'url' => site_url('data-visualization/maps/markers')),
                array('view_file' => 'map-overlay-polygons', 'output_file' => 'overlay-polygons', 'layout' => 'default', 'prefix' => 'map-', 'url' => site_url('data-visualization/maps/overlay-polygons')),
                array('view_file' => 'map-overlay-polylines', 'output_file' => 'overlay-polylines', 'layout' => 'default', 'prefix' => 'map-', 'url' => site_url('data-visualization/maps/overlay-polylines')),
                array('view_file' => 'map-overlay', 'output_file' => 'overlay', 'layout' => 'default', 'prefix' => 'map-', 'url' => site_url('data-visualization/maps/overlay')),
                array('view_file' => 'map-route', 'output_file' => 'route', 'layout' => 'default', 'prefix' => 'map-', 'url' => site_url('data-visualization/maps/route'))
            );

            $grids = array(
                array('view_file' => 'advanced', 'output_file' => 'advanced', 'layout' => 'default', 'prefix' => 'grid-', 'url' => site_url('extra-views/grids/advanced')),
                array('view_file' => 'basic', 'output_file' => 'basic', 'layout' => 'default', 'prefix' => 'grid-', 'url' => site_url('extra-views/grids/basic'))
            );

            $lists = array(
                array('view_file' => 'advanced', 'output_file' => 'advanced', 'layout' => 'default', 'prefix' => 'list-', 'url' => site_url('extra-views/lists/advanced')),
                array('view_file' => 'basic', 'output_file' => 'basic', 'layout' => 'default', 'prefix' => 'list-', 'url' => site_url('extra-views/lists/basic'))
            );

            $metrics = array(
                array('view_file' => 'metrics', 'output_file' => 'metrics', 'layout' => 'default', 'prefix' => 'page-', 'url' => site_url('main/metrics'))
            );

            $pages = array(
                array('view_file' => 'page-404', 'output_file' => '404', 'layout' => 'frontend', 'prefix' => 'page-', 'url' => site_url('pages/404')),
                array('view_file' => 'page-500', 'output_file' => '500', 'layout' => 'frontend', 'prefix' => 'page-', 'url' => site_url('pages/500')),
                array('view_file' => 'page-blank', 'output_file' => 'blank', 'layout' => 'default', 'prefix' => 'page-', 'url' => site_url('pages/blank')),
                array('view_file' => 'page-forgot-password', 'output_file' => 'forgot-password', 'layout' => 'frontend', 'prefix' => 'page-', 'url' => site_url('pages/forgot-password')),
                array('view_file' => 'page-layouts', 'output_file' => 'layouts', 'layout' => 'default', 'prefix' => 'page-', 'url' => site_url('pages/layouts')),
                array('view_file' => 'page-lock-screen', 'output_file' => 'lock-screen', 'layout' => 'frontend', 'prefix' => 'page-', 'url' => site_url('pages/lock-screen')),
                array('view_file' => 'page-login', 'output_file' => 'login', 'layout' => 'frontend', 'prefix' => 'page-', 'url' => site_url('pages/login')),
                array('view_file' => 'page-profile', 'output_file' => 'profile', 'layout' => 'default', 'prefix' => 'page-', 'url' => site_url('pages/profile')),
                array('view_file' => 'page-search', 'output_file' => 'search', 'layout' => 'default', 'prefix' => 'page-', 'url' => site_url('pages/search')),
                array('view_file' => 'page-signup', 'output_file' => 'signup', 'layout' => 'frontend', 'prefix' => 'page-', 'url' => site_url('pages/signup')),
                array('view_file' => 'page-wall', 'output_file' => 'wall', 'layout' => 'default', 'prefix' => 'page-', 'url' => site_url('pages/wall'))
            );

            $others = array(
                array('view_file' => 'drag-drop', 'output_file' => 'drag-drop', 'layout' => 'default', 'prefix' => 'page-', 'url' => site_url('extra-components/drag-drop')),
                array('view_file' => 'sweet-alerts', 'output_file' => 'sweet-alerts', 'layout' => 'default', 'prefix' => 'page-', 'url' => site_url('extra-components/sweet-alerts')),
                array('view_file' => 'notification-alerts', 'output_file' => 'notification-alerts', 'layout' => 'default', 'prefix' => 'page-', 'url' => site_url('extra-components/notification-alerts'))
            );

            $jsFiles = array(
                'dashboard-crm' => array(
                    base_url($plugins['chart.js'][$prefix . 'js']['chart.min']),
                    base_url($plugins['ammap3'][$prefix . 'js']['ammap']),
                    base_url($plugins['ammap3'][$prefix . 'js']['continentsLow']),
                    base_url($plugins['ammap3'][$prefix . 'js']['light']),
                    base_url($plugins['amcharts3'][$prefix . 'js']['amcharts']),
                    base_url($plugins['amcharts3'][$prefix . 'js']['gauge']),
                    assets_url("js/global/charts/dashboard-default.js")
                ),
                'dashboard-listing' => array(
                    base_url($plugins['chartist'][$prefix . 'js']['chartist.min']),
                    base_url($plugins['owl.carousel'][$prefix . 'js']['owl.carousel.min']),
                    assets_url("js/global/charts/dashboard-listing.js")
                ),
                'dashboard-real-estate' => array(
                    base_url($plugins['chart.js'][$prefix . 'js']['chart.min']),
                    'https://maps.googleapis.com/maps/api/js?key=AIzaSyBbyv4oQ2Y4cDpMC8MGhERZ_kicy4YKcuc',
                    base_url($plugins['gmaps'][$prefix . 'js']['gmaps.min']),
                    base_url($plugins['echarts'][$prefix . 'js']['echarts.min']),
                    base_url($plugins['echarts-liquidfill'][$prefix . 'js']['echarts-liquidfill.min']),
                    assets_url("js/global/charts/dashboard-real-estate.js"),
                    assets_url("js/global/maps/gmaps.js")
                ),
                'dashboard-crypto' => array(
                    base_url($plugins['chart.js'][$prefix . 'js']['chart.min']),
                    base_url($plugins['chartist'][$prefix . 'js']['chartist.min']),
                    base_url($plugins['jquery-circle-progress'][$prefix . 'js']['circle-progress.min']),
                    assets_url("js/global/charts/dashboard-crypto.js")
                ),
                'widget-classic' => array(
                    base_url($plugins['chart.js'][$prefix . 'js']['chart.min']),
                    base_url($plugins['ammap3'][$prefix . 'js']['ammap']),
                    base_url($plugins['ammap3'][$prefix . 'js']['continentsLow']),
                    base_url($plugins['ammap3'][$prefix . 'js']['light']),
                    base_url($plugins['amcharts3'][$prefix . 'js']['amcharts']),
                    base_url($plugins['amcharts3'][$prefix . 'js']['gauge']),
                    assets_url("js/global/charts/widgets-charts.js")
                ),
                'widget-modern' => array(
                    base_url($plugins['chart.js'][$prefix . 'js']['chart.min']),
                    base_url($plugins['chartist'][$prefix . 'js']['chartist.min']),
                    base_url($plugins['jquery-circle-progress'][$prefix . 'js']['circle-progress.min']),
                    base_url($plugins['owl.carousel'][$prefix . 'js']['owl.carousel.min']),
                    assets_url("js/global/charts/widgets-charts.js"),
                    assets_url("js/global/widget.js")
                ),
                'page-metrics' => array(
                    base_url($plugins['chart.js'][$prefix . 'js']['chart.min']),
                    base_url($plugins['echarts'][$prefix . 'js']['echarts.min']),
                    base_url($plugins['echarts-liquidfill'][$prefix . 'js']['echarts-liquidfill.min']),
                    assets_url("js/global/charts/metrics-charts.js"),
                    assets_url("js/global/charts/dashboard-real-estate.js")
                ),
                'app-chat' => array(assets_url("js/" . $this->data['theme'] . "/apps/app.js")),
                'app-chat-start' => array(assets_url("js/" . $this->data['theme'] . "/apps/app.js")),
                'app-contact' => array(assets_url("js/" . $this->data['theme'] . "/apps/app.js")),
                'app-mail' => array(
                    assets_url("js/" . $this->data['theme'] . "/apps/app.js"),
                    assets_url("js/global/apps/mail-app.js")
                ),
                'app-mail-detail' => array(
                    assets_url("js/" . $this->data['theme'] . "/apps/app.js"),
                    assets_url("js/global/apps/mail-app.js")
                ),
                'app-task-manager' => array(assets_url("js/" . $this->data['theme'] . "/apps/app.js")),
                'app-task-detail' => array(
                    assets_url("js/" . $this->data['theme'] . "/apps/app.js"),
                    base_url($plugins['moment'][$prefix . 'js']['locales.min']),
                    base_url($plugins['tempusdominus-bootstrap-4'][$prefix . 'js']['tempusdominus-bootstrap-4.min']),
                    assets_url("js/global/apps/task-manager.js")
                ),
                'table-data-table' => array(
                    base_url($plugins['datatables.net'][$prefix . 'js']['jquery.dataTables']),
                    base_url($plugins['datatables.net-bs4'][$prefix . 'js']['dataTables.bootstrap4']),
                    assets_url("js/global/data-table.js")
                ),
                'form-file-upload' => array(
                    base_url($plugins['dropzone'][$prefix . 'js']['dropzone.min']),
                    assets_url("js/global/dropzone.js")
                ),
                'editor-editor-summernote' => array(
                    base_url($plugins['summernote'][$prefix . 'js']['summernote-bs4']),
                    assets_url("js/global/editor-summernote.js")
                ),
                'editor-code-editor' => array(
                    base_url($plugins['codemirror'][$prefix . 'js']['codemirror']),
                    base_url($plugins['codemirror'][$prefix . 'js']['javascript']),
                    assets_url("js/global/code-mirror/code-editor.js")
                ),
                'picker-color-picker' => array(
                    base_url($plugins['spectrum-colorpicker'][$prefix . 'js']['spectrum']),
                    assets_url("js/global/color-pickers.js")
                ),
                'picker-datetime-picker' => array(
                    base_url($plugins['moment'][$prefix . 'js']['locales.min']),
                    base_url($plugins['tempusdominus-bootstrap-4'][$prefix . 'js']['tempusdominus-bootstrap-4.min']),
                    assets_url("js/global/datetime-pickers.js")
                ),
                'page-drag-drop' => array(
                    assets_url("js/global/jquery-ui.js"),
                    assets_url("js/global/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"),
                    assets_url("js/global/sortable.js")
                ),
                'page-sweet-alerts' => array(
                    assets_url("js/global/sweet-alert.js")
                ),
                'page-notification-alerts' => array(
                    assets_url("js/global/notification-alert.js")
                ),
                'chart-chart-amcharts' => array(
                    base_url($plugins['amcharts3'][$prefix . 'js']['amcharts']),
                    base_url($plugins['amcharts3'][$prefix . 'js']['light']),
                    base_url($plugins['amcharts3'][$prefix . 'js']['serial']),
                    base_url($plugins['amcharts3'][$prefix . 'js']['pie']),
                    base_url($plugins['amcharts3'][$prefix . 'js']['gauge']),
                    base_url($plugins['amcharts3'][$prefix . 'js']['animate.min']),
                    base_url($plugins['amcharts3'][$prefix . 'js']['responsive.min']),
                    assets_url("js/global/charts/page-amcharts.js")
                ),
                'chart-chart-chartjs' => array(
                    base_url($plugins['chart.js'][$prefix . 'js']['chart.min']),
                    base_url($plugins['patternomaly'][$prefix . 'js']['patternomaly']),
                    assets_url("js/global/charts/page-chartjs.js")
                ),
                'map-am-maps' => array(
                    base_url($plugins['ammap3'][$prefix . 'js']['ammap']),
                    base_url($plugins['ammap3'][$prefix . 'js']['light']),
                    base_url($plugins['ammap3'][$prefix . 'js']['continentsLow']),
                    base_url($plugins['ammap3'][$prefix . 'js']['worldLow']),
                    assets_url("js/global/maps/am-maps.js")
                ),
                'map-data-maps' => array(
                    base_url($plugins['d3'][$prefix . 'js']['d3.min']),
                    base_url($plugins['topojson'][$prefix . 'js']['topojson.min']),
                    base_url($plugins['datamaps'][$prefix . 'js']['datamaps.all.min']),
                    assets_url("js/global/maps/data-maps.js")
                ),
                'map-map-advance-route' => array(
                    "https://maps.googleapis.com/maps/api/js?key=AIzaSyBbyv4oQ2Y4cDpMC8MGhERZ_kicy4YKcuc",
                    base_url($plugins['gmaps'][$prefix . 'js']['gmaps.min']),
                    assets_url("js/global/maps/gmaps.js")
                ),
                'map-map-basic' => array(
                    "https://maps.googleapis.com/maps/api/js?key=AIzaSyBbyv4oQ2Y4cDpMC8MGhERZ_kicy4YKcuc",
                    base_url($plugins['gmaps'][$prefix . 'js']['gmaps.min']),
                    assets_url("js/global/maps/gmaps.js")
                ),
                'map-map-events' => array(
                    "https://maps.googleapis.com/maps/api/js?key=AIzaSyBbyv4oQ2Y4cDpMC8MGhERZ_kicy4YKcuc",
                    base_url($plugins['gmaps'][$prefix . 'js']['gmaps.min']),
                    assets_url("js/global/maps/gmaps.js")
                ),
                'map-map-geo-polygons' => array(
                    "https://maps.googleapis.com/maps/api/js?key=AIzaSyBbyv4oQ2Y4cDpMC8MGhERZ_kicy4YKcuc",
                    base_url($plugins['gmaps'][$prefix . 'js']['gmaps.min']),
                    assets_url("js/global/maps/gmaps.js")
                ),
                'map-map-geocoding' => array(
                    "https://maps.googleapis.com/maps/api/js?key=AIzaSyBbyv4oQ2Y4cDpMC8MGhERZ_kicy4YKcuc",
                    base_url("node_modules/gmaps/gmaps.min.js"),
                    assets_url("js/global/maps/gmaps.js")
                ),
                'map-map-geolocation' => array(
                    "https://maps.googleapis.com/maps/api/js?key=AIzaSyBbyv4oQ2Y4cDpMC8MGhERZ_kicy4YKcuc",
                    base_url($plugins['gmaps'][$prefix . 'js']['gmaps.min']),
                    assets_url("js/global/maps/gmaps.js")
                ),
                'map-map-markers' => array(
                    "https://maps.googleapis.com/maps/api/js?key=AIzaSyBbyv4oQ2Y4cDpMC8MGhERZ_kicy4YKcuc",
                    base_url($plugins['gmaps'][$prefix . 'js']['gmaps.min']),
                    assets_url("js/global/maps/gmaps.js")
                ),
                'map-map-overlay-polygons' => array(
                    "https://maps.googleapis.com/maps/api/js?key=AIzaSyBbyv4oQ2Y4cDpMC8MGhERZ_kicy4YKcuc",
                    base_url($plugins['gmaps'][$prefix . 'js']['gmaps.min']),
                    assets_url("js/global/maps/gmaps.js")
                ),
                'map-map-overlay-polylines' => array(
                    "https://maps.googleapis.com/maps/api/js?key=AIzaSyBbyv4oQ2Y4cDpMC8MGhERZ_kicy4YKcuc",
                    base_url($plugins['gmaps'][$prefix . 'js']['gmaps.min']),
                    assets_url("js/global/maps/gmaps.js")
                ),
                'map-map-overlay' => array(
                    "https://maps.googleapis.com/maps/api/js?key=AIzaSyBbyv4oQ2Y4cDpMC8MGhERZ_kicy4YKcuc",
                    base_url($plugins['gmaps'][$prefix . 'js']['gmaps.min']),
                    assets_url("js/global/maps/gmaps.js")
                ),
                'map-map-route' => array(
                    "https://maps.googleapis.com/maps/api/js?key=AIzaSyBbyv4oQ2Y4cDpMC8MGhERZ_kicy4YKcuc",
                    base_url($plugins['gmaps'][$prefix . 'js']['gmaps.min']),
                    assets_url("js/global/maps/gmaps.js")
                ),
                'grid-advanced' => array(base_url($plugins['owl.carousel'][$prefix . 'js']['owl.carousel.min'])),
                'list-advanced' => array(base_url($plugins['owl.carousel'][$prefix . 'js']['owl.carousel.min']))
            );

            $script = '$(document).ready(function () {$(".dt-slider .owl-carousel").owlCarousel({items:1});});';

            $inlineJs = array(
                'grid-advanced' => array($script),
                'list-advanced' => array($script)
            );

            $cssFiles = array(
                'dashboard-crypto' => array(base_url($plugins['chartist'][$prefix . 'css']['chartist.min'])),
                'dashboard-listing' => array(
                    base_url($plugins['owl.carousel'][$prefix . 'css']['owl.carousel.min']),
                    base_url($plugins['chartist'][$prefix . 'css']['chartist.min'])
                ),
                'widget-modern' => array(
                    base_url($plugins['owl.carousel'][$prefix . 'css']['owl.carousel.min']),
                    base_url($plugins['chartist'][$prefix . 'css']['chartist.min'])
                ),
                'app-task-detail' => array(base_url($plugins['tempusdominus-bootstrap-4'][$prefix . 'css']['tempusdominus-bootstrap-4.min'])),
                'table-data-table' => array(base_url($plugins['datatables.net-bs4'][$prefix . 'css']['dataTables.bootstrap4'])),
                'form-file-upload' => array(base_url($plugins['dropzone'][$prefix . 'css']['dropzone.min'])),
                'editor-editor-summernote' => array(base_url($plugins['summernote'][$prefix . 'css']['summernote-bs4'])),
                'editor-code-editor' => array(
                    base_url($plugins['codemirror'][$prefix . 'css']['codemirror']),
                    base_url($plugins['codemirror'][$prefix . 'css']['blackboard'])
                ),
                'picker-color-picker' => array(base_url($plugins['spectrum-colorpicker'][$prefix . 'css']['spectrum'])),
                'picker-datetime-picker' => array(base_url($plugins['tempusdominus-bootstrap-4'][$prefix . 'css']['tempusdominus-bootstrap-4.min'])),
                'grid-advanced' => array(base_url($plugins['owl.carousel'][$prefix . 'css']['owl.carousel.min'])),
                'list-advanced' => array(base_url($plugins['owl.carousel'][$prefix . 'css']['owl.carousel.min'])),
            );

            $files = array(
                array('path' => 'templates/pages/', 'list' => $pages),
                array('path' => 'templates/main/dashboards/', 'list' => $dashboards),
                array('path' => 'templates/main/widgets/', 'list' => $widgets),
                array('path' => 'templates/main/', 'list' => $metrics),
                array('path' => 'templates/apps/', 'list' => $apps),
                array('path' => 'templates/components/basic/', 'list' => $components),
                array('path' => 'templates/components/tables/', 'list' => $tables),
                array('path' => 'templates/forms/', 'list' => $forms),
                array('path' => 'templates/extra-components/editors/', 'list' => $editors),
                array('path' => 'templates/extra-components/pickers/', 'list' => $pickers),
                array('path' => 'templates/data-visualization/charts/', 'list' => $charts),
                array('path' => 'templates/data-visualization/maps/', 'list' => $maps),
                array('path' => 'templates/extra-views/grids/', 'list' => $grids),
                array('path' => 'templates/extra-views/lists/', 'list' => $lists),
                array('path' => 'templates/extra-components/', 'list' => $others)
            );

            foreach ($files as $section) {
                foreach ($section['list'] as $page) {
                    $this->files = array('css_header' => '', 'css_footer' => '', 'js_header' => '', 'js_footer' => '');
                    if (isset($cssFiles[$page['prefix'] . $page['view_file']])) {
                        $cssFilesArray = $cssFiles[$page['prefix'] . $page['view_file']];
                        foreach ($cssFilesArray as $cssFile) {
                            $this->addcss($cssFile);
                        }
                    }

                    if (isset($jsFiles[$page['prefix'] . $page['view_file']])) {
                        $jsFilesArray = $jsFiles[$page['prefix'] . $page['view_file']];
                        foreach ($jsFilesArray as $jsFile) {
                            $this->addjs($jsFile, true);
                        }
                    }

                    if (isset($inlineJs[$page['prefix'] . $page['view_file']])) {
                        $inlineJsArray = $inlineJs[$page['prefix'] . $page['view_file']];
                        foreach ($inlineJsArray as $ecript) {
                            $this->add_js_inline($ecript, true);
                        }
                    }

                    $newPageName = ($page['output_file'] == 'index' ? $page['output_file'] : $page['prefix'] . $page['output_file']) . '.html';
                    $file = $dstdir . '/' . $newPageName;
                    $data = $this->bulid_layout($section['path'] . $page['view_file'], $page['layout'], true);

                    $searchValArray = array();
                    $replaceValArray = array();
                    foreach ($files as $group) {
                        foreach ($group['list'] as $item) {
                            if (isset($item['url'])) {
                                $searchValArray[] = 'href="' . $item['url'] . '"';
                                $replaceValArray[] = 'href="' . ($item['output_file'] == 'index' ? $item['output_file'] : $item['prefix'] . $item['output_file']) . '.html' . '"';
                                
                                $searchValArray[] = 'action="' . $item['url'] . '"';
                                $replaceValArray[] = 'action="' . ($item['output_file'] == 'index' ? $item['output_file'] : $item['prefix'] . $item['output_file']) . '.html' . '"';

                                if ($group['path'] === 'templates/apps/') {
                                    $searchValArray[] = 'data-location="' . $item['url'] . '"';
                                    $replaceValArray[] = 'data-location="' . $item['prefix'] . $item['output_file'] . '.html' . '"';
                                }
                            }
                        }
                    }

                    $searchValArray[] = "url('" . base_url('assets');
                    $replaceValArray[] = "url('../assets";

                    $searchValArray[] = 'data-thumb="' . base_url('assets');
                    $replaceValArray[] = 'data-thumb="../assets';

                    $searchValArray[] = 'href="' . base_url('assets');
                    $replaceValArray[] = 'href="../assets';

                    $searchValArray[] = 'href="' . base_url('node_modules');
                    $replaceValArray[] = 'href="../node_modules';

                    $searchValArray[] = 'href="' . base_url('plugins');
                    $replaceValArray[] = 'href="../plugins';

                    $searchValArray[] = 'src="' . base_url();
                    $replaceValArray[] = 'src="../';

                    $data = str_replace($searchValArray, $replaceValArray, $data);

                    if ($version == 'production') {
                        $data = $this->replaceMedia($data);
                    }

                    if (!write_file($file, $data)) {
                        echo 'Unable to write the file';
                    }
                }
            }
        }
    }

    /**
     * Get Plugins files
     * @return array
     */
    private function _getPluginsFiles() {
        $pluginsDir = 'plugins';
        $files = array(
            'jquery' => array(
                'js' => array('jquery.min' => 'node_modules/jquery/dist/jquery.min.js'),
                'classic-js' => array('jquery.min' => $pluginsDir . '/jquery/js/jquery.min.js')
            ),
            'bootstrap' => array(
                'js' => array('bootstrap.bundle.min' => 'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'),
                'classic-js' => array('bootstrap.bundle.min' => $pluginsDir . '/bootstrap/js/bootstrap.bundle.min.js')
            ),
            'perfect-scrollbar' => array(
                'js' => array('perfect-scrollbar.min' => 'node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js'),
                'classic-js' => array('perfect-scrollbar.min' => $pluginsDir . '/perfect-scrollbar/js/perfect-scrollbar.min.js'),
                'css' => array('perfect-scrollbar' => 'node_modules/perfect-scrollbar/css/perfect-scrollbar.css'),
                'classic-css' => array('perfect-scrollbar' => $pluginsDir . '/perfect-scrollbar/css/perfect-scrollbar.css')
            ),
            'flag-icon-css' => array(
                'css' => array('flag-icon.min' => 'node_modules/flag-icon-css/css/flag-icon.min.css'),
                'classic-css' => array('flag-icon.min' => $pluginsDir . '/flag-icon-css/css/flag-icon.min.css'),
                'media' => array('flags' => 'node_modules/flag-icon-css/flags')
            ),
            'masonry-layout' => array(
                'js' => array('masonry.pkgd.min' => 'node_modules/masonry-layout/dist/masonry.pkgd.min.js'),
                'classic-js' => array('masonry.pkgd.min' => $pluginsDir . '/masonry-layout/js/masonry.pkgd.min.js')
            ),
            'chart.js' => array(
                'js' => array('chart.min' => 'node_modules/chart.js/dist/Chart.min.js'),
                'classic-js' => array('chart.min' => $pluginsDir . '/chart.js/js/Chart.min.js')
            ),
            'patternomaly' => array(
                'js' => array('patternomaly' => 'node_modules/patternomaly/dist/patternomaly.js'),
                'classic-js' => array('patternomaly' => $pluginsDir . '/patternomaly/js/patternomaly.js')
            ),
            'ammap3' => array(
                'js' => array(
                    'ammap' => 'node_modules/ammap3/ammap/ammap.js',
                    'continentsLow' => 'node_modules/ammap3/ammap/maps/js/continentsLow.js',
                    'light' => 'node_modules/ammap3/ammap/themes/light.js',
                    'worldLow' => 'node_modules/ammap3/ammap/maps/js/worldLow.js'
                ),
                'classic-js' => array(
                    'ammap' => $pluginsDir . '/ammap3/js/ammap.js',
                    'continentsLow' => $pluginsDir . '/ammap3/js/continentsLow.js',
                    'light' => $pluginsDir . '/ammap3/js/light.js',
                    'worldLow' => $pluginsDir . '/ammap3/js/worldLow.js'
                )
            ),
            'amcharts3' => array(
                'js' => array(
                    'amcharts' => 'node_modules/amcharts3/amcharts/amcharts.js',
                    'light' => 'node_modules/amcharts3/amcharts/themes/light.js',
                    'serial' => 'node_modules/amcharts3/amcharts/serial.js',
                    'pie' => 'node_modules/amcharts3/amcharts/pie.js',
                    'gauge' => 'node_modules/amcharts3/amcharts/gauge.js',
                    'animate.min' => 'node_modules/amcharts3/amcharts/plugins/animate/animate.min.js',
                    'responsive.min' => 'node_modules/amcharts3/amcharts/plugins/responsive/responsive.min.js'
                ),
                'classic-js' => array(
                    'amcharts' => $pluginsDir . '/amcharts3/js/amcharts.js',
                    'light' => $pluginsDir . '/amcharts3/js/light.js',
                    'serial' => $pluginsDir . '/amcharts3/js/serial.js',
                    'pie' => $pluginsDir . '/amcharts3/js/pie.js',
                    'gauge' => $pluginsDir . '/amcharts3/js/gauge.js',
                    'animate.min' => $pluginsDir . '/amcharts3/js/animate.min.js',
                    'responsive.min' => $pluginsDir . '/amcharts3/js/responsive.min.js'
                )
            ),
            'chartist' => array(
                'js' => array('chartist.min' => 'node_modules/chartist/dist/chartist.min.js'),
                'classic-js' => array('chartist.min' => $pluginsDir . '/chartist/js/chartist.min.js'),
                'css' => array('chartist.min' => 'node_modules/chartist/dist/chartist.min.css'),
                'classic-css' => array('chartist.min' => $pluginsDir . '/chartist/css/chartist.min.css')
            ),
            'd3' => array(
                'js' => array('d3.min' => 'node_modules/d3/d3.min.js'),
                'classic-js' => array('d3.min' => $pluginsDir . '/d3/js/d3.min.js')
            ),
            'topojson' => array(
                'js' => array('topojson.min' => 'node_modules/topojson/build/topojson.min.js'),
                'classic-js' => array('topojson.min' => $pluginsDir . '/topojson/js/topojson.min.js')
            ),
            'datamaps' => array(
                'js' => array('datamaps.all.min' => 'node_modules/datamaps/dist/datamaps.all.min.js'),
                'classic-js' => array('datamaps.all.min' => $pluginsDir . '/datamaps/js/datamaps.all.min.js')
            ),
            'gmaps' => array(
                'js' => array('gmaps.min' => 'node_modules/gmaps/gmaps.min.js'),
                'classic-js' => array('gmaps.min' => $pluginsDir . '/gmaps/js/gmaps.min.js')
            ),
            'echarts' => array(
                'js' => array('echarts.min' => 'node_modules/echarts/dist/echarts.min.js'),
                'classic-js' => array('echarts.min' => $pluginsDir . '/echarts/js/echarts.min.js')
            ),
            'echarts-liquidfill' => array(
                'js' => array('echarts-liquidfill.min' => 'node_modules/echarts-liquidfill/dist/echarts-liquidfill.min.js'),
                'classic-js' => array('echarts-liquidfill.min' => $pluginsDir . '/echarts-liquidfill/js/echarts-liquidfill.min.js')
            ),
            'jquery-circle-progress' => array(
                'js' => array('circle-progress.min' => 'node_modules/jquery-circle-progress/dist/circle-progress.min.js'),
                'classic-js' => array('circle-progress.min' => $pluginsDir . '/jquery-circle-progress/js/circle-progress.min.js')
            ),
            'owl.carousel' => array(
                'js' => array('owl.carousel.min' => 'node_modules/owl.carousel/dist/owl.carousel.min.js'),
                'classic-js' => array('owl.carousel.min' => $pluginsDir . '/owl.carousel/js/owl.carousel.min.js'),
                'css' => array('owl.carousel.min' => 'node_modules/owl.carousel/dist/assets/owl.carousel.min.css'),
                'classic-css' => array('owl.carousel.min' => $pluginsDir . '/owl.carousel/css/owl.carousel.min.css')
            ),
            'tempusdominus-bootstrap-4' => array(
                'js' => array('tempusdominus-bootstrap-4.min' => 'node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js'),
                'classic-js' => array('tempusdominus-bootstrap-4.min' => $pluginsDir . '/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'),
                'css' => array('tempusdominus-bootstrap-4.min' => 'node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css'),
                'classic-css' => array('tempusdominus-bootstrap-4.min' => $pluginsDir . '/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')
            ),
            'moment' => array(
                'js' => array(
                    'moment.min' => 'node_modules/moment/min/moment.min.js',
                    'locales.min' => 'node_modules/moment/min/locales.min.js'
                ),
                'classic-js' => array(
                    'moment.min' => $pluginsDir . '/moment/js/moment.min.js',
                    'locales.min' => $pluginsDir . '/moment/js/locales.min.js'
                )
            ),
            'datatables.net' => array(
                'js' => array('jquery.dataTables' => 'node_modules/datatables.net/js/jquery.dataTables.js'),
                'classic-js' => array('jquery.dataTables' => $pluginsDir . '/datatables.net/js/jquery.dataTables.js')
            ),
            'datatables.net-bs4' => array(
                'js' => array('dataTables.bootstrap4' => 'node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js'),
                'classic-js' => array('dataTables.bootstrap4' => $pluginsDir . '/datatables.net-bs4/js/dataTables.bootstrap4.js'),
                'css' => array('dataTables.bootstrap4' => 'node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css'),
                'classic-css' => array('dataTables.bootstrap4' => $pluginsDir . '/datatables.net-bs4/css/dataTables.bootstrap4.css')
            ),
            'dropzone' => array(
                'js' => array('dropzone.min' => 'node_modules/dropzone/dist/min/dropzone.min.js'),
                'classic-js' => array('dropzone.min' => $pluginsDir . '/dropzone/js/dropzone.min.js'),
                'css' => array('dropzone.min' => 'node_modules/dropzone/dist/min/dropzone.min.css'),
                'classic-css' => array('dropzone.min' => $pluginsDir . '/dropzone/css/dropzone.min.css')
            ),
            'summernote' => array(
                'js' => array('summernote-bs4' => 'node_modules/summernote/dist/summernote-bs4.js'),
                'classic-js' => array('summernote-bs4' => $pluginsDir . '/summernote/js/summernote-bs4.js'),
                'css' => array('summernote-bs4' => 'node_modules/summernote/dist/summernote-bs4.css'),
                'classic-css' => array('summernote-bs4' => $pluginsDir . '/summernote/css/summernote-bs4.css'),
                'media' => array(
                    'css/font' => 'node_modules/summernote/dist/font',
                    'css/lang' => 'node_modules/summernote/dist/lang'
                )
            ),
            'codemirror' => array(
                'js' => array(
                    'codemirror' => 'node_modules/codemirror/lib/codemirror.js',
                    'javascript' => 'node_modules/codemirror/mode/javascript/javascript.js'
                ),
                'classic-js' => array(
                    'codemirror' => $pluginsDir . '/codemirror/js/codemirror.js',
                    'javascript' => $pluginsDir . '/codemirror/js/javascript.js'
                ),
                'css' => array(
                    'codemirror' => 'node_modules/codemirror/lib/codemirror.css',
                    'blackboard' => 'node_modules/codemirror/theme/blackboard.css'
                ),
                'classic-css' => array(
                    'codemirror' => $pluginsDir . '/codemirror/css/codemirror.css',
                    'blackboard' => $pluginsDir . '/codemirror/css/blackboard.css'
                )
            ),
            'spectrum-colorpicker' => array(
                'js' => array('spectrum' => 'node_modules/spectrum-colorpicker/spectrum.js'),
                'classic-js' => array('spectrum' => $pluginsDir . '/spectrum-colorpicker/js/spectrum.js'),
                'css' => array('spectrum' => 'node_modules/spectrum-colorpicker/spectrum.css'),
                'classic-css' => array('spectrum' => $pluginsDir . '/spectrum-colorpicker/css/spectrum.css')
            ),
            'sweetalert2' => array(
                'js' => array('sweetalert2' => 'node_modules/sweetalert2/dist/sweetalert2.js'),
                'classic-js' => array('sweetalert2' => $pluginsDir . '/sweetalert2/js/sweetalert2.js')
            ),
        );

        return $files;
    }

    /**
     * Copy files to destination Directory
     * @param type $dstdir
     * @param type $isClassic
     * @param type $version
     */
    private function _copyFiles($dstdir, $version, $isClassic = false) {
        remove_directory($dstdir);
        $assetsDir = $dstdir . 'assets';

        if (!is_dir($assetsDir)) {
            mkdir($assetsDir, 0777, TRUE);
        }

        if ($version == 'production') {
            directory_copy('assets/fonts', $assetsDir . '/fonts');
            directory_copy('assets/vendor', $assetsDir . '/vendor');
            mkdir($assetsDir . '/images', 0777, TRUE);
            mkdir($assetsDir . '/images/dashboard', 0777, TRUE);
            mkdir($assetsDir . '/images/widget', 0777, TRUE);

            directory_copy('assets/images/customizer', $assetsDir . '/images/customizer');
            directory_copy('assets/images/demo-images', $assetsDir . '/images/demo-images');
            directory_copy('assets/images/icon', $assetsDir . '/images/icon');
            directory_copy('assets/images/patterns', $assetsDir . '/images/patterns');

            $dashboardImages = array('apple-app-store.png', 'cat.png', 'google-play-store.png', 'hand.png', 'iphone.png', 'ribbon.png');
            $widgetImages = array('camera.jpg', 'gedget.jpg', 'icon-building.png', 'icon-project-3.png', 'icon-project.png', 'iphone.png', 'shop-icon.png', 'study-1.png', 'study-2.png', 'study-3.png', 'home-logo.jpg');

            foreach ($dashboardImages as $image) {
                copy('assets/images/dashboard/' . $image, $assetsDir . '/images/dashboard/' . $image);
            }

            foreach ($widgetImages as $image) {
                copy('assets/images/widget/' . $image, $assetsDir . '/images/widget/' . $image);
            }

            copy('assets/images/favicon.ico', $assetsDir . '/images/favicon.ico');
            copy('assets/images/placeholder.jpg', $assetsDir . '/images/placeholder.jpg');
        } else {
            directory_copy('assets', $assetsDir);
        }

        if (!$isClassic) {
            copy('./package.json', $dstdir . 'package.json');
            copy('./gulpfile.js', $dstdir . 'gulpfile.js');
        }
    }

    /**
     * Copy plugins to destination Directory
     * @param type $dstdir
     */
    private function _copyPlugins($dstdir) {
        $files = $this->_getPluginsFiles();

        $dstdir = $dstdir . '/plugins';

        foreach ($files as $pluginName => $plugin) {
            $pluginDir = $dstdir . '/' . $pluginName;
            if (!is_dir($pluginDir)) {
                mkdir($pluginDir, 0777, TRUE);
            }

            if (isset($plugin['media'])) {
                foreach ($plugin['media'] as $mediaDir => $srcPath) {
                    directory_copy($srcPath, $pluginDir . '/' . $mediaDir);
                }
            }

            if (isset($plugin['css'])) {
                $cssDir = $pluginDir . '/css';
                if (!is_dir($cssDir)) {
                    mkdir($cssDir, 0777, TRUE);
                }

                foreach ($plugin['css'] as $srcPath) {
                    copy($srcPath, $cssDir . '/' . basename($srcPath));
                }
            }

            if (isset($plugin['js'])) {
                $jsDir = $pluginDir . '/js';
                if (!is_dir($jsDir)) {
                    mkdir($jsDir, 0777, TRUE);
                }

                foreach ($plugin['js'] as $srcPath) {
                    copy($srcPath, $jsDir . '/' . basename($srcPath));
                }
            }
        }
    }

    /**
     * Replace Media in production version
     * @param type $fileContent
     * @return type
     */
    function replaceMedia($fileContent) {
        $media = array(
            array(
                'search' => 'assets/images/card/asphalt-balancing.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/card/beach.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/card/bottle.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/card/camera.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/card/cat.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/card/coffee-cookies.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/card/doughnut.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/card/illusion.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/card/painted-hand.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/card/person-walking.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/card/plant.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/card/skateboard.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/card/sunset.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/card/vegetable.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/carousel/bull.jpg',
                'replace' => 'https://via.placeholder.com/1280x450'
            ),
            array(
                'search' => 'assets/images/carousel/cheetah.jpg',
                'replace' => 'https://via.placeholder.com/1280x450'
            ),
            array(
                'search' => 'assets/images/carousel/dog.jpg',
                'replace' => 'https://via.placeholder.com/1280x450'
            ),
            array(
                'search' => 'assets/images/carousel/fox.jpg',
                'replace' => 'https://via.placeholder.com/1280x450'
            ),
            array(
                'search' => 'assets/images/carousel/night.jpg',
                'replace' => 'https://via.placeholder.com/1280x450'
            ),
            array(
                'search' => 'assets/images/carousel/wolf.jpg',
                'replace' => 'https://via.placeholder.com/1280x450'
            ),
            array(
                'search' => 'assets/images/dashboard/bitcoin-1.jpg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/dashboard/bitcoin-2.jpg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/dashboard/bitcoin-3.jpg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/dashboard/bitcoin-cryptocurrency-trader.jpg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/dashboard/bitcoin-in-the-mousetrap.jpg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/dashboard/concept-of-blockchain.jpg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/bedroom-1.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/bedroom-2.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/bedroom-3.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/bedroom-4.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/bedroom-5.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/bedroom-6.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/bedroom-7.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/bedroom-8.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/living-room-1.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/living-room-2.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/living-room-3.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/living-room-4.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/living-room-5.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/living-room-6.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/living-room-7.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/living-room-8.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/property-1.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/property-2.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/property-3.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/property-4.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/property-5.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/property-6.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/property-7.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/grid/property-8.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/logo/1.jpg',
                'replace' => 'https://via.placeholder.com/115x58'
            ),
            array(
                'search' => 'assets/images/logo/2.jpg',
                'replace' => 'https://via.placeholder.com/115x58'
            ),
            array(
                'search' => 'assets/images/logo/3.jpg',
                'replace' => 'https://via.placeholder.com/115x58'
            ),
            array(
                'search' => 'assets/images/logo/4.jpg',
                'replace' => 'https://via.placeholder.com/115x58'
            ),
            array(
                'search' => 'assets/images/logo/5.jpg',
                'replace' => 'https://via.placeholder.com/115x58'
            ),
            array(
                'search' => 'assets/images/logo/6.jpg',
                'replace' => 'https://via.placeholder.com/115x58'
            ),
            array(
                'search' => 'assets/images/logo/7.jpg',
                'replace' => 'https://via.placeholder.com/115x58'
            ),
            array(
                'search' => 'assets/images/logo/8.jpg',
                'replace' => 'https://via.placeholder.com/115x58'
            ),
            array(
                'search' => 'assets/images/logo/9.jpg',
                'replace' => 'https://via.placeholder.com/115x58'
            ),
            array(
                'search' => 'assets/images/logo/10.jpg',
                'replace' => 'https://via.placeholder.com/115x58'
            ),
            array(
                'search' => 'assets/images/logo/11.jpg',
                'replace' => 'https://via.placeholder.com/115x58'
            ),
            array(
                'search' => 'assets/images/user-avatar/alex-dolgove.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/amay.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/anisha.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/daisy.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/domnic-brown.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/domnic-harris.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/ellen-manning.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/garry-sobars.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/jeson-born.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/jimmy-jo.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/jones.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/kadir-m.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/kemroon-white.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/man-3.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/mathew.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/mila-alba.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/nikki.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/noah-owens.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/selena.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/stella-johnson.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/steve-smith.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/taylor-miller.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/user-avatar/zakie-chain.jpg',
                'replace' => 'https://via.placeholder.com/150x150'
            ),
            array(
                'search' => 'assets/images/wall/kayli-brown.jpg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/wall/ken-ramirez.jpg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/wall/profile-image.jpg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/wall/profile-image-1.jpg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/wall/profile-image-2.jpg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/wall/samual.jpg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/wall/zakie-chain.jpg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/widget/gedget.jpg',
                'replace' => 'https://via.placeholder.com/180x180'
            ),
            array(
                'search' => 'assets/images/widget/kids-with-laptop.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/widget/lake.jpeg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/widget/leaf.jpg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/widget/taj-1.jpg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/widget/taj-2.jpg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/widget/taj-3.jpg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/widget/vegetables.jpg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/widget/water-skating.jpg',
                'replace' => 'https://via.placeholder.com/640x420'
            ),
            array(
                'search' => 'assets/images/logo.png',
                'replace' => 'https://via.placeholder.com/334x119'
            ),
            array(
                'search' => 'assets/images/logo-white.png',
                'replace' => 'https://via.placeholder.com/334x119'
            ),
            array(
                'search' => 'assets/images/logo-symbol.png',
                'replace' => 'https://via.placeholder.com/133x119'
            )
        );

        $searchValArray = array();
        $replaceValArray = array();

        foreach ($media as $item) {
            $searchValArray[] = 'src="../' . $item['search'] . '"';
            $replaceValArray[] = 'src="' . $item['replace'] . '"';

            $searchValArray[] = 'data-thumb="../' . $item['search'] . '"';
            $replaceValArray[] = 'data-thumb="' . $item['replace'] . '"';

            $searchValArray[] = "url('../" . $item['search'] . "')";
            $replaceValArray[] = "url('" . $item['replace'] . "')";
        }

        return str_replace($searchValArray, $replaceValArray, $fileContent);
    }

}
