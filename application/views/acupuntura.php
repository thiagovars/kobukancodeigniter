			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="./">Home</a></li>
									<li class="active">Acupuntura</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Acupuntura</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12" data-appear-animation="fadeInUp">
							<h3><strong>Acupuntura:</strong> Medicina tradicional chinesa</h3>

							<p>“Acupuntura é um tratamento milenar que busca a promoção da saúde e bem-estar 
							através da inserção de finíssimas agulhas especiais (esterilizadas, descartáveis, de uso 
							único) em determinadas regiões do corpo (sem usar remédios). Também a tratamentos 
							sem agulhas (calor, pressão, sementes). A eficácia da Acupuntura é reconhecida pelo 
							Ministério da Saúde do Brasil (Portaria 971/06) pela Organização Mundial da Saúde 
							(OMS) e por vários Conselhos Federais da área da Saúde.”
							A acupuntura libera opiódes que são substâncias análogas à morfina, pois compartilham 
							os mesmos receptores do Sistema Nervoso Central e produzem respostas semelhantes. 
							Os opióides funcionam como neurotransmissores e estão relacionados com o humor, o 
							estresse, o controle da dor, a memória e o aprendizado. Os mais importantes são a beta 
							endorfina, metencefalina, dimorfina.
							As agulhas, pouco mais espessas que um fio de cabelo, conseguem penetrar até sete 
							centímetros na pele, alcançando músculos e tendões contraídos que, de outra forma, 
							demorariam meses para serem tratados. A acupuntura diminui a necessidade do uso de 
							medicamentos.</p>

							<p class="drop-caps">
							A história da acupuntura se confunde com a história da medicina na China. 
							Seus primórdios remontam à pré-história chinesa. A linguagem escrita milenar permitiu a continuidade do conhecimento. 
							Posteriormente, outros países orientais contribuíram para o desenvolvimento de novas técnicas de acupuntura. As notícias 
							sobre acupuntura no ocidente chegaram com os primeiros exploradores europeus que visitaram o império Chinês ainda na idade 
							média. Entre estes, são comuns as referências a Marco Polo (1254 – 1324) mercador, embaixador e explorador italiano, aos 
							Monges Jesuítas do século XVI e a Andreas Cleyer (1634 - 1698), botânico, médico e orientalista da Companhia Holandesa das 
							índias Ocidentais.
							</p>

							<ul class="lightbox list-unstyled" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}' data-appear-animation="fadeInLeft">
								<li class="col-md-3 isotope-item">
									<div class="portfolio-item img-thumbnail">
										<a href="<?php echo base_url('/img/acupuntura/diploma.jpg') ?>" class="thumb-info">
											<img class="image-responsive" src="<?php echo base_url('/img/acupuntura/diploma.jpg') ?>" width="200" />
										</a>
									</div>
								</li>
							</ul>

							<p class="tall">A acupuntura chegou ao Brasil em 1908 pelas mãos dos imigrantes japoneses, todavia permaneceu em âmbito familiar
							 e local (nas colônias japonesas) até meados da década de 80, quando ainda era foco de preconceito, apontada ao lado de casos de 
							 charlatanismo e esoterismo.</p>

							<p class="tall">Sensei Eduardo é formado em acupuntura pela escola CBES desde 2010 e atende atualmente na estética Lisa Beuty em
							Nova Petrópolis.</p>

						</div>						
					</div>

					<hr class="tall">

					<div class="row">
						<div class="col-md-12" data-appear-animation="fadeInUp">
							<ul class="lightbox list-unstyled" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}' data-appear-animation="fadeInLeft">
								<li class="col-md-3 no-pin">
										<div class="img-thumbnail">
											<a href="<?php echo base_url('/img/acupuntura/diploma.jpg'); ?>" class="thumb-info">
												<img src="<?php echo base_url('/img/acupuntura/diploma.jpg'); ?>" class="image-responsive"  height="200" width="400">
											</a>
										</div>
									</li>
								<?php foreach ($fotos as $foto) : ?>
									<li class="col-md-3 no-pin">
										<div class="img-thumbnail">
											<a href="<?php echo base_url($foto); ?>" class="thumb-info">
												<img src="<?php echo base_url($foto); ?>" class="image-responsive"  height="200" width="400">
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
	</body>
</html>
