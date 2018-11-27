<?php
  session_start();
  $dir= $_SERVER['DOCUMENT_ROOT']."/Registro motos";
  include $dir.'/controlador/UsuarioControlador.php';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <!-- Latest compiled and minified CSS -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
  <script src="../assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
          <a class="nav-link" href="">Usuarios
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Motos</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../log-out.php">Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<body>

    <div class="col-md-6" style="margin-left:50px">
      <table id="tabla_usuarios" class="table table-stripped table-bordered">
        <thead>
          <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Tipo de usuario</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach (UsuarioControlador::listarU() as $r) {
            ?>
          <tr>
            <td><?php echo $r->codigo ?></td>
            <td><?php echo $r->nombre1." ".$r->nombre2." ".$r->apellido1." ".$r->apellido2." " ?></td>
            <td>
                <?php if($r->id_rol=='1')echo "Administrador";
                      if($r->id_rol=='2')echo "Usuario";
                      if($r->id_rol=='3')echo "Vigilante";
                ?>
            </td>
            </td>
            <td>
              <a  class="btn btn-warning" onclick="" href="editar.php?codigo=<?php echo $r->codigo; ?>">Editar</a>
            </td>
            <td>
              <a  class="btn btn-danger" onclick="javascript:return confirm('¿Está seguro de eliminar este registro?');" href="../eliminaruCode.php?codigo=<?php echo $r->codigo; ?>">Eliminar</a>
            </td>
          </tr>
        <?php }?>
        </tbody>
        <tfoot>
          <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Tipo de usuario</th>
            <th></th>
            <th></th>
          </tr>
        </tfoot>
      </table>
    </div>

</body>
<script type="text/javascript">
  $(document).ready(function() {
    $("#tabla_usuarios").DataTable();
  });
</script>
</html>
