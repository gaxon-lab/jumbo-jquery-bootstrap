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
                        <i class="icon icon-open-mail icon-1x mr-3 text-dark"></i>
                        <span class="h3 mb-0">Messages</span>
                    </div>

                    <!-- App Quick Menu -->
                    <div class="quick-menu-list d-md-none">

                        <?php if (in_array($this->data['theme'], array('modern', 'back-office', 'back-office-mini'))): ?>
                            <!-- Brand tool -->
                            <a href="javascript:void(0)" class="dt-drawer-handle quick-menu mr-auto" data-toggle="main-sidebar">
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
                            
                        <a href="javascript:void(0)" class="quick-menu" data-open="compose"><i
                                class="icon icon-editors"></i></a>
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
                           data-open="compose">
                            <i class="icon icon-editors icon-fw mr-2"></i>Compose</a>
                    </div>
                    <!-- /button -->

                    <!-- Sidebar Navigation -->
                    <ul class="dt-module-side-nav">

                        <!-- Menu Header -->
                        <li class="dt-module-side-nav__header">
                            <span class="dt-module-side-nav__text">main</span>
                        </li>
                        <!-- /menu header -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item active">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <i class="icon icon-inbox icon-fw icon-lg"></i>
                                <span class="dt-module-side-nav__text">Inbox</span> </a>
                        </li>
                        <!-- /menu item -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <i class="icon icon-send icon-fw icon-lg"></i>
                                <span class="dt-module-side-nav__text">Sent</span> </a>
                        </li>
                        <!-- /menu item -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <i class="icon icon-open-mail icon-fw icon-lg"></i>
                                <span class="dt-module-side-nav__text">Draft</span> </a>
                        </li>
                        <!-- /menu item -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <i class="icon icon-trash icon-fw icon-lg"></i>
                                <span class="dt-module-side-nav__text">Trash</span> </a>
                        </li>
                        <!-- /menu item -->

                        <!-- Menu Header -->
                        <li class="dt-module-side-nav__header">
                            <span class="dt-module-side-nav__text">FILTERS</span>
                        </li>
                        <!-- /menu header -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <i class="icon icon-star-o icon-fw icon-lg"></i>
                                <span class="dt-module-side-nav__text">Starred</span> </a>
                        </li>
                        <!-- /menu item -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <i class="icon icon-tag-o icon-fw icon-lg"></i>
                                <span class="dt-module-side-nav__text">Important</span> </a>
                        </li>
                        <!-- /menu item -->

                        <!-- Menu Header -->
                        <li class="dt-module-side-nav__header">
                            <span class="dt-module-side-nav__text">Labels</span>
                        </li>
                        <!-- /menu header -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <i class="icon icon-tag icon-fw icon-lg text-dark-blue"></i>
                                <span class="dt-module-side-nav__text">PayPal</span> </a>
                        </li>
                        <!-- /menu item -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <i class="icon icon-tag icon-fw icon-lg text-danger"></i>
                                <span class="dt-module-side-nav__text">Upwork</span> </a>
                        </li>
                        <!-- /menu item -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <i class="icon icon-tag icon-fw icon-lg text-light-cyan"></i>
                                <span class="dt-module-side-nav__text">In-house</span> </a>
                        </li>
                        <!-- /menu item -->

                        <!-- Menu Item -->
                        <li class="dt-module-side-nav__item">
                            <a href="javascript:void(0)" class="dt-module-side-nav__link">
                                <i class="icon icon-tag icon-fw icon-lg text-success"></i>
                                <span class="dt-module-side-nav__text">Clients</span> </a>
                        </li>
                        <!-- /menu item -->

                    </ul>
                    <!-- /sidebar navigation -->

                    <!-- Contacts -->
                    <div class="dt-contacts contacts-list">

                        <!-- Contact Heading -->
                        <h6 class="dt-contact__heading text-uppercase">CONNECTIONS</h6>
                        <!-- /contact heading -->

                        <!-- Contact -->
                        <div class="dt-contact">

                            <!-- Avatar -->
                            <img class="dt-avatar" src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>"
                                 alt="Steve Smith">
                            <!-- /avatar -->

                            <!-- Contact Info -->
                            <div class="dt-contact__info">
                                <h4 class="dt-contact__title">Domnic Joe</h4>
                                <p class="dt-contact__desc">tried the suggest...</p>
                            </div>
                            <!-- /contact info -->

                        </div>
                        <!-- /contact -->

                        <!-- Contact -->
                        <div class="dt-contact">

                            <!-- Avatar -->
                            <span class="dt-avatar bg-dark-blue text-white">RB</span>
                            <!-- /avatar -->

                            <!-- Contact Info -->
                            <div class="dt-contact__info">
                                <h4 class="dt-contact__title">Ron Brown</h4>
                                <p class="dt-contact__desc">tried the suggest...</p>
                            </div>
                            <!-- /contact info -->

                        </div>
                        <!-- /contact -->

                        <!-- Contact -->
                        <div class="dt-contact">

                            <!-- Avatar -->
                            <img class="dt-avatar"
                                 src="<?php echo assets_url('images/user-avatar/stella-johnson.jpg');?>"
                                 alt="Stella Johnson">
                            <!-- /avatar -->

                            <!-- Contact Info -->
                            <div class="dt-contact__info">
                                <h4 class="dt-contact__title">Stella Johnson</h4>
                                <p class="dt-contact__desc">tried the suggest...</p>
                            </div>
                            <!-- /contact info -->

                        </div>
                        <!-- /contact -->

                        <!-- Contact -->
                        <div class="dt-contact">

                            <!-- Avatar -->
                            <span class="dt-avatar bg-orange text-white">TG</span>
                            <!-- /avatar -->

                            <!-- Contact Info -->
                            <div class="dt-contact__info">
                                <h4 class="dt-contact__title">Tyler Guerrero</h4>
                                <p class="dt-contact__desc">tried the suggest...</p>
                            </div>
                            <!-- /contact info -->

                        </div>
                        <!-- /contact -->

                    </div>
                    <!-- contacts -->

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

                        <div class="px-1 pb-4 border-bottom border-w-2">

                            <!-- Action Bar -->
                            <div class="d-flex flex-wrap mb-5">
                                <!-- Back Button -->
                                <a href="<?php echo site_url('apps/mail'); ?>" class="btn btn-outline-dark btn-sm mr-auto mb-1">
                                    <i class="icon icon-arrow-left icon-fw icon-lg"></i> </a>
                                <!-- /back button -->

                                <!-- Button Group -->
                                <div class="btn-group btn-group-sm mr-3 mr-lg-7 mb-1" role="group">
                                    <button type="button" class="btn btn-outline-dark">
                                        <i class="icon icon-archive icon-fw icon-lg"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-dark">
                                        <i class="icon icon-spam icon-fw icon-lg"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-dark">
                                        <i class="icon icon-trash-filled icon-fw icon-lg"></i>
                                    </button>
                                </div>
                                <!-- /button group -->

                                <!-- Button Group -->
                                <div class="btn-group btn-group-sm mr-3 mr-lg-7 mb-1" role="group">
                                    <button type="button" class="btn btn-outline-dark">
                                        <i class="icon icon-folder icon-fw icon-lg"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-dark">
                                        <i class="icon icon-tag icon-fw icon-lg"></i>
                                    </button>
                                </div>
                                <!-- /button group -->

                                <!-- Dropdown -->
                                <div class="dropdown">

                                    <!-- Dropdown Button -->
                                    <a href="#" class="dropdown-toggle btn btn-outline-dark btn-sm"
                                       data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false"> More </a>
                                    <!-- /dropdown button -->

                                    <!-- Dropdown Menu -->
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0)">All</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Read</a>
                                        <a class="dropdown-item"
                                           href="javascript:void(0)">Unread</a>
                                        <a class="dropdown-item"
                                           href="javascript:void(0)">Starred</a>
                                    </div>
                                    <!-- /dropdown menu -->

                                </div>
                                <!-- /dropdown -->
                            </div>
                            <!-- /action bar -->

                            <div class="d-flex flex-wrap">
                                <h3 class="mb-0 text-truncate flex-1">Regards to join tomorrow’s
                                    conference call</h3>

                                <!-- Module Info -->
                                <div class="ml-auto dt-module__list-item-info">
                                    <!-- Badge Group -->
                                    <div class="badge-group">
                                        <span class="badge badge-success">Clients</span>
                                        <span class="badge bg-light-cyan text-white">In-house</span>
                                    </div>
                                    <!-- /badge group -->
                                </div>
                                <!-- /module info -->
                            </div>

                        </div>

                        <!-- Module List -->
                        <div class="dt-module__list mail-detail-list">

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Avatar -->
                                <img class="dt-avatar mr-4" src="<?php echo assets_url('images/user-avatar/amay.jpg');?>"
                                     alt="Reece Jacklin">
                                <!-- /avatar -->

                                <!-- Module Content -->
                                <div class="dt-module__list-item-content" data-toggle="mail">
                                    <h4 class="d-inline-block mb-1">Chris Harris</h4>
                                    <p class="mb-0 text-light-gray text-truncate">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Dicta dolorum est ipsa perspiciatis quia, reiciendis
                                        repellendus totam. Accusantium deleniti eveniet ipsum nobis,
                                        numquam odio, possimus saepe sunt unde veniam voluptatem!
                                    </p>
                                </div>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <span class="mt-1">July 24</span>
                                    <!-- Checkbox -->
                                    <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only ml-sm-3">
                                        <input id="icon-checkbox-1" type="checkbox">
                                        <label class="font-weight-light dt-checkbox-content"
                                               for="icon-checkbox-1">
                                            <span class="unchecked"><i
                                                    class="icon icon-star-o icon-fw icon-xl"></i></span>
                                            <span class="checked"><i
                                                    class="icon icon-star-fill icon-fw icon-xl text-warning"></i></span>
                                        </label>
                                    </div>
                                    <!-- /checkbox -->
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item open">

                                <!-- Avatar -->
                                <img class="dt-avatar mr-4" src="<?php echo assets_url('images/user-avatar/amay.jpg');?>"
                                     alt="Reece Jacklin">
                                <!-- /avatar -->

                                <!-- Module Content -->
                                <div class="dt-module__list-item-content" data-toggle="mail">
                                    <h4 class="d-inline-block mb-1">Chris Harris</h4>
                                    <p class="mb-0 text-light-gray">
                                        Hi Mate,<br/> Sorry for the delay in response!<br/> I’m
                                        afraid, I won’t be able to join you in the conference call.
                                        I have to take my daughter for her game.<br/> I hope that is
                                        ok.<br/>
                                        <br/> <br/> Cheers!<br/> Dom
                                    </p>
                                </div>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <span class="mt-1">July 24</span>
                                    <!-- Checkbox -->
                                    <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only ml-sm-3">
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
                                </div>
                                <!-- /module info -->
                            </div>
                            <!-- /module item -->

                            <!-- Module Item -->
                            <div class="dt-module__list-item">

                                <!-- Avatar -->
                                <img class="dt-avatar mr-4" src="<?php echo assets_url('images/user-avatar/amay.jpg');?>"
                                     alt="Reece Jacklin">
                                <!-- /avatar -->

                                <!-- Module Content -->
                                <div class="dt-module__list-item-content" data-toggle="mail">
                                    <h4 class="d-inline-block mb-1">Chris Harris</h4>
                                    <p class="mb-0 text-light-gray text-truncate">
                                        Cicero famously orated against his political opponent Lucius
                                        Sergius Catilina. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Dicta dolorum est ipsa perspiciatis quia,
                                        reiciendis repellendus totam. Accusantium deleniti eveniet
                                        ipsum nobis, numquam odio, possimus saepe sunt unde veniam
                                        voluptatem!
                                    </p>
                                </div>
                                <!-- /module content -->

                                <!-- Module Info -->
                                <div class="dt-module__list-item-info">
                                    <span class="mt-1">July 24</span>
                                    <!-- Checkbox -->
                                    <div class="dt-checkbox dt-checkbox-icon dt-checkbox-only ml-sm-3">
                                        <input id="icon-checkbox-3" type="checkbox">
                                        <label class="font-weight-light dt-checkbox-content"
                                               for="icon-checkbox-3">
                                            <span class="unchecked"><i
                                                    class="icon icon-star-o icon-fw icon-xl"></i></span>
                                            <span class="checked"><i
                                                    class="icon icon-star-fill icon-fw icon-xl text-warning"></i></span>
                                        </label>
                                    </div>
                                    <!-- /checkbox -->
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