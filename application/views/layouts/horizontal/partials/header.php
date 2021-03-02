<!-- Header -->
<header class="dt-header">
	<!-- Notification bar -->
	<div class="dt-header__notification-bar">
		<!-- Custom Container -->
		<div class="dt-container">
			<!-- Notification bar Inner -->
			<div class="dt-header__notification-bar-inner">
				<div class="d-flex align-items-center text-truncate text-warning mr-2">
					<i class="material-icons mr-3 icon-xl">cached</i>
					<span class="text-truncate">A new version is going to release on 21st July. Stay tuned!</span>
				</div>

				<ul class="dt-list dt-list-xl dt-list-bordered text-uppercase">
					<li class="dt-list__item">
						<a href="javascript:void(0)" class="dt-list__link">Login</a>
					</li>
					<li class="dt-list__item">
						<a href="javascript:void(0)" class="dt-list__link">Sign up</a>
					</li>
				</ul>
			</div>
			<!-- /notification bar inner -->
		</div>
		<!-- /custom container -->
	</div>
	<!-- /notification bar -->

	<!-- Header Top -->
	<div class="dt-header__main">
		<!-- Custom Container -->
		<div class="dt-container">

			<!-- Header container -->
			<div class="dt-header__container">

				<!-- Brand -->
				<div class="dt-brand">

					<!-- Brand tool -->
					<div class="dt-brand__tool d-lg-none" data-toggle="main-sidebar">
						<div class="hamburger-inner"></div>
					</div>
					<!-- /brand tool -->

					<!-- Brand logo -->
					<div class="dt-brand__logo">
						<a class="dt-brand__logo-link" href="<?php echo site_url(); ?>">
							<img class="dt-brand__logo-img d-none d-sm-inline-block"
									 src="<?php echo assets_url('images/logo.png'); ?>" alt="Drift">
							<img class="dt-brand__logo-symbol d-sm-none" src="<?php echo assets_url('images/logo-symbol.png'); ?>"
									 alt="Drift">
						</a>
					</div>
					<!-- /brand logo -->

				</div>
				<!-- /brand -->

				<!-- Header toolbar-->
				<div class="dt-header__toolbar">


					<!-- Search box -->
					<form class="search-box d-none d-md-block">
						<div class="input-group rounded-pill">
							<input type="search" class="form-control" placeholder="Search in app..." value="Search here...">
							<span class="search-icon"><i class="material-icons">search</i></span>
							<div class="input-group-append">
								<button class="btn btn-outline-default dropdown-toggle" type="button" data-toggle="dropdown"
												aria-haspopup="true" aria-expanded="false">
									Category
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="javascript:void(0)">Action</a>
									<a class="dropdown-item" href="javascript:void(0)">Another action</a>
									<a class="dropdown-item" href="javascript:void(0)">Something else here</a>
								</div>
							</div>
						</div>
					</form>
					<!-- /search box -->

					<!-- Header Menu Wrapper -->
					<div class="dt-nav-wrapper">
						<!-- Header Menu -->
						<ul class="dt-nav">
							<li class="dt-nav__item d-md-none dt-notification-search dropdown">

								<!-- Dropdown Link -->
								<a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
									 aria-haspopup="true" aria-expanded="false"><i class="material-icons">search</i>
								</a>
								<!-- /dropdown link -->

								<!-- Dropdown Option -->
								<div class="dropdown-menu">

									<!-- Search Box -->
									<form class="search-box right-side-icon">
										<input class="form-control" type="search" placeholder="Search in app...">
										<button type="submit" class="search-icon">
											<i class="material-icons">search</i>
										</button>
									</form>
									<!-- /search box -->

								</div>
								<!-- /dropdown option -->

							</li>

							<li class="dt-nav__item dt-notification-app dropdown">

								<!-- Dropdown Link -->
								<a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
									 aria-haspopup="true" aria-expanded="false">
									<i class="material-icons">apps</i>
								</a>
								<!-- /dropdown link -->

								<!-- Dropdown Option -->
								<div class="dropdown-menu dropdown-menu-right ps-custom-scrollbar">

									<!-- Apps -->
									<ul class="dt-app-list">
										<li class="dt-app-list__item">
											<a href="javascript:void(0)" class="dt-app-list__link">
												<img src="<?php echo assets_url('images/icon/icon-achiever.png'); ?>"
														 alt="Achiever">
												<span class="dt-app-list__text">Achiever</span> </a>
										</li>
										<li class="dt-app-list__item">
											<a href="javascript:void(0)" class="dt-app-list__link">
												<img src="<?php echo assets_url('images/icon/icon-bookmark.png'); ?>"
														 alt="Bookmark">
												<span class="dt-app-list__text">Bookmark</span> </a>
										</li>
										<li class="dt-app-list__item">
											<a href="javascript:void(0)" class="dt-app-list__link">
												<img src="<?php echo assets_url('images/icon/icon-calculator.png'); ?>"
														 alt="Calculator">
												<span class="dt-app-list__text">Calculator</span> </a>
										</li>
										<li class="dt-app-list__item">
											<a href="javascript:void(0)" class="dt-app-list__link">
												<img src="<?php echo assets_url('images/icon/icon-camera.png'); ?>"
														 alt="Camera">
												<span class="dt-app-list__text">Camera</span> </a>
										</li>
										<li class="dt-app-list__item">
											<a href="javascript:void(0)" class="dt-app-list__link">
												<img src="<?php echo assets_url('images/icon/icon-chat.png'); ?>" alt="Chat">
												<span class="dt-app-list__text">Chat</span> </a>
										</li>
										<li class="dt-app-list__item">
											<a href="javascript:void(0)" class="dt-app-list__link">
												<img src="<?php echo assets_url('images/icon/icon-compass.png'); ?>"
														 alt="Compass">
												<span class="dt-app-list__text">Compass</span> </a>
										</li>
										<li class="dt-app-list__item">
											<a href="javascript:void(0)" class="dt-app-list__link">
												<img src="<?php echo assets_url('images/icon/icon-locator.png'); ?>"
														 alt="Locator">
												<span class="dt-app-list__text">Locator</span> </a>
										</li>
										<li class="dt-app-list__item">
											<a href="javascript:void(0)" class="dt-app-list__link">
												<img src="<?php echo assets_url('images/icon/icon-message.png'); ?>"
														 alt="Bottle Message">
												<span class="dt-app-list__text">Message</span> </a>
										</li>
										<li class="dt-app-list__item">
											<a href="javascript:void(0)" class="dt-app-list__link">
												<img src="<?php echo assets_url('images/icon/icon-music.png'); ?>" alt="Music">
												<span class="dt-app-list__text">Music</span> </a>
										</li>
										<li class="dt-app-list__item">
											<a href="javascript:void(0)" class="dt-app-list__link">
												<img src="<?php echo assets_url('images/icon/icon-notes.png'); ?>" alt="Notes">
												<span class="dt-app-list__text">Notes</span> </a>
										</li>
										<li class="dt-app-list__item">
											<a href="javascript:void(0)" class="dt-app-list__link">
												<img src="<?php echo assets_url('images/icon/icon-sender.png'); ?>"
														 alt="Sender">
												<span class="dt-app-list__text">Sender</span> </a>
										</li>
										<li class="dt-app-list__item">
											<a href="javascript:void(0)" class="dt-app-list__link">
												<img src="<?php echo assets_url('images/icon/icon-shopping.png'); ?>"
														 alt="Shopping">
												<span class="dt-app-list__text">Shopping</span> </a>
										</li>
										<li class="dt-app-list__item">
											<a href="javascript:void(0)" class="dt-app-list__link">
												<img src="<?php echo assets_url('images/icon/icon-video-chat.png'); ?>"
														 alt="Video Chat">
												<span class="dt-app-list__text">Video Chat</span> </a>
										</li>
										<li class="dt-app-list__item">
											<a href="javascript:void(0)" class="dt-app-list__link">
												<img src="<?php echo assets_url('images/icon/icon-watch.png'); ?>" alt="watch">
												<span class="dt-app-list__text">Watch</span> </a>
										</li>
										<li class="dt-app-list__item">
											<a href="javascript:void(0)" class="dt-app-list__link">
												<img src="<?php echo assets_url('images/icon/icon-writing.png'); ?>"
														 alt="Writing">
												<span class="dt-app-list__text">Writing</span> </a>
										</li>
									</ul>
									<!-- /apps -->

								</div>
								<!-- /dropdown option -->

							</li>

							<li class="dt-nav__item dt-notification dropdown">

								<!-- Dropdown Link -->
								<a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
									 aria-haspopup="true" aria-expanded="false">
									<i class="material-icons">message</i>
								</a>
								<!-- /dropdown link -->

								<!-- Dropdown Option -->
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
									<!-- Dropdown Menu Header -->
									<div class="dropdown-menu-header">
										<h4 class="title">Messages (6)</h4>

										<div class="ml-auto action-area">
											<a href="javascript:void(0)">Mark All Read</a> <a class="ml-2"
																																				href="javascript:void(0)">
												<i class="icon icon-settings icon-lg text-light-gray"></i></a>
										</div>
									</div>
									<!-- /dropdown menu header -->

									<!-- Dropdown Menu Body -->
									<div class="dropdown-menu-body ps-custom-scrollbar">

										<div class="h-auto">

											<!-- Media -->
											<a href="javascript:void(0)" class="media">

												<!-- Avatar -->
												<img class="dt-avatar mr-3"
														 src="<?php echo assets_url('images/user-avatar/mathew.jpg'); ?>"
														 alt="User">
												<!-- avatar -->

												<!-- Media Body -->
												<span class="media-body text-truncate">
                    <span class="user-name mb-1">Chris Mathew</span>
                    <span class="message text-light-gray text-truncate">Okay.. I will be waiting for your...</span>
                  </span>
												<!-- /media body -->

												<span class="action-area h-100 min-w-80 text-right">
                      <span class="meta-date mb-1">8 hours ago</span>
													<!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                        <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                      </span>
													<!-- /toggle button -->
                    </span> </a>
											<!-- /media -->

											<!-- Media -->
											<a href="javascript:void(0)" class="media">

												<!-- Avatar -->
												<img class="dt-avatar mr-3"
														 src="<?php echo assets_url('images/user-avatar/stella-johnson.jpg'); ?>"
														 alt="User">
												<!-- avatar -->

												<!-- Media Body -->
												<span class="media-body text-truncate">
                    <span class="user-name mb-1">Alia Joseph</span>
                    <span class="message text-light-gray text-truncate">
                      Alia Joseph just joined Messenger! Be the first to send a welcome message or sticker.
                    </span>
                  </span>
												<!-- /media body -->

												<span class="action-area h-100 min-w-80 text-right">
                    <span class="meta-date mb-1">9 hours ago</span>
													<!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                        <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                      </span>
													<!-- /toggle button -->
                  </span> </a>
											<!-- /media -->

											<!-- Media -->
											<a href="javascript:void(0)" class="media">

												<!-- Avatar -->
												<img class="dt-avatar mr-3"
														 src="<?php echo assets_url('images/user-avatar/steve-smith.jpg'); ?>"
														 alt="User">
												<!-- avatar -->

												<!-- Media Body -->
												<span class="media-body text-truncate">
                    <span class="user-name mb-1">Joshua Brian</span>
                    <span class="message text-light-gray text-truncate">
                      Alex will explain you how to keep the HTML structure and all that.
                    </span>
                  </span>
												<!-- /media body -->

												<span class="action-area h-100 min-w-80 text-right">
                    <span class="meta-date mb-1">12 hours ago</span>
													<!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                        <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                      </span>
													<!-- /toggle button -->
                  </span> </a>
											<!-- /media -->

											<!-- Media -->
											<a href="javascript:void(0)" class="media">

												<!-- Avatar -->
												<img class="dt-avatar mr-3"
														 src="<?php echo assets_url('images/user-avatar/domnic-brown.jpg'); ?>"
														 alt="User">
												<!-- avatar -->

												<!-- Media Body -->
												<span class="media-body text-truncate">
                    <span class="user-name mb-1">Domnic Brown</span>
                    <span class="message text-light-gray text-truncate">Okay.. I will be waiting for your...</span>
                  </span>
												<!-- /media body -->

												<span class="action-area h-100 min-w-80 text-right">
                    <span class="meta-date mb-1">yesterday</span>
													<!-- Toggle Button -->
                      <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                        <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                        <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                      </span>
													<!-- /toggle button -->
                  </span> </a>
											<!-- /media -->

										</div>

									</div>
									<!-- /dropdown menu body -->

									<!-- Dropdown Menu Footer -->
									<div class="dropdown-menu-footer">
										<a href="javascript:void(0)" class="card-link"> See All <i
												class="icon icon-arrow-right icon-fw"></i>
										</a>
									</div>
									<!-- /dropdown menu footer -->
								</div>
								<!-- /dropdown option -->

							</li>

							<li class="dt-nav__item dt-notification dropdown">

								<!-- Dropdown Link -->
								<a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
									 aria-haspopup="true" aria-expanded="false">
									<i class="material-icons dt-icon-alert">notifications</i>
								</a>
								<!-- /dropdown link -->

								<!-- Dropdown Option -->
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
									<!-- Dropdown Menu Header -->
									<div class="dropdown-menu-header">
										<h4 class="title">Notifications (9)</h4>

										<div class="ml-auto action-area">
											<a href="javascript:void(0)">Mark All Read</a> <a class="ml-2"
																																				href="javascript:void(0)">
												<i class="icon icon-settings icon-lg text-light-gray"></i> </a>
										</div>
									</div>
									<!-- /dropdown menu header -->

									<!-- Dropdown Menu Body -->
									<div class="dropdown-menu-body ps-custom-scrollbar">

										<div class="h-auto">
											<!-- Media -->
											<a href="javascript:void(0)" class="media">

												<!-- Avatar -->
												<img class="dt-avatar mr-3"
														 src="<?php echo assets_url('images/user-avatar/stella-johnson.jpg'); ?>"
														 alt="User">
												<!-- avatar -->

												<!-- Media Body -->
												<span class="media-body">
                    <span class="message">
                      <span class="user-name">Stella Johnson</span> and <span class="user-name">Chris Harris</span>
                      have birthdays today. Help them celebrate!
                    </span>
                    <span class="meta-date">8 hours ago</span>
                  </span>
												<!-- /media body -->

											</a>
											<!-- /media -->

											<!-- Media -->
											<a href="javascript:void(0)" class="media">

												<!-- Avatar -->
												<img class="dt-avatar mr-3"
														 src="<?php echo assets_url('images/user-avatar/jeson-born.jpg'); ?>"
														 alt="User">
												<!-- avatar -->

												<!-- Media Body -->
												<span class="media-body">
                    <span class="message">
                      <span class="user-name">Jonathan Madano</span> commented on your post.
                    </span>
                    <span class="meta-date">9 hours ago</span>
                  </span>
												<!-- /media body -->

											</a>
											<!-- /media -->

											<!-- Media -->
											<a href="javascript:void(0)" class="media">

												<!-- Avatar -->
												<img class="dt-avatar mr-3"
														 src="<?php echo assets_url('images/user-avatar/selena.jpg'); ?>"
														 alt="User">
												<!-- avatar -->

												<!-- Media Body -->
												<span class="media-body">
                    <span class="message">
                      <span class="user-name">Chelsea Brown</span> sent a video recomendation.
                    </span>
                    <span class="meta-date">
                      <i class="icon icon-play-circle text-primary icon-fw mr-1"></i>
                      13 hours ago
                    </span>
                  </span>
												<!-- /media body -->

											</a>
											<!-- /media -->

											<!-- Media -->
											<a href="javascript:void(0)" class="media">

												<!-- Avatar -->
												<img class="dt-avatar mr-3"
														 src="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg'); ?>"
														 alt="User">
												<!-- avatar -->

												<!-- Media Body -->
												<span class="media-body">
                    <span class="message">
                      <span class="user-name">Alex Dolgove</span> and <span class="user-name">Chris Harris</span>
                      like your post.
                    </span>
                    <span class="meta-date">
                      <i class="icon icon-like text-light-blue icon-fw mr-1"></i>
                      yesterday at 9:30
                    </span>
                  </span>
												<!-- /media body -->

											</a>
											<!-- /media -->
										</div>

									</div>
									<!-- /dropdown menu body -->

									<!-- Dropdown Menu Footer -->
									<div class="dropdown-menu-footer">
										<a href="javascript:void(0)" class="card-link"> See All <i
												class="icon icon-arrow-right icon-fw"></i>
										</a>
									</div>
									<!-- /dropdown menu footer -->
								</div>
								<!-- /dropdown option -->

							</li>
						</ul>
						<!-- /header menu -->

						<!-- Header Menu -->
						<ul class="dt-nav">
							<li class="dt-nav__item dropdown">

								<!-- Dropdown Link -->
								<a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
									 aria-haspopup="true"
									 aria-expanded="false">
									<i class="flag-icon flag-icon-us flag-icon-circle"></i>
								</a>
								<!-- /dropdown link -->

								<!-- Dropdown Option -->
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="javascript:void(0)">
								<span class="d-flex align-items-center">
								<i class="flag-icon flag-icon-in flag-icon-circle mr-3"></i><span>Hi-In</span>
								</span>
									</a>
									<a class="dropdown-item" href="javascript:void(0)">
								<span class="d-flex align-items-center">
								<i class="flag-icon flag-icon-cn flag-icon-circle mr-3"></i><span>Chinese</span>
								</span>
									</a>
									<a class="dropdown-item" href="javascript:void(0)">
								<span class="d-flex align-items-center">
								<i class="flag-icon flag-icon-es flag-icon-circle mr-3"></i><span>Spanish</span>
								</span>
									</a>
								</div>
								<!-- /dropdown option -->

							</li>
						</ul>
						<!-- /header menu -->

						<!-- Header Menu -->
						<ul class="dt-nav">
							<!-- Menu Item -->
							<li class="dt-nav__item dropdown">

								<!-- Dropdown Link -->
								<a href="#" class="dt-action-nav__link dropdown-toggle no-arrow"
									 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<img class="dt-avatar" src="<?php echo assets_url('images/user-avatar/noah-owens.jpg'); ?>"
											 alt="noah-owens">
								</a>
								<!-- /dropdown link -->

								<!-- Dropdown Option -->
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="javascript:void(0)">
						<span class="d-flex align-items-center">
							<i class="material-icons mr-2">person</i>
							<span>Profile</span>
						</span>
									</a>
									<a class="dropdown-item" href="javascript:void(0)">
						<span class="d-flex align-items-center">
							<i class="material-icons mr-2">settings</i>
							<span>Setting</span>
						</span>
									</a>
									<a class="dropdown-item" href="<?php echo site_url('pages/login'); ?>">
						<span class="d-flex align-items-center">
							<i class="material-icons mr-2">login</i>
							<span>Logout</span>
						</span>
									</a>
								</div>
								<!-- /dropdown option -->

							</li>
							<!-- /menu item -->
						</ul>
						<!-- /header menu -->
					</div>
					<!-- Header Menu Wrapper -->

				</div>
				<!-- /header toolbar -->

			</div>
			<!-- /header container -->

		</div>
		<!-- /custom container -->
	</div>
	<!-- /header top -->

	<!-- Header Bottom -->
	<div class="dt-header__navigation d-none d-lg-block">

		<!-- Custom Container -->
		<div class="dt-container">

			<!-- Navbar -->
			<ul class="navbar-nav dt-navbar">
				<!-- Nav Item -->
				<li class="nav-item">
					<a class="nav-link dt-side-nav__arrow" href="javascript:void(0)">
						<span class="nav-text">Dashboards</span>
					</a>

					<!-- Sub-menu -->
					<ul class="sub-menu">
						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url(); ?>" class="nav-link">
								<i class="icon icon-crm icon-fw icon-xl"></i>
								<span class="nav-text">Crm</span>
							</a>
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('main/dashboard/listing'); ?>" class="nav-link">
								<i class="icon icon-list icon-fw icon-xl"></i>
								<span class="nav-text">Listing</span>
							</a>
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('main/dashboard/real_estate'); ?>" class="nav-link">
								<i class="icon icon-company icon-fw icon-xl"></i>
								<span class="nav-text">Real Estate</span>
							</a>
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('main/dashboard/crypto'); ?>" class="nav-link">
								<i class="icon icon-crypto icon-fw icon-xl"></i>
								<span class="nav-text">Crypto</span>
							</a>
						</li>
						<!-- /nav item -->
					</ul>
					<!-- /sub-menu -->
				</li>
				<!-- /nav item -->

				<!-- Nav Item -->
				<li class="nav-item">
					<a class="nav-link dt-side-nav__arrow" href="javascript:void(0)">
						<span class="nav-text">Apps</span>
					</a>

					<!-- Sub-menu -->
					<ul class="sub-menu">
						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('apps/task-manager'); ?>" class="nav-link">
								<i class="icon icon-task-manager icon-fw icon-xl"></i>
								<span class="nav-text">Task App</span>
							</a>
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('apps/mail'); ?>" class="nav-link">
								<i class="icon icon-mail icon-fw icon-xl"></i>
								<span class="nav-text">Mail App</span>
							</a>
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('apps/contact'); ?>" class="nav-link">
								<i class="icon icon-contacts-app icon-fw icon-xl"></i>
								<span class="nav-text">Contacts App</span>
							</a>
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('apps/chat'); ?>" class="nav-link">
								<i class="icon icon-chat-app2 icon-fw icon-xl"></i>
								<span class="nav-text">Chat App</span>
							</a>
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('pages/wall'); ?>" class="nav-link">
								<i class="icon icon-wall icon-fw icon-xl"></i>
								<span class="nav-text">Wall App</span>
							</a>
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('pages/profile'); ?>" class="nav-link">
								<i class="icon icon-profilepage icon-fw icon-xl"></i>
								<span class="nav-text">Profile App</span>
							</a>
						</li>
						<!-- /nav item -->
					</ul>
					<!-- /sub-menu -->
				</li>
				<!-- /nav item -->

				<!-- Nav Item -->
				<li class="nav-item">
					<a class="nav-link dt-side-nav__arrow" href="javascript:void(0)">
						<span class="nav-text">Widgets</span>
					</a>

					<!-- Sub-menu -->
					<ul class="sub-menu">
						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('main/widget/classic'); ?>" class="nav-link">
								<i class="icon icon-components icon-fw icon-xl"></i>
								<span class="nav-text">Classic</span>
							</a>
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('main/widget/modern'); ?>" class="nav-link">
								<i class="icon icon-datatable icon-fw icon-xl"></i>
								<span class="nav-text">Modern</span>
							</a>
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('main/metrics'); ?>" class="nav-link">
								<i class="icon icon-metrics icon-fw icon-xl"></i>
								<span class="nav-text">Metrics</span>
							</a>
						</li>
						<!-- /nav item -->
					</ul>
					<!-- /sub-menu -->
				</li>
				<!-- /nav item -->

				<!-- Nav Item -->
				<li class="nav-item">
					<a class="nav-link dt-side-nav__arrow" href="javascript:void(0)">
						<span class="nav-text">Components</span>
					</a>

					<!-- Sub-menu -->
					<ul class="sub-menu">
						<!-- Nav Item -->
						<li class="nav-item">
							<a href="javascript:void(0)" class="nav-link dt-side-nav__arrow">
								<i class="icon icon-components icon-fw icon-xl"></i>
								<span class="nav-text">General</span>
							</a>

							<!-- Sub-menu -->
							<ul class="sub-menu">
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/buttons'); ?>" class="nav-link">
										<i class="icon icon-button icon-fw icon-xl"></i>
										<span class="nav-text">Button</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/button-group'); ?>" class="nav-link">
										<i class="icon icon-button-group icon-fw icon-xl"></i>
										<span class="nav-text">Button Group</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/input-group'); ?>" class="nav-link">
										<i class="icon icon-input-group icon-fw icon-xl"></i>
										<span class="nav-text">Input Group</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/typography'); ?>" class="nav-link">
										<i class="icon icon-typography icon-fw icon-xl"></i>
										<span class="nav-text">Typography</span>
									</a>
								</li>
								<!-- /nav item -->
							</ul>
							<!-- /sub-menu -->
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="javascript:void(0)" class="nav-link dt-side-nav__arrow">
								<i class="icon icon-components icon-fw icon-xl"></i>
								<span class="nav-text">Navigation</span>
							</a>

							<!-- Sub-menu -->
							<ul class="sub-menu">
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/breadcrumbs'); ?>" class="nav-link">
										<i class="icon icon-breadcrumbs icon-fw icon-xl"></i>
										<span class="nav-text">Breadcrumbs</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/dropdown'); ?>" class="nav-link">
										<i class="icon icon-dropdown icon-fw icon-xl"></i>
										<span class="nav-text">Dropdown</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/navbar'); ?>" class="nav-link">
										<i class="icon icon-navbar icon-fw icon-xl"></i>
										<span class="nav-text">Navbar</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/navs'); ?>" class="nav-link">
										<i class="icon icon-navs-and-tabs icon-fw icon-xl"></i>
										<span class="nav-text">Navs &amp; Tabs</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/pagination'); ?>" class="nav-link">
										<i class="icon icon-pagination icon-fw icon-xl"></i>
										<span class="nav-text">Pagination</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/scrollspy'); ?>" class="nav-link">
										<i class="icon icon-scrollspy icon-fw icon-xl"></i>
										<span class="nav-text">Scrollspy</span>
									</a>
								</li>
								<!-- /nav item -->
							</ul>
							<!-- /sub-menu -->
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="javascript:void(0)" class="nav-link dt-side-nav__arrow">
								<i class="icon icon-components icon-fw icon-xl"></i>
								<span class="nav-text">Data Display</span>
							</a>

							<!-- Sub-menu -->
							<ul class="sub-menu">
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/card'); ?>" class="nav-link">
										<i class="icon icon-card icon-fw icon-xl"></i>
										<span class="nav-text">Card</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/card-group'); ?>" class="nav-link">
										<i class="icon icon-card-group icon-fw icon-xl"></i>
										<span class="nav-text">Card Group</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/carousel'); ?>" class="nav-link">
										<i class="icon icon-carousel icon-fw icon-xl"></i>
										<span class="nav-text">Carousel</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/collapse'); ?>" class="nav-link">
										<i class="icon icon-collapse icon-fw icon-xl"></i>
										<span class="nav-text">Collapse</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/jumbotron'); ?>" class="nav-link">
										<i class="icon icon-jumbotron icon-fw icon-xl"></i>
										<span class="nav-text">Jumbotron</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/list-group'); ?>" class="nav-link">
										<i class="icon icon-list-group icon-fw icon-xl"></i>
										<span class="nav-text">List Group</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/tooltip'); ?>" class="nav-link">
										<i class="icon icon-tooltip icon-fw icon-xl"></i>
										<span class="nav-text">Tooltip</span>
									</a>
								</li>
								<!-- /nav item -->
							</ul>
							<!-- /sub-menu -->
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="javascript:void(0)" class="nav-link dt-side-nav__arrow">
								<i class="icon icon-components icon-fw icon-xl"></i>
								<span class="nav-text">Feedback</span>
							</a>

							<!-- Sub-menu -->
							<ul class="sub-menu">
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/alerts'); ?>" class="nav-link">
										<i class="icon icon-alert icon-fw icon-xl"></i>
										<span class="nav-text">Alerts</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/badges'); ?>" class="nav-link">
										<i class="icon icon-badges icon-fw icon-xl"></i>
										<span class="nav-text">Badges</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/modal'); ?>" class="nav-link">
										<i class="icon icon-modal icon-fw icon-xl"></i>
										<span class="nav-text">Modal</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/popovers'); ?>" class="nav-link">
										<i class="icon icon-popovers icon-fw icon-xl"></i>
										<span class="nav-text">Popovers</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/basic/progress'); ?>" class="nav-link">
										<i class="icon icon-progress-bar icon-fw icon-xl"></i>
										<span class="nav-text">Progress Bar</span>
									</a>
								</li>
								<!-- /nav item -->
							</ul>
							<!-- /sub-menu -->
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="javascript:void(0)" class="nav-link dt-side-nav__arrow">
								<i class="icon icon-components icon-fw icon-xl"></i>
								<span class="nav-text">Tables</span>
							</a>

							<!-- Sub-menu -->
							<ul class="sub-menu">
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/tables/basic-table'); ?>" class="nav-link">
										<i class="icon icon-tables icon-fw icon-xl"></i>
										<span class="nav-text">Basic Table</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('components/tables/data-table'); ?>" class="nav-link">
										<i class="icon icon-datatable icon-fw icon-xl"></i>
										<span class="nav-text">Data Table</span>
									</a>
								</li>
								<!-- /nav item -->
							</ul>
							<!-- /sub-menu -->
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="javascript:void(0)" class="nav-link dt-side-nav__arrow">
								<i class="icon icon-components icon-fw icon-xl"></i>
								<span class="nav-text">Forms</span>
							</a>

							<!-- Sub-menu -->
							<ul class="sub-menu">
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('forms/basic'); ?>" class="nav-link">
										<i class="icon icon-forms-basic icon-fw icon-xl"></i>
										<span class="nav-text">Basic Form</span>
									</a>
								</li>
								<!-- /nav item -->
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('forms/file-upload'); ?>" class="nav-link">
										<i class="icon icon-file-upload icon-fw icon-xl"></i>
										<span class="nav-text">File Upload</span>
									</a>
								</li>
								<!-- /nav item -->
							</ul>
							<!-- /sub-menu -->
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="javascript:void(0)" class="nav-link dt-side-nav__arrow">
								<i class="icon icon-components icon-fw icon-xl"></i>
								<span class="nav-text">Maps</span>
							</a>

							<!-- Sub-menu -->
							<ul class="sub-menu">
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('data-visualization/maps/basic'); ?>" class="nav-link">
										<i class="icon icon-maps icon-fw icon-xl"></i>
										<span class="nav-text">Simple map</span>
									</a>
								</li>
								<!-- /nav item -->

								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('data-visualization/maps/events'); ?>" class="nav-link">
										<i class="icon icon-maps icon-fw icon-xl"></i>
										<span class="nav-text">Events Map</span>
									</a>
								</li>
								<!-- /nav item -->

								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('data-visualization/maps/markers'); ?>" class="nav-link">
										<i class="icon icon-maps icon-fw icon-xl"></i>
										<span class="nav-text">Markers Maps</span>
									</a>
								</li>
								<!-- /nav item -->

								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('data-visualization/maps/geolocation'); ?>" class="nav-link">
										<i class="icon icon-maps icon-fw icon-xl"></i>
										<span class="nav-text">Geo Location Map</span>
									</a>
								</li>
								<!-- /nav item -->

								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('data-visualization/maps/geocoding'); ?>" class="nav-link">
										<i class="icon icon-maps icon-fw icon-xl"></i>
										<span class="nav-text">Geo Coding Map</span>
									</a>
								</li>
								<!-- /nav item -->

								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('data-visualization/maps/overlay'); ?>" class="nav-link">
										<i class="icon icon-maps icon-fw icon-xl"></i>
										<span class="nav-text">Overlay</span>
									</a>
								</li>
								<!-- /nav item -->

								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('data-visualization/maps/overlay-polylines'); ?>" class="nav-link">
										<i class="icon icon-maps icon-fw icon-xl"></i>
										<span class="nav-text">Overlay Polylines</span>
									</a>
								</li>
								<!-- /nav item -->

								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('data-visualization/maps/overlay-polygons'); ?>" class="nav-link">
										<i class="icon icon-maps icon-fw icon-xl"></i>
										<span class="nav-text">Overlay Polygons</span>
									</a>
								</li>
								<!-- /nav item -->

								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('data-visualization/maps/geo-polygons'); ?>" class="nav-link">
										<i class="icon icon-maps icon-fw icon-xl"></i>
										<span class="nav-text">GeoJSON Polygons</span>
									</a>
								</li>
								<!-- /nav item -->

								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('data-visualization/maps/route'); ?>" class="nav-link">
										<i class="icon icon-maps icon-fw icon-xl"></i>
										<span class="nav-text">Map Routes</span>
									</a>
								</li>
								<!-- /nav item -->

								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('data-visualization/maps/advance-route'); ?>" class="nav-link">
										<i class="icon icon-maps icon-fw icon-xl"></i>
										<span class="nav-text">Advance Routes</span>
									</a>
								</li>
								<!-- /nav item -->

								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('data-visualization/maps/data-maps'); ?>" class="nav-link">
										<i class="icon icon-maps icon-fw icon-xl"></i>
										<span class="nav-text">Data Maps</span>
									</a>
								</li>
								<!-- /nav item -->

								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('data-visualization/maps/am-maps'); ?>" class="nav-link">
										<i class="icon icon-maps icon-fw icon-xl"></i>
										<span class="nav-text">Am Maps</span>
									</a>
								</li>
								<!-- /nav item -->
							</ul>
							<!-- /sub-menu -->
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="javascript:void(0)" class="nav-link dt-side-nav__arrow">
								<i class="icon icon-components icon-fw icon-xl"></i>
								<span class="nav-text">Charts</span>
							</a>

							<!-- Sub-menu -->
							<ul class="sub-menu">
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('data-visualization/charts/chartjs'); ?>" class="nav-link">
										<i class="icon icon-charts icon-fw icon-xl"></i>
										<span class="nav-text">ChartJS</span>
									</a>
								</li>
								<!-- /nav item -->

								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('data-visualization/charts/amcharts'); ?>" class="nav-link">
										<i class="icon icon-amchart icon-fw icon-xl"></i>
										<span class="nav-text">Am Charts</span>
									</a>
								</li>
								<!-- /nav item -->
							</ul>
							<!-- /sub-menu -->
						</li>
						<!-- /nav item -->
					</ul>
					<!-- /sub-menu -->
				</li>
				<!-- /nav item -->

				<!-- Nav Item -->
				<li class="nav-item mega-menu">
					<a class="nav-link dt-side-nav__arrow" href="javascript:void(0)">
						<span class="nav-text">Extensions</span>
					</a>

					<!-- Sub-menu -->
					<ul class="sub-menu">
						<!-- Nav Item -->
						<li class="nav-item">
							<!-- Heading -->
							<h3 class="menu-heading">Editors</h3>
							<!-- /heading -->

							<!-- Menus -->
							<ul class="nav-item__inner">
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('extra-components/editors/summernote'); ?>" class="nav-link">
										<i class="icon icon-editor-wysiwyg icon-fw icon-xl"></i>
										<span class="nav-text">Summernote Editor</span>
									</a>
								</li>
								<!-- /nav item -->

								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('extra-components/editors/code-editor'); ?>" class="nav-link">
										<i class="icon icon-editor-code icon-fw icon-xl"></i>
										<span class="nav-text">Code Editor</span>
									</a>
								</li>
								<!-- /nav item -->
							</ul>
							<!-- /menus -->
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<!-- Heading -->
							<h3 class="menu-heading">Pickers</h3>
							<!-- /heading -->

							<!-- Menus -->
							<ul class="nav-item__inner">
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('extra-components/pickers/datetime-picker'); ?>" class="nav-link">
										<i class="icon icon-date-time-picker icon-fw icon-xl"></i>
										<span class="nav-text">Date &amp; Time Picker</span>
									</a>
								</li>
								<!-- /nav item -->

								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('extra-components/pickers/color-picker'); ?>" class="nav-link">
										<i class="icon icon-color-picker icon-fw icon-xl"></i>
										<span class="nav-text">Color Picker</span>
									</a>
								</li>
								<!-- /nav item -->
							</ul>
							<!-- /menus -->
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<!-- Heading -->
							<h3 class="menu-heading">Extras</h3>
							<!-- /heading -->

							<!-- Menus -->
							<ul class="nav-item__inner">
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('extra-components/sweet-alerts'); ?>" class="nav-link">
										<i class="icon icon-sweet-alert icon-fw icon-xl"></i>
										<span class="nav-text">Sweet Alerts</span>
									</a>
								</li>
								<!-- /nav item -->

								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('extra-components/notification-alerts'); ?>" class="nav-link">
										<i class="icon icon-notification-o icon-fw icon-xl"></i>
										<span class="nav-text">Notifications</span>
									</a>
								</li>
								<!-- /nav item -->

								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('extra-components/drag-drop'); ?>" class="nav-link">
										<i class="icon icon-drag-and-drop icon-fw icon-xl"></i>
										<span class="nav-text">Drag &amp; Drop</span>
									</a>
								</li>
								<!-- /nav item -->
							</ul>
							<!-- /menus -->
						</li>
						<!-- /nav item -->
					</ul>
					<!-- /sub-menu -->
				</li>
				<!-- /nav item -->

				<!-- Nav Item -->
				<li class="nav-item">
					<a class="nav-link dt-side-nav__arrow" href="javascript:void(0)">
						<span class="nav-text">Pages</span>
					</a>

					<!-- Sub-menu -->
					<ul class="sub-menu">
						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('pages/login'); ?>" class="nav-link">
								<i class="icon icon-login-page icon-fw icon-xl"></i>
								<span class="nav-text">Login Page</span>
							</a>
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('pages/signup'); ?>" class="nav-link">
								<i class="icon icon-signup-page icon-fw icon-xl"></i>
								<span class="nav-text">Sign Up Page</span>
							</a>
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('pages/forgot-password'); ?>" class="nav-link">
								<i class="icon icon-forgot-pass icon-fw icon-xl"></i>
								<span class="nav-text">Forgot Password</span>
							</a>
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('pages/lock-screen'); ?>" class="nav-link">
								<i class="icon icon-lockscreen icon-fw icon-xl"></i>
								<span class="nav-text">Lock Screen</span>
							</a>
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('pages/blank'); ?>" class="nav-link">
								<i class="icon icon-blankpage icon-fw icon-xl"></i>
								<span class="nav-text">Blank Page</span>
							</a>
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('pages/search'); ?>" class="nav-link">
								<i class="icon icon-searchpage icon-fw icon-xl"></i>
								<span class="nav-text">Search Page</span>
							</a>
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('pages/404'); ?>" class="nav-link">
								<i class="icon icon-error-404 icon-fw icon-xl"></i>
								<span class="nav-text">Error 404</span>
							</a>
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="<?php echo site_url('pages/500'); ?>" class="nav-link">
								<i class="icon icon-error-500 icon-fw icon-xl"></i>
								<span class="nav-text">Error 500</span>
							</a>
						</li>
						<!-- /nav item -->
					</ul>
					<!-- /sub-menu -->
				</li>
				<!-- /nav item -->

				<!-- Nav Item -->
				<li class="nav-item">
					<a class="nav-link dt-side-nav__arrow" href="javascript:void(0)">
						<span class="nav-text">Extra Views</span>
					</a>

					<!-- Sub-menu -->
					<ul class="sub-menu">
						<!-- Nav Item -->
						<li class="nav-item">
							<a href="javascript:void(0)" class="nav-link dt-side-nav__arrow">
								<i class="icon icon-grid icon-fw icon-xl"></i>
								<span class="nav-text">Grid</span>
							</a>

							<!-- Sub-menu -->
							<ul class="sub-menu">
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('extra-views/grids/basic'); ?>" class="nav-link">
										<i class="icon icon-grid icon-fw icon-xl"></i>
										<span class="nav-text">Basic Grid</span>
									</a>
								</li>
								<!-- /nav item -->

								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('extra-views/grids/advanced'); ?>" class="nav-link">
										<i class="icon icon-grid-advance icon-fw icon-xl"></i>
										<span class="nav-text">Advanced Grid</span>
									</a>
								</li>
								<!-- /nav item -->
							</ul>
							<!-- /sub-menu -->
						</li>
						<!-- /nav item -->

						<!-- Nav Item -->
						<li class="nav-item">
							<a href="javascript:void(0)" class="nav-link dt-side-nav__arrow">
								<i class="icon icon-list icon-fw icon-xl"></i>
								<span class="nav-text">List</span>
							</a>

							<!-- Sub-menu -->
							<ul class="sub-menu">
								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('extra-views/lists/basic'); ?>" class="nav-link">
										<i class="icon icon-list icon-fw icon-xl"></i>
										<span class="nav-text">Basic List</span>
									</a>
								</li>
								<!-- /nav item -->

								<!-- Nav Item -->
								<li class="nav-item">
									<a href="<?php echo site_url('extra-views/lists/advanced'); ?>" class="nav-link">
										<i class="icon icon-list-advance icon-fw icon-xl"></i>
										<span class="nav-text">Advanced List</span>
									</a>
								</li>
								<!-- /nav item -->
							</ul>
							<!-- /sub-menu -->
						</li>
						<!-- /nav item -->
					</ul>
					<!-- /sub-menu -->
				</li>
				<!-- /nav item -->
			</ul>
			<!-- /navbar -->

		</div>
		<!-- /custom container -->

	</div>
	<!-- /header bottom -->
</header>
<!-- /header -->
