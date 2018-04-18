			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="./">Home</a></li>
									<li class="active">Jodo</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Jodo</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12" data-appear-animation="fadeInUp">
							<h3><strong>Jodo:</strong> A Arte do Bastão Samurai</h3>
							
							<p class="drop-caps">Jô é um bastão de madeira roliça de 1,28 m que foi desenvolvido para enfrentar a espada japonesa. 
							Foi a alternativa encontrada pelos Samurais para não cortar e matar os adversários, por isso é conhecido como <strong>a arma da paz</strong>. 
							Também por isso foi muito utilizada por monges que a usavam como uma espécie de bengala, e com ela se defendiam dos bandidos sem precisar matá-los.</p>

							<p class="tall">No treinamento do Jô ambas as extremidades são usadas, quer para segurar, quer para golpear: 
							enquanto uma mão tem yin, a outra terá yang, trabalhando ambas em harmonia.</p>

							<p class="tall">O treino com o Jô (pronuncia-se Diô) permite o desenvolvimento da harmonia entre o praticante e a arma de modo que 
							essa se torne uma extensão do corpo do praticante. Graças a comunhão ente o ser humano e o bastão que aprende-se a 
							canalizar e projetar a energia conhecida como ki, através da arma para além do nosso corpo.</p>

							<p class="tall">É uma arma simples que possui nobre história e extrema complexidade técnica. Desenvolve a intuição 
							pois age flexivelmente sabendo evitar os diversos tipos de ataques. Os lutadores mudam frequentemente de base 
							(lado de ataque do bastão) para ganhar maior versatilidade na luta.</p>
							
							<hr class="tall">
							<h3><strong>Jodo:</strong> hoje em dia</h3>

							<p class="drop-caps">
								Sempai  Angélica Philippe Corrêa treina Jodo desde 2012 e é responsável técnica pelo grupo de estudos de Jodo da Akipa de Porto Alegre.
								Tendo experiência no bastão do aikido(aikijo) desde 2009 buscou ampliar os estudos no bastão buscando outra escola(jodo seitei). 
								Participou de treinamentos no Rio de Janeiro sob a orientação técnica de Sensei  Endo e Sempai Alex Cavalcanti do Rio Jodokai. 
								Em janeiro de 2015 gradou Ikkyu(faixa marrom) em Santiago no Chile, tendo aula com o sensei Shiori(4º Dan) e Guilhermo Vargas (4º Dan),
								sendo uma das primeiras jodokas brasileiras a ter graduação reconhecida pela Confederação Brasileira de Kendo. Em março de 2016 participou
								do primeiro seminário internacional de jodo ministrado por sensei Kim Taylor (6º Dan) do Canadá.
							</p>
							<p class="drop-caps">
								Exame para shodan em Jodo ocorrido em Toronto - Canadá em 17 de Novembro.
							</p>

							<hr class="tall">

							<div class="row">
								<div class="col-md-12" data-appear-animation="fadeInDown">

									<div class="row">
										<div class="col-md-3">
											<h4><strong>Responsável Técnico</strong></h4>
										</div>
										<div class="col-md-3">
											<h4><strong>Instrutor</strong></h4>
										</div>
								</div>
								<div class="row">
											<ul class="team-list sort-destination" data-sort-id="team">
												
												<li class="col-md-3 isotope-item leadership">
													<div class="team-item thumbnail">
														<span class="thumb-info team">
															<img class="img-responsive" alt="" src="<?php echo base_url('/img/team/angelica.jpg') ?>">
															<span class="thumb-info-title">
																<span class="thumb-info-inner">Angélica Philippe</span>
																<span class="thumb-info-type">Shodan (1º Dan)</span>
															</span>
														</span>
													</div>
												</li>							
												
												<li class="col-md-3 isotope-item leadership">
													<div class="team-item thumbnail">
														<span class="thumb-info team">
															<img class="img-responsive" alt="" src="<?php echo base_url('/img/team/eduardoJodo.jpg') ?>">
															<span class="thumb-info-title">
																<span class="thumb-info-inner">Eduardo Corrêa</span>
																<span class="thumb-info-type">Shodan (1º Dan)</span>
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
