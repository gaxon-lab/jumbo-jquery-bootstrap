<div class="dt-login--container dt-forgot-password">

    <!-- Login Content -->
    <div class="dt-login__content-wrapper">

        <!-- Login Content Section -->
        <div class="dt-login__content">

            <!-- Login Content Inner -->
            <div class="dt-login__content-inner">

                <!-- Brand logo -->
                <span class="dt-login__logo">
                    <a class="dt-brand__logo-link" href="<?php echo site_url();?>">
                        <img class="dt-brand__logo-img" src="<?php echo assets_url('images/logo-white.png');?>" alt="Drift">
                    </a>
                </span>
                <!-- /brand logo -->

                <!-- Form -->
                <form action="<?php echo site_url('pages/forgot-password'); ?>">

                    <!-- Form Group -->
                    <div class="form-group search-box right-side-icon mw-100">
                        <label class="sr-only" for="email-1">Email address</label>
                        <input type="search" class="form-control" id="email-1" aria-describedby="email-1"
                               placeholder="Enter email">
                        <span class="search-icon"><i class="icon icon-mail icon-lg"></i></span>
                    </div>
                    <!-- /form group -->

                    <p class="mb-8">Don't remember your email? &nbsp;
                        <a class="small" href="javascript:void(0)">Contact Support.</a>
                    </p>

                    <!-- Form Group -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary text-uppercase">Reset Password</button>
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