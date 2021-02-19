<?php
$sidebarBgImages = array(
	array('thumb' => assets_url('images/customizer/sidebar-images/sidebar-1.png'), 'full' => 'assets/images/customizer/sidebar-images/full-images/sidebar-1.jpg'),
	array('thumb' => assets_url('images/customizer/sidebar-images/sidebar-2.png'), 'full' => 'assets/images/customizer/sidebar-images/full-images/sidebar-2.jpg'),
	array('thumb' => assets_url('images/customizer/sidebar-images/sidebar-3.png'), 'full' => 'assets/images/customizer/sidebar-images/full-images/sidebar-3.jpg'),
	array('thumb' => assets_url('images/customizer/sidebar-images/sidebar-4.png'), 'full' => 'assets/images/customizer/sidebar-images/full-images/sidebar-4.jpg'),
	array('thumb' => assets_url('images/customizer/sidebar-images/sidebar-5.png'), 'full' => 'assets/images/customizer/sidebar-images/full-images/sidebar-5.jpg'),
	array('thumb' => assets_url('images/customizer/sidebar-images/sidebar-6.png'), 'full' => 'assets/images/customizer/sidebar-images/full-images/sidebar-6.jpg'),
);

$flatColors = array('pure-violet', 'moderate-red', 'vivid-cyan', 'light-blue', 'dark-lime-green', 'very-dark-violet');
$gradientColors = array('bright-dark-violet', 'cyan-violet', 'vivid-dark-red', 'strong-cyan-dark-blue', 'dark-blue-strong-red', 'moderate-pink-dark-blue');
?>
<!-- Theme Chooser -->
<div class="dt-customizer-toggle">
	<a href="javascript:void(0)" data-toggle="customizer"> <i class="icon icon-customizer animation-customizer"></i> </a>
</div>
<!-- /theme chooser -->

