
<section class="<?= $module->class() ?>">
  <div class="container-fluid p-0">
    <div class="row p-0 d-flex justify-content-center">
      <div class="col-lg-10 hero-elements d-flex flex-md-nowrap flex-wrap flex-lg-row flex-md-row flex-column-reverse">
        <div class="col-lg-7 claims d-flex justify-content-start flex-wrap p-4">
          <h2><?= $module->heroclaim1()->kirbytext() ?></h2>
          <div class="col-lg-5 d-flex flex-nowrap p-0">
            <a target="_blank" href="<?= $module->cta_shop_link()->url() ?>">
              <button class="btn btn-cta mr-2 mt-2 p-1"><?= $module->cta_shop() ?></button>
            </a>
            <a id="video" href="#video">
              <button class="btn btn-cta mt-2 more"><?= $module->cta_more() ?></button>
            </a>
          </div>
        </div>

      <div class="col-lg-5 col-md-7 p-0 d-flex <?= $module->justifyImage() ?> image-wrapper">
        <div class="<?= $module->imagesize() ?> image">
          <figure>
            <?php
            // images() is custom field
            $image = $module->image();
            // always check if the image exists!
            if($image): ?>
            <img src="<?= $image->url() ?>"  class="img-fluid" alt="woodandluxury workshop">
            <?php endif ?>
          </figure>
        </div>
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

<script>
// Scroll to section
$("section").find("a#video").click(function(e) {
  e.preventDefault();
  var section = $(this).attr("href");
  $("html, body").animate({
      scrollTop: $(section).offset().top + 200
  });
});
</script>
