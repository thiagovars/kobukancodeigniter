      <div role="main" class="main">

        <section class="page-top">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <ul class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active"><a href="fotos.html">Fotos</a></li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h2>Fotos dos anos 90 - Academia central</h2>
              </div>
            </div>
          </div>
        </section>

        <div class="container">

          <strong class="tall"><a href="fotos.php">< Fotos </a></strong>

          <hr />

          <div class="row">
            <ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
              <?php foreach($fotos as $foto) : ?>
              <li class="col-md-3 no-pin">
                <div class="portfolio-item img-thumbnail">
                  <a href="<?php echo base_url($foto); ?>" class="thumb-info">
                    <img alt="" class="img-responsive" src="<?php echo base_url($foto); ?>">
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
