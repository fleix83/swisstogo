
<section class="cta <?= $module->background() ?>">
  <div class="container">
    <div class="row d-flex justify-content-between">
    
    <!-- Bild -->
      <div class="<?= $module->imagesize() ?> reveal">
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
      
      
      <!-- CtA -->
      <div class="col-lg-5 d-flex align-items-center section-image__text mt-5">
        <div class="col">
            <h2 class="section-image--h2"><?= $module->titel()->html() ?></h2>
            <p class="section-image--p"><?= $module->text()->html() ?></p>
            <button class="btn btn-primary"><a href="<?= $module->cta_link()->html() ?>" ><?= $module->cta()->html() ?></a></button>
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
