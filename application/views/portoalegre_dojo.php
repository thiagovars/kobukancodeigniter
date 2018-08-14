			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">Porto Alegre Dojo</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Porto Alegre Dojo</h2>
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
										<!-- <th>Instrutor</th> -->
									</tr>									
								</thead>
								<tbody>
									<tr>
										<td>
											Terças
										</td>
										<td>
											19h30 - 20h30
										</td>
										
									</tr>
									<tr>
										<td>
											Quintas
										</td>
										<td>
											19h30 - 20h30
										</td>
										
									</tr>
									<tr>
										<td>
											Sábado
										</td>
										<td>
											10h - 12h
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
										<img class="img-responsive" alt="" src="<?php echo base_url('/img/team/mathaeus_aikido.jpg'); ?>">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Mathaeus</span>
											<span class="thumb-info-type">Nidan (2º Dan)</span>
										</span>
									</span>
								</div>
							</li>	
						</ul>

					</div>

				</div>

				<!-- <section class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(/kobukan/img/portoalegre/dojo.jpg);">
					<div class="container">
						<div class="row center">
							<div class="col-md-12">

								<div style="height: 350px;"></div>

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
											<a href="<?php echo base_url($foto) ?>" class="thumb-info">
												<img src="<?php echo base_url($foto) ?>" class="image-responsive"  height="200" width="400">
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
			var endereco = '<?php echo $endereco; ?>';
			var mapMarkers = [{
				address: endereco,
				html: "<strong>Dojo Kobukan</strong><br>"+endereco,
				icon: {
					image: "/kobukan/img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude  = -30.0059031;
			var initLongitude = -51.1429017;

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
