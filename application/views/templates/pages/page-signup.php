<div class="dt-login--container">

    <!-- Login Content -->
    <div class="dt-login__content-wrapper">

        <!-- Login Background Section -->
        <div class="dt-login__bg-section">

            <div class="dt-login__bg-content">
                <!-- Login Title -->
                <h1 class="dt-login__title">Sign Up</h1>
                <!-- /login title -->

                <p class="f-16">Sign in and explore in-built apps of Drift.</p>
            </div>


            <!-- Brand logo -->
            <div class="dt-login__logo">
                <a class="dt-brand__logo-link" href="<?php echo site_url();?>">
                    <img class="dt-brand__logo-img" src="<?php echo assets_url('images/logo-white.png');?>" alt="Drift">
                </a>
            </div>
            <!-- /brand logo -->

        </div>
        <!-- /login background section -->

        <!-- Login Content Section -->
        <div class="dt-login__content">

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
                    <div class="dt-checkbox d-block mb-6">
                        <input type="checkbox" id="checkbox-1">
                        <label class="dt-checkbox-content" for="checkbox-1"> by signing up, I accept
                            <a href="javascript:void(0)">Term &amp; Condition</a>
                        </label>
                    </div>
                    <!-- /form group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary text-uppercase">Sign up</button>
                        <span class="d-inline-block ml-4">Or
                            <a class="d-inline-block font-weight-500 ml-3" href="<?php echo site_url('pages/login');?>">Login</a>
                        </span>
                    </div>
                    <!-- /form group -->

                    <!-- Form Group -->
                    <div class="d-flex flex-wrap align-items-center">
                        <span class="d-inline-block mr-2">Or connect with</span>

                        <!-- List -->
                        <ul class="dt-list dt-list-sm dt-list-cm-0 ml-auto">
                            <li class="dt-list__item">
                                <!-- Fab Button -->
                                <a href="javascript:void(0)" class="btn btn-outline-primary dt-fab-btn size-30">
                                    <i class="icon icon-facebook icon-xl"></i>
                                </a>
                                <!-- /fab button -->
                            </li>

                            <li class="dt-list__item">
                                <!-- Fab Button -->
                                <a href="javascript:void(0)" class="btn btn-outline-primary dt-fab-btn size-30">
                                    <i class="icon icon-google-plus icon-xl"></i>
                                </a>
                                <!-- /fab button -->
                            </li>

                            <li class="dt-list__item">
                                <!-- Fab Button -->
                                <a href="javascript:void(0)" class="btn btn-outline-primary dt-fab-btn size-30">
                                    <i class="icon icon-github icon-xl"></i>
                                </a>
                                <!-- /fab button -->
                            </li>

                            <li class="dt-list__item">
                                <!-- Fab Button -->
                                <a href="javascript:void(0)" class="btn btn-outline-primary dt-fab-btn size-30">
                                    <i class="icon icon-twitter icon-xl"></i>
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

            <!-- Login Content Footer -->
            <div class="dt-login__content-footer">
                <a href="<?php echo site_url('pages/forgot-password');?>">Can’t access your account?</a>
            </div>
            <!-- /login content footer -->

        </div>
        <!-- /login content section -->

    </div>
    <!-- /login content -->

</div>