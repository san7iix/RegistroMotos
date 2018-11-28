<?php

  $dir= $_SERVER['DOCUMENT_ROOT']."/Registro motos";
  include $dir.'/controlador/Historialcontrolador.php';

  if(Historialcontrolador::verificarMatricula($_POST['matricula'])){
    if (Historialcontrolador::obtenerEntrada($_POST['matricula'])) {
      try {
        echo Historialcontrolador::registrarSalida($_POST['matricula']);
      } catch (\Exception $e) {
        echo $e;
      }
    } else {
      echo "El vehículo no ha ingresado aún.";
    }

  }else {
      echo "Esta matrícula no existe";
  }

?>
