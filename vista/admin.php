<?php
  session_start();
  if(isset($_SESSION['usuario'])){
    if ($_SESSION['usuario']['id_rol']=='3') {
      header("location:usuario/vigilantes.php");
    }else{
      if($_SESSION['usuario']['id_rol']=='2')header("location:usuario/usuario.php");
    }
  }else {
    header("location:index.php");
  }
  include '../controlador/UsuarioControlador.php';
  $dir= $_SERVER['DOCUMENT_ROOT']."/Registro motos";
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="assets/js/admin.js" charset="utf-8"></script>

  </head>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top clearfix">
    <div class="container">
      <a class="navbar-brand" href="">Panel de control | Admin: <?php echo $_SESSION['usuario']['nombre1']; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="adminAdds/usuarios.php">Usuarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminAdds/motos.php">Motos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../log-out.php">Cerrar Sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <body>
  </body>
</html>
