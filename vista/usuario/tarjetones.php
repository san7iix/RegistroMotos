<?php

  session_start();
  include '../config.php';
  include("$dir/controlador/CandidatoControlador.php");
  if($_SESSION['usuario']['estado']==4) header("location:../index.php");
  $idPrograma = $_SESSION['usuario']['programa'];
  foreach (CandidatoDao::buscarFacultad($idPrograma) as $r) {
    $z=$r->id_facultad;
  }

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tarjetones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
    <link rel="stylesheet" href="../assets/css/style_tarjeton.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/overhang.min.css"/>
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js" charset="utf-8"></script>
    <script src="../assets/js/tarjeton.js" charset="utf-8"></script>
    <script type="text/javascript" src="../assets/js/overhang.min.js"></script>

  </head>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top clearfix">
    <div class="container">
      <a class="navbar-brand" href="">Tarjetones | Votante: <?php echo $_SESSION['usuario']['nombre1']; ?></a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../log-out.php">Cerrar Sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <body>
    <div class="container">
      <form class="" action="../registrarVotoCode.php" method="post" id="form_voto">
        <div id="tabs">
          <ul>
            <li><a href="#tabs-1">Consejo superior</a></li>
            <li><a href="#tabs-2">Consejo académico</a></li>
            <li><a href="#tabs-3">Consejo de facultad</a></li>
            <li><a href="#tabs-4">Consejo de programa</a></li>
          </ul>
          <div id="tabs-1">
            <?php
              foreach (CandidatoControlador::listarC() as $r) {
                if($r->id_organo==1){
            ?>
                <label class="c-input c-radio">
                  <img src="<?php echo $r->foto ?>" alt="Candidato <?php echo $r->nombre1." $r->idUsuario"?>">
                <input id="radio<?php echo $r->id_organo?>" name="<?php echo $r->id_organo ?>" type="radio" value="<?php echo $r->idUsuario ?>">
                <span class="c-indicator"></span>
                </label>
            <?php
                }
              }
            ?>
          </div>
          <div id="tabs-2">
            <?php
              foreach (CandidatoControlador::listarC() as $r) {
                if($r->id_organo==2){
            ?>
                <label class="c-input c-radio">
                  <img src="<?php echo $r->foto ?>" alt="Candidato<?php echo $r->numero?>">
                <input id="radio<?php echo $r->id_organo?>" name="<?php echo $r->id_organo ?>" type="radio" value="<?php echo $r->idUsuario ?>">
                <span class="c-indicator"></span>
                </label>
            <?php
                }
              }
            ?>
          </div>
          <div id="tabs-3">
            <?php
              foreach (CandidatoControlador::listarCF($z) as $r) {
                //if($r->nombre1=='Voto en blanco')$r->id_organo=3;
                if($r->id_organo==3){
            ?>
                <label class="c-input c-radio">
                  <img src="<?php echo $r->foto ?>" alt="Candidato<?php echo $r->numero?>">
                <input id="radio<?php echo $r->id_organo?>" name="<?php echo $r->id_organo ?>" type="radio" value="<?php echo $r->idUsuario ?>">
                <span class="c-indicator"></span>
                </label>
            <?php
                }
              }
            ?>
          </div>
          <div id="tabs-4">
            <?php
              foreach (CandidatoControlador::listarCP($idPrograma) as $r) {
                //if($r->nombre1=='Voto en blanco')$r->id_organo=4;
                if($r->id_organo==4){
            ?>
                <label class="c-input c-radio">
                  <img src="<?php echo $r->foto ?>" alt="Candidato<?php echo $r->numero?>">
                <input id="radio<?php echo $r->id_organo?>" name="<?php echo $r->id_organo ?>" type="radio" value="<?php echo $r->idUsuario ?>">
                <span class="c-indicator"></span>
                </label>
            <?php
                }
              }
            ?>
          </div>

          <div class="panel-footer">
            <p class="text-center"><button type="submit" name="enviar_votos" class="btn btn-primary" id="enviar_votos">Enviar</button></p>
          </div>
      </div>

    </form>
  </div>
  </body>
  <footer>
  </footer>
  </html>
