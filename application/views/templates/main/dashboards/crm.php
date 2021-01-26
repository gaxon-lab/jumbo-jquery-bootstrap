<!-- Page Header -->
<div class="dt-page__header">
	<h1 class="dt-page__title">Dashboard - CRM</h1>
</div>
<!-- /page header -->

<!-- Grid -->
<div class="row">

	<!-- Grid Item -->
	<div class="col-12">

		<!-- Card -->
		<div class="dt-card">

			<!-- Card Header -->
			<div class="dt-card__header">

				<!-- Card Heading -->
				<div class="dt-card__heading">
					<h3 class="dt-card__title">Welcome EMA</h3>
				</div>
				<!-- /card heading -->

			</div>
			<!-- /card header -->

			<!-- Card Body -->
			<div class="dt-card__body">

				<!-- Grid -->
				<div class="row">
					<!-- Grid Item -->
					<div class="col-sm-6 col-md-3 order-md-1">
						<h5 class="mt-4">You Have</h5>
						<!-- List -->
						<ul class="dt-list flex-column dt-list-sm">
							<!-- List Item -->
							<li class="dt-list__item">
								<div class="d-flex align-items-center">
									<i class="icon icon-message icon-fw mr-3"></i>
									<div>5 Unread messages</div>
								</div>
							</li>
							<!-- /list item -->
							<!-- List Item -->
							<li class="dt-list__item">
								<div class="d-flex align-items-center">
									<i class="icon icon-mail icon-fw mr-3"></i>
									<div>2 Pending invitations</div>
								</div>
							</li>
							<!-- /list item -->
							<!-- List Item -->
							<li class="dt-list__item">
								<div class="d-flex align-items-center">
									<i class="icon icon-circle-check icon-fw mr-3"></i>
									<div>7 Due tasks</div>
								</div>
							</li>
							<!-- /list item -->
							<!-- List Item -->
							<li class="dt-list__item">
								<div class="d-flex align-items-center">
									<i class="icon icon-notification icon-fw mr-3"></i>
									<div>3 Other notifications</div>
								</div>
							</li>
							<!-- /list item -->
						</ul>
						<!-- /list -->
					</div>
					<!-- /grid item -->
					<!-- Grid Item -->
					<div class="col-sm-6 col-md-3 order-md-3">
						<h5>Site Audience</h5>
						<!-- Indicator -->
						<ul class="dt-indicator">
							<li class="dt-indicator-item">
								<div class="dt-indicator-title">Male</div>
								<div class="dt-indicator-item__info" data-fill="89" data-max="100"
									 data-percent="true">
									<div class="dt-indicator-item__fill bg-warning"></div>
									<span class="dt-indicator-item__count text-nowrap ml-3">0</span>
								</div>
							</li>
							<li class="dt-indicator-item">
								<div class="dt-indicator-title">Female</div>
								<div class="dt-indicator-item__info" data-fill="56" data-max="100"
									 data-percent="true">
									<div class="dt-indicator-item__fill bg-primary"></div>
									<span class="dt-indicator-item__count text-nowrap ml-3">0</span>
								</div>
							</li>
							<li class="dt-indicator-item">
								<div class="dt-indicator-title">Others</div>
								<div class="dt-indicator-item__info" data-fill="24" data-max="100"
									 data-percent="true">
									<div class="dt-indicator-item__fill bg-dark-green"></div>
									<span class="dt-indicator-item__count text-nowrap ml-3">0</span>
								</div>
							</li>
						</ul>
						<!-- /indicator -->
					</div>
					<!-- /grid item -->
					<!-- Grid Item -->
					<div class="col-sm-6 col-md-6 order-md-2">
						<h5>Site Visits</h5>

						<!-- Chart Body -->
						<div class="dt-chart__body">
							<canvas height="40" id="chart-revenue" data-shadow="yes"></canvas>
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
		<div class="dt-card">

			<!-- Card Header -->
			<div class="dt-card__header">

				<!-- Card Heading -->
				<div class="dt-card__heading">
					<h3 class="dt-card__title">Total Revenue</h3>
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
						<div class="h1 mb-1">$216,759</div>
						<div>YTD Revenue</div>
					</div>
					<!-- /grid item -->

					<!-- Grid Item -->
					<div class="col-lg-7 col-md-12 col-sm-5">

						<!-- Chart Body -->
						<div class="dt-chart__body">
							<canvas height="80" id="chart-support-queries" class="mt-lg-n5" data-type="line"></canvas>
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
		<div class="dt-card">

			<!-- Card Header -->
			<div class="dt-card__header">

				<!-- Card Heading -->
				<div class="dt-card__heading">
					<h3 class="dt-card__title">New Customers</h3>
				</div>
				<!-- /card heading -->

			</div>
			<!-- /card header -->

			<!-- Card Body -->
			<div class="dt-card__body">
				<div class="d-flex align-items-center">
					<!-- Project Team -->
					<ul class="dt-list dt-list-sm dt-list-cm-0">
						<li class="dt-list__item">
							<!-- Avatar -->
							<a class="dt-avatar" href="javascript:void(0)"
							   data-hover="thumb-card"
							   data-thumb="<?php echo assets_url('images/user-avatar/man-3.jpg'); ?>"
							   data-name="Reece Jacklin">
								<img src="<?php echo assets_url('images/user-avatar/man-3.jpg'); ?>"
									 alt="Reece Jacklin">
							</a>
							<!-- /avatar -->
						</li>
						<li class="dt-list__item">
							<!-- Avatar -->
							<a class="dt-avatar" href="javascript:void(0)"
							   data-hover="thumb-card"
							   data-thumb="<?php echo assets_url('images/user-avatar/steve-smith.jpg'); ?>"
							   data-name="Steve Smith">
								<img src="<?php echo assets_url('images/user-avatar/steve-smith.jpg'); ?>"
									 alt="Steve Smith"> </a>
							<!-- /avatar -->
						</li>
						<li class="dt-list__item">
							<!-- Avatar -->
							<a class="dt-avatar" href="javascript:void(0)"
							   data-hover="thumb-card"
							   data-thumb="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg'); ?>"
							   data-name="Alex Dolgove">
								<img src="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg'); ?>"
									 alt="Alex Dolgove"> </a>
							<!-- /avatar -->
						</li>
						<li class="dt-list__item">
							<!-- Avatar -->
							<a class="dt-avatar" href="javascript:void(0)"
							   data-hover="thumb-card"
							   data-thumb="<?php echo assets_url('images/user-avatar/zakie-chain.jpg'); ?>"
							   data-name="Zakie Chain">
								<img src="<?php echo assets_url('images/user-avatar/zakie-chain.jpg'); ?>"
									 alt="Zakie Chain"> </a>
							<!-- /avatar -->
						</li>
						<li class="dt-list__item">
							<!-- Avatar -->
							<a class="dt-avatar bg-primary text-white"
							   href="javascript:void(0)"
							   data-hover="thumb-card"
							   data-thumb=""
							   data-name="Yogendra Singh">YS</a>
							<!-- /avatar -->
						</li>
					</ul>
					<!-- /project team -->

					<a href="javascript:void(0)" class="btn btn-link text-disabled">+ 12 More</a>
				</div>
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

			<!-- Card Header -->
			<div class="dt-card__header">

				<!-- Card Heading -->
				<div class="dt-card__heading">
					<h3 class="dt-card__title">Growth</h3>
				</div>
				<!-- /card heading -->

			</div>
			<!-- /card header -->

			<!-- Card Body -->
			<div class="dt-card__body pb-0">
				<!-- Grid -->
				<div class="row no-gutters">

					<!-- Grid Item -->
					<div class="col-lg-5 pr-2">
						<div class="d-flex flex-column justify-content-center pb-4">
							<div class="d-flex align-items-center text-success mb-1 font-weight-700">
								<span class="f-18">37%</span>
								<i class="icon icon-arrow-up icon-fw icon-xl"></i>
							</div>
							<div class="f-12">Traffic raise</div>
						</div>
					</div>
					<!-- /grid item -->

					<!-- Grid Item -->
					<div class="col-lg-7">

						<!-- Chart Body -->
						<div class="dt-chart__body mt-n10 mr-n6">
							<canvas height="120" id="chart-growth-revenue" data-type="line"></canvas>
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

