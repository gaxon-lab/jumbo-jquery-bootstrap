<!-- Grid -->
<div class="row">

    <!-- Grid Item -->
    <div class="col-xl-12">

        <!-- Module -->
        <div class="dt-module">

            <!-- Module Sidebar -->
            <div class="dt-module__sidebar">

                <!-- Sidebar Header -->
                <div class="dt-module__sidebar-header">

                    <!-- App Quick Menu -->
                    <div class="quick-menu-list">

                        <?php if (in_array($this->data['theme'], array('modern', 'back-office', 'back-office-mini'))): ?>
                            <!-- Brand tool -->
                            <a href="javascript:void(0)" class="dt-drawer-handle quick-menu mr-auto d-md-none" data-toggle="main-sidebar">
                                <i class="icon icon-menu"></i>
                            </a>
                            <!-- /brand tool -->

                            <a href="javascript:void(0)" class="quick-menu"
                               data-toggle="mdrawer" data-target="#drawer-search-bar"><i
                                    class="icon icon-search"></i></a>
                        <?php else: ?>
                            <!-- Search Box -->
                            <form class="search-box d-md-none">
                                <input class="form-control" type="search" id="address" name="address"
                                       placeholder="Search in app...">
                                <button type="submit" class="search-icon"><i
                                        class="icon icon-search icon-lg"></i></button>
                            </form>
                            <!-- /search box -->

                            <a href="javascript:void(0)" class="quick-menu d-none d-md-block"
                               data-toggle="mdrawer" data-target="#drawer-search-bar"><i
                                    class="icon icon-search"></i></a>
                        <?php endif; ?>
                            
                        <a href="javascript:void(0)" class="quick-menu" data-toggle="mdrawer"
                           data-target="#drawer-notifications"><i
                                class="icon icon-notification2"></i></a>
                        <a href="javascript:void(0)" class="quick-menu" data-toggle="mdrawer"
                           data-target="#drawer-messages"><i class="icon icon-message"></i></a>
                        <!-- Dropdown -->
                        <div class="quick-menu dropdown">

                            <!-- Dropdown Button -->
                            <a href="#" class="dropdown-toggle no-arrow" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="icon icon-circle-add-o"></i> </a>
                            <!-- /dropdown button -->

                            <!-- Dropdown Menu -->
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Add New
                                    Project</a>
                                <a class="dropdown-item" href="javascript:void(0)">Add New Task</a>
                                <a class="dropdown-item" href="javascript:void(0)">Add New Team
                                    Member</a>
                            </div>
                            <!-- /dropdown menu -->

                        </div>
                        <!-- /dropdown -->
                        
                        <a href="javascript:void(0)" class="quick-menu d-md-none" data-toggle="msidebar-content">
                            <?php if (in_array($this->data['theme'], array('modern', 'back-office', 'back-office-mini'))): ?>
                                <i class="icon icon-vertical-more"></i>
                            <?php else: ?>
                                <i class="icon icon-menu"></i>
                            <?php endif; ?>
                        </a>
                    </div>
                    <!-- /app quick menu -->

                </div>
                <!-- /sidebar header -->

                <!-- Sidebar Menu -->
                <div class="dt-module__sidebar-content pt-md-7 ps-custom-scrollbar">

                    <!-- Sidebar Navigation -->
                    <ul class="dt-module-side-nav">

                        <!-- Menu Header -->
                        <li class="dt-module-side-nav__header">
                            <span class="dt-module-side-nav__text">QUICK MENU</span>
                        </li>
                        <!-- /menu header -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item active">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <i class="icon icon-dashboard icon-fw icon-lg"></i>
                                <span class="dt-module-side-nav__text">Dashboard</span> </a>
                        </li>
                        <!-- /menu item -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <i class="icon icon-description icon-fw icon-lg"></i>
                                <span class="dt-module-side-nav__text">My Tasks</span> </a>
                        </li>
                        <!-- /menu item -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <i class="icon icon-users icon-fw icon-lg"></i>
                                <span class="dt-module-side-nav__text">My Watchlist</span> </a>
                        </li>
                        <!-- /menu item -->

                        <!-- Menu Header -->
                        <li class="dt-module-side-nav__header">
                            <span class="dt-module-side-nav__text">PROJECTS</span>
                        </li>
                        <!-- /menu header -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <span class="dt-module-side-nav__text">Drift WP Theme</span> </a>
                        </li>
                        <!-- /menu item -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <span class="dt-module-side-nav__text">Chatbull App</span> </a>
                        </li>
                        <!-- /menu item -->

                    </ul>
                    <!-- /sidebar navigation -->

                    <!-- Contacts -->
                    <div class="dt-contacts contacts-list">

                        <!-- Contact Heading -->
                        <h6 class="dt-contact__heading text-uppercase mb-3">Team</h6>
                        <!-- /contact heading -->

                        <div class="action-area">
                            <ul class="dt-team-list">
                                <li>
                                    <!-- Avatar -->
                                    <a class="dt-avatar size-30" href="javascript:void(0)"
                                       data-hover="thumb-card"
                                       data-thumb="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>"
                                       data-name="Steve Smith">
                                        <img src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>"
                                             alt="Steve Smith"> </a>
                                    <!-- /avatar -->
                                </li>
                                <li>
                                    <!-- Avatar -->
                                    <a class="dt-avatar size-30" href="javascript:void(0)"
                                       data-hover="thumb-card"
                                       data-thumb="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg');?>"
                                       data-name="Alex Dolgove">
                                        <img src="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg');?>"
                                             alt="Alex Dolgove"> </a>
                                    <!-- /avatar -->
                                </li>
                                <li>
                                    <!-- Avatar -->
                                    <a class="dt-avatar size-30" href="javascript:void(0)"
                                       data-hover="thumb-card"
                                       data-thumb="<?php echo assets_url('images/user-avatar/kemroon-white.jpg');?>"
                                       data-name="Kemroon">
                                        <img src="<?php echo assets_url('images/user-avatar/kemroon-white.jpg');?>"
                                             alt="Kemroon"> </a>
                                    <!-- /avatar -->
                                </li>
                                <li>
                                    <!-- Avatar -->
                                    <a class="dt-avatar size-30" href="javascript:void(0)"
                                       data-hover="thumb-card"
                                       data-thumb="<?php echo assets_url('images/user-avatar/man-3.jpg');?>"
                                       data-name="Reece Jacklin">
                                        <img src="<?php echo assets_url('images/user-avatar/man-3.jpg');?>"
                                             alt="Reece Jacklin"> </a>
                                    <!-- /avatar -->
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- contacts -->

                </div>
                <!-- /sidebar Menu -->

            </div>
            <!-- /module sidebar -->

            <!-- Module Container -->
            <div class="dt-module__container">

                <!-- Module Header -->
                <div class="dt-module__header">

                    <!-- Back -->
                    <a href="<?php echo site_url('apps/task-manager'); ?>" class="text-primary"><i
                            class="icon icon-arrow-left icon-fw icon-1x"></i><span
                            class="display-6 align-middle ml-1">Back</span></a>
                    <!-- /back -->

                    <!-- Title -->
                    <div class="mx-auto text-center">
                        <h3 class="dt-module__title">Chatbull App</h3>
                        <i class="icon icon-horizontal-more icon-xl"></i>
                    </div>
                    <!-- Title -->

                </div>
                <!-- /module header -->

                <!-- Module Content -->
                <div class="dt-module__content ps-custom-scrollbar">

                    <!-- Module Content Inner -->
                    <div class="dt-module__content-inner">

                        <div class="d-flex flex-wrap align-items-center">
                            <button type="button" class="btn btn-outline-dark btn-sm mb-7 mr-5"
                                    data-toggle="button"
                                    aria-pressed="false">
                                <i class="icon icon-check icon-fw mr-1"></i> Mark As Done
                            </button>

                            <!-- Dropdown -->
                            <div class="dropdown mb-7 mr-6">
                                <!-- Dropdown Button -->
                                <button class="btn btn-outline-dark btn-sm dropdown-toggle"
                                        type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="true">
                                    <i class="icon icon-tag icon-fw mr-1"></i> Label
                                </button>
                                <!-- /dropdown button -->

                                <!-- Dropdown Menu -->
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                        action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Something
                                        else here</a>
                                </div>
                                <!-- /dropdown menu -->
                            </div>
                            <!-- /dropdown -->

                            <!-- Calender -->
                            <a href="javascript:void(0)" class="text-primary d-inline-block mb-7 mr-6"
                               id="date-time-picker-1"
                               data-target-input="nearest">
                                <div class="dt-avatar-wrapper" data-target="#date-time-picker-1"
                                     data-toggle="datetimepicker">
                                    <span class="dt-avatar dt-avatar__outline size-35">
                                        <i class="icon icon-calendar icon-fw"></i>
                                    </span> <span class="dt-avatar-info">
                                        <span class="dt-avatar-name">13 July, 18</span>
                                    </span>
                                </div>
                            </a>
                            <!-- /calender -->

                            <!-- Dropdown -->
                            <div class="dropdown mb-7">
                                <!-- Dropdown Link -->
                                <a href="#"
                                   class="dropdown-toggle no-arrow dt-avatar-wrapper text-primary"
                                   data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <img class="dt-avatar size-35"
                                         src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>"
                                         alt="Reece Jacklin">
                                    <span class="dt-avatar-info">
                                        <span class="dt-avatar-name">Reece Jacklin</span>
                                    </span>
                                </a>
                                <!-- /dropdown link -->

                                <!-- Dropdown Option -->
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <span class="dt-avatar-wrapper">
                                            <img class="dt-avatar size-30" src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>"
                                                 alt="Steve Smith">
                                            <span class="dt-avatar-info">
                                                <span class="dt-avatar-name">Steve Smith</span>
                                            </span>
                                        </span> </a> <a class="dropdown-item" href="javascript:void(0)">
                                        <span class="dt-avatar-wrapper">
                                            <img class="dt-avatar size-30" src="<?php echo assets_url('images/user-avatar/jimmy-jo.jpg');?>" alt="Jimmy Jo">
                                            <span class="dt-avatar-info">
                                                <span class="dt-avatar-name">Jimmy Jo</span>
                                            </span>
                                        </span> </a> <a class="dropdown-item" href="javascript:void(0)">
                                        <span class="dt-avatar-wrapper">
                                            <img class="dt-avatar size-30" src="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg');?>"
                                                 alt="Alex Dolgove">
                                            <span class="dt-avatar-info">
                                                <span class="dt-avatar-name">Alex Dolgove</span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                                <!-- /dropdown option -->

                            </div>
                            <!-- /dropdown -->

                            <!-- Dropdown -->
                            <div class="dropdown mb-7 ml-auto">
                                <a class="dropdown-toggle no-arrow dt-avatar dt-avatar__outline size-30"
                                   href="#"
                                   data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <i class="icon icon-vertical-more icon-fw text-light-gray"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                        action</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Something
                                        else here</a>
                                </div>
                            </div>
                            <!-- /dropdown -->
                        </div>

                        <h2 class="display-4">Vertical layout with minimized and drawer style</h2>

                        <!-- Badges -->
                        <div class="badge-group mb-5">
                            <span class="badge bg-dark-blue text-white">Layout</span>
                            <span class="badge badge-danger">Priority</span>
                        </div>
                        <!-- /badges -->

                        <!-- Form -->
                        <form>

                            <!-- Text Area -->
                            <div class="form-group d-flex">
                                <i class="icon icon-forms-advanced mt-2 mr-1"></i>
                                <textarea class="form-control border-0 shadow-none bg-focus"
                                          rows="2"
                                          placeholder="Description"></textarea>
                            </div>
                            <!-- /text area -->

                        </form>
                        <!-- /form -->

                        <!-- Separator -->
                        <hr class="my-7">
                        <!-- /separator -->

                        <a class="d-inline-block mb-6 text-decoration-underline"
                           href="javascript:void(0)"> +5 Previous messages </a>

                        <!-- Media -->
                        <div class="media mb-6">

                            <!-- Avatar -->
                            <img class="dt-avatar size-25 mr-4"
                                 src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>" alt="User">
                            <!-- avatar -->

                            <!-- Media Body -->
                            <div class="media-body">
                                <h5 class="text-light-gray mb-1">Reece Jacklin <span
                                        class="d-inline-block f-12 ml-2">17 June</span>
                                </h5>
                                <p class="mb-0 text-primary">Team is currently working on graphic
                                    design. One of the PSD is almost finalized.</p>
                            </div>
                            <!-- /media body -->

                        </div>
                        <!-- /media -->

                        <!-- Media -->
                        <div class="media mb-6">

                            <!-- Avatar -->
                            <img class="dt-avatar size-25 mr-4"
                                 src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>" alt="User">
                            <!-- avatar -->

                            <!-- Media Body -->
                            <div class="media-body">
                                <h5 class="text-light-gray mb-1">Reece Jacklin <span
                                        class="d-inline-block f-12 ml-2">2 days ago</span></h5>
                                <p class="mb-0 text-primary">Join is currently working on graphic
                                    design.</p>
                            </div>
                            <!-- /media body -->

                        </div>
                        <!-- /media -->

                        <!-- Media -->
                        <div class="media mb-6">

                            <!-- Avatar -->
                            <img class="dt-avatar size-25 mr-4"
                                 src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>" alt="User">
                            <!-- avatar -->

                            <!-- Media Body -->
                            <div class="media-body">
                                <h5 class="text-light-gray mb-1">Reece Jacklin <span
                                        class="d-inline-block f-12 ml-2">2 days ago</span></h5>
                                <p class="mb-0 text-primary">One of the PSD is almost finalized. Join
                                    is currently.</p>
                            </div>
                            <!-- /media body -->

                        </div>
                        <!-- /media -->

                    </div>
                    <!-- /module content inner -->

                </div>
                <!-- /module content -->

                <!-- Comment Box -->
                <div class="add-comment-box">

                    <!-- Action Tools -->
                    <div class="action-tools">
                        <button class="btn btn-primary dt-fab-btn" type="button">
                            <i class="icon icon-send-new icon-xl"></i>
                        </button>

                        <div class="dt-fab-btn dt-attachment-btn size-30">
                            <input type="file"> <i class="icon icon-attach-v"></i>
                        </div>
                    </div>
                    <!-- /action tools -->

                    <!-- Media -->
                    <div class="media">
                        <!-- Avatar -->
                        <img class="dt-avatar mr-2" src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>"
                             alt="Steve Smith">
                        <!-- /avatar -->

                        <!-- Media Body -->
                        <div class="media-body">

                            <!-- Text Area -->
                            <textarea class="form-control border-0 shadow-none bg-focus" rows="1"
                                      placeholder="Write your comment..."></textarea>
                            <!-- /text area -->

                        </div>
                        <!-- /media body -->
                    </div>
                    <!-- /media -->

                </div>
                <!-- /comment box -->

            </div>
            <!-- /module container -->

            <!-- Module Drawer -->
            <div class="dt-module__drawer dt-drawer position-left">

                <!-- Module Drawer Inner -->
                <div class="dt-module__drawer-inner">

                    <div class="dt-module__drawer-header">
                        <a href="javascript:void(0)" class="d-inline-block" data-dismiss="mdrawer">
                            <i class="icon icon-arrow-long-left icon-2x mr-3"></i> <span
                                class="align-middle">Back</span> </a>
                    </div>

                    <!-- Actionable Drawer -->
                    <div class="dt-actionable-drawer">

                        <!-- Menu Bar -->
                        <div class="dt-action-bar">

                            <!-- Action Menu -->
                            <ul class="dt-action-nav">

                                <!-- Menu Item -->
                                <li class="dt-action-nav__item">
                                    <a href="javascript:void(0)" class="dt-action-nav__link"
                                       data-switch="mdrawer" data-target="#drawer-notifications">
                                        <i class="icon icon-notification2 icon-fw"></i> </a>
                                </li>
                                <!-- /menu item -->

                                <!-- Menu Item -->
                                <li class="dt-action-nav__item">
                                    <a href="javascript:void(0)" class="dt-action-nav__link"
                                       data-switch="mdrawer" data-target="#drawer-messages">
                                        <i class="icon icon-message icon-fw"></i> </a>
                                </li>
                                <!-- /menu item -->

                                <!-- Menu Item -->
                                <li class="dt-action-nav__item">
                                    <a href="javascript:void(0)" class="dt-action-nav__link"
                                       data-switch="mdrawer" data-target="#drawer-search-bar">
                                        <i class="icon icon-search icon-fw"></i> </a>
                                </li>
                                <!-- /menu item -->

                                <!-- Menu Item -->
                                <li class="dt-action-nav__item dropdown">
                                    <!-- Dropdown Button -->
                                    <a href="#" class="dropdown-toggle no-arrow dt-action-nav__link"
                                       data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                        <i class="icon icon-circle-add-o"></i> </a>
                                    <!-- /dropdown button -->

                                    <!-- Dropdown Menu -->
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0)">Add New
                                            Project</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Add New
                                            Task</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Add New
                                            Team Member</a>
                                    </div>
                                    <!-- /dropdown menu -->
                                </li>
                                <!-- /menu item -->

                            </ul>
                            <!-- /action menu -->

                        </div>
                        <!-- /menu bar -->

                        <!-- Drawer Content Area -->
                        <div class="dt-action-content-wrapper ps-custom-scrollbar">

                            <div class="dt-action-content">

                                <!-- Search -->
                                <div class="dt-notification fade" id="drawer-search-bar">
                                    <!-- Search Box -->
                                    <form class="search-box right-side-icon mw-100 mb-8">
                                        <input class="form-control form-control-lg" id="address-1"
                                               name="address-1" placeholder="Search in app..."
                                               type="search">
                                        <button type="submit" class="search-icon"><i
                                                class="icon icon-search icon-lg"></i></button>
                                    </form>
                                    <!-- /search box -->

                                    <h4>Recently Viewed</h4>

                                    <!-- Search Result-->
                                    <div class="search-result">
                                        <a href="javascript:void(0)" class="dt-avatar-wrapper">
                                            <!-- Avatar -->
                                            <span class="dt-avatar bg-primary text-white font-italic">PHP</span>
                                            <!-- /avatar -->

                                            <!-- Avatar Info -->
                                            <span class="dt-avatar-info">
                                                <span class="dt-avatar-name">Chat Bull</span>
                                                <span class="f-12">Example Web</span>
                                            </span>
                                            <!-- /avatar info -->

                                        </a>
                                    </div>
                                    <!-- /search result-->

                                    <!-- Search Result-->
                                    <div class="search-result">
                                        <a href="javascript:void(0)" class="dt-avatar-wrapper">
                                            <!-- Avatar -->
                                            <span class="dt-avatar bg-primary text-white font-italic">Ant</span>
                                            <!-- /avatar -->

                                            <!-- Avatar Info -->
                                            <span class="dt-avatar-info">
                                                <span class="dt-avatar-name">Flexile</span>
                                                <span class="f-12">Example Web</span>
                                            </span>
                                            <!-- /avatar info -->

                                        </a>
                                    </div>
                                    <!-- /search result-->

                                    <!-- Search Result-->
                                    <div class="search-result">
                                        <a href="javascript:void(0)" class="dt-avatar-wrapper">
                                            <!-- Avatar -->
                                            <span class="dt-avatar bg-primary text-white font-italic">React</span>
                                            <!-- /avatar -->

                                            <!-- Avatar Info -->
                                            <span class="dt-avatar-info">
                                                <span class="dt-avatar-name">Admin Template</span>
                                                <span class="f-12">Example Web</span>
                                            </span>
                                            <!-- /avatar info -->

                                        </a>
                                    </div>
                                    <!-- /search result-->

                                </div>
                                <!-- /search -->

                                <!-- Notification -->
                                <div class="dt-notification fade" id="drawer-notifications">

                                    <div class="d-flex align-items-center mb-6">
                                        <h5 class="mb-0">Notifications (7)</h5>

                                        <div class="ml-auto action-area">
                                            <a href="javascript:void(0)">Mark All Read</a>

                                            <!-- Dropdown -->
                                            <span class="dropdown ml-2 d-inline-block">
                                                <a class="dropdown-toggle no-arrow" href="#" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon icon-settings icon-lg text-light-gray"></i>
                                                </a>

                                                <span class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                        <i class="icon icon-editors icon-fw"></i>
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                        <i class="icon icon-contacts icon-fw"></i>
                                                        Contact List</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                        <i class="icon icon-heart icon-fw"></i>
                                                        Favourite List
                                                    </a>
                                                </span>
                                            </span>
                                            <!-- /dropdown -->

                                        </div>
                                    </div>

                                    <!-- Media -->
                                    <a href="javascript:void(0)" class="media">

                                        <!-- Avatar -->
                                        <img class="dt-avatar mr-3"
                                             src="<?php echo assets_url('images/user-avatar/stella-johnson.jpg');?>"
                                             alt="User">
                                        <!-- avatar -->

                                        <!-- Media Body -->
                                        <span class="media-body">
                                            <span class="message">
                                                <span class="user-name">Stella Johnson</span> and <span
                                                    class="user-name">Chris Harris</span>
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
                                             src="<?php echo assets_url('images/user-avatar/jeson-born.jpg');?>"
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
                                             src="<?php echo assets_url('images/user-avatar/selena.jpg');?>" alt="User">
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
                                             src="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg');?>"
                                             alt="User">
                                        <!-- avatar -->

                                        <!-- Media Body -->
                                        <span class="media-body">
                                            <span class="message">
                                                <span class="user-name">Alex Dolgove</span> and <span
                                                    class="user-name">Chris Harris</span>
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

                                    <!-- Media -->
                                    <a href="javascript:void(0)" class="media">

                                        <!-- Avatar -->
                                        <img class="dt-avatar mr-3"
                                             src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>" alt="User">
                                        <!-- avatar -->

                                        <!-- Media Body -->
                                        <span class="media-body">
                                            <span class="message">
                                                <span class="user-name">Amay Mathur</span> and <span
                                                    class="user-name">Domnic Harris</span>
                                                comment your post.
                                            </span>
                                            <span class="meta-date">
                                                <i class="icon icon-message icon-fw mr-1"></i>
                                                yesterday at 9:30
                                            </span>
                                        </span>
                                        <!-- /media body -->

                                    </a>
                                    <!-- /media -->

                                    <!-- Media -->
                                    <a href="javascript:void(0)" class="media">

                                        <!-- Avatar -->
                                        <img class="dt-avatar mr-3"
                                             src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>"
                                             alt="User">
                                        <!-- avatar -->

                                        <!-- Media Body -->
                                        <span class="media-body">
                                            <span class="message">
                                                <span class="user-name">Steve Smith</span> and <span class="user-name">Jimmy</span>
                                                inviting on our page.
                                            </span>
                                            <span class="meta-date">
                                                Monday at 18:30
                                            </span>
                                        </span>
                                        <!-- /media body -->

                                    </a>
                                    <!-- /media -->

                                    <!-- Media -->
                                    <a href="javascript:void(0)" class="media">

                                        <!-- Avatar -->
                                        <img class="dt-avatar mr-3"
                                             src="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg');?>"
                                             alt="User">
                                        <!-- avatar -->

                                        <!-- Media Body -->
                                        <span class="media-body">
                                            <span class="message">
                                                <span class="user-name">Alex Dolgove</span> and <span
                                                    class="user-name">Chris Harris</span>
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
                                <!-- /notification -->

                                <!-- Messages -->
                                <div class="dt-notification fade" id="drawer-messages">
                                    <div class="d-flex align-items-center mb-6">
                                        <h5 class="mb-0">Messages (5)</h5>

                                        <div class="ml-auto action-area">
                                            <a href="javascript:void(0)">Mark All Read</a>

                                            <!-- Dropdown -->
                                            <span class="dropdown ml-2 d-inline-block">
                                                <a class="dropdown-toggle no-arrow" href="#" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon icon-settings icon-lg text-light-gray"></i>
                                                </a>

                                                <span class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                        <i class="icon icon-editors icon-fw"></i>
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                        <i class="icon icon-contacts icon-fw"></i>
                                                        Contact List</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                        <i class="icon icon-heart icon-fw"></i>
                                                        Favourite List
                                                    </a>
                                                </span>
                                            </span>
                                            <!-- /dropdown -->

                                        </div>
                                    </div>

                                    <!-- Media -->
                                    <a href="javascript:void(0)" class="media">

                                        <!-- Avatar -->
                                        <img class="dt-avatar mr-3"
                                             src="<?php echo assets_url('images/user-avatar/mathew.jpg');?>" alt="User">
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
                                            <span class="toggle-button" data-toggle="tooltip" data-placement="left"
                                                  title="Mark as read">
                                                <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                                                <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                                            </span>
                                            <!-- /toggle button -->
                                        </span>
                                    </a>
                                    <!-- /media -->

                                    <!-- Media -->
                                    <a href="javascript:void(0)" class="media">

                                        <!-- Avatar -->
                                        <img class="dt-avatar mr-3"
                                             src="<?php echo assets_url('images/user-avatar/stella-johnson.jpg');?>"
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
                                            <span class="toggle-button" data-toggle="tooltip" data-placement="left"
                                                  title="Mark as read">
                                                <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                                                <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                                            </span>
                                            <!-- /toggle button -->
                                        </span>
                                    </a>
                                    <!-- /media -->

                                    <!-- Media -->
                                    <a href="javascript:void(0)" class="media">

                                        <!-- Avatar -->
                                        <img class="dt-avatar mr-3"
                                             src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>"
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
                                            <span class="toggle-button" data-toggle="tooltip" data-placement="left"
                                                  title="Mark as read">
                                                <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                                                <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                                            </span>
                                            <!-- /toggle button -->
                                        </span>
                                    </a>
                                    <!-- /media -->

                                    <!-- Media -->
                                    <a href="javascript:void(0)" class="media">

                                        <!-- Avatar -->
                                        <img class="dt-avatar mr-3"
                                             src="<?php echo assets_url('images/user-avatar/domnic-brown.jpg');?>"
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
                                            <span class="toggle-button" data-toggle="tooltip" data-placement="left"
                                                  title="Mark as read">
                                                <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                                                <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                                            </span>
                                            <!-- /toggle button -->
                                        </span>
                                    </a>
                                    <!-- /media -->
                                </div>
                                <!-- /messages -->

                            </div>

                        </div>
                        <!-- /drawer content area -->

                    </div>
                    <!-- /actionable drawer -->

                </div>
                <!-- /module drawer inner -->

            </div>
            <!-- /module drawer -->

        </div>
        <!-- /module -->

    </div>
    <!-- /grid item -->

</div>
<!-- /grid -->
