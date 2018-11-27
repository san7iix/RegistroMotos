<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
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
  <script src="agregarMoto.js" charset="utf-8"></script>
  <title>Login</title>
  <style>

    body {
      padding-top: 54px;
    }
    @media (min-width: 992px) {
      body {
        padding-top: 56px;
      }
    }


  </style>

</head>
<div class="container clearfix col-md-5">
    <div class="starter-template jumbotron">
      <div class="row">
        <div class="" style="margin:auto">
          <div class="panel panel-default">
            <div class="panel-head">
              <h3>Agregar moto</h3>
            </div>
            <div class="panel-body">
              <form class="" action="" method="post" id="formLogin">
                <fieldset class="form-group">
                  <input type="hidden" name="txtCodigo" required value="<?php echo $_SESSION['usuario']['codigo'];?>" readonly>
                </fieldset>
                <fieldset class="form-group">
                  <label for="contra">Matrícula</label>
                  <input type="text" class="form-control" id="contra" placeholder="" name="txtMatricula" required >
                </fieldset>
                <fieldset class="form-group">
                  <label for="contra">Descripcción</label>
                  <textarea name="txtDescrip" rows="4" cols="50" class="form-control"></textarea>
                </fieldset>
                <div class="text-center">
                  <input type="submit" id="enviar" name="enviar" value="Enviar" class="btn btn-primary">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
