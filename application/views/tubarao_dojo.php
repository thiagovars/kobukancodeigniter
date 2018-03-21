			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">Tubarão Dojo</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Tubarão Dojo</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-4">

							<div id="google-dojo" class="google-map"></div>
							<div id="endereco"></div>

						</div>

						<div class="col-md-8">

							<h2 class="shorter">Horários para <strong>Treino</strong></h2>

							<hr class="tall">

							<table class="table table-striped">
								<thead>
									<tr>
										<th>Dia</th>
										<th>Hora</th>
										<th>Instrutor</th>
									</tr>									
								</thead>
								<tbody>
									<tr>
										<td>
											Terça
										</td>
										<td>
											19h30 - 21h30
										</td>
										<td>
											Fabrício
										</td>
									</tr>
									<tr>
										<td>
											Quinta
										</td>
										<td>
											19h30 - 21h30
										</td>
										<td>
											Natália
										</td>
									</tr>
								</tbody>
							</table>

						</div>
					</div>

					<hr class="tall" />

					<div class="row">
						<h4><strong>Responsáveis</strong></h4>
						<ul class="team-list sort-destination" data-sort-id="team">
							<li class="col-md-3 isotope-item leadership">
								<div class="team-item thumbnail">
									<span class="thumb-info team">
										<img class="img-responsive" alt="" src="img/team/fabricio.jpg">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Fabricio</span>
											<span class="thumb-info-type">Sandan (3º Dan)</span>
										</span>
									</span>
									<span class="thumb-info-caption">
										<p>Fabricio Benedet</p>
									</span>
								</div>
							</li>
							<li class="col-md-3 isotope-item marketing">
								<div class="team-item thumbnail">
									<span class="thumb-info team">
										<img class="img-responsive" alt="" src="img/team/natalia.jpg">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Natália</span>
											<span class="thumb-info-type">Nidan (2º Dan)</span>
										</span>
									</span>
									<span class="thumb-info-caption">
										<p>Natália Paes</p>										
									</span>
								</div>
							</li>
						</ul>

					</div>

				</div>

				<!-- <section class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(/kobukan/img/tubarao/tubarao2.jpg);">
					<div class="container">
						<div class="row center">
							<div class="col-md-12">

								<div style="height: 150px;"></div>

							</div>
						</div>
					</div>
				</section> -->
				<div class="container">

					<div class="row">

						<div class="col-md-12">
							<h3 class="short"><strong>Fotos</strong></h3>
						</div>

						<div class="row">
							<ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
								<?php foreach ($fotos as $foto) :?>
									<li class="col-md-3 no-pin isotope-item">
										<div class="portfolio-item img-thumbnail">
											<a href="img/tubarao/<?php echo $foto; ?>" class="thumb-info">
												<img src="img/tubarao/<?php echo $foto; ?>" class="image-responsive" height="200" width="400">
											</a>
										</div>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>

					</div>

				</div>

			</div>

		</div>
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "Rua Prudente de Moraes 352 - Tubarão - SC Brasil",
				html: "<strong>Dojo Kobukan</strong><br>Rua Prudente de Moraes 352 - Tubarão - SC Brasil",
				icon: {
					image: "/kobukan/img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = -28.486819;
			var initLongitude =  -49.004696;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					panControl: false,
					zoomControl: true,
					mapTypeControl: false,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: true,
					disableDefaultUI: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 16
			};

			var map = $("#google-dojo").gMap(mapSettings);
			var end = $("#endereco").html("Rua Prudente de Moraes 352 - Tubarão - SC Brasil");

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$("#google-dojo").gMap("centerAt", options);
			}

		</script>

	</body>
</html>
