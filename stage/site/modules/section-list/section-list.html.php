
<section class="<?= $module->class() ?>">
  <div class="container">
    <div class="row">
      <div class="d-flex <?= $module->justifyImage() ?> col-12 flex-wrap reveal">
        <div class="<?= $module->imagesize() ?> col-sm-12 col-md-12 col-12 ">
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
    </div>


    <div class="row d-flex justify-content-lg-center justify-content-start flex-wrap">
      <div class="col-lg-6 col-md-12 col-sm-12 col-12 p-5 mt-2 list-text">
              <h2 class="section-image--h2 mb-3"><?= $module->titel()->html() ?></h2>
              <p><?= $module->text_links()->kirbytext() ?></p>
       </div>
       <div class="col-lg-6 col-md-12 col-sm-12 col-12 p-5 mt-lg-5 mt-0 list-text">
              <p><?= $module->text_rechts()->kirbytext() ?></p>
       </div>
    </div>
   </div> <!-- END ROW -->
  </div> <!-- END CONTAINER -->
</section>


<script>


function resize()
           {
               var heights = window.innerHeight;
               document.querySelector("section").style.height = heights + "px";
           }


  window.FontAwesomeConfig = {
    searchPseudoElements: true
  }

</script>
