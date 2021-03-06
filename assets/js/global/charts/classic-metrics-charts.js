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

	// Online Signups
	if ($('#chart-online-signups').length) {
		var optsOnlineSignups = $.extend({}, defaultOptions, {
			tooltips: {
				mode: 'index',
				intersect: false,
				displayColors: false,
				backgroundColor: '#0062FF',
				yPadding: 10,
				xPadding: 8,
				cornerRadius: 4,
				callbacks: {
					title: function () {
						return false;
					},
					label: function (tooltipItem) {
						return tooltipItem.label + ': ' + tooltipItem.value + ' Signups';
					}
				}
			},
			hover: {
				mode: 'index',
				intersect: false,
			}
		});

		var ctxOnlineSignups = document.getElementById('chart-online-signups').getContext('2d');

		new Chart(ctxOnlineSignups, {
			type: 'line',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October'],
				datasets: [{
					label: 'Online Signups',
					data: [2000, 1450, 1100, 1400, 900, 1600, 1300, 1800, 1200, 1600],
					fill: false,
					borderColor: '#0062FF',
					pointRadius: 1.5,
					pointBorderWidth: 0,
					pointHoverRadius: 5,
					pointHoverBorderWidth: 2,
					pointHoverBackgroundColor: '#0062FF',
					pointHoverBorderColor: '#fff'
				}]
			},
			options: optsOnlineSignups
		});
	}

	// Last month sale
	if ($('#chart-last-month-sale').length) {
		var optsLastMonthSale = $.extend({}, defaultOptions, {
			tooltips: {
				mode: 'index',
				intersect: false,
				displayColors: false,
				backgroundColor: '#4200FF',
				yPadding: 10,
				xPadding: 8,
				cornerRadius: 4,
				callbacks: {
					title: function () {
						return false;
					},
					label: function (tooltipItem) {
						return lastMonthName + ' ' + tooltipItem.label + ': $' + tooltipItem.value;
					}
				}
			},
			hover: {
				mode: 'index',
				intersect: false,
			}
		});

		var ctxLastMonthSale = document.getElementById('chart-last-month-sale').getContext('2d');

		new Chart(ctxLastMonthSale, {
			type: 'line',
			data: {
				labels: [3, 6, 9, 12, 15, 18, 21, 24, 27, 30],
				datasets: [{
					label: 'Sale',
					data: [2000, 1450, 1650, 1200, 1800, 1300, 1550, 1850, 1400, 950],
					fill: false,
					borderColor: '#4200FF',
					pointRadius: 1.5,
					pointBorderWidth: 0,
					pointHoverRadius: 5,
					pointHoverBorderWidth: 2,
					pointHoverBackgroundColor: '#4200FF',
					pointHoverBorderColor: '#fff'
				}]
			},
			options: optsLastMonthSale
		});
	}

	// Total Revenue
	if ($('#chart-total-revenue').length) {
		var optsTotalRevenue = $.extend({}, defaultOptions, {
			tooltips: {
				mode: 'index',
				intersect: false,
				displayColors: false,
				backgroundColor: '#29CF6B',
				yPadding: 10,
				xPadding: 8,
				cornerRadius: 4,
				callbacks: {
					title: function () {
						return false;
					},
					label: function (tooltipItem) {
						return tooltipItem.label + ': $' + tooltipItem.value;
					}
				}
			},
			hover: {
				mode: 'index',
				intersect: false,
			}
		});

		var ctxTotalRevenue = document.getElementById('chart-total-revenue').getContext('2d');

		new Chart(ctxTotalRevenue, {
			type: 'line',
			data: {
				labels: months,
				datasets: [{
					label: '',
					data: [1000, 850, 1400, 700, 1100, 900, 1600, 900, 1250, 1000, 1400, 1800],
					fill: false,
					borderColor: '#29CF6B',
					pointRadius: 1.5,
					pointBorderWidth: 0,
					pointHoverRadius: 5,
					pointHoverBorderWidth: 2,
					pointHoverBackgroundColor: '#29CF6B',
					pointHoverBorderColor: '#fff'
				}]
			},
			options: optsTotalRevenue
		});
	}

	// Total Email Sent
	if ($('#chart-total-mail-sent').length) {
		var optsTotalEmailSent = $.extend({}, defaultOptions, {
			tooltips: {
				mode: 'index',
				intersect: false,
				displayColors: false,
				backgroundColor: '#FFA601',
				yPadding: 10,
				xPadding: 8,
				cornerRadius: 4,
				callbacks: {
					title: function (tooltipItems) {
						var tooltipItem = tooltipItems[0];
						return 'Month ' + tooltipItem.label;
					},
					label: function (tooltipItem, data) {
						var label = data.datasets[tooltipItem.datasetIndex].label || '';

						if (label) {
							label += ' - ';
						}
						label += tooltipItem.yLabel;
						return label;
					}
				}
			},
			hover: {
				mode: 'index',
				intersect: false,
			}
		});

		var ctxTotalEmailSent = document.getElementById('chart-total-mail-sent').getContext('2d');

		new Chart(ctxTotalEmailSent, {
			type: 'line',
			data: {
				labels: ['Jan', 'Fab', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
				datasets: [
					{
						label: 'Sent',
						data: [1600, 1000, 1100, 1200, 1300, 1450, 1800, 2000, 1700, 1400, 1600, 1800],
						fill: false,
						borderColor: '#FFA601',
						pointRadius: 1.5,
						pointBorderWidth: 0,
						pointHoverRadius: 5,
						pointHoverBorderWidth: 2,
						pointHoverBackgroundColor: '#F3E5CF',
						pointHoverBorderColor: '#fff'
					},
					{
						label: 'Bounced',
						data: [1600, 1400, 1100, 800, 1300, 1900, 1800, 1700, 1400, 1100, 1500, 1800],
						fill: false,
						borderColor: '#F3E5CF',
						pointRadius: 1.5,
						pointBorderWidth: 0,
						pointHoverRadius: 5,
						pointHoverBorderWidth: 2,
						pointHoverBackgroundColor: '#FFA601',
						pointHoverBorderColor: '#fff'
					}
				]
			},
			options: optsTotalEmailSent
		});
	}

	// New Subscribers
	if ($('#chart-new-subscribers').length) {
		var optsNewSubscribers = $.extend({}, defaultOptions, {
			aspectRatio: 1.4,
			tooltips: {
				displayColors: false,
				backgroundColor: '#fff',
				yPadding: 10,
				xPadding: 8,
				cornerRadius: 4,
				callbacks: {
					title: function (tooltipItems) {
						return false;
					},
					label: function (tooltipItem, data) {
						var label = tooltipItem.label || '';

						if (label) {
							label += ': ';
						}
						label += tooltipItem.yLabel + ' ' + data.datasets[tooltipItem.datasetIndex].label;
						return label;
					},
					labelTextColor: function (tooltipItem, chart) {
						return '#6200EE';
					}
				}
			},
		});

		var ctxNewSubscribers = document.getElementById('chart-new-subscribers').getContext('2d');

		new Chart(ctxNewSubscribers, {
			type: 'bar',
			data: {
				labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
				datasets: [{
					label: 'Users',
					data: [1000, 500, 1300, 300, 750, 850, 150],
					backgroundColor: '#fff',
					hoverBackgroundColor: '#fff',
					barPercentage: 0.5,
					barThickness: 6,
				}]
			},
			options: optsNewSubscribers
		});
	}

	// News Articles
	if ($('#chart-news-articles').length) {
		var optsNewsArticles = $.extend({}, defaultOptions, {
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
				backgroundColor: '#00C4B4',
				borderWidth: 1,
				borderColor: '#fff',
				yPadding: 10,
				xPadding: 8,
				cornerRadius: 4,
				callbacks: {
					title: function (tooltipItems) {
						return false;
					},
					label: function (tooltipItem, data) {
						var label = tooltipItem.label || '';

						if (label) {
							label += ': ';
						}
						label += tooltipItem.yLabel;
						return label;
					},
				}
			},
			hover: {
				mode: 'index',
				intersect: false,
			}
		});

		var ctxNewsArticles = document.getElementById('chart-news-articles').getContext('2d');

		new Chart(ctxNewsArticles, {
			type: 'line',
			data: {
				labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
				datasets: [{
					label: 'Users',
					data: [1500, 1600, 1900, 2200, 2000, 1650, 1600, 1900, 2400],
					fill: false,
					borderColor: '#fff',
					pointRadius: 1.5,
					pointBorderWidth: 0,
					pointHoverRadius: 5,
					pointHoverBorderWidth: 2,
					pointHoverBackgroundColor: '#00C4B4',
					pointHoverBorderColor: '#fff'
				}]
			},
			options: optsNewsArticles
		});
	}

	// New Authors
	if ($('#chart-new-authors').length) {
		var proposal_data = {
			labels: [
				"Active",
				"Pending"
			],
			datasets: [
				{
					data: [270, 90],
					backgroundColor: [
						color(chartColors.white).alpha(1).rgbString(),
						color(chartColors.red).alpha(1).rgbString()
					],
					hoverBackgroundColor: [
						color(chartColors.yellow).alpha(0.8).rgbString(),
						color(chartColors.blue).alpha(0.6).rgbString()
					]
				}
			]
		};

		new Chart(document.getElementById('chart-new-authors'), {
			type: 'doughnut',
			data: proposal_data,
			options: {
				tooltips: {
					displayColors: false,
					backgroundColor: '#8B061E',
					yPadding: 10,
					xPadding: 8,
					cornerRadius: 4,
				},
				rotation: 1.5,
				borderWidth: 1,
				cutoutPercentage: 80,
				responsive: false,
				legend: {
					display: false
				}
			}
		});
	}

	// Avg Daily Traffic
	if ($('#chart-avg-daily-traffic').length) {
		var optsAvgDailyTraffic = $.extend({}, defaultOptions, {
			elements: {
				line: {
					tension: 0, // disables bezier curves
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
				backgroundColor: '#0795F4',
				borderWidth: 1,
				borderColor: '#fff',
				yPadding: 10,
				xPadding: 8,
				cornerRadius: 4,
				callbacks: {
					title: function (tooltipItems) {
						return false;
					},
					label: function (tooltipItem, data) {
						var label = tooltipItem.label || '';

						if (label) {
							label += ': ';
						}
						label += tooltipItem.yLabel;
						return label;
					},
				}
			},
			hover: {
				mode: 'index',
				intersect: false,
			}
		});

		var ctxAvgDailyTraffic = document.getElementById('chart-avg-daily-traffic').getContext('2d');

		new Chart(ctxAvgDailyTraffic, {
			type: 'line',
			data: {
				labels: ['Mon', 'Tues', 'Wed', 'Thru', 'Fri', 'Sat', 'Sun'],
				datasets: [{
					label: 'Users',
					data: [500, 1500, 1200, 1750, 1000, 1400, 1800],
					backgroundColor: '#41AEF7',
					borderColor: '#fff',
					pointRadius: 1.5,
					pointBorderWidth: 0,
					pointHoverRadius: 5,
					pointHoverBorderWidth: 2,
					pointHoverBackgroundColor: '#00C4B4',
					pointHoverBorderColor: '#fff'
				}]
			},
			options: optsAvgDailyTraffic
		});
	}

	// Year Sale Report
	if ($('#chart-year-sale-report').length) {
		var optsYearSaleReport = $.extend({}, defaultOptions, {
			scales: {
				xAxes: [{
					display: true,
					gridLines: {
						display: false,
					},
					ticks: {
						fontColor: "#6200EE", // this here
					},
				}],
				yAxes: [{
					display: false,
					ticks: {
						beginAtZero: true,
					}
				}]
			},
			tooltips: {
				displayColors: false,
				backgroundColor: '#fff',
				titleFontColor: '#000',
				yPadding: 10,
				xPadding: 8,
				cornerRadius: 4,
				callbacks: {
					title: function (tooltipItems) {
						var tooltipItem = tooltipItems[0];
						return 'Month: ' + months[tooltipItem.index];
					},
					labelTextColor: function (tooltipItem, chart) {
						return '#6200EE';
					}
				}
			},
		});

		var ctxYearSaleReport = document.getElementById('chart-year-sale-report').getContext('2d');

		new Chart(ctxYearSaleReport, {
			type: 'bar',
			data: {
				labels: ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
				datasets: [{
					label: 'Amount',
					data: [2700, 3700, 3000, 2600, 2700, 4200, 4300, 2600, 4300, 3900, 2600, 2600],
					backgroundColor: '#6200EE',
					hoverBackgroundColor: '#6200EE',
					borderWidth: 0,
					categoryPercentage: 1.0,
					barPercentage: 0.4
				}]
			},
			options: optsYearSaleReport
		});
	}

	// Google insight score
	if ($.isFunction($.fn.circleProgress) && $('#circle-google-insight-score').length) {
		$('#circle-google-insight-score').circleProgress({
			value: 1,
			size: 120,
			thickness: 15,
			lineCap: "round",
			startAngle: -Math.PI / 4 * 2,
			fill: {color: '#03DAC5'}
		});
	}

	// Application
	if ($('#chart-application').length) {
		var ctxApplication = document.getElementById('chart-application').getContext('2d');
		var optsApplication = $.extend({}, defaultOptions, {
			tooltips: {
				displayColors: false,
				backgroundColor: '#fff',
				yPadding: 10,
				xPadding: 8,
				cornerRadius: 4,
				bodyFontSize: 16,
				callbacks: {
					label: function (tooltipItem, data) {
						var dataset = data.datasets[0];
						var label = data.labels[tooltipItem.index] || '';

						if (label) {
							label += ': ';
						}
						label += dataset.data[tooltipItem.index] + '%';

						return label;
					},
					labelTextColor: function (tooltipItem, chart) {
						return '#000';
					}
				}
			},
		});

		new Chart(ctxApplication, {
			type: 'pie',
			data: {
				labels: ['Windows', 'Android', 'Apple'],
				datasets: [
					{
						data: [25.85, 25.91, 50.85],
						backgroundColor: ['#0795F4', '#23036A', '#8DCD03']
					}
				]
			},
			options: optsApplication
		});
	}

	// Orders
	if ($('#chart-radar-orders').length) {
		var ctxRadarOrders = document.getElementById('chart-radar-orders').getContext('2d');
		var optsRadarOrders = $.extend({}, defaultOptions, {
			chartType: 'customRadar',
			borderColor: 'red',
			legend: {
				display: false,
				labels: {
					fontColor: '#AAAEB3',
				},
			},
			scale: {
				gridLines: {
					color: ['#AAAEB3', '#AAAEB3', '#AAAEB3', '#AAAEB3', '#AAAEB3', '#AAAEB3', '#AAAEB3'],
				},
			},
		});

		var gradientBlue = ctxRadarOrders.createLinearGradient(0, 0, 0, 150);
		gradientBlue.addColorStop(0, 'rgba(127, 57, 251, 0.9)');
		gradientBlue.addColorStop(1, 'rgba(151, 135, 255, 0.8)');

		var gradientHoverBlue = ctxRadarOrders.createLinearGradient(0, 0, 0, 150);
		gradientHoverBlue.addColorStop(0, 'rgba(65, 65, 255, 1)');
		gradientHoverBlue.addColorStop(1, 'rgba(131, 125, 255, 1)');

		var gradientRed = ctxRadarOrders.createLinearGradient(0, 0, 0, 150);
		gradientRed.addColorStop(0, 'rgba(3, 218, 197, 0.9)');
		gradientRed.addColorStop(1, 'rgba(3, 218, 197, 0.8)');

		var gradientHoverRed = ctxRadarOrders.createLinearGradient(0, 0, 0, 150);
		gradientHoverRed.addColorStop(0, 'rgba(255, 65, 164, 1)');
		gradientHoverRed.addColorStop(1, 'rgba(255, 115, 115, 1)');

		Chart.plugins.register({
			afterEvent: function (chart, e) {
				const datasets = chart.config.data.datasets;
				const canvas = chart.canvas;

				if (chart.options.chartType === 'customRadar') {
					chart.ctx.beginPath();
					chart.ctx.moveTo(91, 69);
					chart.ctx.lineTo(152, 80);
					chart.ctx.lineTo(192, 75);
					chart.ctx.lineTo(213, 138);
					chart.ctx.lineTo(148, 168);
					chart.ctx.lineTo(105, 126);
					chart.ctx.fill();
					chart.ctx.closePath();

					if (chart.ctx.isPointInPath(e.x, e.y)) {
						let dataset = datasets[0];
						dataset.backgroundColor = gradientHoverBlue;
						chart.update();
						canvas.style.cursor = 'pointer';
					} else {
						let dataset = datasets[0];
						dataset.backgroundColor = gradientBlue;
						chart.update();
						canvas.style.cursor = 'default';
					}

					// Blue chart
					chart.ctx.beginPath();
					chart.ctx.moveTo(85, 61);
					chart.ctx.lineTo(149, 66);
					chart.ctx.lineTo(224, 63);
					chart.ctx.lineTo(179, 112);
					chart.ctx.lineTo(152, 177);
					chart.ctx.lineTo(121, 117);
					chart.ctx.fill();
					chart.ctx.closePath();

					if (chart.ctx.isPointInPath(e.x, e.y)) {
						let dataset = datasets[1];
						dataset.backgroundColor = gradientHoverRed;
						chart.ctx.shadowColor = 'rgba(0, 0, 0, 0.10)';
						chart.ctx.shadowBlur = 10;
						chart.update();
						canvas.style.cursor = 'pointer';
					} else {
						let dataset = datasets[1];
						dataset.backgroundColor = gradientRed;
						chart.ctx.shadowColor = 'rgba(0, 0, 0, 0)';
						chart.ctx.shadowBlur = 0;
						chart.update();
						canvas.style.cursor = 'default';
					}
				}
			},
		});

		new Chart(ctxRadarOrders, {
			type: 'radar',
			data: {
				labels: ['', '', '', '', '', ''],
				datasets: [
					{
						label: 'Donté Panlin',
						data: [70, 85, 65, 65, 85, 82],
						fill: true,
						backgroundColor: gradientBlue,
						borderColor: 'transparent',
						pointBackgroundColor: 'transparent',
						pointBorderColor: 'transparent',
						pointHoverBackgroundColor: 'transparent',
						pointHoverBorderColor: 'transparent',
						pointHitRadius: 50,
					},
					{
						label: 'Mireska Sunbreeze',
						data: [80, 70, 80, 80, 75, 40],
						fill: true,
						backgroundColor: gradientRed,
						borderColor: 'transparent',
						pointBackgroundColor: 'transparent',
						pointBorderColor: 'transparent',
						pointHoverBackgroundColor: 'transparent',
						pointHoverBorderColor: 'transparent',
						pointHitRadius: 50,
					}
				]
			},
			options: optsRadarOrders
		});
	}

	// Traffic Gauge
	if ($('#canvas-gauge-traffic').length) {
		var opts = {
			angle: 0,
			lineWidth: 0.25,
			pointer: {
				length: 0.35,
				strokeWidth: 0.09,
				color: 'rgba(0, 0, 0, 0.8)'
			},
			staticZones: [
				{strokeStyle: "#E00930", min: 0, max: 250},
				{strokeStyle: "#FF8C00", min: 250, max: 500},
				{strokeStyle: "#FFCA41", min: 500, max: 750},
				{strokeStyle: "#8DCD03", min: 750, max: 1000}
			],
			limitMax: false,
			limitMin: false,
			strokeColor: '#E0E0E0',
			highDpiSupport: true,
			fontSize: 16,
		};
		var target = document.getElementById('canvas-gauge-traffic'); // your canvas element
		var gauge = new Gauge(target); // create sexy gauge!
		gauge.setTextField(document.getElementById("preview-gauge-traffic"));
		gauge.maxValue = 1000; // set max gauge value
		gauge.setMinValue(0);  // Prefer setter over gauge.minValue = 0
		gauge.animationSpeed = 20; // set animation speed (32 is default value)
		gauge.setOptions(opts);
		gauge.set(500); // set actual value
	}


	// =================================================================================================== //
	// Active users
	var optsActiveUsers = $.extend({}, defaultOptions);
	optsActiveUsers.elements = {
		line: {
			tension: 0, // disables bezier curves
		}
	};

	var ctxActiveUsers = document.getElementById('chart-active-users').getContext('2d');
	var gradientActiveUsers = ctxActiveUsers.createLinearGradient(0, 0, 230, 0);
	gradientActiveUsers.addColorStop(0, color('#4f35ac').alpha(0.9).rgbString());
	gradientActiveUsers.addColorStop(1, color('#a140c1').alpha(0.9).rgbString());

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

	// Extra revenue
	var optsExtraRevenue = $.extend({}, defaultOptions);

	var ctxExtraRevenue = document.getElementById('chart-extra-revenue').getContext('2d');
	var gradientExtraRevenue = ctxExtraRevenue.createLinearGradient(0, 0, 230, 0);
	gradientExtraRevenue.addColorStop(0, color('#46cafb').alpha(0.9).rgbString());
	gradientExtraRevenue.addColorStop(1, color('#1b92fc').alpha(0.9).rgbString());

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

	// Orders
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
				backgroundColor: color('#FEA931').alpha(0.3).rgbString(),
				borderColor: '#FEA931',
				borderWidth: 2,
				hoverBorderColor: '#FEA931',
				pointBorderWidth: 0,
				pointHoverBorderWidth: 0,
			}]
		},
		options: optsOrders
	});

	// Traffic raise
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
				borderColor: '#0d93df',
				hoverBorderColor: '#0d93df',
				pointBackgroundColor: '#fff',
				pointBorderColor: '#fe9e15',
				pointBorderWidth: 2,
				pointHoverBorderWidth: 2,
			}]
		},
		options: optsTrafficRaise
	});

	// Growth revenue
	var optsGrowthRevenue = $.extend({}, defaultOptions);

	var ctxGrowthRevenue = document.getElementById('chart-growth-revenue').getContext('2d');
	var gradientGrowthRevenue = ctxGrowthRevenue.createLinearGradient(0, 60, 230, 70);
	gradientGrowthRevenue.addColorStop(0, color('#4f35ac').alpha(0.9).rgbString());
	gradientGrowthRevenue.addColorStop(1, color('#a140c1').alpha(0.9).rgbString());

	new Chart(ctxGrowthRevenue, {
		type: 'line',
		data: {
			labels: ["Page A", "Page B", "Page C", "Page D"],
			datasets: [{
				label: 'Active users',
				data: [1450, 450, 1800, 800],
				pointRadius: 0,
				backgroundColor: gradientGrowthRevenue,
				borderColor: 'transparent',
				hoverBorderColor: 'transparent',
				pointBorderWidth: 0,
				pointHoverBorderWidth: 0,
			}]
		},
		options: optsGrowthRevenue
	});

	// Growth traffic
	var optsGrowthTraffic = $.extend({}, defaultOptions);
	optsGrowthTraffic.elements = {
		line: {
			tension: 0, // disables bezier curves
		}
	};

	var ctxGrowthTraffic = document.getElementById('chart-growth-traffic').getContext('2d');
	var gradientGrowthTraffic = ctxGrowthTraffic.createLinearGradient(0, 80, 180, 70);
	gradientGrowthTraffic.addColorStop(0, color('#1b92fc').alpha(0.9).rgbString());
	gradientGrowthTraffic.addColorStop(1, color('#46cafb').alpha(0.9).rgbString());

	new Chart(ctxGrowthTraffic, {
		type: 'line',
		data: {
			labels: ["Page A", "Page B", "Page C", "Page D", "Page G", "Page K", "Page M", "Page R"],
			datasets: [{
				label: 'Active users',
				data: [200, 900, 750, 600, 1100, 1600, 1250, 900],
				pointRadius: 0,
				backgroundColor: gradientGrowthTraffic,
				borderColor: 'transparent',
				hoverBorderColor: 'transparent',
				pointBorderWidth: 0,
				pointHoverBorderWidth: 0,
			}]
		},
		options: optsGrowthTraffic
	});

	// Less revenue
	var optsLessRevenue = $.extend({}, defaultOptions);
	var ctxLessRevenue = document.getElementById('chart-less-revenue').getContext('2d');
	var gradientLessRevenue = ctxGrowthTraffic.createLinearGradient(0, 80, 180, 70);
	gradientLessRevenue.addColorStop(0, color('#1b92fc').alpha(0.9).rgbString());
	gradientLessRevenue.addColorStop(1, color('#46cafb').alpha(0.9).rgbString());
	new Chart(ctxLessRevenue, {
		type: 'line',
		data: {
			labels: ["Page A", "Page B", "Page C", "Page D", "Page E"],
			datasets: [{
				label: 'Active users',
				data: [1330, 750, 1160, 760, 1000],
				pointRadius: 0,
				backgroundColor: gradientLessRevenue,
				borderColor: 'transparent',
				hoverBorderColor: 'transparent',
				pointBorderWidth: 0,
				pointHoverBorderWidth: 0,
			}]
		},
		options: optsLessRevenue
	});

	// Line Traffic raise
	var optsLineTrafficRaise = $.extend({}, defaultOptions);
	optsLineTrafficRaise.elements = {
		line: {
			tension: 0, // disables bezier curves
		}
	};

	var ctxLineTrafficRaise = document.getElementById('line-traffic-raise').getContext('2d');

	new Chart(ctxLineTrafficRaise, {
		type: 'line',
		data: {
			labels: ["Page C", "Page D", "Page E", "Page F", "Page G"],
			datasets: [{
				label: 'Active users',
				data: [163, 620, 390, 860, 230],
				fill: false,
				backgroundColor: '#fff',
				borderColor: '#f14631',
				hoverBorderColor: '#fff',
				pointBackgroundColor: '#f14631',
				pointBorderColor: '#fff',
				pointBorderWidth: 2,
				pointHoverBorderWidth: 2,
			}]
		},
		options: optsLineTrafficRaise
	});

	// Total Income
	var ctxTotalIncome = document.getElementById('chart-total-income').getContext('2d');
	var gradientTotalIncome = ctxTotalIncome.createLinearGradient(0, 0, 180, 230);
	gradientTotalIncome.addColorStop(0.4, color('#b8345f').alpha(0.9).rgbString());
	gradientTotalIncome.addColorStop(1, color('#b8345f').alpha(0.7).rgbString());

	var optsTotalIncome = $.extend({}, defaultOptions);

	optsTotalIncome.elements = {
		line: {
			tension: 0, // disables bezier curves
		}
	};

	new Chart(ctxTotalIncome, {
		type: 'line',
		data: {
			labels: ["Page A", "Page B", "Page C", "Page D", "Page E", "Page F", "Page G", "Page M"],
			datasets: [{
				label: 'Active Users',
				data: [50, 520, 420, 320, 590, 860, 545, 230],
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

	// Support queries
	var ctxSupportQueries = document.getElementById('chart-support-queries').getContext('2d');

	var optsSupportQueries = $.extend({}, defaultOptions);
	optsSupportQueries.scales = {
		xAxes: [
			{
				display: false,
				stacked: true,
			}
		],
		yAxes: [
			{
				display: false,
				stacked: true
			}
		]
	};

	new Chart(ctxSupportQueries, {
		type: 'bar',
		data: {
			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
			datasets: [{
				label: 'Active Users',
				data: [400, 600, 800, 200, 1300, 1000, 1600, 600, 400, 700, 800, 1700],
				backgroundColor: '#52c41a',
				hoverBackgroundColor: '#52c41a',
				categoryPercentage: 1.0,
				barPercentage: 0.6
			}]
		},
		options: optsSupportQueries
	});
})(jQuery);
