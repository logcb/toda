<?php snippet('header') ?>

<main role="main">

  <?php snippet('about/cover') ?>

  <section class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
          <h2><?= $page->about_title2() ?></h2>
          <p class="lead">
            <?= $page->about_subtitle2() ?>
          </p>
        </div>
      </div>
      <!--end of row-->
    </div>
    <!--end of container-->
  </section>
  <!--end of section-->

  <section class="about-us">
    <div class="container">
      <div class="row">
        <!--fetch all team pages and limit them to max 6 items-->
        <?php $team = page('about')->children()->visible()->limit(6); ?>
        <?php foreach($team as $t): ?>
        <div class="col-sm-4">
          <div class="team">
            <div>
              <!--fetch the first image-->
              <?php if($image = $t->images()->sortBy('sort', 'asc')->first()): ?>
              <img alt="Image" src="<?= $image->url() ?>">
              <?php endif ?>
              <h5><?= $t->title() ?></h5>
              <p><?= $t->position() ?></p>
              <p><?= $t->about() ?></p>
            </div>
          </div>
        </div>
        <?php endforeach ?>
      </div>
      <!--end of row-->
    </div>
    <!--end of container-->
  </section>
  <!--end of section-->

  <section class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
          <h2>Advisors</h2>
        </div>
      </div>
      <!--end of row-->
    </div>
    <!--end of container-->
  </section>
  <!--end of section-->

  <section class="about-us">
    <div class="container">
      <div class="row">
        <!--fetch all team pages and limit them to max 6 items-->
        <?php $team = page('about/exec')->children()->visible()->limit(6); ?>
        <?php foreach($team as $t): ?>
        <div class="col-sm-3">
          <div class="team">
            <div>
              <!--fetch the first image-->
              <?php if($image = $t->images()->sortBy('sort', 'asc')->first()): ?>
              <img alt="Image" src="<?= $image->url() ?>">
              <?php endif ?>
              <h5><?= $t->title() ?></h5>
              <p><?= $t->position() ?></p>
              <p><?= $t->about() ?></p>
            </div>
          </div>
        </div>
        <?php endforeach ?>
      </div>
      <!--end of row-->
    </div>
    <!--end of container-->
  </section>
  <!--end of section-->

</main>

<?php snippet('footer') ?>
