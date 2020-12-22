<!-- Grid -->
<div class="row">

    <!-- Grid Item -->
    <div class="col-xl-12">

        <!-- Module -->
        <div class="dt-module">

            <!-- Module Sidebar -->
            <div class="dt-module__sidebar">

                <!-- Sidebar Header -->
                <div class="dt-module__sidebar-header border-bottom">
                    <div class="d-none d-md-flex align-items-center">
                        <i class="icon icon-user-account icon-1x mr-3 text-dark"></i>
                        <span class="h3 mb-0">Contacts</span>
                    </div>

                    <!-- App Quick Menu -->
                    <div class="quick-menu-list d-md-none">

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
                            
                        <a href="javascript:void(0)" class="quick-menu" data-toggle="modal"
                           data-target="#composeModal">
                            <i class="icon icon-contacts"></i> </a>
                        <a href="javascript:void(0)" class="quick-menu" data-toggle="mdrawer"
                           data-target="#drawer-notifications"><i
                                class="icon icon-notification2"></i></a>
                        
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
                <div class="dt-module__sidebar-content ps-custom-scrollbar">

                    <!-- Button -->
                    <div class="action-area mt-5 mb-7 d-none d-md-block">
                        <a href="javascript:void(0)"
                           class="btn btn-shadow btn-default compose-btn btn-rounded"
                           data-toggle="modal" data-target="#composeModal">
                            <i class="icon icon-contacts icon-fw mr-2"></i>Add Contact </a>
                    </div>
                    <!-- /button -->

                    <!-- Sidebar Navigation -->
                    <ul class="dt-module-side-nav">

                        <!-- Menu Header -->
                        <li class="dt-module-side-nav__header">
                            <span class="dt-module-side-nav__text">Contacts</span>
                        </li>
                        <!-- /menu header -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item active">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <i class="icon icon-contacts icon-fw icon-lg"></i>
                                <span class="dt-module-side-nav__text">All Contacts</span> </a>
                        </li>
                        <!-- /menu item -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <i class="icon icon-heart-o icon-fw icon-lg"></i>
                                <span class="dt-module-side-nav__text">Favourite List</span> </a>
                        </li>
                        <!-- /menu item -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <i class="icon icon-contacts icon-fw icon-lg"></i>
                                <span class="dt-module-side-nav__text">Suggestions</span> </a>
                        </li>
                        <!-- /menu item -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <i class="icon icon-star-o icon-fw icon-lg"></i>
                                <span class="dt-module-side-nav__text">Starred contacts</span> </a>
                        </li>
                        <!-- /menu item -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <i class="icon icon-settings icon-fw icon-lg"></i>
                                <span class="dt-module-side-nav__text">Settings</span> </a>
                        </li>
                        <!-- /menu item -->

                    </ul>
                    <!-- /sidebar navigation -->

                </div>
                <!-- /sidebar Menu -->

            </div>
            <!-- /module sidebar -->

            <!-- Module Container -->
            <div class="dt-module__container">

                <!-- Module Header -->
                <div class="dt-module__header d-none d-md-flex">

                    <!-- Search Box -->
                    <form class="search-box ml-n4">
                        <input class="form-control border-0 shadow-none bg-focus form-control-sm"
                               placeholder="Search in app..." value=""
                               type="search"> <span class="search-icon"><i
                                class="icon icon-search icon-lg"></i></span>
                    </form>
                    <!-- /search box -->

                    <!-- Dropdown -->
                    <div class="dropdown dt-notification ml-auto">

                        <!-- Dropdown Button -->
                        <a href="#" class="dropdown-toggle no-arrow" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="icon icon-notification2 icon-1x icon-fw dt-icon-alert"></i>
                        </a>
                        <!-- /dropdown button -->

                        <!-- Dropdown Option -->
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <!-- Dropdown Menu Header -->
                            <div class="dropdown-menu-header">
                                <h4 class="title">Notifications (9)</h4>

                                <div class="ml-auto action-area">
                                    <a href="javascript:void(0)">Mark All Read</a> <a class="ml-2"
                                                                                      href="javascript:void(0)">
                                        <i class="icon icon-settings icon-lg text-light-gray"></i>
                                    </a>
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
                                             src="<?php echo assets_url('images/user-avatar/stella-johnson.jpg');?>"
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
                                <a href="javascript:void(0)" class="card-link"> See All
                                    <i class="icon icon-arrow-right icon-fw"></i> </a>
                            </div>
                            <!-- /dropdown menu footer -->
                        </div>
                        <!-- /dropdown option -->

                    </div>
                    <!-- /dropdown -->

                </div>
                <!-- /module header -->

                <!-- Module Content -->
                <div class="dt-module__content ps-custom-scrollbar">

                    <!-- Module Content Inner -->
                    <div class="dt-module__content-inner">

                        <div class="px-1 pb-4 border-bottom border-w-2 mb-1 mt-n1">
                            <!-- Dropdown -->
                            <div class="dropdown">

                                <!-- Checkbox -->
                                <span class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-3">
                                    <input id="option-checkbox" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content" for="option-checkbox">
                                        <span class="unchecked"><i class="icon icon-box-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i class="icon icon-box-check-o icon-fw icon-xl text-primary"></i></span>
                                    </label>
                                </span>
                                <!-- /checkbox -->

                                <!-- Dropdown Button -->
                                <a href="#" class="dropdown-toggle text-dark" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"> None </a>
                                <!-- /dropdown button -->

                                <!-- Dropdown Menu -->
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0)">All</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Read</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Unread</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Starred</a>
                                </div>
                                <!-- /dropdown menu -->

                            </div>
                            <!-- /dropdown -->
                        </div>

                        <!-- Module List -->
                        <div class="dt-module__list">

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-1" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-1">
                                        <span class="unchecked"><i
                                                class="icon icon-box-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-box-check-o icon-fw icon-xl text-primary"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-2" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-2">
                                        <span class="unchecked"><i
                                                class="icon icon-star-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-star-fill icon-fw icon-xl text-warning"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Avatar -->
                                <img class="dt-avatar mr-4" src="<?php echo assets_url('images/user-avatar/amay.jpg');?>"
                                     alt="Reece Jacklin">
                                <!-- /avatar -->

                                <!-- Module Content -->
                                <div class="dt-module__list-item-content">
                                    <div class="user-detail">
                                        <span class="user-name">Chris Harris</span>
                                        <span class="dt-separator-v">&nbsp;</span>
                                        <span class="designation">Graphic Design / Logo Design / UI &amp; UX</span>
                                    </div>
                                    <div class="text-light-gray">
                                        <span class="d-inline-block mr-3">chris.harris@example.com</span>
                                        <span class="d-inline-block">+168214854</span>
                                    </div>
                                </div>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle no-arrow" href="#"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-vertical-more icon-xl text-light-gray"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"
                                               data-toggle="modal"
                                               data-target="#composeModal"> <i
                                                    class="icon icon-editors icon-fw"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-trash icon-fw"></i> Delete </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-heart-o icon-fw"></i> Favourite
                                                List </a>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-3" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-3">
                                        <span class="unchecked"><i
                                                class="icon icon-box-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-box-check-o icon-fw icon-xl text-primary"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-4" type="checkbox" checked>
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-4">
                                        <span class="unchecked"><i
                                                class="icon icon-star-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-star-fill icon-fw icon-xl text-warning"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Avatar -->
                                <img class="dt-avatar mr-4"
                                     src="<?php echo assets_url('images/user-avatar/stella-johnson.jpg');?>"
                                     alt="Stella Johnson">
                                <!-- /avatar -->

                                <!-- Module Content -->
                                <div class="dt-module__list-item-content">
                                    <div class="user-detail">
                                        <span class="user-name">Alia Joseph</span>
                                        <span class="dt-separator-v">&nbsp;</span>
                                        <span class="designation">UI/UI Expert</span>
                                    </div>
                                    <div class="text-light-gray">
                                        <span class="d-inline-block mr-3">aliajoseph12@example.com</span>
                                        <span class="d-inline-block">+2568421674</span>
                                    </div>
                                </div>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle no-arrow" href="#"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-vertical-more icon-xl text-light-gray"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"
                                               data-toggle="modal"
                                               data-target="#composeModal"> <i
                                                    class="icon icon-editors icon-fw"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-trash icon-fw"></i> Delete </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-heart-o icon-fw"></i> Favourite
                                                List </a>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-5" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-5">
                                        <span class="unchecked"><i
                                                class="icon icon-box-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-box-check-o icon-fw icon-xl text-primary"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-6" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-6">
                                        <span class="unchecked"><i
                                                class="icon icon-star-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-star-fill icon-fw icon-xl text-warning"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Avatar -->
                                <img class="dt-avatar mr-4"
                                     src="<?php echo assets_url('images/user-avatar/mathew.jpg');?>" alt="Mathew">
                                <!-- /avatar -->

                                <!-- Module Content -->
                                <div class="dt-module__list-item-content">
                                    <div class="user-detail">
                                        <span class="user-name">Mathew</span>
                                        <span class="dt-separator-v">&nbsp;</span>
                                        <span class="designation">React Developer</span>
                                    </div>
                                    <div class="text-light-gray">
                                        <span class="d-inline-block mr-3">mathew@example.com</span>
                                        <span class="d-inline-block">+7582475166</span>
                                    </div>
                                </div>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle no-arrow" href="#"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-vertical-more icon-xl text-light-gray"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"
                                               data-toggle="modal"
                                               data-target="#composeModal"> <i
                                                    class="icon icon-editors icon-fw"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-trash icon-fw"></i> Delete </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-heart-o icon-fw"></i> Favourite
                                                List </a>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-7" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-7">
                                        <span class="unchecked"><i
                                                class="icon icon-box-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-box-check-o icon-fw icon-xl text-primary"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-8" type="checkbox" checked>
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-8">
                                        <span class="unchecked"><i
                                                class="icon icon-star-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-star-fill icon-fw icon-xl text-warning"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Avatar -->
                                <img class="dt-avatar mr-4"
                                     src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>"
                                     alt="Steve Smith">
                                <!-- /avatar -->

                                <!-- Module Content -->
                                <div class="dt-module__list-item-content">
                                    <div class="user-detail">
                                        <span class="user-name">Joshua Brian</span>
                                        <span class="dt-separator-v">&nbsp;</span>
                                        <span class="designation">Data Analyst</span>
                                    </div>
                                    <div class="text-light-gray">
                                        <span class="d-inline-block mr-3">joshua@example.com</span>
                                        <span class="d-inline-block">+9214981412</span>
                                    </div>
                                </div>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle no-arrow" href="#"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-vertical-more icon-xl text-light-gray"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"
                                               data-toggle="modal"
                                               data-target="#composeModal"> <i
                                                    class="icon icon-editors icon-fw"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-trash icon-fw"></i> Delete </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-heart-o icon-fw"></i> Favourite
                                                List </a>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-9" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-9">
                                        <span class="unchecked"><i
                                                class="icon icon-box-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-box-check-o icon-fw icon-xl text-primary"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-10" type="checkbox" checked>
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-10">
                                        <span class="unchecked"><i
                                                class="icon icon-star-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-star-fill icon-fw icon-xl text-warning"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Avatar -->
                                <img class="dt-avatar mr-4"
                                     src="<?php echo assets_url('images/user-avatar/kemroon-white.jpg');?>"
                                     alt="Kemroon White">
                                <!-- /avatar -->

                                <!-- Module Content -->
                                <div class="dt-module__list-item-content">
                                    <div class="user-detail">
                                        <span class="user-name">Kemroon White</span>
                                        <span class="dt-separator-v">&nbsp;</span>
                                        <span class="designation">Data Scientist</span>
                                    </div>
                                    <div class="text-light-gray">
                                        <span class="d-inline-block mr-3">kemroon@example.com</span>
                                        <span class="d-inline-block">+9214981412</span>
                                    </div>
                                </div>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle no-arrow" href="#"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-vertical-more icon-xl text-light-gray"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"
                                               data-toggle="modal"
                                               data-target="#composeModal"> <i
                                                    class="icon icon-editors icon-fw"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-trash icon-fw"></i> Delete </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-heart-o icon-fw"></i> Favourite
                                                List </a>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-11" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-11">
                                        <span class="unchecked"><i
                                                class="icon icon-box-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-box-check-o icon-fw icon-xl text-primary"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-12" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-12">
                                        <span class="unchecked"><i
                                                class="icon icon-star-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-star-fill icon-fw icon-xl text-warning"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Avatar -->
                                <img class="dt-avatar mr-4"
                                     src="<?php echo assets_url('images/user-avatar/selena.jpg');?>" alt="Selena">
                                <!-- /avatar -->

                                <!-- Module Content -->
                                <div class="dt-module__list-item-content">
                                    <div class="user-detail">
                                        <span class="user-name">Selena</span>
                                        <span class="dt-separator-v">&nbsp;</span>
                                        <span class="designation">Web designer</span>
                                    </div>
                                    <div class="text-light-gray">
                                        <span class="d-inline-block mr-3">selena@example.com</span>
                                        <span class="d-inline-block">+7858568758</span>
                                    </div>
                                </div>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle no-arrow" href="#"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-vertical-more icon-xl text-light-gray"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"
                                               data-toggle="modal"
                                               data-target="#composeModal"> <i
                                                    class="icon icon-editors icon-fw"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-trash icon-fw"></i> Delete </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-heart-o icon-fw"></i> Favourite
                                                List </a>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-13" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-13">
                                        <span class="unchecked"><i
                                                class="icon icon-box-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-box-check-o icon-fw icon-xl text-primary"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-14" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-14">
                                        <span class="unchecked"><i
                                                class="icon icon-star-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-star-fill icon-fw icon-xl text-warning"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Avatar -->
                                <img class="dt-avatar mr-4"
                                     src="<?php echo assets_url('images/user-avatar/nikki.jpg');?>" alt="Nikki Johnson">
                                <!-- /avatar -->

                                <!-- Module Content -->
                                <div class="dt-module__list-item-content">
                                    <div class="user-detail">
                                        <span class="user-name">Nikki Johnson</span>
                                        <span class="dt-separator-v">&nbsp;</span>
                                        <span class="designation">React Developer</span>
                                    </div>
                                    <div class="text-light-gray">
                                        <span class="d-inline-block mr-3">nikki@example.com</span>
                                        <span class="d-inline-block">+9824574155</span>
                                    </div>
                                </div>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle no-arrow" href="#"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-vertical-more icon-xl text-light-gray"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"
                                               data-toggle="modal"
                                               data-target="#composeModal"> <i
                                                    class="icon icon-editors icon-fw"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-trash icon-fw"></i> Delete </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-heart-o icon-fw"></i> Favourite
                                                List </a>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-15" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-15">
                                        <span class="unchecked"><i
                                                class="icon icon-box-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-box-check-o icon-fw icon-xl text-primary"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-16" type="checkbox" checked>
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-16">
                                        <span class="unchecked"><i
                                                class="icon icon-star-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-star-fill icon-fw icon-xl text-warning"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Avatar -->
                                <img class="dt-avatar mr-4"
                                     src="<?php echo assets_url('images/user-avatar/domnic-brown.jpg');?>"
                                     alt="Domnic Brown">
                                <!-- /avatar -->

                                <!-- Module Content -->
                                <div class="dt-module__list-item-content">
                                    <div class="user-detail">
                                        <span class="user-name">Domnic Brown</span>
                                        <span class="dt-separator-v">&nbsp;</span>
                                        <span class="designation">Android Developer</span>
                                    </div>
                                    <div class="text-light-gray">
                                        <span class="d-inline-block mr-3">domnic@example.com</span>
                                        <span class="d-inline-block">+7584566216</span>
                                    </div>
                                </div>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle no-arrow" href="#"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-vertical-more icon-xl text-light-gray"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"
                                               data-toggle="modal"
                                               data-target="#composeModal"> <i
                                                    class="icon icon-editors icon-fw"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-trash icon-fw"></i> Delete </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-heart-o icon-fw"></i> Favourite
                                                List </a>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-17" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-17">
                                        <span class="unchecked"><i
                                                class="icon icon-box-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-box-check-o icon-fw icon-xl text-primary"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-18" type="checkbox" checked>
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-18">
                                        <span class="unchecked"><i
                                                class="icon icon-star-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-star-fill icon-fw icon-xl text-warning"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Avatar -->
                                <span class="dt-avatar bg-orange text-white mr-4">K</span>
                                <!-- /avatar -->

                                <!-- Module Content -->
                                <div class="dt-module__list-item-content">
                                    <div class="user-detail">
                                        <span class="user-name">Kadir</span>
                                        <span class="dt-separator-v">&nbsp;</span>
                                        <span class="designation">HR Manager</span>
                                    </div>
                                    <div class="text-light-gray">
                                        <span class="d-inline-block mr-3">kadir@example.com</span>
                                        <span class="d-inline-block">+7584566216</span>
                                    </div>
                                </div>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle no-arrow" href="#"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-vertical-more icon-xl text-light-gray"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"
                                               data-toggle="modal"
                                               data-target="#composeModal"> <i
                                                    class="icon icon-editors icon-fw"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-trash icon-fw"></i> Delete </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-heart-o icon-fw"></i> Favourite
                                                List </a>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-19" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-19">
                                        <span class="unchecked"><i
                                                class="icon icon-box-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-box-check-o icon-fw icon-xl text-primary"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-20" type="checkbox" checked>
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-20">
                                        <span class="unchecked"><i
                                                class="icon icon-star-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-star-fill icon-fw icon-xl text-warning"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Avatar -->
                                <img class="dt-avatar mr-4"
                                     src="<?php echo assets_url('images/user-avatar/jones.jpg');?>"
                                     alt="Jones">
                                <!-- /avatar -->

                                <!-- Module Content -->
                                <div class="dt-module__list-item-content">
                                    <div class="user-detail">
                                        <span class="user-name">Jones</span>
                                        <span class="dt-separator-v">&nbsp;</span>
                                        <span class="designation">CFO</span>
                                    </div>
                                    <div class="text-light-gray">
                                        <span class="d-inline-block mr-3">jones@example.com</span>
                                        <span class="d-inline-block">+8521763259</span>
                                    </div>
                                </div>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle no-arrow" href="#"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-vertical-more icon-xl text-light-gray"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"
                                               data-toggle="modal"
                                               data-target="#composeModal"> <i
                                                    class="icon icon-editors icon-fw"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-trash icon-fw"></i> Delete </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-heart-o icon-fw"></i> Favourite
                                                List </a>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-21" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-21">
                                        <span class="unchecked"><i
                                                class="icon icon-box-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-box-check-o icon-fw icon-xl text-primary"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-22" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-22">
                                        <span class="unchecked"><i
                                                class="icon icon-star-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-star-fill icon-fw icon-xl text-warning"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Avatar -->
                                <img class="dt-avatar mr-4"
                                     src="<?php echo assets_url('images/user-avatar/anisha.jpg');?>"
                                     alt="Anisha">
                                <!-- /avatar -->

                                <!-- Module Content -->
                                <div class="dt-module__list-item-content">
                                    <div class="user-detail">
                                        <span class="user-name">Anisha</span>
                                        <span class="dt-separator-v">&nbsp;</span>
                                        <span class="designation">PHP Developer</span>
                                    </div>
                                    <div class="text-light-gray">
                                        <span class="d-inline-block mr-3">anisha@example.com</span>
                                        <span class="d-inline-block">+2568421674</span>
                                    </div>
                                </div>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle no-arrow" href="#"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-vertical-more icon-xl text-light-gray"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"
                                               data-toggle="modal"
                                               data-target="#composeModal"> <i
                                                    class="icon icon-editors icon-fw"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-trash icon-fw"></i> Delete </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-heart-o icon-fw"></i> Favourite
                                                List </a>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-23" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-23">
                                        <span class="unchecked"><i
                                                class="icon icon-box-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-box-check-o icon-fw icon-xl text-primary"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-24" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-24">
                                        <span class="unchecked"><i
                                                class="icon icon-star-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-star-fill icon-fw icon-xl text-warning"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Avatar -->
                                <img class="dt-avatar mr-4"
                                     src="<?php echo assets_url('images/user-avatar/jimmy-jo.jpg');?>"
                                     alt="Jimmy Jo">
                                <!-- /avatar -->

                                <!-- Module Content -->
                                <div class="dt-module__list-item-content">
                                    <div class="user-detail">
                                        <span class="user-name">Jimmy Jo</span>
                                        <span class="dt-separator-v">&nbsp;</span>
                                        <span class="designation">iOS Developer</span>
                                    </div>
                                    <div class="text-light-gray">
                                        <span class="d-inline-block mr-3">jimmy@example.com</span>
                                        <span class="d-inline-block">+8562459634</span>
                                    </div>
                                </div>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle no-arrow" href="#"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-vertical-more icon-xl text-light-gray"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"
                                               data-toggle="modal"
                                               data-target="#composeModal"> <i
                                                    class="icon icon-editors icon-fw"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-trash icon-fw"></i> Delete </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-heart-o icon-fw"></i> Favourite
                                                List </a>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-25" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-25">
                                        <span class="unchecked"><i
                                                class="icon icon-box-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-box-check-o icon-fw icon-xl text-primary"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-26" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-26">
                                        <span class="unchecked"><i
                                                class="icon icon-star-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-star-fill icon-fw icon-xl text-warning"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Avatar -->
                                <span class="dt-avatar bg-dark-blue text-white mr-4">S</span>
                                <!-- /avatar -->

                                <!-- Module Content -->
                                <div class="dt-module__list-item-content">
                                    <div class="user-detail">
                                        <span class="user-name">Stella Brown</span>
                                        <span class="dt-separator-v">&nbsp;</span>
                                        <span class="designation">React Developer</span>
                                    </div>
                                    <div class="text-light-gray">
                                        <span class="d-inline-block mr-3">stell@example.com</span>
                                        <span class="d-inline-block">+7569524147</span>
                                    </div>
                                </div>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle no-arrow" href="#"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-vertical-more icon-xl text-light-gray"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"
                                               data-toggle="modal"
                                               data-target="#composeModal"> <i
                                                    class="icon icon-editors icon-fw"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-trash icon-fw"></i> Delete </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-heart-o icon-fw"></i> Favourite
                                                List </a>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-27" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-27">
                                        <span class="unchecked"><i
                                                class="icon icon-box-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-box-check-o icon-fw icon-xl text-primary"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-28" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-28">
                                        <span class="unchecked"><i
                                                class="icon icon-star-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-star-fill icon-fw icon-xl text-warning"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Avatar -->
                                <span class="dt-avatar bg-success text-white mr-4">A</span>
                                <!-- /avatar -->

                                <!-- Module Content -->
                                <div class="dt-module__list-item-content">
                                    <div class="user-detail">
                                        <span class="user-name">Amay Mathur</span>
                                        <span class="dt-separator-v">&nbsp;</span>
                                        <span class="designation">Python Developer</span>
                                    </div>
                                    <div class="text-light-gray">
                                        <span class="d-inline-block mr-3">amay@example.com</span>
                                        <span class="d-inline-block">+6895721436</span>
                                    </div>
                                </div>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle no-arrow" href="#"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-vertical-more icon-xl text-light-gray"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"
                                               data-toggle="modal"
                                               data-target="#composeModal"> <i
                                                    class="icon icon-editors icon-fw"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-trash icon-fw"></i> Delete </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-heart-o icon-fw"></i> Favourite
                                                List </a>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-29" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-29">
                                        <span class="unchecked"><i
                                                class="icon icon-box-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-box-check-o icon-fw icon-xl text-primary"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-30" type="checkbox" checked>
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-30">
                                        <span class="unchecked"><i
                                                class="icon icon-star-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-star-fill icon-fw icon-xl text-warning"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Avatar -->
                                <img class="dt-avatar mr-4"
                                     src="<?php echo assets_url('images/user-avatar/noah-owens.jpg');?>"
                                     alt="Noah Owens">
                                <!-- /avatar -->

                                <!-- Module Content -->
                                <div class="dt-module__list-item-content">
                                    <div class="user-detail">
                                        <span class="user-name">Noah Owens</span>
                                        <span class="dt-separator-v">&nbsp;</span>
                                        <span class="designation">CFO</span>
                                    </div>
                                    <div class="text-light-gray">
                                        <span class="d-inline-block mr-3">noah@example.com</span>
                                        <span class="d-inline-block">+7584566216</span>
                                    </div>
                                </div>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle no-arrow" href="#"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-vertical-more icon-xl text-light-gray"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"
                                               data-toggle="modal"
                                               data-target="#composeModal"> <i
                                                    class="icon icon-editors icon-fw"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-trash icon-fw"></i> Delete </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-heart-o icon-fw"></i> Favourite
                                                List </a>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-31" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-31">
                                        <span class="unchecked"><i
                                                class="icon icon-box-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-box-check-o icon-fw icon-xl text-primary"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Checkbox -->
                                <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only mr-5">
                                    <input id="icon-checkbox-32" type="checkbox">
                                    <label class="font-weight-light dt-checkbox-content"
                                           for="icon-checkbox-32">
                                        <span class="unchecked"><i
                                                class="icon icon-star-o icon-fw icon-xl"></i></span>
                                        <span class="checked"><i
                                                class="icon icon-star-fill icon-fw icon-xl text-warning"></i></span>
                                    </label>
                                </div>
                                <!-- /checkbox -->

                                <!-- Avatar -->
                                <img class="dt-avatar mr-4"
                                     src="<?php echo assets_url('images/user-avatar/ellen-manning.jpg');?>"
                                     alt="Ellen Manning">
                                <!-- /avatar -->

                                <!-- Module Content -->
                                <div class="dt-module__list-item-content">
                                    <div class="user-detail">
                                        <span class="user-name">Ellen Manning</span>
                                        <span class="dt-separator-v">&nbsp;</span>
                                        <span class="designation">Designer</span>
                                    </div>
                                    <div class="text-light-gray">
                                        <span class="d-inline-block mr-3">ellen@example.com</span>
                                        <span class="d-inline-block">+9824574155</span>
                                    </div>
                                </div>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle no-arrow" href="#"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-vertical-more icon-xl text-light-gray"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)"
                                               data-toggle="modal"
                                               data-target="#composeModal"> <i
                                                    class="icon icon-editors icon-fw"></i> Edit
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-trash icon-fw"></i> Delete </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="icon icon-heart-o icon-fw"></i> Favourite
                                                List </a>
                                        </div>
                                    </div>
                                    <!-- /dropdown -->
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
                                       data-switch="mdrawer" data-target="#drawer-search-bar">
                                        <i class="icon icon-search icon-fw"></i> </a>
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
