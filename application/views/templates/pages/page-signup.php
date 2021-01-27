<div class="dt-login--container">

	<!-- Login Content -->
	<div class="dt-login__content-wrapper">

		<!-- Login Background Section -->
		<div class="dt-login__bg-section">
			<img src="<?php echo assets_url('images/auth/img-signup.png'); ?>" alt="...">
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
				<h1 class="dt-login__title">Create an account</h1>
				<!-- /login title -->
			</div>
			<!-- /login content header -->

			<!-- Login Content Inner -->
			<div class="dt-login__content-inner">

				<!-- Form -->
				<form action="<?php echo site_url(); ?>">

					<!-- Form Group -->
					<div class="form-group">
						<label class="sr-only" for="user-name">Name</label>
						<input type="text" class="form-control" id="user-name" aria-describedby="user-name"
							   placeholder="User Name">
					</div>
					<!-- /form group -->

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
					<div class="form-group mb-5">
						<button type="submit" class="btn btn-primary btn-shadow btn-lg btn-block">Register</button>
					</div>
					<!-- /form group -->

					<!-- Form Group -->
					<div class="d-flex flex-wrap align-items-center">
						<span class="d-inline-block mr-2">Or Sign Up With</span>

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

					<!-- Form Group -->
					<div class="text-center mt-6">
						Have an account? <a href="<?php echo site_url('pages/login'); ?>">Sign In</a>
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
