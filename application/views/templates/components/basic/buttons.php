<!-- Page Header -->
<div class="dt-page__header">
	<h1 class="dt-page__title">Buttons</h1>
</div>
<!-- /page header -->

<?php
$default_buttons = '
<button type="button" class="btn btn-primary mr-2 mb-2">Primary</button>
<button type="button" class="btn btn-secondary mr-2 mb-2">Secondary</button>
<button type="button" class="btn btn-success mr-2 mb-2">Success</button>
<button type="button" class="btn btn-danger mr-2 mb-2">Danger</button>
<button type="button" class="btn btn-warning mr-2 mb-2">Warning</button>
<button type="button" class="btn btn-info mr-2 mb-2">Info</button>
<button type="button" class="btn btn-light mr-2 mb-2">Light</button>
<button type="button" class="btn btn-dark mr-2 mb-2">Dark</button>
<button type="button" class="btn btn-link mb-2">Link</button>';

$button_tag = '
<a class="btn btn-primary mr-2 mb-2" href="javascript:void(0)" role="button">Link</a>
<button class="btn btn-primary mr-2 mb-2" type="submit">Button</button>
<input class="btn btn-primary mr-2 mb-2" type="button" value="Input">
<input class="btn btn-primary mr-2 mb-2" type="submit" value="Submit">
<input class="btn btn-primary mb-2" type="reset" value="Reset">';

$outline_buttons = '
<button type="button" class="btn btn-outline-primary mr-2 mb-2">Primary</button>
<button type="button" class="btn btn-outline-secondary mr-2 mb-2">Secondary</button>
<button type="button" class="btn btn-outline-success mr-2 mb-2">Success</button>
<button type="button" class="btn btn-outline-danger mr-2 mb-2">Danger</button>
<button type="button" class="btn btn-outline-warning mr-2 mb-2">Warning</button>
<button type="button" class="btn btn-outline-info mr-2 mb-2">Info</button>
<button type="button" class="btn btn-outline-light mr-2 mb-2">Light</button>
<button type="button" class="btn btn-outline-dark mb-2">Dark</button>';

$sizes_buttons = '
<div>
	<button type="button" class="btn btn-primary btn-lg mr-2 mb-2">Large button
	</button>
	<button type="button" class="btn btn-secondary btn-lg mr-2 mb-2">Large button
	</button>
</div>
<div>
	<button type="button" class="btn btn-primary mr-2 mb-2">Default button</button>
	<button type="button" class="btn btn-secondary mr-2 mb-2">Default button
	</button>
</div>
<div>
	<button type="button" class="btn btn-primary btn-sm mr-2 mb-2">small button
	</button>
	<button type="button" class="btn btn-secondary btn-sm mb-2">small button
	</button>
</div>';

$block_buttons = '
<button type="button" class="btn btn-primary btn-block">Block level button</button>
<button type="button" class="btn btn-secondary btn-block">Block level button</button>';

$active_state_buttons = '
<button type="button" class="btn btn-primary active mr-2 mb-2">Primary button</button>
<button type="button" class="btn btn-secondary active mr-2 mb-2">Button</button>
<a href="javascript:void(0)" class="btn btn-primary active mr-2 mb-2" role="button" aria-pressed="true">Primary link</a>
<a href="javascript:void(0)" class="btn btn-secondary active mb-2" role="button" aria-pressed="true">Link</a>';

$disable_state_buttons = '
<button type="button" class="btn btn-primary mr-2 mb-2" disabled>Primary button</button>
<button type="button" class="btn btn-secondary mr-2 mb-2" disabled>Button</button>
<a href="javascript:void(0)" class="btn btn-primary mr-2 mb-2 disabled" tabindex="-1" role="button" aria-disabled="true">Primary link</a>
<a href="javascript:void(0)" class="btn btn-secondary mb-2 disabled" tabindex="-1" role="button" aria-disabled="true">Link</a>';

