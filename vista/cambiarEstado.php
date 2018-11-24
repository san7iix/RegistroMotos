<?php

  session_start();
  include '../controlador/UsuarioControlador.php';

  $codigo=$_SESSION['usuario']['codigo'];

  if(UsuarioControlador::cambiarEstado($codigo,3)){
    header("location:usuario/tarjetones.php");
  }


?>
