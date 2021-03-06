<?php
$templateLayouts = array(
	array('title' => 'Default', 'active' => 'yes', 'slug' => 'default', 'thumb' => assets_url('images/customizer/layouts/layout1.png')),
	array('title' => 'Minimal', 'active' => 'no', 'slug' => 'minimal', 'thumb' => assets_url('images/customizer/layouts/layout2.png')),
	array('title' => 'Minimal No Header', 'active' => 'no', 'slug' => 'minimal-no-header', 'thumb' => assets_url('images/customizer/layouts/layout3.png')),
	array('title' => 'Modern', 'active' => 'no', 'slug' => 'modern', 'thumb' => assets_url('images/customizer/layouts/layout8.png')),
	array('title' => 'Horizontal Default', 'active' => 'no', 'slug' => 'horizontal', 'thumb' => assets_url('images/customizer/layouts/layout4.png')),
	array('title' => 'Horizontal Dark Header', 'active' => 'no', 'slug' => 'horizontal-dark-header', 'thumb' => assets_url('images/customizer/layouts/layout5.png')),
	array('title' => 'Horizontal Minimal', 'active' => 'no', 'slug' => 'horizontal-minimal', 'thumb' => assets_url('images/customizer/layouts/layout6.png')),
	array('title' => 'Horizontal Top Bar', 'active' => 'no', 'slug' => 'horizontal-top-bar', 'thumb' => assets_url('images/customizer/layouts/layout7.png')),
);

$sidebarBgImages = array(
	array('thumb' => assets_url('images/customizer/sidebar-images/sidebar-1.png'), 'full' => 'assets/images/customizer/sidebar-images/full-images/sidebar-1.jpg'),
	array('thumb' => assets_url('images/customizer/sidebar-images/sidebar-2.png'), 'full' => 'assets/images/customizer/sidebar-images/full-images/sidebar-2.jpg'),
	array('thumb' => assets_url('images/customizer/sidebar-images/sidebar-3.png'), 'full' => 'assets/images/customizer/sidebar-images/full-images/sidebar-3.jpg'),
	array('thumb' => assets_url('images/customizer/sidebar-images/sidebar-4.png'), 'full' => 'assets/images/customizer/sidebar-images/full-images/sidebar-4.jpg'),
	array('thumb' => assets_url('images/customizer/sidebar-images/sidebar-5.png'), 'full' => 'assets/images/customizer/sidebar-images/full-images/sidebar-5.jpg'),
	array('thumb' => assets_url('images/customizer/sidebar-images/sidebar-6.png'), 'full' => 'assets/images/customizer/sidebar-images/full-images/sidebar-6.jpg'),
);

$flatColors = array('pure-violet', 'strong-orange', 'vivid-cyan', 'light-blue', 'dark-lime-green', 'very-dark-violet');
$gradientColors = array('bright-dark-violet', 'cyan-violet', 'vivid-dark-red', 'strong-cyan-dark-blue', 'dark-blue-strong-red', 'moderate-pink-dark-blue');
?>
<!-- Theme Chooser -->
<div class="dt-customizer-toggle">
	<a href="javascript:void(0)" data-toggle="customizer"> <i class="icon icon-customizer animation-customizer"></i> </a>
</div>
<!-- /theme chooser -->

