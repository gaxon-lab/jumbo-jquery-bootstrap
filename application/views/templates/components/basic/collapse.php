<!-- Page Header -->
<div class="dt-page__header">
    <h1 class="dt-page__title">Collapse</h1>
</div>
<!-- /page header -->

<!-- Grid -->
<div class="row">

    <!-- Grid Item -->
    <div class="col-xl-6">

        <!-- Card -->
        <div class="dt-card">

            <!-- Card Header -->
            <div class="dt-card__header">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title">Basic Collapse</h3>
                </div>
                <!-- /card heading -->

            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card__body mb-5">

                <p>
                    <a class="btn btn-primary mr-2 mb-2" data-toggle="collapse"
                       href="#collapseExample" role="button"
                       aria-expanded="false" aria-controls="collapseExample">
                        Link with href
                    </a>
                    <button class="btn btn-primary mr-2 mb-2" type="button"
                            data-toggle="collapse"
                            data-target="#collapseExample" aria-expanded="false"
                            aria-controls="collapseExample">
                        Button with data-target
                    </button>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                        terry
                        richardson ad squid.
                        Nihil
                        anim
                        keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                        sapiente ea
                        proident.
                    </div>
                </div>

            </div>
            <!-- /card body -->

            <!-- Card Header -->
            <div class="dt-card__header">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title">Multiple Targets Collapse</h3>
                </div>
                <!-- /card heading -->

            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card__body">

                <p>
                    <a class="btn btn-primary mr-2 mb-2" data-toggle="collapse"
                       href="#multiCollapseExample1"
                       role="button"
                       aria-expanded="false" aria-controls="multiCollapseExample1">First
                        Element</a>
                    <button class="btn btn-primary mr-2 mb-2" type="button"
                            data-toggle="collapse"
                            data-target="#multiCollapseExample2" aria-expanded="false"
                            aria-controls="multiCollapseExample2">Second Element
                    </button>
                    <button class="btn btn-primary mr-2 mb-2" type="button"
                            data-toggle="collapse"
                            data-target=".multi-collapse" aria-expanded="false"
                            aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle
                        both
                        elements
                    </button>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus
                                terry richardson ad squid.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                cred
                                nesciunt sapiente ea
                                proident.
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus
                                terry richardson ad squid.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                cred
                                nesciunt sapiente ea
                                proident.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

    <!-- Grid Item -->
    <div class="col-xl-6">

        <!-- Card -->
        <div class="dt-card">

            <!-- Card Header -->
            <div class="dt-card__header">

                <!-- Card Heading -->
                <div class="dt-card__heading">
                    <h3 class="dt-card__title">Accordion</h3>
                </div>
                <!-- /card heading -->

            </div>
            <!-- /card header -->

            <!-- Card Body -->
            <div class="dt-card__body">

                <!-- Accordion -->
                <div class="accordion" id="accordion-example">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button"
                                        data-toggle="collapse"
                                        data-target="#collapse-one"
                                        aria-expanded="true" aria-controls="collapse-one">
                                    Collapsible Group Item #1
                                </button>
                            </h5>
                        </div>

                        <div id="collapse-one" class="collapse show"
                             aria-labelledby="headingOne"
                             data-parent="#accordion-example">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus
                                terry richardson ad squid.
                                3
                                wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                Food
                                truck quinoa nesciunt
                                laborum
                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee
                                nulla
                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                beer
                                labore wes anderson cred
                                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                lomo.
                                Leggings occaecat craft
                                beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably
                                haven't heard of them accusamus
                                labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button"
                                        data-toggle="collapse"
                                        data-target="#collapse-two" aria-expanded="false"
                                        aria-controls="collapse-two">
                                    Collapsible Group Item #2
                                </button>
                            </h5>
                        </div>
                        <div id="collapse-two" class="collapse" aria-labelledby="headingTwo"
                             data-parent="#accordion-example">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus
                                terry richardson ad squid.
                                3
                                wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                Food
                                truck quinoa nesciunt
                                laborum
                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee
                                nulla
                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                beer
                                labore wes anderson cred
                                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                lomo.
                                Leggings occaecat craft
                                beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably
                                haven't heard of them accusamus
                                labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button"
                                        data-toggle="collapse"
                                        data-target="#collapse-three" aria-expanded="false"
                                        aria-controls="collapse-three">
                                    Collapsible Group Item #3
                                </button>
                            </h5>
                        </div>
                        <div id="collapse-three" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordion-example">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus
                                terry richardson ad squid.
                                3
                                wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                Food
                                truck quinoa nesciunt
                                laborum
                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee
                                nulla
                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                beer
                                labore wes anderson cred
                                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                lomo.
                                Leggings occaecat craft
                                beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably
                                haven't heard of them accusamus
                                labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /accordion -->

            </div>
            <!-- /card body -->

        </div>
        <!-- /card -->

    </div>
    <!-- /grid item -->

</div>
<!-- /grid -->