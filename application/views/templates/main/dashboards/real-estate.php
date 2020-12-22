<!-- Page Header -->
<div class="dt-page__header">
    <h1 class="dt-page__title">Dashboard - Real Estate</h1>
</div>
<!-- /page header -->

<!-- Grid -->
<div class="row">

    <!-- Grid Item -->
    <div class="col-md-6 order-xl-1">

        <!-- Card -->
        <div class="dt-card dt-card__full-height dt-chart overflow-hidden">

            <!-- Card Header -->
            <div class="dt-card__header">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title">Statics</h3>
                </div>
                <!-- /card heading -->

                <!-- Card Tools -->
                <div class="dt-card__tools">

                    <!-- Dropdown -->
                    <div class="dropdown d-inline-block">
                        <a class="dropdown-toggle btn btn-default btn-xs bg-transparent border"
                           href="#"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Today
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">Yesterday</a>
                            <a class="dropdown-item" href="javascript:void(0)">Today</a>
                            <a class="dropdown-item" href="javascript:void(0)">Tomorrow</a>
                        </div>
                    </div>
                    <!-- /dropdown -->

                </div>
                <!-- /card tools -->

            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-chart__body">
                <canvas height="155" id="chart-statics" data-shadow="yes"></canvas>
            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-xl-4 col-md-6 order-xl-3">

        <!-- Card -->
        <div class="dt-card dt-card__full-height dt-chart overflow-hidden">

            <!-- Card Header -->
            <div class="dt-card__header">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title">Revenue</h3>
                </div>
                <!-- /card heading -->

                <!-- Card Tools -->
                <div class="dt-card__tools">

                    <!-- Dropdown -->
                    <div class="dropdown d-inline-block">
                        <a class="dropdown-toggle btn btn-default btn-xs bg-transparent border"
                           href="#"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            2019
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">2016</a>
                            <a class="dropdown-item" href="javascript:void(0)">2017</a>
                            <a class="dropdown-item" href="javascript:void(0)">2018</a>
                        </div>
                    </div>
                    <!-- /dropdown -->

                </div>
                <!-- /card tools -->

            </div>
            <!-- /card header -->

            <div class="px-7 mb-7">
                <!-- Media -->
                <div class="media">
                    <!-- Media Body -->
                    <div class="media-body">
                        <p class="mb-1 h3 text-sky-blue font-weight-500">$12,45,125</p>
                        <span class="d-block">Business Revenue</span>
                    </div>
                    <!-- /media body -->
                    <!-- Media Body -->
                    <div class="media-body">
                        <p class="mb-1 h3 text-warning font-weight-500">$14,200</p>
                        <span class="d-block">Total Expenses</span>
                    </div>
                    <!-- /media body -->
                </div>
                <!-- /media -->
            </div>

            <!-- Card Body -->
            <div class="dt-chart__body">
                <canvas height="175" id="chart-revenue" data-shadow="yes"></canvas>
            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-xl-6 col-12 order-xl-2">

        <!-- Grid -->
        <div class="row">
            <!-- Grid Item -->
            <div class="col-sm-6">
                <!-- Card -->
                <div class="dt-card">

                    <!-- Card Body -->
                    <div class="dt-card__body d-flex flex-sm-column">
                        <div class="mb-sm-7 mr-7 mr-sm-0">
                            <i class="icon icon-users dt-icon-bg bg-primary text-primary"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex align-items-center mb-2">
                                <span class="h2 mb-0 font-weight-500 mr-2">2500</span>
                                <span class="d-inline-flex text-success">
                                    <i class="icon icon-profit icon-fw"></i>+23%
                                </span>
                            </div>
                            <div class="h5 mb-2">Today's Visitor</div>
                            <p class="card-text text-light-gray f-12">Last update on 08:30 PM</p>
                        </div>
                    </div>
                    <!-- /card body -->

                </div>
                <!-- /card -->
            </div>
            <!-- /grid item -->

            <!-- Grid Item -->
            <div class="col-sm-6">
                <!-- Card -->
                <div class="dt-card">

                    <!-- Card Body -->
                    <div class="dt-card__body d-flex flex-sm-column">
                        <div class="mb-sm-7 mr-7 mr-sm-0">
                            <i class="icon icon-company dt-icon-bg bg-success text-success"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex align-items-center mb-2">
                                <span class="h2 mb-0 font-weight-500 mr-2">2,45,855</span>
                                <span class="d-inline-flex text-success">
                                    <i class="icon icon-profit icon-fw"></i>+23%
                                </span>
                            </div>
                            <div class="h5 mb-2">Properties Listed</div>
                            <p class="card-text text-light-gray f-12">Last update 1 Month ago</p>
                        </div>
                    </div>
                    <!-- /card body -->

                </div>
                <!-- /card -->
            </div>
            <!-- /grid item -->

            <!-- Grid Item -->
            <div class="col-sm-6">
                <!-- Card -->
                <div class="dt-card">

                    <!-- Card Body -->
                    <div class="dt-card__body d-flex flex-sm-column">
                        <div class="mb-sm-7 mr-7 mr-sm-0">
                            <i class="icon icon-customer dt-icon-bg bg-secondary text-secondary"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex align-items-center mb-2">
                                <span class="h2 mb-0 font-weight-500 mr-2">508</span>
                                <span class="d-inline-flex text-danger">
                                    <i class="icon icon-loss icon-fw"></i>-5%
                                </span>
                            </div>
                            <div class="h5 mb-2">Total Vendors</div>
                            <p class="card-text text-light-gray f-12">Just updated</p>
                        </div>
                    </div>
                    <!-- /card body -->

                </div>
                <!-- /card -->
            </div>
            <!-- /grid item -->

            <!-- Grid Item -->
            <div class="col-sm-6">
                <!-- Card -->
                <div class="dt-card">

                    <!-- Card Body -->
                    <div class="dt-card__body d-flex flex-sm-column">
                        <div class="mb-sm-7 mr-7 mr-sm-0">
                            <i class="icon icon-revenue-new dt-icon-bg bg-orange text-orange"></i>
                        </div>
                        <div class="flex-1">
                            <div class="d-flex align-items-center mb-2">
                                <span class="h2 mb-0 font-weight-500 mr-2">$12,588</span>
                                <span class="d-inline-flex text-success">
                                    <i class="icon icon-profit icon-fw"></i>+23%
                                </span>
                            </div>
                            <div class="h5 mb-2">Today’s Profit</div>
                            <p class="card-text text-light-gray f-12">Last update 30 Min ago</p>
                        </div>
                    </div>
                    <!-- /card body -->

                </div>
                <!-- /card -->
            </div>
            <!-- /grid item -->
        </div>
        <!-- /grid -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-xl-4 col-md-6 order-xl-4">

        <!-- Card -->
        <div class="dt-card pb-5">

            <!-- Card Header -->
            <div class="dt-card__header mb-5">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title">Top Vendors</h3>
                </div>
                <!-- /card heading -->

                <!-- Card Tools -->
                <div class="dt-card__tools">
                    <ul class="nav nav-sm nav-underline nav-underline-none" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#premium" role="tab"
                               aria-controls="premium"
                               aria-selected="true">Premium</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#full" role="tab"
                               aria-controls="full"
                               aria-selected="true">Full</a>
                        </li>
                    </ul>
                </div>
                <!-- /card tools -->

            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card__body p-0">

                <!-- Tab Content-->
                <div class="tab-content">

                    <!-- Tab panel -->
                    <div id="premium" class="tab-pane active">

                        <!-- Widget -->
                        <div class="dt-widget dt-widget-sm dt-widget-hover">

                            <!-- Widget Item -->
                            <div class="dt-widget__item">

                                <!-- Widget Image -->
                                <div class="dt-widget__img">
                                    <img class="img-fluid max-w-90" src="<?php echo assets_url('images/logo/4.jpg');?>"
                                         alt="Logo">
                                </div>
                                <!-- /widget image -->

                                <!-- Widget Info -->
                                <div class="dt-widget__info text-truncate">
                                    <div class="dt-widget__title text-truncate">
                                        <a href="#">Goyal and Co.</a>
                                    </div>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-bordered dt-widget__subtitle text-light-gray dt-list-cm-0 flex-nowrap">
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">4122 </span>Properties</span>
                                        </li>
                                        <!-- /list item -->
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">1225 </span>Favorites</span>
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->
                                </div>
                                <!-- /widget info -->

                            </div>
                            <!-- /widgets item -->

                            <!-- Widget Item -->
                            <div class="dt-widget__item">

                                <!-- Widget Image -->
                                <div class="dt-widget__img">
                                    <img class="img-fluid max-w-90" src="<?php echo assets_url('images/logo/5.jpg');?>"
                                         alt="Logo">
                                </div>
                                <!-- /widget image -->

                                <!-- Widget Info -->
                                <div class="dt-widget__info text-truncate">
                                    <div class="dt-widget__title text-truncate">
                                        <a href="#">Savaliya Builders</a>
                                    </div>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-bordered dt-widget__subtitle text-light-gray dt-list-cm-0 flex-nowrap">
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">4122 </span>Properties</span>
                                        </li>
                                        <!-- /list item -->
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">1225 </span>Favorites</span>
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->
                                </div>
                                <!-- /widget info -->

                            </div>
                            <!-- /widgets item -->

                            <!-- Widget Item -->
                            <div class="dt-widget__item">

                                <!-- Widget Image -->
                                <div class="dt-widget__img">
                                    <img class="img-fluid max-w-90" src="<?php echo assets_url('images/logo/9.jpg');?>"
                                         alt="Logo">
                                </div>
                                <!-- /widget image -->

                                <!-- Widget Info -->
                                <div class="dt-widget__info text-truncate">
                                    <div class="dt-widget__title text-truncate">
                                        <a href="#">Galaxy Group Pvt. Ltd</a>
                                    </div>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-bordered dt-widget__subtitle text-light-gray dt-list-cm-0 flex-nowrap">
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">4122 </span>Properties</span>
                                        </li>
                                        <!-- /list item -->
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">1225 </span>Favorites</span>
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->
                                </div>
                                <!-- /widget info -->

                            </div>
                            <!-- /widgets item -->

                            <!-- Widget Item -->
                            <div class="dt-widget__item">

                                <!-- Widget Image -->
                                <div class="dt-widget__img">
                                    <img class="img-fluid max-w-90" src="<?php echo assets_url('images/logo/1.jpg');?>"
                                         alt="Logo">
                                </div>
                                <!-- /widget image -->

                                <!-- Widget Info -->
                                <div class="dt-widget__info text-truncate">
                                    <div class="dt-widget__title text-truncate">
                                        <a href="#">Savvy Infrastructure</a>
                                    </div>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-bordered dt-widget__subtitle text-light-gray dt-list-cm-0 flex-nowrap">
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">4122 </span>Properties</span>
                                        </li>
                                        <!-- /list item -->
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">1225 </span>Favorites</span>
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->
                                </div>
                                <!-- /widget info -->

                            </div>
                            <!-- /widgets item -->

                            <!-- Widget Item -->
                            <div class="dt-widget__item">

                                <!-- Widget Image -->
                                <div class="dt-widget__img">
                                    <img class="img-fluid max-w-90" src="<?php echo assets_url('images/logo/7.jpg');?>"
                                         alt="Logo">
                                </div>
                                <!-- /widget image -->

                                <!-- Widget Info -->
                                <div class="dt-widget__info text-truncate">
                                    <div class="dt-widget__title text-truncate">
                                        <a href="#">Sparsh Procon Pvt. Ltd.</a></div>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-bordered dt-widget__subtitle text-light-gray dt-list-cm-0 flex-nowrap">
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">4122 </span>Properties</span>
                                        </li>
                                        <!-- /list item -->
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">1225 </span>Favorites</span>
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->
                                </div>
                                <!-- /widget info -->

                            </div>
                            <!-- /widgets item -->

                        </div>
                        <!-- /widget -->

                    </div>
                    <!-- /tab panel -->

                    <!-- Tab panel -->
                    <div id="full" class="tab-pane">

                        <!-- Widget -->
                        <div class="dt-widget dt-widget-sm dt-widget-hover">

                            <!-- Widget Item -->
                            <div class="dt-widget__item">

                                <!-- Widget Image -->
                                <div class="dt-widget__img">
                                    <img class="img-fluid max-w-90" src="<?php echo assets_url('images/logo/9.jpg');?>"
                                         alt="Logo">
                                </div>
                                <!-- /widget image -->

                                <!-- Widget Info -->
                                <div class="dt-widget__info text-truncate">
                                    <div class="dt-widget__title text-truncate">
                                        <a href="#">Galaxy Group Pvt. Ltd</a>
                                    </div>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-bordered dt-widget__subtitle text-light-gray dt-list-cm-0 flex-nowrap">
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">4122 </span>Properties</span>
                                        </li>
                                        <!-- /list item -->
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">1225 </span>Favorites</span>
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->
                                </div>
                                <!-- /widget info -->

                            </div>
                            <!-- /widgets item -->

                            <!-- Widget Item -->
                            <div class="dt-widget__item">

                                <!-- Widget Image -->
                                <div class="dt-widget__img">
                                    <img class="img-fluid max-w-90" src="<?php echo assets_url('images/logo/4.jpg');?>"
                                         alt="Logo">
                                </div>
                                <!-- /widget image -->

                                <!-- Widget Info -->
                                <div class="dt-widget__info text-truncate">
                                    <div class="dt-widget__title text-truncate">
                                        <a href="#">Goyal and Co.</a>
                                    </div>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-bordered dt-widget__subtitle text-light-gray dt-list-cm-0 flex-nowrap">
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">4122 </span>Properties</span>
                                        </li>
                                        <!-- /list item -->
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">1225 </span>Favorites</span>
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->
                                </div>
                                <!-- /widget info -->

                            </div>
                            <!-- /widgets item -->

                            <!-- Widget Item -->
                            <div class="dt-widget__item">

                                <!-- Widget Image -->
                                <div class="dt-widget__img">
                                    <img class="img-fluid max-w-90" src="<?php echo assets_url('images/logo/7.jpg');?>"
                                         alt="Logo">
                                </div>
                                <!-- /widget image -->

                                <!-- Widget Info -->
                                <div class="dt-widget__info text-truncate">
                                    <div class="dt-widget__title text-truncate">
                                        <a href="#">Sparsh Procon Pvt. Ltd.</a></div>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-bordered dt-widget__subtitle text-light-gray dt-list-cm-0 flex-nowrap">
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">4122 </span>Properties</span>
                                        </li>
                                        <!-- /list item -->
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">1225 </span>Favorites</span>
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->
                                </div>
                                <!-- /widget info -->

                            </div>
                            <!-- /widgets item -->

                            <!-- Widget Item -->
                            <div class="dt-widget__item">

                                <!-- Widget Image -->
                                <div class="dt-widget__img">
                                    <img class="img-fluid max-w-90" src="<?php echo assets_url('images/logo/1.jpg');?>"
                                         alt="Logo">
                                </div>
                                <!-- /widget image -->

                                <!-- Widget Info -->
                                <div class="dt-widget__info text-truncate">
                                    <div class="dt-widget__title text-truncate">
                                        <a href="#">Savvy Infrastructure</a>
                                    </div>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-bordered dt-widget__subtitle text-light-gray dt-list-cm-0 flex-nowrap">
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">4122 </span>Properties</span>
                                        </li>
                                        <!-- /list item -->
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">1225 </span>Favorites</span>
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->
                                </div>
                                <!-- /widget info -->

                            </div>
                            <!-- /widgets item -->

                            <!-- Widget Item -->
                            <div class="dt-widget__item">

                                <!-- Widget Image -->
                                <div class="dt-widget__img">
                                    <img class="img-fluid max-w-90" src="<?php echo assets_url('images/logo/5.jpg');?>"
                                         alt="Logo">
                                </div>
                                <!-- /widget image -->

                                <!-- Widget Info -->
                                <div class="dt-widget__info text-truncate">
                                    <div class="dt-widget__title text-truncate">
                                        <a href="#">Savaliya Builders</a>
                                    </div>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-bordered dt-widget__subtitle text-light-gray dt-list-cm-0 flex-nowrap">
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">4122 </span>Properties</span>
                                        </li>
                                        <!-- /list item -->
                                        <!-- List Item -->
                                        <li class="dt-list__item text-truncate">
                                            <span><span class="text-dark">1225 </span>Favorites</span>
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->
                                </div>
                                <!-- /widget info -->

                            </div>
                            <!-- /widgets item -->

                        </div>
                        <!-- /widget -->

                    </div>
                    <!-- /tab panel -->

                </div>
                <!-- /tab content-->

            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-xl-4 col-md-6 order-xl-5">

        <!-- Card -->
        <div class="dt-card pb-4">

            <!-- Card Header -->
            <div class="dt-card__header mb-5">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title">Trending Properties</h3>
                </div>
                <!-- /card heading -->

            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card__body p-0">
                <!-- Widget -->
                <div class="dt-widget dt-widget-sm dt-widget-hover">
                    <!-- Widget Item -->
                    <div class="dt-widget__item">

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <div class="dt-widget__title text-truncate">
                                <a class="text-truncate" href="javascript:void(0)">Nakshtra
                                    Banglow</a>
                            </div>

                            <ul class="dt-list dt-widget__subtitle text-light-gray dt-list-cm-0 flex-nowrap">
                                <!-- List Item -->
                                <li class="dt-list__item text-truncate">
                                    <span class="text-truncate"><i class="icon icon-users2 mr-1"></i><span
                                            class="text-dark">1422</span> Visitors</span>
                                </li>
                                <!-- /list item -->
                                <!-- List Item -->
                                <li class="dt-list__item text-truncate">
                                    <span class="text-truncate"><i
                                            class="icon icon-location mr-1"></i>Kunjgali, Vrindavan</span>
                                </li>
                                <!-- /list item -->
                            </ul>

                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-extra animate-slide align-self-center">
                            <div class="slide-content">
                                <a href="javascript:void(0)"><i
                                        class="icon icon-arrow-right icon-fw icon-xl"></i></a>
                            </div>
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widget Item close-->

                    <!-- Widget Item -->
                    <div class="dt-widget__item">

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <div class="dt-widget__title text-truncate">
                                <a class="text-truncate" href="javascript:void(0)">Siddhi
                                    Banglow</a>
                            </div>

                            <ul class="dt-list dt-widget__subtitle text-light-gray dt-list-cm-0 flex-nowrap">
                                <!-- List Item -->
                                <li class="dt-list__item text-truncate">
                                    <span class="text-truncate"><i class="icon icon-users2 mr-1"></i><span
                                            class="text-dark">2500</span> Visitors</span>
                                </li>
                                <!-- /list item -->
                                <!-- List Item -->
                                <li class="dt-list__item text-truncate">
                                    <span class="text-truncate"><i
                                            class="icon icon-location mr-1"></i>Satellite, New Delhi</span>
                                </li>
                                <!-- /list item -->
                            </ul>

                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-extra animate-slide align-self-center">
                            <div class="slide-content">
                                <a href="javascript:void(0)"><i
                                        class="icon icon-arrow-right icon-fw icon-xl"></i></a>
                            </div>
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widget Item close-->

                    <!-- Widget Item -->
                    <div class="dt-widget__item">

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <div class="dt-widget__title text-truncate">
                                <a class="text-truncate" href="javascript:void(0)">Sankalp Grace
                                    2</a>
                            </div>

                            <ul class="dt-list dt-widget__subtitle text-light-gray dt-list-cm-0 flex-nowrap">
                                <!-- List Item -->
                                <li class="dt-list__item text-truncate">
                                    <span class="text-truncate"><i class="icon icon-users2 mr-1"></i><span
                                            class="text-dark">855</span> Visitors</span>
                                </li>
                                <!-- /list item -->
                                <!-- List Item -->
                                <li class="dt-list__item text-truncate">
                                    <span class="text-truncate"><i
                                            class="icon icon-location mr-1"></i>Gohilwad, Bikaner</span>
                                </li>
                                <!-- /list item -->
                            </ul>

                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-extra animate-slide align-self-center">
                            <div class="slide-content">
                                <a href="javascript:void(0)"><i
                                        class="icon icon-arrow-right icon-fw icon-xl"></i></a>
                            </div>
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widget Item close-->

                    <!-- Widget Item -->
                    <div class="dt-widget__item">

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <div class="dt-widget__title text-truncate">
                                <a class="text-truncate" href="javascript:void(0)">Arayan Villa</a>
                            </div>

                            <ul class="dt-list dt-widget__subtitle text-light-gray dt-list-cm-0 flex-nowrap">
                                <!-- List Item -->
                                <li class="dt-list__item text-truncate">
                                    <span class="text-truncate"><i class="icon icon-users2 mr-1"></i><span
                                            class="text-dark">755</span> Visitors</span>
                                </li>
                                <!-- /list item -->
                                <!-- List Item -->
                                <li class="dt-list__item text-truncate">
                                    <span class="text-truncate"><i
                                            class="icon icon-location mr-1"></i>Chankyapuri, Jodhpur</span>
                                </li>
                                <!-- /list item -->
                            </ul>

                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-extra animate-slide align-self-center">
                            <div class="slide-content">
                                <a href="javascript:void(0)"><i
                                        class="icon icon-arrow-right icon-fw icon-xl"></i></a>
                            </div>
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widget Item close-->

                    <!-- Widget Item -->
                    <div class="dt-widget__item">

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <div class="dt-widget__title text-truncate">
                                <a class="text-truncate" href="javascript:void(0)">Goyal Arcus</a>
                            </div>

                            <ul class="dt-list dt-widget__subtitle text-light-gray dt-list-cm-0 flex-nowrap">
                                <!-- List Item -->
                                <li class="dt-list__item text-truncate">
                                    <span class="text-truncate"><i class="icon icon-users2 mr-1"></i><span
                                            class="text-dark">1422</span> Visitors</span>
                                </li>
                                <!-- /list item -->
                                <!-- List Item -->
                                <li class="dt-list__item text-truncate">
                                    <span class="text-truncate"><i
                                            class="icon icon-location mr-1"></i>Gohilwad, Bikaner</span>
                                </li>
                                <!-- /list item -->
                            </ul>

                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-extra animate-slide align-self-center">
                            <div class="slide-content">
                                <a href="javascript:void(0)"><i
                                        class="icon icon-arrow-right icon-fw icon-xl"></i></a>
                            </div>
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widget Item close-->
                </div>
                <!-- /widget -->
            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-12 order-xl-6">
        <!-- Card -->
        <div class="dt-card">
            <!-- Grid -->
            <div class="row no-gutters">
                <!-- Grid Item -->
                <div class="col-xl-6">
                    <!-- Card Body -->
                    <div class="dt-card__body pr-xl-0 h-100">
                        <div class="embed-responsive embed-responsive-16by9 h-100">
                            <div class="embed-responsive-item gmap-container"
                                 data-map-type="basic"></div>
                        </div>
                    </div>
                    <!-- /card body -->
                </div>
                <!-- /grid item -->

                <!-- Grid Item -->
                <div class="col-xl-6">

                    <!-- Card Header -->
                    <div class="dt-card__header mb-0">

                        <!-- Card Heading -->
                        <div class="dt-card__heading">
                            <h3 class="dt-card__title">Most Search Places</h3>
                        </div>
                        <!-- /card heading -->

                        <!-- Card Tools -->
                        <div class="dt-card__tools">
                            <ul class="nav nav-sm nav-underline nav-underline-none" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#city"
                                       role="tab" aria-controls="city"
                                       aria-selected="true">City</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#state" role="tab"
                                       aria-controls="state"
                                       aria-selected="true">State</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#area" role="tab"
                                       aria-controls="area"
                                       aria-selected="true">Area</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /card tools -->

                    </div>
                    <!-- /card header -->

                    <!-- Card Body -->
                    <div class="dt-card__body">

                        <!-- Tab Content-->
                        <div class="tab-content">

                            <!-- Tab panel -->
                            <div id="city" class="tab-pane active">
                                <!-- Tables -->
                                <div class="table-responsive">
                                    <table class="table table-hover-text mb-0 table-fluid">
                                        <thead>
                                            <tr>
                                                <th scope="col">City Name</th>
                                                <th class="text-right" scope="col">Properties</th>
                                                <th class="text-right" scope="col">Vendors</th>
                                                <th scope="col">Visitors</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-dark">West Lenny</td>
                                                <td class="text-right">1255</td>
                                                <td class="text-right">356</td>
                                                <td>71,532</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">Lake Jeffry</td>
                                                <td class="text-right">325</td>
                                                <td class="text-right">576</td>
                                                <td>62,022</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">North Maybelle</td>
                                                <td class="text-right">785</td>
                                                <td class="text-right">686</td>
                                                <td>31,143</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">North Duane</td>
                                                <td class="text-right">458</td>
                                                <td class="text-right">803</td>
                                                <td>71,118</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">Turnerborough</td>
                                                <td class="text-right">988</td>
                                                <td class="text-right">388</td>
                                                <td>36,676</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /tables -->
                            </div>
                            <!-- /tab panel -->

                            <!-- Tab panel -->
                            <div id="state" class="tab-pane">
                                <!-- Tables -->
                                <div class="table-responsive">
                                    <table class="table table-hover-text mb-0 table-fluid">
                                        <thead>
                                            <tr>
                                                <th scope="col">State Name</th>
                                                <th class="text-right" scope="col">Properties</th>
                                                <th class="text-right" scope="col">Vendors</th>
                                                <th scope="col">Visitors</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-dark">West Lenny</td>
                                                <td class="text-right">1255</td>
                                                <td class="text-right">356</td>
                                                <td>71,532</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">Lake Jeffry</td>
                                                <td class="text-right">325</td>
                                                <td class="text-right">576</td>
                                                <td>62,022</td>
                                            </tr>

                                            <tr>
                                                <td class="text-dark">North Duane</td>
                                                <td class="text-right">458</td>
                                                <td class="text-right">803</td>
                                                <td>71,118</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">Turnerborough</td>
                                                <td class="text-right">988</td>
                                                <td class="text-right">388</td>
                                                <td>36,676</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">North Maybelle</td>
                                                <td class="text-right">785</td>
                                                <td class="text-right">686</td>
                                                <td>31,143</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /tables -->
                            </div>
                            <!-- /tab panel -->

                            <!-- Tab panel -->
                            <div id="area" class="tab-pane">
                                <!-- Tables -->
                                <div class="table-responsive">
                                    <table class="table table-hover-text mb-0 table-fluid">
                                        <thead>
                                            <tr>
                                                <th scope="col">Area Name</th>
                                                <th scope="col" class="text-right">Properties</th>
                                                <th scope="col" class="text-right">Vendors</th>
                                                <th scope="col">Visitors</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-dark">Lake Jeffry</td>
                                                <td class="text-right">325</td>
                                                <td class="text-right">576</td>
                                                <td>62,022</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">West Lenny</td>
                                                <td class="text-right">1255</td>
                                                <td class="text-right">356</td>
                                                <td>71,532</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">North Maybelle</td>
                                                <td class="text-right">785</td>
                                                <td class="text-right">686</td>
                                                <td>31,143</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">North Duane</td>
                                                <td class="text-right">458</td>
                                                <td class="text-right">803</td>
                                                <td>71,118</td>
                                            </tr>
                                            <tr>
                                                <td class="text-dark">Turnerborough</td>
                                                <td class="text-right">988</td>
                                                <td class="text-right">388</td>
                                                <td>36,676</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /tables -->

                            </div>
                            <!-- /tab panel -->

                        </div>
                        <!-- /tab content-->

                    </div>
                    <!-- /card body -->

                </div>
                <!-- /grid item -->
            </div>
            <!-- /grid -->
        </div>
        <!-- /card -->
    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-md-6 order-xl-7">

        <!-- Card -->
        <div class="dt-card dt-card__full-height pb-4">

            <!-- Card Header -->
            <div class="dt-card__header mb-3">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title">Vendor Requests</h3>
                </div>
                <!-- /card heading -->

                <!-- Card Tools -->
                <div class="dt-card__tools">

                    <!-- Dropdown -->
                    <div class="dropdown d-inline-block">
                        <a class="dropdown-toggle btn btn-default btn-xs bg-transparent border"
                           href="#"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Today
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">Yesterday</a>
                            <a class="dropdown-item" href="javascript:void(0)">Today</a>
                            <a class="dropdown-item" href="javascript:void(0)">Tomorrow</a>
                        </div>
                    </div>
                    <!-- /dropdown -->

                </div>
                <!-- /card tools -->

            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card__body p-0 max-h-400 ps-custom-scrollbar">
                <!-- Widget -->
                <div class="dt-widget dt-widget-hover-bg text-light-gray">

                    <!-- Widget Item -->
                    <div class="dt-widget__item">

                        <!-- Widget Image -->
                        <div class="dt-widget__img">
                            <img class="img-fluid max-w-105" src="<?php echo assets_url('images/logo/4.jpg');?>"
                                 alt="Logo">
                        </div>
                        <!-- /widget image -->

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <div class="dt-widget__title text-truncate">
                                <a href="#">Goyal and Co.</a>
                                <span class="badge badge-sm badge-pill badge-success d-none d-sm-inline-block">Basic</span>
                            </div>
                            <p class="dt-widget__subtitle text-truncate">
                                missouri.gerhold@example.com</p>
                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-widget__extra">
                            <!-- Show Content -->
                            <div class="show-content">
                                <span class="d-block">Today</span>
                            </div>
                            <!-- /show content -->
                            <!-- Hide Content -->
                            <div class="hide-content">
                                <!-- Action Button Group -->
                                <div class="action-btn-group">
                                    <button class="btn btn-default text-success dt-fab-btn">
                                        <i class="icon icon-task-manager icon-1x"></i>
                                    </button>
                                    <button class="btn btn-default text-danger dt-fab-btn">
                                        <i class="icon icon-circle-remove-o icon-1x"></i>
                                    </button>
                                </div>
                                <!-- /action button group -->
                            </div>
                            <!-- /hide content -->
                        </div>
                        <!-- /widget extra -->
                    </div>
                    <!-- /widgets item -->

                    <!-- Widget Item -->
                    <div class="dt-widget__item">

                        <!-- Widget Image -->
                        <div class="dt-widget__img">
                            <img class="img-fluid max-w-105" src="<?php echo assets_url('images/logo/5.jpg');?>"
                                 alt="Logo">
                        </div>
                        <!-- /widget image -->

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <div class="dt-widget__title text-truncate">
                                <a href="#">Swati Procon</a>
                                <span class="badge badge-sm badge-pill badge-danger d-none d-sm-inline-block">Platinum</span>
                            </div>
                            <p class="dt-widget__subtitle text-truncate">
                                missouri.gerhold@example.com</p>
                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-widget__extra">
                            <!-- Show Content -->
                            <div class="show-content">
                                <span class="d-block">Today</span>
                            </div>
                            <!-- /show content -->
                            <!-- Hide Content -->
                            <div class="hide-content">
                                <!-- Action Button Group -->
                                <div class="action-btn-group">
                                    <button class="btn btn-default text-success dt-fab-btn">
                                        <i class="icon icon-task-manager icon-1x"></i>
                                    </button>
                                    <button class="btn btn-default text-danger dt-fab-btn">
                                        <i class="icon icon-circle-remove-o icon-1x"></i>
                                    </button>
                                </div>
                                <!-- /action button group -->
                            </div>
                            <!-- /hide content -->
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widgets item -->

                    <!-- Widget Item -->
                    <div class="dt-widget__item">

                        <!-- Widget Image -->
                        <div class="dt-widget__img">
                            <img class="img-fluid max-w-105" src="<?php echo assets_url('images/logo/9.jpg');?>"
                                 alt="Logo">
                        </div>
                        <!-- /widget image -->

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <div class="dt-widget__title text-truncate">
                                <a href="#">Sparsh Procon Pvt. Ltd.</a>
                                <span class="badge badge-sm badge-pill badge-success d-none d-sm-inline-block">Basic</span>
                            </div>
                            <p class="dt-widget__subtitle text-truncate">
                                missouri.gerhold@example.com</p>
                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-widget__extra">
                            <!-- Show Content -->
                            <div class="show-content">
                                <span class="d-block">Today</span>
                            </div>
                            <!-- /show content -->
                            <!-- Hide Content -->
                            <div class="hide-content">
                                <!-- Action Button Group -->
                                <div class="action-btn-group">
                                    <button class="btn btn-default text-success dt-fab-btn">
                                        <i class="icon icon-task-manager icon-1x"></i>
                                    </button>
                                    <button class="btn btn-default text-danger dt-fab-btn">
                                        <i class="icon icon-circle-remove-o icon-1x"></i>
                                    </button>
                                </div>
                                <!-- /action button group -->
                            </div>
                            <!-- /hide content -->
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widgets item -->

                    <!-- Widget Item -->
                    <div class="dt-widget__item">

                        <!-- Widget Image -->
                        <div class="dt-widget__img">
                            <img class="img-fluid max-w-105" src="<?php echo assets_url('images/logo/1.jpg');?>"
                                 alt="Logo">
                        </div>
                        <!-- /widget image -->

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <div class="dt-widget__title text-truncate">
                                <a href="#">SS Group</a>
                                <span class="badge badge-sm badge-pill badge-success d-none d-sm-inline-block">Basic</span>
                            </div>
                            <p class="dt-widget__subtitle text-truncate">
                                missouri.gerhold@example.com</p>
                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-widget__extra">
                            <!-- Show Content -->
                            <div class="show-content">
                                <span class="d-block">Today</span>
                            </div>
                            <!-- /show content -->
                            <!-- Hide Content -->
                            <div class="hide-content">
                                <!-- Action Button Group -->
                                <div class="action-btn-group">
                                    <button class="btn btn-default text-success dt-fab-btn">
                                        <i class="icon icon-task-manager icon-1x"></i>
                                    </button>
                                    <button class="btn btn-default text-danger dt-fab-btn">
                                        <i class="icon icon-circle-remove-o icon-1x"></i>
                                    </button>
                                </div>
                                <!-- /action button group -->
                            </div>
                            <!-- /hide content -->
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widgets item -->

                    <!-- Widget Item -->
                    <div class="dt-widget__item">

                        <!-- Widget Image -->
                        <div class="dt-widget__img">
                            <img class="img-fluid max-w-105" src="<?php echo assets_url('images/logo/7.jpg');?>"
                                 alt="Logo">
                        </div>
                        <!-- /widget image -->

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <div class="dt-widget__title text-truncate">
                                <a href="#">Swetalee Developers</a>
                                <span
                                    class="badge badge-sm badge-pill badge-info d-none d-sm-inline-block">Per Property</span>
                            </div>
                            <p class="dt-widget__subtitle text-truncate">
                                missouri.gerhold@example.com</p>
                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-widget__extra">
                            <!-- Show Content -->
                            <div class="show-content">
                                <span class="d-block">Today</span>
                            </div>
                            <!-- /show content -->
                            <!-- Hide Content -->
                            <div class="hide-content">
                                <!-- Action Button Group -->
                                <div class="action-btn-group">
                                    <button class="btn btn-default text-success dt-fab-btn">
                                        <i class="icon icon-task-manager icon-1x"></i>
                                    </button>
                                    <button class="btn btn-default text-danger dt-fab-btn">
                                        <i class="icon icon-circle-remove-o icon-1x"></i>
                                    </button>
                                </div>
                                <!-- /action button group -->
                            </div>
                            <!-- /hide content -->
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widgets item -->

                    <!-- Widget Item -->
                    <div class="dt-widget__item">

                        <!-- Widget Image -->
                        <div class="dt-widget__img">
                            <img class="img-fluid max-w-105" src="<?php echo assets_url('images/logo/1.jpg');?>"
                                 alt="Logo">
                        </div>
                        <!-- /widget image -->

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <div class="dt-widget__title text-truncate">
                                <a href="#">Savvy Infrastructure</a>
                                <span class="badge badge-sm badge-pill badge-success d-none d-sm-inline-block">Basic</span>
                            </div>
                            <p class="dt-widget__subtitle text-truncate">
                                missouri.gerhold@example.com</p>
                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-widget__extra">
                            <!-- Show Content -->
                            <div class="show-content">
                                <span class="d-block">Today</span>
                            </div>
                            <!-- /show content -->
                            <!-- Hide Content -->
                            <div class="hide-content">
                                <!-- Action Button Group -->
                                <div class="action-btn-group">
                                    <button class="btn btn-default text-success dt-fab-btn">
                                        <i class="icon icon-task-manager icon-1x"></i>
                                    </button>
                                    <button class="btn btn-default text-danger dt-fab-btn">
                                        <i class="icon icon-circle-remove-o icon-1x"></i>
                                    </button>
                                </div>
                                <!-- /action button group -->
                            </div>
                            <!-- /hide content -->
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widgets item -->

                </div>
                <!-- /widget -->
            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-md-6 order-xl-8">

        <!-- Card -->
        <div class="dt-card dt-card__full-height pb-4">

            <!-- Card Header -->
            <div class="dt-card__header mb-3">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title">Support Tickets</h3>
                </div>
                <!-- /card heading -->

                <!-- Card Tools -->
                <div class="dt-card__tools">

                    <!-- Dropdown -->
                    <div class="dropdown d-inline-block">
                        <a class="dropdown-toggle btn btn-default btn-xs bg-transparent border"
                           href="#"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Unread
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">Read</a>
                            <a class="dropdown-item" href="javascript:void(0)">Unread</a>
                            <a class="dropdown-item" href="javascript:void(0)">Spam</a>
                        </div>
                    </div>
                    <!-- /dropdown -->

                </div>
                <!-- /card tools -->

            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card__body p-0 max-h-400 ps-custom-scrollbar">
                <!-- Widget -->
                <div class="dt-widget dt-widget-hover">
                    <!-- Widget Item -->
                    <div class="dt-widget__item">

                        <!-- Widget Image -->
                        <div class="dt-widget__img">
                            <!-- Avatar -->
                            <img class="dt-avatar size-35"
                                 src="<?php echo assets_url('images/user-avatar/mathew.jpg');?>" alt="User">
                            <!-- /avatar -->
                        </div>
                        <!-- /widget image -->

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <a href="javascript:void(0)" class="dt-widget__title text-truncate">Need
                                a quick support on
                                setting...</a>
                            <p class="dt-widget__subtitle text-truncate text-light-gray">
                                <a class="text-dark" href="javascript:void(0)">Joy Parish</a>
                                created ticket 15 mins ago
                            </p>
                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-extra animate-slide align-self-center">
                            <span
                                class="badge badge-danger badge-circle-animate badge-pill badge-sm align-text-top">Critical</span>
                            <div class="slide-content">
                                <a href="javascript:void(0)"><i
                                        class="icon icon-arrow-right icon-fw icon-xl"></i></a>
                            </div>
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widgets item -->

                    <!-- Widget Item -->
                    <div class="dt-widget__item">

                        <!-- Widget Image -->
                        <div class="dt-widget__img">
                            <!-- Avatar -->
                            <img class="dt-avatar size-35"
                                 src="<?php echo assets_url('images/user-avatar/kemroon-white.jpg');?>" alt="User">
                            <!-- /avatar -->
                        </div>
                        <!-- /widget image -->

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <a href="javascript:void(0)" class="dt-widget__title text-truncate">I am
                                looking for premium plan
                                subscription.</a>
                            <p class="dt-widget__subtitle text-truncate text-light-gray">
                                <a class="text-dark" href="javascript:void(0)">Kemroon White</a>
                                created ticket 15 mins ago
                            </p>
                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-extra animate-slide align-self-center">
                            <span
                                class="badge badge-success badge-circle-animate badge-pill badge-sm align-text-top">Normal</span>
                            <div class="slide-content">
                                <a href="javascript:void(0)"><i
                                        class="icon icon-arrow-right icon-fw icon-xl"></i></a>
                            </div>
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widgets item -->

                    <!-- Widget Item -->
                    <div class="dt-widget__item">

                        <!-- Widget Image -->
                        <div class="dt-widget__img">
                            <!-- Avatar -->
                            <img class="dt-avatar size-35"
                                 src="<?php echo assets_url('images/user-avatar/jeson-born.jpg');?>" alt="User">
                            <!-- /avatar -->
                        </div>
                        <!-- /widget image -->

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <a href="javascript:void(0)" class="dt-widget__title text-truncate">I am
                                trying to add 10+
                                properties into my list, but it dont...</a>
                            <p class="dt-widget__subtitle text-truncate text-light-gray">
                                <a class="text-dark" href="javascript:void(0)">Jeson Born</a>
                                created ticket 15 mins ago
                            </p>
                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-extra animate-slide align-self-center">
                            <span
                                class="badge badge-warning badge-circle-animate badge-pill badge-sm align-text-top">High</span>
                            <div class="slide-content">
                                <a href="javascript:void(0)"><i
                                        class="icon icon-arrow-right icon-fw icon-xl"></i></a>
                            </div>
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widgets item -->

                    <!-- Widget Item -->
                    <div class="dt-widget__item">

                        <!-- Widget Image -->
                        <div class="dt-widget__img">
                            <!-- Avatar -->
                            <img class="dt-avatar size-35"
                                 src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>" alt="User">
                            <!-- /avatar -->
                        </div>
                        <!-- /widget image -->

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <a href="javascript:void(0)" class="dt-widget__title text-truncate">My
                                property listing is not
                                available in futured list.</a>
                            <p class="dt-widget__subtitle text-truncate text-light-gray">
                                <a class="text-dark" href="javascript:void(0)">Steve Smith</a>
                                created ticket 15 mins ago
                            </p>
                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-extra animate-slide align-self-center">
                            <span
                                class="badge badge-success badge-circle-animate badge-pill badge-sm align-text-top">Normal</span>
                            <div class="slide-content">
                                <a href="javascript:void(0)"><i
                                        class="icon icon-arrow-right icon-fw icon-xl"></i></a>
                            </div>
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widgets item -->

                    <!-- Widget Item -->
                    <div class="dt-widget__item">

                        <!-- Widget Image -->
                        <div class="dt-widget__img">
                            <!-- Avatar -->
                            <img class="dt-avatar size-35"
                                 src="<?php echo assets_url('images/user-avatar/selena.jpg');?>" alt="User">
                            <!-- /avatar -->
                        </div>
                        <!-- /widget image -->

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <a href="javascript:void(0)" class="dt-widget__title text-truncate">Please
                                remove my account from
                                your website.</a>
                            <p class="dt-widget__subtitle text-truncate text-light-gray">
                                <a class="text-dark" href="javascript:void(0)">Selena</a> created
                                ticket 15 mins ago
                            </p>
                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-extra animate-slide align-self-center">
                            <span
                                class="badge badge-warning badge-circle-animate badge-pill badge-sm align-text-top">High</span>
                            <div class="slide-content">
                                <a href="javascript:void(0)"><i
                                        class="icon icon-arrow-right icon-fw icon-xl"></i></a>
                            </div>
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widgets item -->

                    <!-- Widget Item -->
                    <div class="dt-widget__item">

                        <!-- Widget Image -->
                        <div class="dt-widget__img">
                            <!-- Avatar -->
                            <img class="dt-avatar size-35" src="<?php echo assets_url('images/user-avatar/man-3.jpg');?>"
                                 alt="User">
                            <!-- /avatar -->
                        </div>
                        <!-- /widget image -->

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <a href="javascript:void(0)" class="dt-widget__title text-truncate">How
                                to upgrade my plan from
                                basic to per property?</a>
                            <p class="dt-widget__subtitle text-truncate text-light-gray">
                                <a class="text-dark" href="javascript:void(0)">Mathew</a> created
                                ticket 15 mins ago
                            </p>
                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-extra animate-slide align-self-center">
                            <span
                                class="badge badge-success badge-circle-animate badge-pill badge-sm align-text-top">Normal</span>
                            <div class="slide-content">
                                <a href="javascript:void(0)"><i
                                        class="icon icon-arrow-right icon-fw icon-xl"></i></a>
                            </div>
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widgets item -->

                    <!-- Widget Item -->
                    <div class="dt-widget__item">

                        <!-- Widget Image -->
                        <div class="dt-widget__img">
                            <!-- Avatar -->
                            <img class="dt-avatar size-35"
                                 src="<?php echo assets_url('images/user-avatar/garry-sobars.jpg');?>" alt="User">
                            <!-- /avatar -->
                        </div>
                        <!-- /widget image -->

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <a href="javascript:void(0)" class="dt-widget__title text-truncate">I
                                did not able to receive
                                message on my mail.</a>
                            <p class="dt-widget__subtitle text-truncate text-light-gray">
                                <a class="text-dark" href="javascript:void(0)">Garry Sobars</a>
                                created ticket 15 mins ago
                            </p>
                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-extra animate-slide align-self-center">
                            <span
                                class="badge badge-danger badge-circle-animate badge-pill badge-sm align-text-top">Critical</span>
                            <div class="slide-content">
                                <a href="javascript:void(0)"><i
                                        class="icon icon-arrow-right icon-fw icon-xl"></i></a>
                            </div>
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widgets item -->

                    <!-- Widget Item -->
                    <div class="dt-widget__item">

                        <!-- Widget Image -->
                        <div class="dt-widget__img">
                            <!-- Avatar -->
                            <img class="dt-avatar size-35" src="<?php echo assets_url('images/user-avatar/amay.jpg');?>"
                                 alt="User">
                            <!-- /avatar -->
                        </div>
                        <!-- /widget image -->

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <a href="javascript:void(0)" class="dt-widget__title text-truncate">Need
                                a quick support on
                                setting...</a>
                            <p class="dt-widget__subtitle text-truncate text-light-gray">
                                <a class="text-dark" href="javascript:void(0)">Amay mathur</a>
                                created ticket 15 mins ago
                            </p>
                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-extra animate-slide align-self-center">
                            <span
                                class="badge badge-success badge-circle-animate badge-pill badge-sm align-text-top">Normal</span>
                            <div class="slide-content">
                                <a href="javascript:void(0)"><i
                                        class="icon icon-arrow-right icon-fw icon-xl"></i></a>
                            </div>
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widgets item -->

                </div>
                <!-- /widget -->
            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-xl-6 order-xl-11">

        <!-- Card -->
        <div class="dt-card dt-card__full-height">

            <!-- Card Header -->
            <div class="dt-card__header">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title mb-1">Referral Traffic</h3>
                    <p class="mb-0 text-light-gray f-12">Updated 30 min ago</p>
                </div>
                <!-- /card heading -->

                <!-- Card Tools -->
                <div class="dt-card__tools">

                    <!-- Dropdown -->
                    <div class="dropdown d-inline-block">
                        <a class="dropdown-toggle btn btn-default btn-xs bg-transparent border"
                           href="#"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Unread
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">Read</a>
                            <a class="dropdown-item" href="javascript:void(0)">Unread</a>
                            <a class="dropdown-item" href="javascript:void(0)">Spam</a>
                        </div>
                    </div>
                    <!-- /dropdown -->

                </div>
                <!-- /card tools -->

            </div>
            <!-- /card header -->
            <!-- Grid -->
            <div class="row no-gutters">
                <!-- Grid Item -->
                <div class="col-sm-6 order-sm-2">
                    <!-- Card Body -->
                    <div class="dt-card__body pt-0 d-flex justify-content-center align-items-center">
                        <!-- Chart -->
                        <canvas id="traffic-doughnut" height="130" width="130"></canvas>
                        <!-- /chart -->
                    </div>
                    <!-- /card body -->
                </div>
                <!-- /grid item -->

                <!-- Grid Item -->
                <div class="col-sm-6 order-sm-1">
                    <!-- Card Body -->
                    <div class="dt-card__body pt-0">
                        <ul class="dt-indicator">
                            <li class="dt-indicator-item">
                                <p class="dt-indicator-title">Email</p>
                                <div class="dt-indicator-item__info" data-fill="45" data-max="100"
                                     data-percent="true">
                                    <div class="dt-indicator-item__bar">
                                        <div class="dt-indicator-item__fill bg-primary"></div>
                                    </div>
                                    <span class="dt-indicator-item__count text-nowrap ml-3">0</span>
                                </div>
                            </li>
                            <li class="dt-indicator-item">
                                <p class="dt-indicator-title">Social</p>
                                <div class="dt-indicator-item__info" data-fill="35" data-max="100"
                                     data-percent="true">
                                    <div class="dt-indicator-item__bar">
                                        <div class="dt-indicator-item__fill bg-warning"></div>
                                    </div>
                                    <span class="dt-indicator-item__count text-nowrap ml-3">0</span>
                                </div>
                            </li>
                            <li class="dt-indicator-item">
                                <p class="dt-indicator-title">Organic</p>
                                <div class="dt-indicator-item__info" data-fill="75" data-max="100"
                                     data-percent="true">
                                    <div class="dt-indicator-item__bar">
                                        <div class="dt-indicator-item__fill bg-success"></div>
                                    </div>
                                    <span class="dt-indicator-item__count text-nowrap ml-3">0</span>
                                </div>
                            </li>
                            <li class="dt-indicator-item">
                                <p class="dt-indicator-title">Technical</p>
                                <div class="dt-indicator-item__info" data-fill="15" data-max="100"
                                     data-percent="true">
                                    <div class="dt-indicator-item__bar">
                                        <div class="dt-indicator-item__fill bg-danger"></div>
                                    </div>
                                    <span class="dt-indicator-item__count text-nowrap ml-3">0</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /card body -->
                </div>
                <!-- /grid item -->

            </div>
            <!-- /grid -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-xl-3 col-sm-6 order-xl-9">

        <!-- Card -->
        <div class="dt-card dt-card__full-height real-time-widget">

            <!-- Card Header -->
            <div class="dt-card__header text-center">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title text-white">Realtime Users</h3>
                </div>
                <!-- /card heading -->

            </div>
            <!-- /card header -->

            <!-- Chart Body -->
            <div class="dt-card__body dt-chart__body">
                <div class="d-flex flex-column align-items-center mb-5">
                    <div id="chart-realtime-users" style="width: 95px;height:95px;"></div>
                </div>
                <div class="chart-fluid">
                    <canvas height="70" id="chart-users-bars"></canvas>
                    <div class="d-flex justify-content-between align-items-center text-white p-1">
                        <span class="d-inline-block mr-1">12:00AM</span>
                        <span class="d-inline-block">1:00PM</span>
                    </div>
                </div>
            </div>
            <!-- /chart body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-xl-3 col-sm-6 order-xl-10">

        <!-- Card -->
        <div class="dt-card dt-card__full-height">

            <!-- Card Body -->
            <div class="dt-card__body">
                <div class="mb-5">
                    <div class="d-flex mb-1">
                        <div class="display-1 text-dark mr-3 font-weight-light">4.5</div>
                        <div class="rating-container flex-column">
                            <div class="ratings">
                                <span class="rated" style="width:88%"></span>
                            </div>

                            <div class="ratings-review f-16 text-light-gray">
                                <span class="count-number text-light-gray">350</span> Reviews
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">Overall Ratings</h4>
                </div>

                <!-- List -->
                <ul class="dt-list flex-column">
                    <!-- List Item -->
                    <li class="dt-list__item">
                        <div class="rating-container">
                            <div class="ratings">
                                <span class="rated" style="width:20%"></span>
                            </div>

                            <div class="ratings-review">
                                <span class="count-number">5</span> Reviews
                            </div>
                        </div>
                    </li>
                    <!-- /list item -->
                    <!-- List Item -->
                    <li class="dt-list__item">
                        <div class="rating-container">
                            <div class="ratings">
                                <span class="rated" style="width:40%"></span>
                            </div>

                            <div class="ratings-review">
                                <span class="count-number">20</span> Reviews
                            </div>
                        </div>
                    </li>
                    <!-- /list item -->
                    <!-- List Item -->
                    <li class="dt-list__item">
                        <div class="rating-container">
                            <div class="ratings">
                                <span class="rated" style="width:60%"></span>
                            </div>

                            <div class="ratings-review">
                                <span class="count-number">75</span> Reviews
                            </div>
                        </div>
                    </li>
                    <!-- /list item -->
                    <!-- List Item -->
                    <li class="dt-list__item">
                        <div class="rating-container">
                            <div class="ratings">
                                <span class="rated" style="width:80%"></span>
                            </div>

                            <div class="ratings-review">
                                <span class="count-number">100</span> Reviews
                            </div>
                        </div>
                    </li>
                    <!-- /list item -->
                    <!-- List Item -->
                    <li class="dt-list__item">
                        <div class="rating-container">
                            <div class="ratings">
                                <span class="rated" style="width:100%"></span>
                            </div>

                            <div class="ratings-review">
                                <span class="count-number">150</span> Reviews
                            </div>
                        </div>
                    </li>
                    <!-- /list item -->
                </ul>
                <!-- /list -->
            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-12 order-xl-12">

        <!-- Card -->
        <div class="dt-card">

            <!-- Card Header -->
            <div class="dt-card__header mb-0">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title">Recently Added Properties</h3>
                </div>
                <!-- /card heading -->

                <!-- Card Tools -->
                <div class="dt-card__tools">
                    <!-- List -->
                    <ul class="dt-list dt-list-sm dt-list-cm-0">
                        <!-- List Item -->
                        <li class="dt-list__item">
                            <button type="button" class="btn btn-primary btn-xs">Add New</button>
                        </li>
                        <!-- /list item -->

                        <!-- List Item -->
                        <li class="dt-list__item">
                            <!-- Dropdown -->
                            <div class="dropdown d-inline-block">
                                <a class="dropdown-toggle btn btn-default btn-xs bg-transparent border"
                                   href="#"
                                   data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    Unread
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">Read</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Unread</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Spam</a>
                                </div>
                            </div>
                            <!-- /dropdown -->
                        </li>
                        <!-- /list item -->
                    </ul>
                    <!-- /list -->

                </div>
                <!-- /card tools -->

            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card__body pb-3">
                <!-- Tables -->
                <div class="table-responsive">
                    <table class="table mb-0 table-fluid">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Property Name</th>
                                <th scope="col">Owner</th>
                                <th scope="col">City</th>
                                <th scope="col">State</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>727</td>
                                <td class="text-dark">Pacifica La Habitat</td>
                                <td>Swetalee Developers</td>
                                <td>Shieldsville</td>
                                <td>Congo</td>
                                <td>$12Lac</td>
                                <td>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-cm-0">
                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-editors "></i>
                                            </a>
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-trash-filled"></i>
                                            </a>
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle no-arrow text-light-gray"
                                                   href="#" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon icon-horizontal-more icon-fw"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something
                                                        else here</a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->
                                </td>
                            </tr>

                            <tr>
                                <td>555</td>
                                <td class="text-dark">Nakshtra Banglow</td>
                                <td>Savaliya Builders</td>
                                <td>Lake Zachary</td>
                                <td>Kazakhstan</td>
                                <td>$1Lacs - 15Lacs</td>
                                <td>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-cm-0">
                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-editors "></i>
                                            </a>
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-trash-filled"></i>
                                            </a>
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle no-arrow text-light-gray"
                                                   href="#" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon icon-horizontal-more icon-fw"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something
                                                        else here</a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->
                                </td>
                            </tr>

                            <tr>
                                <td>442</td>
                                <td class="text-dark">Siddhi Banglow</td>
                                <td>Bakeri Group</td>
                                <td>Gillianville</td>
                                <td>Botswana</td>
                                <td>$2Lacs</td>
                                <td>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-cm-0">
                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-editors "></i>
                                            </a>
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-trash-filled"></i>
                                            </a>
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle no-arrow text-light-gray"
                                                   href="#" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon icon-horizontal-more icon-fw"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something
                                                        else here</a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->
                                </td>
                            </tr>

                            <tr>
                                <td>868</td>
                                <td class="text-dark">Goyal Arcus</td>
                                <td>Signature Group</td>
                                <td>West Lowell</td>
                                <td>Norfolk Island</td>
                                <td>$75k</td>
                                <td>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-cm-0">
                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-editors "></i>
                                            </a>
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-trash-filled"></i>
                                            </a>
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle no-arrow text-light-gray"
                                                   href="#" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon icon-horizontal-more icon-fw"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something
                                                        else here</a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->
                                </td>
                            </tr>

                            <tr>
                                <td>727</td>
                                <td class="text-dark">Pacifica La Habitat</td>
                                <td>Swetalee Developers</td>
                                <td>Shieldsville</td>
                                <td>Congo</td>
                                <td>$12Lac</td>
                                <td>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-cm-0">
                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-editors "></i>
                                            </a>
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-trash-filled"></i>
                                            </a>
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle no-arrow text-light-gray"
                                                   href="#" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon icon-horizontal-more icon-fw"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something
                                                        else here</a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->
                                </td>

                            </tr>

                            <tr>
                                <td>296</td>
                                <td class="text-dark">Pacifica La Habitat</td>
                                <td>Sapphire Group</td>
                                <td>Lake Caroline</td>
                                <td>Bahrain</td>
                                <td>$85k</td>
                                <td>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-cm-0">
                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-editors "></i>
                                            </a>
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-trash-filled"></i>
                                            </a>
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle no-arrow text-light-gray"
                                                   href="#" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon icon-horizontal-more icon-fw"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something
                                                        else here</a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->
                                </td>

                            </tr>

                            <tr>
                                <td>827</td>
                                <td class="text-dark">Sankalp Grace 2</td>
                                <td>Setu Infracon</td>
                                <td>Bernadineburgh</td>
                                <td>Djibouti</td>
                                <td>$1.99 Lacs</td>
                                <td>
                                    <!-- List -->
                                    <ul class="dt-list dt-list-cm-0">
                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-editors "></i>
                                            </a>
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-trash-filled"></i>
                                            </a>
                                        </li>
                                        <!-- /list item -->

                                        <!-- List Item -->
                                        <li class="dt-list__item">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle no-arrow text-light-gray"
                                                   href="#" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon icon-horizontal-more icon-fw"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Something
                                                        else here</a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- /list item -->
                                    </ul>
                                    <!-- /list -->
                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /table -->
            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

