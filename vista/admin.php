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
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/overhang.min.css"/>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="vendor/jquery/jquery.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/overhang.min.js"></script>
    <script src="assets/js/app.js" charset="utf-8"></script>
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="assets/js/overhang.min.js"></script>
    <script src="assets/js/Chart.js"></script>
    <script src="assets/js/graficas.js" charset="utf-8"></script>
    <script src="assets/js/agregarRegistro.js" charset="utf-8"></script>

    <style media="screen">
      body{
        padding-top: 5%;
      }
    </style>

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
            <a class="nav-link" href="adminAdds/motos/motos.php">Motos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminAdds/bitacora/bitacora.php">Bitácora</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="log-out.php">Cerrar Sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form class="" action="" method="post" id="formReporte">
            <fieldset class="form-group">
              <input type="text" class="form-control" id="matricula" placeholder="Matrícula" name="matricula">
              <small class="text-muted">Ingrese la matrícula del vehículo y pulse para reportar ingreso o salida</small>
            </fieldset>
            <button type="submit" name="ingreso" class="btn btn-primary" id="ingreso">Reportar ingreso</button>
            <button type="submit" name="salida" class="btn btn-success" id="salida">Reportar salida</button>
          </form>
        </div>
      </div>
      <h3>Estadisticas</h3>
      <div class="container">
        <div class="row">
          <div class="col-xl-5">
            <canvas id="myChart2" width="600" height="600"></canvas>
          </div>
          <div class="col-xl-5">
            <table class="table table-stripped table-bordered" id="tablaHistorial">
              <thead>
                <tr>
                  <th>Matrícula</th>
                  <th>Entrada</th>
                  <th>Salida</th>

                </tr>
              </thead>
              <tbody>
              </tbody>
              <tfoot>
                <tr>
                  <th>Matrícula</th>
                  <th>Entrada</th>
                  <th>Salida</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  <body>
  </body>
</html>
