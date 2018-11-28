<?php

  $dir= $_SERVER['DOCUMENT_ROOT']."/Registro motos";
  include $dir.'/controlador/Historialcontrolador.php';
  $arrayName = array();;

  foreach (Historialcontrolador::ingresoDiario() as $r) {
    $reporte[0]=$r;
  }

  foreach (Historialcontrolador::SalidaDiaria() as $r) {
    $reporte[1]=$r;
  }

  echo json_encode($reporte);

?>
