<?php snippet('header') ?>

<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <main class="main grid" role="main">
        <div class="product-details">
          <div class="product-description">
            <h1><?= $page->name()->html() ?></h1>
            <img width="200" src="<?= $page->image()->url() ?>" />
            <p><?= $page->description()->html() ?></p>
            <a href="#" class="snipcart-add-item"
              data-item-name="<?= $page->name() ?>"
              data-item-id="<?= $page->identifier() ?>"
              data-item-url="<?= $page->url() ?>"
              data-item-image="<?= $page->image()->url() ?>"
              data-item-price="<?= $page->price() ?>">
              Buy it for <?= $page->price() ?> $
            </a>
          </div>
        </div>
      </main>
    </div>
  </div>
</div>



<?php snippet('snipcart') ?>
<?php snippet('footer') ?>