<!-- Customizer Sidebar -->
<aside class="dt-customizer dt-drawer position-right">
	<div class="dt-customizer__inner">

		<!-- Customizer Header -->
		<div class="dt-customizer__header">

			<!-- Customizer Title -->
			<div class="dt-customizer__title">
				<h3 class="mb-0">Theme Settings</h3>
			</div>
			<!-- /customizer title -->

			<!-- Close Button -->
			<button type="button" class="close" data-toggle="customizer">
				<span aria-hidden="true">&times;</span>
			</button>
			<!-- /close button -->

		</div>
		<!-- /customizer header -->

		<!-- Customizer Body -->
		<div class="dt-customizer__body ps-custom-scrollbar">
			<!-- Customizer Body Inner  -->
			<div class="dt-customizer__body-inner">

				<!-- Section -->
				<section>
					<!-- Card -->
					<div class="dt-card">

						<!-- Card Header -->
						<div class="dt-card__header">

							<!-- Card Heading -->
							<div class="dt-card__heading">
								<h3 class="dt-card__title">Theme</h3>
							</div>
							<!-- /card heading -->

							<!-- Card Tools -->
							<div class="dt-card__tools">
								<button class="btn btn-default btn-sm">Reset</button>
							</div>
							<!-- /card tools -->

						</div>
						<!-- /card header -->

						<!-- Card Body -->
						<div class="dt-card__body">
							<!-- List -->
							<ul class="dt-list dt-list-col-4" id="theme-chooser">
								<li class="dt-list__item">
									<div class="choose-option">
										<div class="choose-option__icon" data-theme="light">
											<img class="img-fluid" src="<?php echo assets_url('images/customizer/themes/light.png'); ?>"
													 alt="Light">
										</div>
										<div class="choose-option__name">Light</div>
									</div>
								</li>
								<li class="dt-list__item">
									<div class="choose-option">
										<div class="choose-option__icon" data-theme="semidark">
											<img class="img-fluid" src="<?php echo assets_url('images/customizer/themes/semidark.png'); ?>"
													 alt="Normal">
										</div>
										<div class="choose-option__name">Semi-dark</div>
									</div>
								</li>
								<li class="dt-list__item">
									<div class="choose-option">
										<div class="choose-option__icon" data-theme="dark">
											<img class="img-fluid" src="<?php echo assets_url('images/customizer/themes/dark.png'); ?>"
													 alt="Dark">
										</div>
										<div class="choose-option__name">Dark</div>
									</div>
								</li>
							</ul>
							<!-- /list -->
						</div>
						<!-- /card body -->

					</div>
					<!-- /card -->
				</section>
				<!-- /section -->

				<!-- Section -->
				<section id="theme-style-chooser">
					<!-- Card -->
					<div class="dt-card">

						<!-- Card Header -->
						<div class="dt-card__header">

							<!-- Card Heading -->
							<div class="dt-card__heading">
								<h3 class="dt-card__title">Theme Color</h3>
							</div>
							<!-- /card heading -->

							<!-- Card Tools -->
							<div class="dt-card__tools">
								<button class="btn btn-default btn-sm">Reset</button>
							</div>
							<!-- /card tools -->

						</div>
						<!-- /card header -->

						<!-- Card Body -->
						<div class="dt-card__body pb-1">
							<!-- List -->
							<ul class="dt-list theme-color-options">
								<li class="dt-list__item">
									<span class="dt-color-option" data-style=""></span>
								</li>
								<li class="dt-list__item">
									<span class="dt-color-option" data-style="style-2"></span>
								</li>
								<li class="dt-list__item">
									<span class="dt-color-option" data-style="style-3"></span>
								</li>
								<li class="dt-list__item">
									<span class="dt-color-option" data-style="style-4"></span>
								</li>
								<li class="dt-list__item">
									<span class="dt-color-option" data-style="style-5"></span>
								</li>
								<li class="dt-list__item">
									<span class="dt-color-option" data-style="style-6"></span>
								</li>
								<li class="dt-list__item">
									<span class="dt-color-option" data-style="style-7"></span>
								</li>
								<li class="dt-list__item">
									<span class="dt-color-option" data-style="style-8"></span>
								</li>
								<li class="dt-list__item">
									<span class="dt-color-option" data-style="style-9"></span>
								</li>
								<li class="dt-list__item">
									<span class="dt-color-option" data-style="style-10"></span>
								</li>
							</ul>
							<!-- /list -->
						</div>
						<!-- /card body -->

					</div>
					<!-- /card -->
				</section>
				<!-- /section -->

				<!-- Section -->
				<section>
					<!-- Card -->
					<div class="dt-card">

						<!-- Card Header -->
						<div class="dt-card__header">

							<!-- Card Heading -->
							<div class="dt-card__heading">
								<h3 class="dt-card__title">Navigation Layout</h3>
							</div>
							<!-- /card heading -->

						</div>
						<!-- /card header -->

						<!-- Card Body -->
						<div class="dt-card__body">
							<!-- List -->
							<ul class="dt-list dt-list-col-4">
								<?php foreach ($templateLayouts as $layout): ?>
									<li class="dt-list__item">
										<div class="choose-option <?php if ($layout['active'] == 'yes') echo 'active'; ?>">
											<a href="<?php echo DEMO_LIVE_URL . $layout['slug']; ?>" target="_blank"
												 class="choose-option__icon">
												<img class="img-fluid" src="<?php echo $layout['thumb']; ?>"
														 alt="Layout Default">
											</a>
											<span class="choose-option__name"><?php echo $layout['title']; ?></span>
										</div>
									</li>
								<?php endforeach; ?>
							</ul>
							<!-- /list -->
						</div>
						<!-- /card body -->

					</div>
					<!-- /card -->
				</section>
				<!-- /section -->

				<!-- Section -->
				<section class="d-none d-lg-block" id="layout-chooser">
					<!-- Card -->
					<div class="dt-card">

						<!-- Card Header -->
						<div class="dt-card__header">

							<!-- Card Heading -->
							<div class="dt-card__heading">
								<h3 class="dt-card__title">Container Setting</h3>
							</div>
							<!-- /card heading -->


						</div>
						<!-- /card header -->

						<!-- Card Body -->
						<div class="dt-card__body">
							<!-- List -->
							<ul class="dt-list dt-list-col-4">
								<li class="dt-list__item">
									<div class="choose-option">
										<div class="choose-option__icon" data-layout="framed">
											<img class="img-fluid"
													 src="<?php echo assets_url('images/customizer/layout-containers/framed.png'); ?>"
													 alt="Framed">
										</div>
										<div class="choose-option__name">Framed</div>
									</div>
								</li>
								<li class="dt-list__item">
									<div class="choose-option">
										<div class="choose-option__icon" data-layout="full-width">
											<img class="img-fluid"
													 src="<?php echo assets_url('images/customizer/layout-containers/full-width.png'); ?>"
													 alt="Full Width">
										</div>
										<div class="choose-option__name">Full Width</div>
									</div>
								</li>
								<li class="dt-list__item">
									<div class="choose-option">
										<div class="choose-option__icon" data-layout="boxed">
											<img class="img-fluid"
													 src="<?php echo assets_url('images/customizer/layout-containers/boxed.png'); ?>" alt="Boxed">
										</div>
										<div class="choose-option__name">Boxed</div>
									</div>
								</li>
							</ul>
							<!-- /list -->
						</div>
						<!-- /card body -->

					</div>
					<!-- /card -->
				</section>
				<!-- /section -->

				<section class="d-none d-lg-block" id="sidebar-bg-options">
					<!-- Card -->
					<div class="dt-card">

						<!-- Card Header -->
						<div class="dt-card__header">

							<!-- Card Heading -->
							<div class="dt-card__heading">
								<h3 class="dt-card__title">Sidebar Option</h3>
							</div>
							<!-- /card heading -->

							<!-- Card Tools -->
							<div class="dt-card__tools">
								<button class="btn btn-default btn-sm" id="reset-sidebar-background">Reset</button>
							</div>
							<!-- /card tools -->

						</div>
						<!-- /card header -->

						<!-- Card Body -->
						<div class="dt-card__body">
							<div class="mb-6">
								<div class="text-secondary mb-4">Flat Style</div>

								<!-- List -->
								<ul class="dt-list flat-color-options">
									<?php foreach ($flatColors as $color): ?>
										<li class="dt-list__item">
											<span class="dt-color-option-circle" data-bg-color="<?php echo $color; ?>"></span>
										</li>
									<?php endforeach; ?>
								</ul>
								<!-- /list -->
							</div>
							<div class="mb-6">
								<div class="text-secondary mb-4">Gradient</div>

								<!-- List -->
								<ul class="dt-list gradient-color-options">
									<?php foreach ($gradientColors as $color): ?>
										<li class="dt-list__item">
											<span class="dt-color-option-circle" data-bg-color="<?php echo $color; ?>"></span>
										</li>
									<?php endforeach; ?>
								</ul>
								<!-- /list -->
							</div>

							<div>
								<div class="d-flex align-items-center justify-content-between mb-4">
									<div class="text-secondary">Show Sidebar Image</div>
									<label class="switch switch-sm">
										<input name="toggleDisplaySidebarBgImages" type="checkbox">
										<span class="slider"></span>
									</label>
								</div>

								<div class="collapse" id="collapseSidebarBgImages">
									<ul class="dt-list bg-image-options">
										<?php foreach ($sidebarBgImages as $bgImage): ?>
											<li class="dt-list__item">
												<div class="choose-option">
													<div class="choose-option__icon" data-bg-image="<?php echo $bgImage['full']; ?>">
														<img class="img-fluid" src="<?php echo $bgImage['thumb']; ?>" alt="Sidebar Image">
													</div>
												</div>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>
						</div>
						<!-- /card body -->

					</div>
					<!-- /card -->

				</section>
				<!-- /section -->

				<section class="d-none d-lg-block">
					<!-- Card -->
					<div class="dt-card">

						<!-- Card Header -->
						<div class="dt-card__header">

							<!-- Card Heading -->
							<div class="dt-card__heading">
								<h3 class="dt-card__title">Sidebar size</h3>
							</div>
							<!-- /card heading -->

							<!-- Card Tools -->
							<div class="dt-card__tools">
								<button class="btn btn-default btn-sm">Reset</button>
							</div>
							<!-- /card tools -->

						</div>
						<!-- /card header -->

						<!-- Card Body -->
						<div class="dt-card__body">
							<!-- List -->
							<ul class="dt-list dt-list-col-4">
								<li class="dt-list__item">
									<div class="choose-option">
										<!-- Radio Button -->
										<div class="custom-control custom-radio">
											<input type="radio" id="size-small" name="sidebar_size" class="custom-control-input"
														 value="small">
											<label class="custom-control-label" for="size-small">Small</label>
										</div>
										<!-- /radio button -->
									</div>
								</li>
								<li class="dt-list__item">
									<div class="choose-option">
										<!-- Radio Button -->
										<div class="custom-control custom-radio">
											<input type="radio" id="size-default" name="sidebar_size" class="custom-control-input"
														 value="default"
														 checked>
											<label class="custom-control-label" for="size-default">Default</label>
										</div>
										<!-- /radio button -->
									</div>
								</li>
								<li class="dt-list__item">
									<div class="choose-option">
										<!-- Radio Button -->
										<div class="custom-control custom-radio">
											<input type="radio" id="size-wide" name="sidebar_size" class="custom-control-input" value="wide">
											<label class="custom-control-label" for="size-wide">Wide</label>
										</div>
										<!-- /radio button -->
									</div>
								</li>
							</ul>
							<!-- /list -->
						</div>
						<!-- /card body -->

					</div>
					<!-- /card -->
				</section>
				<!-- /section -->

				<!-- Section -->
				<section class="d-lg-block">
					<h4>RTL Version</h4>

					<a class="btn btn-primary mb-2 btn-block" href="<?php echo RTL_DEMO_LIVE_URL; ?>default"><i
							class="icon-open-new-tab"></i> Try RTL Demo</a>

				</section>
				<!-- /section -->
			</div>
			<!-- /customizer body inner -->
		</div>
		<!-- /customizer body -->

	</div>
</aside>
<!-- /customizer sidebar -->