<!-- Grid -->
<div class="row">

	<!-- Grid Item -->
	<div class="col-xl-8">

		<!-- Grid -->
		<div class="row">

			<!-- Grid Item -->
			<div class="col-xl-3">

				<!-- Card -->
				<div class="dt-card bg-primary bg-overlay-gradient-white text-white">

					<!-- Card Body -->
					<div class="dt-card__body">
						<!-- Media -->
						<div class="media">
							<img class="mr-6" src="<?php echo assets_url('images/dashboard/icon-idea.svg'); ?>" alt="">

							<!-- Media Body -->
							<div class="media-body">
								<div class="display-4 font-weight-700 mb-1">09</div>
								<div class="f-16 font-weight-300">Projects</div>
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
			<div class="col-xl-3">

				<!-- Card -->
				<div class="dt-card bg-info bg-overlay-gradient-white text-white">

					<!-- Card Body -->
					<div class="dt-card__body">
						<!-- Media -->
						<div class="media">
							<img class="mr-6" src="<?php echo assets_url('images/dashboard/icon-checklist.svg'); ?>" alt="">

							<!-- Media Body -->
							<div class="media-body">
								<div class="display-4 font-weight-700 mb-1">457</div>
								<div class="f-16 font-weight-300">Tasks</div>
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
			<div class="col-xl-3">

				<!-- Card -->
				<div class="dt-card bg-light-purple bg-overlay-gradient-white text-white">

					<!-- Card Body -->
					<div class="dt-card__body">
						<!-- Media -->
						<div class="media">
							<img class="mr-6" src="<?php echo assets_url('images/dashboard/icon-team.svg'); ?>" alt="">

							<!-- Media Body -->
							<div class="media-body">
								<div class="display-4 font-weight-700 mb-1">13</div>
								<div class="f-16 font-weight-300">Teams</div>
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
			<div class="col-xl-3">

				<!-- Card -->
				<div class="dt-card bg-red-orange bg-overlay-gradient-white text-white">

					<!-- Card Body -->
					<div class="dt-card__body">
						<!-- Media -->
						<div class="media">
							<img class="mr-6" src="<?php echo assets_url('images/dashboard/icon-folder.svg'); ?>" alt="">

							<!-- Media Body -->
							<div class="media-body">
								<div class="display-4 font-weight-700 mb-1">42</div>
								<div class="f-16 font-weight-300">Files</div>
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
			<div class="col-xl-12">

				<!-- Card -->
				<div class="dt-card">

					<!-- Card Header -->
					<div class="dt-card__header">

						<!-- Card Heading -->
						<div class="dt-card__heading">
							<h3 class="dt-card__title">My Task</h3>
						</div>
						<!-- /card heading -->

					</div>
					<!-- /card header -->

					<!-- Card Body -->
					<div class="dt-card__body">

						<!-- Task Section  -->
						<div class="dt-todo-group">

							<!-- Search box -->
							<form>
								<input class="form-control mb-5" placeholder="Search in tasks..."
									   value="" type="search">
							</form>
							<!-- /search box -->

							<!-- Tasks -->
							<div class="dt-checkbox dt-checkbox-todo mb-3">
								<input type="checkbox" id="checkbox-1">
								<label class="dt-checkbox-content" for="checkbox-1"> Take a status
									report on supply chain system. </label>
							</div>
							<!-- /tasks -->

							<!-- Tasks -->
							<div class="dt-checkbox dt-checkbox-todo mb-3">
								<input type="checkbox" id="checkbox-2">
								<label class="dt-checkbox-content" for="checkbox-2"> Test the system
									thoroughly with black box testing. </label>
							</div>
							<!-- /tasks -->

							<!-- Tasks -->
							<div class="dt-checkbox dt-checkbox-todo mb-3">
								<input type="checkbox" id="checkbox-3">
								<label class="dt-checkbox-content" for="checkbox-3"> Send John to
									Mars to fix a meeting with alians. </label>
							</div>
							<!-- /tasks -->

							<!-- Tasks -->
							<div class="dt-checkbox dt-checkbox-todo mb-3">
								<input type="checkbox" id="checkbox-4">
								<label class="dt-checkbox-content" for="checkbox-4"> Test the system
									thoroughly with black box testing. </label>
							</div>
							<!-- /tasks -->

							<div class="mt-6">
								<a href="javascript:void(0)" class="card-link"> Go to My task <i
											class="icon icon-arrow-long-right icon-fw"></i> </a>
							</div>

						</div>
						<!-- /task section  -->

					</div>
					<!-- /card body -->

				</div>
				<!-- /card -->

			</div>
			<!-- /grid item -->

			<!-- Grid Item -->
			<div class="col-xl-8">

				<!-- Card -->
				<div class="dt-card">

					<!-- Card Header -->
					<div class="dt-card__header mb-4">

						<!-- Card Heading -->
						<div class="dt-card__heading">
							<h3 class="dt-card__title">Recent Tickets</h3>
						</div>
						<!-- /card heading -->

					</div>
					<!-- /card header -->

					<!-- Card Body -->
					<div class="dt-card__body p-0">

						<!-- Widget -->
						<div class="dt-widget dt-widget-hover-bg">
							<!-- Widget Item -->
							<div class="dt-widget__item">

								<!-- Widget Image -->
								<div class="dt-widget__img">
									<!-- Avatar -->
									<img class="dt-avatar size-30"
										 src="<?php echo assets_url('images/user-avatar/mathew.jpg'); ?>" alt="User">
									<!-- /avatar -->
								</div>
								<!-- /widget image -->

								<!-- Widget Info -->
								<div class="dt-widget__info text-truncate">
									<a href="javascript:void(0)" class="dt-widget__title text-truncate">Need
										a quick support on
										setting...</a>
									<p class="dt-widget__subtitle text-truncate">
										<a href="javascript:void(0)">Joy Parish</a> replied 3 days ago
									</p>
								</div>
								<!-- /widget info -->

								<!-- Widget Extra -->
								<div class="dt-widget__extra">
									<span class="badge badge-success badge-circle-animate align-text-top">Critical</span>
								</div>
								<!-- /widget extra -->

							</div>
							<!-- /widgets item -->

							<!-- Widget Item -->
							<div class="dt-widget__item">

								<!-- Widget Image -->
								<div class="dt-widget__img">
									<!-- Avatar -->
									<span class="dt-avatar size-30 bg-info text-white">H</span>
									<!-- /avatar -->
								</div>
								<!-- /widget image -->

								<!-- Widget Info -->
								<div class="dt-widget__info text-truncate">
									<a href="javascript:void(0)" class="dt-widget__title text-truncate">Pre-sale
										query about the
										product...</a>
									<p class="dt-widget__subtitle text-truncate">
										<a href="javascript:void(0)">You</a> replied 2 days ago
									</p>
								</div>
								<!-- /widget info -->

								<!-- Widget Info -->
								<div class="dt-widget__extra">
									<span class="badge badge-danger badge-circle-animate align-text-top">Critical</span>
								</div>
								<!-- /widget info -->

							</div>
							<!-- /widgets item -->

							<!-- Widget Item -->
							<div class="dt-widget__item">

								<!-- Widget Image -->
								<div class="dt-widget__img">
									<!-- Avatar -->
									<img class="dt-avatar size-30"
										 src="<?php echo assets_url('images/user-avatar/domnic-brown.jpg'); ?>"
										 alt="User">
									<!-- /avatar -->
								</div>
								<!-- /widget image -->

								<!-- Widget Info -->
								<div class="dt-widget__info text-truncate">
									<a href="javascript:void(0)" class="dt-widget__title text-truncate">Regarding
										customization
										service...</a>
									<p class="dt-widget__subtitle text-truncate">
										<a href="javascript:void(0)">Joy Parish</a> replied 3 days ago
									</p>
								</div>
								<!-- /widget info -->

								<!-- Widget Info -->
								<div class="dt-widget__extra">
									<span class="badge badge-info badge-circle-animate align-text-top">Critical</span>
								</div>
								<!-- /widget info -->

							</div>
							<!-- /widgets item -->
						</div>
						<!-- /widget -->

					</div>
					<!-- /card body -->

				</div>
				<!-- /card -->

			</div>
			<!-- /grid item -->

			<!-- Grid Item -->
			<div class="col-xl-4">

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
			<div class="col-12">

				<!-- Card -->
				<div class="dt-card">

					<!-- Grid -->
					<div class="row no-gutters">

						<!-- Grid Item -->
						<div class="col-md-3 col-sm-6">
							<!-- Card Header -->
							<div class="dt-card__header mb-3">

								<!-- Card Heading -->
								<div class="dt-card__heading">
									<h3 class="dt-card__title">Revenue Overview</h3>
								</div>
								<!-- /card heading -->

							</div>
							<!-- /card header -->

							<!-- Card Body -->
							<div class="dt-card__body">
								<ul class="dt-indicator mt-lg-6">
									<li class="dt-indicator-item">
										<p class="dt-indicator-title">Europe</p>
										<div class="dt-indicator-item__info" data-fill="55" data-max="100"
											 data-percent="true">
											<div class="dt-indicator-item__fill bg-warning"></div>
											<span class="dt-indicator-item__count ml-3">0</span>
										</div>
									</li>
									<li class="dt-indicator-item">
										<p class="dt-indicator-title">North America</p>
										<div class="dt-indicator-item__info" data-fill="40" data-max="100"
											 data-percent="true">
											<div class="dt-indicator-item__fill bg-primary"></div>
											<span class="dt-indicator-item__count ml-3">0</span>
										</div>
									</li>
									<li class="dt-indicator-item">
										<p class="dt-indicator-title">Japan, South Koria</p>
										<div class="dt-indicator-item__info" data-fill="20" data-max="100"
											 data-percent="true">
											<div class="dt-indicator-item__fill bg-info"></div>
											<span class="dt-indicator-item__count ml-3">0</span>
										</div>
									</li>
									<li class="dt-indicator-item">
										<p class="dt-indicator-title">Other</p>
										<div class="dt-indicator-item__info" data-fill="10" data-max="100"
											 data-percent="true">
											<div class="dt-indicator-item__fill bg-light"></div>
											<span class="dt-indicator-item__count ml-3">0</span>
										</div>
									</li>
								</ul>
							</div>
							<!-- /card body -->
						</div>
						<!-- /grid item -->

						<!-- Grid Item -->
						<div class="col-md-6">

							<!-- Card Body -->
							<div class="dt-card__body pb-0 pb-sm-8">
								<div class="embed-responsive embed-responsive-21by9">
									<div id="overview-map" class="embed-responsive-item"></div>
								</div>
							</div>
							<!-- /card body -->
						</div>
						<!-- /grid item -->

						<!-- Grid Item -->
						<div class="col-md-3 col-sm-6">
							<div class="dt-zone-stats">
								<div class="dt-zone-stats__content">
									<div class="h1 display-4 font-weight-600 mb-1">$25,890</div>
									<span>Total Revenue</span>
								</div>
								<div class="dt-zone-stats__content">

									<div class="row w-100">
										<div class="col-6 text-center border-right">
											<div class="h1 mb-1 font-weight-500">23</div>
											<span>Clients</span>
										</div>
										<div class="col-6 text-center">
											<div class="h1 mb-1 font-weight-500">07</div>
											<span>Countries</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /grid item -->

					</div>
					<!-- /grid -->

				</div>
				<!-- /card -->

			</div>
			<!-- /grid item -->

		</div>
		<!-- /grid -->

	</div>
	<!-- /grid item -->

	<!-- Grid Item -->
	<div class="col-xl-4">

		<!-- Grid Item -->
		<div class="col-xl-12">

			<!-- Card -->
			<div class="dt-card">

				<!-- Card Header -->
				<div class="dt-card__header">

					<!-- Card Heading -->
					<div class="dt-card__heading">
						<h3 class="dt-card__title">Recent Activities</h3>
					</div>
					<!-- /card heading -->

				</div>
				<!-- /card header -->

				<!-- Card Body -->
				<div class="dt-card__body px-0">

					<!-- Widget -->
					<div class="dt-widget dt-widget-hover-bg">
						<h6 class="dt-widget__heading">Today</h6>
						<!-- Widget Item -->
						<div class="dt-widget__item">

							<!-- Widget Image -->
							<div class="dt-widget__img">
								<!-- Avatar -->
								<img class="dt-avatar"
									 src="<?php echo assets_url('images/user-avatar/nikki.jpg'); ?>" alt="User">
								<!-- /avatar -->
							</div>
							<!-- /widget image -->

							<!-- Widget Info -->
							<div class="dt-widget__info">
								<a href="javascript:void(0)" class="dt-widget__title">Mila Alba left a 5
									star review on Albama’s
									House</a>
							</div>
							<!-- /widget info -->

						</div>
						<!-- /widgets item -->

						<!-- Widget Item -->
						<div class="dt-widget__item">

							<!-- Widget Image -->
							<div class="dt-widget__img">
								<!-- Avatar -->
								<img class="dt-avatar"
									 src="<?php echo assets_url('images/user-avatar/amay.jpg'); ?>" alt="User">
								<!-- /avatar -->
							</div>
							<!-- /widget image -->

							<!-- Widget Info -->
							<div class="dt-widget__info">
								<a href="javascript:void(0)" class="dt-widget__title">Callback request
									from Bob Builder for the
									property Dimitri House</a>
							</div>
							<!-- /widget info -->

						</div>
						<!-- /widgets item -->

						<!-- Widget Item -->
						<div class="dt-widget__item">

							<!-- Widget Image -->
							<div class="dt-widget__img">
								<!-- Avatar -->
								<img class="dt-avatar"
									 src="<?php echo assets_url('images/user-avatar/garry-sobars.jpg'); ?>"
									 alt="User">
								<!-- /avatar -->
							</div>
							<!-- /widget image -->

							<!-- Widget Info -->
							<div class="dt-widget__info">
								<a href="javascript:void(0)" class="dt-widget__title">Congratulations to
									Tom Moody for joining 10+
									club</a>
							</div>
							<!-- /widget info -->

						</div>
						<!-- /widgets item -->

						<!-- Widget Item -->
						<div class="dt-widget__item">

							<!-- Widget Image -->
							<div class="dt-widget__img">
								<!-- Avatar -->
								<span class="dt-avatar bg-light-blue text-white">NB</span>
								<!-- /avatar -->
							</div>
							<!-- /widget image -->

							<!-- Widget Info -->
							<div class="dt-widget__info">
								<a href="javascript:void(0)" class="dt-widget__title">Norman Dolphi is
									looking for a house in New
									Jersy, USA</a>
							</div>
							<!-- /widget info -->

						</div>
						<!-- /widgets item -->
					</div>
					<!-- /widget -->

					<!-- Widget -->
					<div class="dt-widget dt-widget-hover-bg">
						<h6 class="dt-widget__heading">Yesterday</h6>

						<!-- Widget Item -->
						<div class="dt-widget__item">

							<!-- Widget Image -->
							<div class="dt-widget__img">
								<!-- Avatar -->
								<span class="dt-avatar bg-light-green text-white">KJ</span>
								<!-- /avatar -->
							</div>
							<!-- /widget image -->

							<!-- Widget Info -->
							<div class="dt-widget__info">
								<a href="javascript:void(0)" class="dt-widget__title">
									Agent Kily Johns has added 7 new photos to the property Albama’s
									House
								</a>
							</div>
							<!-- /widget info -->

						</div>
						<!-- /widgets item -->

						<!-- Widget Item -->
						<div class="dt-widget__item">

							<!-- Widget Image -->
							<div class="dt-widget__img">
								<!-- Avatar -->
								<img class="dt-avatar"
									 src="<?php echo assets_url('images/user-avatar/mathew.jpg'); ?>" alt="User">
								<!-- /avatar -->
							</div>
							<!-- /widget image -->

							<!-- Widget Info -->
							<div class="dt-widget__info">
								<a href="javascript:void(0)" class="dt-widget__title">
									Welcome to a new agent Tom Moody in
									the Company
								</a>
								<ul class="dt-team-list mt-2">
									<li>
										<!-- Avatar -->
										<a class="dt-avatar size-35 min-w-55 rounded"
										   href="javascript:void(0)">
											<img class="img-fluid"
												 src="<?php echo assets_url('images/card/beach.jpeg'); ?>"
												 alt="Beach">
										</a>
										<!-- /avatar -->
									</li>
									<li>
										<!-- Avatar -->
										<a class="dt-avatar size-35 min-w-55 rounded"
										   href="javascript:void(0)">
											<img class="img-fluid"
												 src="<?php echo assets_url('images/card/sunset.jpeg'); ?>"
												 alt="Sunset">
										</a>
										<!-- /avatar -->
									</li>
									<li>
										<!-- Avatar -->
										<a class="border py-2 px-4 rounded text-light-gray d-inline-block"
										   href="javascript:void(0)">
											+5 More
										</a>
										<!-- /avatar -->
									</li>
								</ul>
							</div>
							<!-- /widget info -->

						</div>
						<!-- /widgets item -->

						<!-- Widget Item -->
						<div class="dt-widget__item">

							<!-- Widget Image -->
							<div class="dt-widget__img">
								<!-- Avatar -->
								<span class="dt-avatar bg-orange text-white">OS</span>
								<!-- /avatar -->
							</div>
							<!-- /widget image -->

							<!-- Widget Info -->
							<div class="dt-widget__info">
								<a href="javascript:void(0)" class="dt-widget__title">
									Oliver Shorter is looking for an office
									space in Colorado, USA
								</a>
							</div>
							<!-- /widget info -->

						</div>
						<!-- /widgets item -->
					</div>
					<!-- /widget -->

					<!-- Widget Link -->
					<div class="dt-widget-link">
						<a href="javascript:void(0)" class="text-uppercase font-weight-500">Load
							More</a>
					</div>
					<!-- /widget link -->

				</div>
				<!-- /card body -->

			</div>
			<!-- /card -->

		</div>
		<!-- /grid item -->

		<!-- Grid Item -->
		<div class="col-xl-12">

			<!-- Card -->
			<div class="dt-card dt-card__full-height">

				<!-- Card Header -->
				<div class="dt-card__header mb-6">

					<!-- Card Heading -->
					<div class="dt-card__heading">
						<h3 class="dt-card__title">Currency Calculator</h3>
					</div>
					<!-- /card heading -->

				</div>
				<!-- /card header -->

				<!-- Card Body -->
				<div class="dt-card__body">

					<!-- Form -->
					<form>

						<div class="my-3">
							<span class="d-block f-12 mb-4">1.87 BTC equals</span>
							<h2 class="h1">11466.78 USD</h2>
							<span class="d-block">@ 1 BTC = 6718.72 USD</span>
						</div>

						<div class="form-row mb-10">
							<div class="col-sm-4 col-6">
								<label for="currency-type-1">From</label>
								<select class="custom-select" id="currency-type-1">
									<option selected>BTC</option>
									<option value="1">RPL</option>
									<option value="2">LTE</option>
								</select>
							</div>
							<div class="col-sm-4 col-6">
								<label for="currency-type">To</label>
								<select class="custom-select" id="currency-type">
									<option selected>USD</option>
									<option value="1">Yen</option>
									<option value="2">Dinar</option>
								</select>
							</div>
							<div class="col-sm-4 col-12 mt-5 mt-sm-0">
								<label for="amount">Amount(BTC)</label>
								<input type="text" class="form-control" id="amount" placeholder="Amount">
							</div>
						</div>

						<div class="pt-4">
							<button class="btn btn-primary btn-shadow mr-3" type="submit">Calculate</button>
							<button class="btn btn-outline-default" type="reset">Reset</button>
						</div>
					</form>
					<!-- /form -->

				</div>
				<!-- /card body -->

			</div>
			<!-- /card -->

		</div>
		<!-- /grid item -->

	</div>
	<!-- /grid item -->

</div>
<!-- /grid -->
