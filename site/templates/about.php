<?php snippet('header') ?>

<div class="container about">
  <div class="row">
    <div class="col-lg-12 d-flex flex-lg-nowrap flex-md-wrap flex-sm-wrap flex-wrap">



              <div class="col-lg-7 p-0 mr-2 image">
                <figure>
                  <?php
                  // images() is custom field
                  $image = $page->image();
                  // always check if the image exists!
                  if($image): ?>
                  <img src="<?= $image->url() ?>"  class="img-fluid" alt="woodandluxury workshop">
                  <?php endif ?>
                </figure>
              </div>

              <div class="col-lg-5 col-md-12 p-0 text pl-4">
                <h2><?= $page->title()->html() ?></h2>
                <div class="text wrap">
                  <?= $page->text()->kirbytext() ?>
                </div>

              </div>


    </div>
  </div>
</div>

<?php snippet('footer') ?>
