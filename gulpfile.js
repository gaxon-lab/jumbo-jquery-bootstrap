/* Variable Definition */
var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var sass = require('gulp-sass');
var rtlcss = require('gulp-rtlcss');
var header = require('gulp-header');
var replace = require('gulp-replace');
require('events').EventEmitter.prototype._maxListeners = 300;

/* Tasks */
var cssDir = 'assets/css/';
var scssDir = 'assets/scss/';
var scssLayoutsDir = scssDir + 'layouts/';

var layouts = [
	/*{
		path: 'default',
		themes: [
			{
				srcFileName: 'main-dark',
				destFileName: 'theme-dark',
				rtl: false
			},
			{
				srcFileName: 'main-dark',
				destFileName: 'theme-dark-style',
				rtl: false,
				colors: [
					{primary: '#6200EE', secondary: '#03DAC5'},
					{primary: '#1C61CA', secondary: '#E56B6F'},
					{primary: '#2EC4B6', secondary: '#FF9F1C'},
					{primary: '#EF8354', secondary: '#4F5D75'},
					{primary: '#D71371', secondary: '#5AB77F'},
					{primary: '#072AC8', secondary: '#FFC600'},
					{primary: '#7530FF', secondary: '#369FFF'},
					{primary: '#F26419', secondary: '#F9C80E'},
					{primary: '#2BA444', secondary: '#0A2E36'},
					{primary: '#33658A', secondary: '#55DDE0'},
				]
			},
			{
				srcFileName: 'main-light',
				destFileName: 'theme-light',
				rtl: false
			},
			{
				srcFileName: 'main-light',
				destFileName: 'theme-light-style',
				rtl: false,
				colors: [
					{primary: '#6200EE', secondary: '#03DAC5'},
					{primary: '#1C61CA', secondary: '#E56B6F'},
					{primary: '#2EC4B6', secondary: '#FF9F1C'},
					{primary: '#EF8354', secondary: '#4F5D75'},
					{primary: '#D71371', secondary: '#5AB77F'},
					{primary: '#072AC8', secondary: '#FFC600'},
					{primary: '#7530FF', secondary: '#369FFF'},
					{primary: '#F26419', secondary: '#F9C80E'},
					{primary: '#2BA444', secondary: '#0A2E36'},
					{primary: '#33658A', secondary: '#55DDE0'},
				]
			},
			{
				srcFileName: 'main-semidark',
				destFileName: 'theme-semidark',
				rtl: false
			},
			{
				srcFileName: 'main-semidark',
				destFileName: 'theme-semidark-style',
				rtl: true,
				colors: [
					{primary: '#6200EE', secondary: '#03DAC5'},
					{primary: '#1C61CA', secondary: '#E56B6F'},
					{primary: '#2EC4B6', secondary: '#FF9F1C'},
					{primary: '#EF8354', secondary: '#4F5D75'},
					{primary: '#D71371', secondary: '#5AB77F'},
					{primary: '#072AC8', secondary: '#FFC600'},
					{primary: '#7530FF', secondary: '#369FFF'},
					{primary: '#F26419', secondary: '#F9C80E'},
					{primary: '#2BA444', secondary: '#0A2E36'},
					{primary: '#33658A', secondary: '#55DDE0'},
				]
			}
		]
	},
	{
		path: 'minimal',
		themes: [
			{
				srcFileName: 'main-dark',
				destFileName: 'theme-dark',
				rtl: false
			},
			{
				srcFileName: 'main-dark',
				destFileName: 'theme-dark-style',
				rtl: false,
				colors: [
					{primary: '#6200EE', secondary: '#03DAC5'},
					{primary: '#1C61CA', secondary: '#E56B6F'},
					{primary: '#2EC4B6', secondary: '#FF9F1C'},
					{primary: '#EF8354', secondary: '#4F5D75'},
					{primary: '#D71371', secondary: '#5AB77F'},
					{primary: '#072AC8', secondary: '#FFC600'},
					{primary: '#7530FF', secondary: '#369FFF'},
					{primary: '#F26419', secondary: '#F9C80E'},
					{primary: '#2BA444', secondary: '#0A2E36'},
					{primary: '#33658A', secondary: '#55DDE0'},
				]
			},
			{
				srcFileName: 'main-light',
				destFileName: 'theme-light',
				rtl: false
			},
			{
				srcFileName: 'main-light',
				destFileName: 'theme-light-style',
				rtl: false,
				colors: [
					{primary: '#6200EE', secondary: '#03DAC5'},
					{primary: '#1C61CA', secondary: '#E56B6F'},
					{primary: '#2EC4B6', secondary: '#FF9F1C'},
					{primary: '#EF8354', secondary: '#4F5D75'},
					{primary: '#D71371', secondary: '#5AB77F'},
					{primary: '#072AC8', secondary: '#FFC600'},
					{primary: '#7530FF', secondary: '#369FFF'},
					{primary: '#F26419', secondary: '#F9C80E'},
					{primary: '#2BA444', secondary: '#0A2E36'},
					{primary: '#33658A', secondary: '#55DDE0'},
				]
			},
			{
				srcFileName: 'main-semidark',
				destFileName: 'theme-semidark',
				rtl: false
			},
			{
				srcFileName: 'main-semidark',
				destFileName: 'theme-semidark-style',
				rtl: true,
				colors: [
					{primary: '#6200EE', secondary: '#03DAC5'},
					{primary: '#1C61CA', secondary: '#E56B6F'},
					{primary: '#2EC4B6', secondary: '#FF9F1C'},
					{primary: '#EF8354', secondary: '#4F5D75'},
					{primary: '#D71371', secondary: '#5AB77F'},
					{primary: '#072AC8', secondary: '#FFC600'},
					{primary: '#7530FF', secondary: '#369FFF'},
					{primary: '#F26419', secondary: '#F9C80E'},
					{primary: '#2BA444', secondary: '#0A2E36'},
					{primary: '#33658A', secondary: '#55DDE0'},
				]
			}
		]
	},
	{
		path: 'minimal-no-header',
		themes: [
			{
				srcFileName: 'main-dark',
				destFileName: 'theme-dark',
				rtl: false
			},
			{
				srcFileName: 'main-dark',
				destFileName: 'theme-dark-style',
				rtl: false,
				colors: [
					{primary: '#6200EE', secondary: '#03DAC5'},
					{primary: '#1C61CA', secondary: '#E56B6F'},
					{primary: '#2EC4B6', secondary: '#FF9F1C'},
					{primary: '#EF8354', secondary: '#4F5D75'},
					{primary: '#D71371', secondary: '#5AB77F'},
					{primary: '#072AC8', secondary: '#FFC600'},
					{primary: '#7530FF', secondary: '#369FFF'},
					{primary: '#F26419', secondary: '#F9C80E'},
					{primary: '#2BA444', secondary: '#0A2E36'},
					{primary: '#33658A', secondary: '#55DDE0'},
				]
			},
			{
				srcFileName: 'main-light',
				destFileName: 'theme-light',
				rtl: false
			},
			{
				srcFileName: 'main-light',
				destFileName: 'theme-light-style',
				rtl: false,
				colors: [
					{primary: '#6200EE', secondary: '#03DAC5'},
					{primary: '#1C61CA', secondary: '#E56B6F'},
					{primary: '#2EC4B6', secondary: '#FF9F1C'},
					{primary: '#EF8354', secondary: '#4F5D75'},
					{primary: '#D71371', secondary: '#5AB77F'},
					{primary: '#072AC8', secondary: '#FFC600'},
					{primary: '#7530FF', secondary: '#369FFF'},
					{primary: '#F26419', secondary: '#F9C80E'},
					{primary: '#2BA444', secondary: '#0A2E36'},
					{primary: '#33658A', secondary: '#55DDE0'},
				]
			},
			{
				srcFileName: 'main-semidark',
				destFileName: 'theme-semidark',
				rtl: false
			},
			{
				srcFileName: 'main-semidark',
				destFileName: 'theme-semidark-style',
				rtl: true,
				colors: [
					{primary: '#6200EE', secondary: '#03DAC5'},
					{primary: '#1C61CA', secondary: '#E56B6F'},
					{primary: '#2EC4B6', secondary: '#FF9F1C'},
					{primary: '#EF8354', secondary: '#4F5D75'},
					{primary: '#D71371', secondary: '#5AB77F'},
					{primary: '#072AC8', secondary: '#FFC600'},
					{primary: '#7530FF', secondary: '#369FFF'},
					{primary: '#F26419', secondary: '#F9C80E'},
					{primary: '#2BA444', secondary: '#0A2E36'},
					{primary: '#33658A', secondary: '#55DDE0'},
				]
			}
		]
	},*/
	{
		path: 'modern',
		themes: [
			{
				srcFileName: 'main-dark',
				destFileName: 'theme-dark',
				rtl: false
			},
			{
				srcFileName: 'main-dark',
				destFileName: 'theme-dark-style',
				rtl: false,
				colors: [
					{primary: '#6200EE', secondary: '#03DAC5'},
					{primary: '#1C61CA', secondary: '#E56B6F'},
					{primary: '#2EC4B6', secondary: '#FF9F1C'},
					{primary: '#EF8354', secondary: '#4F5D75'},
					{primary: '#D71371', secondary: '#5AB77F'},
					{primary: '#072AC8', secondary: '#FFC600'},
					{primary: '#7530FF', secondary: '#369FFF'},
					{primary: '#F26419', secondary: '#F9C80E'},
					{primary: '#2BA444', secondary: '#0A2E36'},
					{primary: '#33658A', secondary: '#55DDE0'},
				]
			},
			{
				srcFileName: 'main-light',
				destFileName: 'theme-light',
				rtl: false
			},
			{
				srcFileName: 'main-light',
				destFileName: 'theme-light-style',
				rtl: false,
				colors: [
					{primary: '#6200EE', secondary: '#03DAC5'},
					{primary: '#1C61CA', secondary: '#E56B6F'},
					{primary: '#2EC4B6', secondary: '#FF9F1C'},
					{primary: '#EF8354', secondary: '#4F5D75'},
					{primary: '#D71371', secondary: '#5AB77F'},
					{primary: '#072AC8', secondary: '#FFC600'},
					{primary: '#7530FF', secondary: '#369FFF'},
					{primary: '#F26419', secondary: '#F9C80E'},
					{primary: '#2BA444', secondary: '#0A2E36'},
					{primary: '#33658A', secondary: '#55DDE0'},
				]
			},
			{
				srcFileName: 'main-semidark',
				destFileName: 'theme-semidark',
				rtl: false
			},
			{
				srcFileName: 'main-semidark',
				destFileName: 'theme-semidark-style',
				rtl: false,
				colors: [
					{primary: '#6200EE', secondary: '#03DAC5'},
					{primary: '#1C61CA', secondary: '#E56B6F'},
					{primary: '#2EC4B6', secondary: '#FF9F1C'},
					{primary: '#EF8354', secondary: '#4F5D75'},
					{primary: '#D71371', secondary: '#5AB77F'},
					{primary: '#072AC8', secondary: '#FFC600'},
					{primary: '#7530FF', secondary: '#369FFF'},
					{primary: '#F26419', secondary: '#F9C80E'},
					{primary: '#2BA444', secondary: '#0A2E36'},
					{primary: '#33658A', secondary: '#55DDE0'},
				]
			}
		]
	},
	/*{
		path: 'crm',
		themes: [
			{
				srcFileName: 'main',
				destFileName: 'theme',
				rtl: true
			}
		]
	},
	{
		path: 'back-office',
		themes: [
			{
				srcFileName: 'main',
				destFileName: 'theme',
				rtl: true
			}
		]
	},
	{
		path: 'back-office-mini',
		themes: [
			{
				srcFileName: 'main',
				destFileName: 'theme',
				rtl: true
			}
		]
	},
	{
		path: 'intranet',
		themes: [
			{
				srcFileName: 'main',
				destFileName: 'theme',
				rtl: true
			}
		]
	},
	{
		path: 'saas',
		themes: [
			{
				srcFileName: 'main',
				destFileName: 'theme',
				rtl: true
			}
		]
	},
	{
		path: 'listing',
		themes: [
			{
				srcFileName: 'main',
				destFileName: 'theme',
				rtl: true
			}
		]
	}*/
];
var styleTasks = [];

