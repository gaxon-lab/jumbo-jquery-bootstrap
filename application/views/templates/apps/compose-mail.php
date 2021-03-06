<?php if ($this->data['view'] === 'templates/apps/mail' || $this->data['view'] === 'templates/apps/mail-detail'): ?>

    <!-- Compose Mail Box -->
    <div class="compose-mail-box">

        <!-- Compose Mail Header -->
        <div class="compose-mail-box__header" data-toggle="minimize">
            <div class="title">
                <i class="material-icons icon-fw mr-3">create</i>Compose New Message
            </div>

            <div class="action-area ml-auto">
                <button class="btn dt-fab-btn size-30 text-white">
					<i class="material-icons">remove</i>
				</button>
				<button class="btn dt-fab-btn size-30 text-white" data-dismiss="compose">
					<i class="material-icons">close</i>
				</button>
            </div>
        </div>
        <!-- /compose mail header -->

        <!-- Compose Mail Body -->
        <div class="compose-mail-box__body">
            <!-- Form -->
            <form>

                <!-- Form Group -->
                <div class="form-group mb-1">
                    <label class="sr-only" for="emails">Email address</label>
                    <input type="email" class="form-control" id="emails" placeholder="Enter email">
                </div>
                <!-- /form group -->

                <!-- Form Group -->
                <div class="form-group">
                    <label class="sr-only" for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                </div>
                <!-- /form group -->

                <!-- Form Group -->
                <div class="form-group">
                    <label class="sr-only" for="textarea">Example textarea</label> 
                    <?php 
                    $defaultMsg = "Hi Mate, \n\n";
                    $defaultMsg .= "Sorry for the delay in response! \n";
                    $defaultMsg .= "I’m afraid, I won’t be able to join you in the conference call. I have to take my \n";
                    $defaultMsg .= "daughter for her game. I hope that is ok. \n\n";
                    $defaultMsg .= "Cheers! \n";
                    $defaultMsg .= "Dom";
                    ?>
                    <textarea class="form-control" id="textarea"><?php echo $defaultMsg;?></textarea>
                </div>
                <!-- /form group -->

                <!-- Form Group -->
                <div class="d-flex align-items-center">
                    <button type="submit" class="btn btn-primary btn-sm" data-dismiss="compose">Submit</button>

                    <div class="action-area ml-auto">
                        <a class="text-primary" href="javascript:void(0)" data-dismiss="compose">
                            <i class="icon icon-trash-filled mr-1"></i> <span
                                class="f-12 text-uppercase align-middle">discard</span>
                        </a>
                    </div>
                </div>
                <!-- /form group -->
            </form>
            <!-- /form -->
        </div>
        <!-- /compose mail body -->

    </div>
    <!-- /compose mail box -->

<?php endif; ?>
