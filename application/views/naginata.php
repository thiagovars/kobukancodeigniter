			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="./">Home</a></li>
									<li class="active">Naginata</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Naginata</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12" data-appear-animation="fadeInUp">
							<h3><strong>Naginata:</strong> Espada lança</h3>
							
							<p class="drop-caps">
								Arma que consiste de uma lâmina de Katana (espada) com um longo pino inseridomnum Cabo de lança com 
								aproximadamente 2,25 m. Os primeiros a usarem essas armas foram os monges guerreiros sonhei, ou 
								yamabushis, a fim de assegurar a proteção dos santuários. O mais célebre foi o monge Benkei. 
								Nos campos de batalha a os guerreiros a usavam para cortar as pernas dos cavalos e a cavalaria para 
								cortar o inimigo de longe. Por ser muito grande e difícil de transportar para as batalhas passou a ser 
								utilizada pelas mulheres samurais como defesa da casa. Sensei Eduardo Corrêae Angelica Djenane são 
								discípulos da Sensei Yasue Morita , 4 Dan, e atualmente são responsáveis pelo grupo de estudos no RS e SC.
							</p>
							<p class="drop-caps">
								Aconteceu no dia 25 de Novembro de 2017, Seminário de Naginata com exame de graduação. Angelica e Eduardo foram aprovados para 3º kyu.
							</p>
							<p class="drop-caps">
								Eduardo graduou 2º kyu no dia 25 de Fevereiro de 2018.
							</p>
							<hr class="tall">

							<div class="row">
								<div class="col-md-12" data-appear-animation="fadeInDown">

									<!-- <div class="row">
										<div class="col-md-3">
											<h4><strong>Responsável Técnico</strong></h4>
										</div>
										<div class="col-md-3">
											<h4><strong>Instrutor</strong></h4>
										</div>
									</div> -->
								<div class="row">
											<ul class="team-list sort-destination" data-sort-id="team">
												
												<li class="col-md-3 isotope-item leadership">
													<div class="team-item thumbnail">
														<span class="thumb-info team">
															<img class="img-responsive" alt="" src="<?php echo base_url('/img/team/angelica.jpg'); ?>">
															<span class="thumb-info-title">
																<span class="thumb-info-inner">Angélica Philippe</span>
																<span class="thumb-info-type">3º kyu</span>
															</span>
														</span>
													</div>
												</li>							
												
												<li class="col-md-3 isotope-item leadership">
													<div class="team-item thumbnail">
														<span class="thumb-info team">
															<img class="img-responsive" alt="" src="<?php echo base_url('/img/team/eduardoNaginata.jpg'); ?>">
															<span class="thumb-info-title">
																<span class="thumb-info-inner">Eduardo Corrêa</span>
																<span class="thumb-info-type">2º kyu</span>
															</span>
														</span>
													</div>
												</li>							

											</ul>

									</div>
								</div>
							</div>


							<hr class="tall">

							<div class="row">
								<ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
									<?php foreach ($fotos as $foto) : ?>
									<li class="col-md-3 no-pin isotope-item">
										<div class="portfolio-item img-thumbnail">
											<a href="<?php echo base_url($foto); ?>" class="thumb-info">
												<img src="<?php echo base_url($foto); ?>" class="image-responsive" height="200">
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

		</div>

	</body>
</html>
