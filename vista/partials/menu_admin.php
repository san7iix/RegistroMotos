<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="../admin.php">Panel de control | Admin: <?php echo $_SESSION['usuario']['nombre1']; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="usuario/crud_usuario.php">Usuarios
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Motos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="log-out.php">Cerrar Sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
