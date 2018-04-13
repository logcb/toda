<?php if($page->imageblock2_enable()->bool()): ?>

<section class="imageblock bg-second">
  <div class="imageblock-content col-md-6 col-sm-4">
    <?php $imageblock2_img = $page->imageblock2_img()->toFile(); ?>
    <div class="background-image-holder" style="background: url(&quot;<?php if($imageblock2_img != null) echo $imageblock2_img->url()?>&quot;)">
    </div>
  </div>
  <!--end of imageblock-->
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-7">
        <h2><?= $page->imageblock2_title() ?></h2>
        <div class="lead opacity">
          <?= $page->imageblock2_text()->kt() ?>
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
