<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../assets/js/usuario/usuario.js" charset="utf-8"></script>
    <meta charset="utf-8">
    <title>Lugar de votación</title>
  </head>
  <body>
    <div class="container" style="margin-top:12px">
      <div class="row justify-content-md-center">
        <div class="jumbotron col-md-8">
          <h1 class="display-3">Lugar de votación</h1>
          <form class="" action="consultar_mesaAJAX.php" method="post" id="buscar">
          <label class="lead">Código:</label>
          <input type="text" class="form-control col-md-4" id="codi" name="codigoB" required>
          <p class="lead" id="nombreB">Nombre:</p>
          <p class="lead" id="lugarB">Lugar:</p>
          <p class="lead" id="mesaB">Mesa:</p>
          <input type="submit" name="buscar" value="Buscar">
          <hr class="m-y-md">
          </form>
          <p>Elecciones Universidad del Magdalena 201X</p>
          <p class="lead text-center">
            <a class="btn btn-primary btn-lg" href="../admin.php" role="button">Volver</a>
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
