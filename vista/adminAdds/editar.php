<?php
  session_start();
  include '../partials/menu_admin.php';
  $codigo = $_REQUEST['codigo'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../assets/css/overhang.min.css"/>
  <script src="../vendor/jquery/jquery.min.js" charset="utf-8"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../assets/js/overhang.min.js"></script>
  <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" charset="utf-8"></script>
  <script src="../assets/js/editarUser.js" charset="utf-8"></script>
  <title>Login</title>
</head>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="starter-template">
          <div class="col-md-6">
            <div class="" style="margin:auto">
              <div class="panel panel-default">
                <div class="panel-body">
                  <h2 class="lead">Editar usuario</h2>
                  <form class="" action="../editarUCode.php" method="POST" id="form_editar_user">
                    <fieldset class="form-group">
                      <input type="text" class="form-control" id="codi" name="codigoCrear" required value="<?php echo $codigo; ?>" hidden>
                    </fieldset>
                    <fieldset class="form-group">
                      <label for="nombre1Crear">Nombre 1</label>
                      <input type="text" class="form-control" id="nombre1Crear" name="nombre1Crear" required value="">
                    </fieldset>
                    <fieldset class="form-group">
                      <label for="nombre2Crear">Nombre 2</label>
                      <input type="text" class="form-control" id="nombre2Crear" name="nombre2Crear" required value="">
                    </fieldset>
                    <fieldset class="form-group">
                      <label for="apellido1Crear">Apellido 1</label>
                      <input type="text" class="form-control" id="apellido1Crear" name="apellido1Crear" required value="">
                    </fieldset>
                    <fieldset class="form-group">
                      <label for="apellido2Crear">Apellido 2</label>
                      <input type="text" class="form-control" id="apellido2Crear" name="apellido2Crear" required value="">
                    </fieldset>
                    <fieldset class="form-group">
                      <label for="passwordCrear">Contraseña</label>
                      <input type="password" class="form-control" id="passwordCrear" name="passwordCrear" required value="">
                    </fieldset>
                    <fieldset class="form-group">
                      <label for="rolCrear">Rol</label>
                      <input type="number" class="form-control" id="rolCrear" name="rolCrear" required value="">
                    </fieldset>

                    <input type="submit" name="enviarC" value="Guardar" class="btn btn-primary">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

<?php

  include '../partials/footer.php';

?>
