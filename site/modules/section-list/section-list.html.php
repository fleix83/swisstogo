
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
      <div class="row d-flex justify-content-lg-start justify-content-start">
                  <div class="col-lg-12 ml-5 mt-5 p-0 ">
                    <h2 class="section-image--h2 mb-3"><?= $module->titel()->html() ?></h2>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12  p-5 mt-2 list-text">
                  <!-- ITEMS LINKS -->
                    <div class="col-lg-12 d-flex flex-wrap p-0 justify-content-around">
                      <?php foreach($module->content_links()->toStructure() as $item_links): ?>
                              <div class="col-lg-3 border item d-flex justify-content-center align-self-start flex-wrap">
                                <div><h4><?= $item_links->titel_links()->html() ?></h4></div>
                                <div><p><?= $item_links->text_links()->html() ?></p></div>
                              </div>

                      <?php endforeach ?>
                    </div>

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
