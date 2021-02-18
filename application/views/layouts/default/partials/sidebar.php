<?php
$dashboards = array(
	array(
		'title' => 'Crypto',
		'type' => 'item',
		'icon' => 'crypto',
		'url' => site_url()
	),
	array(
		'title' => 'Listing',
		'type' => 'item',
		'icon' => 'crypto',
		'url' => site_url('main/dashboard/listing')
	),
	array(
		'title' => 'Crm',
		'type' => 'item',
		'icon' => 'crypto',
		'url' => site_url('main/dashboard/crm')
	),
	array(
		'title' => 'Intranet',
		'type' => 'item',
		'icon' => 'crypto',
		'url' => site_url('main/dashboard/intranet')
	),
	array(
		'title' => 'ECommerce',
		'type' => 'item',
		'icon' => 'crypto',
		'url' => site_url('main/dashboard/ecommerce')
	),
	array(
		'title' => 'News',
		'type' => 'item',
		'icon' => 'crypto',
		'url' => site_url('main/dashboard/news')
	),
	array(
		'title' => 'Misc',
		'type' => 'item',
		'icon' => 'crypto',
		'url' => site_url('main/dashboard/misc')
	),
);

$widgets = array(
	array(
		'title' => 'Classic',
		'type' => 'item',
		'icon' => 'crypto',
		'url' => site_url('main/widget/classic')
	),
	array(
		'title' => 'Modern',
		'type' => 'item',
		'icon' => 'crypto',
		'url' => site_url('main/widget/modern')
	)
);

