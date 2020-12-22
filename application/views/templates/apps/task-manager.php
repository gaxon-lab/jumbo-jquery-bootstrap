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
                    <!-- Dropdown -->
                    <div class="dropdown">

                        <!-- Dropdown Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false">Tasks</a>
                        <!-- /dropdown button -->

                        <!-- Dropdown Menu -->
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0)">Something else
                                here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                        </div>
                        <!-- /dropdown menu -->

                    </div>
                    <!-- /dropdown -->

                    <!-- Title -->
                    <div class="mx-auto text-center">
                        <h3 class="dt-module__title">Chatbull App</h3>
                        <i class="icon icon-horizontal-more icon-xl"></i>
                    </div>
                    <!-- Title -->

                    <!-- Filter -->
                    <a class="dt-module__filter text-dark" href="javascript:void(0)">
                        <i class="icon icon-filter-new icon-xl"></i> </a>
                    <!-- /filter -->

                </div>
                <!-- /module header -->

                <!-- Module Content -->
                <div class="dt-module__content ps-custom-scrollbar">

                    <!-- Module Content Inner -->
                    <div class="dt-module__content-inner">

                        <!-- Module List -->
                        <div class="dt-module__list">

                            <!-- Module Heading -->
                            <h5 class="text-light-gray mb-2">Front-end Development</h5>
                            <!-- /module heading -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-1" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-1">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>" class="dt-module__list-item-content">
                                    Vertical layout with minimized and drawer style
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-dark-blue text-white">Layout</span>
                                        <span class="badge badge-danger">Priority</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 5</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-2" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-2">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>" class="dt-module__list-item-content">
                                    Light, Semi Dark and Dark theme
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-dark-blue text-white">Layout</span>
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                        <span class="badge badge-light align-middle">...</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 7</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-3" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-3">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content"> Create 3 different PSDs for
                                    Grid views </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Date -->
                                    <span>June 7</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-4" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-4">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content"> Create 2 different PSDs for
                                    Lists views </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge badge-danger">Priority</span>
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 9</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-5" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-5">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">
                                    Update Profile page according new design
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                        <span class="badge badge-success">jQuery</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 9</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-6" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-6">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">Style Card or Card Group page.</a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-dark-blue text-white">Layout</span>
                                        <span class="badge badge-danger">Priority</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 12</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-7" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-7">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">
                                    Designed Apps pages.
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-success text-white">jQuery</span>
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                        <span class="badge badge-light">...</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 12</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-8" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-8">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">
                                    Redesign crypto aur listing dashboard.
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                        <span class="badge badge-success">jQuery</span>
                                        <span class="badge badge-light">...</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 15</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-9" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-9">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">
                                    Multiple color variations.
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 15</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-10" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-10">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content"> Create 2 different PSDs for
                                    Lists views </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge badge-danger">Priority</span>
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                        <span class="badge badge-light">...</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 17</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-11" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-11">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">Create different PSDs for
                                    modern widget page</a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-dark-blue text-white">Layout</span>
                                        <span class="badge badge-danger">Priority</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 19</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-12" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-12">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">
                                    Create CRM Layout design
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                        <span class="badge bg-dark-blue text-white">Layout</span>
                                        <span class="badge badge-light">...</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 24</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-13" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-13">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">
                                    Style authentication pages.
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge badge-danger">Priority</span>
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                        <span class="badge badge-light">...</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 29</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-14" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-14">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">
                                    Update metrics page.
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                        <span class="badge badge-success">jQuery</span>
                                        <span class="badge badge-light">...</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>July 1</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-15" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-15">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">
                                    Create different PSDs for Wall page
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-dark-blue text-white">Layout</span>
                                        <span class="badge badge-danger">Priority</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>July 7</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                        </div>
                        <!-- /module list -->

                        <!-- Module List -->
                        <div class="dt-module__list">

                            <!-- Module Heading -->
                            <h5 class="text-light-gray mb-2">Backend Development</h5>
                            <!-- /module heading -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-16" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-16">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">
                                    Update metrics page.
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                        <span class="badge badge-success">jQuery</span>
                                        <span class="badge badge-light">...</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>July 1</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/man-3.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-17" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-17">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">
                                    Create different PSDs for Wall page
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-dark-blue text-white">Layout</span>
                                        <span class="badge badge-danger">Priority</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>July 7</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/man-3.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-18" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-18">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content"> Create 3 different PSDs for
                                    Grid views </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Date -->
                                    <span>June 7</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/kemroon-white.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-19" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-19">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content"> Create 2 different PSDs for
                                    Lists views </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge badge-danger">Priority</span>
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 9</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/kemroon-white.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-20" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-20">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">
                                    Update Profile page according new design
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                        <span class="badge badge-success">jQuery</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 9</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/man-3.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-21" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-21">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>" class="dt-module__list-item-content">
                                    Vertical layout with minimized and drawer style
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-dark-blue text-white">Layout</span>
                                        <span class="badge badge-danger">Priority</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 5</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/kemroon-white.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-22" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-22">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>" class="dt-module__list-item-content">
                                    Light, Semi Dark and Dark theme
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-dark-blue text-white">Layout</span>
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                        <span class="badge badge-light align-middle">...</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 7</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/man-3.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-23" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-23">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">Style Card or Card Group page.</a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-dark-blue text-white">Layout</span>
                                        <span class="badge badge-danger">Priority</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 12</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/man-3.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-24" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-24">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">
                                    Designed Apps pages.
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-success text-white">jQuery</span>
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                        <span class="badge badge-light">...</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 12</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/kemroon-white.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-25" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-25">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">
                                    Redesign crypto aur listing dashboard.
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                        <span class="badge badge-success">jQuery</span>
                                        <span class="badge badge-light">...</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 15</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/man-3.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-26" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-26">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">
                                    Multiple color variations.
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 15</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/kemroon-white.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-27" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-27">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content"> Create 2 different PSDs for
                                    Lists views </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge badge-danger">Priority</span>
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                        <span class="badge badge-light">...</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 17</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/kemroon-white.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-28" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-28">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">Create different PSDs for
                                    modern widget page</a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-dark-blue text-white">Layout</span>
                                        <span class="badge badge-danger">Priority</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 19</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/man-3.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-29" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-29">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">
                                    Create CRM Layout design
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                        <span class="badge bg-dark-blue text-white">Layout</span>
                                        <span class="badge badge-light">...</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 24</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/kemroon-white.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox Icon -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-4">
                                    <input id="icon-checkbox-30" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="icon-checkbox-30">
                                        <span class="unchecked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-light-gray"></i>
                                        </span>
                                        <span class="checked">
                                            <i class="icon icon-circle-check-o icon-fw icon-1x text-success"></i>
                                        </span>
                                    </label>
                                </span>
                                <!-- /checkbox icon -->

                                <!-- Module Content -->
                                <a href="<?php echo site_url('apps/task-detail'); ?>"
                                   class="dt-module__list-item-content">
                                    Style authentication pages.
                                </a>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge badge-danger">Priority</span>
                                        <span class="badge bg-light-cyan text-white">Theme</span>
                                        <span class="badge badge-light">...</span>
                                    </div>
                                    <!-- /badge group -->

                                    <!-- Date -->
                                    <span>June 29</span>
                                    <!-- /date -->

                                    <!-- Avatar -->
                                    <img class="dt-avatar size-25" src="<?php echo assets_url('images/user-avatar/man-3.jpg');?>" alt="User">
                                    <!-- /avatar -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                        </div>
                        <!-- /module list -->

                    </div>
                    <!-- /module content inner -->

                </div>
                <!-- /module content -->

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
                                             src="<?php echo assets_url('images/user-avatar/amay.jpg');?>" alt="User">
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
