(function ($) {
	"use strict";

	var color = Chart.helpers.color;

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

	if ($('#chart-revenue').length) {
		var ctxWorkStatus = document.getElementById('chart-revenue').getContext('2d');
		var optsRevenue = $.extend({}, defaultOptions);
		optsRevenue.scales = {
			xAxes: [{
				gridLines: {
					display: false
				},
				display: false
			}],
			yAxes: [{
				display: false
			}]
		};

		new Chart(ctxWorkStatus, {
			type: 'line',
			data: {
				labels: ["", "", "", "", "", "", "", "",],
				datasets: [
					{
						label: 'Revenue',
						data: [0, 4000, 2000, 4400, 9000, 3500, 1750, 100],
						pointRadius: 0,
						backgroundColor: '#9BE7FD',
						borderWidth: 0,
						borderColor: '#9BE7FD',
						hoverBorderWidth: 0,
						pointBorderWidth: 0,
						pointHoverBorderWidth: 0,
					},
					{
						label: 'Revenue',
						data: [0, 3000, 1000, 4000, 3800, 2000, 1000, 100],
						pointRadius: 0,
						backgroundColor: '#0795F4',
						borderWidth: 0,
						borderColor: '#0795F4',
						hoverBorderWidth: 0,
						pointBorderWidth: 0,
						pointHoverBorderWidth: 0,
					}
				]
			},
			options: optsRevenue
		});
	}

	// Support queries
	var ctxSupportQueries = document.getElementById('chart-support-queries').getContext('2d');

	var optsSupportQueries = $.extend({}, defaultOptions);
	optsSupportQueries.scales = {
		xAxes: [
			{
				display: false,
				stacked: true,
				categoryPercentage: 1.0,
				barPercentage: 0.6
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
			}]
		},
		options: optsSupportQueries
	});

	// Growth revenue
	var optsGrowthRevenue = $.extend({}, defaultOptions);

	var ctxGrowthRevenue = document.getElementById('chart-growth-revenue').getContext('2d');
	var gradientGrowthRevenue = ctxGrowthRevenue.createLinearGradient(0, 10, 0, 160);
	gradientGrowthRevenue.addColorStop(0, color('#6200EE').alpha(1).rgbString());
	gradientGrowthRevenue.addColorStop(1, color('#B819D2').alpha(1).rgbString());

	new Chart(ctxGrowthRevenue, {
		type: 'line',
		data: {
			labels: ['Jan', 'Fab', 'Mar', 'Apr','May','Jun','Jul'],
			datasets: [{
				label: 'Active users',
				data: [0, 600, 590, 2400, 1000, 1900, 4000],
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

})(jQuery);
