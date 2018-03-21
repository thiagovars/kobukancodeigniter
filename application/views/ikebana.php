			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="./">Home</a></li>
									<li class="active">Kadô</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Kadô</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					
					<div class="row">
						<div class="col-md-12" data-appear-animation="fadeInUp">
							<h3><strong>Kadô:</strong> Ikebana</h3>
							<p class="drop-caps">A iquebana é originária da Índia, onde os arranjos eram destinados a Buda, e se personalizou na cultura nipônica, que a tornou mais conhecida. Em contraste com a forma decorativa de arranjos florais que prevalece nos países ocidentais, o arranjo floral japonês cria uma harmonia de construção linear, ritmo e cor. Enquanto que os ocidentais tendem a pôr ênfase na quantidade e no colorido das cores, dedicando a maior parte da sua atenção à beleza das corolas, os japoneses enfatizam os aspectos lineares do arranjo. A arte foi desenvolvida de modo a incluir o vaso, caules, folhas e ramos, além das flores. A estrutura de um arranjo floral japonês está baseada em três pontos principais que simbolizam o céu, a terra e a humanidade, embora outras estruturas sejam adaptadas em função do estilo e da escola. Dentre os mais diversos estilos de iquebana, destaca-se a Academia de Ikebana Sanguetsu. Esse estilo busca representar uma forma de se chegar ao equilíbrio, à simplicidade e à beleza. O sanguetsu, que tem, como princípio básico, o sentimento de respeito à natureza que norteou a vida de Mokiti Okada, cria composições capazes de refletir a beleza natural das flores em sua forma mais pura, levando alegria e paz às pessoas que apreciam os arranjos.</p>
						</div>
					</div>

					<hr class="tall">

					<div class="row" data-appear-animation="fadeInDown">
						<ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
							<?php foreach ($fotos as $foto) :?>
								<li class="col-md-3 no-pin isotope-item">
									<div class="portfolio-item img-thumbnail">
										<a href="/img/ikebana/<?php echo $foto; ?>" class="thumb-info">
											<img src="/img/ikebana/<?php echo $foto; ?>" class="image-responsive" height="200" width="400">
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
