			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">Farroupilha Dojo</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Farroupilha Dojo</h2>
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
											Terça
										</td>
										<td>
											19h00 - 20h30
										</td>
										<td>
											Eduardo
										</td>
									</tr>
									<tr>
										<td>
											Quinta
										</td>
										<td>
											19h00 - 20h30
										</td>
										<td>
											Eduardo
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
										<?php echo base_url(); ?>
										<img class="img-responsive" alt="" src="/img/team/eduardo.jpg">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Eduardo</span>
											<span class="thumb-info-type">Yondan (4º Dan)</span>
										</span>
									</span>
									<span class="thumb-info-caption">
										<p>Eduardo Corrêa</p>
									</span>
								</div>
							</li>	
													
						</ul>

					</div>

				</div>

				<!-- <section class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/farroupilha/dojo.jpg);">
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
									<?php foreach ($fotos as $foto) : ?>
									
									<li class="col-md-3 no-pin isotope-item">
										<div class="portfolio-item img-thumbnail">
											<a href="/img/farroupilha/<?php echo $foto;?>" class="thumb-info">
												<img src="/img/farroupilha/<?php echo $foto;?>" class="image-responsive" height="200" width="400">
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

		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "Rua 14 de julho, 74 - Farroupilha - RS",
				html: "<strong>Dojo Kobukan</strong><br>R. 14 de julho, 74 - Farroupilha / RS",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location -29.224404, -51.349635
			var initLatitude = -29.224404;
			var initLongitude =  -51.349635;

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
