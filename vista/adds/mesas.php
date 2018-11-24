<?php
    $dir= $_SERVER['DOCUMENT_ROOT']."/votaciones";
    include "$dir/controlador/MesaControlador.php";
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Prueba</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
  <script src="../assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!--<script src="../assets/js/mesas/princ.js" charset="utf-8"></script>-->
  <script src="../assets/js/mesas/princ2.js" charset="utf-8"></script>

</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top clearfix">
  <div class="container">
    <a class="navbar-brand" href="">Mesas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Inicio
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
          <table id="tabla_usuarios" class="table table-stripped table-bordered">
            <thead>
              <tr>
                <th >Mesa</th>
                <th >Lugar</th>
                <th >Votantes</th>
                <th >Sufragantes</th>
                <th ></th>
              </tr>
            </thead>
            <tbody class="recargar">
            </tbody>
            <tfoot>
              <tr>
                <th >Mesa</th>
                <th>Lugar</th>
                <th >Votantes</th>
                <th >Sufragantes</th>
                <th ></th>
              </tr>
            </tfoot>
          </table>
          <h3 id="mesa">Mesa</h3>
          <div id="totalvotos"></div>
        <table id="tablaVotos" class="table table-stripped table-bordered">
          <thead>
            <tr>
              <th>Número de candidato</th>
              <th>Candidato</th>
              <th>Órgano</th>
              <th>Número de votos</th>
            </tr>
          </thead>
          <tbody class="recargarV">
          </tbody>
          <tfoot>
            <tr>
              <th>Número de candidato</th>
              <th>Candidato</th>
              <th>Órgano</th>
              <th>Número de votos</th>
            </tr>
          </tfoot>
        </table>
        </div>
    </div>
      </table>
  </div>

</body>
</html>
