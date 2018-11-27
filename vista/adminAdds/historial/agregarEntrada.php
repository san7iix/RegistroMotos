<?php

  $dir= $_SERVER['DOCUMENT_ROOT']."/Registro motos";
  include $dir.'/controlador/Historialcontrolador.php';

  if(Historialcontrolador::verificarMatricula($_POST['matricula'])){
    if (!Historialcontrolador::obtenerEntrada($_POST['matricula'])) {
      try {
        echo Historialcontrolador::registrarEntrada($_POST['matricula']);
      } catch (\Exception $e) {
        echo $e;
      }
    } else {
      echo "Ya existe un registro de entrada para este vehículo, registre una salida.";
    }

  }else {
      echo "Esta matrícula no existe";
  }
?>
