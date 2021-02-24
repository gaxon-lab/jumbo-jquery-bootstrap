<!DOCTYPE html>
<?php if($this->data['rtl_enable']):?>
<html lang="en" direction="rtl" style="direction: rtl;">
<?php else:?>
<html lang="en">
<?php endif;?>
<head>
<?php include view_path('partials/head.php'); ?>
</head>
<body>
    <?php include view_path('partials/loader.php'); ?>

    <!-- Root -->
    <div class="dt-root">
        <div class="dt-root__inner">
            <?php include VIEWPATH . $this->data['view'] . '.php'; ?>
        </div>        
    </div>
    <!-- /root -->

    <?php include view_path('partials/end.php'); ?>
</body>
</html>