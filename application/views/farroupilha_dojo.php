			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active"><?php echo $title;?></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Endereço: <strong><?php echo $endereco; ?></strong></h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
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
									<?php foreach ($horarios_treino as $dia => $dados) :?>
										<tr>
											<td><?php echo $dia; ?></td>
											<td><?php echo $dados['hora']; ?></td>
											<td><?php echo $dados['instrutor']; ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>

						</div>

						<div class="col-md-4">

							<h2 class="shorter">Contato</h2>
							<hr class="tall">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Nome</th>
										<th>Telefone</th>
									</tr>
								</thead>
								<tbody>
										<?php foreach ($contato as $nome => $telefone) :?>
											<tr>
												<td><strong><?php echo $nome; ?></strong></td>
												<td><?php echo $telefone; ?></td>
											</tr>
										<?php endforeach; ?>
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
										<img class="img-responsive" alt="" src="<?php echo base_url('/img/team/juliano.jpg'); ?>">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Juliano</span>
											<span class="thumb-info-type">Shodan (1º Dan)</span>
										</span>
									</span>
									<span class="thumb-info-caption">
										<p>Juliano Alves</p>
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
											<a href="<?php echo base_url($foto);?>" class="thumb-info">
												<img src="<?php echo base_url($foto);?>" class="image-responsive" height="200" width="400">
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
			var endereco = '<?php echo $title;?>';
			var mapMarkers = [{
				address: endereco,
				html: "<strong>Dojo Kobukan</strong><br>",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			var initLatitude  = -29.222013;
			var initLongitude = -51.341405;

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
