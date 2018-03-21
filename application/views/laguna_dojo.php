			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">Laguna Dojo</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Laguna Dojo</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-4">

							<div id="google-dojo" class="google-map"></div>

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
											Segunda
										</td>
										<td>
											20h - 21h30
										</td>
										<td>
											Vinicius
										</td>
									</tr>
									<tr>
										<td>
											Quarta
										</td>
										<td>
											20h - 21h30
										</td>
										<td>
											Vinicius
										</td>
									</tr>
									<tr>
										<td>
											Sexta
										</td>
										<td>
											20h - 21h30
										</td>
										<td>
											Vinicius
										</td>
									</tr>
									<tr>
										<td>
											Sábado
										</td>
										<td>
											16h - 17h30
										</td>
										<td>
											Vinicius
										</td>
									</tr>
								</tbody>
							</table>

						</div>
					</div>

					<hr class="tall" />

					<div class="row">
						<h4><strong>Responsável</strong></h4>
						<ul class="team-list sort-destination" data-sort-id="team">
							<li class="col-md-3 isotope-item leadership">
								<div class="team-item thumbnail">
									<span class="thumb-info team">
										<img class="img-responsive" alt="" src="/img/team/vinicius.jpg">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Vinicius</span>
											<span class="thumb-info-type">Shodan (1º Dan)</span>
										</span>
									</span>
									<span class="thumb-info-caption">
										<p>Vinicius Algarve</p>
									</span>
								</div>
							</li>							
						</ul>

					</div>

				</div>

				<!-- <section class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/laguna/dojo.jpg);">
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
												<a href="/img/laguna/<?php echo $foto; ?>" class="thumb-info">
													<img src="/img/laguna/<?php echo $foto; ?>" class="image-responsive" height="200" width="400">
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
				address: "R. Getúlio Vargas, 57, Lagnuna - Santa Catarina",
				html: "<strong>Dojo Kobukan</strong><br>R. Getúlio Vargas, 57, Laguna, Santa Catarina",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = -27.301244;
			var initLongitude =  -49.793400;

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

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$("#google-dojo").gMap("centerAt", options);
			}

		</script>

	</body>
</html>