$checkbox_buttons = '
<span class="btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary mr-2 mb-2 active">
	<input type="checkbox" checked> Checked
  </label>
</span>

<span class="btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-outline-primary mb-2">
	<input type="checkbox"> Unchecked
  </label>
</span>';

$radio_buttons = '
<div class="btn-group btn-group-toggle mr-2 mb-2" data-toggle="buttons">
	<label class="btn btn-primary">
		<input type="radio" name="options" id="option1"> Radio
	</label>
	<label class="btn btn-primary active">
		<input type="radio" name="options" id="option2" checked> Active
	</label>
	<label class="btn btn-primary">
		<input type="radio" name="options" id="option3"> Radio
	</label>
</div>

<div class="btn-group btn-group-toggle mb-2" data-toggle="buttons">
	<label class="btn btn-outline-secondary">
		<input type="radio" name="options" id="option4"> Radio
	</label>
	<label class="btn btn-outline-secondary active">
		<input type="radio" name="options" id="option5" checked> Active
	</label>
	<label class="btn btn-outline-secondary">
		<input type="radio" name="options" id="option6"> Radio
	</label>
</div>';

$toggle_state = '
<button type="button" class="btn btn-primary mr-2 mb-2" data-toggle="button" aria-pressed="false">Single toggle</button>
<button type="button" class="btn btn-outline-secondary mb-2" data-toggle="button" aria-pressed="false">Single toggle</button>';
?>

