<div class="dt-login--container">

	<!-- Login Content -->
	<div class="dt-login__content-wrapper">

		<!-- Login Background Section -->
		<div class="dt-login__bg-section">
			<img src="<?php echo assets_url('images/auth/img-login.png'); ?>" alt="...">
		</div>
		<!-- /login background section -->

		<!-- Login Content Section -->
		<div class="dt-login__content">
			<!-- Login Content Header -->
			<div class="dt-login__content-header">
				<!-- Brand logo -->
				<div class="dt-login__logo">
					<a class="dt-brand__logo-link" href="<?php echo site_url(); ?>">
						<img class="dt-brand__logo-img" src="<?php echo assets_url('images/logo.png'); ?>" alt="Drift">
					</a>
				</div>
				<!-- /brand logo -->

				<!-- Login Title -->
				<h1 class="dt-login__title">Login</h1>
				<!-- /login title -->
			</div>
			<!-- /login content header -->

			<!-- Login Content Inner -->
			<div class="dt-login__content-inner">

				<!-- Form -->
				<form action="<?php echo site_url(); ?>">

					<!-- Form Group -->
					<div class="form-group">
						<label class="sr-only" for="email-1">Email address</label>
						<input type="email" class="form-control" id="email-1" aria-describedby="email-1"
							   placeholder="Enter email">
					</div>
					<!-- /form group -->

					<!-- Form Group -->
					<div class="form-group">
						<label class="sr-only" for="password-1">Password</label>
						<input type="password" class="form-control" id="password-1" placeholder="Password">
					</div>
					<!-- /form group -->

					<!-- Form Group -->
					<div class="d-flex align-items-center justify-content-between mb-8">
						<div class="dt-checkbox">
							<input type="checkbox" id="checkbox-1">
							<label class="dt-checkbox-content" for="checkbox-1">Remember me</label>
						</div>
						<a href="<?php echo site_url('pages/forgot-password'); ?>" class="text-secondary">Forgot Password?</a>
					</div>
					<!-- /form group -->

					<!-- Form Group -->
					<div class="form-group d-flex align-items-center justify-content-between">
						<button type="submit" class="btn btn-primary text-uppercase">Sign In</button>
						<a class="d-inline-block ml-3" href="<?php echo site_url('pages/signup'); ?>">Create New Account</a>
					</div>
					<!-- /form group -->

					<!-- Form Group -->
					<div class="d-flex flex-wrap align-items-center">
						<span class="d-inline-block mr-2">Or Login with</span>

						<!-- List -->
						<ul class="dt-list dt-list-sm dt-list-cm-0 ml-auto">
							<li class="dt-list__item">
								<!-- Fab Button -->
								<a href="javascript:void(0)" class="btn dt-fab-btn size-30">
									<i class="icon icon-facebook icon-1x"></i>
								</a>
								<!-- /fab button -->
							</li>

							<li class="dt-list__item">
								<!-- Fab Button -->
								<a href="javascript:void(0)" class="btn dt-fab-btn size-30">
									<i class="icon icon-google-plus icon-1x"></i>
								</a>
								<!-- /fab button -->
							</li>

							<li class="dt-list__item">
								<!-- Fab Button -->
								<a href="javascript:void(0)" class="btn dt-fab-btn size-30">
									<i class="icon icon-github icon-1x"></i>
								</a>
								<!-- /fab button -->
							</li>

							<li class="dt-list__item">
								<!-- Fab Button -->
								<a href="javascript:void(0)" class="btn dt-fab-btn size-30">
									<i class="icon icon-twitter icon-1x"></i>
								</a>
								<!-- /fab button -->
							</li>
						</ul>
						<!-- /list -->
					</div>
					<!-- /form group -->

				</form>
				<!-- /form -->

			</div>
			<!-- /login content inner -->

		</div>
		<!-- /login content section -->

	</div>
	<!-- /login content -->

</div>