</div>
<!-- /grid -->

<!-- Grid -->
<div class="row">

    <!-- Grid Item -->
    <div class="col-xl-3 col-sm-6 col-12">

        <!-- Card -->
        <div class="dt-card dt-social-card animate-slide border border-w-2 border-indigo">
            <!-- Social Circle -->
            <div class="dt-social__circle bg-indigo">
                <i class="icon icon-facebook icon-fw icon-3x text-indigo"></i>
            </div>
            <!-- /social circle -->

            <!-- Card Body -->
            <div class="dt-card__body">
                <h3 class="font-weight-500 mb-1">Facebook</h3>
                <!-- List -->
                <ul class="dt-list dt-list-bordered dt-list-cm-0 flex-nowrap">
                    <!-- List Item -->
                    <li class="dt-list__item text-truncate">
                        <span><span class="text-dark">2.5k </span>Likes</span>
                    </li>
                    <!-- /list item -->

                    <!-- List Item -->
                    <li class="dt-list__item text-truncate">
                        <span><span class="text-dark">1.4k </span>Friends</span>
                    </li>
                    <!-- /list item -->
                </ul>
                <!-- /list -->
            </div>
            <!-- /card body -->
        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-xl-3 col-sm-6 col-12">

        <!-- Card -->
        <div class="dt-card dt-social-card animate-slide border border-w-2 border-sky-blue">
            <!-- Social Circle -->
            <div class="dt-social__circle bg-sky-blue">
                <i class="icon icon-twitter icon-fw icon-3x text-sky-blue"></i>
            </div>
            <!-- /social circle -->

            <!-- Card Body -->
            <div class="dt-card__body">
                <h3 class="font-weight-500 mb-1">Twitter</h3>
                <!-- List -->
                <ul class="dt-list dt-list-bordered dt-list-cm-0 flex-nowrap">
                    <!-- List Item -->
                    <li class="dt-list__item text-truncate">
                        <span><span class="text-dark">800 </span>Like</span>
                    </li>
                    <!-- /list item -->

                    <!-- List Item -->
                    <li class="dt-list__item text-truncate">
                        <span><span class="text-dark">2.1k </span>Follower</span>
                    </li>
                    <!-- /list item -->
                </ul>
                <!-- /list -->
            </div>
            <!-- /card body -->
        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-xl-3 col-sm-6 col-12">

        <!-- Card -->
        <div class="dt-card dt-social-card animate-slide border border-w-2 border-light-brown">
            <!-- Social Circle -->
            <div class="dt-social__circle bg-light-brown">
                <i class="icon icon-youtube icon-fw icon-3x text-light-brown"></i>
            </div>
            <!-- /social circle -->

            <!-- Card Body -->
            <div class="dt-card__body">
                <h3 class="font-weight-500 mb-1">YouTube</h3>
                <!-- List -->
                <ul class="dt-list dt-list-bordered dt-list-cm-0 flex-nowrap">
                    <!-- List Item -->
                    <li class="dt-list__item text-truncate">
                        <span><span class="text-dark">2.5k </span>Likes</span>
                    </li>
                    <!-- /list item -->

                    <!-- List Item -->
                    <li class="dt-list__item text-truncate">
                        <span><span class="text-dark">1.4k </span>Friends</span>
                    </li>
                    <!-- /list item -->
                </ul>
                <!-- /list -->
            </div>
            <!-- /card body -->
        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-xl-3 col-sm-6 col-12">

        <!-- Card -->
        <div class="dt-card dt-social-card animate-slide border border-w-2 border-light-teal">
            <!-- Social Circle -->
            <div class="dt-social__circle bg-light-teal">
                <i class="icon icon-linkedin icon-fw icon-3x text-light-teal"></i>
            </div>
            <!-- /social circle -->

            <!-- Card Body -->
            <div class="dt-card__body">
                <h3 class="font-weight-500 mb-1">LinkedIn</h3>
                <!-- List -->
                <ul class="dt-list dt-list-bordered dt-list-cm-0 flex-nowrap">
                    <!-- List Item -->
                    <li class="dt-list__item text-truncate">
                        <span><span class="text-dark">1k </span>Likes</span>
                    </li>
                    <!-- /list item -->

                    <!-- List Item -->
                    <li class="dt-list__item text-truncate">
                        <span><span class="text-dark">807 </span>Friends</span>
                    </li>
                    <!-- /list item -->
                </ul>
                <!-- /list -->
            </div>
            <!-- /card body -->
        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

