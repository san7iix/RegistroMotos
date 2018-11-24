<?php

  include '../controlador/UsuarioControlador.php';

  $codigo = $_REQUEST['codigo'];

  if(UsuarioControlador::eliminar($codigo))header("location:admin.php");
  echo "Error al eliminar usuario";

?>