$menus = array(
	array(
		'title' => 'Dashboards',
		'icon' => '',
		'type' => 'section',
		'children' => $dashboards
	),
	array(
		'title' => 'Components',
		'icon' => '',
		'type' => 'section',
		'children' => array(
			array(
				'title' => 'Widgets',
				'icon' => '',
				'type' => 'collapse',
				'children' => $widgets
			)
		)
	)
)
?>
<!-- Sidebar -->
<aside id="main-sidebar" class="dt-sidebar">
	<!-- Sidebar Header -->
	<div class="dt-sidebar__header">

		<div class="dropdown">
			<!-- Dropdown Link -->
			<a href="#" class="dropdown-toggle no-arrow d-block"
				 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="dt-avatar-wrapper flex-column align-items-start">
					<img class="dt-avatar mb-7" src="<?php echo assets_url('images/user-avatar/noah-owens.jpg'); ?>"
							 alt="noah-owens">
					<span class="dt-avatar-info w-100">
						<span class="dt-avatar-name text-primary mb-2">Robert Johnson </span>
						<span class="d-inline-flex align-items-center text-secondary">
							<span>robert.johnson@gmail.com</span>
							<i class="material-icons ml-auto">arrow_drop_down</i>
						</span>
					</span>
				</span>
			</a>
			<!-- /dropdown link -->

			<!-- Dropdown Option -->
			<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="javascript:void(0)">
					<i class="material-icons">person</i>Profile</a>
				<a class="dropdown-item" href="javascript:void(0)">
					<i class="material-icons">settings</i>Setting</a>
				<a class="dropdown-item" href="<?php echo site_url('pages/login'); ?>">
					<i class="material-icons">logout</i>Logout</a>
			</div>
			<!-- /dropdown option -->

		</div>

	</div>
	<!-- /sidebar header -->
	<!-- Sidebar Container -->
	<div class="dt-sidebar__container">

		<?php echo verticalNavigation($menus);?>

		<!-- Sidebar Navigation -->
		<ul class="dt-side-nav">

			<!-- Menu Header -->
			<li class="dt-side-nav__item dt-side-nav__header">
				<span class="dt-side-nav__text">Dashboards</span>
			</li>
			<!-- /menu header -->

			<!-- Menu Item -->
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url(); ?>" class="dt-side-nav__link">
					<i class="icon icon-crypto icon-fw"></i>
					<span class="dt-side-nav__text">Crypto</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('main/dashboard/listing'); ?>" class="dt-side-nav__link">
					<i class="icon icon-listing-dbrd icon-fw"></i>
					<span class="dt-side-nav__text">Listing</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('main/dashboard/crm'); ?>" class="dt-side-nav__link">
					<i class="icon icon-crm icon-fw"></i>
					<span class="dt-side-nav__text">Crm</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('main/dashboard/intranet'); ?>" class="dt-side-nav__link">
					<i class="icon icon-chart-radar icon-fw"></i>
					<span class="dt-side-nav__text">Intranet</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('main/dashboard/ecommerce'); ?>" class="dt-side-nav__link">
					<i class="icon icon-shopping-cart icon-fw"></i>
					<span class="dt-side-nav__text">eCommerce</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('main/dashboard/news'); ?>" class="dt-side-nav__link">
					<i class="icon icon-news icon-fw"></i>
					<span class="dt-side-nav__text">News</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('main/dashboard/misc'); ?>" class="dt-side-nav__link">
					<i class="icon icon-projects icon-fw"></i>
					<span class="dt-side-nav__text">Misc</span>
				</a>
			</li>
			<!-- /menu item -->

			<!-- Menu Header -->
			<li class="dt-side-nav__item dt-side-nav__header">
				<span class="dt-side-nav__text">Components</span>
			</li>
			<!-- /menu header -->

			<!-- Menu Item -->
			<li class="dt-side-nav__item">
				<a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow">
					<i class="icon icon-basic-components icon-fw"></i>
					<span class="dt-side-nav__text">Basic Components</span>
				</a>

				<!-- Sub-menu -->
				<ul class="dt-side-nav__sub-menu">
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/alerts'); ?>" class="dt-side-nav__link">
							<i class="icon icon-alert icon-fw"></i>
							<span class="dt-side-nav__text">Alerts</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/badges'); ?>" class="dt-side-nav__link">
							<i class="icon icon-badges icon-fw"></i>
							<span class="dt-side-nav__text">Badges</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/breadcrumbs'); ?>" class="dt-side-nav__link">
							<i class="icon icon-breadcrumbs icon-fw"></i>
							<span class="dt-side-nav__text">Breadcrumbs</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/buttons'); ?>" class="dt-side-nav__link">
							<i class="icon icon-button icon-fw"></i>
							<span class="dt-side-nav__text">Button</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/button-group'); ?>" class="dt-side-nav__link">
							<i class="icon icon-button-group icon-fw"></i>
							<span class="dt-side-nav__text">Button Group</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/card'); ?>" class="dt-side-nav__link">
							<i class="icon icon-card icon-fw"></i>
							<span class="dt-side-nav__text">Card</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/card-group'); ?>" class="dt-side-nav__link">
							<i class="icon icon-card-group icon-fw"></i>
							<span class="dt-side-nav__text">Card Group</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/carousel'); ?>" class="dt-side-nav__link">
							<i class="icon icon-carousel icon-fw"></i>
							<span class="dt-side-nav__text">Carousel</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/collapse'); ?>" class="dt-side-nav__link">
							<i class="icon icon-collapse icon-fw"></i>
							<span class="dt-side-nav__text">Collapse</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/dropdown'); ?>" class="dt-side-nav__link">
							<i class="icon icon-dropdown icon-fw"></i>
							<span class="dt-side-nav__text">Dropdown</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/input-group'); ?>" class="dt-side-nav__link">
							<i class="icon icon-input-group icon-fw"></i>
							<span class="dt-side-nav__text">Input Group</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/jumbotron'); ?>" class="dt-side-nav__link">
							<i class="icon icon-jumbotron icon-fw"></i>
							<span class="dt-side-nav__text">Jumbotron</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/list-group'); ?>" class="dt-side-nav__link">
							<i class="icon icon-list-group icon-fw"></i>
							<span class="dt-side-nav__text">List Group</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/modal'); ?>" class="dt-side-nav__link">
							<i class="icon icon-modal icon-fw"></i>
							<span class="dt-side-nav__text">Modal</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/navbar'); ?>" class="dt-side-nav__link">
							<i class="icon icon-navbar icon-fw"></i>
							<span class="dt-side-nav__text">Navbar</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/navs'); ?>" class="dt-side-nav__link">
							<i class="icon icon-navs-and-tabs icon-fw"></i>
							<span class="dt-side-nav__text">Navs &amp; Tabs</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/pagination'); ?>" class="dt-side-nav__link">
							<i class="icon icon-pagination icon-fw"></i>
							<span class="dt-side-nav__text">Pagination</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/popovers'); ?>" class="dt-side-nav__link">
							<i class="icon icon-popovers icon-fw"></i>
							<span class="dt-side-nav__text">Popovers</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/progress'); ?>" class="dt-side-nav__link">
							<i class="icon icon-progress-bar icon-fw"></i>
							<span class="dt-side-nav__text">Progress Bar</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/scrollspy'); ?>" class="dt-side-nav__link">
							<i class="icon icon-scrollspy icon-fw"></i>
							<span class="dt-side-nav__text">Scrollspy</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/tooltip'); ?>" class="dt-side-nav__link">
							<i class="icon icon-tooltip icon-fw"></i>
							<span class="dt-side-nav__text">Tooltip</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/basic/typography'); ?>" class="dt-side-nav__link">
							<i class="icon icon-typography icon-fw"></i>
							<span class="dt-side-nav__text">Typography</span>
						</a>
					</li>
				</ul>
				<!-- /sub-menu -->
			</li>
			<li class="dt-side-nav__item">
				<a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Widgets">
					<i class="icon icon-widgets icon-fw"></i>
					<span class="dt-side-nav__text">Widgets</span>
				</a>

				<!-- Sub-menu -->
				<ul class="dt-side-nav__sub-menu">
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('main/widget/classic'); ?>" class="dt-side-nav__link"
							 title="Classic">
							<i class="icon icon-components icon-fw"></i>
							<span class="dt-side-nav__text">Classic</span>
						</a>
					</li>


					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('main/widget/modern'); ?>" class="dt-side-nav__link"
							 title="Modern">
							<i class="icon icon-datatable icon-fw"></i>
							<span class="dt-side-nav__text">Modern</span>
						</a>
					</li>
				</ul>
				<!-- /sub-menu -->
			</li>
			<li class="dt-side-nav__item">
				<a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Metrics">
					<i class="icon icon-metrics icon-fw"></i>
					<span class="dt-side-nav__text">Metrics</span>
				</a>

				<!-- Sub-menu -->
				<ul class="dt-side-nav__sub-menu">
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('main/metrics/classic'); ?>" class="dt-side-nav__link"
							 title="Classic">
							<i class="icon icon-components icon-fw"></i>
							<span class="dt-side-nav__text">Classic</span>
						</a>
					</li>


					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('main/metrics/modern'); ?>" class="dt-side-nav__link"
							 title="Modern">
							<i class="icon icon-datatable icon-fw"></i>
							<span class="dt-side-nav__text">Modern</span>
						</a>
					</li>
				</ul>
				<!-- /sub-menu -->
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('pages/layouts'); ?>" class="dt-side-nav__link" title="Layouts">
					<i class="icon icon-layout icon-fw"></i>
					<span class="dt-side-nav__text">Layouts</span>
				</a>
			</li>
			<!-- /menu item -->

			<!-- Menu Header -->
			<li class="dt-side-nav__item dt-side-nav__header">
				<span class="dt-side-nav__text">Apps</span>
			</li>
			<!-- /menu header -->

			<!-- Menu Item -->
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('apps/task-manager'); ?>" class="dt-side-nav__link">
					<i class="icon icon-task-manager icon-fw"></i>
					<span class="dt-side-nav__text">Task Manager</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('apps/mail'); ?>" class="dt-side-nav__link">
					<i class="icon icon-mail icon-fw"></i>
					<span class="dt-side-nav__text">Mail Application</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('apps/contact'); ?>" class="dt-side-nav__link">
					<i class="icon icon-contacts-app icon-fw"></i>
					<span class="dt-side-nav__text">Contacts App</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('apps/chat'); ?>" class="dt-side-nav__link">
					<i class="icon icon-chat-app2 icon-fw"></i>
					<span class="dt-side-nav__text">Chat App</span>
				</a>
			</li>
			<!-- /menu item -->

			<!-- Menu Header -->
			<li class="dt-side-nav__item dt-side-nav__header">
				<span class="dt-side-nav__text">Social Apps</span>
			</li>
			<!-- /menu header -->

			<!-- Menu Item -->
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('pages/wall'); ?>" class="dt-side-nav__link"> <i
						class="icon icon-wall icon-fw"></i>
					<span class="dt-side-nav__text">Wall Page</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('pages/profile'); ?>" class="dt-side-nav__link">
					<i class="icon icon-profilepage icon-fw"></i>
					<span class="dt-side-nav__text">Profile Page</span>
				</a>
			</li>
			<!-- /menu item -->

			<!-- Menu Header -->
			<li class="dt-side-nav__item dt-side-nav__header">
				<span class="dt-side-nav__text">Forms</span>
			</li>
			<!-- /menu header -->

			<!-- Menu Item -->
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('forms/basic'); ?>" class="dt-side-nav__link">
					<i class="icon icon-forms-basic icon-fw"></i>
					<span class="dt-side-nav__text">Basic Form</span>
				</a>
			</li>
			<!-- /menu item -->

			<!-- Menu Header -->
			<li class="dt-side-nav__item dt-side-nav__header">
				<span class="dt-side-nav__text">Extensions</span>
			</li>
			<!-- /menu header -->

			<!-- Menu Item -->
			<li class="dt-side-nav__item">
				<a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow">
					<i class="icon icon-editors icon-fw"></i>
					<span class="dt-side-nav__text">Editors</span>
				</a>

				<!-- Sub-menu -->
				<ul class="dt-side-nav__sub-menu">
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('extra-components/editors/summernote'); ?>"
							 class="dt-side-nav__link">
							<i class="icon icon-editor-wysiwyg icon-fw"></i>
							<span class="dt-side-nav__text">Summernote</span> </a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('extra-components/editors/code-editor'); ?>"
							 class="dt-side-nav__link">
							<i class="icon icon-editor-code icon-fw"></i>
							<span class="dt-side-nav__text">Code Editor</span> </a>
					</li>
				</ul>
				<!-- /sub-menu -->
			</li>
			<li class="dt-side-nav__item">
				<a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow">
					<i class="icon icon-pickers icon-fw"></i>
					<span class="dt-side-nav__text">Pickers</span>
				</a>

				<!-- Sub-menu -->
				<ul class="dt-side-nav__sub-menu">
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('extra-components/pickers/datetime-picker'); ?>"
							 class="dt-side-nav__link">
							<i class="icon icon-date-time-picker icon-fw"></i>
							<span class="dt-side-nav__text">Date &amp; Time Picker</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('extra-components/pickers/color-picker'); ?>"
							 class="dt-side-nav__link">
							<i class="icon icon-color-picker icon-fw"></i>
							<span class="dt-side-nav__text">Color Picker</span>
						</a>
					</li>
				</ul>
				<!-- /sub-menu -->
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('extra-components/sweet-alerts'); ?>" class="dt-side-nav__link">
					<i class="icon icon-sweet-alert icon-fw"></i>
					<span class="dt-side-nav__text">Sweet Alerts</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('extra-components/notification-alerts'); ?>" class="dt-side-nav__link">
					<i class="icon icon-notification-o icon-fw"></i>
					<span class="dt-side-nav__text">Notifications</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('extra-components/dropzone'); ?>" class="dt-side-nav__link">
					<i class="icon icon-file-upload icon-fw"></i>
					<span class="dt-side-nav__text">Dropzone</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('extra-components/drag-drop'); ?>" class="dt-side-nav__link">
					<i class="icon icon-drag-and-drop icon-fw"></i>
					<span class="dt-side-nav__text">Drag &amp; Drop</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow">
					<i class="icon icon-tables icon-fw"></i>
					<span class="dt-side-nav__text">Tables</span>
				</a>

				<!-- Sub-menu -->
				<ul class="dt-side-nav__sub-menu">
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/tables/basic-table'); ?>" class="dt-side-nav__link">
							<i class="icon icon-tables icon-fw"></i>
							<span class="dt-side-nav__text">Basic Table</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('components/tables/data-table'); ?>" class="dt-side-nav__link">
							<i class="icon icon-datatable icon-fw"></i>
							<span class="dt-side-nav__text">Data Table</span>
						</a>
					</li>
				</ul>
				<!-- /sub-menu -->
			</li>
			<!-- /menu item -->

			<!-- Menu Header -->
			<li class="dt-side-nav__item dt-side-nav__header">
				<span class="dt-side-nav__text">Visualization</span>
			</li>
			<!-- /menu header -->

			<!-- Menu Item -->
			<li class="dt-side-nav__item">
				<a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow">
					<i class="icon icon-charts icon-fw"></i>
					<span class="dt-side-nav__text">Charts</span>
				</a>

				<ul class="dt-side-nav__sub-menu">
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('data-visualization/charts/chartjs'); ?>"
							 class="dt-side-nav__link">
							<i class="icon icon-charts icon-fw"></i>
							<span class="dt-side-nav__text">ChartJs</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('data-visualization/charts/amcharts'); ?>"
							 class="dt-side-nav__link">
							<i class="icon icon-amchart icon-fw"></i>
							<span class="dt-side-nav__text">Am Charts</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="dt-side-nav__item">
				<a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow">
					<i class="icon icon-maps icon-fw"></i>
					<span class="dt-side-nav__text">Maps</span>
				</a>

				<!-- Sub-menu -->
				<ul class="dt-side-nav__sub-menu">
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('data-visualization/maps/basic'); ?>" class="dt-side-nav__link">
							<i class="icon icon-maps icon-fw"></i>
							<span class="dt-side-nav__text">Simple map</span>
						</a>
					</li>
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('data-visualization/maps/events'); ?>" class="dt-side-nav__link">
							<i class="icon icon-maps icon-fw"></i>
							<span class="dt-side-nav__text">Events Map</span>
						</a>
					</li>
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('data-visualization/maps/markers'); ?>" class="dt-side-nav__link">
							<i class="icon icon-maps icon-fw"></i>
							<span class="dt-side-nav__text">Markers Maps</span>
						</a>
					</li>
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('data-visualization/maps/geolocation'); ?>"
							 class="dt-side-nav__link">
							<i class="icon icon-maps icon-fw"></i>
							<span class="dt-side-nav__text">Geo Location Map</span>
						</a>
					</li>
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('data-visualization/maps/geocoding'); ?>"
							 class="dt-side-nav__link">
							<i class="icon icon-maps icon-fw"></i>
							<span class="dt-side-nav__text">Geo Coding Map</span>
						</a>
					</li>
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('data-visualization/maps/overlay'); ?>" class="dt-side-nav__link">
							<i class="icon icon-maps icon-fw"></i>
							<span class="dt-side-nav__text">Overlay</span>
						</a>
					</li>
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('data-visualization/maps/overlay-polylines'); ?>"
							 class="dt-side-nav__link">
							<i class="icon icon-maps icon-fw"></i>
							<span class="dt-side-nav__text">Overlay Polylines</span>
						</a>
					</li>
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('data-visualization/maps/overlay-polygons'); ?>"
							 class="dt-side-nav__link">
							<i class="icon icon-maps icon-fw"></i>
							<span class="dt-side-nav__text">Overlay Polygons</span>
						</a>
					</li>
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('data-visualization/maps/geo-polygons'); ?>"
							 class="dt-side-nav__link">
							<i class="icon icon-maps icon-fw"></i>
							<span class="dt-side-nav__text">GeoJSON Polygons</span>
						</a>
					</li>
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('data-visualization/maps/route'); ?>" class="dt-side-nav__link">
							<i class="icon icon-maps icon-fw"></i>
							<span class="dt-side-nav__text">Map Routes</span>
						</a>
					</li>
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('data-visualization/maps/advance-route'); ?>"
							 class="dt-side-nav__link">
							<i class="icon icon-maps icon-fw"></i>
							<span class="dt-side-nav__text">Advance Routes</span>
						</a>
					</li>
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('data-visualization/maps/data-maps'); ?>"
							 class="dt-side-nav__link">
							<i class="icon icon-maps icon-fw"></i>
							<span class="dt-side-nav__text">Data Maps</span>
						</a>
					</li>
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('data-visualization/maps/am-maps'); ?>" class="dt-side-nav__link">
							<i class="icon icon-maps icon-fw"></i>
							<span class="dt-side-nav__text">Am Maps</span>
						</a>
					</li>
				</ul>
				<!-- /sub-menu -->
			</li>
			<!-- /menu item -->

			<!-- Menu Header -->
			<li class="dt-side-nav__item dt-side-nav__header">
				<span class="dt-side-nav__text">Extra Pages</span>
			</li>
			<!-- /menu header -->

			<!-- Menu Item -->
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('pages/login'); ?>" class="dt-side-nav__link"> <i
						class="icon icon-login-page icon-fw"></i>
					<span class="dt-side-nav__text">Login Page 1</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('pages/login-2'); ?>" class="dt-side-nav__link"> <i
						class="icon icon-login-page icon-fw"></i>
					<span class="dt-side-nav__text">Login Page 2</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('pages/signup'); ?>" class="dt-side-nav__link">
					<i class="icon icon-signup-page icon-fw"></i>
					<span class="dt-side-nav__text">Sign Up Page 1</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('pages/signup-2'); ?>" class="dt-side-nav__link">
					<i class="icon icon-signup-page icon-fw"></i>
					<span class="dt-side-nav__text">Sign Up Page 2</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('pages/forgot-password'); ?>" class="dt-side-nav__link">
					<i class="icon icon-forgot-pass icon-fw"></i>
					<span class="dt-side-nav__text">Forgot Password 1</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('pages/forgot-password-2'); ?>" class="dt-side-nav__link">
					<i class="icon icon-forgot-pass icon-fw"></i>
					<span class="dt-side-nav__text">Forgot Password 2</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('pages/lock-screen'); ?>" class="dt-side-nav__link">
					<i class="icon icon-lockscreen icon-fw"></i>
					<span class="dt-side-nav__text">Lock Screen</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('pages/blank'); ?>" class="dt-side-nav__link"> <i
						class="icon icon-blankpage icon-fw"></i>
					<span class="dt-side-nav__text">Blank Page</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('pages/search'); ?>" class="dt-side-nav__link">
					<i class="icon icon-searchpage icon-fw"></i>
					<span class="dt-side-nav__text">Search Page</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('pages/404'); ?>" class="dt-side-nav__link"> <i
						class="icon icon-error-404 icon-fw"></i>
					<span class="dt-side-nav__text">Error 404</span>
				</a>
			</li>
			<li class="dt-side-nav__item">
				<a href="<?php echo site_url('pages/500'); ?>" class="dt-side-nav__link"> <i
						class="icon icon-error-500 icon-fw"></i>
					<span class="dt-side-nav__text">Error 500</span>
				</a>
			</li>

			<!-- Menu Header -->
			<li class="dt-side-nav__item dt-side-nav__header">
				<span class="dt-side-nav__text">Extra Views</span>
			</li>
			<!-- /menu header -->

			<!-- Menu Item -->
			<li class="dt-side-nav__item">
				<a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow">
					<i class="icon icon-grid icon-fw"></i>
					<span class="dt-side-nav__text">Grid</span>
				</a>

				<!-- Sub-menu -->
				<ul class="dt-side-nav__sub-menu">
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('extra-views/grids/basic'); ?>" class="dt-side-nav__link">
							<i class="icon icon-grid icon-fw"></i>
							<span class="dt-side-nav__text">Basic Grid</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('extra-views/grids/advanced'); ?>" class="dt-side-nav__link">
							<i class="icon icon-grid-advance icon-fw"></i>
							<span class="dt-side-nav__text">Advanced Grid</span>
						</a>
					</li>
				</ul>
				<!-- /sub-menu -->
			</li>
			<li class="dt-side-nav__item">
				<a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow">
					<i class="icon icon-list icon-fw"></i>
					<span class="dt-side-nav__text">List</span>
				</a>

				<!-- Sub-menu -->
				<ul class="dt-side-nav__sub-menu">
					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('extra-views/lists/basic'); ?>" class="dt-side-nav__link">
							<i class="icon icon-list icon-fw"></i>
							<span class="dt-side-nav__text">Basic List</span>
						</a>
					</li>

					<li class="dt-side-nav__item">
						<a href="<?php echo site_url('extra-views/lists/advanced'); ?>" class="dt-side-nav__link">
							<i class="icon icon-list-advance icon-fw"></i>
							<span class="dt-side-nav__text">Advanced List</span>
						</a>
					</li>
				</ul>
				<!-- /sub-menu -->
			</li>
			<!-- /menu item -->

		</ul>
		<!-- /sidebar navigation -->

	</div>
	<!-- /sidebar container -->
</aside>
<!-- /sidebar -->
