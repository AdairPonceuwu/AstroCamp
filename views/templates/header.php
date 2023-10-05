<header class="header">
  <div class="header__contenedor">
    <nav class="header__navegacion">
      <?php if (is_auth()) { ?>
        <a href="/registro" class="header__enlace">Administrar</a>
        <form method="POST" action="/logout" class="header__form">
          <input type="submit" value="Cerrar Sesion" class="header__submit">
        </form>
      <?php } else { ?>
        <a href="/registro" class="header__enlace">Registrarse</a>
        <a href="/login" class="header__enlace">Iniciar Sesión</a>
      <?php } ?>
    </nav>

    <div class="header__contenido">
      <a href="/">
        <h1 class="header__logo">¡AstroCamp!</h1>
      </a>
      <p class="header__texto">Diciembre 3-5</p>
      <p class="header__texto header__texto--modalidad">Presencial y en Linea</p>
      <a href="/registro" class="header__boton">Adquirir boleto</a>
    </div>
  </div>
</header>

<div class="barra">
  <div class="barra__contenido">
    <a href="/">
      <h2 class="barra__logo">¡AstroCamp!</h2>
    </a>
    <nav class="navegacion">
      <a href="/astrocamp"
        class="navegacion__enlace <?php echo pagina_actual('/astrocamp') ? 'navegacion__enlace--actual' : ''; ?>">Evento</a>
      <a href="/paquetes"
        class="navegacion__enlace <?php echo pagina_actual('/paquetes') ? 'navegacion__enlace--actual' : ''; ?>">Paquetes</a>
      <a href="/talleres-conferencias"
        class="navegacion__enlace <?php echo pagina_actual('/talleres-conferencias') ? 'navegacion__enlace--actual' : ''; ?>">Talleres/Conferencias</a>
      <a href="/registro"
        class="navegacion__enlace <?php echo pagina_actual('/registro') ? 'navegacion__enlace--actual' : ''; ?>">Pase</a>
    </nav>
  </div>
</div>