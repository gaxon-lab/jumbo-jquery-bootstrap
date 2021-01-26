(function ($) {
	"use strict";

	// Chart widget 2 Starts
	if ($('#site-visitor-chart').length) {
		var widgetAreaChart = new Chartist.Line('#site-visitor-chart', {
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
				showLabel: true,
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

		widgetAreaChart.on('created', function (data) {
			var defs = data.svg.elem('defs');
			defs.elem('linearGradient', {
				id: 'gradient-color1',
				x1: 0,
				y1: 0,
				x2: 0,
				y2: 1
			}).elem('stop', {
				offset: "-74.43%",
				'stop-opacity': '1',
				'stop-color': 'rgba(227, 51, 62, 0.25)'
			}).parent().elem('stop', {
				offset: "93.54%",
				'stop-opacity': '1',
				'stop-color': 'rgba(238, 104, 85, 0)'
			});
		});
	}
	// Chart widget 2 Ends

})(jQuery);
