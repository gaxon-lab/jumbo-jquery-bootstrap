<!DOCTYPE html>
<?php if ($this->data['rtl_enable']): ?>
<html lang="en" direction="rtl" style="direction: rtl;">
<?php else: ?>
<html lang="en">
<?php endif; ?>
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

					<div class="d-flex align-items-center px-4 px-sm-10 pt-5 pt-sm-8">
						<!-- Brand tool -->
						<div id="dt-brand__tool" class="dt-brand__tool d-lg-none" data-toggle="main-sidebar">
							<i class="material-icons">menu</i>
						</div>
						<!-- /brand tool -->

						<div class="alert alert-primary alert-dismissible fade show mx-auto mb-0" role="alert">
							A new version has been arrived, Click here to update jumbo 5.0
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>

					<!-- Site Content -->
					<div class="dt-content">
						<?php include VIEWPATH . $this->data['view'] . '.php'; ?>
					</div>

					<?php include view_path('partials/footer.php'); ?>

				</div>
				<!-- /site content wrapper -->

				<?php include view_path('partials/customizer.php'); ?>

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