<!-- Customizer Sidebar -->
<aside class="dt-customizer dt-drawer position-right open">
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
					<h4>Theme</h4>

					<!-- List -->
					<ul class="dt-list dt-list-sm" id="theme-chooser">
						<li class="dt-list__item">
							<div class="choose-option">
								<a href="javascript:void(0)" class="choose-option__icon" data-theme="light">
									<img src="<?php echo assets_url('images/customizer/themes/light.png'); ?>" alt="Light">
								</a>
								<span class="choose-option__name">Light</span>
							</div>
						</li>
						<li class="dt-list__item">
							<div class="choose-option">
								<a href="javascript:void(0)" class="choose-option__icon" data-theme="semidark">
									<img src="<?php echo assets_url('images/customizer/themes/semidark.png'); ?>" alt="Normal">
								</a>
								<span class="choose-option__name">Semi-dark</span>
							</div>
						</li>
						<li class="dt-list__item">
							<div class="choose-option">
								<a href="javascript:void(0)" class="choose-option__icon" data-theme="dark">
									<img src="<?php echo assets_url('images/customizer/themes/dark.png'); ?>" alt="Dark">
								</a>
								<span class="choose-option__name">Dark</span>
							</div>
						</li>
					</ul>
					<!-- /list -->

				</section>
				<!-- /section -->

				<!-- Section -->
				<section id="theme-style-chooser">
					<h4>Theme Color</h4>

					<!-- List -->
					<ul class="dt-list dt-list-sm dt-color-options">
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

				</section>
				<!-- /section -->

				<!-- Section -->
				<section class="d-none d-lg-block" id="layout-chooser">
					<h4>Container Settings</h4>

					<!-- List -->
					<ul class="dt-list dt-list-sm">
						<li class="dt-list__item">
							<div class="choose-option">
								<a href="javascript:void(0)" class="choose-option__icon" data-layout="framed">
									<img src="<?php echo assets_url('images/customizer/layout-containers/framed.png'); ?>" alt="Framed">
								</a>
								<span class="choose-option__name">Framed</span>
							</div>
						</li>
						<li class="dt-list__item">
							<div class="choose-option">
								<a href="javascript:void(0)" class="choose-option__icon" data-layout="full-width">
									<img src="<?php echo assets_url('images/customizer/layout-containers/full-width.png'); ?>"
											 alt="Full Width">
								</a>
								<span class="choose-option__name">Full Width</span>
							</div>
						</li>
						<li class="dt-list__item">
							<div class="choose-option">
								<a href="javascript:void(0)" class="choose-option__icon" data-layout="boxed">
									<img src="<?php echo assets_url('images/customizer/layout-containers/boxed.png'); ?>" alt="Boxed">
								</a>
								<span class="choose-option__name">Boxed</span>
							</div>
						</li>
					</ul>
					<!-- /list -->

				</section>
				<!-- /section -->

				<!-- Section -->
				<section class="d-none d-lg-block" id="sidebar-layout">
					<h4>Sidebar Layout</h4>

					<!-- List -->
					<ul class="dt-list dt-list-sm">
						<li class="dt-list__item">
							<div class="choose-option">
								<a href="javascript:void(0)" class="choose-option__icon" id="sl-option1" data-value="folded">
									<img src="<?php echo assets_url('images/customizer/sidebar-images/layouts/folded.png'); ?>"
											 alt="Folded">
								</a>
								<span class="choose-option__name">Folded</span>
							</div>
						</li>
						<li class="dt-list__item">
							<div class="choose-option">
								<a href="javascript:void(0)" class="choose-option__icon" id="sl-option2" data-value="default">
									<img src="<?php echo assets_url('images/customizer/sidebar-images/layouts/default.png'); ?>"
											 alt="Default">
								</a>
								<span class="choose-option__name">Default</span>
							</div>
						</li>
						<li class="dt-list__item">
							<div class="choose-option">
								<a href="javascript:void(0)" class="choose-option__icon" id="sl-option3" data-value="drawer">
									<img src="<?php echo assets_url('images/customizer/sidebar-images/layouts/drawer.png'); ?>"
											 alt="Drawer">
								</a>
								<span class="choose-option__name">Drawer</span>
							</div>
						</li>
					</ul>
					<!-- /list -->

				</section>
				<!-- /section -->

				<section class="d-none d-lg-block" id="sidebar-bg-options">
					<div class="d-flex align-items-center justify-content-between mb-n4">
						<h4 class="mb-0">Sidebar Option</h4>
						<button type="button" class="btn btn-light btn-sm text-uppercase">Reset</button>
					</div>

					<div class="py-4">
						<h5>Flat Style</h5>

						<!-- List -->
						<ul class="dt-list dt-list-sm dt-flat-options">
							<?php foreach ($flatColors as $color): ?>
								<li class="dt-list__item">
									<span class="dt-color-option" data-bg-color="<?php echo $color;?>"></span>
								</li>
							<?php endforeach; ?>
						</ul>
						<!-- /list -->

					</div>

					<div class="py-4">
						<h5>Gradient</h5>

						<!-- List -->
						<ul class="dt-list dt-list-sm dt-gradient-options">
							<?php foreach ($gradientColors as $color): ?>
								<li class="dt-list__item">
									<span class="dt-color-option" data-bg-color="<?php echo $color;?>"></span>
								</li>
							<?php endforeach; ?>
						</ul>
						<!-- /list -->

					</div>

					<div class="d-flex align-items-center justify-content-between mb-n4">
						<h5 class="mb-0">Show Sidebar Image</h5>
						<button type="button" class="btn btn-light btn-sm text-uppercase">Reset</button>
					</div>

					<ul class="dt-list dt-list-sm dt-bg-image-options">
						<?php foreach ($sidebarBgImages as $bgImage): ?>
							<li class="dt-list__item">
								<div class="choose-option">
									<a href="javascript:void(0)" class="choose-option__icon"
										 data-bg-image="<?php echo $bgImage['full']; ?>">
										<img src="<?php echo $bgImage['thumb']; ?>"
												 alt="Sidebar Image">
									</a>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>

				</section>
				<!-- /section -->

				<section class="d-none d-lg-block">
					<h4>Sidebar size</h4>

					<!-- Radio Button -->
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="size-small" name="sidebar_size" class="custom-control-input" value="small">
						<label class="custom-control-label" for="size-small">Small</label>
					</div>
					<!-- /radio button -->

					<!-- Radio Button -->
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="size-default" name="sidebar_size" class="custom-control-input" value="default"
									 checked>
						<label class="custom-control-label" for="size-default">Default</label>
					</div>
					<!-- /radio button -->

					<!-- Radio Button -->
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="size-wide" name="sidebar_size" class="custom-control-input" value="wide">
						<label class="custom-control-label" for="size-wide">Wide</label>
					</div>
					<!-- /radio button -->

				</section>
				<!-- /section -->

				<!-- Section -->
				<section>
					<h4>Style</h4>

					<!-- List -->
					<ul class="dt-list dt-list-sm">
						<li class="dt-list__item d-none d-lg-block">
							<div class="choose-option">
								<a href="javascript:void(0)" id="toggle-fixed-sidebar" class="choose-option__icon">
									<img src="<?php echo assets_url('images/customizer/fix-sidebar.png'); ?>" alt="Fix Sidebar">
								</a>
								<span class="choose-option__name">Fix Sidebar</span>
							</div>
						</li>
						<li class="dt-list__item">
							<div class="choose-option">
								<a href="javascript:void(0)" id="toggle-fixed-header" class="choose-option__icon">
									<img src="<?php echo assets_url('images/customizer/fix-header.png'); ?>" alt="Fix Header">
								</a>
								<span class="choose-option__name">Fix Header</span>
							</div>
						</li>
					</ul>
					<!-- /list -->

				</section>
				<!-- /section -->

				<!-- Section -->
				<section>
					<h4>Navigation Layout</h4>

					<!-- List -->
					<ul class="dt-list">
						<li class="dt-list__item">
							<div class="choose-option active">
								<a href="<?php echo DEMO_LIVE_URL; ?>default" target="_blank" class="choose-option__icon">
									<img src="<?php echo assets_url('images/customizer/layouts/layout1.png'); ?>" alt="Layout Default">
								</a>
								<span class="choose-option__name">Default</span>
							</div>
						</li>
						<li class="dt-list__item">
							<div class="choose-option">
								<a href="<?php echo DEMO_LIVE_URL; ?>minimal" target="_blank" class="choose-option__icon">
									<img src="<?php echo assets_url('images/customizer/layouts/layout2.png'); ?>" alt="Layout SAAS">
								</a>
								<span class="choose-option__name">Minimal</span>
							</div>
						</li>
						<li class="dt-list__item">
							<div class="choose-option">
								<a href="<?php echo DEMO_LIVE_URL; ?>minimal-no-header" target="_blank" class="choose-option__icon">
									<img src="<?php echo assets_url('images/customizer/layouts/layout3.png'); ?>" alt="Layout listing">
								</a>
								<span class="choose-option__name">Minimal No Header</span>
							</div>
						</li>
						<li class="dt-list__item">
							<div class="choose-option">
								<a href="<?php echo DEMO_LIVE_URL; ?>modern" target="_blank" class="choose-option__icon">
									<img src="<?php echo assets_url('images/customizer/layouts/layout8.png'); ?>" alt="Layout Intranet">
								</a>
								<span class="choose-option__name">Modern</span>
							</div>
						</li>
						<li class="dt-list__item">
							<div class="choose-option">
								<a href="<?php echo DEMO_LIVE_URL; ?>horizontal" target="_blank" class="choose-option__icon">
									<img src="<?php echo assets_url('images/customizer/layouts/layout4.png'); ?>"
											 alt="Layout Back Office">
								</a>
								<span class="choose-option__name">Horizontal Default</span>
							</div>
						</li>
						<li class="dt-list__item">
							<div class="choose-option">
								<a href="<?php echo DEMO_LIVE_URL; ?>horizontal-dark-header" target="_blank"
									 class="choose-option__icon">
									<img src="<?php echo assets_url('images/customizer/layouts/layout5.png'); ?>"
											 alt="Layout Back Office Minimal">
								</a>
								<span class="choose-option__name">Horizontal Dark Header</span>
							</div>
						</li>
						<li class="dt-list__item">
							<div class="choose-option">
								<a href="<?php echo DEMO_LIVE_URL; ?>horizontal-minimal" target="_blank" class="choose-option__icon">
									<img src="<?php echo assets_url('images/customizer/layouts/layout6.png'); ?>" alt="Layout Modern">
								</a>
								<span class="choose-option__name">Horizontal Minimal</span>
							</div>
						</li>
						<li class="dt-list__item">
							<div class="choose-option">
								<a href="<?php echo DEMO_LIVE_URL; ?>horizontal-top-bar" target="_blank" class="choose-option__icon">
									<img src="<?php echo assets_url('images/customizer/layouts/layout7.png'); ?>" alt="Layout CRM">
								</a>
								<span class="choose-option__name">Horizontal Top Bar</span>
							</div>
						</li>
					</ul>
					<!-- /list -->

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
