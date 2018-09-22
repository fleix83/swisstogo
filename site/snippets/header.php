<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'de' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>


  <?php if($page->description() != ''): ?>
  <meta name="description" content="<?= $page->description()->html() ?>">
  <?php else: ?>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <?php endif ?>

  <?php if($page->keywords() != ''): ?>
  <meta name="keywords" content="<?= $page->keywords()->html() ?>">
  <?php else: ?>
  <meta name="keywords" content="<?= $site->keywords()->html() ?>">
  <?php endif ?>

  <meta name="author" content="<?= $site->author()->html() ?>">


	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>


  <!-- JS Librarys -->
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>


	<!-- Lightbox http://ashleydw.github.io/lightbox/ -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>


	<!-- FONTS & ICONS -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
  <!--	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

	<!-- STYLESHEETS -->
  <?= css('assets/css/bootstrap.css') ?>
  <?= css('assets/css/custom.css') ?>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122363255-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122363255-1');
  gtag('config', 'UA-122363255-2');
  </script>

  <!-- GOOGLE STRUCTURED DATA  JSON-LD -->
      <script type="application/ld+json">
  {
    "@context": "http://schema.org/",
    "@type": "Product",
    "name": "Swiss To Go",
    "image": [
      "./swisstogo/content/2-swisstogo/1-hero/swiss-to-go_korpus_voll_vonoben.png",
      "./swisstogo/content/2-swisstogo/16-buy-now/swiss-to-go_korpus_rueckseite.png"
     ],
    "description": "Swiss To Go is the practical and stylish picnic set for one to two people for a tasteful meal on the go.",
    "mpn": "925872",
    "brand": {
      "@type": "Thing",
      "name": "Wood & Luxury"
    },
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.4",
      "reviewCount": "89"
    }
  }
  </script>

</head>

<body>


<!-- Alert -->
  <?php
if($page->uid() == 'swisstogo') {
  // snippet('alert');
} ?>


<!-- NAVIGATION -->
<?php snippet('navbar') ?> 
<!-- END NAVIGATION -->


<script>

// Open Links in new Tab
$('a').each(function() {
  if(this.host !== window.location.host) {
    $(this).attr('target', '_blank');
  }
});
</script>
