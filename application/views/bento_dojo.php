			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active">Bento Gonçalves Dojo</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Bento Gonçalves Dojo</h2>
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
											Terças
										</td>
										<td>
											19h30 - 21h30
										</td>
										<td>
											Eduardo
										</td>
									</tr>
									<tr>
										<td>
											Quintas
										</td>
										<td>
											19h30 - 21h30
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
										<img class="img-responsive" alt="" src="<?php echo APPPATH; ?>img/team/eduardo.jpg">
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
							<li class="col-md-3 isotope-item leadership">
								<div class="team-item thumbnail">
									<span class="thumb-info team">
										<img class="img-responsive" alt="" src="<?php echo APPPATH ?>img/team/ze.jpg">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">José Paulo</span>
											<span class="thumb-info-type">1º kyu</span>
										</span>
									</span>
									<span class="thumb-info-caption">
										<p>José Paulo Aquini Camargo</p>
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

					<!-- <div class="row">
					
						<div class="col-md-12">
							<h3 class="short"><strong>Fotos</strong></h3>
						</div>
					
						<div class="row">
								<ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
									<li class="col-md-3 no-pin isotope-item">
										<div class="portfolio-item img-thumbnail">
											<a href="img/bento/inauguracao_bento.jpg" class="thumb-info">
												<img src="/img/bento/inauguracao_bento.jpg" class="image-responsive" height="200" width="400">
											</a>
										</div>
									</li>
									<li class="col-md-3 no-pin isotope-item">
										<div class="portfolio-item img-thumbnail">
											<a href="img/bento/bento2.jpg" class="thumb-info">
												<img src="/img/bento/bento2.jpg" class="image-responsive" height="200" width="400">
											</a>
										</div>
									</li>
								</ul>
							</div>
					
					</div> -->

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
				address: "Rua Guerino Franzolosso, 111 - Bento Gonçalves - RS",
				html: "<strong>Dojo Kobukan</strong><br>Rua Guerino Franzolosso, 111, Apto 301, Bairro Borgo - Bento Gonçalves - RS",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location 
			var initLatitude  = -29.159281;
			var initLongitude = -51.510491;

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

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script type="text/javascript">
		
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-12345678-1']);
			_gaq.push(['_trackPageview']);
		
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		
		</script>
		 -->

	</body>
</html>
