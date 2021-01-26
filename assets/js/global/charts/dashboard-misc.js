(function ($) {
	"use strict";

	// Chart widget 1
	if ($('#user-statistics-chart').length) {
		var ctLineChart = new Chartist.Line('#user-statistics-chart', {
			labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
			series: [
				[300, 900, 1400, 1500, 1100, 300, 330, 150, 450, 500, 350, 250],
				[500, 700, 900, 1000, 945, 1100, 1250, 1400, 1120, 1030, 1150, 1500]
			]
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
			chartPadding: {
				top: 10,
				bottom:0,
				left:0,
				right:0,
			},
		});

		ctLineChart.on('created', function (data) {
			var defs = data.svg.elem('defs');
			defs.elem('linearGradient', {
				id: 'gradient-color1',
				x1: 0,
				y1: 0,
				x2: 0,
				y2: 1
			}).elem('stop', {
				offset: 0,
				'stop-opacity': '1',
				'stop-color': '#E0E0E0'
			}).parent().elem('stop', {
				offset: 1,
				'stop-opacity': '1',
				'stop-color': '#E0E0E0'
			});

			defs.elem('linearGradient', {
				id: 'gradient-color2',
				x1: 0,
				y1: 0,
				x2: 1,
				y2: 0
			}).elem('stop', {
				offset: '6.03%',
				'stop-opacity': '1',
				'stop-color': '#00C2B7'
			}).parent().elem('stop', {
				offset: '100%',
				'stop-opacity': '1',
				'stop-color': '#3D39FB'
			});
		});
	}
	// Chart widget 1 Ends

	// Chart widget 2
	if ($('#order-chart').length) {
		var widgetAreaChart1 = new Chartist.Line('#order-chart', {
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
				tension: 1
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
				id: 'gradient-primary-secondary',
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
	// Chart widget 2 Ends

	// AmCharts
	AmCharts.themes.light.AreasSettings.rollOverColor = "#fff";
	AmCharts.themes.light.AreasSettings.rollOverOutlineColor = "#777";

	var map = AmCharts.makeChart("overview-map", {
		"type": "map",
		"theme": "light",
		"projection": "miller",
		"imagesSettings": {
			"rollOverColor": "#089282",
			"rollOverScale": 3,
			"selectedScale": 3,
			"selectedColor": "#089282",
			"color": "#13564e"
		},
		"areasSettings": {
			"unlistedAreasColor": "#15A892"
		},
		"dataProvider": {
			"map": "continentsLow",
			"areas": [{
				"id": "africa",
				"title": "Africa",
				"pattern": {
					"url": "https://www.amcharts.com/lib/3/patterns/black/pattern2.png",
					"width": 3,
					"height": 3
				}
			}, {
				"id": "asia",
				"title": "Asia",
				"pattern": {
					"url": "https://www.amcharts.com/lib/3/patterns/black/pattern2.png",
					"width": 3,
					"height": 3
				}
			}, {
				"id": "australia",
				"title": "Australia",
				"pattern": {
					"url": "https://www.amcharts.com/lib/3/patterns/black/pattern2.png",
					"width": 3,
					"height": 3
				}
			}, {
				"id": "europe",
				"title": "Europe",
				"pattern": {
					"url": "https://www.amcharts.com/lib/3/patterns/black/pattern2.png",
					"width": 3,
					"height": 3
				}
			}, {
				"id": "north_america",
				"title": "North America",
				"pattern": {
					"url": "https://www.amcharts.com/lib/3/patterns/black/pattern2.png",
					"width": 3,
					"height": 3
				}
			}, {
				"id": "south_america",
				"title": "South America",
				"pattern": {
					"url": "https://www.amcharts.com/lib/3/patterns/black/pattern2.png",
					"width": 3,
					"height": 3
				}
			}],
			"images": [{
				"zoomLevel": 5,
				"scale": 0.5,
				"title": "Moscow",
				"latitude": 55.7558,
				"longitude": 37.6176,
				"dotColor": "yellow",
				"pulseColor": "yellow"
			}, {
				"zoomLevel": 5,
				"scale": 0.5,
				"title": "Madrid",
				"latitude": 40.4167,
				"longitude": -3.7033,
				"dotColor": "success",
				"pulseColor": "success"
			}, {
				"zoomLevel": 5,
				"scale": 0.5,
				"title": "London",
				"latitude": 51.5002,
				"longitude": -0.1262,
				"dotColor": "yellow",
				"pulseColor": "yellow"
			}, {
				"zoomLevel": 5,
				"scale": 0.5,
				"title": "Peking",
				"latitude": 39.9056,
				"longitude": 116.3958,
				"dotColor": "danger",
				"pulseColor": "danger"
			}, {
				"zoomLevel": 5,
				"scale": 0.5,
				"title": "New Delhi",
				"latitude": 28.6353,
				"longitude": 77.2250,
				"dotColor": "info",
				"pulseColor": "info"
			}, {
				"zoomLevel": 5,
				"scale": 0.5,
				"title": "Tokyo",
				"latitude": 35.6785,
				"longitude": 139.6823,
				"dotColor": "yellow",
				"pulseColor": "yellow"
			}, {
				"zoomLevel": 5,
				"scale": 0.5,
				"title": "Brasilia",
				"latitude": -15.7801,
				"longitude": -47.9292,
				"dotColor": "danger",
				"pulseColor": "danger"
			}, {
				"zoomLevel": 5,
				"scale": 0.5,
				"title": "Washington",
				"latitude": 38.8921,
				"longitude": -77.0241,
				"dotColor": "",
				"pulseColor": "primary"
			}, {
				"zoomLevel": 5,
				"scale": 0.5,
				"title": "Kinshasa",
				"latitude": -4.3369,
				"longitude": 15.3271,
				"dotColor": "info",
				"pulseColor": "info"
			}, {
				"zoomLevel": 5,
				"scale": 0.5,
				"title": "Cairo",
				"latitude": 30.0571,
				"longitude": 31.2272,
				"dotColor": "yellow",
				"pulseColor": "yellow"
			}, {
				"zoomLevel": 5,
				"scale": 0.5,
				"title": "Pretoria",
				"latitude": -25.7463,
				"longitude": 28.1876,
				"dotColor": "success",
				"pulseColor": "success"
			}]
		},
		"zoomControl": {
			"panControlEnabled": false,
			"zoomControlEnabled": false,
			"homeButtonEnabled": true
		}
	});

	map.addListener("init", function (event) {
		// get map object
		var map = event.chart;
		$(map.amLink).addClass('amcharts-link');
	});

	// add events to recalculate map position when the map is moved or zoomed
	map.addListener("positionChanged", updateCustomMarkers);

	// this function will take current images on the map and create HTML elements for them
	function updateCustomMarkers(event) {
		// get map object
		var map = event.chart;

		// go through all of the images
		for (var x in map.dataProvider.images) {
			// get MapImage object
			var image = map.dataProvider.images[x];

			// check if it has corresponding HTML element
			if ('undefined' == typeof image.externalElement)
				image.externalElement = createCustomMarker(image);

			// reposition the element accoridng to coordinates
			var xy = map.coordinatesToStageXY(image.longitude, image.latitude);
			image.externalElement.style.top = xy.y + 'px';
			image.externalElement.style.left = xy.x + 'px';
		}
	}

	// this function creates and returns a new marker element
	function createCustomMarker(image) {
		// create holder
		var holder = document.createElement('div');
		holder.className = 'map-marker';
		holder.title = image.title;
		holder.style.position = 'absolute';

		// maybe add a link to it?
		if (undefined != image.url) {
			holder.onclick = function () {
				window.location.href = image.url;
			};
			holder.className += ' map-clickable';
		}

		// create dot
		var dot = document.createElement('div');
		var dotClass = (image.dotColor) ? ' bg-' + image.dotColor : '';
		var pulseClass = (image.pulseColor) ? ' pulse-' + image.pulseColor : '';
		dot.className = 'dot-shape dot-shape-lg' + dotClass + pulseClass;
		holder.appendChild(dot);

		// append the marker to the map container
		image.chart.chartDiv.appendChild(holder);

		return holder;
	}

	// map ends here
})(jQuery);
