<?php if($page->imageblock3_enable()->bool()): ?>

<section class="imageblock bg-second">
  <div class="imageblock-content col-md-6 col-sm-4">
    <?php $imageblock3_img = $page->imageblock3_img()->toFile(); ?>
    <div class="background-image-holder" style="background: url(&quot;<?php if($imageblock3_img != null) echo $imageblock3_img->url()?>&quot;)">
    </div>
  </div>
  <!--end of imageblock-->
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-7">
        <h2><?= $page->imageblock3_title() ?></h2>
        <div class="lead opacity">
          <?= $page->imageblock3_text()->kt() ?>
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
