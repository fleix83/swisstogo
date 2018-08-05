
<section class="<?= $module->class() ?>">
  <div class="container-fluid p-0">
    <div class="row p-0">
      
      <div class="col-lg-12 p-0 d-flex <?= $module->justifyImage() ?> reveal section-image__image">
        <div class="<?= $module->imagesize() ?>">
          <figure>
            <?php
            // images() is custom field
            $image = $module->image();
            // always check if the image exists!
            if($image): ?>
            <img src="<?= $image->url() ?>" class="img-fluid" alt="">
            <?php endif ?>
          </figure>
        </div>
      </div>
        <div class="col-lg-12 d-flex <?= $module->justify() ?> section-image__text">
          <div class="col-lg-6">
            <h2 class="section-image--h2"><?= $module->titel()->html() ?></h2>
            <p class="section-image--p"><?= $module->text()->html() ?></p>
          </div>
        </div>
    </div>
  </div> <!-- END CONTAINER -->
</section>


<script>
function resize()
           {
               var heights = window.innerHeight;
               document.querySelector("section").style.height = heights + "px";
           }
</script>
