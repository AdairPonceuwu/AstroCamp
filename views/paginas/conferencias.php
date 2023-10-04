<main class="agenda">
  <h2 class="agenda__heading">Talleres y Conferencias</h2>
  <p class="agenda__descripcion">Talleres y conferencias dictados por expertos en astronomía</p>

  <div class="eventos">
    <h3 class="eventos__heading">Conferencias</h3>
    <p class="eventos__fecha">Viernes 1 de diciembre</p> 
    <div class="eventos__listado">
      <?php foreach($eventos['conferencias_v'] as $evento ){?>
          <div>
            <p class="evento__hora"><?php echo $evento->hora->hora; ?></p>
            <div class="evento__informacion">
              <h4 class="evento__nombre"><?php echo $evento->nombre; ?></h4>
            
              <div>
                <p class="evento__informacion"><?php echo $evento->descripcion; ?></p>
              </div>

              <div class="evento__autor-info">
                <picture>
                  <source srcset = "img/speakers/<?php echo $evento->ponente->imagen; ?>.webp" type="image/webp">
                  <source srcset = "img/speakers/<?php echo $evento->ponente->imagen; ?>.png" type="image/png">
                  <img class="evento__imagen-autor" loading="lazy" width="200" height="300" src="img/speakers/<?php echo$evento->ponente->imagen; ?>.png" alt="Imagen Ponente">
                </picture>
                <p class="evento__autor-nombre"><?php echo $evento->ponente->nombre." ".$evento->ponente->apellido; ?></p>
              </div>
            </div>
          </div>
        <?php } ?>
    </div>
    <p class="eventos__fecha">Sábado 2 de diciembre</p> 
    <div class="eventos__listado">

    </div>
  </div>

  <div class="eventos eventos--talleres">
    <h3 class="eventos__heading">Talleres</h3>
    <p class="eventos__fecha">Viernes 1 de diciembre</p> 
    <div class="eventos__listado">

    </div>
    <p class="eventos__fecha">Sábado 2 de diciembre</p> 
    <div class="eventos__listado">

    </div>
  </div>

</main>