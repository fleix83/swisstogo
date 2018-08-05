
<section class="<?= $module->class() ?> ">
  <div class="container">
    <div class="row d-flex justify-content-center">

      <div class="col-lg-6 reveal ">
          <figure>
            <?php
            // images() is custom field
            $image = $module->image_left()->toFile();
            // always check if the image exists!
            if($image): ?>
            <img src="<?= $image->url() ?>" class="img-fluid" alt="">
            <?php endif ?>
          </figure>
      </div>

    <div class="col-lg-6  reveal">
          <figure>
            <?php
            // images() is custom field
            $image = $module->image_right()->toFile();
            // always check if the image exists!
            if($image): ?>
            <img src="<?= $image->url() ?>" class="img-fluid" alt="">
            <?php endif ?>
          </figure>
      </div>


        <div class="col-lg-12 d-flex <?= $module->justify() ?> section-image__text">
          <div class="col-lg-6">
            <h2 class="section-image--h2"><?= $module->titel()->html() ?></h2>
            <p class="section-image--p"><?= $module->text()->html() ?></p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- END CONTAINER -->
</section>
