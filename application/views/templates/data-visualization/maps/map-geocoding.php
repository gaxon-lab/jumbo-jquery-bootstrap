<!-- Page Header -->
<div class="dt-page__header">
    <h1 class="dt-page__title">Google Maps</h1>
</div>
<!-- /page header -->

<!-- Grid -->
<div class="row">

    <!-- Grid Item -->
    <div class="col-12">

        <!-- Card -->
        <div class="dt-card">

            <!-- Card Header -->
            <div class="dt-card__header">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title">Map Geocoding</h3>
                </div>
                <!-- /card heading -->

            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card__body">

                <!-- Search Box -->
                <form id="geocoding_form" method="post" class="search-box right-side-icon mb-6">
                    <input class="form-control" type="search" id="address" name="address"
                           placeholder="Search in app...">
                    <button type="submit" class="search-icon"><i
                            class="icon icon-search icon-lg"></i></button>
                </form>
                <!-- /search box -->

                <!-- Map -->
                <div class="embed-responsive embed-responsive-21by9">
                    <div class="embed-responsive-item gmap-container"
                         data-map-type="geocoding"></div>
                </div>
                <!-- /map -->

            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

</div>
<!-- /grid -->