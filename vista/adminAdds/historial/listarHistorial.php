<?php

  $dir= $_SERVER['DOCUMENT_ROOT']."/Registro motos";
  include $dir.'/controlador/Historialcontrolador.php';

  echo Historialcontrolador::listarHistorial();;

?>
