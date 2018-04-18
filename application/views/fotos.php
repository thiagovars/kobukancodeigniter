			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Fotos</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Fotos</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<h2>Fotos Kobukan</h2>

					<ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter">
						<li data-option-value="*" class="active"><a href="#">Mostrar todos</a></li>
						<!-- <li data-option-value=".exame-faixa"><a href="#">Exame de faixa</a></li>
						<li data-option-value=".koshukai"><a href="#">koshukai</a></li> -->
						<li data-option-value=".anos90"><a href="#">Fotos academia central anos 90</a></li>
					</ul>

					<hr />

					<div class="row">
						<ul class="portfolio-list sort-destination" data-sort-id="portfolio" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
							<li class="col-md-3 isotope-item anos90">
								<div class="portfolio-item img-thumbnail">
									<a href="fotosanos90.php" class="thumb-info">
										<img alt="" class="img-responsive" src="<?php echo base_url('/img/anos90/17.jpg'); ?>">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Fotos anos 90</span>
											<span class="thumb-info-type">Academia central - SP</span>
										</span>
										<span class="thumb-info-action">
											<span title="Universal" class="thumb-info-action-icon"><i class="icon icon-picture-o"></i></span>
										</span>
									</a>
								</div>
							</li>
							
						</ul>
					</div>

				</div>

			</div>

		</div>
	</body>
</html>
