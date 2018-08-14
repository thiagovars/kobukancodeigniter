			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">Gramado Dojo</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Gramado Dojo</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-4">

							<div id="google-dojo" class="google-map"></div>

						</div>
						
							<!-- <ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
								<li class="col-md-4	 no-pin isotope-item">
									<div class="portfolio-item img">
										<a href="<?php echo base_url('/img/gramado/fachada.jpg') ?>" class="thumb-info">
											<img src="<?php echo base_url('/img/gramado/fachada.jpg') ?>" id="gramadoFachada" class="100Width image-responsive" height="365">
										</a>
									</div>
								</li>
							</ul> -->

						<div class="col-md-4">

							<h2 class="shorter">Horários para treino <h3 class="shorter"><strong>Iaido, Jodo e Naginata</strong></h3></h2>

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
											20H00 - 21h00 
										</td>
										<td>
											Jordan
										</td>
									</tr>
									<tr>
										<td>
											Quarta
										</td>
										<td>
											20H00 - 21h00
										</td>
										<td>
											Jordan
										</td>
									</tr>									
								</tbody>
							</table>

						</div>


						<div class="col-md-4">

							<h2 class="shorter">Horários para treino <h3 class="shorter"><strong>Aikido</strong></h3></h2>

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
											21h00 - 22h00 
										</td>
										<td>
											Jordan
										</td>
									</tr>
									<tr>
										<td>
											Quarta
										</td>
										<td>
											21h00 - 22h00
										</td>
										<td>
											Jordan
										</td>
									</tr>									
								</tbody>
							</table>

						</div>

					</div>

					<hr class="tall" />

					<div class="row center">
						<h4><strong>Responsável</strong></h4>
						<ul class="team-list sort-destination" data-sort-id="team">
							<li class="col-md-3 isotope-item leadership">
								<div class="team-item thumbnail">
									<span class="thumb-info team">
										<img class="img-responsive" alt="" src="<?php echo base_url('/img/team/jordan.jpg'); ?>">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Jordan</span>
											<span class="thumb-info-type">Shodan (1º Dan)</span>
										</span>
									</span>
									<span class="thumb-info-caption">
										<p>Jordan Teixeira Nicloti</p>
									</span>
								</div>
							</li>
						</ul>
					
					</div>

				</div>
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
				html: "<strong>Academia Ironworks Prime</strong><br>Av. Borges de Medeiros, 4770 - Floresta, Gramado - RS",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location 

			var initLatitude  = -29.363893;
			var initLongitude = -50.883068;

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
