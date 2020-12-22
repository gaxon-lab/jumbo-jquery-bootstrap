<!-- masonry script -->
<?php if ($this->data['classic_version']): ?>
<script src="<?php echo base_url('plugins/masonry-layout/js/masonry.pkgd.min.js'); ?>"></script>
<script src="<?php echo base_url('plugins/sweetalert2/js/sweetalert2.js'); ?>"></script>
<?php else: ?>
<script src="<?php echo base_url('node_modules/masonry-layout/dist/masonry.pkgd.min.js'); ?>"></script>
<script src="<?php echo base_url('node_modules/sweetalert2/dist/sweetalert2.js'); ?>"></script>
<?php endif; ?>
<script src="<?php echo assets_url('js/' . $this->data['theme'] . '/functions.js'); ?>"></script>
<script src="<?php echo assets_url('js/' . $this->data['theme'] . '/customizer.js'); ?>"></script>

<?php echo $this->files['css_footer']; ?>
<script src="<?php echo assets_url('js/' . $this->data['theme'] . '/script.js'); ?>"></script>
<?php echo $this->files['js_footer']; ?>