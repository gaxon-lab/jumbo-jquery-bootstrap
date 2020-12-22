<!-- Drawer -->
<div class="dt-drawer position-left" id="dt-notification-drawer">

    <div class="p-6">
        <a href="javascript:void(0)" class="d-inline-block" data-dismiss="drawer">
            <i class="icon icon-arrow-long-left icon-2x mr-3"></i> <span class="align-middle">Back</span>
        </a>
    </div>

    <!-- Actionable Drawer -->
    <div class="dt-actionable-drawer">

        <!-- Menu Bar -->
        <div class="dt-action-bar">

            <!-- Action Menu -->
            <ul class="dt-action-nav">

                <!-- Menu Item -->
                <li class="dt-action-nav__item">
                    <a href="javascript:void(0)"
                       class="dt-action-nav__link"
                       data-switch="drawer"
                       data-target="#drawer-notifications">
                        <i class="icon icon-notification2 icon-fw"></i> </a>
                </li>
                <!-- /menu item -->

                <!-- Menu Item -->
                <li class="dt-action-nav__item">
                    <a href="javascript:void(0)"
                       class="dt-action-nav__link"
                       data-switch="drawer"
                       data-target="#drawer-messages">
                        <i class="icon icon-message icon-fw"></i> </a>
                </li>
                <!-- /menu item -->

                <!-- Menu Item -->
                <li class="dt-action-nav__item">
                    <a href="javascript:void(0)" class="dt-action-nav__link" data-switch="drawer"
                       data-target="#drawer-list">
                        <i class="icon icon-search icon-xl"></i> </a>
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
                <div class="dt-notification fade" id="drawer-list">
                    <!-- Search Box -->
                    <form class="search-box right-side-icon mw-100 mb-8">
                        <input class="form-control form-control-lg"
                               id="address"
                               name="address"
                               placeholder="Search in app..."
                               type="search">
                        <button type="submit" class="search-icon"><i class="icon icon-search icon-lg"></i>
                        </button>
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
                        <img class="dt-avatar mr-3" src="<?php echo assets_url('images/user-avatar/stella-johnson.jpg');?>"
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
                        <img class="dt-avatar mr-3" src="<?php echo assets_url('images/user-avatar/jeson-born.jpg');?>"
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
                        <img class="dt-avatar mr-3" src="<?php echo assets_url('images/user-avatar/selena.jpg');?>" alt="User">
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
                        <img class="dt-avatar mr-3" src="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg');?>"
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

                    <!-- Media -->
                    <a href="javascript:void(0)" class="media">

                        <!-- Avatar -->
                        <img class="dt-avatar mr-3" src="<?php echo assets_url('images/user-avatar/amay.jpg');?>" alt="User">
                        <!-- avatar -->

                        <!-- Media Body -->
                        <span class="media-body">
                            <span class="message">
                                <span class="user-name">Amay Mathur</span> and <span class="user-name">Domnic Harris</span>
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
                        <img class="dt-avatar mr-3" src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>"
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
                        <img class="dt-avatar mr-3" src="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg');?>"
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
                        <img class="dt-avatar mr-3" src="<?php echo assets_url('images/user-avatar/mathew.jpg');?>" alt="User">
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
                            <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                                <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                                <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                            </span>
                            <!-- /toggle button -->
                        </span> </a>
                    <!-- /media -->

                    <!-- Media -->
                    <a href="javascript:void(0)" class="media">

                        <!-- Avatar -->
                        <img class="dt-avatar mr-3" src="<?php echo assets_url('images/user-avatar/stella-johnson.jpg');?>"
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
                            <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                                <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                                <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                            </span>
                            <!-- /toggle button -->
                        </span> </a>
                    <!-- /media -->

                    <!-- Media -->
                    <a href="javascript:void(0)" class="media">

                        <!-- Avatar -->
                        <img class="dt-avatar mr-3" src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>"
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
                            <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                                <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                                <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                            </span>
                            <!-- /toggle button -->
                        </span> </a>
                    <!-- /media -->

                    <!-- Media -->
                    <a href="javascript:void(0)" class="media">

                        <!-- Avatar -->
                        <img class="dt-avatar mr-3" src="<?php echo assets_url('images/user-avatar/domnic-brown.jpg');?>"
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
                            <span class="toggle-button" data-toggle="tooltip" data-placement="left" title="Mark as read">
                                <span class="show"><i class="icon icon-dot-o icon-fw f-10 text-light-gray"></i></span>
                                <span class="hide"><i class="icon icon-dot icon-fw f-10 text-light-gray"></i></span>
                            </span>
                            <!-- /toggle button -->
                        </span> </a>
                    <!-- /media -->
                </div>
                <!-- /messages -->

            </div>

        </div>
        <!-- /drawer content area -->

    </div>
    <!-- /actionable drawer -->

</div>
<!-- /drawer -->