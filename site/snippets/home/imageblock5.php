<?php if($page->imageblock5_enable()->bool()): ?>

<section class="imageblock bg-second">
  <div class="imageblock-content col-md-6 col-sm-4">
    <?php $imageblock5_img = $page->imageblock5_img()->toFile(); ?>
    <div class="background-image-holder" style="background: url(&quot;<?php if($imageblock5_img != null) echo $imageblock5_img->url()?>&quot;)">
    </div>
  </div>
  <!--end of imageblock-->
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-7">
        <h2><?= $page->imageblock5_title() ?></h2>
        <div class="lead opacity">
          <?= $page->imageblock5_text()->kt() ?>
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
