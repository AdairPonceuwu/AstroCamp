<aside class="dashboard__sidebar">
  <nav class="dashboard__menu">
    <a href="/admin/dashboard" class="dashboard__enlace <?php echo pagina_actual('/dashboard') ? 'dashboard__enlace--actual' : ''; ?>" >
      <i class="fa-solid fa-house-user dashboard__icono"></i>
      <span class="dashboard__menu-texto">
        Inicio 
      </span>
    </a>

    <a href="/admin/ponentes" class="dashboard__enlace <?php echo pagina_actual('/ponentes') ? 'dashboard__enlace--actual' : ''; ?>">
      <i class="fa-solid fa-person dashboard__icono"></i>
      <span class="dashboard__menu-texto">
        Ponentes
      </span>
    </a>

    <a href="/admin/eventos" class="dashboard__enlace <?php echo pagina_actual('/eventos') ? 'dashboard__enlace--actual' : ''; ?>">
      <i class="fa-solid fa-address-book"></i>
      <span class="dashboard__menu-texto">
        Eventos
      </span>
    </a>

    <a href="/admin/registrados" class="dashboard__enlace <?php echo pagina_actual('/registrados') ? 'dashboard__enlace--actual' : ''; ?>">
      <i class="fa-solid fa-users"></i>
      <span class="dashboard__menu-texto">
        Usuarios
      </span>
    </a>

    <a href="/admin/regalos" class="dashboard__enlace <?php echo pagina_actual('/regalos') ? 'dashboard__enlace--actual' :' '; ?>">
      <i class="fa-solid fa-gift"></i>
      <span class="dashboard__menu-texto">
        Regalos
      </span>
    </a>
  </nav>
</aside>