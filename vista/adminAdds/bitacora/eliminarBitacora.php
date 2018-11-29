<?php

  $dir= $_SERVER['DOCUMENT_ROOT']."/Registro motos";
  include $dir.'/controlador/BitacoraControlador.php';

  $codigo = $_REQUEST['codigo'];

  if(BitacoraControlador::eliminar($codigo))header("location:bitacora.php");
  echo "Error al eliminar bitácora";

?>
