			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="./">Home</a></li>
									<li class="active">Shodo</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Shodo</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12" data-appear-animation="fadeInUp">
							<h3><strong>shodo:</strong> A Arte da Caligrafia Japonesa</h3>
							<p class="drop-caps">
								Etimologia:

								Sho- escrita

								Dô- Caminho

								Shodô- Caminho da Escrita

								Kan- Dinastia Han

								Ji- Letra

								Kanji- Letra da Dinastia Han
						  </p>
							<p class="drop-caps">
								O objetivo do Shodô não é apenas escrever hideogramas. Cada traço do Shodô deve ser espontâneo e único,
								“ Certeiro como a espada do samurai: se o guerreiro não acerta o golpe, pode não ter outra chance, por
								isso cada ter entrega total, como se fosse o último de sua vida.”

						  </p>
							<p class="drop-caps">
								Por esse motivo não são admitidos retoques ou correções, pois uma vez realizado o traço com o Sumi ali
								foi registrada a palpitação da alma do praticante.

						  </p>
							<p class="drop-caps">
								Esse era o motivo pelo qual os samurais se dedicavam a arte da caligrafia: acreditavam que pelo domínio
								do pincel conseguiriam maior autoconhecimento. Com a mente vazia o espírito deve chegar ao papel de forma
								imediata, e ao se concentrar e persistir no traço o guerreiro educa as mãos e também o coração.

						  </p>
							<p class="drop-caps">
								Grafar kanji é um exercício de meditação, em que as pinceladas devem ser precisas, sempre de cima para
								baixo da esquerda para direita. A caligrafia japonesa abrange seis estilos diferentes. O kaisho é
								considerado o kanji “típico”, mais facilmente reconhecido pelos ocidentais e por isso mais popular fora
								do Japão. Na escola japonesa é o primeiro tipo de escrita que as crianças aprendem, pois é composto por
								linhas retas, mais fáceis de serem aprendidas;

						  </p>
							<p class="drop-caps">
								- Bumboshihô- os quatro tesouros para Sho: os quatro principais utensílios para a pratica do Shodô são:
								<ul>
									<li>Washi - Papel de arroz</li>
									<li>Sum i- Pedra de carvão</li>
									<li>Suzuri - Tinteiro retangular</li>
									<li>Fude - pincel</li>
								</ul>
						  </p>
							<p class="drop-caps">
								Outros utensílios utilizados são:
								<ul>
									<li>Bunchin- peso para segurar o papel;</li>
									<li>Shotajiki- feltro colocado abaixo do papel;</li>
									<li>Fudeoki- apoio de pincel;</li>
									<li>Mizusashi- pequeno depósito de água</li>
								</ul>
						  </p>
							<p class="drop-caps">
								Sensei Eduardo e Angélica são discípulos de Arima Sensei (desde maio de 2015), da colônia japonesa de Ivoti/RS. A mestra expõe
								suas obras de kirie e origami no Memorial da Cultura Japonesa de Ivoti, onde podem ser adquiridos.
                            </p>
                            <p class="drop-caps">
                                Sensei Eduardo estuda desde agosto de 2019 na escola Moderu Kou, de Brasília, desde agosto de 2019.
                                Sensei da escola é Kenzo Cavamura.
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
