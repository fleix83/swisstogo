
<section id="video">
  <div class="container-fluid">
    <div class="row d-flex justify-content-start">
          <div class="col-lg-12">
            <h2><?= $module->titel()->html() ?></h2>
            <figure class="video">
            <?php echo embed::youtube($module->videolink()->kirbytext(), ['options' => ['modestbranding' => 1, 'showinfo' => 0, 'rel' => 0, 'iv_load_policy' => 3, 'playsinline' => 1, 'enablejsapi' => 0, 'origin' => $site->url(), 'controls' => 1]]);?>
            </figure>
          </div>
      </div>
    </div>
  </div> <!-- END CONTAINER -->
</section>
