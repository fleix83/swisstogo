		<!-- MENU LARGE -->

		<!-- KICKSTARTER FLAG -->
		<a href="https://www.kickstarter.com/projects/582360255/swiss-to-go?lang=de">
			<div class="k">
				<img src="./content/k_logo.svg">
			</div>
		</a>

		<div class="container">
			<div class="row">
				<div class="navbar col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-between flex-nowrap">

					<!-- BRAND -->
					<div class="col-lg-2 col-xs-7 m-0">
						<a href="<?= url('swisstogo') ?>" class="brand" >
							<img class="brand" src="<?= $site->logo()->toFile()->url() ?>">
						</a>
					</div>

						<div class="col-lg-2 col-2"></div>



					<!-- LANGUAGE-SWITCHER -->
					<div class="switch col-lg-2">
						<nav class="languages" role="navigation">
							<ul>
								<?php foreach($site->languages() as $language): ?>
								<li<?php e($site->language() == $language, ' class="active"') ?>>
									<a href="<?= $page->url($language->code()) ?>">
										<?= html($language->name()) ?>
									</a>
								</li>
								<?php endforeach ?>
							</ul>
						</nav>
					</div>

					<!-- BUY BUTTON -->
					<div class="col-lg-1 col-xs-3 buy">

						<h4><a href="http://woodandluxury.com/shop/en/home/180-swiss-to-go.html">Buy</a></h4>
					</div>

				</div>  <!-- END NAV -->
			</div>
		</div>
