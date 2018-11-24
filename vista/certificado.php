<?php

  session_start();
  $dir= $_SERVER['DOCUMENT_ROOT']."/votaciones";
  include '../controlador/UsuarioControlador.php';
  if($_SESSION['usuario']['id_rol']=='V')$codigo = $_SESSION['usuario']['codigo'];
  if($_SESSION['usuario']['id_rol']=='J' or $_SESSION['usuario']['id_rol']=='A' )$codigo = $_REQUEST['codigo'];
  $_SESSION['usuario']['estado']=4;
  $usuario = UsuarioControlador::obtenerUsuario($codigo);
  $nombre = $usuario->getNombre1()." ".$usuario->getNombre2()." ".$usuario->getApellido1()." ".$usuario->getApellido2();
  $mesa = $usuario->getId_mesa();
?>


<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style media="print">
      #boton{
        display: none;
      }
      body{
        background-color: blue!important;
      }
    </style>
    <meta charset="utf-8">
    <title>Certificado electoral</title>
  </head>
  <body>
    <div class="jumbotron" id="ber">
      <h1 class="display-3">Certificado electoral</h1>
      <p class="lead">Codigo: <?php echo $codigo; ?></p>
      <p class="lead">Nombre: <?php echo $nombre; ?></p>
      <p class="lead">Mesa: <?php echo $mesa; ?></p>

      <hr class="m-y-md">
      <p>Elecciones Universidad del Magdalena 201X</p>
    </div>
    <p class="lead text-center" id="boton">
      <a class="btn btn-primary btn-lg" href="admin.php" role="button">Volver</a>
    </p>
  </body>
</html>
<?php

  if($_SESSION['usuario']['id_rol']=='V')session_destroy();

?>
