<?php

  $dir= $_SERVER['DOCUMENT_ROOT']."/Registro motos";
  include $dir.'/controlador/Motocontrolador.php';

  $codigo = $_REQUEST['codigo'];

  try {
    Motocontrolador::eliminarMoto($codigo);
    header("location:../usuario/usuario.php");
  } catch (\Exception $e) {
    echo "Error al eliminar moto";
  }



?>
