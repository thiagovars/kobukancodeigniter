			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="./">Home</a></li>
									<li class="active">Origami</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Origami</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12" data-appear-animation="fadeInUp">
							<h3><strong>Origami:</strong> Ori (dobrar) gami (papel)</h3>
							<p class="drop-caps">
								Arte japonesa baseada na execução de dobraduras e união de pequenas peças de papel transformando-as em verdadeiras obras de arte.
						  </p>
						  <p class="drop-caps">
						  	No início do século XVII os samurais foram responsáveis pela criação dos primeiros origamis que conhecemos atualmente. Até o início do século XIX o origami foi praticado como passatempo restrito aos adultos. A partir do período meiji (1868-1912) a arte começou a ser ensinada nas escolas e também passou a ser difundida em países estrangeiros.
						  </p>
						  <p class="drop-caps">
						  	Hoje o origami é uma das mais populares expressões artísticas da cultura japonesa no mundo inteiro. Coloridos e graciosos que estimulam a curiosidade de saber o grau de dificuldade para sua elaboração, utilizado também como decoração de casamentos e materniadades, e também como lembrancinha ou presentes.
						  </p>
						  <p class="drop-caps">
						  	Recurso pedagógico, origami é utilizado em escolas pois estimulam:
						  	<ul>
						  		<li>Motricidade fina (coordenação de mãos e dedos);</li>
						  		<li>Memória visual, estimulando a memorização das sequencias das dobras;</li>
						  		<li>Criatividade;</li>
						  		<li>Concentração;</li>
						  		<li>Noções básicas de medidas;</li>
						  		<li>Perseverança;</li>
						  	</ul>
						  </p>
						  <p class="drop-caps">
						  	Recurso terapeutico:
						  		O origami é um autêntico exercício de serenidade ajudando no combate ao estresse, pois predispõe a calma. É utilizado também em hospitais nos paciêntes que estão internados para evitar depressão.
						  </p>
						  <p class="drop-caps">
						  	A sensei Angélica Correa é discipula da Akiko Kawashima que leciona cultura japonesa na rede municipal da cidade de Ivoti-RS.
						  </p>
						</div>
					</div>

					<hr class="tall">

					<div class="row" data-appear-animation="fadeInDown">
						<ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
					<?php foreach ($fotos as $foto) :?>
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

	</body>
</html>
