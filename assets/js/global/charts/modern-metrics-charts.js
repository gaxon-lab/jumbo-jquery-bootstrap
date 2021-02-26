(function ($) {
	"use strict";
	var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
	var today = new Date();
	var currentMont = today.getMonth();
	var lastMonthName = months[currentMont - 1];

	var color = Chart.helpers.color;
	var chartColors = {
		red: '#8B061E',
		white: '#ffffff',
		pink: '#ff445d',
		orange: '#ff8f3a',
		yellow: '#ffde16',
		lightGreen: '#24cf91',
		green: '#4ecc48',
		blue: '#5797fc',
		skyBlue: '#33d4ff',
		gray: '#cfcfcf',
		cyan: '#03DAC5',
	};

	// creating chart shadow
	var draw = Chart.controllers.line.prototype.draw;
	Chart.controllers.line = Chart.controllers.line.extend({
		draw: function () {
			draw.apply(this, arguments);
			var ctx = this.chart.chart.ctx;

			var showShadow = ($(ctx.canvas).data('shadow')) ? $(ctx.canvas).data('shadow') : 'no';
			var chartType = ($(ctx.canvas).data('type')) ? $(ctx.canvas).data('type') : 'area';

			if (showShadow === 'yes' && chartType === 'area') {
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
			} else if (showShadow === 'yes' && chartType === 'line') {
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

	// creating center text
	Chart.pluginService.register({
		beforeDraw: function (chart) {
			var width = chart.chart.width,
				height = chart.chart.height,
				ctx = chart.chart.ctx;

			var center_text = $(ctx.canvas).data('fill');
			if (center_text) {
				ctx.restore();
				var fontSize = (height / 114).toFixed(2);
				ctx.font = 2 + "rem Source Sans Pro";
				ctx.textBaseline = "middle";
				ctx.fillStyle = "#fff";

				var textX = Math.round((width - ctx.measureText(center_text).width) / 2),
					textY = height / 2;

				ctx.fillText(center_text, textX, textY);
				ctx.save();
			}
		}
	});

	// default chart js options
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
	if ($('#chart-active-users').length) {
		var optsActiveUsers = $.extend({}, defaultOptions, {
			layout: {
				padding: {
					top: 20,
					bottom: 0,
					left: 0,
					right: 0
				}
			},
			tooltips: {
				mode: 'index',
				intersect: false,
				displayColors: false,
				backgroundColor: '#ffffff',
				borderWidth: 1,
				borderColor: 'rgba(0, 0, 0, 0.6)',
				titleFontSize: 13,
				titleFontColor: '#000',
				yPadding: 10,
				xPadding: 8,
				cornerRadius: 4,
				callbacks: {
					labelTextColor: function (tooltipItem, chart) {
						return '#6200EE';
					}
				}
			},
			hover: {
				mode: 'index',
				intersect: false,
			}
		});

		var ctxActiveUsers = document.getElementById('chart-active-users').getContext('2d');
		var gradientActiveUsers = ctxActiveUsers.createLinearGradient(20, 20, 80, 150);
		gradientActiveUsers.addColorStop(0.47, color('#6200EE').alpha(1).rgbString());
		gradientActiveUsers.addColorStop(1, color('#B819D2').alpha(1).rgbString());

		new Chart(ctxActiveUsers, {
			type: 'line',
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
				datasets: [{
					label: 'Active users',
					data: [5, 30, 100, 75, 125, 175],
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

	// Less orders
	if ($('#chart-less-orders').length) {
		var optsLessOrders = $.extend({}, defaultOptions, {
			layout: {
				padding: {
					top: 20,
					bottom: 0,
					left: 0,
					right: 0
				}
			},
			scales: {
				xAxes: [{
					display: false
				}],
				yAxes: [{
					display: false,
					ticks: {
						beginAtZero: true,
						padding: 30,
					}
				}]
			},
			elements: {
				line: {
					tension: 0, // disables bezier curves
				}
			},
			tooltips: {
				mode: 'index',
				intersect: false,
				displayColors: false,
				backgroundColor: '#ffffff',
				borderWidth: 1,
				borderColor: 'rgba(0, 0, 0, 0.6)',
				titleFontSize: 13,
				titleFontColor: '#000',
				yPadding: 10,
				xPadding: 8,
				cornerRadius: 4,
				callbacks: {
					labelTextColor: function (tooltipItem, chart) {
						return '#6200EE';
					}
				}
			},
			hover: {
				mode: 'index',
				intersect: false,
			}
		});

		var ctxLessOrders = document.getElementById('chart-less-orders').getContext('2d');
		var gradientLessOrders = ctxLessOrders.createLinearGradient(0, 0, 230, 0);
		gradientLessOrders.addColorStop(0, color('#00C2B7').alpha(1).rgbString());
		gradientLessOrders.addColorStop(1, color('#3D39FB').alpha(1).rgbString());

		new Chart(ctxLessOrders, {
			type: 'line',
			data: {
				labels: ["Page A", "Page B", "Page C", "Page D", "Page E"],
				datasets: [{
					label: 'orders ',
					data: [200, 300, 500, 350, 510],
					pointRadius: 0,
					backgroundColor: gradientLessOrders,
					borderColor: 'transparent',
					borderWidth: 2,
					hoverBorderColor: 'transparent',
					pointBorderWidth: 0,
					pointHoverBorderWidth: 0,
				}]
			},
			options: optsLessOrders
		});
	}

	// Extra revenue
	if ($('#chart-extra-revenue').length) {
		var optsExtraRevenue = $.extend({}, defaultOptions, {
			layout: {
				padding: {
					top: 20,
					bottom: 0,
					left: 0,
					right: 0
				}
			},
			scales: {
				xAxes: [{
					display: false
				}],
				yAxes: [{
					display: false,
					ticks: {
						beginAtZero: true,
						padding: 30,
					}
				}]
			},
			tooltips: {
				mode: 'index',
				intersect: false,
				displayColors: false,
				backgroundColor: '#ffffff',
				borderWidth: 1,
				borderColor: 'rgba(0, 0, 0, 0.6)',
				titleFontSize: 13,
				titleFontColor: '#000',
				yPadding: 10,
				xPadding: 8,
				cornerRadius: 4,
				callbacks: {
					labelTextColor: function (tooltipItem, chart) {
						return '#6200EE';
					}
				}
			},
			hover: {
				mode: 'index',
				intersect: false,
			}
		});

		var ctxExtraRevenue = document.getElementById('chart-extra-revenue').getContext('2d');
		var gradientExtraRevenue = ctxExtraRevenue.createLinearGradient(0, 0, 230, 0);
		gradientExtraRevenue.addColorStop(0, color('#EC1809').alpha(1).rgbString());
		gradientExtraRevenue.addColorStop(1, color('#FF9F0E').alpha(1).rgbString());

		new Chart(ctxExtraRevenue, {
			type: 'line',
			data: {
				labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
				datasets: [{
					label: 'Revenue',
					data: [220, 142, 125, 145, 205, 230, 200, 115, 80, 85, 120, 180],
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

	// Traffic raise
	if ($('#chart-traffic-raise').length) {
		var optsTrafficRaise = $.extend({}, defaultOptions, {
			layout: {
				padding: {
					top: 20,
					bottom: 0,
					left: 0,
					right: 0
				}
			},
			scales: {
				xAxes: [{
					display: false
				}],
				yAxes: [{
					display: false,
					ticks: {
						beginAtZero: true,
						padding: 30,
					}
				}]
			},
			elements: {
				line: {
					tension: 0, // disables bezier curves
				}
			},
			tooltips: {
				mode: 'index',
				intersect: false,
				displayColors: false,
				backgroundColor: '#ffffff',
				borderWidth: 1,
				borderColor: 'rgba(0, 0, 0, 0.6)',
				titleFontSize: 13,
				titleFontColor: '#000',
				yPadding: 10,
				xPadding: 8,
				cornerRadius: 4,
				callbacks: {
					labelTextColor: function (tooltipItem, chart) {
						return '#6200EE';
					}
				}
			},
			hover: {
				mode: 'index',
				intersect: false,
			}
		});

		var ctxTrafficRaise = document.getElementById('chart-traffic-raise').getContext('2d');

		new Chart(ctxTrafficRaise, {
			type: 'line',
			trafficRaise: [
				{month: 'Jan', traffic: 20},
				{month: 'Feb', traffic: 70},
				{month: 'Mar', traffic: 120},
				{month: 'Apr', traffic: 50},
				{month: 'May', traffic: 130},
			],
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May"],
				datasets: [{
					label: 'Traffic',
					data: [20, 70, 120, 50, 130],
					fill: false,
					backgroundColor: '#fff',
					borderColor: '#6200EE',
					hoverBorderColor: '#6200EE',
					pointBackgroundColor: '#fff',
					pointBorderColor: '#6200EE',
					pointBorderWidth: 2,
					pointHoverBorderWidth: 2,
				}]
			},
			options: optsTrafficRaise
		});
	}

	// Growth revenue
	if ($('#chart-growth-revenue').length) {
		var chartGrowthRevenue = new Chartist.Line('#chart-growth-revenue', {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
			series: [[55, 42, 65, 57, 68, 69, 90, 70, 80, 58]]
		}, {
			axisX: {
				showGrid: false,
				showLabel: false,
				offset: 0,
			},
			axisY: {
				showGrid: false,
				showLabel: true,
				offset: 0,
			},
			lineSmooth: Chartist.Interpolation.cardinal({
				tension: 1
			}),
			showPoint: false,
			fullWidth: true,
			low: 0,
			showArea: true,
			chartPadding: 0,
		});

		chartGrowthRevenue.on('created', function (data) {
			var defs = data.svg.elem('defs');
			defs.elem('linearGradient', {
				id: 'gradient-chart-growth-revenue',
				x1: 0,
				y1: 0,
				x2: 0,
				y2: 1
			}).elem('stop', {
				offset: "-74.43%",
				'stop-opacity': '1',
				'stop-color': '#19A6D2'
			}).parent().elem('stop', {
				offset: "93.54%",
				'stop-opacity': '1',
				'stop-color': 'rgba(255, 255, 255, 0)'
			});
		});
	}

	// Growth traffic
	if ($('#chart-growth-traffic').length) {
		var widgetAreaChart = new Chartist.Line('#chart-growth-traffic', {
				labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
				series: [[33, 40, 70, 60, 75, 50, 85, 100]]
			},
			{
				axisX: {
					showGrid: false,
					showLabel: false,
					offset: 0,
				},
				axisY: {
					showGrid: false,
					showLabel: true,
					offset: 0,
				},
				lineSmooth: Chartist.Interpolation.cardinal({
					tension: 0
				}),
				showPoint: false,
				fullWidth: true,
				low: 0,
				showArea: true,
				chartPadding: 0,
			});

		widgetAreaChart.on('created', function (data) {
			var defs = data.svg.elem('defs');
			defs.elem('linearGradient', {
				id: 'gradient-chart-growth-traffic',
				x1: 0,
				y1: 0,
				x2: 0,
				y2: 1
			}).elem('stop', {
				offset: "0%",
				'stop-opacity': '1',
				'stop-color': 'rgba(238, 0, 29, 0.12)'
			}).parent().elem('stop', {
				offset: "89.2%",
				'stop-opacity': '1',
				'stop-color': 'rgba(238, 0, 0, 0)'
			});
		});
	}

	// Order Reduced
	if ($('#chart-order-reduced').length) {
		var optsOrderReduced = $.extend({}, defaultOptions, {
			layout: {
				padding: {
					top: 20,
					bottom: 0,
					left: 0,
					right: 0
				}
			},
			scales: {
				xAxes: [{
					display: false
				}],
				yAxes: [{
					display: false,
					ticks: {
						beginAtZero: true,
						padding: 30,
					}
				}]
			},
			tooltips: {
				mode: 'index',
				intersect: false,
				displayColors: false,
				backgroundColor: '#ffffff',
				borderWidth: 1,
				borderColor: 'rgba(0, 0, 0, 0.6)',
				titleFontSize: 13,
				titleFontColor: '#000',
				yPadding: 10,
				xPadding: 8,
				cornerRadius: 4,
				callbacks: {
					labelTextColor: function (tooltipItem, chart) {
						return '#6200EE';
					}
				}
			},
			hover: {
				mode: 'index',
				intersect: false,
			}
		});

		var ctxOrderReduced = document.getElementById('chart-order-reduced').getContext('2d');
		var gradientOrderReduced = ctxOrderReduced.createLinearGradient(0, 0, 230, 10);
		gradientOrderReduced.addColorStop(0.05, color('#EC1809').alpha(1).rgbString());
		gradientOrderReduced.addColorStop(0.99, color('#FF9F0E').alpha(1).rgbString());

		new Chart(ctxOrderReduced, {
			type: 'line',
			data: {
				labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
				datasets: [{
					label: 'Revenue',
					data: [220, 142, 125, 145, 205, 230, 200, 115, 80, 85, 120, 180],
					pointRadius: 0,
					backgroundColor: gradientOrderReduced,
					borderColor: 'transparent',
					hoverBorderColor: 'transparent',
					pointBorderWidth: 0,
					pointHoverBorderWidth: 0,
				}]
			},
			options: optsOrderReduced
		});
	}

	// Line Traffic raise
	if ($('#line-traffic-raise').length) {
		var optsLineTrafficRaise = $.extend({}, defaultOptions, {
			tooltips: {
				mode: 'index',
				intersect: false,
				displayColors: false,
				backgroundColor: '#ffffff',
				borderWidth: 1,
				borderColor: 'rgba(0, 0, 0, 0.6)',
				titleFontSize: 13,
				titleFontColor: '#000',
				yPadding: 10,
				xPadding: 8,
				cornerRadius: 4,
				callbacks: {
					labelTextColor: function (tooltipItem, chart) {
						return '#8DCD03';
					}
				}
			},
			hover: {
				mode: 'index',
				intersect: false,
			}
		});

		var ctxLineTrafficRaise = document.getElementById('line-traffic-raise').getContext('2d');

		new Chart(ctxLineTrafficRaise, {
			type: 'line',
			data: {
				labels: months,
				datasets: [{
					label: 'Traffic ',
					data: [100, 90, 140, 80, 120, 115, 160, 110, 145, 125, 170, 160],
					fill: false,
					borderColor: '#8DCD03',
					pointRadius: 1.5,
					pointBorderWidth: 0,
					pointHoverRadius: 5,
					pointHoverBorderWidth: 2,
					pointHoverBackgroundColor: '#8DCD03',
					pointHoverBorderColor: '#fff'
				}]
			},
			options: optsLineTrafficRaise
		});
	}

	// Total Income
	if ($('#chart-total-income').length) {
		var ctxTotalIncome = document.getElementById('chart-total-income').getContext('2d');
		var gradientTotalIncome = ctxTotalIncome.createLinearGradient(20, 20, 80, 150);
		gradientTotalIncome.addColorStop(0.47, color('#6200EE').alpha(1).rgbString());
		gradientTotalIncome.addColorStop(1, color('#B819D2').alpha(1).rgbString());

		var optsTotalIncome = $.extend({}, defaultOptions, {
			elements: {
				line: {
					tension: 0, // disables bezier curves
				}
			},
			tooltips: {
				mode: 'index',
				intersect: false,
				displayColors: false,
				backgroundColor: '#ffffff',
				borderWidth: 1,
				borderColor: 'rgba(0, 0, 0, 0.6)',
				titleFontSize: 13,
				titleFontColor: '#000',
				yPadding: 10,
				xPadding: 8,
				cornerRadius: 4,
				callbacks: {
					labelTextColor: function (tooltipItem, chart) {
						return '#6200EE';
					}
				}
			},
			hover: {
				mode: 'index',
				intersect: false,
			}
		});

		new Chart(ctxTotalIncome, {
			type: 'line',
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
				datasets: [{
					label: 'Income',
					data: [5, 30, 100, 75, 125, 175],
					pointRadius: 0,
					backgroundColor: gradientTotalIncome,
					hoverBackgroundColor: gradientTotalIncome,
					borderWidth: 0,
					borderColor: 'transparent',
					hoverBorderColor: 'transparent',
					hoverBorderWidth: 0,
					pointBorderWidth: 0,
					pointHoverBorderWidth: 0,
				}]
			},
			options: optsTotalIncome
		});
	}

	// Support queries
	if ($('#chart-support-queries').length) {
		var ctxSupportQueries = document.getElementById('chart-support-queries').getContext('2d');

		var optsSupportQueries = $.extend({}, defaultOptions, {
			tooltips: {
				displayColors: false,
				backgroundColor: '#ffffff',
				borderWidth: 1,
				borderColor: 'rgba(0, 0, 0, 0.6)',
				titleFontSize: 13,
				titleFontColor: '#000',
				yPadding: 10,
				xPadding: 8,
				cornerRadius: 4,
				callbacks: {
					labelTextColor: function (tooltipItem, chart) {
						return '#6200EE';
					}
				}
			}
		});

		new Chart(ctxSupportQueries, {
			type: 'bar',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
				datasets: [{
					label: 'Queries',
					data: [5400, 4100, 5400, 1500, 1500, 5700, 5500, 4300, 1300, 2000, 3500, 5200],
					backgroundColor: '#6200EE',
					hoverBackgroundColor: '#6200EE',
					categoryPercentage: 0.6,
					barPercentage: 0.6
				}]
			},
			options: optsSupportQueries
		});
	}

	// Total Revenue
	if ($('#bar-chart-total-revenue').length) {
		var ctxBarTotalRevenue = document.getElementById('bar-chart-total-revenue').getContext('2d');

		var optsBarTotalRevenue = $.extend({}, defaultOptions, {
			scales: {
				xAxes: [{
					display: false,
					stacked: true
				}],
				yAxes: [{
					display: false,
					stacked: true
				}]
			},
			tooltips: {
				mode: 'index',
				intersect: false,
				displayColors: false,
				backgroundColor: '#ffffff',
				borderWidth: 1,
				borderColor: 'rgba(0, 0, 0, 0.6)',
				titleFontSize: 13,
				titleFontColor: '#000',
				yPadding: 10,
				xPadding: 8,
				cornerRadius: 4,
				callbacks: {
					labelTextColor: function (tooltipItem, chart) {
						return '#6200EE';
					}
				}
			}
		});

		new Chart(ctxBarTotalRevenue, {
			type: 'bar',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
				datasets: [
					{
						label: 'Revenue',
						data: [37, 30, 0, 7, 27, 42, 43, 1, 3, 43, 7, 39],
						backgroundColor: '#6200EE',
						hoverBackgroundColor: '#6200EE',
						categoryPercentage: 0.6,
						barPercentage: 0.6
					},
					{
						label: 'Profit',
						data: [0, 15, 26, 35, 16, 15, 22, 26, 39, 4, 13, 0],
						backgroundColor: '#00B3A6',
						hoverBackgroundColor: '#00B3A6',
						categoryPercentage: 0.6,
						barPercentage: 0.6
					}
				]
			},
			options: optsBarTotalRevenue
		});
	}

})(jQuery);
