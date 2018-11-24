<?php

  session_start();
  include '../controlador/UsuarioControlador.php';

  $codigo=$_SESSION['usuario']['codigo'];

  echo "$codigo";

  if(UsuarioControlador::cambiarEstado($codigo,4)){
    header("location:certificado.php?codigo=$codigo");
  }

?>
