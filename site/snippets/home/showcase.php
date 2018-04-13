<?php if($page->showcase_enable()->bool()): ?>

<section class="showcase">
  <div class="container">
      <div class="row text-center breakline">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
          <h2><?= $page->showcase_title() ?></h2>
          <div class="lead opacity">
           <?= $page->showcase_text()->kt() ?>
		</div>
        </div>
        <!--end of col-->
      </div>
      <!--end of row-->
  </div>
  <!--end of container-->
</section>
<!--end of section-->

<?php endif ?>
