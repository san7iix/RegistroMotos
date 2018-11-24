<?php
  session_start();
  include '../config.php';
  include "$dir/controlador/UsuarioControlador.php";

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jurado</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
    <link href="../assets/css/fontawesome-all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/overhang.min.css"/>
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/overhang.min.js"></script>
    <script src="../assets/js/jurado/app.js" charset="utf-8"></script>

  </head>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top clearfix">
    <div class="container">
      <a class="navbar-brand" href="">Panel de control | Jurado: <?php echo $_SESSION['usuario']['nombre1']; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../usuario/consultar_mesa.php">Consultar mesa (Votante)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="escrutinio.php">Generar acta de escrutinio</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../log-out.php">Cerrar Sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <body>
    <div class="col-md-6">
      <table id="tabla_usuarios" class="table table-stripped table-bordered">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Nombre 1</th>
            <th>Nombre 2</th>
            <th>Apellido 1</th>
            <th>Apellido 2</th>
            <th>Tipo</th>
            <th>Programa</th>
            <th>Mesa</th>
            <th>Estado</th>
            <th>Tipo usuario</th>
            <th style="max-width:40px">Autorizar</th>
            <th>Certificado</th>
            <th colspan="2">Operaciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach (UsuarioControlador::listarUM($_SESSION['usuario']['mesa']) as $r) {
            ?>
          <tr>
            <td><?php echo $r->codigo ?></td>
            <td><?php echo $r->nombre1 ?></td>
            <td><?php echo $r->nombre2 ?></td>
            <td><?php echo $r->apellido1 ?></td>
            <td><?php echo $r->apellido2 ?></td>
            <td><?php echo $r->id_rol ?></td>
            <td><?php echo $r->id_programa ?></td>
            <td><?php echo $r->id_mesa ?></td>
            <td><?php echo $r->idEstado ?></td>
            <td><?php echo $r->idTipoUsuario ?></td>
            <td>
              <a <?php if($r->idEstado!=1) echo "hidden"; ?> class="btn btn-success autoB" href="../autorizar.php?codigo=<?php echo $r->codigo; ?>" style="margin:0"><i class="fas fa-check"></i></i></a>

              <td>
                <button class="btn btn-primary" <?php if($r->idEstado!=4) echo "hidden"; ?> onclick="enviarMail('<?php echo $r->email;?>',<?php echo $r->codigo; ?>)"><i class="far fa-envelope"></i></button>
                <a class="btn btn-primary" <?php if($r->idEstado!=4) echo "hidden"; ?> href="cert_pdf.php?codigo=<?php echo $r->codigo; ?>"><i class="fas fa-file"></i></a>
              </td>
            <td>
                <a  class="btn btn-warning" href="usuario/editarUsuario.php<?php echo "?codigo=$r->codigo&nombre1=$r->nombre1&nombre2=$r->nombre2&apellido1=$r->apellido1&apellido2=$r->apellido2&rol=$r->id_rol&programa=$r->id_programa&mesa=$r->id_mesa&tipo=$r->idTipoUsuario"?>">Editar</a>
            </td>
            <td>
              <a class="btn btn-danger" onclick="javascript:return confirm('¿Está seguro de eliminar este registro?');" href="eliminaruCode.php?codigo=<?php echo $r->codigo; ?>">Eliminar</a>
            </td>
          </tr>
        <?php }?>
        </tbody>
        <tfoot>
          <tr>
            <th>Codigo</th>
            <th>Nombre 1</th>
            <th>Nombre 2</th>
            <th>Apellido 1</th>
            <th>Apellido 2</th>
            <th>Tipo</th>
            <th>Programa</th>
            <th>Mesa</th>
            <th>Estado</th>
            <th>Tipo usuario</th>
            <th style="max-width:40px">Autorizar</th>
            <th>Certificado</th>
            <th colspan="2">Operaciones</th>
          </tr>
        </tfoot>
      </table>
    </div>

  </body>
</html>
