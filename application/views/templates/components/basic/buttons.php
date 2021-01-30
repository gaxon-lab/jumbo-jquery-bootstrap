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
?>

<!-- Grid -->
<div class="row ">

  <!-- Grid Item -->
  <div class="col-md-6 dt-masonry__item">

    <!-- Card -->
    <div class="dt-card">

      <!-- Card Header -->
      <div class="dt-card__header">

        <!-- Card Heading -->
        <div class="dt-card__heading">
          <h3 class="dt-card__title">Default Buttons</h3>
        </div>
        <!-- /card heading -->

      </div>
      <!-- /card header -->

      <!-- Card Body -->
      <div class="dt-card__body" id="copy-to-content">
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

      <div class="dt-card__footer-actions">
        <div data-toggle="tooltip" title="Show the source"  style="display: inline-block;">
          <a class="btn btn-primary mr-2 mb-2" data-toggle="collapse" href="#collapseExample" role="button">
            Source
          </a>
        </div>

        <button type="button" data-toggle="tooltip" title="Copy the source" onclick="copyToClipboard('copy-to-content')" class="btn btn-link mb-2">Copy</button>
      </div>

      <div class="collapse" id="collapseExample">
        <pre class="language-markup"><code><?php echo htmlentities(trim($default_buttons)); ?></code></pre>
      </div>
    </div>
    <!-- /card -->

  </div>
  <!-- /grid item -->

  <!-- Grid Item -->
  <div class="col-md-6 dt-masonry__item">

    <!-- Card -->
    <div class="dt-card">

      <!-- Card Header -->
      <div class="dt-card__header">

        <!-- Card Heading -->
        <div class="dt-card__heading">
          <h3 class="dt-card__title">Button Tags</h3>
        </div>
        <!-- /card heading -->

      </div>
      <!-- /card header -->

      <!-- Card Body -->
      <div class="dt-card__body">
        <a class="btn btn-primary mr-2 mb-2" href="javascript:void(0)"
           role="button">Link</a>
        <button class="btn btn-primary mr-2 mb-2" type="submit">Button</button>
        <input class="btn btn-primary mr-2 mb-2" type="button" value="Input">
        <input class="btn btn-primary mr-2 mb-2" type="submit" value="Submit">
        <input class="btn btn-primary mb-2" type="reset" value="Reset">
      </div>
      <!-- /card body -->

    </div>
    <!-- /card -->

  </div>
  <!-- /grid item -->

  <!-- Grid Item -->
  <div class="col-md-6 dt-masonry__item">

    <!-- Card -->
    <div class="dt-card">

      <!-- Card Header -->
      <div class="dt-card__header">

        <!-- Card Heading -->
        <div class="dt-card__heading">
          <h3 class="dt-card__title">Outlines Buttons</h3>
        </div>
        <!-- /card heading -->

      </div>
      <!-- /card header -->

      <!-- Card Body -->
      <div class="dt-card__body">
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

    </div>
    <!-- /card -->

  </div>
  <!-- /grid item -->

  <!-- Grid Item -->
  <div class="col-md-6 dt-masonry__item">

    <!-- Card -->
    <div class="dt-card">

      <!-- Card Header -->
      <div class="dt-card__header">

        <!-- Card Heading -->
        <div class="dt-card__heading">
          <h3 class="dt-card__title">Sizes button</h3>
        </div>
        <!-- /card heading -->

      </div>
      <!-- /card header -->

      <!-- Card Body -->
      <div class="dt-card__body">
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

    </div>
    <!-- /card -->

  </div>
  <!-- /grid item -->

  <!-- Grid Item -->
  <div class="col-md-6 dt-masonry__item">

    <!-- Card -->
    <div class="dt-card">

      <!-- Card Header -->
      <div class="dt-card__header">

        <!-- Card Heading -->
        <div class="dt-card__heading">
          <h3 class="dt-card__title">Block Buttons</h3>
        </div>
        <!-- /card heading -->

      </div>
      <!-- /card header -->

      <!-- Card Body -->
      <div class="dt-card__body">
        <button type="button" class="btn btn-primary btn-block">Block level button</button>
        <button type="button" class="btn btn-secondary btn-block">Block level button
        </button>
      </div>
      <!-- /card body -->

    </div>
    <!-- /card -->

  </div>
  <!-- /grid item -->

  <!-- Grid Item -->
  <div class="col-md-6 dt-masonry__item">

    <!-- Card -->
    <div class="dt-card">

      <!-- Card Header -->
      <div class="dt-card__header">

        <!-- Card Heading -->
        <div class="dt-card__heading">
          <h3 class="dt-card__title">Active State Buttons</h3>
        </div>
        <!-- /card heading -->

      </div>
      <!-- /card header -->

      <!-- Card Body -->
      <div class="dt-card__body mb-5">
        <button type="button" class="btn btn-primary active mr-2 mb-2">Primary button
        </button>
        <button type="button" class="btn btn-secondary active mr-2 mb-2">Button</button>
        <a href="javascript:void(0)" class="btn btn-primary active mr-2 mb-2" role="button"
           aria-pressed="true">Primary
          link</a>
        <a href="javascript:void(0)" class="btn btn-secondary active mb-2" role="button"
           aria-pressed="true">Link</a>
      </div>
      <!-- /card body -->

      <!-- Card Header -->
      <div class="dt-card__header">

        <!-- Card Heading -->
        <div class="dt-card__heading">
          <h3 class="dt-card__title">Disabled State Buttons</h3>
        </div>
        <!-- /card heading -->

      </div>
      <!-- /card header -->

      <!-- Card Body -->
      <div class="dt-card__body mb-5">
        <button type="button" class="btn btn-primary mr-2 mb-2" disabled>Primary button
        </button>
        <button type="button" class="btn btn-secondary mr-2 mb-2" disabled>Button</button>
        <a href="javascript:void(0)" class="btn btn-primary mr-2 mb-2 disabled"
           tabindex="-1" role="button"
           aria-disabled="true">Primary link</a>
        <a href="javascript:void(0)" class="btn btn-secondary mb-2 disabled" tabindex="-1"
           role="button"
           aria-disabled="true">Link</a>
      </div>
      <!-- /card body -->

    </div>
    <!-- /card -->

  </div>
  <!-- /grid item -->

  <!-- Grid Item -->
  <div class="col-md-6 dt-masonry__item">

    <!-- Card -->
    <div class="dt-card">

      <!-- Card Header -->
      <div class="dt-card__header">

        <!-- Card Heading -->
        <div class="dt-card__heading">
          <h3 class="dt-card__title">Checkbox Buttons</h3>
        </div>
        <!-- /card heading -->

      </div>
      <!-- /card header -->

      <!-- Card Body -->
      <div class="dt-card__body mb-5">
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

      <!-- Card Header -->
      <div class="dt-card__header">

        <!-- Card Heading -->
        <div class="dt-card__heading">
          <h3 class="dt-card__title">Radio Buttons</h3>
        </div>
        <!-- /card heading -->

      </div>
      <!-- /card header -->

      <!-- Card Body -->
      <div class="dt-card__body mb-5">
        <div class="btn-group btn-group-toggle mr-2 mb-2" data-toggle="buttons">
          <label class="btn btn-primary"> <input type="radio" name="options" id="option1">
            Radio
          </label>
          <label class="btn btn-primary active"> <input type="radio" name="options"
                                                        id="option2" checked> Active
          </label>
          <label class="btn btn-primary"> <input type="radio" name="options" id="option3">
            Radio
          </label>
        </div>

        <div class="btn-group btn-group-toggle mb-2" data-toggle="buttons">
          <label class="btn btn-outline-secondary"> <input type="radio" name="options"
                                                           id="option4"> Radio
          </label>
          <label class="btn btn-outline-secondary active">
            <input type="radio" name="options" id="option5" checked> Active
          </label>
          <label class="btn btn-outline-secondary"> <input type="radio" name="options"
                                                           id="option6"> Radio
          </label>
        </div>
      </div>
      <!-- /card body -->

    </div>
    <!-- /card -->

  </div>
  <!-- /grid item -->

  <!-- Grid Item -->
  <div class="col-md-6 dt-masonry__item">

    <!-- Card -->
    <div class="dt-card">

      <!-- Card Header -->
      <div class="dt-card__header">

        <!-- Card Heading -->
        <div class="dt-card__heading">
          <h3 class="dt-card__title">Toggle states</h3>
        </div>
        <!-- /card heading -->

      </div>
      <!-- /card header -->

      <!-- Card Body -->
      <div class="dt-card__body mb-5">
        <button type="button" class="btn btn-primary mr-2 mb-2" data-toggle="button"
                aria-pressed="false">
          Single toggle
        </button>

        <button type="button" class="btn btn-outline-secondary mb-2" data-toggle="button"
                aria-pressed="false">
          Single toggle
        </button>
      </div>
      <!-- /card body -->

    </div>
    <!-- /card -->

  </div>
  <!-- /grid item -->

</div>
<!-- /grid -->