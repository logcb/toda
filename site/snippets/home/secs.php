<?php if($page->secs_enable()->bool()): ?>

<section class="secs">
  <div class="container">
    <div class="row">
	  <div class="col-sm-6 col-md-3">
		  <h2><?= $page->secs_title1() ?></h2>
          <div class="lead opacity">
             <?= $page->secs_text1()->kt() ?>
          </div>
	  </div>
	  <div class="col-sm-6 col-md-3">
		  <h2><?= $page->secs_title2() ?></h2>
          <div class="lead opacity">
             <?= $page->secs_text2()->kt() ?>
          </div>
	  </div>
	  <div class="col-sm-6 col-md-3">
		  <h2><?= $page->secs_title3() ?></h2>
          <div class="lead opacity">
             <?= $page->secs_text3()->kt() ?>
          </div>
	  </div>
	  <div class="col-sm-6 col-md-3">
		  <h2><?= $page->secs_title4() ?></h2>
          <div class="lead opacity">
             <?= $page->secs_text4()->kt() ?>
          </div>
	  </div>
    </div>
  </div>
</section>

<?php endif ?>
