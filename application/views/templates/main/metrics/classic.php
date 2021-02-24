<!-- Page Header -->
<div class="dt-page__header">
	<h1 class="dt-page__title">Metrics Classic</h1>
</div>
<!-- /page header -->

<!-- Grid -->
<div class="row">

	<!-- Grid Item -->
	<div class="col-sm-6">

		<!-- Card -->
		<div class="dt-card">

			<!-- Card Header -->
			<div class="dt-card__header">

				<!-- Card Heading -->
				<div class="dt-card__heading">
					<h3 class="dt-card__title">This Year Sale Report</h3>
				</div>
				<!-- /card heading -->

			</div>
			<!-- /card header -->

			<!-- Card Body -->
			<div class="dt-card__body">
				<!-- Grid -->
				<div class="row no-gutters">

					<!-- Grid Item -->
					<div class="col-lg-5 col-md-12 col-sm-7 pr-2">
						<div class="h1 mb-1">$685K+</div>
						<div class="f-12">Post 9 month data</div>
					</div>
					<!-- /grid item -->

					<!-- Grid Item -->
					<div class="col-lg-7 col-md-12 col-sm-5">

						<!-- Chart Body -->
						<div class="dt-chart__body">
							<canvas height="80" id="chart-year-sale-report" class="mt-lg-n5"></canvas>
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
	<div class="col-sm-6">

		<!-- Card -->
		<div class="dt-card">

			<!-- Card Body -->
			<div class="dt-card__body">

				<div class="d-flex">
					<!-- Chart Body -->
					<div class="dt-chart__body">
						<canvas height="80" id="chart-year-sale-report" class="mt-lg-n5"></canvas>
					</div>
					<!-- /chart body -->

					<div class="flex-1">
						<h4 class="mb-1">Google insight score</h4>
						<h5 class="f-12">Las calculated 1 month ago</h5>
						<button class="btn btn-primary">
							<i class="material-icons mr-2">autorenew</i>
							REFRESH
						</button>
					</div>

					<div>
						<img src="<?php echo assets_url('images/icons/icons-google.png'); ?>" alt="Google"/>
					</div>

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
	<div class="col-xl-3 col-sm-6">

		<!-- Card -->
		<div class="dt-card dt-chart"
				 style="border-top: 4px solid #0062FF; background: linear-gradient(180deg, #E2EEFF 0%, #FFFFFF 100%);">

			<!-- Card Body -->
			<div class="dt-card__body">
				<!-- Card Body -->
				<div class="dt-chart__body">
					<canvas height="85" id="chart-online-signups" data-shadow="yes" data-type="line"></canvas>
				</div>
				<!-- /Chart Body -->

				<div class="d-flex align-items-center justify-content-between mb-2">
					<div class="flex-1">
						<h4 class="mb-1">10,254</h4>
						<h5 class="f-12">Online Signups</h5>
					</div>
					<span class="d-inline-flex text-success">
							1.5%<i class="material-icons">trending_up</i>
					</span>
				</div>

			</div>
			<!-- /card body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-3 col-sm-6">

		<!-- Card -->
		<div class="dt-card dt-chart"
				 style="border-top: 4px solid #4200FF; background: linear-gradient(180deg, #E2E3FF 0%, #FFFFFF 100%);">

			<!-- Card Body -->
			<div class="dt-card__body">
				<!-- Card Body -->
				<div class="dt-chart__body">
					<canvas height="85" id="chart-last-month-sale" data-shadow="yes" data-type="line"></canvas>
				</div>
				<!-- /Chart Body -->

				<div class="d-flex align-items-center justify-content-between mb-2">
					<div class="flex-1">
						<h4 class="mb-1">$3,755</h4>
						<h5 class="f-12">Last Month Sale</h5>
					</div>
					<span class="d-inline-flex text-success">
							3.5%<i class="material-icons">trending_up</i>
					</span>
				</div>

			</div>
			<!-- /card body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-3 col-sm-6">

		<!-- Card -->
		<div class="dt-card dt-chart"
				 style="border-top: 4px solid #29CF6B; background: linear-gradient(180deg, #E2FFE7 0%, #FFFFFF 100%);">

			<!-- Card Body -->
			<div class="dt-card__body">
				<!-- Card Body -->
				<div class="dt-chart__body">
					<canvas height="85" id="chart-total-revenue" data-shadow="yes" data-type="line"></canvas>
				</div>
				<!-- /Chart Body -->

				<div class="d-flex align-items-center justify-content-between mb-2">
					<div class="flex-1">
						<h4 class="mb-1">$15,366</h4>
						<h5 class="f-12">Total Revenue this year</h5>
					</div>
					<span class="d-inline-flex text-danger">
							1.5%<i class="material-icons">trending_down</i>
					</span>
				</div>

			</div>
			<!-- /card body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-3 col-sm-6">

		<!-- Card -->
		<div class="dt-card dt-chart"
				 style="border-top: 4px solid #FFA601; background: linear-gradient(180deg, #FFF2E2 0%, #FFFFFF 100%);">

			<!-- Card Body -->
			<div class="dt-card__body">
				<!-- Card Body -->
				<div class="dt-chart__body">
					<canvas height="85" id="chart-total-mail-sent"></canvas>
				</div>
				<!-- /Chart Body -->

				<div class="d-flex align-items-center justify-content-between mb-2">
					<div class="flex-1">
						<h4 class="mb-1">2,355</h4>
						<h5 class="f-12">Total Email Sent</h5>
					</div>
					<div>
						<div class="d-flex align-items-center justify-content-end">
							<span class="d-inline-flex text-success">
									1.5%<i class="material-icons">trending_up</i>
							</span>
						</div>

						<div class="d-flex align-items-center justify-content-center mt-4">
							<div class="mr-2">
								<span class="dot-shape" style="background-color: rgb(255, 168, 0);"></span>
								<span>Sent</span>
							</div>
							<div>
								<span class="dot-shape" style="background-color: rgb(243, 229, 207);"></span>
								<span>Bounced</span>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- /card body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-3 col-sm-6">

		<!-- Card -->
		<div class="dt-card bg-primary text-white">

			<!-- Card Header -->
			<div class="dt-card__header">

				<!-- Card Heading -->
				<div class="dt-card__heading">
					<span class="d-block font-weight-500 f-16"><i class="material-icons">group</i></span>
				</div>
				<!-- /card heading -->

			</div>
			<!-- /card header -->

			<!-- Card Body -->
			<div class="dt-card__body">

				<!-- Grid -->
				<div class="row no-gutters">

					<!-- Grid Item -->
					<div class="col-lg-7 col-md-12 col-sm-7 pr-2">
						<span class="display-3 font-weight-500 mr-1">85K+</span>
						<p class="mb-0">New Subscribers</p>
					</div>
					<!-- /grid item -->

					<!-- Grid Item -->
					<div class="col-lg-5 col-md-12 col-sm-5">

						<!-- Chart Body -->
						<div class="dt-chart__body">
							<canvas id="chart-new-subscribers" class="mt-lg-n5"></canvas>
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
	<div class="col-xl-3 col-sm-6">

		<!-- Card -->
		<div class="dt-card bg-secondary text-white">

			<!-- Card Body -->
			<div class="card-body">
				<div class="d-flex align-items-start justify-content-between mb-2">
					<div class="flex-1">
						<span class="display-3 font-weight-500 mr-1">526</span>
						<p class="mb-0">News Articles</p>
					</div>

					<span class="d-block font-weight-500 f-16">
						<i class="material-icons">bookmark</i>
					</span>
				</div>
			</div>
			<!-- /card body -->

			<!-- Chart Body -->
			<div class="dt-chart__body">
				<canvas height="70" id="chart-news-articles"></canvas>
			</div>
			<!-- /chart body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-3 col-sm-6">

		<!-- Card -->
		<div class="dt-card bg-danger text-white">

			<!-- Card Header -->
			<div class="dt-card__header">

				<!-- Card Heading -->
				<div class="dt-card__heading">
					<span class="d-block font-weight-500 f-16"><i class="material-icons">stars</i></span>
				</div>
				<!-- /card heading -->

			</div>
			<!-- /card header -->

			<!-- Card Body -->
			<div class="dt-card__body">

				<!-- Grid -->
				<div class="row no-gutters">

					<!-- Grid Item -->
					<div class="col-lg-7 col-md-12 col-sm-7 pr-2">
						<span class="display-3 font-weight-500 mr-1">232</span>
						<p class="mb-0">New Authors</p>
					</div>
					<!-- /grid item -->

					<!-- Grid Item -->
					<div class="col-lg-5 col-md-12 col-sm-5">

						<!-- Chart Body -->
						<div class="dt-chart__body">
							<canvas id="chart-new-authors" data-fill="1800" height="112" width="112" class="mt-lg-n5"></canvas>
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
	<div class="col-xl-3 col-sm-6">

		<!-- Card -->
		<div class="dt-card bg-info text-white">

			<!-- Card Body -->
			<div class="card-body">
				<div class="d-flex align-items-start justify-content-between mb-2">
					<div class="flex-1">
						<span class="display-3 font-weight-500 mr-1">756+</span>
						<p class="mb-0">Avg Daily Traffic</p>
					</div>

					<span class="d-block font-weight-500 f-16">
						<i class="material-icons">timeline</i>
					</span>
				</div>
			</div>
			<!-- /card body -->

			<!-- Chart Body -->
			<div class="dt-chart__body">
				<canvas height="70" id="chart-avg-daily-traffic"></canvas>
			</div>
			<!-- /chart body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-3 col-sm-6">

		<!-- Card -->
		<div class="dt-card">

			<!-- Card Header -->
			<div class="dt-card__header py-4 mb-0 border-bottom">

				<!-- Card Heading -->
				<div class="dt-card__heading">
					<h3 class="dt-card__title">View</h3>
				</div>
				<!-- /card heading -->

				<!-- Card Tools -->
				<div class="dt-card__tools">
					<a href="javascript:void(0)" class="badge badge-pill badge-light-success text-primary-green mr-2">
						Monthly
					</a>
					<a href="javascript:void(0)" class="dt-card__more text-secondary">
						<i class="material-icons">show_chart</i>
					</a>
				</div>
				<!-- /card tools -->

			</div>
			<!-- /card header -->

			<!-- Card Body -->
			<div class="dt-card__body pt-6 text-center">
				<div class="display-4 font-weight-700 text-primary mb-2">386,200</div>
				<div>Total View <span class="text-danger">98% <i class="icon icon-loss"></i></span></div>
			</div>
			<!-- /card body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-3 col-sm-6">

		<!-- Card -->
		<div class="dt-card">

			<!-- Card Header -->
			<div class="dt-card__header py-4 mb-0 border-bottom">

				<!-- Card Heading -->
				<div class="dt-card__heading">
					<h3 class="dt-card__title">Orders</h3>
				</div>
				<!-- /card heading -->

				<!-- Card Tools -->
				<div class="dt-card__tools">
					<a href="javascript:void(0)" class="badge badge-pill badge-light-warning text-warning mr-2">
						Annual
					</a>
					<a href="javascript:void(0)" class="dt-card__more text-secondary">
						<i class="material-icons">show_chart</i>
					</a>
				</div>
				<!-- /card tools -->

			</div>
			<!-- /card header -->

			<!-- Card Body -->
			<div class="dt-card__body pt-6 text-center">
				<div class="display-4 font-weight-700 text-primary mb-2">80,800</div>
				<div>New order <span class="text-success">28% <i class="icon icon-profit"></i></span></div>
			</div>
			<!-- /card body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-6 col-sm-12">

		<!-- Card -->
		<div class="dt-card">

			<!-- Card Header -->
			<div class="dt-card__header py-4 mb-0 border-bottom">

				<!-- Card Heading -->
				<div class="dt-card__heading">
					<h3 class="dt-card__title">Visited</h3>
				</div>
				<!-- /card heading -->

				<!-- Card Tools -->
				<div class="dt-card__tools">
					<a href="javascript:void(0)" class="badge badge-pill badge-light-primary text-link mr-2">
						Today
					</a>
					<a href="javascript:void(0)" class="dt-card__more text-secondary">
						<i class="material-icons">show_chart</i>
					</a>
				</div>
				<!-- /card tools -->

			</div>
			<!-- /card header -->

			<!-- Card Body -->
			<div class="dt-card__body pt-6 text-center">
				<!-- List -->
				<ul class="dt-list dt-list-col-6">
					<li class="dt-list__item">
						<div class="display-4 font-weight-700 text-primary mb-2">406,42</div>
						<div>Rapid pace <span class="text-success">23% <i class="icon icon-profit"></i></span></div>
					</li>

					<li class="dt-list__item">
						<div class="display-4 font-weight-700 text-primary mb-2">206,12</div>
						<div>Slow pace <span class="text-danger">1.58% <i class="icon icon-loss"></i></span></div>
					</li>
				</ul>
				<!-- /list -->
			</div>
			<!-- /card body -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-3 col-sm-6">

		<!-- Card -->
		<div class="card dt-intro-card dt-intro-card-hover">

			<!-- Card Image -->
			<div class="card-image">
				<div class="dt-avatar dt-avatar-animate bg-info text-white size-55">
					<i class="material-icons">wb_sunny</i>
				</div>
			</div>
			<!-- /card image -->

			<!-- Card Stacked -->
			<div class="card-stacked">

				<!-- Card Body -->
				<div class="card-body px-4">
					<div class="h1 mb-1">23</div>
					<div class="f-16">Ideas</div>
				</div>
				<!-- /card body -->

			</div>
			<!-- /card stacked -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item-->

	<!-- Grid Item -->
	<div class="col-xl-3 col-sm-6">

		<!-- Card -->
		<div class="card dt-intro-card dt-intro-card-hover">

			<!-- Card Image -->
			<div class="card-image">
				<div class="dt-avatar dt-avatar-animate bg-warning text-white size-55">
					<i class="material-icons">folder_open</i>
				</div>
			</div>
			<!-- /card image -->

			<!-- Card Stacked -->
			<div class="card-stacked">

				<!-- Card Body -->
				<div class="card-body px-4">
					<div class="h1 mb-1">387</div>
					<div class="f-16">Documents</div>
				</div>
				<!-- /card body -->

			</div>
			<!-- /card stacked -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item-->

	<!-- Grid Item -->
	<div class="col-xl-3 col-sm-6">

		<!-- Card -->
		<div class="card dt-intro-card dt-intro-card-hover">

			<!-- Card Image -->
			<div class="card-image">
				<div class="dt-avatar dt-avatar-animate bg-success text-white size-55">
					<i class="material-icons">supervised_user_circle</i>
				</div>
			</div>
			<!-- /card image -->

			<!-- Card Stacked -->
			<div class="card-stacked">

				<!-- Card Body -->
				<div class="card-body px-4">
					<div class="h1 mb-1">New Customers</div>
					<div class="f-16">543</div>
				</div>
				<!-- /card body -->

			</div>
			<!-- /card stacked -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item-->

	<!-- Grid Item -->
	<div class="col-xl-3 col-sm-6">

		<!-- Card -->
		<div class="card dt-intro-card dt-intro-card-hover">

			<!-- Card Image -->
			<div class="card-image">
				<div class="dt-avatar dt-avatar-animate bg-primary text-white size-55">
					<i class="material-icons">star</i>
				</div>
			</div>
			<!-- /card image -->

			<!-- Card Stacked -->
			<div class="card-stacked">

				<!-- Card Body -->
				<div class="card-body px-4">
					<div class="h1 mb-1">Popular Products</div>
					<div class="f-16">22 new products</div>
				</div>
				<!-- /card body -->

			</div>
			<!-- /card stacked -->

		</div>
		<!-- /card -->

	</div>
	<!-- /grid item-->

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
