<!DOCTYPE html>
<?php if($this->data['rtl_enable']):?>
<html lang="en" direction="rtl" style="direction: rtl;">
<?php else:?>
<html lang="en">
<?php endif;?>
<head>
<?php include view_path('partials/head.php'); ?>
</head>
<body class="<?php echo body_classes(); ?>">
    <?php include view_path('partials/loader.php'); ?>

    <!-- Root -->
    <div class="dt-root">
        <div class="dt-root__inner">

            <!-- Site Main -->
            <main class="dt-main">
                <?php include view_path('partials/sidebar.php'); ?>
                
                <!-- Site Content Wrapper -->
                <div class="dt-content-wrapper">

                    <!-- Site Content -->
                    <div class="dt-content">
						<?php
						$menuClassNames = '';
						$appViews = array('templates/apps/mail',
							'templates/apps/mail-detail',
							'templates/apps/contact',
							'templates/apps/chat',
							'templates/apps/chat-start',
							'templates/apps/task-manager',
							'templates/apps/task-detail',
						);
						if (in_array($this->data['view'], $appViews)) {
							$menuClassNames = ' d-none d-md-flex';
						}
						?>
                        
                        <!-- Brand tool -->
                        <div class="dt-brand__tool mb-8 d-lg-none <?php echo $menuClassNames;?>" data-toggle="main-sidebar">
                          <div class="hamburger-inner"></div>
                        </div>
                        <!-- /brand tool -->
                        
                        <?php include VIEWPATH . $this->data['view'] . '.php'; ?>
                    </div>

                    <?php include view_path('partials/footer.php'); ?>

                </div>
                <!-- /site content wrapper -->

                <?php include view_path('partials/customizer.php'); ?>
                <?php include view_path('partials/drawer.php'); ?>

            </main>
            
            <?php include VIEWPATH . 'templates/apps/compose-mail.php'; ?>
        </div>
    </div>
    <!-- /root -->

    <?php include VIEWPATH . 'templates/apps/new-contact.php'; ?>
    <?php include VIEWPATH . 'templates/apps/user-hover-card.php'; ?>
    <?php include view_path('partials/end.php'); ?>
</body>
</html>
