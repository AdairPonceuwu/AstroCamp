<main class="agenda">
  <h2 class="agenda__heading">Talleres y Conferencias</h2>
  <p class="agenda__descripcion">Talleres y conferencias dictados por expertos en astronomía</p>
  <div class="eventos">
    <h3 class="eventos__heading">Conferencias</h3>
    <p class="eventos__fecha">Viernes 1 de diciembre</p>
    <div class="eventos__listado slider swiper">
      <div class="swiper-wrapper">
        <?php foreach ($eventos["conferencias_v"] as $evento) { ?>
          <?php include __DIR__ . '../../templates/evento.php' ?>
        <?php } ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <p class="eventos__fecha">Sábado 2 de diciembre</p>
    <div class="eventos__listado slider swiper">
      <div class="swiper-wrapper">
        <?php foreach ($eventos["conferencias_s"] as $evento) { ?>
          <?php include __DIR__ . '../../templates/evento.php' ?>
        <?php } ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <div class="eventos__listado">
    </div>
  </div>

  <div class="eventos eventos--talleres">
    <h3 class="eventos__heading">Talleres</h3>
    <p class="eventos__fecha">Viernes 1 de diciembre</p>
    <div class="eventos__listado slider swiper">
      <div class="swiper-wrapper">
        <?php foreach ($eventos["talleres_v"] as $evento) { ?>
          <?php include __DIR__ . '../../templates/evento.php' ?>
        <?php } ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <p class="eventos__fecha">Sábado 2 de diciembre</p>
    <div class="eventos__listado slider swiper">
      <div class="swiper-wrapper">
        <?php foreach ($eventos["talleres_s"] as $evento) { ?>
          <?php include __DIR__ . '../../templates/evento.php' ?>
        <?php } ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
</main>