<!-- Page Container -->
<div class="dt-page-container">
	<!-- Page Content Area -->
	<div class="dt-page__content-area">

		<!-- Page Component -->
		<div class="dt-page__component">

			<!-- Page Component Header -->
			<div class="dt-page__component-header">
				<h4 class="dt-page__component-title">Default Buttons</h4>
			</div>
			<!-- /page component header -->

			<!-- Card -->
			<div class="dt-card">
				<!-- Card Body -->
				<div class="dt-card__body" id="default-buttons">
					<button type="button" class="btn btn-primary mr-2 mb-2">Primary</button>
					<button type="button" class="btn btn-secondary mr-2 mb-2">Secondary</button>
					<button type="button" class="btn btn-success mr-2 mb-2">Success</button>
					<button type="button" class="btn btn-danger mr-2 mb-2">Danger</button>
					<button type="button" class="btn btn-warning mr-2 mb-2">Warning</button>
					<button type="button" class="btn btn-info mr-2 mb-2">Info</button>
					<button type="button" class="btn btn-light mr-2 mb-2">Light</button>
					<button type="button" class="btn btn-dark mr-2 mb-2">Dark</button>
					<button type="button" class="btn btn-link mb-2">Link</button>
				</div>
				<!-- /card body -->

				<!-- Card Footer -->
				<div class="dt-card__footer">
					<div data-toggle="tooltip" title="Show the source">
						<a class="btn dt-fab-btn size-30" data-toggle="collapse" href="#default-buttons-collapse" role="button">
							<i class="material-icons icon-xl">code</i>
						</a>
					</div>

					<div data-toggle="tooltip" title="Copy the source">
						<button type="button" class="btn dt-fab-btn size-30"
								onclick="copyToClipboard('default-buttons')">
							<i class="material-icons icon-xl">content_copy</i>
						</button>
					</div>
				</div>
				<!-- /card footer -->

				<!-- Collapse -->
				<div class="collapse" id="default-buttons-collapse">
					<div class="prism-container ps-custom-scrollbar">
						<pre class="language-markup"><code><?php echo htmlentities(trim($default_buttons)); ?></code></pre>
					</div>
				</div>
				<!-- /collapse -->
			</div>
			<!-- /card -->

		</div>
		<!-- /page component -->

		<!-- Page Component -->
		<div class="dt-page__component">

			<!-- Page Component Header -->
			<div class="dt-page__component-header">
				<h4 class="dt-page__component-title">Button Tags</h4>
			</div>
			<!-- /page component header -->

			<!-- Card -->
			<div class="dt-card">

				<!-- Card Body -->
				<div class="dt-card__body" id="button-tag">
					<a class="btn btn-primary mr-2 mb-2" href="javascript:void(0)" role="button">Link</a>
					<button class="btn btn-primary mr-2 mb-2" type="submit">Button</button>
					<input class="btn btn-primary mr-2 mb-2" type="button" value="Input">
					<input class="btn btn-primary mr-2 mb-2" type="submit" value="Submit">
					<input class="btn btn-primary mb-2" type="reset" value="Reset">
				</div>
				<!-- /card body -->

				<!-- Card Footer -->
				<div class="dt-card__footer">
					<div data-toggle="tooltip" title="Show the source">
						<a class="btn dt-fab-btn size-30" data-toggle="collapse" href="#button-tag-collapse" role="button">
							<i class="material-icons icon-xl">code</i>
						</a>
					</div>

					<div data-toggle="tooltip" title="Copy the source">
						<button type="button" class="btn dt-fab-btn size-30"
								onclick="copyToClipboard('button-tag')">
							<i class="material-icons icon-xl">content_copy</i>
						</button>
					</div>
				</div>
				<!-- /card footer -->

				<!-- Collapse -->
				<div class="collapse" id="button-tag-collapse">
					<div class="prism-container ps-custom-scrollbar">
						<pre class="language-markup"><code><?php echo htmlentities(trim($button_tag)); ?></code></pre>
					</div>
				</div>
				<!-- /collapse -->

			</div>
			<!-- /card -->

		</div>
		<!-- /page component -->

		<!-- Page Component -->
		<div class="dt-page__component">

			<!-- Page Component Header -->
			<div class="dt-page__component-header">
				<h4 class="dt-page__component-title">Outlines Buttons</h4>
			</div>
			<!-- /page component header -->

			<!-- Card -->
			<div class="dt-card">

				<!-- Card Body -->
				<div class="dt-card__body" id="outline-buttons">
					<button type="button" class="btn btn-outline-primary mr-2 mb-2">Primary</button>
					<button type="button" class="btn btn-outline-secondary mr-2 mb-2">Secondary</button>
					<button type="button" class="btn btn-outline-success mr-2 mb-2">Success</button>
					<button type="button" class="btn btn-outline-danger mr-2 mb-2">Danger</button>
					<button type="button" class="btn btn-outline-warning mr-2 mb-2">Warning</button>
					<button type="button" class="btn btn-outline-info mr-2 mb-2">Info</button>
					<button type="button" class="btn btn-outline-light mr-2 mb-2">Light</button>
					<button type="button" class="btn btn-outline-dark mb-2">Dark</button>
				</div>
				<!-- /card body -->

				<!-- Card Footer -->
				<div class="dt-card__footer">
					<div data-toggle="tooltip" title="Show the source">
						<a class="btn dt-fab-btn size-30" data-toggle="collapse" href="#outline-buttons-collapse" role="button">
							<i class="material-icons icon-xl">code</i>
						</a>
					</div>

					<div data-toggle="tooltip" title="Copy the source">
						<button type="button" class="btn dt-fab-btn size-30"
								onclick="copyToClipboard('outline-buttons')">
							<i class="material-icons icon-xl">content_copy</i>
						</button>
					</div>
				</div>
				<!-- /card footer -->

				<!-- Collapse -->
				<div class="collapse" id="outline-buttons-collapse">
					<div class="prism-container ps-custom-scrollbar">
						<pre class="language-markup"><code><?php echo htmlentities(trim($outline_buttons)); ?></code></pre>
					</div>
				</div>
				<!-- /collapse -->

			</div>
			<!-- /card -->

		</div>
		<!-- /page component -->

		<!-- Page Component -->
		<div class="dt-page__component">

			<!-- Page Component Header -->
			<div class="dt-page__component-header">
				<h4 class="dt-page__component-title">Sizes button</h4>
			</div>
			<!-- /page component header -->

			<!-- Card -->
			<div class="dt-card">

				<!-- Card Body -->
				<div class="dt-card__body" id="sizes-buttons">
					<div>
						<button type="button" class="btn btn-primary btn-lg mr-2 mb-2">Large button
						</button>
						<button type="button" class="btn btn-secondary btn-lg mr-2 mb-2">Large button
						</button>
					</div>
					<div>
						<button type="button" class="btn btn-primary mr-2 mb-2">Default button</button>
						<button type="button" class="btn btn-secondary mr-2 mb-2">Default button
						</button>
					</div>
					<div>
						<button type="button" class="btn btn-primary btn-sm mr-2 mb-2">small button
						</button>
						<button type="button" class="btn btn-secondary btn-sm mb-2">small button
						</button>
					</div>
				</div>
				<!-- /card body -->

				<!-- Card Footer -->
				<div class="dt-card__footer">
					<div data-toggle="tooltip" title="Show the source">
						<a class="btn dt-fab-btn size-30" data-toggle="collapse" href="#sizes-buttons-collapse" role="button">
							<i class="material-icons icon-xl">code</i>
						</a>
					</div>

					<div data-toggle="tooltip" title="Copy the source">
						<button type="button" class="btn dt-fab-btn size-30"
								onclick="copyToClipboard('sizes-buttons')">
							<i class="material-icons icon-xl">content_copy</i>
						</button>
					</div>
				</div>
				<!-- /card footer -->

				<!-- Collapse -->
				<div class="collapse" id="sizes-buttons-collapse">
					<div class="prism-container ps-custom-scrollbar">
						<pre class="language-markup"><code><?php echo htmlentities(trim($sizes_buttons)); ?></code></pre>
					</div>
				</div>
				<!-- /collapse -->

			</div>
			<!-- /card -->

		</div>
		<!-- /page component -->

		<!-- Page Component -->
		<div class="dt-page__component">

			<!-- Page Component Header -->
			<div class="dt-page__component-header">
				<h4 class="dt-page__component-title">Block Buttons</h4>
			</div>
			<!-- /page component header -->

			<!-- Card -->
			<div class="dt-card">

				<!-- Card Body -->
				<div class="dt-card__body" id="block-buttons">
					<button type="button" class="btn btn-primary btn-block">Block level button</button>
					<button type="button" class="btn btn-secondary btn-block">Block level button</button>
				</div>
				<!-- /card body -->

				<!-- Card Footer -->
				<div class="dt-card__footer">
					<div data-toggle="tooltip" title="Show the source">
						<a class="btn dt-fab-btn size-30" data-toggle="collapse" href="#block-buttons-collapse" role="button">
							<i class="material-icons icon-xl">code</i>
						</a>
					</div>

					<div data-toggle="tooltip" title="Copy the source">
						<button type="button" class="btn dt-fab-btn size-30"
								onclick="copyToClipboard('block-buttons')">
							<i class="material-icons icon-xl">content_copy</i>
						</button>
					</div>
				</div>
				<!-- /card footer -->

				<!-- Collapse -->
				<div class="collapse" id="block-buttons-collapse">
					<div class="prism-container ps-custom-scrollbar">
						<pre class="language-markup"><code><?php echo htmlentities(trim($block_buttons)); ?></code></pre>
					</div>
				</div>
				<!-- /collapse -->

			</div>
			<!-- /card -->

		</div>
		<!-- /page component -->

		<!-- Page Component -->
		<div class="dt-page__component">

			<!-- Page Component Header -->
			<div class="dt-page__component-header">
				<h4 class="dt-page__component-title">Active State Buttons</h4>
			</div>
			<!-- /page component header -->

			<!-- Card -->
			<div class="dt-card">

				<!-- Card Body -->
				<div class="dt-card__body" id="active-state-buttons">
					<button type="button" class="btn btn-primary active mr-2 mb-2">Primary button</button>
					<button type="button" class="btn btn-secondary active mr-2 mb-2">Button</button>
					<a href="javascript:void(0)" class="btn btn-primary active mr-2 mb-2" role="button" aria-pressed="true">Primary link</a>
					<a href="javascript:void(0)" class="btn btn-secondary active mb-2" role="button" aria-pressed="true">Link</a>
				</div>
				<!-- /card body -->

				<!-- Card Footer -->
				<div class="dt-card__footer">
					<div data-toggle="tooltip" title="Show the source">
						<a class="btn dt-fab-btn size-30" data-toggle="collapse" href="#active-state-buttons-collapse" role="button">
							<i class="material-icons icon-xl">code</i>
						</a>
					</div>

					<div data-toggle="tooltip" title="Copy the source">
						<button type="button" class="btn dt-fab-btn size-30"
								onclick="copyToClipboard('active-state-buttons')">
							<i class="material-icons icon-xl">content_copy</i>
						</button>
					</div>
				</div>
				<!-- /card footer -->

				<!-- Collapse -->
				<div class="collapse" id="active-state-buttons-collapse">
					<div class="prism-container ps-custom-scrollbar">
						<pre class="language-markup"><code><?php echo htmlentities(trim($default_buttons)); ?></code></pre>
					</div>
				</div>
				<!-- /collapse -->

			</div>
			<!-- /card -->

		</div>
		<!-- /page component -->

		<!-- Page Component -->
		<div class="dt-page__component">

			<!-- Page Component Header -->
			<div class="dt-page__component-header">
				<h4 class="dt-page__component-title">Disabled State Buttons</h4>
			</div>
			<!-- /page component header -->

			<!-- Card -->
			<div class="dt-card">

				<!-- Card Body -->
				<div class="dt-card__body" id="disable-state-buttons">
					<button type="button" class="btn btn-primary mr-2 mb-2" disabled>Primary button</button>
					<button type="button" class="btn btn-secondary mr-2 mb-2" disabled>Button</button>
					<a href="javascript:void(0)" class="btn btn-primary mr-2 mb-2 disabled" tabindex="-1" role="button" aria-disabled="true">Primary link</a>
					<a href="javascript:void(0)" class="btn btn-secondary mb-2 disabled" tabindex="-1" role="button" aria-disabled="true">Link</a>
				</div>
				<!-- /card body -->

				<!-- Card Footer -->
				<div class="dt-card__footer">
					<div data-toggle="tooltip" title="Show the source">
						<a class="btn dt-fab-btn size-30" data-toggle="collapse" href="#disable-state-buttons-collapse" role="button">
							<i class="material-icons icon-xl">code</i>
						</a>
					</div>

					<div data-toggle="tooltip" title="Copy the source">
						<button type="button" class="btn dt-fab-btn size-30"
								onclick="copyToClipboard('disable-state-buttons')">
							<i class="material-icons icon-xl">content_copy</i>
						</button>
					</div>
				</div>
				<!-- /card footer -->

				<!-- Collapse -->
				<div class="collapse" id="disable-state-buttons-collapse">
					<div class="prism-container ps-custom-scrollbar">
						<pre class="language-markup"><code><?php echo htmlentities(trim($disable_state_buttons)); ?></code></pre>
					</div>
				</div>
				<!-- /collapse -->

			</div>
			<!-- /card -->

		</div>
		<!-- /page component -->

		<!-- Page Component -->
		<div class="dt-page__component">

			<!-- Page Component Header -->
			<div class="dt-page__component-header">
				<h4 class="dt-page__component-title">Checkbox Buttons</h4>
			</div>
			<!-- /page component header -->

			<!-- Card -->
			<div class="dt-card">

				<!-- Card Body -->
				<div class="dt-card__body" id="checkbox-buttons">
					<span class="btn-group-toggle" data-toggle="buttons">
					  <label class="btn btn-secondary mr-2 mb-2 active">
						<input type="checkbox" checked> Checked
					  </label>
					</span>

					<span class="btn-group-toggle" data-toggle="buttons">
					  <label class="btn btn-outline-primary mb-2">
						<input type="checkbox"> Unchecked
					  </label>
					</span>
				</div>
				<!-- /card body -->

				<!-- Card Footer -->
				<div class="dt-card__footer">
					<div data-toggle="tooltip" title="Show the source">
						<a class="btn dt-fab-btn size-30" data-toggle="collapse" href="#checkbox-buttons-collapse" role="button">
							<i class="material-icons icon-xl">code</i>
						</a>
					</div>

					<div data-toggle="tooltip" title="Copy the source">
						<button type="button" class="btn dt-fab-btn size-30"
								onclick="copyToClipboard('checkbox-buttons')">
							<i class="material-icons icon-xl">content_copy</i>
						</button>
					</div>
				</div>
				<!-- /card footer -->

				<!-- Collapse -->
				<div class="collapse" id="checkbox-buttons-collapse">
					<div class="prism-container ps-custom-scrollbar">
						<pre class="language-markup"><code><?php echo htmlentities(trim($checkbox_buttons)); ?></code></pre>
					</div>
				</div>
				<!-- /collapse -->

			</div>
			<!-- /card -->

		</div>
		<!-- /page component -->

		<!-- Page Component -->
		<div class="dt-page__component">

			<!-- Page Component Header -->
			<div class="dt-page__component-header">
				<h4 class="dt-page__component-title">Radio Buttons</h4>
			</div>
			<!-- /page component header -->

			<!-- Card -->
			<div class="dt-card">

				<!-- Card Body -->
				<div class="dt-card__body" id="radio-buttons">
					<div class="btn-group btn-group-toggle mr-2 mb-2" data-toggle="buttons">
						<label class="btn btn-primary">
							<input type="radio" name="options" id="option1"> Radio
						</label>
						<label class="btn btn-primary active">
							<input type="radio" name="options" id="option2" checked> Active
						</label>
						<label class="btn btn-primary">
							<input type="radio" name="options" id="option3"> Radio
						</label>
					</div>

					<div class="btn-group btn-group-toggle mb-2" data-toggle="buttons">
						<label class="btn btn-outline-secondary">
							<input type="radio" name="options" id="option4"> Radio
						</label>
						<label class="btn btn-outline-secondary active">
							<input type="radio" name="options" id="option5" checked> Active
						</label>
						<label class="btn btn-outline-secondary">
							<input type="radio" name="options" id="option6"> Radio
						</label>
					</div>
				</div>
				<!-- /card body -->

				<!-- Card Footer -->
				<div class="dt-card__footer">
					<div data-toggle="tooltip" title="Show the source">
						<a class="btn dt-fab-btn size-30" data-toggle="collapse" href="#radio-buttons-collapse" role="button">
							<i class="material-icons icon-xl">code</i>
						</a>
					</div>

					<div data-toggle="tooltip" title="Copy the source">
						<button type="button" class="btn dt-fab-btn size-30"
								onclick="copyToClipboard('radio-buttons')">
							<i class="material-icons icon-xl">content_copy</i>
						</button>
					</div>
				</div>
				<!-- /card footer -->

				<!-- Collapse -->
				<div class="collapse" id="radio-buttons-collapse">
					<div class="prism-container ps-custom-scrollbar">
						<pre class="language-markup"><code><?php echo htmlentities(trim($radio_buttons)); ?></code></pre>
					</div>
				</div>
				<!-- /collapse -->

			</div>
			<!-- /card -->

		</div>
		<!-- /page component -->

		<!-- Page Component -->
		<div class="dt-page__component">

			<!-- Page Component Header -->
			<div class="dt-page__component-header">
				<h4 class="dt-page__component-title">Toggle states</h4>
			</div>
			<!-- /page component header -->

			<!-- Card -->
			<div class="dt-card">

				<!-- Card Body -->
				<div class="dt-card__body" id="toggle-state">
					<button type="button" class="btn btn-primary mr-2 mb-2" data-toggle="button" aria-pressed="false">Single toggle</button>
					<button type="button" class="btn btn-outline-secondary mb-2" data-toggle="button" aria-pressed="false">Single toggle</button>
				</div>
				<!-- /card body -->

				<!-- Card Footer -->
				<div class="dt-card__footer">
					<div data-toggle="tooltip" title="Show the source">
						<a class="btn dt-fab-btn size-30" data-toggle="collapse" href="#toggle-state-collapse" role="button">
							<i class="material-icons icon-xl">code</i>
						</a>
					</div>

					<div data-toggle="tooltip" title="Copy the source">
						<button type="button" class="btn dt-fab-btn size-30"
								onclick="copyToClipboard('toggle-state')">
							<i class="material-icons icon-xl">content_copy</i>
						</button>
					</div>
				</div>
				<!-- /card footer -->

				<!-- Collapse -->
				<div class="collapse" id="toggle-state-collapse">
					<div class="prism-container ps-custom-scrollbar">
						<pre class="language-markup"><code><?php echo htmlentities(trim($toggle_state)); ?></code></pre>
					</div>
				</div>
				<!-- /collapse -->

			</div>
			<!-- /card -->

		</div>
		<!-- /page component -->
	</div>
	<!-- /page content area -->
	<!-- Page Sidebar-->
	<div class="dt-page__sidebar">
		<!-- Title -->
		<h4 class="dt-page__sidebar-title">Contents</h4>
		<!-- /title -->
		<!-- List -->
		<ul class="dt-list">
			<!-- List Item -->
			<li class="dt-list__item">
				<a class="dt-list__link" href="#default-buttons">Default Buttons</a>
			</li>
			<!-- /list item -->
			<!-- List Item -->
			<li class="dt-list__item">
				<a class="dt-list__link" href="#button-tag">Button Tags</a>
			</li>
			<!-- /list item -->
			<!-- List Item -->
			<li class="dt-list__item">
				<a class="dt-list__link" href="#outline-buttons">Outlines Buttons</a>
			</li>
			<!-- /list item -->
			<!-- List Item -->
			<li class="dt-list__item">
				<a class="dt-list__link" href="#sizes-buttons">Sizes button</a>
			</li>
			<!-- /list item -->
			<!-- List Item -->
			<li class="dt-list__item">
				<a class="dt-list__link" href="#block-buttons">Block Buttons</a>
			</li>
			<!-- /list item -->
			<!-- List Item -->
			<li class="dt-list__item">
				<a class="dt-list__link" href="#active-state-buttons">Active State Buttons</a>
			</li>
			<!-- /list item -->
			<!-- List Item -->
			<li class="dt-list__item">
				<a class="dt-list__link" href="#disable-state-buttons">Disabled State Buttons</a>
			</li>
			<!-- /list item -->
			<!-- List Item -->
			<li class="dt-list__item">
				<a class="dt-list__link" href="#checkbox-buttons">Checkbox Buttons</a>
			</li>
			<!-- /list item -->
			<!-- List Item -->
			<li class="dt-list__item">
				<a class="dt-list__link" href="#radio-buttons">Radio Buttons</a>
			</li>
			<!-- /list item -->
			<!-- List Item -->
			<li class="dt-list__item">
				<a class="dt-list__link" href="#toggle-state">Toggle states</a>
			</li>
			<!-- /list item -->
		</ul>
		<!-- /list -->
	</div>
	<!-- /page sidebar-->
</div>
<!-- /page container -->
