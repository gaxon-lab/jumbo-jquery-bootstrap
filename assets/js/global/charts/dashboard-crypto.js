(function ($) {
	"use strict";

	var color = Chart.helpers.color;

	// creating chart shadow
	var draw = Chart.controllers.line.prototype.draw;
	Chart.controllers.line = Chart.controllers.line.extend({
		draw: function () {
			draw.apply(this, arguments);
			var ctx = this.chart.chart.ctx;

			var showShadow = ($(ctx.canvas).data('shadow')) ? $(ctx.canvas).data('shadow') : 'no';
			var chartType = ($(ctx.canvas).data('type')) ? $(ctx.canvas).data('type') : 'area';

			if (showShadow == 'yes' && chartType == 'area') {
				var _fill = ctx.fill;
				ctx.fill = function () {
					ctx.save();
					ctx.shadowColor = color('#5c5c5c').alpha(0.5).rgbString();
					ctx.shadowBlur = 16;
					ctx.shadowOffsetX = 0;
					ctx.shadowOffsetY = 0;
					_fill.apply(this, arguments);
					ctx.restore();
				}
			} else if (showShadow == 'yes' && chartType == 'line') {
				var _stroke = ctx.stroke;
				ctx.stroke = function () {
					ctx.save();
					ctx.shadowColor = '#07C';
					ctx.shadowBlur = 10;
					ctx.shadowOffsetX = 0;
					ctx.shadowOffsetY = 4;
					_stroke.apply(this, arguments);
					ctx.restore();
				}
			}
		}
	});

	var defaultOptions = {
		responsive: true,
		legend: {
			display: false
		},
		layout: {
			padding: 0
		},
		scales: {
			xAxes: [{
				display: false
			}],
			yAxes: [{
				display: false
			}]
		}
	};

	// Active users
	var optsActiveUsers = $.extend({}, defaultOptions);
	optsActiveUsers.elements = {
		line: {
			tension: 0, // disables bezier curves
		}
	};

	if ($('#chart-active-users').length) {
		var ctxActiveUsers = document.getElementById('chart-active-users').getContext('2d');
		var gradientActiveUsers = ctxActiveUsers.createLinearGradient(0, 0, 230, 0);
		gradientActiveUsers.addColorStop(0, color('#163469').alpha(0.9).rgbString());
		gradientActiveUsers.addColorStop(1, color('#FE9E15').alpha(0.9).rgbString());

		new Chart(ctxActiveUsers, {
			type: 'line',
			data: {
				labels: ["Page A", "Page B", "Page C", "Page D", "Page E", "Page F", "Page G"],
				datasets: [{
					label: 'Active users',
					data: [170, 525, 363, 720, 390, 860, 230],
					pointRadius: 0,
					backgroundColor: gradientActiveUsers,
					borderColor: 'transparent',
					hoverBorderColor: 'transparent',
					pointBorderWidth: 0,
					pointHoverBorderWidth: 0,
				}]
			},
			options: optsActiveUsers
		});
	}

	// Extra revenue
	if ($('#chart-extra-revenue').length) {
		var optsExtraRevenue = $.extend({}, defaultOptions);

		var ctxExtraRevenue = document.getElementById('chart-extra-revenue').getContext('2d');
		var gradientExtraRevenue = ctxExtraRevenue.createLinearGradient(0, 0, 230, 0);
		gradientExtraRevenue.addColorStop(0, color('#4ECDE4').alpha(0.9).rgbString());
		gradientExtraRevenue.addColorStop(1, color('#06BB8A').alpha(0.9).rgbString());

		new Chart(ctxExtraRevenue, {
			type: 'line',
			data: {
				labels: ["Page A", "Page B", "Page C", "Page D", "Page E", "Page F", "Page G"],
				datasets: [{
					label: 'Active users',
					data: [170, 525, 363, 720, 390, 860, 230],
					pointRadius: 0,
					backgroundColor: gradientExtraRevenue,
					borderColor: 'transparent',
					hoverBorderColor: 'transparent',
					pointBorderWidth: 0,
					pointHoverBorderWidth: 0,
				}]
			},
			options: optsExtraRevenue
		});
	}

	// Orders
	if ($('#chart-orders').length) {
		var optsOrders = $.extend({}, defaultOptions);
		optsOrders.elements = {
			line: {
				tension: 0, // disables bezier curves
			}
		};

		var ctxOrders = document.getElementById('chart-orders').getContext('2d');
		var gradientOrders = ctxOrders.createLinearGradient(0, 20, 0, 110);
		gradientOrders.addColorStop(0, color('#e81a24').alpha(0.9).rgbString());
		gradientOrders.addColorStop(1, color('#fc8505').alpha(0.4).rgbString());

		new Chart(ctxOrders, {
			type: 'line',
			data: {
				labels: ["Page A", "Page B", "Page C", "Page D", "Page E", "Page F", "Page G"],
				datasets: [{
					label: 'Active users',
					data: [100, 525, 363, 720, 390, 860, 230],
					pointRadius: 0,
					backgroundColor: gradientOrders,
					borderColor: 'transparent',
					hoverBorderColor: 'transparent',
					pointBorderWidth: 0,
					pointHoverBorderWidth: 0,
				}]
			},
			options: optsOrders
		});
	}

	// Traffic raise
	if ($('#chart-traffic-raise').length) {
		var optsTrafficRaise = $.extend({}, defaultOptions);
		optsTrafficRaise.elements = {
			line: {
				tension: 0, // disables bezier curves
			}
		};

		var ctxTrafficRaise = document.getElementById('chart-traffic-raise').getContext('2d');
		var gradientTrafficRaise = ctxTrafficRaise.createLinearGradient(0, 0, 230, 0);
		gradientTrafficRaise.addColorStop(0, color('#6757de').alpha(0.9).rgbString());
		gradientTrafficRaise.addColorStop(1, color('#ed8faa').alpha(0.4).rgbString());

		new Chart(ctxTrafficRaise, {
			type: 'line',
			data: {
				labels: ["Page A", "Page B", "Page C", "Page D", "Page E", "Page F", "Page G"],
				datasets: [{
					label: 'Active users',
					data: [100, 525, 363, 720, 390, 860, 230],
					fill: false,
					backgroundColor: '#fff',
					borderColor: '#038FDE',
					hoverBorderColor: '#038FDE',
					pointBackgroundColor: '#fff',
					pointBorderColor: '#FEA931',
					pointBorderWidth: 2,
					pointHoverBorderWidth: 2,
				}]
			},
			options: optsTrafficRaise
		});
	}

	// Balance History
	if ($('#chart-balance-history').length) {
		var optsBalanceHistory = $.extend({}, defaultOptions);
		optsBalanceHistory.elements = {
			line: {
				tension: 0, // disables bezier curves
			}
		};

		optsBalanceHistory.scales.xAxes = [
			{
				gridLines: {
					display: false
				},
				display: true
			}
		];

		var ctxBalanceHistory = document.getElementById('chart-balance-history').getContext('2d');
		var gradientBalanceHistory = ctxBalanceHistory.createLinearGradient(0, 20, 0, 250);
		gradientBalanceHistory.addColorStop(0, color('#38AAE5').alpha(0.9).rgbString());
		gradientBalanceHistory.addColorStop(1, color('#F5FCFD').alpha(0.9).rgbString());

		new Chart(ctxBalanceHistory, {
			type: 'line',
			data: {
				labels: ['', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', ''],
				datasets: [{
					label: 'Active users',
					data: [100, 250, 150, 400, 1000, 400, 1100, 800, 750, 1200, 1000, 1200, 500, 1400],
					pointRadius: 0,
					backgroundColor: gradientBalanceHistory,
					borderWidth: 2,
					borderColor: '#10316B',
					hoverBorderColor: '#10316B',
					pointBorderWidth: 0,
					pointHoverBorderWidth: 0,
				}]
			},
			options: optsBalanceHistory
		});
	}

	// Chart widget 1
	if ($('#ct-widget-area-chart1').length) {
		var widgetAreaChart1 = new Chartist.Line('#ct-widget-area-chart1', {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug',],
			series: [[200, 300, 550, 500, 700, 450, 770, 900]]
		}, {
			axisX: {
				showGrid: false,
				showLabel: false,
				offset: 0,
			},
			axisY: {
				showGrid: false,
				showLabel: false,
				offset: 0,
			},
			lineSmooth: Chartist.Interpolation.cardinal({
				tension: 0
			}),
			showPoint: false,
			fullWidth: true,
			showLine: false,
			showArea: true,
			chartPadding: 0,
		});

		widgetAreaChart1.on('created', function (data) {
			var defs = data.svg.elem('defs');
			defs.elem('linearGradient', {
				id: 'gradient-color1',
				x1: 0,
				y1: 0,
				x2: 0,
				y2: 1
			}).elem('stop', {
				offset: "43.68%",
				'stop-opacity': '1',
				'stop-color': '#6200EE'
			}).parent().elem('stop', {
				offset: "126.94%",
				'stop-opacity': '1',
				'stop-color': '#B819D2'
			});
		});
	}
	// Chart widget 1 Ends

	// Chart widget 2 Starts
	if ($('#ct-widget-area-chart2').length) {
		var widgetAreaChart2 = new Chartist.Line('#ct-widget-area-chart2', {
			labels: ['Jan', '', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
			series: [[1500, 400, 2000, 1200, 2200, 2600, 4300, 2900, 3800, 1500]]
		}, {
			axisX: {
				showGrid: false,
				showLabel: false,
				offset: 0,
			},
			axisY: {
				showGrid: false,
				showLabel: false,
				offset: 0,
			},
			lineSmooth: Chartist.Interpolation.cardinal({
				tension: 1
			}),
			showPoint: false,
			fullWidth: true,
			showArea: true,
			chartPadding: 0,
		});

		widgetAreaChart2.on('created', function (data) {
			var defs = data.svg.elem('defs');
			defs.elem('linearGradient', {
				id: 'gradient-color2',
				x1: 0,
				y1: 0,
				x2: 0,
				y2: 1
			}).elem('stop', {
				offset: "-74.43%",
				'stop-opacity': '1',
				'stop-color': '#F7E2BC'
			}).parent().elem('stop', {
				offset: "93.54%",
				'stop-opacity': '1',
				'stop-color': 'rgba(255, 255, 255, 0)'
			});
		});
	}
	// Chart widget 2 Ends

	// Chart widget 3 Starts
	if ($('#ct-widget-area-chart3').length) {
		var widgetAreaChart3 = new Chartist.Line('#ct-widget-area-chart3', {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug',],
			series: [[450, 300, 1350, 275, 500, 250, 900, 550]]
		}, {
			axisX: {
				showGrid: false,
				showLabel: false,
				offset: 0,
			},
			axisY: {
				showGrid: false,
				showLabel: false,
				offset: 0,
			},
			lineSmooth: Chartist.Interpolation.cardinal({
				tension: 1
			}),
			showPoint: false,
			fullWidth: true,
			showLine: false,
			showArea: true,
			chartPadding: 0,
		});

		widgetAreaChart3.on('created', function (data) {
			var defs = data.svg.elem('defs');
			defs.elem('linearGradient', {
				id: 'gradient-color3',
				x1: 0,
				y1: 0,
				x2: 0,
				y2: 1
			}).elem('stop', {
				offset: "50.32%",
				'stop-opacity': '1',
				'stop-color': '#1ABBDE'
			}).parent().elem('stop', {
				offset: "126.94%",
				'stop-opacity': '1',
				'stop-color': '#09BCA7'
			});
		});
	}
	// Chart widget 3 Ends

	// Chart widget 4 Starts
	if ($('#ct-widget-area-chart4').length) {
		var widgetAreaChart4 = new Chartist.Line('#ct-widget-area-chart4', {
			labels: ['Jan', '', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
			series: [[1500, 400, 2000, 1200, 2200, 2600, 4300, 2900, 3800, 1500]]
		}, {
			axisX: {
				showGrid: false,
				showLabel: false,
				offset: 0,
			},
			axisY: {
				showGrid: false,
				showLabel: false,
				offset: 0,
			},
			lineSmooth: Chartist.Interpolation.cardinal({
				tension: 1
			}),
			showPoint: false,
			fullWidth: true,
			showArea: true,
			chartPadding: 0,
		});

		widgetAreaChart4.on('created', function (data) {
			var defs = data.svg.elem('defs');
			defs.elem('linearGradient', {
				id: 'gradient-color4',
				x1: 0,
				y1: 0,
				x2: 0,
				y2: 1
			}).elem('stop', {
				offset: "-74.43%",
				'stop-opacity': '1',
				'stop-color': '#BBE5F2'
			}).parent().elem('stop', {
				offset: "93.54%",
				'stop-opacity': '1',
				'stop-color': 'rgba(255, 255, 255, 0)'
			});
		});
	}
	// Chart widget 4 Ends

	if ($('#ct-area-chart').length) {
		var ctAreaChart = new Chartist.Line('#ct-area-chart', {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			series: [
				[51, 61, 62, 54, 41, 37, 40, 48, 64, 75, 78, 74, 65]
			]
		}, {
			showArea: true,
			showPoint: false,
			fullWidth: true,
			lineSmooth: Chartist.Interpolation.cardinal({
				tension: 1
			}),
			chartPadding: 0,
			axisX: {
				showGrid: false,
				showLabel: true
			},
			axisY: {
				showGrid: false,
				low: 20,
				scaleMinSpace: 50,
				showLabel: false,
				offset: 0,
			}
		});

		ctAreaChart.on('created', function (data) {
			var defs = data.svg.elem('defs');
			defs.elem('linearGradient', {
				id: 'gradient2',
				x1: 0,
				y1: 1,
				x2: 0,
				y2: 0
			}).elem('stop', {
				offset: 0,
				'stop-opacity': '0.5',
				'stop-color': 'rgba(255, 255, 255, 1)'
			}).parent().elem('stop', {
				offset: 1,
				'stop-opacity': '0.5',
				'stop-color': 'rgba(226, 218, 255, 1)'
			});

			defs.elem('linearGradient', {
				id: 'gradient3',
				x1: 0,
				y1: 1,
				x2: 0,
				y2: 0
			}).elem('stop', {
				offset: 0.3,
				'stop-opacity': '0.4',
				'stop-color': 'rgba(255, 255, 255, 1)'
			}).parent().elem('stop', {
				offset: 1,
				'stop-opacity': '1',
				'stop-color': 'rgba(255, 192, 214, 1)'
			});
		});

		ctAreaChart.on('draw', function (data) {
			var circleRadius = 4;
			if (data.type === 'point') {

				var circle = new Chartist.Svg('circle', {
					cx: data.x,
					cy: data.y,
					r: circleRadius,
					class: 'ct-point-circle'
				});
				data.element.replace(circle);
			}
		});
	}
})(jQuery);