</div>
<!-- /grid -->

<!-- Grid -->
<div class="row">

    <!-- Grid Item -->
    <div class="col-xl-7 order-xl-2">

        <!-- Card -->
        <div class="dt-card dt-contact-card">

            <!-- Card Header -->
            <div class="dt-card__header mb-3 header-sm-inline">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title">Our Team</h3>
                </div>
                <!-- /card heading -->

                <!-- Card Tools -->
                <div class="dt-card__tools">
                    <ul class="nav nav-sm nav-underline nav-underline-none" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#marketing"
                               role="tab"
                               aria-controls="marketing"
                               aria-selected="true">Marketing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#account" role="tab"
                               aria-controls="account"
                               aria-selected="true">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#development" role="tab"
                               aria-controls="development"
                               aria-selected="true">Development</a>
                        </li>
                    </ul>
                </div>
                <!-- /card tools -->

            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card__body pb-4">

                <!-- Tab Content-->
                <div class="tab-content">

                    <!-- Tab panel -->
                    <div id="marketing" class="tab-pane active">
                        <!-- Grid -->
                        <div class="row no-gutters">

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/man-3.jpg');?>"
                                             alt="Harriet Boone">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Harriet Boone</a>
                                            <span class="f-12 text-light-gray">955-384-0512</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/selena.jpg');?>"
                                             alt="Lily Jennings">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Lily Jennings</a>
                                            <span class="f-12 text-light-gray">260-952-0777</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/stella-johnson.jpg');?>"
                                             alt="Elnora Leonard">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Elnora Leonard</a>
                                            <span class="f-12 text-light-gray">470-678-8308</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>"
                                             alt="Noah Fitzgerald">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Noah Fitzgerald</a>
                                            <span class="f-12 text-light-gray">053-164-2804</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/jimmy-jo.jpg');?>"
                                             alt="Tyler Guerrero">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Tyler Guerrero</a>
                                            <span class="f-12 text-light-gray">430-692-9493</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/amay.jpg');?>"
                                             alt="Mattie Mendez">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Mattie Mendez</a>
                                            <span class="f-12 text-light-gray">449-300-7495</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/kadir-m.jpg');?>"
                                             alt="Violet Jimenez">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Violet Jimenez</a>
                                            <span class="f-12 text-light-gray">550-057-3282</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg');?>"
                                             alt="Pearl Cooper">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Pearl Cooper</a>
                                            <span class="f-12 text-light-gray">217-984-9876</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/garry-sobars.jpg');?>"
                                             alt="Garry Sobars">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Garry Sobars</a>
                                            <span class="f-12 text-light-gray">240-407-1929</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/daisy.jpg');?>"
                                             alt="Johanna Terry">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Johanna Terry</a>
                                            <span class="f-12 text-light-gray">168-887-6077</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-12">
                                <a class="border border-dashed py-3 px-4 rounded h-100 text-light-gray d-flex align-items-center justify-content-center"
                                   href="javascript:void(0)">Add New</a>
                            </div>
                            <!-- /grid item -->

                        </div>
                        <!-- /grid -->
                    </div>
                    <!-- /tab panel -->

                    <!-- Tab panel -->
                    <div id="account" class="tab-pane">
                        <!-- Grid -->
                        <div class="row no-gutters">

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg');?>"
                                             alt="Pearl Cooper">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Pearl Cooper</a>
                                            <span class="f-12 text-light-gray">217-984-9876</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/daisy.jpg');?>"
                                             alt="Johanna Terry">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Johanna Terry</a>
                                            <span class="f-12 text-light-gray">168-887-6077</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/stella-johnson.jpg');?>"
                                             alt="Elnora Leonard">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Elnora Leonard</a>
                                            <span class="f-12 text-light-gray">470-678-8308</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>"
                                             alt="Noah Fitzgerald">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Noah Fitzgerald</a>
                                            <span class="f-12 text-light-gray">053-164-2804</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/man-3.jpg');?>"
                                             alt="Harriet Boone">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Harriet Boone</a>
                                            <span class="f-12 text-light-gray">955-384-0512</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/jimmy-jo.jpg');?>"
                                             alt="Tyler Guerrero">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Tyler Guerrero</a>
                                            <span class="f-12 text-light-gray">430-692-9493</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/amay.jpg');?>"
                                             alt="Mattie Mendez">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Mattie Mendez</a>
                                            <span class="f-12 text-light-gray">449-300-7495</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/selena.jpg');?>"
                                             alt="Lily Jennings">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Lily Jennings</a>
                                            <span class="f-12 text-light-gray">260-952-0777</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/kadir-m.jpg');?>"
                                             alt="Violet Jimenez">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Violet Jimenez</a>
                                            <span class="f-12 text-light-gray">550-057-3282</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/garry-sobars.jpg');?>"
                                             alt="Garry Sobars">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Garry Sobars</a>
                                            <span class="f-12 text-light-gray">240-407-1929</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-12">
                                <a class="border border-dashed py-3 px-4 rounded h-100 text-light-gray d-flex align-items-center justify-content-center"
                                   href="javascript:void(0)">Add New</a>
                            </div>
                            <!-- /grid item -->

                        </div>
                        <!-- /grid -->
                    </div>
                    <!-- /tab panel -->

                    <!-- Tab panel -->
                    <div id="development" class="tab-pane">
                        <!-- Grid -->
                        <div class="row no-gutters">

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/kadir-m.jpg');?>"
                                             alt="Violet Jimenez">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Violet Jimenez</a>
                                            <span class="f-12 text-light-gray">550-057-3282</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/alex-dolgove.jpg');?>"
                                             alt="Pearl Cooper">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Pearl Cooper</a>
                                            <span class="f-12 text-light-gray">217-984-9876</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/garry-sobars.jpg');?>"
                                             alt="Garry Sobars">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Garry Sobars</a>
                                            <span class="f-12 text-light-gray">240-407-1929</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/steve-smith.jpg');?>"
                                             alt="Noah Fitzgerald">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Noah Fitzgerald</a>
                                            <span class="f-12 text-light-gray">053-164-2804</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/jimmy-jo.jpg');?>"
                                             alt="Tyler Guerrero">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Tyler Guerrero</a>
                                            <span class="f-12 text-light-gray">430-692-9493</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/amay.jpg');?>"
                                             alt="Mattie Mendez">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Mattie Mendez</a>
                                            <span class="f-12 text-light-gray">449-300-7495</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/man-3.jpg');?>"
                                             alt="Harriet Boone">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Harriet Boone</a>
                                            <span class="f-12 text-light-gray">955-384-0512</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/selena.jpg');?>"
                                             alt="Lily Jennings">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Lily Jennings</a>
                                            <span class="f-12 text-light-gray">260-952-0777</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/stella-johnson.jpg');?>"
                                             alt="Elnora Leonard">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Elnora Leonard</a>
                                            <span class="f-12 text-light-gray">470-678-8308</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-sm-6 col-12">

                                <!-- Contact Short Info -->
                                <div class="dt-contact-info-short">

                                    <!-- Avatar Wrapper -->
                                    <div class="dt-avatar-wrapper">
                                        <!-- Avatar -->
                                        <img class="dt-avatar"
                                             src="<?php echo assets_url('images/user-avatar/daisy.jpg');?>"
                                             alt="Johanna Terry">
                                        <!-- /avatar -->

                                        <!-- Info -->
                                        <div class="dt-avatar-info">
                                            <a href="page-profile.php"
                                               class="dt-avatar-name text-dark">Johanna Terry</a>
                                            <span class="f-12 text-light-gray">168-887-6077</span>
                                        </div>
                                        <!-- /info -->
                                    </div>
                                    <!-- /avatar wrapper -->

                                </div>
                                <!-- /contact short info -->

                            </div>
                            <!-- /grid item -->

                            <!-- Grid Item -->
                            <div class="col-md-4 col-12">
                                <a class="border border-dashed py-3 px-4 rounded h-100 text-light-gray d-flex align-items-center justify-content-center"
                                   href="javascript:void(0)">Add New</a>
                            </div>
                            <!-- /grid item -->

                        </div>
                        <!-- /grid -->
                    </div>
                    <!-- /tab panel -->

                </div>
                <!-- /tab content-->

            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-xl-5 col-md-6 order-xl-1">

        <!-- Card -->
        <div class="dt-card pb-4">

            <!-- Card Header -->
            <div class="dt-card__header mb-5">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title">Pricing Plans</h3>
                </div>
                <!-- /card heading -->

                <!-- Card Tools -->
                <div class="dt-card__tools">
                    <button type="button" class="btn btn-success btn-xs">Add New</button>
                </div>
                <!-- /card tools -->

            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card__body p-0">
                <!-- Widget -->
                <div class="dt-widget dt-widget-hl-item dt-widget-hl-item-space dt-widget-mb-item dt-widget-hover-bg">

                    <!-- Widget Item -->
                    <div class="dt-widget__item border-success">

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <div class="dt-widget__title f-16 font-weight-500 text-truncate">
                                Basic
                            </div>
                            <p class="mb-0 text-truncate text-light-gray">
                                <span class="text-dark mr-1"><i class="icon icon-wall mr-1"></i>1200</span>
                                subscribers
                            </p>
                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-widget__extra text-right">
                            <!-- Show Content -->
                            <div class="show-content">
                                <span class="d-block text-dark">$150.00</span>
                                <span class="d-block">Per Month</span>
                            </div>
                            <!-- /show content -->
                            <!-- Hide Content -->
                            <div class="hide-content">
                                <!-- Action Button Group -->
                                <div class="action-btn-group">
                                    <button class="btn btn-default text-success dt-fab-btn">
                                        <i class="icon icon-editors icon-1x"></i>
                                    </button>
                                    <button class="btn btn-default text-danger dt-fab-btn">
                                        <i class="icon icon-trash icon-xl"></i>
                                    </button>
                                </div>
                                <!-- /action button group -->
                            </div>
                            <!-- /hide content -->
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widgets item -->

                    <!-- Widget Item -->
                    <div class="dt-widget__item border-danger">

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <div class="dt-widget__title f-16 font-weight-500 text-truncate">
                                Platinum
                            </div>
                            <p class="mb-0 text-truncate text-light-gray">
                                <span class="text-dark mr-1"><i class="icon icon-wall mr-1"></i>1200</span>
                                subscribers
                            </p>
                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-widget__extra text-right">
                            <!-- Show Content -->
                            <div class="show-content">
                                <span class="d-block text-dark">$170.00</span>
                                <span class="d-block">Per Month</span>
                            </div>
                            <!-- /show content -->
                            <!-- Hide Content -->
                            <div class="hide-content">
                                <!-- Action Button Group -->
                                <div class="action-btn-group">
                                    <button class="btn btn-default text-success dt-fab-btn">
                                        <i class="icon icon-editors icon-1x"></i>
                                    </button>
                                    <button class="btn btn-default text-danger dt-fab-btn">
                                        <i class="icon icon-trash icon-xl"></i>
                                    </button>
                                </div>
                                <!-- /action button group -->
                            </div>
                            <!-- /hide content -->
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widgets item -->

                    <!-- Widget Item -->
                    <div class="dt-widget__item border-info">

                        <!-- Widget Info -->
                        <div class="dt-widget__info text-truncate">
                            <div class="dt-widget__title f-16 font-weight-500 text-truncate">Per
                                Property
                            </div>
                            <p class="mb-0 text-truncate text-light-gray">
                                <span class="text-dark mr-1"><i class="icon icon-wall mr-1"></i>1200</span>
                                subscribers
                            </p>
                        </div>
                        <!-- /widget info -->

                        <!-- Widget Extra -->
                        <div class="dt-widget__extra text-right">
                            <!-- Show Content -->
                            <div class="show-content">
                                <span class="d-block text-dark">$90.00</span>
                                <span class="d-block">Per Month</span>
                            </div>
                            <!-- /show content -->
                            <!-- Hide Content -->
                            <div class="hide-content">
                                <!-- Action Button Group -->
                                <div class="action-btn-group">
                                    <button class="btn btn-default text-success dt-fab-btn">
                                        <i class="icon icon-editors icon-1x"></i>
                                    </button>
                                    <button class="btn btn-default text-danger dt-fab-btn">
                                        <i class="icon icon-trash icon-xl"></i>
                                    </button>
                                </div>
                                <!-- /action button group -->
                            </div>
                            <!-- /hide content -->
                        </div>
                        <!-- /widget extra -->

                    </div>
                    <!-- /widgets item -->

                </div>
                <!-- /widget -->
            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-xl-5 col-md-6 order-xl-4">

        <!-- Card -->
        <div class="dt-card bg-info text-white">

            <!-- Card Header -->
            <div class="dt-card__header">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <div class="d-flex align-items-center">
                        <i class="icon icon-calculator icon-fw icon-2x text-white mr-2"></i>
                        <h3 class="dt-card__title text-white">Value Calculator</h3>
                    </div>
                </div>
                <!-- /card heading -->

                <!-- Card Tools -->
                <div class="dt-card__tools align-self-start mt-n3 mr-n2">
                    <!-- Dropdown -->
                    <div class="dropdown">

                        <!-- Dropdown Button -->
                        <a href="#" class="dropdown-toggle no-arrow text-white"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false"><i
                                class="icon icon-horizontal-more icon-fw icon-3x"></i></a>
                        <!-- /dropdown button -->

                        <!-- Dropdown Menu -->
                        <div class="dropdown-menu dropdown-menu-right">
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
                </div>
                <!-- /card tools -->

            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card__body pb-3">
                <!-- Form -->
                <form>
                    <!-- Grid -->
                    <div class="row">
                        <!-- Grid Item -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Select City</label>
                                <select class="custom-select custom-select-sm">
                                    <option>Ajmer</option>
                                    <option selected>Bikaner</option>
                                    <option>Chandigarh</option>
                                    <option>Dehradun</option>
                                    <option>Jaipur</option>
                                </select>
                            </div>
                        </div>
                        <!-- / grid item -->

                        <!-- Grid Item -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Select Area</label>
                                <select class="custom-select custom-select-sm">
                                    <option>Rajori</option>
                                    <option selected>Rajori gadh</option>
                                    <option>Pugal Road</option>
                                    <option>Bopal</option>
                                    <option>Bodakdev</option>
                                </select>
                            </div>
                        </div>
                        <!-- / grid item -->

                        <!-- Grid Item -->
                        <div class="col-12">
                            <div class="form-group">
                                <span class="d-flex mb-1">
                                    <label class="mb-0">Price Per Sq. Feet</label>
                                    <a href="javascript:void(0)" class="text-white ml-auto">
                                        <i class="icon icon-editors"></i>
                                    </a>
                                </span>
                                <input type="text" class="form-control form-control-sm"
                                       placeholder="52,400">
                            </div>
                        </div>
                        <!-- / grid item -->

                        <!-- Grid Item -->
                        <div class="col-12">
                            <div class="form-group">
                                <label class="mb-2">Enter area (sq. feet)</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </div>
                        <!-- / grid item -->
                    </div>
                    <!-- /grid -->
                </form>
                <!-- /form -->
            </div>
            <!-- /card body -->

            <!-- Card Footer -->
            <div class="px-7 py-5 border-top border-w-2 border-black-transparent">
                <span class="d-block display-4 mb-2">$45,00,000</span>
                <p class="f-16 mb-0">1000 Sq. Feet, Bikaner-RajoriGadh</p>
            </div>
            <!-- /card footer -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-xl-7 order-xl-3">

        <!-- Card -->
        <div class="dt-card">

            <!-- Card Header -->
            <div class="dt-card__header bg-primary pb-7 mb-0 rounded-top">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <div class="d-flex align-items-center mb-3">
                        <i class="icon icon-invoice-new icon-fw icon-2x text-white mr-2"></i>
                        <h3 class="dt-card__title text-white">Invoices</h3>
                    </div>
                    <p class="f-16 text-white mb-0">25400 Invoice Generated</p>
                </div>
                <!-- /card heading -->

                <!-- Card Tools -->
                <div class="dt-card__tools align-self-start mt-n3 mr-n2">
                    <!-- Dropdown -->
                    <div class="dropdown">

                        <!-- Dropdown Button -->
                        <a href="#" class="dropdown-toggle no-arrow text-white"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false"><i
                                class="icon icon-horizontal-more icon-fw icon-3x"></i></a>
                        <!-- /dropdown button -->

                        <!-- Dropdown Menu -->
                        <div class="dropdown-menu dropdown-menu-right">
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
                </div>
                <!-- /card tools -->

            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card__body pb-3">
                <!-- Tables -->
                <div class="table-responsive">
                    <table class="table mb-0 table-fluid">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Invoice To</th>
                                <th scope="col" class="text-right">Date</th>
                                <th scope="col" class="text-right">Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>486</td>
                                <td class="text-dark">Setu Infracon</td>
                                <td class="text-right">10 Sep 2018</td>
                                <td class="text-right">$565</td>
                                <td>
                                    <ul class="dt-list dt-list-cm-0">
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-editors "></i>
                                            </a>
                                        </li>
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-trash-filled"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>355</td>
                                <td class="text-dark">Savvy Infrastructure</td>
                                <td class="text-right">26 May 2018</td>
                                <td class="text-right">$907</td>
                                <td>
                                    <ul class="dt-list dt-list-cm-0">
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-editors "></i>
                                            </a>
                                        </li>
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-trash-filled"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>318</td>
                                <td class="text-dark">Setu Infracon</td>
                                <td class="text-right">15 Nov 2018</td>
                                <td class="text-right">$702</td>
                                <td>
                                    <ul class="dt-list dt-list-cm-0">
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-editors "></i>
                                            </a>
                                        </li>
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-trash-filled"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>489</td>
                                <td class="text-dark">Goyal and Co.</td>
                                <td class="text-right">11 Jun 2018</td>
                                <td class="text-right">$535</td>
                                <td>
                                    <ul class="dt-list dt-list-cm-0">
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-editors "></i>
                                            </a>
                                        </li>
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-trash-filled"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>807</td>
                                <td class="text-dark">Lodha Developers</td>
                                <td class="text-right">11 Dec 2018</td>
                                <td class="text-right">$602</td>
                                <td>
                                    <ul class="dt-list dt-list-cm-0">
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-editors "></i>
                                            </a>
                                        </li>
                                        <li class="dt-list__item">
                                            <a class="text-light-gray" href="javascript:void(0)">
                                                <i class="icon icon-trash-filled"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /table -->
            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->
</div>
<!-- /grid -->