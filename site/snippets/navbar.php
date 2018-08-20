		<!-- NAVBAR -->

		<!-- KICKSTARTER FLAG
		<a href="https://www.kickstarter.com/projects/582360255/swiss-to-go?lang=de">
			<div class="k">
				<img src="./content/k_logo.svg">
			</div>
		</a> -->

		<div class="container">
			<div class="row">
				<div class="navbar col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-between flex-nowrap">
					<div class="col-lg-8 col-xs-7 flex-grow-1 m-0">
						<a href="<?= url('swisstogo') ?>" class="brand" >
							<img class="brand" src="<?= $site->logo()->toFile()->url() ?>">
						</a>
					</div>

					<!-- LANGUAGE-SWITCHER
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
					</div> -->

					<!-- BUY -->
					<div class="col-lg-1 col-md-1 col-sm-1 d-flex justify-content-end">
						<a target="_blank" href="http://swisstoolcase.com/product/swiss-to-go/">
							<button class="btn btn-hero">Buy</button>
						</a>
					</div>





				</div>  <!-- END NAV -->
			</div>
		</div>
