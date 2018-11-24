<?php

  $dir= $_SERVER['DOCUMENT_ROOT']."/votaciones";
  include "$dir/controlador/UsuarioControlador.php";
  $codigo = $_POST['codigoB'];

  echo json_encode(UsuarioControlador::buscarVotante($codigo));

?>
