<main class="auth">
  <h2 class="auth__heading"><?php echo $titulo; ?></h2>
  <p class="auth__texto">Registro en AstroCamp</p>

  <?php 
    require_once __DIR__ . '/../templates/alertas.php';
  ?> 


  <form method="POST" action="/registro" class="formulario">
      <div class="formulario__campo">
      <label for "nombre" class="formulario__label">Nombre</label>
      <input
        type="text"
        class="formulario__input"
        placeholder="Nombre"
        id="nombre"
        name="nombre"
        value="<?php echo $usuario->nombre; ?>"
      >
    </div>

    <div class="formulario__campo">
      <label for "apellido" class="formulario__label">Apellido</label>
      <input
        type="text"
        class="formulario__input"
        placeholder="Apellido"
        id="apellido"
        name="apellido"
        value="<?php echo $usuario->apellido; ?>"
      >
    </div>

    <div class="formulario__campo">
      <label for "email" class="formulario__label">Email</label>
      <input
        type="email"
        class="formulario__input"
        placeholder="Email"
        id="email"
        name="email"
        value="<?php echo $usuario->email; ?>"
      >
    </div>

    <div class="formulario__campo">
      <label for "password" class="formulario__label">Contraseña</label>
      <input
        type="password"
        class="formulario__input"
        placeholder="Contraseña"
        id="password"
        name="password"
      >
    </div>

    <div class="formulario__campo">
      <label for "password2" class="formulario__label">Repetir Contraseña</label>
      <input
        type="password"
        class="formulario__input"
        placeholder="Escribir nuevamente la contraseña"
        id="password2"
        name="password2"
      >
    </div>

    <input type="submit" class="formulario__submit" value="Registrar cuenta">
  </form>

  <div class="acciones">
    <a href="/login" class="acciones__enlace">Iniciar sesion</a>
    <a href="/olvide" class="acciones__enlace">¿Olvidaste tu constraseña?</a>
  </div>
</main>