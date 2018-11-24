
<?php
  include '../partials/head.php';
  include '../partials/menu_admin.php';
?>

    <!-- Page Content -->
    <br>
    <br>
    <br>
    <div class="container">
        <div class="starter-template">
          <div class="col-md-6">
            <div class="" style="margin:auto">
              <div class="panel panel-default">
                <div class="panel-body">
                  <h2 class="lead">Registro usuario</h2>
                  <form class="" action="../registroCode.php" method="POST" id="">
                    <fieldset class="form-group">
                      <label for="codi">Codigo</label>
                      <input type="text" class="form-control" id="codi" name="codigoCrear" required>
                    </fieldset>
                    <fieldset class="form-group">
                      <label for="nombre1Crear">Nombre 1</label>
                      <input type="text" class="form-control" id="nombre1Crear" name="nombre1Crear" required>
                    </fieldset>
                    <fieldset class="form-group">
                      <label for="nombre2Crear">Nombre 2</label>
                      <input type="text" class="form-control" id="nombre2Crear" name="nombre2Crear" required>
                    </fieldset>
                    <fieldset class="form-group">
                      <label for="apellido1Crear">Apellido 1</label>
                      <input type="text" class="form-control" id="apellido1Crear" name="apellido1Crear" required>
                    </fieldset>
                    <fieldset class="form-group">
                      <label for="apellido2Crear">Apellido 2</label>
                      <input type="text" class="form-control" id="apellido2Crear" name="apellido2Crear" required>
                    </fieldset>
                    <fieldset class="form-group">
                      <label for="passwordCrear">Contraseña</label>
                      <input type="password" class="form-control" id="passwordCrear" name="passwordCrear" required>
                    </fieldset>
                    <fieldset class="form-group">
                      <label for="rolCrear">Rol</label>
                      <input type="text" class="form-control" id="rolCrear" name="rolCrear" required>
                    </fieldset>
                    <fieldset class="form-group">
                      <label for="programaCrear">Programa</label>
                      <input type="text" class="form-control" id="programaCrear" name="programaCrear" required>
                    </fieldset>
                    <fieldset class="form-group">
                      <label for="mesaCrear">Nº Mesa</label>
                      <input type="text" class="form-control" id="mesaCrear" name="mesaCrear">
                    </fieldset>
                    <fieldset class="form-group">
                      <label for="tipoUsuarioCrear">Tipo de usuario</label>
                      <input type="text" class="form-control" id="tipoUsuarioCrear" name="tipoUsuarioCrear" required>
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
