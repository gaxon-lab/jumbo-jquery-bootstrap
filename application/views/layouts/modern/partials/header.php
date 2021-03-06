<!-- Header -->
<header class="dt-header">

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
					   src="<?php echo assets_url('images/logo-white.png'); ?>" alt="Drift">
				  <img class="dt-brand__logo-symbol d-sm-none" src="<?php echo assets_url('images/logo-white-symbol.png'); ?>"
					   alt="Drift">
				</a>
      		</div>
			<!-- /brand logo -->

		</div>
		<!-- /brand -->

		<!-- Header toolbar-->
		<div class="dt-header__toolbar">

			<!-- Search box -->
			<form class="search-box d-none d-lg-block">
				<input type="search" class="form-control rounded-pill" placeholder="Search in app..." value="Search here...">
				<span class="search-icon"><i class="material-icons">search</i></span>
			</form>
			<!-- /search box -->

			<!-- Header Menu Wrapper -->
			<div class="dt-nav-wrapper">
				<!-- Header Menu -->
				<ul class="dt-nav">
					<li class="dt-nav__item d-lg-none dt-notification-search dropdown">

						<!-- Dropdown Link -->
						<a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
							 aria-haspopup="true" aria-expanded="false">
							<i class="material-icons">search</i>
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
			</div>
			<!-- Header Menu Wrapper -->

		</div>
		<!-- /header toolbar -->

	</div>
	<!-- /header container -->

</header>
<!-- /header -->
