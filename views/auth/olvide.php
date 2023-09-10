<main class="auth">
  <h2 class="auth__heading"><?php echo $titulo; ?></h2>
  <p class="auth__texto">Recuperar contraseña para AstroCamp</p>

  <?php require_once __DIR__ . '/../templates/alertas.php'; ?>


  <form method="POST" action="/olvide" class="formulario">
    <div class="formulario__campo">
      <label for "email" class="formulario__label">Email</label>
      <input
        type="email"
        class="formulario__input"
        placeholder="Email"
        id="email"
        name="email"
      >
    </div>


    <input type="submit" class="formulario__submit" value="Solicitar recuperación">
  </form>

  <div class="acciones">
    <a href="/login" class="acciones__enlace">Iniciar sesion</a>
    <a href="/registro" class="acciones__enlace">Crea tu cuenta</a>
  </div>
</main>