			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="index.php">Home</a></li>
									<li class="active"><?php echo $title; ?></li>
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
						<?php if(!empty($horarios_alternativos)) : ?>
                            <div class="<?php echo $config_horarios_md; ?>">
                                <?php echo $title_treino_alternativo; ?>
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
                                        <?php foreach ($horarios_alternativos as $dia => $dados) :?>
                                            <tr>
                                                <td><?php echo $dia; ?></td>
                                                <td><?php echo $dados['hora']; ?></td>
                                                <td><?php echo $dados['instrutor']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>
                        <?php endif; ?>
						<div class="<?php echo $config_horarios_md; ?>">
							<?php echo $title_treino_aikido;?>

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

						<?php if (!empty($foto_fachada)) :?>
							<ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
								<li class="col-md-4	 no-pin isotope-item">
									<div class="portfolio-item img">
										<a href="<?php echo $foto_fachada; ?>" class="thumb-info">
											<img src="<?php echo base_url($foto_fachada); ?>" class="100Width image-responsive" height="365">
										</a>
									</div>
								</li>
							</ul>
						<?php endif;?>

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

					<?php if(!empty($dojo_parceiro)) :?>
						<div class="row center">
							<div class="col-md-12 text-align-center">
								<img class="img-responsive margin-auto" src="<?php echo base_url($dojo_parceiro['logo']) ?>" width="150" alt="">
								<?php echo $dojo_parceiro['title']; ?>
							</div>
						</div>
						<hr class="tall" />
					<?php endif;?>

					<div class="row">
						<h4><strong>Responsável</strong></h4>
                        <ul class="team-list sort-destination" data-sort-id="team">
						    <?php foreach ($responsaveis as $responsavel => $dados) : ?>
                                <li class="col-md-3 isotope-item leadership">
                                    <div class="team-item thumbnail">
                                        <span class="thumb-info team">
                                            <img class="img-responsive" alt="" src="<?php echo base_url($dados['foto']); ?>">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner"><?php echo $dados['short_name']; ?></span>
                                                <span class="thumb-info-type"><?php echo $dados['graduation']; ?></span>
                                            </span>
                                        </span>
                                        <span class="thumb-info-caption">
                                            <p><?php echo $responsavel; ?></p>
                                        </span>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>

					</div>
					<!-- Instrutores dos dojos -->
					<div class="row">
						<h4><strong>Instrutores</strong></h4>
                        <ul class="team-list sort-destination" data-sort-id="team">
						    <?php foreach ($instrutores as $instrutor => $dados) : ?>
                                <li class="col-md-3 isotope-item leadership">
                                    <div class="team-item thumbnail">
                                        <span class="thumb-info team">
                                            <img class="img-responsive" alt="" src="<?php echo base_url($dados['foto']); ?>">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner"><?php echo $dados['short_name']; ?></span>
                                                <span class="thumb-info-type"><?php echo $dados['graduation']; ?></span>
                                            </span>
                                        </span>
                                        <span class="thumb-info-caption">
                                            <p><?php echo $instrutor; ?></p>
                                        </span>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>

					</div>

				</div>
				<div class="container">

					<div class="row">

					<?php if (!empty($fotos)) : ?>
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

					<?php endif;?>
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
