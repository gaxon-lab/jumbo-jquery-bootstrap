<!-- Grid -->
<div class="row">

    <!-- Grid Item -->
    <div class="col-xl-12">

        <!-- Module -->
        <div class="dt-module dt-module--chat">

            <!-- Module Sidebar -->
            <div class="dt-module__sidebar">

                <!-- Sidebar Header -->
                <div class="dt-module__sidebar-header pb-0">

                    <!-- User Detail  -->
                    <div class="dt-avatar-wrapper mb-8 d-none d-md-flex">
                        <div class="dt-avatar-status">
                            <img class="dt-avatar" src="<?php echo assets_url('images/user-avatar/amay.jpg');?>"
                                 alt="Reece Jacklin">
                            <div class="dot-shape bg-success dot-shape-lg"></div>
                        </div>
                        <span class="dt-avatar-info">
                            <a href="javascript:void(0)" class="dt-avatar-name">Reece Jacklin</a>
                            <span class="f-12 d-inline-block">online</span>
                        </span>

                        <!-- Dropdown -->
                        <div class="dropdown ml-auto align-self-start mt-1">
                            <a class="dropdown-toggle no-arrow" href="#" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"> <i
                                    class="icon icon-vertical-more"></i> </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="icon icon-editors icon-fw"></i> Edit </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="icon icon-contacts icon-fw"></i> Contact List</a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="icon icon-heart icon-fw"></i> Favourite List </a>
                            </div>
                        </div>
                        <!-- /dropdown -->
                    </div>
                    <!-- User Detail  -->

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
                           data-target="#drawer-notifications">
                            <i class="icon icon-notification2"></i> </a>
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
                                    Group</a>
                                <a class="dropdown-item" href="javascript:void(0)">Add New
                                    Chat</a>
                                <a class="dropdown-item" href="javascript:void(0)">Add New
                                    Contact</a>
                            </div>
                            <!-- /dropdown menu -->

                        </div>
                        <!-- /dropdown -->

                        <div class="quick-menu dropdown d-md-none">

                            <!-- Dropdown Link -->
                            <a href="#" class="dropdown-toggle no-arrow"
                               data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <img class="dt-avatar size-25"
                                     src="<?php echo assets_url('images/user-avatar/amay.jpg');?>"
                                     alt="Reece Jacklin">
                            </a>
                            <!-- /dropdown link -->

                            <!-- Dropdown Option -->
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="icon icon-editors icon-fw"></i> Edit </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="icon icon-contacts icon-fw"></i> Contact List</a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="icon icon-heart icon-fw"></i> Favourite List </a>
                            </div>
                            <!-- /dropdown option -->

                        </div>

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
                <div class="dt-module__sidebar-content">

                    <!-- Card Header -->
                    <div class="card-header card-nav bg-transparent border-bottom">
                        <ul class="card-header-links nav nav-underline text-uppercase"
                            role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab-pane1"
                                   role="tab"
                                   aria-controls="tab-pane1"
                                   aria-selected="true">Recent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-pane2"
                                   role="tab"
                                   aria-controls="tab-pane2"
                                   aria-selected="true">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /card header -->

                    <!-- Tab Content-->
                    <div class="tab-content">

                        <!-- Tab panel -->
                        <div id="tab-pane1" class="tab-pane active">

                            <!-- Contact Container -->
                            <div class="dt-contacts__container ps-custom-scrollbar">
                                <div class="dt-contacts__container-inner">
                                    <!-- Contacts -->
                                    <div class="dt-contacts contacts-list">

                                        <!-- Contact Heading -->
                                        <h5 class="dt-contact__heading">Yesterday</h5>
                                        <!-- /contact heading -->

                                        <!-- Contact -->
                                        <div class="dt-contact" data-location="<?php echo site_url('apps/chat-start'); ?>">

                                            <!-- Avatar -->
                                            <img class="dt-avatar"
                                                 src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>"
                                                 alt="Steve Smith">
                                            <!-- /avatar -->

                                            <!-- Contact Info -->
                                            <div class="dt-contact__info">
                                                <h4 class="dt-contact__title">Domnic Joe</h4>
                                                <p class="dt-contact__desc">tried the
                                                    suggest...</p>
                                            </div>
                                            <!-- /contact info -->

                                        </div>
                                        <!-- /contact -->

                                        <!-- Contact -->
                                        <div class="dt-contact" data-location="<?php echo site_url('apps/chat-start'); ?>">

                                            <!-- Avatar -->
                                            <span class="dt-avatar bg-dark-blue text-white">RB</span>
                                            <!-- /avatar -->

                                            <!-- Contact Info -->
                                            <div class="dt-contact__info">
                                                <h4 class="dt-contact__title">Ron Brown</h4>
                                                <p class="dt-contact__desc">tried the
                                                    suggest...</p>
                                            </div>
                                            <!-- /contact info -->

                                        </div>
                                        <!-- /contact -->

                                        <!-- Contact -->
                                        <div class="dt-contact" data-location="<?php echo site_url('apps/chat-start'); ?>">

                                            <!-- Avatar -->
                                            <img class="dt-avatar"
                                                 src="<?php echo assets_url('images/user-avatar/stella-johnson.jpg');?>"
                                                 alt="Stella Johnson">
                                            <!-- /avatar -->

                                            <!-- Contact Info -->
                                            <div class="dt-contact__info">
                                                <h4 class="dt-contact__title">Stella
                                                    Johnson</h4>
                                                <p class="dt-contact__desc">tried the
                                                    suggest...</p>
                                            </div>
                                            <!-- /contact info -->

                                        </div>
                                        <!-- /contact -->

                                        <!-- Contact -->
                                        <div class="dt-contact" data-location="<?php echo site_url('apps/chat-start'); ?>">

                                            <!-- Avatar -->
                                            <span class="dt-avatar bg-orange text-white">TG</span>
                                            <!-- /avatar -->

                                            <!-- Contact Info -->
                                            <div class="dt-contact__info">
                                                <h4 class="dt-contact__title">Tyler
                                                    Guerrero</h4>
                                                <p class="dt-contact__desc">tried the
                                                    suggest...</p>
                                            </div>
                                            <!-- /contact info -->

                                        </div>
                                        <!-- /contact -->

                                        <!-- Contact -->
                                        <div class="dt-contact" data-location="<?php echo site_url('apps/chat-start'); ?>">

                                            <!-- Avatar -->
                                            <img class="dt-avatar"
                                                 src="<?php echo assets_url('images/user-avatar/anisha.jpg');?>"
                                                 alt="Anisha">
                                            <!-- /avatar -->

                                            <!-- Contact Info -->
                                            <div class="dt-contact__info">
                                                <h4 class="dt-contact__title">Anisha</h4>
                                                <p class="dt-contact__desc">tried the
                                                    suggest...</p>
                                            </div>
                                            <!-- /contact info -->

                                        </div>
                                        <!-- /contact -->

                                        <!-- Contact -->
                                        <div class="dt-contact" data-location="<?php echo site_url('apps/chat-start'); ?>">

                                            <!-- Avatar -->
                                            <span class="dt-avatar bg-orange text-white">RJ</span>
                                            <!-- /avatar -->

                                            <!-- Contact Info -->
                                            <div class="dt-contact__info">
                                                <h4 class="dt-contact__title">Reece Jacklin</h4>
                                                <p class="dt-contact__desc">tried the
                                                    suggest...</p>
                                            </div>
                                            <!-- /contact info -->

                                        </div>
                                        <!-- /contact -->

                                    </div>
                                    <!-- contacts -->
                                </div>
                            </div>
                            <!-- /contact container -->

                        </div>
                        <!-- /tab panel -->

                        <!-- Tab panel -->
                        <div id="tab-pane2" class="tab-pane">

                            <!-- Contact Container -->
                            <div class="dt-contacts__container ps-custom-scrollbar">
                                <div class="dt-contacts__container-inner">
                                    <!-- Contacts -->
                                    <div class="dt-contacts contacts-list">

                                        <!-- Contact -->
                                        <div class="dt-contact" data-location="<?php echo site_url('apps/chat-start'); ?>">

                                            <!-- Avatar -->
                                            <img class="dt-avatar"
                                                 src="<?php echo assets_url('images/user-avatar/kemroon-white.jpg');?>"
                                                 alt="Kemroon White">
                                            <!-- /avatar -->

                                            <!-- Contact Info -->
                                            <div class="dt-contact__info">
                                                <h4 class="dt-contact__title">Kemroon White</h4>
                                                <p class="dt-contact__desc">tried the
                                                    suggest...</p>
                                            </div>
                                            <!-- /contact info -->

                                        </div>
                                        <!-- /contact -->

                                        <!-- Contact -->
                                        <div class="dt-contact" data-location="<?php echo site_url('apps/chat-start'); ?>">

                                            <!-- Avatar -->
                                            <span class="dt-avatar bg-orange text-white">RJ</span>
                                            <!-- /avatar -->

                                            <!-- Contact Info -->
                                            <div class="dt-contact__info">
                                                <h4 class="dt-contact__title">Reece Jacklin</h4>
                                                <p class="dt-contact__desc">tried the
                                                    suggest...</p>
                                            </div>
                                            <!-- /contact info -->

                                        </div>
                                        <!-- /contact -->

                                        <!-- Contact -->
                                        <div class="dt-contact" data-location="<?php echo site_url('apps/chat-start'); ?>">

                                            <!-- Avatar -->
                                            <img class="dt-avatar"
                                                 src="<?php echo assets_url('images/user-avatar/jimmy-jo.jpg');?>"
                                                 alt="Jimmy Jo">
                                            <!-- /avatar -->

                                            <!-- Contact Info -->
                                            <div class="dt-contact__info">
                                                <h4 class="dt-contact__title">Jimmy Jo</h4>
                                                <p class="dt-contact__desc">tried the
                                                    suggest...</p>
                                            </div>
                                            <!-- /contact info -->

                                        </div>
                                        <!-- /contact -->

                                        <!-- Contact -->
                                        <div class="dt-contact" data-location="<?php echo site_url('apps/chat-start'); ?>">

                                            <!-- Avatar -->
                                            <span class="dt-avatar bg-dark-blue text-white">JB</span>
                                            <!-- /avatar -->

                                            <!-- Contact Info -->
                                            <div class="dt-contact__info">
                                                <h4 class="dt-contact__title">Jeo Brown</h4>
                                                <p class="dt-contact__desc">tried the
                                                    suggest...</p>
                                            </div>
                                            <!-- /contact info -->

                                        </div>
                                        <!-- /contact -->

                                        <!-- Contact -->
                                        <div class="dt-contact" data-location="<?php echo site_url('apps/chat-start'); ?>">

                                            <!-- Avatar -->
                                            <img class="dt-avatar"
                                                 src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>"
                                                 alt="Steve Smith">
                                            <!-- /avatar -->

                                            <!-- Contact Info -->
                                            <div class="dt-contact__info">
                                                <h4 class="dt-contact__title">Domnic Joe</h4>
                                                <p class="dt-contact__desc">tried the
                                                    suggest...</p>
                                            </div>
                                            <!-- /contact info -->

                                        </div>
                                        <!-- /contact -->

                                        <!-- Contact -->
                                        <div class="dt-contact" data-location="<?php echo site_url('apps/chat-start'); ?>">

                                            <!-- Avatar -->
                                            <span class="dt-avatar bg-dark-blue text-white">RB</span>
                                            <!-- /avatar -->

                                            <!-- Contact Info -->
                                            <div class="dt-contact__info">
                                                <h4 class="dt-contact__title">Ron Brown</h4>
                                                <p class="dt-contact__desc">tried the
                                                    suggest...</p>
                                            </div>
                                            <!-- /contact info -->

                                        </div>
                                        <!-- /contact -->

                                        <!-- Contact -->
                                        <div class="dt-contact" data-location="<?php echo site_url('apps/chat-start'); ?>">

                                            <!-- Avatar -->
                                            <img class="dt-avatar"
                                                 src="<?php echo assets_url('images/user-avatar/stella-johnson.jpg');?>"
                                                 alt="Stella Johnson">
                                            <!-- /avatar -->

                                            <!-- Contact Info -->
                                            <div class="dt-contact__info">
                                                <h4 class="dt-contact__title">Stella
                                                    Johnson</h4>
                                                <p class="dt-contact__desc">tried the
                                                    suggest...</p>
                                            </div>
                                            <!-- /contact info -->

                                        </div>
                                        <!-- /contact -->

                                        <!-- Contact -->
                                        <div class="dt-contact" data-location="<?php echo site_url('apps/chat-start'); ?>">

                                            <!-- Avatar -->
                                            <span class="dt-avatar bg-orange text-white">TG</span>
                                            <!-- /avatar -->

                                            <!-- Contact Info -->
                                            <div class="dt-contact__info">
                                                <h4 class="dt-contact__title">Tyler
                                                    Guerrero</h4>
                                                <p class="dt-contact__desc">tried the
                                                    suggest...</p>
                                            </div>
                                            <!-- /contact info -->

                                        </div>
                                        <!-- /contact -->

                                    </div>
                                    <!-- contacts -->
                                </div>
                            </div>
                            <!-- /contact container -->

                        </div>
                        <!-- /tab panel -->

                    </div>
                    <!-- /tab content-->

                </div>
                <!-- /sidebar Menu -->

            </div>
            <!-- /module sidebar -->

            <!-- Module Container -->
            <div class="dt-module__container">

                <!-- Module Content -->
                <div class="dt-module__content">

                    <!-- Module Content Inner -->
                    <div class="dt-module__content-inner h-100 d-flex flex-column justify-content-center align-items-center">
                        <div class="icon icon-message icon-fw icon-7x mb-2"></div>
                        <h1 class="display-4">Select User to start Chat</h1>

                        <button class="btn btn-primary d-md-none"
                                data-toggle="msidebar-content">Select contact to start Chat
                        </button>
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
                        <a href="javascript:void(0)" class="d-inline-block"
                           data-dismiss="mdrawer">
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
                                       data-switch="mdrawer"
                                       data-target="#drawer-notifications">
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

                                <!-- Menu Item -->
                                <li class="dt-action-nav__item dropdown">
                                    <!-- Dropdown Button -->
                                    <a href="#"
                                       class="dropdown-toggle no-arrow dt-action-nav__link"
                                       data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                        <i class="icon icon-circle-add-o"></i> </a>
                                    <!-- /dropdown button -->

                                    <!-- Dropdown Menu -->
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0)">Add
                                            New
                                            Project</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Add
                                            New
                                            Task</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Add
                                            New
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
                                        <input class="form-control form-control-lg"
                                               id="address-1"
                                               name="address-1" placeholder="Search in app..."
                                               type="search">
                                        <button type="submit" class="search-icon"><i
                                                class="icon icon-search icon-lg"></i>
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
                                             src="<?php echo assets_url('images/user-avatar/selena.jpg');?>"
                                             alt="User">
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
                                             src="<?php echo assets_url('images/user-avatar/amay.jpg');?>"
                                             alt="User">
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
