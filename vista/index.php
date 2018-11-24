
<?php
  include 'partials/head.php';
  include 'partials/menu.php';
?>

    <!-- Page Content -->
    <br>
    <br>
    <br>
    <div class="container clearfix col-md-3">
        <div class="starter-template jumbotron">
          <div class="row">
            <div class="" style="margin:auto">
              <div class="panel panel-default">
                <div class="panel-body">
                  <form class="" action="validarCode.php" method="post" id="formLogin">
                    <fieldset class="form-group">
                      <label for="codi">Codigo</label>
                      <input type="text" class="form-control" id="codi" placeholder="Ingrese su codigo" name="txtCodigo" required autofocus>
                    </fieldset>
                    <fieldset class="form-group">
                      <label for="contra">Contraseña</label>
                      <input type="password" class="form-control" id="contra" placeholder="Ingrese su contraseña" name="txtContra" required >
                    </fieldset>
                    <div class="text-center">
                      <input type="submit" name="entrar" value="Entrar" class="btn btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

<?php

  include 'partials/footer.php';

?>
