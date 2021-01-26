<!-- Meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="<?php echo $this->data['description']; ?>">
<meta name="keywords" content="<?php echo $this->data['keywords']; ?>">
<!-- /meta tags -->
<title><?php echo $this->data['pagetitle']; ?> <?php echo $this->data['title']; ?></title>

<!-- Site favicon -->
<link rel="shortcut icon" href="<?php echo assets_url('images/favicon.ico'); ?>" type="image/x-icon">
<!-- /site favicon -->

<!-- Font Icon Styles -->
<link rel="stylesheet" href="<?php echo assets_url('fonts/normal/styles.css'); ?>">
<?php if ($this->data['classic_version']): ?>
<link rel="stylesheet" href="<?php echo base_url('plugins/flag-icon-css/css/flag-icon.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('plugins/material-design-icons/iconfont/material-icons.css'); ?>">
<?php else: ?>
<link rel="stylesheet" href="<?php echo base_url('node_modules/flag-icon-css/css/flag-icon.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('node_modules/material-design-icons/iconfont/material-icons.css'); ?>">
<?php endif; ?>
<link rel="stylesheet" href="<?php echo assets_url('vendor/gaxon-icon/styles.css'); ?>">
<!-- /font icon Styles -->

<!-- Perfect Scrollbar stylesheet -->
<?php if ($this->data['classic_version']): ?>
<link rel="stylesheet" href="<?php echo base_url('plugins/perfect-scrollbar/css/perfect-scrollbar.css'); ?>">
<?php else: ?>
<link rel="stylesheet" href="<?php echo base_url('node_modules/perfect-scrollbar/css/perfect-scrollbar.css'); ?>">
<?php endif; ?>
<!-- /perfect scrollbar stylesheet -->

<?php echo $this->files['css_header']; ?>

<link rel="stylesheet" href="<?php echo assets_url('css/' . $this->data['theme'] . '/theme-light' . ($this->data['rtl_enable'] ? '-rtl' : '') . '.min.css'); ?>">

<script>
    var rtlEnable = '<?php echo $this->data['rtl_enable']; ?>';
<?php if ($this->router->class == 'export'): ?>
    <?php if ($this->data['export_version'] == 'development'): ?>
    var $mediaUrl = '../';
    <?php else: ?>
    var $mediaUrl = '';
    <?php endif; ?>
    var $baseUrl = '../';
    var current_path = window.location.href.split('/').pop();
    if (current_path == '') {
        current_path = 'index.html';
    }
<?php else: ?>
    var $baseUrl = '<?php echo base_url(); ?>';
    var $mediaUrl = '<?php echo base_url(); ?>';
    var current_path = window.location.href;
<?php endif; ?>
</script>

<?php if ($this->data['classic_version']): ?>
<script src="<?php echo base_url('plugins/jquery/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('plugins/moment/js/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- Perfect Scrollbar jQuery -->
<script src="<?php echo base_url('plugins/perfect-scrollbar/js/perfect-scrollbar.min.js'); ?>"></script>
<!-- /perfect scrollbar jQuery -->
<?php else: ?>
<script src="<?php echo base_url('node_modules/jquery/dist/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('node_modules/moment/min/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- Perfect Scrollbar jQuery -->
<script src="<?php echo base_url('node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js'); ?>"></script>
<!-- /perfect scrollbar jQuery -->
<?php endif; ?>

<?php echo $this->files['js_header']; ?>
