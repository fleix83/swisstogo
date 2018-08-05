
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
              <img src="<?= $image->url() ?>" class="img-fluid lazyload" alt="">
              <?php endif ?>
             </figure>
        </div>
      </div>
    </div>

    <!-- CONTENT STRUCTURED FIELD -->
      <div class="row d-flex justify-content-lg-center justify-content-start flex-wrap">
                  <div class="col-lg-12 ml-5 mt-5 ">
                    <h2 class="section-image--h2 mb-3"><?= $module->titel()->html() ?></h2>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12 col-12 p-5 mt-2 list-text">
                  <!-- ITEMS LINKS -->
                  <?php foreach($module->content_links()->toStructure() as $item_links): ?>
                          <h4><?= $item_links->titel_links()->html() ?></h4>
                          <p><?= $item_links->text_links()->html() ?></p>
                  <?php endforeach ?>
                  </div>
                  <!-- ITEMS RECHTS -->
                  <div class="col-lg-6 col-md-12 col-sm-12 col-12 p-5 mt-2 list-text">
                  <?php foreach($module->content_rechts()->toStructure() as $item_rechts): ?>
                          <h4><?= $item_rechts->titel_rechts()->html() ?></h4>
                          <p><?= $item_rechts->text_rechts()->html() ?></p>
                  <?php endforeach ?>
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
