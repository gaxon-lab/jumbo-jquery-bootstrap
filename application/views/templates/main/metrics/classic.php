<!-- Page Header -->
<div class="dt-page__header">
	<h1 class="dt-page__title">Metrics Classic</h1>
</div>
<!-- /page header -->

<!-- Grid -->
<div class="row">

	<!-- Grid Item -->
	<div class="col-xl-3 col-sm-6 order-md-1">

		<!-- Card -->
		<div class="dt-card dt-chart">

			<!-- Card Body -->
			<div class="dt-card__body pt-0">
				<!-- Card Body -->
				<div class="dt-chart__body">
					<canvas height="155" id="chart-online-signups" data-shadow="yes"></canvas>
				</div>
				<!-- /Chart Body -->

				<div class="d-flex align-items-center justify-content-between mb-2">
					<div class="flex-1">
						<h4 class="mb-1">10,254</h4>
						<h5 class="f-12">Online Signups</h5>
					</div>
					<span class="d-inline-flex text-success">
							1.5%<i class="icon icon-profit icon-fw"></i>
					</span>
				</div>

			</div>
			<!-- /card body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

</div>
<!-- /grid -->

<!-- Grid -->
<div class="row">

	<!-- Grid Item -->
	<div class="col-xl-4 col-md-6 order-md-1">

		<!-- Card -->
		<div class="dt-card dt-card__full-height dt-chart overflow-hidden">

			<!-- Card Header -->
			<div class="dt-card__header">

				<!-- Card Heading -->
				<div class="dt-card__heading">
					<h3 class="dt-card__title">Revenue</h3>
				</div>
				<!-- /card heading -->

				<!-- Card Tools -->
				<div class="dt-card__tools">

					<!-- Dropdown -->
					<div class="dropdown d-inline-block">
						<a class="dropdown-toggle btn btn-default btn-xs bg-transparent border"
							 href="#"
							 data-toggle="dropdown"
							 aria-haspopup="true" aria-expanded="false">
							2019
						</a>

						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="javascript:void(0)">2016</a>
							<a class="dropdown-item" href="javascript:void(0)">2017</a>
							<a class="dropdown-item" href="javascript:void(0)">2018</a>
						</div>
					</div>
					<!-- /dropdown -->

				</div>
				<!-- /card tools -->

			</div>
			<!-- /card header -->

			<div class="px-7 mb-7">
				<!-- Media -->
				<div class="media">
					<!-- Media Body -->
					<div class="media-body">
						<p class="mb-1 h3 text-sky-blue font-weight-500">$12,45,125</p>
						<span class="d-block">Business Revenue</span>
					</div>
					<!-- /media body -->
					<!-- Media Body -->
					<div class="media-body">
						<p class="mb-1 h3 text-warning font-weight-500">$14,200</p>
						<span class="d-block">Total Expenses</span>
					</div>
					<!-- /media body -->
				</div>
				<!-- /media -->
			</div>

			<!-- Card Body -->
			<div class="dt-chart__body">
				<canvas height="175" id="chart-revenue" data-shadow="yes"></canvas>
			</div>
			<!-- /card body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-6 col-md-6 order-md-2">

		<!-- Card -->
		<div class="dt-card dt-card__full-height dt-chart overflow-hidden">

			<!-- Card Header -->
			<div class="dt-card__header">

				<!-- Card Heading -->
				<div class="dt-card__heading">
					<h3 class="dt-card__title">Statics</h3>
				</div>
				<!-- /card heading -->

				<!-- Card Tools -->
				<div class="dt-card__tools">

					<!-- Dropdown -->
					<div class="dropdown d-inline-block">
						<a class="dropdown-toggle btn btn-default btn-xs bg-transparent border"
							 href="#"
							 data-toggle="dropdown"
							 aria-haspopup="true" aria-expanded="false">
							Today
						</a>

						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="javascript:void(0)">Yesterday</a>
							<a class="dropdown-item" href="javascript:void(0)">Today</a>
							<a class="dropdown-item" href="javascript:void(0)">Tomorrow</a>
						</div>
					</div>
					<!-- /dropdown -->

				</div>
				<!-- /card tools -->

			</div>
			<!-- /card header -->

			<!-- Card Body -->
			<div class="dt-chart__body">
				<canvas height="155" id="chart-statics"></canvas>
			</div>
			<!-- /card body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-3 col-md-5 col-sm-6 order-xl-6 order-md-3">

		<!-- Card -->
		<div class="dt-card dt-card__full-height real-time-widget">

			<!-- Card Header -->
			<div class="dt-card__header text-center">

				<!-- Card Heading -->
				<div class="dt-card__heading">
					<h3 class="dt-card__title text-white">Realtime Users</h3>
				</div>
				<!-- /card heading -->

			</div>
			<!-- /card header -->

			<!-- Chart Body -->
			<div class="dt-card__body dt-chart__body">
				<div class="d-flex flex-column align-items-center mb-5">
					<div id="chart-realtime-users" style="width: 95px;height:95px;"></div>
				</div>
				<div class="chart-fluid">
					<canvas height="70" id="chart-users-bars" data-shadow="yes"
									data-type="line"></canvas>
					<div class="d-flex justify-content-between align-items-center text-white p-1">
						<span class="d-inline-block mr-1">12:00AM</span>
						<span class="d-inline-block">1:00PM</span>
					</div>
				</div>
			</div>
			<!-- /chart body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-3 col-md-5 col-sm-6 order-xl-5 order-md-6">

		<!-- Card -->
		<div class="dt-card dt-card__full-height">

			<!-- Card Header -->
			<div class="dt-card__header">

				<!-- Card Heading -->
				<div class="dt-card__heading">
					<h3 class="dt-card__title">Tickets by Status</h3>
				</div>
				<!-- /card heading -->

			</div>
			<!-- /card header -->

			<!-- Card Body -->
			<div class="dt-card__body d-flex justify-content-center align-items-center">

				<!-- Chart -->
				<canvas id="tickets-doughnut" data-fill="27" height="130" width="130"></canvas>
				<!-- /chart -->

			</div>
			<!-- /card body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-6 col-md-7 order-md-4">

		<!-- Card -->
		<div class="dt-card dt-card__full-height">

			<!-- Card Header -->
			<div class="dt-card__header">

				<!-- Card Heading -->
				<div class="dt-card__heading">
					<h3 class="dt-card__title mb-1">Referral Traffic</h3>
					<p class="mb-0 text-light-gray f-12">Updated 30 min ago</p>
				</div>
				<!-- /card heading -->

				<!-- Card Tools -->
				<div class="dt-card__tools">

					<!-- Dropdown -->
					<div class="dropdown d-inline-block">
						<a class="dropdown-toggle btn btn-default btn-xs bg-transparent border"
							 href="#"
							 data-toggle="dropdown"
							 aria-haspopup="true" aria-expanded="false">
							Unread
						</a>

						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="javascript:void(0)">Read</a>
							<a class="dropdown-item" href="javascript:void(0)">Unread</a>
							<a class="dropdown-item" href="javascript:void(0)">Spam</a>
						</div>
					</div>
					<!-- /dropdown -->

				</div>
				<!-- /card tools -->

			</div>
			<!-- /card header -->
			<!-- Grid -->
			<div class="row no-gutters">
				<!-- Grid Item -->
				<div class="col-sm-6 order-sm-2">
					<!-- Card Body -->
					<div class="dt-card__body pt-0 d-flex justify-content-center align-items-center">
						<!-- Chart -->
						<canvas id="traffic-doughnut" height="130" width="130"></canvas>
						<!-- /chart -->
					</div>
					<!-- /card body -->
				</div>
				<!-- /grid item -->

				<!-- Grid Item -->
				<div class="col-sm-6 order-sm-1">
					<!-- Card Body -->
					<div class="dt-card__body pt-0">
						<ul class="dt-indicator">
							<li class="dt-indicator-item">
								<p class="dt-indicator-title">Email</p>
								<div class="dt-indicator-item__info" data-fill="45" data-max="100"
										 data-percent="true">
									<div class="dt-indicator-item__bar">
										<div class="dt-indicator-item__fill bg-primary"></div>
									</div>
									<span class="dt-indicator-item__count text-nowrap ml-3">0</span>
								</div>
							</li>
							<li class="dt-indicator-item">
								<p class="dt-indicator-title">Social</p>
								<div class="dt-indicator-item__info" data-fill="35" data-max="100"
										 data-percent="true">
									<div class="dt-indicator-item__bar">
										<div class="dt-indicator-item__fill bg-warning"></div>
									</div>
									<span class="dt-indicator-item__count text-nowrap ml-3">0</span>
								</div>
							</li>
							<li class="dt-indicator-item">
								<p class="dt-indicator-title">Organic</p>
								<div class="dt-indicator-item__info" data-fill="75" data-max="100"
										 data-percent="true">
									<div class="dt-indicator-item__bar">
										<div class="dt-indicator-item__fill bg-success"></div>
									</div>
									<span class="dt-indicator-item__count text-nowrap ml-3">0</span>
								</div>
							</li>
							<li class="dt-indicator-item">
								<p class="dt-indicator-title">Technical</p>
								<div class="dt-indicator-item__info" data-fill="15" data-max="100"
										 data-percent="true">
									<div class="dt-indicator-item__bar">
										<div class="dt-indicator-item__fill bg-danger"></div>
									</div>
									<span class="dt-indicator-item__count text-nowrap ml-3">0</span>
								</div>
							</li>
						</ul>
					</div>
					<!-- /card body -->
				</div>
				<!-- /grid item -->

			</div>
			<!-- /grid -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-2 col-md-7 order-xl-3 order-md-5">
		<!-- Grid -->
		<div class="row">

			<!-- Grid Item -->
			<div class="col-xl-12 col-6">

				<!-- Card -->
				<div class="dt-card bg-warning">

					<!-- Card Body -->
					<div class="dt-card__body text-center py-6 px-4">
						<!-- Media -->
						<div class="media flex-column align-items-center text-primary">

							<i class="icon icon-orders-new icon-7x mb-6"></i>

							<!-- Media Body -->
							<div class="media-body">
								<div class="display-3 font-weight-600 mb-1 init-counter">
									2,380
								</div>
								<span class="d-block">Orders this year</span>
							</div>
							<!-- /media body -->

						</div>
						<!-- /media -->
					</div>
					<!-- /card body -->

				</div>
				<!-- /card -->

			</div>
			<!-- /grid item -->

			<!-- Grid Item -->
			<div class="col-xl-12 col-6">

				<!-- Card -->
				<div class="dt-card dt-card__full-height bg-primary">

					<!-- Card Body -->
					<div class="dt-card__body text-center py-6 px-4">
						<!-- Media -->
						<div class="media flex-column align-items-center text-light-primary">

							<i class="icon icon-revenue-new icon-7x mb-6"></i>

							<!-- Media Body -->
							<div class="media-body">
								<div class="display-3 font-weight-600 mb-1 init-counter">
									$9,623
								</div>
								<span class="d-block text-light-gray">Revenue this year</span>
							</div>
							<!-- /media body -->

						</div>
						<!-- /media -->
					</div>
					<!-- /card body -->

				</div>
				<!-- /card -->

			</div>
			<!-- /grid item -->
		</div>
		<!-- /grid -->
	</div>
	<!-- /grid item -->

