<?php

  $dir= $_SERVER['DOCUMENT_ROOT']."/Registro motos";
  include $dir.'/controlador/Historialcontrolador.php';

  try {
    echo Historialcontrolador::registrarSalida($_POST['matricula']);
  } catch (\Exception $e) {
    echo $e;
  }

?>
