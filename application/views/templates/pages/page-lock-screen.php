<div class="dt-login--container dt-lock-screen">

    <!-- Login Content -->
    <div class="dt-login__content-wrapper">

        <!-- Avatar -->
        <img class="dt-avatar size-120" src="<?php echo assets_url('images/user-avatar/amay.jpg');?>" alt="Zakie chain">
        <!-- /avatar -->

        <h2 class="text-white display-1 font-weight-light mb-6">Reece Jacklin</h2>

        <!-- Form -->
        <form action="<?php echo site_url();?>">

            <!-- Form Group -->
            <div class="form-group mb-6">
                <label class="sr-only" for="password">Email address</label>
                <input type="password" class="form-control border-0 shadow-none" id="password"
                       placeholder="Enter you password">
            </div>
            <!-- /form group -->

            <div class="mb-5">
                <a class="d-inline-block text-white f-16" href="<?php echo site_url('pages/forgot-password');?>">I forgot my PIN</a>
            </div>

            <div>
                <a class="d-inline-block text-white f-16" href="<?php echo site_url('pages/login');?>">Sign-in options</a>
            </div>

        </form>
        <!-- /form -->

    </div>
    <!-- /login content -->

</div>