</div>
<!-- /grid -->

<!-- Grid -->
<div class="row">

	<!-- Grid Item -->
	<div class="col-xl-3 col-sm-6">

		<!-- Card -->
		<div class="dt-card dt-card__full-height bg-primary text-white">

			<!-- Card Body -->
			<div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
				<!-- Media -->
				<div class="media">

					<i class="icon icon-orders-new icon-6x mr-6 align-self-center"></i>

					<!-- Media Body -->
					<div class="media-body">
						<div class="display-3 font-weight-600 mb-1 init-counter">2,380</div>
						<span class="d-block">Orders this year</span>
					</div>
					<!-- /media body -->

				</div>
				<!-- /media -->
			</div>
			<!-- /card body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-3 col-sm-6">

		<!-- Card -->
		<div class="dt-card dt-card__full-height bg-secondary text-white">

			<!-- Card Body -->
			<div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
				<!-- Media -->
				<div class="media">

					<i class="icon icon-revenue-new icon-6x mr-6 align-self-center"></i>

					<!-- Media Body -->
					<div class="media-body">
						<div class="display-3 font-weight-600 mb-1 init-counter">$9,626</div>
						<span class="d-block">Revenue this year</span>
					</div>
					<!-- /media body -->

				</div>
				<!-- /media -->
			</div>
			<!-- /card body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-3 col-sm-6">

		<!-- Card -->
		<div class="dt-card dt-card__full-height bg-info text-white">

			<!-- Card Body -->
			<div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
				<!-- Media -->
				<div class="media">

					<i class="icon icon-visits icon-6x mr-6 align-self-center"></i>

					<!-- Media Body -->
					<div class="media-body">
						<div class="display-3 font-weight-600 mb-1 init-counter">32,567</div>
						<span class="d-block">Visits this year</span>
					</div>
					<!-- /media body -->

				</div>
				<!-- /media -->
			</div>
			<!-- /card body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-3 col-sm-6">

		<!-- Card -->
		<div class="dt-card dt-card__full-height bg-success text-white">

			<!-- Card Body -->
			<div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
				<!-- Media -->
				<div class="media">

					<i class="icon icon-queries icon-6x mr-6 align-self-center"></i>

					<!-- Media Body -->
					<div class="media-body">
						<div class="display-3 font-weight-600 mb-1 init-counter">21,782</div>
						<span class="d-block">Queries this year</span>
					</div>
					<!-- /media body -->

				</div>
				<!-- /media -->
			</div>
			<!-- /card body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-2 col-sm-4 col-6">

		<!-- Chart Card -->
		<div class="dt-card dt-chart dt-card__full-height">

			<!-- Chart Header -->
			<div class="dt-chart__header mb-1 vertical-view">
				<div class="style-default">
					<div class="trending-section text-success">
						<span class="value">92%</span>
						<i class="icon icon-pointer-down icon-1x"></i>
					</div>

					<p>Growth in revenue</p>
				</div>
			</div>
			<!-- /chart header -->

			<!-- Chart Body -->
			<div class="dt-chart__body">
				<canvas class="rounded-bottom" height="250" id="chart-growth-revenue"
								data-shadow="yes"></canvas>
			</div>
			<!-- /chart body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-2 col-sm-4 col-6">

		<!-- Chart Card -->
		<div class="dt-card dt-chart dt-card__full-height bg-primary">

			<!-- Chart Header -->
			<div class="dt-chart__header mb-1 vertical-view">
				<div class="style-default text-white">
					<div class="trending-section">
						<span class="value">07%</span>
						<i class="icon icon-pointer-up icon-1x"></i>
					</div>

					<p>Traffic raise</p>
				</div>
			</div>
			<!-- /chart header -->

			<!-- Chart Body -->
			<div class="dt-chart__body">
				<canvas class="rounded-bottom" height="250" id="chart-growth-traffic"
								data-shadow="yes"></canvas>
			</div>
			<!-- /chart body -->

		</div>
		<!-- /chart card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-2 col-sm-4 col-12">

		<!-- Chart Card -->
		<div class="dt-card dt-chart dt-card__full-height">

			<!-- Chart Header -->
			<div class="dt-chart__header mb-1 vertical-view">
				<div class="style-default">
					<div class="trending-section text-danger">
						<span class="value">38%</span>
						<i class="icon icon-pointer-down icon-1x"></i>
					</div>

					<p>Growth in revenue</p>
				</div>
			</div>
			<!-- /chart header -->

			<!-- Chart Body -->
			<div class="dt-chart__body">
				<canvas class="rounded-bottom" height="250" id="chart-less-revenue"
								data-shadow="no"></canvas>
			</div>
			<!-- /chart body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-6">
		<!-- Grid -->
		<div class="row">
			<!-- Grid Item -->
			<div class="col-sm-6">

				<!-- Chart Card -->
				<div class="dt-card dt-chart dt-card__full-height">

					<!-- Chart Header -->
					<div class="dt-chart__header my-n3">
						<div class="style-default">
							<div class="trending-section text-success">
								<span class="value">84%</span>
								<i class="icon icon-pointer-up"></i>
							</div>

							<p>Increment in Active users</p>
						</div>
					</div>
					<!-- /chart header -->

					<!-- Chart Body -->
					<div class="dt-chart__body">
						<canvas class="rounded-bottom" id="chart-active-users" height="80"
										data-shadow="yes"></canvas>
					</div>
					<!-- /chart body -->

				</div>
				<!-- /chart card -->

			</div>
			<!-- /grid item -->

			<!-- Grid Item -->
			<div class="col-sm-6">

				<!-- Chart Card -->
				<div class="dt-card dt-chart dt-card__full-height">

					<!-- Chart Header -->
					<div class="dt-chart__header my-n3">
						<div class="style-default">

							<div class="trending-section text-success">
								<span class="value">38%</span>
								<i class="icon icon-pointer-up"></i>
							</div>

							<p>Extra revenue from last year</p>
						</div>
					</div>
					<!-- /chart header -->

					<!-- Chart Body -->
					<div class="dt-chart__body">
						<canvas class="rounded-bottom" id="chart-extra-revenue" height="80"
										data-shadow="yes"></canvas>
					</div>
					<!-- /chart body -->

				</div>
				<!-- /chart card -->

			</div>
			<!-- /grid item -->

			<!-- Grid Item -->
			<div class="col-sm-6">

				<!-- Chart Card -->
				<div class="dt-card dt-chart dt-card__full-height">

					<!-- Chart Header -->
					<div class="dt-chart__header my-n3">
						<div class="style-default">

							<div class="trending-section text-danger">
								<span class="value">38%</span>
								<i class="icon icon-pointer-down"></i>
							</div>

							<p>Less orders from past year</p>
						</div>
					</div>
					<!-- /chart header -->

					<!-- Chart Body -->
					<div class="dt-chart__body">
						<canvas class="rounded-bottom" id="chart-orders" height="80"
										data-shadow="yes"></canvas>
					</div>
					<!-- /chart body -->

				</div>
				<!-- /chart card -->

			</div>
			<!-- /grid item -->

			<!-- Grid Item -->
			<div class="col-sm-6">

				<!-- Chart Card -->
				<div class="dt-card dt-chart dt-card__full-height">

					<!-- Chart Header -->
					<div class="dt-chart__header my-n3">
						<div class="style-default">

							<div class="trending-section text-success">
								<span class="value">92%</span>
								<i class="icon icon-pointer-down"></i>
							</div>

							<p>Traffic raise from past year</p>
						</div>
					</div>
					<!-- /chart header -->

					<!-- Chart Body -->
					<div class="dt-chart__body">
						<canvas class="rounded-bottom" id="chart-traffic-raise" height="80"
										data-shadow="no"
										data-type="line"></canvas>
					</div>
					<!-- /chart body -->

				</div>
				<!-- /chart card -->

			</div>
			<!-- /grid item -->
		</div>
		<!-- /grid -->
	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-md-4 col-sm-6">

		<!-- Card -->
		<div class="dt-card">

			<!-- Card Body -->
			<div class="dt-card__body p-5">
				<!-- Grid -->
				<div class="row no-gutters">

					<!-- Grid Item -->
					<div class="col-xl-5 pr-2 d-flex flex-column justify-content-center">
						<div class="d-flex align-items-center text-success">
							<span class="mb-0 display-3 font-weight-500 mr-1">07%</span>
							<i class="icon icon-pointer-up"></i>
						</div>
						<p class="mb-0 text-light-gray">Traffic raise</p>
					</div>
					<!-- /grid item -->

					<!-- Grid Item -->
					<div class="col-xl-7">

						<!-- Chart Body -->
						<div class="dt-chart__body">
							<canvas height="140" id="line-traffic-raise" data-type="line"></canvas>
						</div>
						<!-- /chart body -->

					</div>
					<!-- /grid item -->

				</div>
				<!-- /grid -->
			</div>
			<!-- /card body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-md-4 col-sm-6">

		<!-- Card -->
		<div class="dt-card overflow-hidden">

			<!-- Card Body -->
			<div class="dt-card__body p-5">
				<div class="d-flex mb-5">
					<span class="d-block text-primary font-weight-500 f-16">Income Last Year</span>

					<div class="d-flex align-items-center ml-auto text-success">
						<span class="mb-0 font-weight-500 mr-1">67%</span>
						<i class="icon icon-pointer-up"></i>
					</div>
				</div>
				<!-- Grid -->
				<div class="row no-gutters">

					<!-- Grid Item -->
					<div class="col-xl-5 pr-2">
						<span class="text-primary display-3 font-weight-500 mr-1">$23,658</span>
						<p class="mb-0 text-light-gray">Total income</p>
					</div>
					<!-- /grid item -->

					<!-- Grid Item -->
					<div class="col-xl-7">

						<!-- Chart Body -->
						<div class="dt-chart__body mb-n5 mr-n5">
							<canvas height="110" id="chart-total-income" data-shadow="yes"
											data-type="line"></canvas>
						</div>
						<!-- /chart body -->

					</div>
					<!-- /grid item -->

				</div>
				<!-- /grid -->
			</div>
			<!-- /card body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-md-4 col-sm-8">

		<!-- Card -->
		<div class="dt-card overflow-hidden">

			<!-- Card Body -->
			<div class="dt-card__body p-5">
				<div class="d-flex mb-5">
					<span class="d-block text-primary font-weight-500 f-16">Queries</span>

					<div class="d-flex align-items-center ml-auto text-success">
						<span class="mb-0 font-weight-500 mr-1">67%</span>
						<i class="icon icon-pointer-up"></i>
					</div>
				</div>
				<!-- Grid -->
				<div class="row no-gutters">

					<!-- Grid Item -->
					<div class="col-xl-7 col-md-12 col-sm-7 pr-2">
						<span class="text-primary display-3 font-weight-500 mr-1">43,856</span>
						<p class="mb-0 text-light-gray">Mail, Website and Call</p>
					</div>
					<!-- /grid item -->

					<!-- Grid Item -->
					<div class="col-xl-5 col-md-12 col-sm-5">

						<!-- Chart Body -->
						<div class="dt-chart__body">
							<canvas height="120" id="chart-support-queries" data-shadow="yes"
											data-type="line"></canvas>
						</div>
						<!-- /chart body -->

					</div>
					<!-- /grid item -->

				</div>
				<!-- /grid -->
			</div>
			<!-- /card body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

</div>
<!-- /grid -->
