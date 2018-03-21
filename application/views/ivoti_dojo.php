			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">	
								<ul class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">Ivoti Dojo</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Ivoti Dojo</h2>
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
											19h15 - 21h45
										</td>
										<td>
											Valim
										</td>
									</tr>
									<tr>
										<td>
											Sexta
										</td>
										<td>
											19h15 - 21h45
										</td>
										<td>
											Valim
										</td>
									</tr>
									<tr>
										<td>
											Sábado
										</td>
										<td>
											10h
										</td>
										<td>
											Valim
										</td>
									</tr>
								</tbody>
							</table>

						</div>
					</div>

					<hr class="tall" />

					<div class="row center">
						<div class="col-md-12 text-align-center">
							<img class="img-responsive margin-auto" src="/img/ivoti/logo.png" width="150" alt="">
							<p class="tall">A Mileniumm arts é um dojo parceiro da <strong>Kobukan</strong></p>
						</div>
					</div>
					
					<hr class="tall" />

					<div class="row center">
						
						<ul class="team-list sort-destination" data-sort-id="team">
							<li class="col-md-3 isotope-item leadership">
								<div class="team-item thumbnail">
									<span class="thumb-info team">
										<img class="img-responsive" alt="" src="/img/team/valim.jpg">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Valim</span>
											<span class="thumb-info-type">Nidan (2º Dan)</span>
										</span>
									</span>
									<span class="thumb-info-caption">
										<p>Manoel Valim</p>
									</span>
								</div>
							</li>
							
						</ul>
					
					</div>

				</div>

				<!-- <section class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/ivoti/dojo.jpg);">
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
									<li class="col-md-3 no-pin">
										<div class="img-thumbnail">
											<a href="/img/ivoti/<?php echo $foto; ?>" class="thumb-info">
												<img src="/img/ivoti/<?php echo $foto; ?>" class="image-responsive"  height="200" width="400">
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
				address: "Av. Sen. Alberto Pasqualine, 75 - Harmonia, RS",
				html: "<strong>Aldebaran - Terapias Complementares</strong><br>Rua Alberto Pasqualini, 75",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];


			// Map Initial Location
			var initLatitude = -29.606293;
			var initLongitude =  -51.163699;

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