layouts.forEach(function (layout) {
	var watchLayoutTasks = [];
	layout.themes.forEach(function (theme) {
		if (theme.colors) {
			theme.colors.forEach(function (color, index) {
				var watchTasks = [];

				// Compressed css
				var taskMinCss = 'min-style-' + layout.path + '-' + theme.srcFileName + '-color-' + (index + 2);
				styleTasks.push(taskMinCss);
				watchTasks.push(taskMinCss);
				watchLayoutTasks.push(taskMinCss);

				gulp.task(taskMinCss, function () {
					return gulp.src(scssLayoutsDir + layout.path + '/' + theme.srcFileName + '.scss', {allowEmpty: true})
						.pipe(header('$app-primary: ' + color.primary + ';$app-secondary: ' + color.secondary + ';'))
						.pipe(sass({outputStyle: 'compressed'}))
						.pipe(autoprefixer({
							cascade: false
						}))
						.pipe(concat(theme.destFileName + '-' + (index + 2) + '.min.css'))
						.pipe(gulp.dest(cssDir + layout.path + '/'));
				});

				// Expanded css
				var taskExtCss = 'style-' + layout.path + '-' + theme.srcFileName + '-color-' + (index + 2);
				styleTasks.push(taskExtCss);
				watchTasks.push(taskExtCss);
				watchLayoutTasks.push(taskExtCss);

				gulp.task(taskExtCss, function () {
					return gulp.src(scssLayoutsDir + layout.path + '/' + theme.srcFileName + '.scss', {allowEmpty: true})
						.pipe(header('$app-primary: ' + color.primary + ';$app-secondary: ' + color.secondary + ';'))
						.pipe(sass())
						.pipe(autoprefixer({
							cascade: false
						}))
						.pipe(concat(theme.destFileName + '-' + (index + 2) + '.css'))
						.pipe(gulp.dest(cssDir + layout.path + '/'));
				});

				if (theme.rtl) {
					// Compressed rtl css
					var taskMinRtlCss = 'min-style-rtl-' + layout.path + '-' + theme.srcFileName + '-color-' + (index + 2);
					styleTasks.push(taskMinRtlCss);
					watchTasks.push(taskMinRtlCss);
					watchLayoutTasks.push(taskMinRtlCss);

					gulp.task(taskMinRtlCss, function () {
						return gulp.src(scssLayoutsDir + layout.path + '/' + theme.srcFileName + '.scss', {allowEmpty: true})
							.pipe(header('$app-primary: ' + color.primary + ';$app-secondary: ' + color.secondary + ';'))
							.pipe(sass({outputStyle: 'compressed'}))
							.pipe(rtlcss())
							.pipe(autoprefixer({
								cascade: false
							}))
							.pipe(concat(theme.destFileName + '-' + (index + 2) + '-rtl.min.css'))
							.pipe(gulp.dest(cssDir + layout.path + '/'));
					});

					// Expanded rtl css
					var taskExtRtlCss = 'style-rtl-' + layout.path + '-' + theme.srcFileName + '-color-' + (index + 2);
					styleTasks.push(taskExtRtlCss);
					watchTasks.push(taskExtRtlCss);
					watchLayoutTasks.push(taskExtRtlCss);

					gulp.task(taskExtRtlCss, function () {
						return gulp.src(scssLayoutsDir + layout.path + '/' + theme.srcFileName + '.scss', {allowEmpty: true})
							.pipe(header('$app-primary: ' + color.primary + ';$app-secondary: ' + color.secondary + ';'))
							.pipe(sass())
							.pipe(rtlcss())
							.pipe(autoprefixer({
								cascade: false
							}))
							.pipe(concat(theme.destFileName + '-' + (index + 2) + '-rtl.css'))
							.pipe(gulp.dest(cssDir + layout.path + '/'));
					});
				}

				// watch task
				gulp.task('watch:' + layout.path + '-color-' + (index + 2), function () {
					return gulp.watch([scssDir], gulp.series(watchTasks));
				});
			});
		} else {
			var watchTasks = [];

			// Compressed css
			var taskMinCss = 'min-style-' + layout.path + '-' + theme.srcFileName;
			styleTasks.push(taskMinCss);
			watchTasks.push(taskMinCss);
			watchLayoutTasks.push(taskMinCss);

			gulp.task(taskMinCss, function () {
				return gulp.src(scssLayoutsDir + layout.path + '/' + theme.srcFileName + '.scss', {allowEmpty: true})
					.pipe(sass({outputStyle: 'compressed'}))
					.pipe(autoprefixer({
						cascade: false
					}))
					.pipe(concat(theme.destFileName + '.min.css'))
					.pipe(gulp.dest(cssDir + layout.path + '/'));
			});

			// Expanded css
			var taskExtCss = 'style-' + layout.path + '-' + theme.srcFileName;
			styleTasks.push(taskExtCss);
			watchTasks.push(taskExtCss);
			watchLayoutTasks.push(taskExtCss);

			gulp.task(taskExtCss, function () {
				return gulp.src(scssLayoutsDir + layout.path + '/' + theme.srcFileName + '.scss', {allowEmpty: true})
					.pipe(sass())
					.pipe(autoprefixer({
						cascade: false
					}))
					.pipe(concat(theme.destFileName + '.css'))
					.pipe(gulp.dest(cssDir + layout.path + '/'));
			});

			// compile RTL css
			if (theme.rtl) {

				// Compressed RTL css
				var taskMinRtlCss = 'min-style-rtl-' + layout.path + '-' + theme.srcFileName;
				styleTasks.push(taskMinRtlCss);
				watchTasks.push(taskMinRtlCss);
				watchLayoutTasks.push(taskMinRtlCss);

				gulp.task(taskMinRtlCss, function () {
					return gulp.src(scssLayoutsDir + layout.path + '/' + theme.srcFileName + '.scss', {allowEmpty: true})
						.pipe(sass({outputStyle: 'compressed'}))
						.pipe(rtlcss())
						.pipe(autoprefixer({
							cascade: false
						}))
						.pipe(concat(theme.destFileName + '-rtl.min.css'))
						.pipe(gulp.dest(cssDir + layout.path + '/'));
				});

				// Expanded RTL css
				var taskExtRtlCss = 'style-rtl-' + layout.path + '-' + theme.srcFileName;
				styleTasks.push(taskExtRtlCss);
				watchTasks.push(taskExtRtlCss);
				watchLayoutTasks.push(taskExtRtlCss);

				gulp.task(taskExtRtlCss, function () {
					return gulp.src(scssLayoutsDir + layout.path + '/' + theme.srcFileName + '.scss', {allowEmpty: true})
						.pipe(sass())
						.pipe(rtlcss())
						.pipe(autoprefixer({
							cascade: false
						}))
						.pipe(concat(theme.destFileName + '-rtl.css'))
						.pipe(gulp.dest(cssDir + layout.path + '/'));
				});
			}

			// watch task
			gulp.task('watch:' + layout.path + '-' + theme.srcFileName, function () {
				return gulp.watch([scssDir], gulp.series(watchTasks));
			});
		}
	});

	// watch task
	gulp.task('watch:' + layout.path, function () {
		return gulp.watch([scssDir], gulp.series(watchTasks));
	});
});

