<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Main extends Base_Controller
{

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->dashboard();
	}

	/**
	 * dashboard
	 */
	public function dashboard($dashboard = 'crypto')
	{
		$this->$dashboard();
	}

	/*
	 * Dashboard crypto
	 */
	function crypto()
	{
		$this->addcss(base_url("node_modules/chartist/dist/chartist.min.css"));
		$this->addjs(base_url("node_modules/chart.js/dist/Chart.min.js"), TRUE);
		$this->addjs(base_url("node_modules/chartist/dist/chartist.min.js"), TRUE);
		$this->addjs(base_url("node_modules/jquery-circle-progress/dist/circle-progress.min.js"), TRUE);
		$this->addjs(assets_url("js/global/charts/dashboard-crypto.js"), TRUE);

		$this->bulid_layout("templates/main/dashboards/crypto");
	}

	/*
	 * Dashboard listing
	 */
	function listing()
	{
		$this->addcss(base_url("node_modules/owl.carousel/dist/assets/owl.carousel.min.css"));
		$this->addcss(base_url("node_modules/chartist/dist/chartist.min.css"));

		$this->addjs(base_url("node_modules/chartist/dist/chartist.min.js"), TRUE);
		$this->addjs(base_url("node_modules/owl.carousel/dist/owl.carousel.min.js"), TRUE);
		$this->addjs(assets_url("js/global/charts/dashboard-listing.js"), TRUE);

		$this->bulid_layout("templates/main/dashboards/listing");
	}

	/*
	 * Dashboard CRM
	 */
	function crm()
	{
		$this->addjs(base_url("node_modules/chart.js/dist/Chart.min.js"), TRUE);

		$this->addjs(base_url("node_modules/ammap3/ammap/ammap.js"), TRUE);
		$this->addjs(base_url("node_modules/ammap3/ammap/maps/js/continentsLow.js"), TRUE);
		$this->addjs(base_url("node_modules/ammap3/ammap/themes/light.js"), TRUE);

		$this->addjs(base_url("node_modules/amcharts3/amcharts/amcharts.js"), TRUE);
		$this->addjs(base_url("node_modules/amcharts3/amcharts/gauge.js"), TRUE);
		$this->addjs(assets_url("js/global/charts/dashboard-default.js"), TRUE);
		$this->addjs(assets_url("js/global/charts/dashboard-crm.js"), TRUE);

		$this->bulid_layout("templates/main/dashboards/crm");
	}

	/*
	 * Dashboard Intranet
	 */
	function intranet()
	{
		$this->addjs('//maps.google.com/maps/api/js?key=AIzaSyBbyv4oQ2Y4cDpMC8MGhERZ_kicy4YKcuc', TRUE);
		$this->addjs(base_url("node_modules/gmaps/gmaps.min.js"), TRUE);
		$this->addcss(base_url("node_modules/chartist/dist/chartist.min.css"));
		$this->addjs(base_url("node_modules/chart.js/dist/Chart.min.js"), TRUE);
		$this->addjs(base_url("node_modules/chartist/dist/chartist.min.js"), TRUE);
		$this->addjs(base_url("node_modules/jquery-circle-progress/dist/circle-progress.min.js"), TRUE);
		$this->addjs(assets_url("js/global/charts/dashboard-intranet.js"), TRUE);
		$this->addjs(assets_url("js/global/charts/dashboard-misc.js"), TRUE);
		$this->addjs(assets_url("js/global/maps/gmaps.js"), TRUE);

		$this->bulid_layout("templates/main/dashboards/intranet");
	}

	/*
	 * Dashboard Intranet
	 */
	function ecommerce()
	{
		$this->addjs(base_url("node_modules/chart.js/dist/Chart.min.js"), TRUE);

		$this->addjs(base_url("node_modules/ammap3/ammap/ammap.js"), TRUE);
		$this->addjs(base_url("node_modules/ammap3/ammap/maps/js/continentsLow.js"), TRUE);
		$this->addjs(base_url("node_modules/ammap3/ammap/themes/light.js"), TRUE);

		$this->addjs(base_url("node_modules/amcharts3/amcharts/amcharts.js"), TRUE);
		$this->addjs(base_url("node_modules/amcharts3/amcharts/gauge.js"), TRUE);
		$this->addjs(assets_url("js/global/charts/dashboard-default.js"), TRUE);
		$this->addjs(assets_url("js/global/charts/dashboard-crm.js"), TRUE);

		$this->bulid_layout("templates/main/dashboards/ecommerce");
	}

	/*
	 * Dashboard Intranet
	 */
	function news()
	{
		$this->addjs('//maps.google.com/maps/api/js?key=AIzaSyBbyv4oQ2Y4cDpMC8MGhERZ_kicy4YKcuc', TRUE);
		$this->addjs(base_url("node_modules/gmaps/gmaps.min.js"), TRUE);
		$this->addcss(base_url("node_modules/chartist/dist/chartist.min.css"));
		$this->addjs(base_url("node_modules/chart.js/dist/Chart.min.js"), TRUE);
		$this->addjs(base_url("node_modules/chartist/dist/chartist.min.js"), TRUE);
		$this->addjs(base_url("node_modules/jquery-circle-progress/dist/circle-progress.min.js"), TRUE);
		$this->addjs(assets_url("js/global/charts/dashboard-intranet.js"), TRUE);
		$this->addjs(assets_url("js/global/maps/gmaps.js"), TRUE);

		$this->bulid_layout("templates/main/dashboards/news");
	}

	/*
	 * Dashboard Misc
	 */
	function misc()
	{
		$this->addcss(base_url("node_modules/chartist/dist/chartist.min.css"));

		$this->addjs('//maps.google.com/maps/api/js?key=AIzaSyBbyv4oQ2Y4cDpMC8MGhERZ_kicy4YKcuc', TRUE);
		$this->addjs(base_url("node_modules/gmaps/gmaps.min.js"), TRUE);

		$this->addjs(base_url("node_modules/ammap3/ammap/ammap.js"), TRUE);
		$this->addjs(base_url("node_modules/ammap3/ammap/maps/js/continentsLow.js"), TRUE);
		$this->addjs(base_url("node_modules/ammap3/ammap/themes/light.js"), TRUE);

		$this->addjs(base_url("node_modules/amcharts3/amcharts/amcharts.js"), TRUE);
		$this->addjs(base_url("node_modules/amcharts3/amcharts/gauge.js"), TRUE);

		$this->addjs(base_url("node_modules/chartist/dist/chartist.min.js"), TRUE);
		$this->addjs(assets_url("js/global/charts/dashboard-misc.js"), TRUE);
		$this->addjs(assets_url("js/global/maps/gmaps.js"), TRUE);

		$this->bulid_layout("templates/main/dashboards/misc");
	}

	/*
	 * Widgets
	 */
	function widget($widget = 'classic')
	{
		$this->$widget();
	}

	/*
	 * Widget Classic
	 */
	function classic()
	{
		$this->addcss(base_url("node_modules/chartist/dist/chartist.min.css"));
		$this->addjs(base_url("node_modules/chartist/dist/chartist.min.js"), TRUE);
		$this->addjs(base_url("node_modules/ammap3/ammap/ammap.js"), TRUE);
		$this->addjs(base_url("node_modules/ammap3/ammap/maps/js/continentsLow.js"), TRUE);
		$this->addjs(base_url("node_modules/ammap3/ammap/themes/light.js"), TRUE);
		$this->addjs(base_url("node_modules/amcharts3/amcharts/amcharts.js"), TRUE);
		$this->addjs(base_url("node_modules/amcharts3/amcharts/gauge.js"), TRUE);
		$this->addjs(assets_url("js/global/charts/dashboard-misc.js"), TRUE);
		$this->addjs(assets_url("js/global/charts/widgets-charts.js"), TRUE);

		$this->bulid_layout("templates/main/widgets/classic");
	}

	/*
	 * Widget Modern
	 */
	function modern()
	{
		$this->addcss(base_url("node_modules/owl.carousel/dist/assets/owl.carousel.min.css"));
		$this->addcss(base_url("node_modules/chartist/dist/chartist.min.css"));
		$this->addjs(base_url("node_modules/chart.js/dist/Chart.min.js"), TRUE);
		$this->addjs(base_url("node_modules/chartist/dist/chartist.min.js"), TRUE);
		$this->addjs(base_url("node_modules/jquery-circle-progress/dist/circle-progress.min.js"), TRUE);
		$this->addjs(base_url("node_modules/owl.carousel/dist/owl.carousel.min.js"), TRUE);
		$this->addjs(assets_url("js/global/charts/widgets-charts.js"), TRUE);
		$this->addjs(assets_url("js/global/widget.js"), TRUE);

		$this->bulid_layout("templates/main/widgets/modern");
	}


	/*
	 * Metrics
	 */
	function metrics($metrics = 'Classic')
	{
		$function_name = $metrics . '_metrics';
		$this->$function_name();
	}

	/*
	 * Metrics Classic
	 */
	function classic_metrics()
	{
		$this->addjs(base_url("node_modules/chart.js/dist/Chart.min.js"), TRUE);
		$this->addjs(base_url("node_modules/echarts/dist/echarts.min.js"), TRUE);
		$this->addjs(base_url("node_modules/echarts-liquidfill/dist/echarts-liquidfill.min.js"), TRUE);
		$this->addjs(assets_url("js/global/charts/metrics-charts.js"), TRUE);

		$this->bulid_layout("templates/main/metrics/classic");
	}

	function modern_metrics()
	{
		$this->addjs(base_url("node_modules/chart.js/dist/Chart.min.js"), TRUE);
		$this->addjs(base_url("node_modules/echarts/dist/echarts.min.js"), TRUE);
		$this->addjs(base_url("node_modules/echarts-liquidfill/dist/echarts-liquidfill.min.js"), TRUE);
		$this->addjs(assets_url("js/global/charts/metrics-charts.js"), TRUE);

		$this->bulid_layout("templates/main/metrics/classic");
	}

}
