<?php snippet('header') ?>

<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <main class="main" role="main">

            <header class="wrap">
              <h1><?= $page->title()->html() ?></h1>
              <div class="intro text">
                <?= $page->intro()->kirbytext() ?>
              </div>
            </header>

            <div class="text wrap">
              <?= $page->text()->kirbytext() ?>
            </div>
      </main>
    </div>
  </div>
</div>
<?php snippet('footer') ?>