var versions = ['production', 'production-rtl', 'classic', 'classic-rtl'];
var versionTasks = [];
versions.forEach(function (version) {
	if (version != 'classic' && version != 'classic-rtl') {
		var taskScss = version + '-scss';
		versionTasks.push(taskScss);

		gulp.task(taskScss, function (cb) {
			var stream = gulp.src(['assets/scss/**/*.scss'])
				.pipe(replace('../../images/bg-images', 'https://via.placeholder.com'))
				.pipe(replace('/bg-image.jpg', '/640x420'))
				.pipe(replace('/bg-image-1.jpg', '/640x420'))
				.pipe(replace('/bg-image-2.jpg', '/640x420'))
				.pipe(replace('/bg-image-3.jpg', '/640x420'))
				.pipe(replace('/bg-image-4.jpg', '/640x420'))
				.pipe(replace('/bg-image-5.jpg', '/640x420'))
				.pipe(replace('/bg-image-6.jpg', '/626x365'))
				.pipe(replace('/login-image.jpg', '/640x962'))
				.pipe(gulp.dest(version + '/assets/scss'));
			cb();
		});
	}

	var taskCss = version + '-css';
	versionTasks.push(taskCss);

	gulp.task(taskCss, function (cb) {
		var stream = gulp.src(['assets/css/**/*.css'])
			.pipe(replace('../../images/bg-images/bg-image.jpg', 'https://via.placeholder.com/640x420'))
			.pipe(replace('../../images/bg-images/bg-image-1.jpg', 'https://via.placeholder.com/640x420'))
			.pipe(replace('../../images/bg-images/bg-image-2.jpg', 'https://via.placeholder.com/640x420'))
			.pipe(replace('../../images/bg-images/bg-image-3.jpg', 'https://via.placeholder.com/640x420'))
			.pipe(replace('../../images/bg-images/bg-image-4.jpg', 'https://via.placeholder.com/640x420'))
			.pipe(replace('../../images/bg-images/bg-image-5.jpg', 'https://via.placeholder.com/640x420'))
			.pipe(replace('../../images/bg-images/bg-image-6.jpg', 'https://via.placeholder.com/626x365'))
			.pipe(replace('../../images/bg-images/login-image.jpg', 'https://via.placeholder.com/640x962'))
			.pipe(gulp.dest(version + '/assets/css'));
		cb();
	});


	var taskJs = version + '-js';
	versionTasks.push(taskJs);

	gulp.task(taskJs, function (cb) {
		var stream = gulp.src(['assets/js/**/*.js'])
			.pipe(replace('assets/images/logo.png', 'https://via.placeholder.com/334x119'))
			.pipe(replace('assets/images/logo-white.png', 'https://via.placeholder.com/334x119'))
			.pipe(replace('assets/images/logo-symbol.png', 'https://via.placeholder.com/133x119'))
			.pipe(gulp.dest(version + '/assets/js'));
		cb();
	});
});


gulp.task('default', gulp.series(styleTasks));
gulp.task('production', gulp.series(versionTasks));
