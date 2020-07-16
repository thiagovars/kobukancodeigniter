			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="./">Home</a></li>
									<li class="active">Sumi-ê</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Sumi-ê</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12" data-appear-animation="fadeInUp">
				            <h3><strong>Sumi-ê:</strong> A Arte do Essencial</h3>
							<p class="drop-caps">
                                Originário da China, o Sumi-ê  (ou Sumie) foi conduzido
                                ao Japão no século XIII por monges Zen budistas. Seu termo
                                deriva de  Sumi (carvão) e ê (desenho, pintura): pintura
                                em carvão. Muito mais como um caminho para paz espiritual
                                do que propriamente uma representação artística, o pintor deve
                                buscar atingir a simplicidade em sua representação monocromática.
                                Comparável ao movimento da espada, a pena (pincel), não permite
                                retoques ou correções: seus movimentos devem ser ágeis e objetivos.
							</p>
							<p class="drop-caps">
                                Antigamente os Samurais buscavam praticar o Zen e o Sumi-ê como
                                formas de desenvolver a concentração, precisão e equilíbrio e com
                                isso aprimorar o seu desempenho com o manejo da espada. Hoje a técnica
                                é praticada por executivos ou líderes para desenvolver os mesmos
                                potenciais, buscando com isso atingir a um melhor desempenho em suas
                                decisões e maior eficácia em suas ações.  O pintor de Sumi-ê  não se
                                propõe a uma retração realista, mas sim refletir o essencial de cada
                                representação captada pela observação atenta do objeto. A assimetria,
                                singeleza, naturalidade, profundidade, desapego, concentração, quietude
                                e serenidade são algumas de suas características.
                            </p>
                            <p class="drop-caps">
                                Sensei Angélica Correa possui uma página no instagram
                                <a href="https://www.instagram.com/angelsumie/" target="_blank">@angelsumie</a>
                                .
                            </p>

						</div>
					</div>

					<hr class="tall">

					<div class="row" data-appear-animation="fadeInDown">
						<ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
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

	</body>
</html>
