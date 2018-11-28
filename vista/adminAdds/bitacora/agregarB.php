<?php

  $dir= $_SERVER['DOCUMENT_ROOT']."/Registro motos";
  include $dir.'/controlador/BitacoraControlador.php';

  try {
    echo BitacoraControlador::agregarBitacora($_POST['txtDescrip']);
  } catch (\Exception $e) {
    echo $e;
  }


?>
