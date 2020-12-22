<?php if ($this->data['view'] == 'templates/apps/contact'): ?>

    <!-- Modal -->
    <div class="modal fade contact-modal" id="composeModal" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Modal Dialog -->
        <div class="modal-dialog modal-lg" role="document">
            <!-- Modal Content -->
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">
                        Add Contact
                    </h4>
                    <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon icon-remove icon-fw icon-xl"></i> </a>
                </div>
                <!-- /modal header -->

                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-lg-3 text-center text-lg-right order-lg-2">
                            <img class="ml-lg-3 mb-4 mb-lg-0 dt-avatar size-120" src="<?php echo assets_url('images/placeholder.jpg'); ?>"
                                 alt="Avatar">
                        </div>

                        <div class="col-lg-9 order-lg-1">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Designation">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /modal body -->

                <!-- Modal Footer -->
                <div class="modal-footer justify-content-start">
                    <a class="btn btn-primary" href="javascript:void(0)" data-dismiss="modal">
                        <i class="icon icon-contacts icon-fw"></i> <span>Save Contact</span> </a>
                </div>
                <!-- /modal footer -->
            </div>
            <!-- /modal content -->
        </div>
        <!-- /modal dialog -->

    </div>
    <!-- /modal -->

<?php endif; ?>