<?php

  include '../controlador/UsuarioControlador.php';

  $codigo = $_REQUEST['codigo'];

  if(UsuarioControlador::eliminar($codigo))header("location:adminAdds/usuarios.php");
  echo "Error al eliminar usuario";

?>
